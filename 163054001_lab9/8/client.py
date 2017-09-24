import socketserver
import sys
import socket
from Crypto import Random
from Crypto.PublicKey import RSA


Host=sys.argv[1]
Port=int(sys.argv[2])
data=bytes(sys.argv[3],'utf-8')
    
server_address=(Host,Port)
sock = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
try:
    sock.connect(server_address)
    print("connected to",Host)
    print("Requesting public key")
    request=bytes("get public key",'utf-8')
    sock.send(request)

    recd=sock.recv(1024)
    public_key = RSA.importKey(recd)
    recd=str(recd)
    recd=recd.replace("-----BEGIN PUBLIC KEY-----",'')
    recd=recd.replace("-----END PUBLIC KEY-----",'')
    print ("Recieved public key:",recd)
    encrypted_data = public_key.encrypt(data, 32)
    sock.sendall(bytes(str(encrypted_data),'utf-8'))
     
finally:
    sock.close()


 

