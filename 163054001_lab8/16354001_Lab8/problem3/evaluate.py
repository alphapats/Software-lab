from problem3 import column_collapse

input=[[4, 5, 7], [8, 2, 6, 10], [2, 3]]
expected=[14, 10, 13, 10]

output=column_collapse(input)

if output==expected:
	print("Testcase1 Pass")
else:
	print("Testcase1 Fail")

input=[[1, 2, 3], [4, 5, 4, 10, 20], [8, 1, 9, 10]]
expected=[13, 8, 16, 20, 20]

output=column_collapse(input)

if output==expected:
	print("Testcase2 Pass")
else:
	print("Testcase2 Fail")

