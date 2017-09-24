
import sys
import facebook


graph = facebook.GraphAPI(access_token=sys.argv[1])
profile = graph.get_object("me")

friends = graph.get_connections(id='me', connection_name='friends')

f_name=profile["first_name"]
l_name=profile["last_name"]

print ("First name :",f_name)
print ("Last name :",l_name)
for key in friends['summary']:
	print ("Number of friends :",(friends['summary'][key]))
 

#friend_list = [friend['name'] for friend in friends['data']]

#print total_count