from functools import reduce

def Lcollapse(L):
	ele=reduce((lambda x,y:x+y),L)
	return(reduce((lambda x,y:x+" "+y),ele))

#r=Lcollapse ([ ["there","will"], ["be", "a", "python"], ["quiz", "next", "week."]])

#print(r)
#for z in r:
#	print(z)

