<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FastFood Restaurant</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <style type='text/css'>
        #bttop{border:1px solid #FD2243;border-radius:50px;background:#FD2243;text-align:center;padding:10px 15px 10px 15px;position:fixed;bottom:60px;right:15px;cursor:pointer;display:none;color:#fff;font-weight:900;}
        #bttop:hover{border:1px solid #ffa789;background:#ff6734;}
    </style>
    <div id='bttop'><i class="fa fa-angle-up" style="font-size: 1.6em;font-weight: bold"></i></div>
    <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js' type='text/javascript'></script>
    <script type='text/javascript'>$(function(){$(window).scroll(function(){if($(this).scrollTop()!=0){$('#bttop').fadeIn();}else{$('#bttop').fadeOut();}});$('#bttop').click(function(){$('body,html').animate({scrollTop:0},800);});});
    </script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9] <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<header>
    <!-- Topbar  -->
    <div class="topbar">
        <div class="container">
            <div class="pull-left">
                <ul class="list-unstyled list-inline" style="font-size: 0.9em; color:#ffffff">
                    <li><img src="img/gmail.png" class="img-circle" alt="">&nbsp;&nbsp;Email: ginksad@gmail</li>
                    <li><img src="img/phone.png" height="32" class="img-circle" width="32" alt="">&nbsp;&nbsp;Phone: +841659690599</li>
                </ul>
            </div>
            <div id="menu-right">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">My Account</a></li>
                    <li><a href="#">My Wishlist</a></li>
                    <li><a href="#">My Cart</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-in"></i>&nbsp;&nbsp;Login</a></li>
                    <li><a href="register.html"><i class="fa fa-user"></i>&nbsp;&nbsp;Register</a></li>
                </ul>
            </div>

        </div>
    </div>
    <!-- Header  -->
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <p class="logo">Fast<span style="color:#F42D2D !important">Food</span></p>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-sm-10">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" class="form-search" placeholder="Search..." style="margin-right: 0px">
                                    <div class="input-group-addon">
                                        <i class="fa fa-search" style="color:#F42D2D"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-sm-8">
                            <img src="img/cart.png" height="48" class="pull-right" width="48" alt="Cart">
                        </div>
                        <div class="col-sm-4">
                            <div class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true" href="#" style="text-decoration: none; color:#fff;font-weight: bold">$98 (2 item)</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <img src="img/product12.jpg" class="img-thumbnail" height="50" width="100" alt="">
                                            </div>
                                            <div class="col-sm-5">
                                                $49 &nbsp; &nbsp; <span class="badge">3</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <img src="img/product13.jpg" class="img-thumbnail" height="50" width="100" alt="">
                                            </div>
                                            <div class="col-sm-5">
                                                $49 &nbsp; &nbsp; <span class="badge">3</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Menu bar -->
    <div class="menu">
        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <ul class="nav navbar-nav">
                    <li><a href="#"><i class="fa fa-home"></i></a></li>
                    <li><a href="#">Chicken</a></li>
                    <li><a href="#">Hamburger</a></li>
                    <li><a href="#">Cocktails</a></li>
                    <li><a href="#">Snacks</a></li>
                    <li><a href="#">Sea Food</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </div>
</header>

@yield('content')

<!-- Footer -->
<div class="footer_before"></div>
<div class="footer">
    <div class="up-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="flag"><i class="fa fa-facebook" style="font-size:1.8em;"></i></div><h2 class="lead-text">Facebook</h2>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                </div>
                <div class="col-md-3">
                    <div class="flag"><i class="fa fa-list" style="font-size: 1.8em"></i></div><h2 class="lead-text">Informations</h2>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-angle-right"></i>&nbsp;&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing</li>
                        <li><i class="fa fa-angle-right"></i>&nbsp;&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing</li>
                        <li><i class="fa fa-angle-right"></i>&nbsp;&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing</li>
                        <li><i class="fa fa-angle-right"></i>&nbsp;&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing</li>
                        <li><i class="fa fa-angle-right"></i>&nbsp;&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <div class="flag"><i class="fa fa-phone-square" style="font-size: 1.8em"></i></div><h2 class="lead-text">Contact</h2>
                    <div class="infor-text">
                        <p class="bg-info"><i class="fa fa-envelope"></i>&nbsp;Email : ginksad@gmail.com</p>
                    </div>
                    <div class="infor-text">
                        <p class="bg-info"><i class="fa fa-phone"></i>&nbsp;Phone : 0912394839</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="flag"><i class="fa fa-video-camera" style="font-size: 1.8em"></i></div><h2 class="lead-text">Testimonial</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    <p class="pull-right">Mr. Nhat Quan</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- My chef -->
<div class="down-footer">
    <div class="footer_end_before"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p style="color:#ebebeb; font-size: 1.1em">© 2015 FA TEAM All Right Reserved.</p>
            </div>
            <div class="col-md-6">
                <ul class="list-inline pull-right">
                    <li><a href="#"><i class="fa fa-facebook" style="font-size: 1.3em;"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble" style="font-size: 1.3em;"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" style="font-size: 1.3em;"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest" style="font-size: 1.3em;"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin" style="font-size: 1.3em;"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- jQuery -->
<script src="{{ asset('js/jquery-2.1.3.min.js') }}"></script>
<!-- My javascript   -->
<script src="{{ asset('js/javascript.js') }}"></script>
<!-- Bootstrap JavaScript -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>