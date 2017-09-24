import sys

def make_list(l1):
	#Code to process the input file and return a list l
	list1=[]
	f=open(l1)
	for line in f:
		list1.append (line.rstrip().split(" "))
	return list1
	#pass

def column_collapse(L):
	#Code to process the input file and return a list l
	maxlen=0
	for ele in L:
		len1 =len(ele)
		if len1 >= maxlen:
			maxlen = len1
	count =[0]*maxlen
	
	for x in L:
		m=0
		for y in x:
			count[m]=count[m]+int(y)
			m=m+1
			print(count)
	return (count)
	#pass 
	
#column_collapse(make_list(sys.argv[1]))
input=[[4, 5, 7], [8, 2, 6, 10], [2, 3]]
expected=[14, 10, 13, 10]

output=column_collapse(input)

