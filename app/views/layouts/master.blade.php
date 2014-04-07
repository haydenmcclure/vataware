<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Pinnacle of VATSIM Statistics | vataware</title>

    <!-- Bootstrap -->
    <link href="{{ asset('assets/stylesheets/bootstrap.css') }}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="navbar navbar-default navbar-fixed-top" style="position: relative;">
    <div class="container">
        <div class="navbar-header" id="loginNavbar">
            <a href="#" class="navbar-brand"><i class="fa fa-user"></i> Pilot Login</a> | <a href="#" class="navbar-brand"><i class="fa fa-users"></i> Airline Login</a> <a href="#" class="navbar-brand"><i class="fa fa-file-o"></i> Register</a>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">

            <ul class="nav navbar-nav">
                <li>
                    <a href="#"><i class="fa fa-user"></i> Pilot Login</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-users"></i> Airline Login</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-file-o"></i> Not a member? <span style="color:#18bc9c;">Register</span></a>
                </li>

            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="http://builtwithbootstrap.com/">Hello, <span style="color:#18bc9c;">Liam!</span></a></li>
                <li><a href="https://www.facebook.com/vataware" target="_blank" style="font-size:24px;"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://www.twitter.com/vataware" target="_blank" style="font-size:24px;"><i class="fa fa-twitter"></i></a></li>
            </ul>

        </div>
    </div>
</div>
<div class="logoBar">
    <div class="container">
        <div class="col-lg-3">
            <img src="{{ asset('assets/images/logo.png') }}" style="width:100%; margin-top:20px; margin-bottom: 40px;" />
        </div>
        <div class="col-lg-7 pull-right mainNav" style="top: 40px;">
            <ul class="nav navbar-nav">
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">News</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes"><i class="fa fa-angle-down" style="color:#18bc9c;"></i> Services</a>
                    <ul class="dropdown-menu" aria-labelledby="themes">
                        <li><a href="#"><i class="fa fa-angle-right"></i>&nbsp; Route Finder</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i>&nbsp; Weather Centre</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i>&nbsp; Resources</a></li>
                    </ul>
                </li>
                <li><a href="#">Pilots</a></li>
                <li><a href="#">ATC</a></li>
                <li><a href="#">Forum</a></li>
            </ul>
        </div>
    </div>
</div>
    <iframe src="http://www.klausbasan.de/vatgm/DisplayInclude.htm" class="mapContainer"></iframe>
<div class="smallMapStats">
PILOTS ONLINE: <span style="color:#138995;">500</span>&nbsp; &nbsp; ATC ONLINE: <span style="color:#138995;">300</span>
</div>
<div class="searchFieldContainer">
    <div class="container">
        <div class="col-lg-3" style="text-align: center;">
            <img src="{{ asset('assets/images/separator.png') }}" class="searchSeparator" />
            <div style="margin-top:10px;">
            <small>who are you</small><br />
            looking for?
            </div>

        </div>
        <div class="col-lg-1" style="text-align:center; margin-top:10px;">
            find<br />them!
            </div>
        <div class="col-lg-6">
            <input type="text" placeholder="enter name, ID or callsign..." class="homeSearchBox">
        </div>
        <div class="col-lg-1">
            <button type="button" class="btn btn-primary" style="margin-top: 26px; ">Search</button>
        </div>
    </div>
</div>
<div class="container"><br /><br />
    <div class="col-lg-12" style="text-align: center;">
        <div class="center">
            <a href="#" class="tiles" style="background-color:#138995;">
                <div style="margin-top: 50px;">
                    <i class="fa fa-user" style="font-size:50px; margin-bottom: 15px;"></i><br />
                    Pilot Information
                </div>
            </a>
            <a href="#" class="tiles" style="background-color:#199caa;">
                <div style="margin-top: 50px;">
                    <i class="fa fa-desktop" style="font-size:50px; margin-bottom: 15px;"></i><br />
                    ATC Information
                </div>
            </a>
            <a href="#" class="tiles" style="background-color:#1cb1c1;">
                <div style="margin-top: 50px;">
                    <i class="fa fa-sun-o" style="font-size:50px; margin-bottom:15px;"></i><br />
                    Weather Information
                </div>
            </a>
            <a href="#" class="tiles" style="background-color:#1fbfcf;">
                <div style="margin-top: 50px;">
                    <i class="fa fa-globe" style="font-size:50px; margin-bottom: 15px;"></i><br />
                    Statistics
                </div>
            </a>
            <a href="#" class="tiles" style="background-color:#22cbdc;">
                <div style="margin-top: 50px;">
                    <i class="fa fa-cloud-download" style="font-size:50px; margin-bottom: 15px;"></i><br />
                    Resources
                </div>
            </a>
        </div>
    </div>
</div>
<div class="container">
    <div class="col-lg-12">
        <h2>Statistics:</h2>
        <div class="well well-sm">
            <div class="container">
                <div class="col-lg-1 homeStats" style="border-right:3px solid #2e7d7d; padding:0;">
                    <h2>628</h2>
                    <small>Users Online</small>
                </div>
                <div class="col-lg-2 homeStats" style="border-right:3px solid #92c36f; width: 15.666667%;">
                    <h2>1,892</h2>
                    <small>Flights Today</small>
                </div>
                <div class="col-lg-2 homeStats" style="border-right:3px solid #ee592f;">
                    <h2>11,157</h2>
                    <small>Flights This Month</small>
                </div>
                <div class="col-lg-2 homeStats" style="border-right:3px solid #92c36f;">
                    <h2>130,344</h2>
                    <small>Flights This Year</small>
                </div>
                <div class="col-lg-2 homeStats" style="border-right:3px solid #ee592f;">
                    <h2>11%<sup><i style="color:#138995; font-size: 17px;" class="fa fa-long-arrow-up"></i> </sup></h2>
                    <small>Compared to last year</small>
                </div>
                <div class="col-lg-1 homeStats" style="border-right:3px solid #398483;">
                    <h2>602</h2>
                    <small>Pilots Online</small>
                </div>
                <div class="col-lg-1 homeStats">
                    <h2>56</h2>
                    <small>ATC Online</small>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer">
    <div class="container">
        <div class="col-lg-12" style="margin-top:20px;">
            <div class="pull-right" style="font-size:29px; position:absolute; right:0;">
                <a href="#" style="color:white;"><i class="fa fa-facebook" style="margin-right: 10px;"></i></a><a href="#" style="color:white;"><i class="fa fa-twitter" style="margin-right: 10px;"></i></a><a href="#" style="color:white;"><i class="fa fa-rss" style="margin-right: 10px;"></i></a>
            </div>
            <a href="#" class="footerActive">Home</a>&nbsp;&nbsp;&bull;&nbsp;&nbsp;<a href="#">News</a> &nbsp;&bull;&nbsp; <a href="#">Services</a> &nbsp;&bull;&nbsp; <a href="#">Pilots</a> &nbsp;&bull;&nbsp; <a href="#">ATC</a> &nbsp;&bull;&nbsp; <a href="#">Forum</a> &nbsp;&bull;&nbsp; <a href="#">Contact</a><br />
            <br />&copy; 2014 <a href="#" style="color:white; font-weight:bold;">vataware</a> All rights reserved.
        </div>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>