# VirtualServerManager
v0.1 pre-Alpha …
a Python, Openstack and PHP based server management console
currently only works on linux, to get it working, please follow the
steps below:
1-Put the "scripts" file in your "/" directory and give it execute
permissions for all users
2-Add the "Earthlink" folder to your Apache documents root or your
physical server
3-Modify the two files in the "scripts" folder with your openstack
authentication info "username, password, authentication URL and tenant
name"
4-Add a database entry in mariaDB with the name "usser" and create two tables "users" & "servers"
the "users" table should have (id PRIMARY, user_name, user_mail, user_pass) rows and the servers name should contain (id PRIMARY, server_id)

note: the functionality is very limited at the current release and more compatibilty and bug fixes are in order

