<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://localhost/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://localhost/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://localhost/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="http://localhost/walleee/html/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="http://localhost/assets/ico/favicon.png">
    <title>WALLEEE - Save - Buy - Save again!</title>
    <!-- Bootstrap core CSS -->
    <link href="http://localhost/assets/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://localhost/assets/css/style.css" rel="stylesheet">

    <!-- Just for debugging purposes. -->
    <!-- html5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script srv="https://oss.maxcdn.com/libs5shiv/3.7.0/html5shiv.js"></script>
    <script srv="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- include pace script for automatic web page progress bar  -->


    <script>
        paceOptions = {
            elements: true
        };
    </script>

    <script srv="http://localhost/assets/js/pace.min.js"></script>
</head>

<body>


<!-- Modal Login start -->
<div class="modal signUpContent fade" id="ModalLogin" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
                <h3 class="modal-title-site text-center"> Login to WALLEEE </h3>
            </div>
            <div class="modal-body">
                <div class="form-group login-username">
                    <div>
                        <input name="log" id="login-user" class="form-control input" size="20"
                               placeholder="Enter Username" type="text">
                    </div>
                </div>
                <div class="form-group login-password">
                    <div>
                        <input name="Password" id="login-password" class="form-control input" size="20"
                               placeholder="Password" type="password">
                    </div>
                </div>
                <div class="form-group">
                    <div>
                        <div class="checkbox login-remember">
                            <label>
                                <input name="rememberme" value="forever" checked="checked" type="checkbox">
                                Remember Me </label>
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <input name="submit" class="btn  btn-block btn-lg btn-primary" value="LOGIN" type="submit">
                    </div>
                </div>
                <!--userForm-->

            </div>
            <div class="modal-footer">
                <p class="text-center"> Not here before? <a data-toggle="modal" data-dismiss="modal"
                                                            href="#ModalSignup"> Sign Up. </a> <br>
                    <a href="http://localhost/walleee/html/forgot-password"> Lost your password? </a></p>
            </div>
        </div>
        <!-- /.modal-content -->

    </div>
    <!-- /.modal-dialog -->

</div>
<!-- /.Modal Login -->

<!-- Modal Signup start -->
<div class="modal signUpContent fade" id="ModalSignup" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
                <h3 class="modal-title-site text-center"> REGISTER </h3>
            </div>
            <div class="modal-body">
                <div class="control-group"><a class="fb_button btn  btn-block btn-lg " href="http://localhost/walleee/html/#"> SIGNUP WITH
                    FACEBOOK </a></div>
                <h5 style="padding:10px 0 10px 0;" class="text-center"> OR </h5>

                <div class="form-group reg-username">
                    <div>
                        <input name="login" class="form-control input" size="20" placeholder="Enter Username"
                               type="text">
                    </div>
                </div>
                <div class="form-group reg-email">
                    <div>
                        <input name="reg" class="form-control input" size="20" placeholder="Enter Email" type="text">
                    </div>
                </div>
                <div class="form-group reg-password">
                    <div>
                        <input name="password" class="form-control input" size="20" placeholder="Password"
                               type="password">
                    </div>
                </div>
                <div class="form-group">
                    <div>
                        <div class="checkbox login-remember">
                            <label>
                                <input name="rememberme" id="rememberme" value="forever" checked="checked"
                                       type="checkbox">
                                Remember Me </label>
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <input name="submit" class="btn  btn-block btn-lg btn-primary" value="REGISTER" type="submit">
                    </div>
                </div>
                <!--userForm-->

            </div>
            <div class="modal-footer">
                <p class="text-center"> Already member? <a data-toggle="modal" data-dismiss="modal" href="http://localhost/walleee/html/#ModalLogin">
                    Sign in </a></p>
            </div>
        </div>
        <!-- /.modal-content -->

    </div>
    <!-- /.modal-dialog -->

</div>

<!--Electronics-->
<div class="modal categorySelect  fade modal-sm" id="electronics" tabindex="-1" role="dialog">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
                <h3 class="modal-title-site text-center">  Your plan </h3>
            </div>
            <div class="modal-body">
            <img src="http://localhost/images/site/demo/audio-equipment.png" alt="Electronics" class="img-rounded center-block">
            <form method="post" action="http://localhost/addtocartd">
                <div class="form-group">
                    <div>
                    	<label>Total amount you intend to spend on the product?</label>
                        <input name="totalprice" id="totalprice_electronics" class="form-control input totalprice" size="20"
                               placeholder="in dollars" type="number" required>
                                <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                    </div>
                </div>
                <div class="form-group">
                    <div>
                    	<label>By when do you want the product delivered?</label>
                        <input name="byWhen" id="byWhen_electronics" class="form-control input byWhen" size="20"
                               placeholder="mm/dd/yyyy" type="date" required>
                               <input type="hidden" name="product_id" value="3" />
                    </div>
                    
                </div>
                <div class="form-group">
                	<div>
                		<label>What you'd need to set aside per day</label>
                		<input name="perdayprice" id="perdayprice_electronics" class="form-control input perdayprice" size="20"
                               placeholder="calculated automatically when total amount and date are filled" type="number" required>
                	</div>
                </div>
                <p>Tip: You can adjust the per day amount to suit your requirement and the date will be calculated automatically.</p>
                <!-- 
<div class="form-group">
                    <div>
                        <div class="checkbox login-remember">
                            <label>
                                <input name="rememberme" value="forever" checked="checked" type="checkbox">
                                Remember Me </label>
                        </div>
                    </div>
                </div>
 -->
                <div>
                    <div>
                        <input name="submit" class="btn  btn-block btn-lg btn-primary" value="All Set" type="submit">
                    </div>
                </div>
                </form>
                <!--userForm-->

            </div>
          
        </div>
        <!-- /.modal-content -->

    </div>
    <!-- /.modal-dialog -->

</div>
<!--bikes-->
<div class="modal categorySelect fade modal-sm" id="bikes" tabindex="-1" role="dialog">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal " aria-hidden="true"> &times; </button>
                <h3 class="modal-title-site text-center">  Your plan </h3>
            </div>
            <div class="modal-body">
            <img src="http://localhost/images/site/demo/bicycle.png" alt="Bikes" class="img-rounded center-block">
            <form method="post" action="http://localhost/addtocartd">
                <div class="form-group">
                    <div>
                    	<label>Total amount you intend to spend on the product?</label>
                        <input name="totalprice" id="totalprice_bike" class="form-control input totalprice" size="20"
                               placeholder="in dollars" type="number" required>
                                <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                    </div>
                </div>
                <div class="form-group">
                    <div>
                    	<label>By when do you want the product delivered?</label>
                        <input name="byWhen" id="byWhen_bike" class="form-control input byWhen" size="20"
                               placeholder="mm/dd/yyyy" type="date" required>
                               <input type="hidden" name="product_id" value="4" />
                    </div>
                    
                </div>
                <div class="form-group">
                	<div>
                		<label>What you'd need to set aside per day</label>
                		<input name="perdayprice" id="perdayprice_bike" class="form-control input perdayprice" size="20"
                               placeholder="calculated automatically when total amount and date are filled" type="number" required>
                	</div>
                </div>
                <p>Tip: You can adjust the per day amount to suit your requirement and the date will be calculated automatically.</p>
                <!-- 
<div class="form-group">
                    <div>
                        <div class="checkbox login-remember">
                            <label>
                                <input name="rememberme" value="forever" checked="checked" type="checkbox">
                                Remember Me </label>
                        </div>
                    </div>
                </div>
 -->
                <div>
                    <div>
                        <input name="submit" class="btn  btn-block btn-lg btn-primary" value="All Set" type="submit">
                    </div>
                </div>
                </form>
                <!--userForm-->

            </div>
          
        </div>
        <!-- /.modal-content -->

    </div>
    <!-- /.modal-dialog -->

</div>

<!--Gaming consoles-->
<div class="modal categorySelect fade" id="GameConsole" tabindex="-1" role="dialog">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
                <h3 class="modal-title-site text-center">  Your plan </h3>
            </div>
            <div class="modal-body">
            <img src="http://localhost/images/site/demo/game-console.png" alt="Bikes" class="img-rounded center-block">
           <form method="post" action="http://localhost/addtocartd">
                <div class="form-group">
                    <div>
                    	<label>Total amount you intend to spend on the product?</label>
                        <input name="totalprice" id="totalprice_gameconsole" class="form-control input totalprice" size="20"
                               placeholder="in dollars" type="number" required>
                                <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                    </div>
                </div>
                <div class="form-group">
                    <div>
                    	<label>By when do you want the product delivered?</label>
                        <input name="byWhen" id="byWhen_gameconsole" class="form-control input byWhen" size="20"
                               placeholder="mm/dd/yyyy" type="date" required>
                               <input type="hidden" name="product_id" value="5" />
                    </div>
                    
                </div>
                <div class="form-group">
                	<div>
                		<label>What you'd need to set aside per day</label>
                		<input name="perdayprice" id="perdayprice_gameconsole" class="form-control input perdayprice" size="20"
                               placeholder="calculated automatically when total amount and date are filled" type="number" required>
                	</div>
                </div>
                <p>Tip: You can adjust the per day amount to suit your requirement and the date will be calculated automatically.</p>
                <!-- 
<div class="form-group">
                    <div>
                        <div class="checkbox login-remember">
                            <label>
                                <input name="rememberme" value="forever" checked="checked" type="checkbox">
                                Remember Me </label>
                        </div>
                    </div>
                </div>
 -->
                <div>
                    <div>
                        <input name="submit" class="btn  btn-block btn-lg btn-primary" value="All Set" type="submit">
                    </div>
                </div>
                </form>
                <!--userForm-->

            </div>
          
        </div>
        <!-- /.modal-content -->

    </div>
    <!-- /.modal-dialog -->

</div>
<!--Mobile phones-->
<div class="modal categorySelect fade" id="MobilePhones" tabindex="-1" role="dialog">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
                <h3 class="modal-title-site text-center">  Your plan </h3>
            </div>
            <div class="modal-body">
            <img src="http://localhost/images/site/demo/smartphone.png" alt="Bikes" class="img-rounded center-block">
            <form method="post" action="http://localhost/addtocartd">
                <div class="form-group">
                    <div>
                    	<label>Total amount you intend to spend on the product?</label>
                        <input name="totalprice" id="totalprice_mobilephone" class="form-control input totalprice" size="20"
                               placeholder="in dollars" type="number" required>
                        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                    </div>
                </div>
                <div class="form-group">
                    <div>
                    	<label>By when do you want the product delivered?</label>
                        <input name="byWhen" id="byWhen_mobilephone" class="form-control input byWhen" size="20"
                               placeholder="mm/dd/yyyy" type="date" required>
                               <input type="hidden" name="product_id" value="6" />
                    </div>
                    
                </div>
                <div class="form-group">
                	<div>
                		<label>What you'd need to set aside per day</label>
                		<input name="perdayprice" id="perdayprice_mobilephone" class="form-control input perdayprice" size="20"
                               placeholder="calculated automatically when total amount and date are filled" type="number" required>
                	</div>
                </div>
                <p>Tip: You can adjust the per day amount to suit your requirement and the date will be calculated automatically.</p>
                <!-- 
<div class="form-group">
                    <div>
                        <div class="checkbox login-remember">
                            <label>
                                <input name="rememberme" value="forever" checked="checked" type="checkbox">
                                Remember Me </label>
                        </div>
                    </div>
                </div>
 -->
                <div>
                    <div>
                        <input name="submit" class="btn  btn-block btn-lg btn-primary" value="All Set" type="submit">
                    </div>
                </div>
                </form>
                <!--userForm-->

            </div>
          
        </div>
        <!-- /.modal-content -->

    </div>
    <!-- /.modal-dialog -->

</div>
<!--Holiday and tours-->
<div class="modal categorySelect fade" id="handt" tabindex="-1" role="dialog">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
                <h3 class="modal-title-site text-center">  Your plan </h3>
            </div>
            <div class="modal-body">
            <img src="http://localhost/images/site/demo/sunbed.png" alt="Bikes" class="img-rounded center-block">
            <form method="post" action="http://localhost/addtocartd">
                <div class="form-group">
                    <div>
                    	<label>Total amount you intend to spend on the product?</label>
                        <input name="totalprice" id="totalprice_handt" class="form-control input totalprice" size="20"
                               placeholder="in dollars" type="number" required>
                         <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />       
                    </div>
                </div>
                <div class="form-group">
                    <div>
                    	<label>By when do you want the product delivered?</label>
                        <input name="byWhen" id="byWhen_handt" class="form-control input byWhen" size="20"
                               placeholder="mm/dd/yyyy" type="date" required>
                               <input type="hidden" name="product_id" value="7" />
                    </div>
                    
                </div>
                <div class="form-group">
                	<div>
                		<label>What you'd need to set aside per day</label>
                		<input name="perdayprice" id="perdayprice_handt" class="form-control input perdayprice" size="20"
                               placeholder="calculated automatically when total amount and date are filled" type="number" required>
                	</div>
                </div>
                <p>Tip: You can adjust the per day amount to suit your requirement and the date will be calculated automatically.</p>
                <!-- 
<div class="form-group">
                    <div>
                        <div class="checkbox login-remember">
                            <label>
                                <input name="rememberme" value="forever" checked="checked" type="checkbox">
                                Remember Me </label>
                        </div>
                    </div>
                </div>
 -->
                <div>
                    <div>
                        <input name="submit" class="btn  btn-block btn-lg btn-primary" value="All Set" type="submit">
                    </div>
                </div>
                </form>
                <!--userForm-->

            </div>
          
        </div>
        <!-- /.modal-content -->

    </div>
    <!-- /.modal-dialog -->

</div>
<!--Other-->
<div class="modal categorySelect fade" id="Other" tabindex="-1" role="dialog">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
                <h3 class="modal-title-site text-center">  Your plan </h3>
            </div>
            <div class="modal-body">
            <img src="http://localhost/images/site/6.jpeg" alt="Bikes" class="img-rounded center-block">
            <form method="post" action="http://localhost/addtocartd">
                <div class="form-group">
                    <div>
                    	<label>Total amount you intend to spend on the product?</label>
                        <input name="totalprice" id="totalprice_other" class="form-control input totalprice" size="20"
                               placeholder="in dollars" type="number" required>
                                <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                    </div>
                </div>
                <div class="form-group">
                    <div>
                    	<label>By when do you want the product delivered?</label>
                        <input name="byWhen" id="byWhen_other" class="form-control input byWhen" size="20"
                               placeholder="mm/dd/yyyy" type="date" required>
                               <input type="hidden" name="product_id" value="8" />
                    </div>
                    
                </div>
                <div class="form-group">
                	<div>
                		<label>What you'd need to set aside per day</label>
                		<input name="perdayprice" id="perdayprice_other" class="form-control input perdayprice" size="20"
                               placeholder="calculated automatically when total amount and date are filled" type="number" required>
                	</div>
                </div>
                <p>Tip: You can adjust the per day amount to suit your requirement and the date will be calculated automatically.</p>
                <!-- 
<div class="form-group">
                    <div>
                        <div class="checkbox login-remember">
                            <label>
                                <input name="rememberme" value="forever" checked="checked" type="checkbox">
                                Remember Me </label>
                        </div>
                    </div>
                </div>
 -->
                <div>
                    <div>
                        <input name="submit" class="btn  btn-block btn-lg btn-primary" value="All Set" type="submit">
                    </div>
                </div>
                </form>
                <!--userForm-->

            </div>
          
        </div>
        <!-- /.modal-content -->

    </div>
    <!-- /.modal-dialog -->

</div>
<!-- Fixed navbar start -->
<div class="navbar navbar-tshop navbar-fixed-top megamenu" role="navigation">
    <div class="navbar-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-xs-6 col-md-6">
                    <div class="pull-left ">
                        <ul class="userMenu ">
                            <!-- 
<li><a href="http://localhost/walleee/html/#"> <span class="hidden-xs">HELP</span><i
                                    class="glyphicon glyphicon-info-sign hide visible-xs "></i> </a></li>
 -->
                            <!-- 
<li class="phone-number"><a href="http://localhost/walleee/html/callto:+12025550151"> <span> <i
                                    class="glyphicon glyphicon-phone-alt "></i></span> <span class="hidden-xs"
                                                                                             style="margin-left:5px"> +1-202-555-0151 </span>
                            </a></li>
 -->
                        </ul>
                    </div>
                </div>
           <!--letys see-->
                            
            <div class="col-lg-6 col-sm-6 col-xs-6 col-md-6 no-margin no-padding">
                    <div class="pull-right">
                        <ul class="userMenu">
                            <li><a href="http://localhost/walleee/html/account-1"><span class="hidden-xs"> My Account</span> <i
                                    class="glyphicon glyphicon-user hide visible-xs "></i></a></li>


                            <li class="dropdown hasUserMenu"><a href="http://localhost/walleee/html/#" class="dropdown-toggle" data-toggle="dropdown"
                                                                aria-expanded="false"> <i
                                    class="glyphicon glyphicon-log-in hide visible-xs "></i> Hi, {{$name}} <b
                                    class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="http://localhost/walleee/html/account"> <i class="fa fa-user"></i> Account</a></li>
                                    <li><a href="http://localhost/walleee/html/account"><i class="fa fa fa-cog"></i> Profile</a></li>
                                    <li><a href="http://localhost/walleee/html/my-address"><i class="fa fa-map-marker"></i> Addresses</a></li>
                                    <li><a href="http://localhost/walleee/html/order-list"><i class="fa  fa-calendar"></i> Orders</a></li>
                                    <li><a href="http://localhost/walleee/html/wishlist" title="My wishlists">
                                        <i class="fa fa-heart"></i>
                                        My wishlists
                                    </a></li>
                                    <li class="divider"></li>
                                    <li><a href="http://localhost/logout"><i class="fa  fa-sign-out"></i> Log Out</a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                </div>
                            
                 
                <!--here-->
            </div>
        </div>
    </div>
    <!--/.navbar-top-->

    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span
                    class="sr-only"> Toggle navigation </span> <span class="icon-bar"> </span> <span
                    class="icon-bar"> </span> <span class="icon-bar"> </span></button>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-cart"><i
                    class="fa fa-shopping-cart colorWhite"> </i> <span
                    class="cartRespons colorWhite"> Cart ($210.00) </span></button>
            <a class="navbar-brand " href="http://localhost"> <img src="http://localhost/images/logo.png" alt="TSHOP"> </a>

            <!-- this part for mobile -->
            <div class="search-box pull-right hidden-lg hidden-md hidden-sm">
                <div class="input-group">
                    <button class="btn btn-nobg getFullSearch" type="button"><i class="fa fa-search"> </i></button>
                </div>
                <!-- /input-group -->

            </div>
        </div>

        <!-- this part is duplicate from cartMenu  keep it for mobile -->
        <div class="navbar-cart  collapse">
            <div class="cartMenu  col-lg-4 col-xs-12 col-md-4 ">
                <div class="w100 miniCartTable scroll-pane">
                    <table>
                        <tbody>
                        <tr class="miniCartProduct">
                            <td style="width:20%" class="miniCartProductThumb">
                                <div><a href="http://localhost/walleee/html/product-details"> <img srv="http://localhost/images/product/3.jpg" alt="img"> </a>
                                </div>
                            </td>
                            <td style="width:40%">
                                <div class="miniCartDescription">
                                    <h4><a href="http://localhost/walleee/html/product-details"> TSHOP T shirt Black </a></h4>
                                    <span class="size"> 12 x 1.5 L </span>

                                    <div class="price"><span> $8.80 </span></div>
                                </div>
                            </td>
                            <td style="width:10%" class="miniCartQuantity"><a> X 1 </a></td>
                            <td style="width:15%" class="miniCartSubtotal"><span> $8.80 </span></td>
                            <td style="width:5%" class="delete"><a> x </a></td>
                        </tr>
                        <tr class="miniCartProduct">
                            <td style="width:20%" class="miniCartProductThumb">
                                <div><a href="http://localhost/walleee/html/product-details"> <img srv="http://localhost/images/product/2.jpg" alt="img"> </a>
                                </div>
                            </td>
                            <td style="width:40%">
                                <div class="miniCartDescription">
                                    <h4><a href="http://localhost/walleee/html/product-details"> TSHOP T shirt Black </a></h4>
                                    <span class="size"> 12 x 1.5 L </span>

                                    <div class="price"><span> $8.80 </span></div>
                                </div>
                            </td>
                            <td style="width:10%" class="miniCartQuantity"><a> X 1 </a></td>
                            <td style="width:15%" class="miniCartSubtotal"><span> $8.80 </span></td>
                            <td style="width:5%" class="delete"><a> x </a></td>
                        </tr>
                        <tr class="miniCartProduct">
                            <td style="width:20%" class="miniCartProductThumb">
                                <div><a href="http://localhost/walleee/html/product-details"> <img srv="http://localhost/images/product/5.jpg" alt="img"> </a>
                                </div>
                            </td>
                            <td style="width:40%">
                                <div class="miniCartDescription">
                                    <h4><a href="http://localhost/walleee/html/product-details"> TSHOP T shirt Black </a></h4>
                                    <span class="size"> 12 x 1.5 L </span>

                                    <div class="price"><span> $8.80 </span></div>
                                </div>
                            </td>
                            <td style="width:10%" class="miniCartQuantity"><a> X 1 </a></td>
                            <td style="width:15%" class="miniCartSubtotal"><span> $8.80 </span></td>
                            <td style="width:5%" class="delete"><a> x </a></td>
                        </tr>
                        <tr class="miniCartProduct">
                            <td style="width:20%" class="miniCartProductThumb">
                                <div><a href="http://localhost/walleee/html/product-details"> <img srv="http://localhost/images/product/3.jpg" alt="img"> </a>
                                </div>
                            </td>
                            <td style="width:40%">
                                <div class="miniCartDescription">
                                    <h4><a href="http://localhost/walleee/html/product-details"> TSHOP T shirt Black </a></h4>
                                    <span class="size"> 12 x 1.5 L </span>

                                    <div class="price"><span> $8.80 </span></div>
                                </div>
                            </td>
                            <td style="width:10%" class="miniCartQuantity"><a> X 1 </a></td>
                            <td style="width:15%" class="miniCartSubtotal"><span> $8.80 </span></td>
                            <td style="width:5%" class="delete"><a> x </a></td>
                        </tr>
                        <tr class="miniCartProduct">
                            <td style="width:20%" class="miniCartProductThumb">
                                <div><a href="http://localhost/walleee/html/product-details"> <img srv="http://localhost/images/product/3.jpg" alt="img"> </a>
                                </div>
                            </td>
                            <td style="width:40%">
                                <div class="miniCartDescription">
                                    <h4><a href="http://localhost/walleee/html/product-details"> TSHOP T shirt Black </a></h4>
                                    <span class="size"> 12 x 1.5 L </span>

                                    <div class="price"><span> $8.80 </span></div>
                                </div>
                            </td>
                            <td style="width:10%" class="miniCartQuantity"><a> X 1 </a></td>
                            <td style="width:15%" class="miniCartSubtotal"><span> $8.80 </span></td>
                            <td style="width:5%" class="delete"><a> x </a></td>
                        </tr>
                        <tr class="miniCartProduct">
                            <td style="width:20%" class="miniCartProductThumb">
                                <div><a href="http://localhost/walleee/html/product-details"> <img srv="http://localhost/images/product/4.jpg" alt="img"> </a>
                                </div>
                            </td>
                            <td style="width:40%">
                                <div class="miniCartDescription">
                                    <h4><a href="http://localhost/walleee/html/product-details"> TSHOP T shirt Black </a></h4>
                                    <span class="size"> 12 x 1.5 L </span>

                                    <div class="price"><span> $8.80 </span></div>
                                </div>
                            </td>
                            <td style="width:10%" class="miniCartQuantity"><a> X 1 </a></td>
                            <td style="width:15%" class="miniCartSubtotal"><span> $8.80 </span></td>
                            <td style="width:5%" class="delete"><a> x </a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!--/.miniCartTable-->

                <div class="miniCartFooter  miniCartFooterInMobile text-right">
                    <h3 class="text-right subtotal"> Subtotal: $210 </h3>
                    <a class="btn btn-sm btn-danger" href="http://localhost/walleee/html/cart"> <i class="fa fa-shopping-cart"> </i> VIEW CART
                    </a> <a href="http://localhost/walleee/html/checkout-0"
                            class="btn btn-sm btn-primary"> CHECKOUT </a></div>
                <!--/.miniCartFooter-->

            </div>
            <!--/.cartMenu-->
        </div>
        <!--/.navbar-cart-->

        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="http://localhost/aboutus"> Home </a></li>
              <!--  <li class="dropdown megamenu-fullwidth"><a data-toggle="dropdown" class="dropdown-toggle" href="http://localhost/walleee/html/#"> New
                    Products <b class="caret"> </b> </a>
                    <ul class="dropdown-menu">
                        <li class="megamenu-content ">
                            <ul class="col-lg-3  col-sm-3 col-md-3 unstyled noMarginLeft newCollectionUl">
                                <li class="no-border">
                                    <p class="promo-1"><strong> NEW COLLECTION </strong></p>
                                </li>
                                <li><a href="http://localhost/walleee/html/category"> ALL NEW PRODUCTS </a></li>
                                <li><a href="http://localhost/walleee/html/category"> NEW TOPS </a></li>
                                <li><a href="http://localhost/walleee/html/category"> NEW SHOES </a></li>
                                <li><a href="http://localhost/walleee/html/category"> NEW TSHIRT </a></li>
                                <li><a href="http://localhost/walleee/html/category"> NEW TSHOP </a></li>
                            </ul>
                            <ul class="col-lg-3  col-sm-3 col-md-3  col-xs-4">
                                <li><a class="newProductMenuBlock" href="http://localhost/walleee/html/product-details"> <img
                                        class="img-responsive" srv="http://localhost/images/site/promo1.jpg" alt="product"> <span
                                        class="ProductMenuCaption"> <i class="fa fa-caret-right"> </i> JEANS </span>
                                </a></li>
                            </ul>
                            <ul class="col-lg-3  col-sm-3 col-md-3 col-xs-4">
                                <li><a class="newProductMenuBlock" href="http://localhost/walleee/html/product-details"> <img
                                        class="img-responsive" srv="http://localhost/images/site/promo2.jpg" alt="product"> <span
                                        class="ProductMenuCaption"> <i
                                        class="fa fa-caret-right"> </i> PARTY DRESS </span> </a></li>
                            </ul>
                            <ul class="col-lg-3  col-sm-3 col-md-3 col-xs-4">
                                <li><a class="newProductMenuBlock" href="http://localhost/walleee/html/product-details"> <img
                                        class="img-responsive" srv="http://localhost/images/site/promo3.jpg" alt="product"> <span
                                        class="ProductMenuCaption"> <i class="fa fa-caret-right"> </i> SHOES </span>
                                </a></li>
                            </ul>
                        </li>
                    </ul>
                </li>-->

                <!-- change width of megamenu = use class > megamenu-fullwidth, megamenu-60width, megamenu-40width -->
              <!-- 
  <li class="dropdown megamenu-80width "><a data-toggle="dropdown" class="dropdown-toggle" href="http://localhost/walleee/html/#"> SHOP
                    <b class="caret"> </b> </a>
                    <ul class="dropdown-menu">
                        <li class="megamenu-content">

                            <!~~ megamenu-content ~~>

                            <ul class="col-lg-2  col-sm-2 col-md-2  unstyled noMarginLeft">
                                <li>
                                    <p><strong> Women Collection </strong></p>
                                </li>
                                <li><a href="http://localhost/walleee/html/#"> Kameez </a></li>
                                <li><a href="http://localhost/walleee/html/#"> Tops </a></li>
                                <li><a href="http://localhost/walleee/html/#"> Shoes </a></li>
                                <li><a href="http://localhost/walleee/html/#"> T shirt </a></li>
                                <li><a href="http://localhost/walleee/html/#"> TSHOP </a></li>
                                <li><a href="http://localhost/walleee/html/#"> Party Dress </a></li>
                                <li><a href="http://localhost/walleee/html/#"> Women Fragrances </a></li>
                            </ul>
                            <ul class="col-lg-2  col-sm-2 col-md-2  unstyled">
                                <li>
                                    <p><strong> Men Collection </strong></p>
                                </li>
                                <li><a href="http://localhost/walleee/html/#"> Panjabi </a></li>
                                <li><a href="http://localhost/walleee/html/#"> Male Fragrances </a></li>
                                <li><a href="http://localhost/walleee/html/#"> Scarf </a></li>
                                <li><a href="http://localhost/walleee/html/#"> Sandal </a></li>
                                <li><a href="http://localhost/walleee/html/#"> Underwear </a></li>
                                <li><a href="http://localhost/walleee/html/#"> Winter Collection </a></li>
                                <li><a href="http://localhost/walleee/html/#"> Men Accessories </a></li>
                            </ul>
                            <ul class="col-lg-2  col-sm-2 col-md-2  unstyled">
                                <li>
                                    <p><strong> Top Brands </strong></p>
                                </li>
                                <li><a href="http://localhost/walleee/html/#"> Diesel </a></li>
                                <li><a href="http://localhost/walleee/html/#"> Farah </a></li>
                                <li><a href="http://localhost/walleee/html/#"> G-Star RAW </a></li>
                                <li><a href="http://localhost/walleee/html/#"> Lyle & Scott </a></li>
                                <li><a href="http://localhost/walleee/html/#"> Pretty Green </a></li>
                                <li><a href="http://localhost/walleee/html/#"> TSHOP </a></li>
                                <li><a href="http://localhost/walleee/html/#"> TANJIM </a></li>
                            </ul>
                            <ul class="col-lg-3  col-sm-3 col-md-3 col-xs-6">
                                <li class="no-margin productPopItem "><a href="http://localhost/walleee/html/product-details"> <img
                                        class="img-responsive" srv="http://localhost/images/site/g4.jpg" alt="img"> </a> <a
                                        class="text-center productInfo alpha90" href="http://localhost/walleee/html/product-details"> Eodem modo
                                    typi <br>
                                    <span> $60 </span> </a></li>
                            </ul>
                            <ul class="col-lg-3  col-sm-3 col-md-3 col-xs-6">
                                <li class="no-margin productPopItem relative"><a href="http://localhost/walleee/html/product-details"> <img
                                        class="img-responsive" srv="http://localhost/images/site/g5.jpg" alt="img"> </a> <a
                                        class="text-center productInfo alpha90" href="http://localhost/walleee/html/product-details"> Eodem modo
                                    typi <br>
                                    <span> $60 </span> </a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
 -->
                <!-- 
<li class="dropdown megamenu-fullwidth"><a data-toggle="dropdown" class="dropdown-toggle" href="http://localhost/walleee/html/#">
                    PAGES <b class="caret"> </b> </a>
                    <ul class="dropdown-menu">
                        <li class="megamenu-content ProductDetailsList">

                            <!~~ remove .ProductDetailsList class from megamenu-content || this class for demo uses only ~~>

                            <!~~ megamenu-content ~~>

                            <h3 class="promo-1 no-margin hidden-xs">60 + html PAGES || AVAILABLE ONLY AT WRAP
                                BOOTSTRAP </h3>

                            <h3 class="promo-1sub hidden-xs"> Complete Parallax E-Commerce Boostrap Template, Responsive
                                on any Device, 10+ color Theme + Parallax Effect </h3>

                            <ul class="col-lg-2  col-sm-2 col-md-2 unstyled">
                                <li class="no-border">
                                    <p><strong> Home Pages </strong></p>
                                </li>
                                <li><a href="http://localhost/walleee/html/index"> Home Version 1 </a></li>
                                <li><a href="http://localhost/walleee/html/index2"> Home Version 2 </a></li>
                                <li><a href="http://localhost/walleee/html/index3"> Home Version 3 (BOXES) </a></li>
                                <li><a href="http://localhost/walleee/html/index4"> Home Version 4 (LOOK 2)</a></li>
                                <li><a href="http://localhost/walleee/html/index5"> Home Version 5 (LOOK 3)</a></li>
                                <li><a href="http://localhost/walleee/html/index6"> Home Version 6 (STORY)</a></li>
                                <li><a href="http://localhost/walleee/html/index-v-7"> Home Version 7 (Flat) <span class="label label-success">new</span></a>
                                </li>
                                <li><a href="http://localhost/walleee/html/index-header2"> Header Version 2 </a></li>
                                <li><a href="http://localhost/walleee/html/index-header3"> Header Version 3 </a></li>
                                  <li><a href="http://localhost/walleee/html/index-logged-in">Topbar Logged In user menu <span
                                        class="label label-success">new</span></a></li>
                                <li><a href="http://localhost/walleee/html/sidebar-shopping-cart">Sidebar Shopping cart <span
                                        class="label label-success">new</span></a></li>
                            </ul>

                            <ul class="col-lg-2  col-sm-2 col-md-2 unstyled">
                                <li class="no-border">
                                    <p><strong> Featured Pages </strong></p>
                                </li>
                                <li><a href="http://localhost/walleee/html/category"> Category </a></li>
                                <li><a href="http://localhost/walleee/html/category2"> Category Style 2 [Parallax] </a></li>
                                <li><a href="http://localhost/walleee/html/sub-category"> Sub Category </a></li>
                                <li><a href="http://localhost/walleee/html/category-list"> Category List View </a></li>
                                <li><a href="http://localhost/walleee/html/category-product-hover"> Category [Product Hover] </a></li>
                                <li><a href="http://localhost/walleee/html/category-product-slide"> Category [Product Slide] </a></li>

                                <li><a href="http://localhost/walleee/html/cart"> Cart </a></li>
                                <li><a href="http://localhost/walleee/html/about-us-3"> About Us V3 <span
                                        class="label label-success">NEW</span> </a></li>
                                <li><a href="http://localhost/walleee/html/about-us-2"> About Us V2 </a></li>
                                <li><a href="http://localhost/walleee/html/about-us"> About Us V1 </a></li>
                                <li><a href="http://localhost/walleee/html/contact-us"> Contact us </a></li>
                                <li><a href="http://localhost/walleee/html/contact-us-2"> Contact us 2 (No Fixed Map) </a></li>
                                <li><a href="http://localhost/walleee/html/terms-conditions"> Terms &amp; Conditions </a></li>

                            </ul>

                            <ul class="col-lg-3  col-sm-3 col-md-3 unstyled ">
                                <li class="no-border">
                                    <p><strong> Product Details </strong></p>
                                </li>
                                <li><a href="http://localhost/walleee/html/product-details"> Product Details v1 </a></li>
                                <li><a href="http://localhost/walleee/html/product-details-style2"> Product Details v 2 </a></li>
                                <li><a href="http://localhost/walleee/html/product-details-style3"> Product Details v 3 (Custom Thumbnail
                                    Position)</a></li>
                                <li><a href="http://localhost/walleee/html/product-details-style4"> Product Details v 4 (with litebox)</a></li>


                                <li><a href="http://localhost/walleee/html/product-details-style5"> Product Details v 5 (Flat) <span
                                        class="label label-success">NEW</span> </a></li>
                                <li><a href="http://localhost/walleee/html/product-details-style5-1"> Product Details v 5.1 <span
                                        class="label label-success">NEW</span> </a></li>
                                <li><a href="http://localhost/walleee/html/product-details-style5-2"> Product Details v 5.2 <span
                                        class="label label-success">NEW</span> </a></li>
                                <li><a href="http://localhost/walleee/html/product-details-style5-3"> Product Details v 5.3 <span
                                        class="label label-success">NEW</span> </a></li>
                                <li><a href="http://localhost/walleee/html/product-details-style5-3-fadein"> Product Details v 5.3.1
                                    <small>(fadein)</small> <span
                                            class="label label-success">NEW</span> </a></li>
                                <li><a href="http://localhost/walleee/html/product-details-style5-4"> Product Details v 5.4  <span
                                        class="label label-success">NEW</span> </a></li>
                                <li><a href="http://localhost/walleee/html/product-details-style5-4.1-popup-video"> Product Details v 5.4.1
                                    <small>(popup video)</small><span
                                            class="label label-success">NEW</span> </a></li>
                                <li><a href="http://localhost/walleee/html/product-details-style5-4.1-with-zoom"> Product Details v 5.4.1
                                    <small>(zoom + litebox)</small> <span
                                            class="label label-success">NEW</span></a></li>

                            </ul>
                            <ul class="col-lg-2  col-sm-2 col-md-2 unstyled">
                                <li class="no-border">
                                    <p><strong> Checkout </strong></p>
                                </li>
                                <li><a href="http://localhost/walleee/html/checkout-0"> Checkout Before </a></li>
                                <li><a href="http://localhost/walleee/html/checkout-1"> checkout step 1 </a></li>
                                <li><a href="http://localhost/walleee/html/checkout-2"> checkout step 2 </a></li>
                                <li><a href="http://localhost/walleee/html/checkout-3"> checkout step 3 </a></li>
                                <li><a href="http://localhost/walleee/html/checkout-4"> checkout step 4 </a></li>
                                <li><a href="http://localhost/walleee/html/checkout-5"> checkout step 5 </a></li>
                                <li><a href="http://localhost/walleee/html/one-page-checkout"> One page checkout <span
                                        class="label label-success">NEW</span> </a></li>
                                <li><a href="http://localhost/walleee/html/thanks-for-order"> Thanks for order</a></li>
                            </ul>
                            <ul class="col-lg-1  col-sm-1 col-md-1 no-padding unstyled">
                                <li class="no-border">
                                    <p><strong> User Account </strong></p>
                                </li>
                                <li><a href="http://localhost/walleee/html/account-1"> Account Login </a></li>
                                <li><a href="http://localhost/walleee/html/account"> My Account </a></li>
                                <li><a href="http://localhost/walleee/html/my-address"> My Address </a></li>
                                <li><a href="http://localhost/walleee/html/user-information"> User information </a></li>
                                <li><a href="http://localhost/walleee/html/wishlist"> Wish List </a></li>
                                <li><a href="http://localhost/walleee/html/order-list"> Order list </a></li>
                                <li><a href="http://localhost/walleee/html/order-status"> Order Status </a></li>
                                <li><a href="http://localhost/walleee/html/forgot-password"> Forgot Password </a></li>
                            </ul>
                            <ul class="col-lg-2  col-sm-2 col-md-2 unstyled">
                                <li class="no-border">
                                    <p><strong> &nbsp; </strong></p>
                                </li>
                                <li><a href="http://localhost/walleee/html/blog"> Blog </a></li>
                                <li><a href="http://localhost/walleee/html/blog-details"> Blog Details </a></li>
                                <li><a href="http://localhost/walleee/html/single-product-modal"> Single Product Details Modal</a></li>
                                <li><a href="http://localhost/walleee/html/single-subscribe-modal"> Single Subscribe Modal</a></li>
                                <li><a href="http://localhost/walleee/html/error-page"> Error Page </a></li>
                                <li><a href="http://localhost/walleee/html/blank-page"> Blank Page </a></li>   <li><a href="form.html"> Basic Form Element </a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
 -->
				<!--<li><a href="http://localhost/walleee/html/all-page-link" target="_blank"> All Page Link </a></li>-->
            </ul>
            </ul>

            <!--- this part will be hidden for mobile version -->
            <div class="nav navbar-nav navbar-right hidden-xs">
                <div class="dropdown  cartMenu "><!-- 
<a href="http://localhost/walleee/html/#" class="dropdown-toggle" data-toggle="dropdown"> <i
                        class="fa fa-shopping-cart"> </i>  <span class="cartRespons"> Cart ($210.00) </span>  <b
                        class="caret"> </b> </a>
 -->

                    <div class="dropdown-menu col-lg-4 col-xs-12 col-md-4 ">
                        <div class="w100 miniCartTable scroll-pane">
                            <table>
                                <tbody>
                                <tr class="miniCartProduct">
                                    <td style="width:20%" class="miniCartProductThumb">
                                        <div><a href="http://localhost/walleee/html/product-details"> <img srv="http://localhost/images/product/3.jpg" alt="img">
                                        </a></div>
                                    </td>
                                    <td style="width:40%">
                                        <div class="miniCartDescription">
                                            <h4><a href="http://localhost/walleee/html/product-details"> TSHOP Tshirt DO9 </a></h4>
                                            <span class="size"> 12 x 1.5 L </span>

                                            <div class="price"><span> $22 </span></div>
                                        </div>
                                    </td>
                                    <td style="width:10%" class="miniCartQuantity"><a> X 1 </a></td>
                                    <td style="width:15%" class="miniCartSubtotal"><span> $33 </span></td>
                                    <td style="width:5%" class="delete"><a> x </a></td>
                                </tr>
                                <tr class="miniCartProduct">
                                    <td style="width:20%" class="miniCartProductThumb">
                                        <div><a href="http://localhost/walleee/html/product-details"> <img srv="http://localhost/images/product/2.jpg" alt="img">
                                        </a></div>
                                    </td>
                                    <td style="width:40%">
                                        <div class="miniCartDescription">
                                            <h4><a href="http://localhost/walleee/html/product-details"> TShir TSHOP 09 </a></h4>
                                            <span class="size"> 12 x 1.5 L </span>

                                            <div class="price"><span> $15 </span></div>
                                        </div>
                                    </td>
                                    <td style="width:10%" class="miniCartQuantity"><a> X 1 </a></td>
                                    <td style="width:15%" class="miniCartSubtotal"><span> $120 </span></td>
                                    <td style="width:5%" class="delete"><a> x </a></td>
                                </tr>
                                <tr class="miniCartProduct">
                                    <td style="width:20%" class="miniCartProductThumb">
                                        <div><a href="http://localhost/walleee/html/product-details"> <img srv="http://localhost/images/product/5.jpg" alt="img">
                                        </a></div>
                                    </td>
                                    <td style="width:40%">
                                        <div class="miniCartDescription">
                                            <h4><a href="http://localhost/walleee/html/product-details"> Tshir 2014 </a></h4>
                                            <span class="size"> 12 x 1.5 L </span>

                                            <div class="price"><span> $30 </span></div>
                                        </div>
                                    </td>
                                    <td style="width:10%" class="miniCartQuantity"><a> X 1 </a></td>
                                    <td style="width:15%" class="miniCartSubtotal"><span> $80 </span></td>
                                    <td style="width:5%" class="delete"><a> x </a></td>
                                </tr>
                                <tr class="miniCartProduct">
                                    <td style="width:20%" class="miniCartProductThumb">
                                        <div><a href="http://localhost/walleee/html/product-details"> <img srv="http://localhost/images/product/3.jpg" alt="img">
                                        </a></div>
                                    </td>
                                    <td style="width:40%">
                                        <div class="miniCartDescription">
                                            <h4><a href="http://localhost/walleee/html/product-details"> TSHOP T shirt DO20 </a></h4>
                                            <span class="size"> 12 x 1.5 L </span>

                                            <div class="price"><span> $15 </span></div>
                                        </div>
                                    </td>
                                    <td style="width:10%" class="miniCartQuantity"><a> X 1 </a></td>
                                    <td style="width:15%" class="miniCartSubtotal"><span> $55 </span></td>
                                    <td style="width:5%" class="delete"><a> x </a></td>
                                </tr>
                                <tr class="miniCartProduct">
                                    <td style="width:20%" class="miniCartProductThumb">
                                        <div><a href="http://localhost/walleee/html/product-details"> <img srv="http://localhost/images/product/4.jpg" alt="img">
                                        </a></div>
                                    </td>
                                    <td style="width:40%">
                                        <div class="miniCartDescription">
                                            <h4><a href="http://localhost/walleee/html/product-details"> T shirt Black </a></h4>
                                            <span class="size"> 12 x 1.5 L </span>

                                            <div class="price"><span> $44 </span></div>
                                        </div>
                                    </td>
                                    <td style="width:10%" class="miniCartQuantity"><a> X 1 </a></td>
                                    <td style="width:15%" class="miniCartSubtotal"><span> $40 </span></td>
                                    <td style="width:5%" class="delete"><a> x </a></td>
                                </tr>
                                <tr class="miniCartProduct">
                                    <td style="width:20%" class="miniCartProductThumb">
                                        <div><a href="http://localhost/walleee/html/product-details"> <img srv="http://localhost/images/site/winter.jpg"
                                                                                  alt="img"> </a></div>
                                    </td>
                                    <td style="width:40%">
                                        <div class="miniCartDescription">
                                            <h4><a href="http://localhost/walleee/html/product-details"> G Star T shirt </a></h4>
                                            <span class="size"> 12 x 1.5 L </span>

                                            <div class="price"><span> $80 </span></div>
                                        </div>
                                    </td>
                                    <td style="width:10%" class="miniCartQuantity"><a> X 1 </a></td>
                                    <td style="width:15%" class="miniCartSubtotal"><span> $8.80 </span></td>
                                    <td style="width:5%" class="delete"><a> x </a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!--/.miniCartTable-->

                        <div class="miniCartFooter text-right">
                            <h3 class="text-right subtotal"> Subtotal: $210 </h3>
                            <a class="btn btn-sm btn-danger" href="http://localhost/walleee/html/cart"> <i class="fa fa-shopping-cart"> </i> VIEW
                                CART </a><a
                                class="btn btn-sm btn-primary"> CHECKOUT </a></div>
                        <!--/.miniCartFooter-->

                    </div>
                    <!--/.dropdown-menu-->
                </div>
                <!--/.cartMenu-->

                <!-- 
<div class="search-box">
                    <div class="input-group">
                        <button class="btn btn-nobg getFullSearch" type="button"><i class="fa fa-search"> </i></button>
                    </div>
 -->
                    <!-- /input-group -->

                </div>
                <!--/.search-box -->
            </div>
            <!--/.navbar-nav hidden-xs-->
        </div>
        <!--/.nav-collapse -->

    </div>
    <!--/.container -->

    <div class="search-full text-right"><a class="pull-right search-close"> <i class=" fa fa-times-circle"> </i> </a>

        <div class="searchInputBox pull-right">
            <input type="search" data-searchurl="search?=" name="q" placeholder="start typing and hit enter to search"
                   class="search-input">
            <button class="btn-nobg search-btn" type="submit"><i class="fa fa-search"> </i></button>
        </div>
    </div>


    <!--/.search-full-->

</div>
<!-- /.Fixed navbar  -->


<div class="container main-container headerOffset">

			
    <div class="row innerPage">
    
        <!-- 
<div class="col-lg-8 col-md-8 col-sm-8">
            <div class="row userInfo">
<!~~             <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"> </span> ~~>
				<h3>We are a responsible e-commerce platform for planned purchases.</h3>
			
			
				
				 <h3>Walleee helps people make most of their money by helping them plan their purchases.<br>
  			
  					
  					
  							 All this without causing financial stress to our consumer by prohibiting credit card purchases.</h3>
			</div>
			<div class="col-lg-8 col-md-8 col-sm-8">
			
			</div>
			<br>
			<div class="col-lg-4 col-md-4 col-sm-4">
			
			
			</div>
			<br><br>
			<div class="col-lg-4 col-md-4 col-sm-4">
			<div class="col-centered input-append newsLatterBox text-center">
			<button class="btn  bg-gray" type="button"> How it works <i
                                        class="fa fa-long-arrow-right"> </i></button>
                                        </div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4">
			<div class="col-centered input-append newsLatterBox text-center">
<!~~                                 <input type="email" class="full text-center" placeholder="Email "> ~~>
                               <a href="http://localhost/walleee/html/create-account"> <button class="btn  bg-gray" type="button"> Signup <i
                                        class="fa fa-long-arrow-right"> </i></button></a>
                                       
                            </div>
            </div>
			<div>
<!~~   						<p><a class="btn btn-primary btn-lg" href="http://localhost" role="button">Take a tour</a></p> ~~>
<!~~                 <p class="lead text-center"> ... CONTENT GOES HERE .... </p> ~~>

			</div>
			<!~~ </div> ~~>
            
            <!~~/row end~~>
        </div>
        
        
        
        <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="row userInfo">
            <iframe width="350" height="250" src="https://www.youtube.com/embed/RVS8iczrs3s" frameborder="0" allowfullscreen></iframe>
<!~~             <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"> </span> ~~>
				
			</div>
			<!~~ </div> ~~>
            
            <!~~/row end~~>
            
                   
        </div>
        
        <!~~ 
<div class="col-lg-4 col-md-4 col-sm-4 col-centered">
                   
                    <ul>
                        <li>
                            <div class="input-append newsLatterBox text-center">
                                <input type="email" class="full text-center" placeholder="Email ">
                                <button class="btn  bg-gray" type="button"> Subscribe <i
                                        class="fa fa-long-arrow-right"> </i></button>
                            </div>
                        </li>
                    </ul>
                    
                    </div>
 ~~>
 -->
        <div class="row subCategoryList clearfix">
                <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4  text-center ">
                    <div class="thumbnail equalheight"><a class="subCategoryThumb" data-toggle="modal" data-dismiss="modal" href="#electronics"><img
                            src="http://localhost/images/site/demo/audio-equipment.png" class="img-rounded " alt="img"> </a> <a class="subCategoryTitle" href="#ModalLogin" data-toggle="modal" data-target="#Electronics" data-dismiss="modal"><span> Electronics </span></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4  text-center">
                    <div class="thumbnail equalheight"><a class="subCategoryThumb" href="#bikes" data-toggle="modal" data-dismiss="modal"  ><img
                            src="http://localhost/images/site/demo/bicycle.png" class="img-rounded " alt="img"> </a> <a
                            class="subCategoryTitle" href="#ModalLogin" data-toggle="modal" data-target="#bikes" data-dismiss="modal"><span> Bikes </span></a></div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4  text-center">
                    <div class="thumbnail equalheight"><a class="subCategoryThumb" href="#GameConsole" data-toggle="modal" data-dismiss="modal"><img
                            src="http://localhost/images/site/demo/game-console.png" class="img-rounded " alt="img"> </a> <a class="subCategoryTitle" href="#GameConsole" data-toggle="modal" data-target="#GameConsole" data-dismiss="modal"><span> Gaming Console </span></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4  text-center">
                    <div class="thumbnail equalheight"><a class="subCategoryThumb" href="#MobilePhones" data-toggle="modal" data-dismiss="modal"><img
                            src="http://localhost/images/site/demo/smartphone.png" class="img-rounded " alt="img"> </a> <a
                            class="subCategoryTitle" href="#MobilePhones" data-toggle="modal" data-target="#MobilePhones" data-dismiss="modal" ><span> Mobile phones </span></a></div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4  text-center">
                    <div class="thumbnail equalheight"><a class="subCategoryThumb" href="#handt" data-toggle="modal" data-dismiss="modal"><img
                            src="http://localhost/images/site/demo/sunbed.png" class="img-rounded  " alt="img"> </a> <a
                            class="subCategoryTitle" href="#handt" data-toggle="modal" data-target="#handt" data-dismiss="modal"><span> Holidays & Tours </span></a></div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4  text-center">
                    <div class="thumbnail equalheight"><a class="subCategoryThumb" href="#Other" data-toggle="modal" data-dismiss="modal"><img
                            src="http://localhost/images/site/6.jpeg" class="img-rounded " alt="img"> </a> <a
                            class="subCategoryTitle" href="#Other" data-toggle="modal" data-target="#Other" data-dismiss="modal"><span> Other </span></a></div>
                </div>
            </div> 
    </div>
    <!--/.innerPage-->
    <div style="clear:both"></div>
</div>
<!-- /.main-container -->


<div class="gap"></div>


<footer>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3  col-md-3 col-sm-4 col-xs-6">
                    <h3> Support </h3>
                    <ul>
                        <li class="supportLi">
                            <p> Have questions, please don't hesitate to contact us at </p>
<!--                             <h4><a class="inline" href="http://localhost/walleee/html/callto:+12025550151"> <strong> <i class="fa fa-phone"> </i> +1-202-555-0151 </strong> </a></h4> -->
                            <h4><a class="inline" href="http://localhost/walleee/html/mailto:friend@walleee.com"> <i class="fa fa-envelope-o"> </i>
                                friend@walleee.com </a></h4>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> Shop </h3>
                    <ul>
                        <li><a href="http://localhost/category">
                            Electronics
                        </a></li>
                        <!--<li><a href="http://localhost/walleee/html/#">
                            Women's</a></li>
                        <li><a href="http://localhost/walleee/html/#">
                            Kids'
                        </a></li>
                        <li><a href="http://localhost/walleee/html/#">Shoes
                        </a></li>
                        <li><a href="http://localhost/walleee/html/#">
                            Gift Cards
                        </a></li>-->

                    </ul>
                </div>

                <div style="clear:both" class="hide visible-xs"></div>

                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> Information </h3>
                    <ul class="list-unstyled footer-nav">
                        <li><a href="http://localhost/walleee/html/#">Questions?
                        </a></li>

                        <li><a href="http://localhost/walleee/html/#"> Order Status
                        </a></li>
                        <li><a href="http://localhost/walleee/html/#"> Sizing Charts
                        </a></li>
                        <li><a href="http://localhost/walleee/html/#"> Return Policy </a></li>
                        <li><a href="http://localhost/walleee/html/#">
                            Contact Us
                        </a></li>

                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> My Account </h3>
                    <ul>
                        <li><a href="http://localhost/walleee/html/account"> My Account </a></li>
                        <li><a href="http://localhost/walleee/html/my-address"> My Address </a></li>
                        <li><a href="http://localhost/walleee/html/wishlist"> Wish List </a></li>
                        <li><a href="http://localhost/walleee/html/order-list"> Order list </a></li>
                        <li><a href="http://localhost/walleee/html/order-status"> Order Status </a></li>
                    </ul>
                </div>

                <div style="clear:both" class="hide visible-xs"></div>

                <div class="col-lg-3  col-md-3 col-sm-6 col-xs-12 ">
                    <h3> Stay in touch </h3>
                    <ul>
                        <li>
                            <div class="input-append newsLatterBox text-center">
                                <input type="text" class="full text-center" placeholder="Email ">
                                <button class="btn  bg-gray" type="button"> Subscribe <i
                                        class="fa fa-long-arrow-right"> </i></button>
                            </div>
                        </li>
                    </ul>
                    <ul class="social">
                        <li><a href="http://localhost/walleee/html/http://facebook.com"> <i class=" fa fa-facebook"> &nbsp; </i> </a></li>
                        <li><a href="http://localhost/walleee/html/http://twitter.com"> <i class="fa fa-twitter"> &nbsp; </i> </a></li>
                        <li><a href="http://localhost/walleee/html/https://plus.google.com"> <i class="fa fa-google-plus"> &nbsp; </i> </a></li>
                        <li><a href="http://localhost/walleee/html/http://youtube.com"> <i class="fa fa-pinterest"> &nbsp; </i> </a></li>
                        <li><a href="http://localhost/walleee/html/http://youtube.com"> <i class="fa fa-youtube"> &nbsp; </i> </a></li>
                    </ul>
                </div>
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </div>
    <!--/.footer-->

    <div class="footer-bottom">
        <div class="container">
            <p class="pull-left"> &copy; Walleee 2017. All right reserved. </p>

            <div class="pull-right paymentMethodImg"><img height="30" class="pull-right"
                                                          srv="http://localhost/images/site/payment/master_card.png" alt="img"> <img
                    height="30" class="pull-right" srv="http://localhost/images/site/payment/visa_card.png" alt="img"><img height="30"
                                                                                                          class="pull-right"
                                                                                                          srv="http://localhost/images/site/payment/paypal.png"
                                                                                                          alt="img">
                <img height="30" class="pull-right" srv="http://localhost/images/site/payment/american_express_card.png" alt="img"> <img
                        height="30" class="pull-right" srv="http://localhost/images/site/payment/discover_network_card.png" alt="img">
                <img height="30" class="pull-right" srv="http://localhost/images/site/payment/google_wallet.png" alt="img">

            </div>
        </div>
    </div>
    <!--/.footer-bottom-->
</footer>


<!-- Le javascript
================================================== -->

<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js">
</script>
<script src="http://localhost/assets/bootstrap/js/bootstrap.min.js"></script>
<!-- include  parallax plugin -->
<script type="text/javascript" src="http://localhost/assets/js/jquery.parallax-1.1.js"></script>

<!-- optionally include helper plugins -->
<script type="text/javascript" src="http://localhost/assets/js/helper-plugins/jquery.mousewheel.min.js"></script>

<!-- include mCustomScrollbar plugin //Custom Scrollbar  -->

<script type="text/javascript" src="http://localhost/assets/js/jquery.mCustomScrollbar.js"></script>

<!-- include checkRadio plugin //Custom check & Radio  -->
<script type="text/javascript" src="http://fronteed.com/iCheck/icheck.js?v=1.0.1"></script>

<!-- include grid.js // for equal Div height  -->
<script src="http://localhost/assets/js/grids.js"></script>

<!-- include carousel slider plugin  -->
<script src="http://localhost/assets/js/owl.carousel.min.js"></script>

<!-- jQuery select2 // custom select   -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>

<!-- include touchspin.js // touch friendly input spinner component   -->
<script src="http://localhost/assets/js/bootstrap.touchspin.js"></script>

<!-- include custom script for site  -->
<script src="http://localhost/assets/js/script.js"></script>

<!--added for date formats-->
<script src="http://localhost/assets/js/moment.js"></script>
<script>
    
    $('.categorySelect').on('hide.bs.modal', function (
    
    	
    
    ) {
    // do something…
    console.log('Modal closed');
    //var npdp=0;
    $('.myModal').modal();
    //window.location.reload();
    // $('.totalprice').val('');
//     $('.perdayprice').val('');
//     $('.byWhen').val('');
});
    
    //var text = $('#DynamicValueAssignedHere').find('input[name="FirstName"]').val();
    
     $('.perdayprice').keyup(function(){
    //$('#DynamicValueAssignedHere').find('input[name="FirstName"]').keyup(function() {
    	//var dat=moment().format('YYYY-MM-DD'); 
    	//console.log('current date' +dat );
		//var dat=(d.getMonth()+1) + "-" + d.getDate() + "-" + d.getFullYear();
    	var newPerDayPrice = $(this).val();
    	console.log('new price per day' +newPerDayPrice );
    	console.log('Object ID' +$(this).attr('id'));
    	var category = $(this).attr('id');
    	var arr = category.split('_');
    	var eid=arr[1];
    	var totalpriceid = 'totalprice'+'_'+eid;
    	var perdaypriceid = 'perdayprice'+'_'+eid;
    	var bywhenid = 'byWhen'+'_'+eid;
    	console.log(totalpriceid);
    	var totalPrice = $('#'+totalpriceid).val();
    	console.log('total price' + totalPrice);
    	var noofdays = totalPrice / newPerDayPrice;
    	console.log('no of days' + noofdays);
    	var dat  = moment().add(noofdays, 'days');
    	dat = dat.format('YYYY-MM-DD');
    	console.log('current date' +dat );
    	
    	$('#'+bywhenid).val(dat);
    	
	});
	
	$('.byWhen').on("change",function(){
    
    	//$('.byWhen').datepicker();
    	//$('.byWhen').on("change",function(){
        var dat = $(this).val();
        console.log('Object ID' +$(this).attr('id'));
        var category = $(this).attr('id');
    	var arr = category.split('_');
    	var eid=arr[1];
    	var totalpriceid = 'totalprice'+'_'+eid;
    	var perdaypriceid = 'perdayprice'+'_'+eid;
    	var bywhenid = 'byWhen'+'_'+eid;
        
        
        var curdat=moment().format('YYYY-MM-DD'); 
        var chosenday = moment(dat);
        var curday = moment(curdat);
        var duration = moment.duration(chosenday.diff(curday));
        var noofdays = duration.asDays();
        //diff = diff.format('YYYY-MM-DD');
        console.log(' days' +noofdays );
    	
    	var totalPrice = $('#'+totalpriceid).val();
    	console.log('total price' + totalPrice);
    	var newPerDayPrice = totalPrice / noofdays;
    	newPerDayPrice = Math.round(newPerDayPrice)
    	console.log('new per day price' + newPerDayPrice);
    	$('#'+perdaypriceid).val(newPerDayPrice);
    	
	});


    </script>




</body>
</html>


