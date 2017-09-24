from html.parser import HTMLParser
import urllib.request, sys
import urllib.parse

linkset=[]
def links(url):
	req = urllib.request.Request(url)
	try: 
		with urllib.request.urlopen(req) as response:
			html = response.read()
		prog = MyHTMLParser()
		prog.feed(str(html))
		
	except urllib.error.URLError as e:
		print(e.reason)

	internal=set()
	external=set()
	for l in linkset:
		if(l[1][0:1] == '/'):
			internal.add(l[1])
		elif(l[1][0:5] == 'http:'):
			external.add(l[1])
		elif(l[1][0:6] == 'https:'):
			external.add(l[1])
	return(internal,external)

# create a subclass and erride the handler methods
class MyHTMLParser(HTMLParser):
	def handle_starttag(self, tag, attrs):
		if tag != 'a':
			return
		
		for attr in attrs:
			linkset.append(attr)

		
#a,b=links("http://cse.iitb.ac.in")
#print(len(a),len(b))
#print(a,b)
