<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>MEA Admin Tool</title>
		
		<!-- Bootstrap Core CSS -->
	    <link href="css/bootstrap.css" rel="stylesheet">
	
	    <!-- MetisMenu CSS -->
	    <link href="css/metisMenu.css" rel="stylesheet">
	
	    <!-- Custom CSS -->
	    <link href="css/sb-admin-2.css" rel="stylesheet">
	
	    <!-- Custom Fonts -->
	    <!-- <link href="bootstrap/font-awesome.css" rel="stylesheet" type="text/css"> -->
		
	</head>
	<body>
		<div id="wrapper">

	        <!-- Navigation -->
	        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
	            <div class="navbar-header">
	                <span class="navbar-brand">MEA Administrator Tool</span>
	            </div>
	
	            <div class="navbar-default sidebar" role="navigation">
	                <div class="sidebar-nav navbar-collapse">
	                    <ul class="nav" id="side-menu">
	                        <li>
	                            <a href="main.php"><span class="glyphicon glyphicon-tasks"></span> &nbsp; Main Menu</a>
	                        </li>
	                        <li>
	                            <a href="view.php"><span class="glyphicon glyphicon-list-alt"></span> &nbsp; View Patient Data</a>
	                        </li>
	                        <li>
	                            <a href="create.php"><span class="glyphicon glyphicon-pencil"></span> &nbsp; Create New Patient Account</a>
	                        </li>
	                        <li>
	                            <a href="settings.php"><span class="glyphicon glyphicon-cog"></span> &nbsp; Account Settings</a>
	                        </li>
	                        <li>
	                            <a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> &nbsp; Log Out</a>
	                        </li>
	                    </ul>
	                </div>
	                <!-- /.sidebar-collapse -->
	            </div>
	            <!-- /.navbar-static-side -->
	        </nav>
	
	        <!-- Page Content -->
	        <div id="page-wrapper">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-lg-12">
	                    <!-- Splash page content -->
                            
                            <br>
                            
	                        @yield('content')
                            
	                    <!-- End of splash page content -->
	                    </div>
	                    <!-- /.col-lg-12 -->
	                </div>
	                <!-- /.row -->
	            </div>
	            <!-- /.container-fluid -->
	        </div>
	        <!-- /#page-wrapper -->
	
	    </div>
	    <!-- /#wrapper -->
	
	    <!-- jQuery -->
	    <script src="js/jquery.min.js"></script>
	
	    <!-- Bootstrap Core JavaScript -->
	    <script src="js/bootstrap.min.js"></script>
	
	    <!-- Metis Menu Plugin JavaScript -->
	    <script src="js/metisMenu.min.js"></script>
	
	    <!-- Custom Theme JavaScript -->
	    <script src="js/sb-admin-2.js"></script>
	</body>
</html>