import socketserver

class ServerHandler(socketserver.BaseRequestHandler):

    def handle(self):
        self.data = self.request.recv(1024).strip()
        print("Connected to host ip:{}".format(self.client_address[0]))
        print ("Received {} from {}".format(self.data,self.client_address[0]))
        print ("Sent {} to {}".format(self.data[::-1],self.client_address[0]))
        self.request.sendall(self.data[::-1])


if __name__ == "__main__":
    HOST, PORT = "localhost", 5000
    server = socketserver.TCPServer((HOST, PORT), ServerHandler)
    print("Server started waiting for client to connect...")
    server.serve_forever()