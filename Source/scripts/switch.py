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
if sys.argv[1] == "console":
	print nova.servers.get_vnc_console(sys.argv[2],"novnc")
elif sys.argv[1] == "log": 
	print nova.servers.get_console_output(sys.argv[2],length=60)
elif sys.argv[1] == "diag": 
	print nova.servers.diagnostics(sys.argv[2])
elif sys.argv[1] == "start": 
	nova.servers.start(sys.argv[2])
elif sys.argv[1] == "shutdown": 
	nova.servers.stop(sys.argv[2])
elif sys.argv[1] == "pause": 
	nova.servers.pause(sys.argv[2])
elif sys.argv[1] == "resume": 
	nova.servers.unpause(sys.argv[2])
elif sys.argv[1] == "lock": 
	nova.servers.lock(sys.argv[2])
elif sys.argv[1] == "unlock": 
	nova.servers.unlock(sys.argv[2])
elif sys.argv[1] == "rebsoft": 
	nova.servers.reboot(sys.argv[2], reboot_type='SOFT')
elif sys.argv[1] == "rebhard": 
	nova.servers.reboot(sys.argv[2], reboot_type='HARD')
elif sys.argv[1] == "snapshot": 
	nova.servers.create_image(sys.argv[2], "snapshot",metadata=None)
elif sys.argv[1] == "delete": 
	nova.servers.delete(sys.argv[2])
else: 
	print "please choose an action"

