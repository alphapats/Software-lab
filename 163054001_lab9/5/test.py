from itertools import chain, combinations
from functools import reduce

def powerset1(s):
	result=[[]]
	for x in s:
		result=result+[y +[x] for y in result]
	return(result)

k=powerset({1,2,3,4})
print(k)
