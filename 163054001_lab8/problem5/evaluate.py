import sys
from problem5 import freqcount

input=[['a','a','bc','ac','ab'],['bc','ac','bc'],['ab','ac','cc']]
expected = {'a': 2, 'cc': 1, 'ac': 3, 'ab': 2, 'bc': 3}

output=freqcount(input)


if (set(expected.keys())-set(output.keys())):
	print("Fail")
	sys.exit()

for key in expected:
	if expected[key]!=output[key]:
		print("Fail")
		sys.exit()

print ("Pass")
