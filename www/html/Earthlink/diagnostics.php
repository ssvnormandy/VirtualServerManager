<?php
    ob_start();
    session_start();
    if (!isset($_SESSION['sessionname'])) {
        header('Location: index.php');
        exit();
    }
  ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
  	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
  	<meta charset="utf-8">
  	<title>Welcome!</title>
  	<meta name="generator" content="Bootply" />
  	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  	<link href="styles/bootstrap.min.css" rel="stylesheet">
  	<link href="styles/styles_dash.css" rel="stylesheet">
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
		<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$(".warning").click(function() {
					confirm("Are you sure?");
				});
			});
		</script>
  </head>
  <body>
  	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  		<div class="container-fluid">
  			<div class="navbar-header">
  				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
  					<span class="sr-only">Toggle navigation</span>
  					<span class="icon-bar"></span>
  					<span class="icon-bar"></span>
  					<span class="icon-bar"></span>
  				</button>
  				<a class="navbar-brand" href="#">Earthlink Tele</a>
  			</div>
  			<div class="navbar-collapse collapse">
  				<ul class="nav navbar-nav navbar-right">
  					<li><a href="log_out.php">Logout</a></li>
  				</ul>
  			</div>
  	</nav>
  	<div class="container-fluid">
  		<div class="row row-offcanvas row-offcanvas-left">
  			<div class="col-sm-3 col-md-2 sidebar-offcanvas" id="sidebar" role="navigation">
  				<ul class="nav nav-sidebar">
  					<li><a href="dashboard.php">Overview</a></li>
  					<li><a href="console.php">Console</a></li>
  					<li><a href="log.php">Log</a></li>
  					<li class="active"><a href="#">Diagnostics</a></li>
  					<li><a href="scripts/start.php">Start server</a></li>
  					<li><a href="scripts/stop.php" class="warning">Shutdown Server</a></li>
  					<li><a href="scripts/pause.php">Pause server</a></li>
  					<li><a href="scripts/resume.php">Resume server</a></li>
  					<li><a href="scripts/lock.php" class="warning">Lock Server</a></li>
  					<li><a href="scripts/unlock.php">Unlock Server</a></li>
  					<li><a href="scripts/soft.php" class="warning">Soft reboot</a></li>
  					<li><a href="scripts/hard.php" class="warning">Hard Reboot</a></li>
						<li><a href="scripts/snap.php">Create snapshot</a></li>
            <li><a href="scripts/delete.php" class="warning">Delete server</a></li>
            <li><a href="buy.php">Buy Now</a></li>
  				</ul>
  			</div>
							<div>
								<pre>
                  <object type="text/html" data="scripts/diagnostics.php" width="900px" height="600px">
								</pre>
  						</div>
  					</div>
  					<hr>
  			</div>
  		</div>
  	</div>
  	<footer>
  		<p class="pull-right">Hosted by Earthlink Telecom</p>
  	</footer>
  </body>
  </html>
<?php ob_end_flush(); ?>
