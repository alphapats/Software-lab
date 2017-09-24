import sys

def make_list(x):
	#Code to process the input file and return a list l
	list1=[]
	f=open(x)
	for line in f:
		element = line.strip()
		list1.append(int(element))
	return list1


def mysort(l):
	#Code to sort the file should be written here.
	#Print the sorted list.
	length=len(l)
	for i in range(0,length):
		for j in range(i+1,length):
			if int(l[i])>int(l[j]):
				temp=l[i]
				l[i]=l[j]
				l[j]=temp
	return (l)


#inputlist = make_list(sys.argv[1])
#mysort(inputlist)
#for element in m:
#	print element
