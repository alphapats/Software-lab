import numpy as np
import statistics 
import matplotlib.pyplot as plt
import sys

plt.title('RECORD Vs MEAN VALUE,VARIANCE & STD DEVIATION')
plt.xlabel('Record Nos')
plt.ylabel('Calculated Value')
#plt.ylim(1.00,4.00)
#plt.xlim(0,100)
plt.grid(True)
#x =np.loadtxt('data', delimiter=' ', unpack=True)
#
filedata = open(sys.argv[1]) 

x1=[]
x2=[]
avg=[]
variance=[]
stddev=[]

for line in filedata:
	p=(line.split(","))
	for x in p:
		x1.append(float(x))
	avg.append(np.mean(x1))
	stddev.append(np.std(x1))
	variance.append(np.var(x1))
	x1=[]
	

plt.plot(avg, label='Mean')
plt.plot(stddev ,label='Standard deviation')
plt.plot(variance,label='Variance')
#print(count)
#plt.bar(x2, y2, color='g', align='center')
	#avg=statistics.mean(float(x))


#avg=statistics.mean(x1)
#print(x)
plt.legend(loc='upper right')
plt.show()