import sys
import numpy as np
def make_list():
	#Code to process the input file and return a list l
	list1=[]
	f=open(sys.argv[1])
	for line in f:
		element = line.strip()
		list1.append(int(element))
	return list1


def binsearch(l,x):
	#Code to search the number x in l.
	#print the number of steps taken to reach x
	list=l
	length=len(list)
	first=0
	last=length-1
	found=0
	while(first<=last):
		mid=(first + last)//2
		midindex=mid
		if (x == list[mid]):
			return (midindex)
			found=1
			break
		elif (x < list[mid]):
			last=mid-1
		elif(x > list[mid]):
			first=mid+1
	if(found==0):
		return (-1)

givenlist=make_list()
print(binsearch(givenlist,int(sys.argv[2])))

def quicksort(arr):
    if len(arr) <= 1:
        return arr
    pivot = arr[len(arr) // 2]
    left = [x for x in arr if x < pivot]
    middle = [x for x in arr if x == pivot]
    right = [x for x in arr if x > pivot]
    return quicksort(left) + middle + quicksort(right)


x= quicksort([3,6,8,10,1,2,1])
print(x)

x= np.array([[1,2],[3,4]])
y=np.array([[5,6],[7,8]])
#print(x+y)
#print (np.add(x, y))
#print (np.sum(x))

#matrix multiploication

x = np.array([[1,2],[3,4]])
y = np.array([[5,6],[7,8]])

v = np.array([9,10])
w = np.array([11, 12])

# Inner product of vectors; both produce 219
print (v.dot(w))
print (np.dot(v, w))

# Matrix / vector product; both produce the rank 1 array [29 67]
print (x.dot(v))
print (np.dot(x, v))

# Matrix / matrix product; both produce the rank 2 array
# [[19 22]
#  [43 50]]
print (x.dot(y))
print (np.dot(x, y))
print(x.T) #transpose of x
 
