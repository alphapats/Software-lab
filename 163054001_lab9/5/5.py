from itertools import chain, combinations

def powerset(s):
	length=len(s)
	#result=[[]]
	return set(chain.from_iterable(combinations(s, y) for y in range(length+1)))
	#for y in s:
		#result.extend([x + [y] for x in result])
        

m=powerset({1,2,3,4})
print(m)
k={1,2,3,4}
l=[]

for y in range(len(k)+1):
	x=(combinations(k, y))
	l.extend(x)
print(set(l))