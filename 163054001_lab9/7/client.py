import socketserver
import sys
import socket

def ispalindrome(host,port,s):
    Host=host
    Port=int(port)
    data=bytes(s,'utf-8')
    
    server_address=(Host,Port)
    sock = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
    try:
        sock.connect(server_address)
        #print("connected to",(Host,Port))
        #print("Sending  :", data)
        sock.send(data)
        received = str(sock.recv(1024))
    finally:
        sock.close()

    #print("Sent:     {}".format(data))
    #print("Received: {}".format(received))
    if(format(data)==format(received)):
        return (True)
    else:
        return(False)


x=ispalindrome(sys.argv[1],sys.argv[2],sys.argv[3])
print ("ispalindrome returns ",x)
