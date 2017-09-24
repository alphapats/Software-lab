from problem2 import binsearch


input=[2, 3, 6, 6, 7, 9, 10, 11, 13, 15, 17, 18, 19, 21, 22, 23, 26, 27, 28, 31, 32, 34, 35, 36, 37, 38, 39, 40, 41, 43, 44, 46, 48, 49, 50, 51, 52, 54, 55, 57, 58, 60, 62, 63, 66, 68, 70, 71, 73, 74, 75, 77, 79, 80, 81, 82, 84, 86, 87, 88, 89, 91, 92, 94, 95, 97, 98, 99, 100]

output=binsearch(input, 91)

if output==61:
	print("Testcase1 Pass")
else:
	print("Testcase1 Fail")

output=binsearch(input, 15)

if output==9:
	print("Testcase2 Pass")
else:
	print("Testcase2 Fail")

output=binsearch(input, 101)

if output==-1:
	print("Testcase3 Pass")
else:
        print("Testcase3 Fail")
