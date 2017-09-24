from problem4 import det

input=[[1, 3, 6], [5, 8, 4], [3, 9, 7]]

output=det(input)

if output==77:
	print("Testcase1 Pass")
else:
	print("Testcase1 Fail")

input=[[5, 9, 4, 2], [12, 7, 8, 6], [5, 8, 3, 8], [3, 9, 2, 1]]

output=det(input)

if output==-337:
	print("Testcase2 Pass")
else:
	print("Testcase2 Fail")

