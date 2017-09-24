from functools import reduce
from itertools import accumulate
from itertools import product
from itertools import permutations
from itertools import combinations,chain
import math
import sys
from fractions import Fraction
import cmath
import math

def func(l):
	g=(reduce(lambda a,b: a+b,l))
	h=(reduce(lambda a,b: a+" " +b,g))
	print (g)
	print(h)


def make_list(l1):
	#Code to process the input file and return a list l
	list1=[]
	f=open(l1)
	for line in f:
		list1.append (line.rstrip().split(" "))
	return list1
	#pass


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


def isequal(l1,l2):
	eq=0
	x=len(l1)
	y=len(l2)
	#print(x,y)
	if x==y:
		i=0
		j=0
		
		while i<x and j<y and l1[i]==l2[j]:
			eq=1
			#print(i,j)
			i=i+1
			j=j+1
		
		#print(x,y)
		#print(i,j)
		if i<x:
			eq=0
		elif j<y:
			eq=0
	else:
		eq=0
	return eq

'''
 function : split_on_pivot (l, index)
		l is an non-sorted list of numbers
		split list l in two lists l1 and l2 such that 
			all elements strictly smaller than l[index] are in l1,
			and all elements strictly greater than l[index] are in l2.

		return a list containing the two lists which have been just created. 


		e.g. split_on_pivot ([3,1,22,5,7,4],4) produces
				[[3,1,5,4],[22]]
'''


def split_on_pivot (l, index):
	l1=[]
	l2=[]
	l3=[]
	for i in range(0,len(l)):
		if l[i] < l[index]:
			l1.append(l[i])
		elif l[i] > l[index]:
			l2.append(l[i])
	#print(l1)
	#for i in range(index+1,len(l)):
	#	l2.append(l[i])
	#print(l2)
	l3.append(l1)
	l3.append(l2)
	return(l3)

def build(fname):
	f= open(fname,'r')
	di={}
	aa=[]
	for line in f:
		l1=line.strip();
		li=l1.rsplit(':')
		x,y=l1[0],li[1]
		di[x]=y
	return di

def getmeaning(dictionary, word):
	return dictionary.get(word,'word not found')  # method 1 using dict.get() or method 2 using word in dictionary
	if word in dictionary:
		return dictionary[word]
	else:
		return 'word not found'

def getwords (dictionary, w):
	found=[]
	for word in dictionary:
		if w in dictionary[word]:
			found.append(word)
			#print(word)
	return found

l1=[4,5,8,9,22,1,2,3,10,12,13,4,22,222,34]
l2=[4,5,6]
ans=split_on_pivot(l1,4)
print(ans,l1[4])

dix=build('dict.txt')
print(dix)
print(abs(cmath.sin(math.pi)))
print(math.log(8,2))
print(int(math.sin(math.pi)))

d = 2 ** 3
print (d)

e = -5 / 3     
print (e)

f = -5 // 3   
print (f)

def p(filen):
	str=['amkii','vg','fg']
	a=len(str)-1
	print (str[0])
	l=[]
	for x in range(a):
		word=str[(a-x)]
		print(word)
	print(l)

l=['asd','gh','34']
print(reduce(lambda x,y:x+y ,l))
str=['amkii','vg','fg']
a=len(str)-1
print (str[0])
l=[]
str2=sys.argv[1]
length=len(str2)
str3=""
for x in range(length):
	print (x)
	str3=str3+str2[length-x-1]
	print(str3)
if(str2==str3):
	print("yes")
else:
	print("no")

print(l)
'''
CMATH :COMPLEX MATH
e=1+2j
f=7+8j
g=e+f
print (g)

h=e*f
print(cmath.polar(g))
print(cmath.phase(h))
print(cmath.sin(3.14))
print (h)

print (h.real)
print (h.imag)

#print(list(map(lambda x,y:x+y,l1,l2)))
#print(list(filter(lambda a:a%b==0,l1)))
#print(reduce(lambda a,b:a if a>b else b,l1))
#l1=make_list()

print(list(permutations([1,2,3],2)))
print(list(combinations([1,2,3],2)))
l=[]
print(list(chain.from_iterable(combinations([1,2,3], y) for y in range(4))))
for y in range(1,4):
	x=list(combinations([1,2,3], y))
	l.extend(x)
print(l) 
'''