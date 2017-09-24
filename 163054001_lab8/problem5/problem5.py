import sys
def make_list(arg):
    	#Code to process the input file and return a list of list L
        #Code to process the input file and return a list l
	list1=[]
	f=open(arg)
	for line in f:
		element = line.strip()
		list1.append(element)
	return list1
        #return L


def freqcount(L):
	#freqcount() takes list of lists and saves each distint string with the count into a dictionary 
	#return dictionary
	freq = { }
	for list1 in L:
		for word in list1:
			if word not in freq:
				freq[word] =1
			else:
				freq[word] = freq[word] +1

	#for word1,freq1 in freq.items():
	#	print ("%s : %s " %(word1,freq1))
	return (freq)
	#pass

#l1=make_list()
#freqcount([['a','a','bc','ac','ab'],['bc','ac','bc'],['ab','ac','cc']]) 