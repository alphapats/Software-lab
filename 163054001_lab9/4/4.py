from itertools import product

def cartesian_product(A,B):
	return (set(product(A,B)))

#x=cartesian_product({1,2,3},{4,5,6})
#print(x)