from ping3 import ping
server = input("Targeted server:")
def myping(host):
    resp = ping(host)

    if resp == False:
        return False
    else:
        return True
        
print(myping(server))