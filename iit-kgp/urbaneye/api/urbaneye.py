import requests
import __init__
import processor.preprocess_db
from processor.node import node
from processor.edge import edge
from processor.pta import pta
import processor.dummy_processing
import processor.detectLandmarkInTrail
import sql.mysql_helper
from datetime import datetime
from collections import defaultdict
import numpy as np
import scipy
import scipy.stats
from scipy import signal
import numpy.fft as fft
import matplotlib
from processor.preprocessing import preprocessor
from numpy.linalg import inv
import sys
from sympy import *
import geopy
from geopy.distance import VincentyDistance
import processor.lib
from math import sqrt,pow

'''
CONSTANTS
'''
NOTIFY_DESTINATION = 180
FAILURE_ACCEPTABLE = 1
FAILURE_SWITCH_ROUTE = 3
NON_VOLATILE_LANDMARKS = ['Turn']
SPEED_HISTORY_THRESHOLD = 0.5
SWITCH_LANDMARK_THRESHOLD = 15
EPSILON = 0.3
'''
Storage class used to store the nodes and edges in the network
'''
class storage:

	def __init__(self):
		self.node_dict = {}
		self.edge_dict = {}

'''
Global variables:
store - stores the nodes and edges in the network
user_routes - all user routes in the network
'''
store = storage()
user_routes = defaultdict(lambda : defaultdict())
date = '2015-01-01'
'''
Create a flask application
'''
app = Flask(__name__)

## HELPER FUNCTIONS
'''
Function to convert from seconds to HH:MM:SS format
'''
def sec_to_hms(ttd):
	h = int(ttd/3600)
	m = int(ttd/60) - (h*60)
	s = int(ttd) - (m*60) - (h*3600)

	return str(ttd)

'''
Create a network graph for a given route. This graph will be a PTA.
edges - The set of edges in the network
route - Expected route of the user
valid_lms - set of landmarks to be used for creating the PTA
'''
def create_network_graph(edges, route, valid_lms):
	
	for n in graph.G.keys():
		for e in graph.G[n]:
			print e.l.Lm, e.d.Lm
	return graph

'''
Create a new PTA for a different probable route
'''
def get_new_route(uid, rlist, lastlm):

	tz = user_routes[uid]['timezone']
	g = create_network_graph(store.edge_dict[tz], rlist[0], user_routes[uid]['valid_landmarks'])
	user_routes[uid]['route_network'] = g
	for n in g.G.keys():
		if n.Lm != lastlm.Lm:
			continue
		else:
			return node, g
	return None, None
	
def perturbation_analysis(uid, dist):
	
	u = user_routes[uid]['init_speed']
	a = user_routes[uid]['acc']
	D = sqrt((u*u)+(2*a*dist))
	t0 = (D-u)/a
	t1 = -1*(((t0*t0)/((a*t0)+u))/2)
	t = t0 + (EPSILON*t1)
	#op = open('log.txt','a')
	#op.write(str(a)+' '+str(u)+' '+str(D)+' '+str(t0)+' '+str(t1)+' '+str(t)+' '+str(u+(a*t))+' '+str(dist)+'\n')
	return u + (a*t)
	
def updateguard(terr, uid, e):
	
	route_network = user_routes[uid]['route_network']
	for ed in route_network.G[e.d]:
		t = ed.g - terr
		if t > 5:
			ed.g = t
	
'''
Get the current position in the PTA from the current sample trail
uid - user id
lm - the landmark detected
lastlm - last landmark detected
'''
def search_pta(uid, lm, lastlm):

	start = lastlm
	route_info = user_routes[uid]
	route_network = route_info['route_network']
	s_id = route_info['source_id']
	d_id = route_info['dest_id']
	timezone = route_info['timezone']
	op = open('serverlog.txt','a')
	op.write(lm+' ')
	if start == '':
		for n in route_network.G.keys():
			if n.Lm != store.node_dict[timezone][s_id].Lm:
				continue
			else:
				start = n
				break
	#op.write(lm+' '+start.Lm+' ')
	op.write(start.Lm+':')
	for e in route_network.G[start]:
		op.write(e.l.Lm+' '+ e.d.Lm + ' ' + str(e.g)+' '+ str(e.s) + ' '+ str(e.p)+' '+str((user_routes[uid]['current_time'] - user_routes[uid]['last_detection_time']).total_seconds())+'\n')
	new_ldl = ''
	for e in route_network.G[start]:
		success = False
		if lm in e.d.Lm:
			time_error = (user_routes[uid]['current_time'] - user_routes[uid]['last_detection_time']).total_seconds() - e.g
			if abs(time_error) < e.s:
				success = True
				user_routes[uid]['speed_history'].append(0)
				op.write('full success '+str(time_error)+'\n')
				new_ldl = e
				break
			else:
				if lm in NON_VOLATILE_LANDMARKS:
					success = True
					user_routes[uid]['speed_history'].append(1 if time_error > 0 else -1)
					#updateguard(time_error, uid, e)
					op.write('nvl success '+str(time_error)+'\n')
					new_ldl = e
					break
				else:
					bus_speed = perturbation_analysis(uid, e.dist)
					t_expected = e.dist/bus_speed
					user_routes[uid]['init_speed'] = bus_speed
					speed_history = user_routes[uid]['speed_history']
					
					if (speed_history.count(1)/len(speed_history) > SPEED_HISTORY_THRESHOLD and t_expected > e.g) and time_error < 0:
						success = True
						user_routes[uid]['speed_history'].append(1)
						#updateguard(time_error, uid, e)
						op.write('fast success '+str(time_error)+'\n')
						#user_routes[uid]['acc'] = 0
						new_ldl = e
						break
					elif speed_history.count(-1)/len(speed_history) > SPEED_HISTORY_THRESHOLD and t_expected < e.g and time_error > 0:
						success = True
						user_routes[uid]['speed_history'].append(-1)
						#updateguard(time_error, uid, e)
						op.write('slow success '+str(time_error)+'\n')
						#user_routes[uid]['acc'] = 0
						new_ldl = e
						break
	if success:
		traverse_through = new_ldl
		op.write(' success '+e.d.Lm+'\n')
		op.write('___________________________________________________________________________________\n')
		return e.d
	if lm in NON_VOLATILE_LANDMARKS:
		op.write('nvl failure\n')
		op.write('___________________________________________________________________________________\n')
		return ''
	else:	
		for e in route_network.G[start]:
			for ed in route_network.G[e.d]:
				if lm in ed.d.Lm:
					td = (user_routes[uid]['current_time'] - user_routes[uid]['last_detection_time']).total_seconds() - ed.g
					if abs(td) < ed.s:
						op.write('skip success ' + str(td) +'\n')
						op.write('___________________________________________________________________________________\n')
						return ed.d
						
	
	if (user_routes[uid]['current_time'] - user_routes[uid]['last_detection_time']).total_seconds() + SWITCH_LANDMARK_THRESHOLD > user_routes[uid]['ttnlm']:
		op.write('time exceed success '+str(user_routes[uid]['ttnlm'])+'\n')
		return route_network.G[start][0].d
	#op.write(' failure\n')
	op.write('\nfailure\n')
	op.write('___________________________________________________________________________________\n')
	return ''
	
def get_ttd(uid, curr_node):

	ttd = 0
	sd = 0
	count = 0
	
	route_info = user_routes[uid]
	route_network = route_info['route_network']
	s_id = route_info['source_id']
	d_id = route_info['dest_id']
	timezone = route_info['timezone']
	
	ttnlms = []
	for ed in route_network.G[curr_node]:
	    ttnlms.append(ed.g)
	
	while curr_node.Lm != store.node_dict[timezone][d_id].Lm:
		tl = defaultdict(float)
		pl = []
		for e in route_network.G[curr_node]:
			if e.p not in pl:
				pl.append(e.p)
				tl[e.p] = e.g*e.p
			#ttd+=e.g*e.p
			sd += e.s*e.p
			count += 1
		if len(route_network.G[curr_node]) < 1:
		    print 'curr_node',curr_node.Lm
		    break
		curr_node = route_network.G[curr_node][0].d
		
		try:
			ttd += tl[max(pl)]
		except ValueError:
			ttd += 0
		
	print ttd
	#user_routes[uid]['acc'] = 0
	mean_sd = sd/count
	
	return ttd, mean_sd, max(ttnlms)

def getProcessedData(data,i):
	arr=[]
	for l in data:
		arr.append(float(l.split(",")[i]))
	rdata=[]
	l1 = preprocessor(arr)
	for l in l1:
		rdata.append(l)
	return rdata

def getLatLng(ldata,cdata,latlng):

	x=Symbol('x')
	lat1=latlng.split(",")[0]
	lon1=latlng.split(",")[1]
	xdata=getProcessedData(ldata,0)
	ydata=getProcessedData(ldata,1)
	zdata=getProcessedData(ldata,2)

	t=0.0
	dist=0.0
	u=0.0
	v=0.0
	s=0.0
	d_arr=[]

	for a in xdata:
		v=u+a[0]*t
		exp=integrate(u+a[0]*x,x)
		#print exp
		f=lambdify(x,exp,"numpy")
		s=f(t)
		dist=dist+s
		t=t+0.2
		u=v

	d_arr.append(dist)

	t=0.0
	dist=0.0
	u=0.0
	v=0.0
	s=0.0

	for a in ydata:
		v=u+a[0]*t
		exp=integrate(u+a[0]*x,x)
		#print exp
		f=lambdify(x,exp,"numpy")
		s=f(t)
		dist=dist+s
		t=t+0.2
		u=v

	d_arr.append(dist)

	t=0.0
	dist=0.0
	u=0.0
	v=0.0
	s=0.0

	for a in zdata:
		v=u+a[0]*t
		exp=integrate(u+a[0]*x,x)
		#print exp
		f=lambdify(x,exp,"numpy")
		s=f(t)
		dist=dist+s
		t=t+0.2
		u=v

	d_arr.append(dist)

	d=sqrt(pow(d_arr[0],2)+pow(d_arr[1],2)+pow(d_arr[2],2))/3
	b=float(cdata[7].split(",")[0])-270
	if b<0:
		b=b+360
	origin = geopy.Point(lat1, lon1)
	destination = VincentyDistance(meters=-d).destination(origin, b)

	lat2, lon2 = destination.latitude, destination.longitude
	rep=str(lat2)+","+str(lon2)
	return rep


def snaptoroad(pos):
	try:
		reqstr="https://roads.googleapis.com/v1/snapToRoads?path="+pos+"&interpolate=true&key=AIzaSyC4UK1cVNj0auLVK3MlovkMHsohNiiH-2s"
		res=requests.get(reqstr)
		jll=json.loads(res.text)
		new_pos = str(jll['snappedPoints'][0]['location']['latitude'])+","+str(jll['snappedPoints'][0]['location']['longitude'])
	except:
		new_pos = pos
	return new_pos
	
def update_acceleration(ldata, uid):
	a = 0
	for data in ldata:
		l1 = data.strip().split(',')
		a1 = float(l1[0])
		a2 = float(l1[1])
		a3 = float(l1[2])
		a+=(sqrt((a1*a1)+(a2*a2)+(a3*a3)))
	
	try:
		time_from_last_detection = (user_routes[uid]['current_time'] - user_routes[uid]['last_detection_time']).total_seconds()
	except TypeError:
		print 'typeError',user_routes[uid]['current_time']
	prev_readings = int((time_from_last_detection/3)*2)
	avg_acc = ((user_routes[uid]['acc']*prev_readings)+a)/(prev_readings+len(ldata))
	return avg_acc

def get_ttd_from_trail(ldata, cdata, uid, X, Y, Z):

	lm = processor.detectLandmarkInTrail.detect_landmark(ldata, cdata, X, Y, Z)
	
	if 'Normal' in lm or lm == user_routes[uid]['last_detected']:
		user_routes[uid]['last_landmark'].Pos = getLatLng(ldata,cdata,user_routes[uid]['last_landmark'].Pos)
		#user_routes[uid]['last_landmark'].Pos = snaptoroad(user_routes[uid]['last_landmark'].Pos)	
		res_string = sec_to_hms(user_routes[uid]['prev_ttd'])+'_sd_'+str(user_routes[uid]['prev_sd'])+'_latlng_'+user_routes[uid]['last_landmark'].Pos+'\n'
		#user_routes[uid]['prev_ttd'] -= 3.0
		
		return res_string

	user_routes[uid]['last_detected'] = lm
	
	user_routes[uid]['acc'] = update_acceleration(ldata, uid)
	print 'acc',user_routes[uid]['acc']
	
	searched_lm = search_pta(uid, lm.strip(), user_routes[uid]['last_landmark'])
	if searched_lm == '':
		user_routes[uid]['last_landmark'].Pos = getLatLng(ldata,cdata,user_routes[uid]['last_landmark'].Pos)
		#user_routes[uid]['last_landmark'].Pos = snaptoroad(user_routes[uid]['last_landmark'].Pos)
		res_string = sec_to_hms(user_routes[uid]['prev_ttd'])+'_sd_'+str(user_routes[uid]['prev_sd'])+'_latlng_'+user_routes[uid]['last_landmark'].Pos+'$$$$'+lm+'\n'
		user_routes[uid]['failure'] += 1
		#user_routes[uid]['prev_ttd'] -= 3.0
	else:
		user_routes[uid]['acc'] = 0
		user_routes[uid]['last_landmark'] = searched_lm
		ttd, mean_sd, timetonextlm = get_ttd(uid, user_routes[uid]['last_landmark'])
		
		res_string = sec_to_hms(ttd)+'_sd_'+str(mean_sd)+'_latlng_'+user_routes[uid]['last_landmark'].Pos+'$$'+lm+'\n'
		
		user_routes[uid]['prev_ttd'] = ttd
		user_routes[uid]['prev_sd'] = mean_sd
		user_routes[uid]['ttnlm'] = timetonextlm
		user_routes[uid]['failure'] = 0
		user_routes[uid]['last_detection_time'] = user_routes[uid]['current_time']
	
	if user_routes[uid]['failure'] != 0:
		g = user_routes[uid]['route_network']
		if user_routes[uid]['failure'] > FAILURE_SWITCH_ROUTE:
			rlist = user_routes[uid]['route_list']
			g = user_routes[uid]['route_network']
			if len(rlist) > 0:
				okroute = False
				while len(rlist) > 0 and okroute == False:
					llm, g = get_new_route()
					if llm:
						user_routes[uid]['last_landmark'] = llm
						for mlm in user_routes[uid]['missed_lms']:
							for e in g.G[user_routes[uid]['last_landmark']]:
								if lm in e.d.Lm:
									okroute = True
									break
							if okroute:
								break
				if okroute:
					user_routes[uid]['route_network'] = g
	return res_string

def get_orientations(acc):

	accx = []
	accy = []
	accz = []
	X,Y,Z = 0,1,2
	for a in acc:
		l1 = a.split(',')
		accx.append(float(l1[0]))
		accy.append(float(l1[1]))
		accz.append(float(l1[2]))
	avgs = [sum(accx)/len(accx),sum(accy)/len(accy),sum(accz)/len(accz)]
	Z = avgs.index(max(avgs))
	if Z == 1:
		X = 0
		Y = 2
	elif Z == 0:
		X = 1
		Y = 2
	return X,Y,Z


## Route Methods
'''
App route which is called when a sample is sent from the client.
Gets the sample trail, processes it and returns the time to destination to the client
'''
def api_ttd(uid, acc, lacc, comp):
	user_routes[uid]['current_time'] = datetime.strptime(date+' '+request.json['time'], "%Y-%m-%d %H:%M:%S")
	X,Y,Z = get_orientations(acc)
	ttd = get_ttd_from_trail(lacc, comp, uid, X, Y, Z)
	return ttd


if __name__ == '__main__':
	app.run(debug=True)
