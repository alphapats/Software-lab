import socketserver
from Crypto import Random
from Crypto.PublicKey import RSA
import socket
import sys

 #Generate private and public keys
#random_generator = Random.new().read
private_key = RSA.generate(1024, randfunc=None, progress_func=None,e=65537)
public_key = private_key.publickey()

#listen for a connection
host = sys.argv[1]
port = int(sys.argv[2])
newsocket = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
newsocket.setsockopt(socket.SOL_SOCKET, socket.SO_REUSEADDR, 1)
newsocket.bind((host,port))
newsocket.listen(1)

while 1:
    clientsock, clientaddr = newsocket.accept()
    print ("Connected to", clientaddr[0])
    received_request = ((clientsock.recv(1024)))
    #received_request  = received_request.replace("\r\n", '')
    req=bytes('get public key','utf-8')
    if (format(received_request) == format(req)):
        print ("Received get public key from" , clientaddr[0])
    else:
        print("Error in request")
    #send the public key over
    
    clientsock.send(public_key.exportKey())
    trunc_key=str(public_key.exportKey())
    trunc_key=trunc_key.replace("-----BEGIN PUBLIC KEY-----",'')
    trunc_key=trunc_key.replace("-----END PUBLIC KEY-----",'')
    print ("Sending public key:",trunc_key)
          
    #
    received_data = (clientsock.recv(1024))
    
    #received_data = received_data.replace("\r\n", '')
    received_data = eval(str(received_data.decode(encoding='UTF-8')))
    print("Recieved Encrypted data :",str(received_data))

    decrypted_data = private_key.decrypt(received_data)
    print ("Decrypted data :",decrypted_data)
    clientsock.close()