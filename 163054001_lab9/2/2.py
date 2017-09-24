def pick (L, c):
	return (set(filter(lambda L: L[0:1] == c,L)))

#x=(pick (["hello", "how", "are", "you"], "h"))
#print(x)
#for y in x:
#	print(y)
