#!/usr/bin/env python
import sys
from keystoneclient.auth.identity import v2
from keystoneclient import session
from novaclient import client
auth = v2.Password(auth_url="auth_url",
                       username="username",
                       password="password",
                       tenant_name="tenant")
sess = session.Session(auth=auth)
nova = client.Client(2, session=sess)
if sys.argv[1] == "bug": 
	nova.servers.create(sys.argv[2],"665fda31-0ce6-4cce-8417-a2718c69fe6d",42)
	List = nova.servers.list()
        for inst in List:
            if inst.name == sys.argv[2]:
                ID = inst.id
	print ID
elif sys.argv[1] == "squirrel": 
	nova.servers.create(sys.argv[2],"665fda31-0ce6-4cce-8417-a2718c69fe6d",84)
	List = nova.servers.list()
        for inst in List:
            if inst.name == sys.argv[2]:
                ID = inst.id
	print ID
elif sys.argv[1] == "rabbit": 
	nova.servers.create(sys.argv[2],"665fda31-0ce6-4cce-8417-a2718c69fe6d",1)
	List = nova.servers.list()
        for inst in List:
            if inst.name == sys.argv[2]:
                ID = inst.id
	print ID
elif sys.argv[1] == "fox": 
	nova.servers.create(sys.argv[2],"665fda31-0ce6-4cce-8417-a2718c69fe6d",2)
	List = nova.servers.list()
        for inst in List:
            if inst.name == sys.argv[2]:
                ID = inst.id
	print ID
elif sys.argv[1] == "tiger": 
	nova.servers.create(sys.argv[2],"665fda31-0ce6-4cce-8417-a2718c69fe6d",3)
	List = nova.servers.list()
        for inst in List:
            if inst.name == sys.argv[2]:
                ID = inst.id
	print ID
elif sys.argv[1] == "bear": 
	nova.servers.create(sys.argv[2],"665fda31-0ce6-4cce-8417-a2718c69fe6d",4)
	List = nova.servers.list()
        for inst in List:
            if inst.name == sys.argv[2]:
                ID = inst.id
	print ID
elif sys.argv[1] == "mammoth": 
	nova.servers.create(sys.argv[2],"665fda31-0ce6-4cce-8417-a2718c69fe6d",5)
	List = nova.servers.list()
        for inst in List:
            if inst.name == sys.argv[2]:
                ID = inst.id
	print ID
else: 
	print "please choose an action"

