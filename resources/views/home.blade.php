<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Vertical Affix Menu [CSS only]  - Bootsnipp.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
    
    <style type="text/css">
        /* make sidebar nav vertical */ 
        @media (min-width: 768px) {
            .affix-content .container {
                width: 700px;
            }   
            html,body {
                background-color: #f8f8f8;
                height: 100%;
                overflow: hidden;
            }
            .affix-content .container .page-header {
                margin-top: 0;
            }
            .sidebar-nav {
                position:fixed; 
                width:100%;
            }
            .affix-sidebar{
                padding-right:0; 
                font-size:small;
                padding-left: 0;
            }  
            .affix-row, .affix-container, .affix-content {
                height: 100%;
                margin-left: 0;
                margin-right: 0;    
            } 
            .affix-content {
                background-color:white; 
            } 
            .sidebar-nav .navbar .navbar-collapse {
                padding: 0;
                max-height: none;
            }
            .sidebar-nav .navbar {
                border-radius:0; 
                margin-bottom:0; 
                border:0;
            }
            .sidebar-nav .navbar ul {
                float: none;
                display: block;
            }
            .sidebar-nav .navbar li {
                float: none;
                display: block;
            }
            .sidebar-nav .navbar li a {
                padding-top: 12px;
                padding-left: 60px;
                padding-bottom: 12px;
            }  
        }
        @media (min-width: 769px) {
            .affix-content .container {
                width: 600px;
            }
            .affix-content .container .page-header {
                margin-top: 0;
            }  
        }
        @media (min-width: 992px){
            .affix-content .container {
            width: 900px;
            }
            .affix-content .container .page-header {
            margin-top: 0;
            }
        }
        @media (min-width: 1220px) {
            .affix-row {
                overflow: hidden;
            }
            .affix-content {
                overflow: auto;
            }
            .affix-content .container {
                width: 1000px;
            }
            .affix-content .container .page-header{
                margin-top: 0;
            }
            .affix-content{
                padding-right: 30px;
                padding-left: 30px;
            }  
            .affix-title{
                border-bottom: 1px solid #ecf0f1; 
                padding-bottom:10px;
            }
            .navbar-nav {
                margin: 0;
            }
            .navbar-collapse{
                padding: 0;
            }
            .sidebar-nav .navbar li a:hover {
                background-color: #428bca;
                color: white;
            }
            .navbar-nav>.active > a {
                background-color: #428bca !important;
                color: white !important;
            }
            /*
            .sidebar-nav .navbar li a > .caret {
                margin-top: 8px;
            } 
            */
        }
    </style>
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    
</head>
<body>
    <div class="row affix-row">
        <div class="col-sm-3 col-md-2 affix-sidebar">
            <div class="sidebar-nav">
                <div class="navbar navbar-default" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                    </div>
                    <div class="navbar-collapse collapse sidebar-navbar-collapse">
                        <ul class="nav navbar-nav" id="sidenav01">
                            <li>
                                <a href="#" data-toggle="collapse" data-target="#toggleDemo0" data-parent="#sidenav01" class="collapsed">
                                    <h4 style="color:#000000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>MENU</b></h4></a>
                            </li>
                            <li>
                                <a href="#"><span class="glyphicon glyphicon-pencil"></span> &nbsp;&nbsp;Create Form</a>
                            </li>
                            <li>
                                <a href="/profile"><span class="glyphicon glyphicon-file"></span> &nbsp;&nbsp;View Data</a>
                            </li>
                            <li>
                                <a href="/profile"><span class="glyphicon glyphicon-user"></span> &nbsp;&nbsp;View Profile</a>
                            </li>
                            <!--
                            <li>
                                <a href="#"><span class="glyphicon glyphicon-calendar"></span> WithBadges 
                                <span class="badge pull-right">42</span></a>
                            </li>
                            -->
                            <li>
                                <a href="/auth/logout"><span class="glyphicon glyphicon-log-out"></span> &nbsp;&nbsp;Log Out</a>
                            </li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class="col-sm-9 col-md-10 affix-content">
            <div class="container">
                <div class="page-header">
                    <h3><b style="color:#4a89dc">MEA</b> -  Mobile ESAS Applicaiton</h3>
                </div>
                <br/><br/><br/><br/>
                <div id="text" class=" col-xs-12 col-sm-12  col-md-5 col-lg-5 col-md-offset-3 col-lg-offset-3">
                    <h1>
                        <u>Hello, {{Auth::user()->firstname}} {{Auth::user()->lastname}} !</u>
                        <br/><br/>
                        <small style="font-size:50%; color:#383838;">
                        <a href="http://time.is/Philippines" id="time_is_link" rel"nofollow"> The time is </a>
                        <span id="Philippines_z42c" style="font-size:36px"></span>
                        <script src="http://widget.time.is/t.js"></script>
                        <script>
                             time_is_widget.init({
                                Philippines_z42c: {
                                    template:"TIME", time_format:"12hours:minutes:seconds AMPM"
                                }
                             });
                        </script>
                        <br/>Please navigate through the site using the sidebar menu on the left.
                        </small>
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript"></script>
</body>
</html>