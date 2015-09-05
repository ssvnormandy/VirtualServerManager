<p><b>Application overview:</b></p>
<p>a Python, Openstack and PHP based server management console. currently it only works on linux.</p>
<p><b>Feature list</b></p>
* Overview: Provides a clean overview of the dashboard and the available features.
* Console: A VNC console for the virtual server.
* Log: Provides console log in text format for the virtual server.
* Diagnostics: Preview some diagnostics data such as CPU time and HDD errors.
* Start, shutdown, pause, resume and delete server
* Lock & unlock server.
* Soft reboot & hard reboot.
* Create snapshot.
* Buy now: Redirects to the sales page.
<br>

<p><b>Installation guide:</b></p>
<p>1-Put the &quot;scripts&quot; file in your &quot;/&quot; directory and give it execute permissions for all users..</p>

<p>2-Add the &quot;Earthlink&quot; folder to your Apache documents root or your physical server..</p>

<p>3-Modify the two files in the &quot;scripts&quot; folder with your openstack authentication info &quot;username, password, authentication URL and tenant name&quot;.&quot;.</p>

<p>4-Add a database entry in mariaDB with the name &quot;usser&quot; and create two tables &quot;users&quot; &amp; &quot;servers&quot; the &quot;users&quot; table should have (id PRIMARY, user_name, user_mail, user_pass) rows and the servers name should contain (id PRIMARY, server_id).</p>

<p>The server can then be acessed on it's IP address from any machine on the network provided that the other server hosting the openstack infrastructure is also in the same subnet.</p>

<p><b>Note: the functionality is very limited at the current release and more compatibilty and bug fixes are in order. Also, more functionality is to be added such as multi-servers per user and some telemetry functions providing CPU, RAM and Disk usage and some security parameters</b></p>

<p>Below are some screenshots of the core functionality of the management system:</p>
<p>The Login and signup window with some service information</p>
<a href="http://imgur.com/XPL4eeM"><img src="http://i.imgur.com/XPL4eeM.png" title="source: imgur.com" /></a>
<p>The main dashboard to select an action from, including start & stop, lock & unlock, create snapshot image and many other options which can be seen in the picture</p>
<a href="http://imgur.com/PLC0pV1"><img src="http://i.imgur.com/PLC0pV1.png" title="source: imgur.com" /></a>
<p>The server console</p>
<a href="http://imgur.com/2X9DwAW"><img src="http://i.imgur.com/2X9DwAW.png" title="source: imgur.com" /></a>
<p>The sales page with various server sizes and flavors to choose from</p>
<a href="http://imgur.com/5XBaqn0"><img src="http://i.imgur.com/5XBaqn0.png" title="source: imgur.com" /></a>
<p>The server diagnostics page</p>
<a href="http://imgur.com/7WjmqKF"><img src="http://i.imgur.com/7WjmqKF.png" title="source: imgur.com" /></a>
<p>The server log windows</p>
<a href="http://imgur.com/aeAoysV"><img src="http://i.imgur.com/aeAoysV.png" title="source: imgur.com" /></a>
<br>

