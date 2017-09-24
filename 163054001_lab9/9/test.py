from htmlparser import *
import sys
internal,external=links(sys.argv[1])
for link in internal:
	print (link)
for link in external:
	print (link)