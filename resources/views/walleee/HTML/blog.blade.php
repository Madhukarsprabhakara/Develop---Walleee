@include('walleee.html.walleee-header')


    <!-- Just for debugging purposes. -->
    <!-- html5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- include pace script for automatic web page progress bar  -->

    <script>
        paceOptions = {
            elements: true
        };
    </script>
    <script src="http://localhost/assets/js/pace.min.js"></script>
</head>
<body>

<!-- Modal Login start -->
<div class="modal signUpContent fade" id="ModalLogin" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
                <h3 class="modal-title-site text-center"> Login to Walleee </h3>
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
                                                            href="http://localhost/walleee/html/#ModalSignup"> Sign Up. </a> <br>
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
                            <li class="phone-number"><a href="http://localhost/walleee/html/callto:+12025550151"> <span> <i
                                    class="glyphicon glyphicon-phone-alt "></i></span> <span class="hidden-xs"
                                                                                             style="margin-left:5px"> +1-202-555-0151 </span>
 -->
                            </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-xs-6 col-md-6 no-margin no-padding">
                    <div class="pull-right">
                        <ul class="userMenu">
                            <li><a href="http://localhost/walleee/html/account-1"><span class="hidden-xs"> My Account</span> <i
                                    class="glyphicon glyphicon-user hide visible-xs "></i></a></li>
                            <li><a href="http://localhost/walleee/html/#" data-toggle="modal" data-target="#ModalLogin"> <span class="hidden-xs">Sign In</span>
                                <i class="glyphicon glyphicon-log-in hide visible-xs "></i> </a></li>
                            <li class="hidden-xs"><a href="http://localhost/walleee/html/#" data-toggle="modal" data-target="#ModalSignup"> Create
                                Account </a></li>
                        </ul>
                    </div>
                </div>
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
                    class="cartRespons colorWhite"> Cart ($210.0) </span></button>
            <a class="navbar-brand " href="http://localhost/walleee/html/index"> <img src="http://localhost/images/logo.png" alt="TSHOP"> </a>

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
                            <td style="20%" class="miniCartProductThumb">
                                <div><a href="http://localhost/walleee/html/product-details"> <img src="http://localhost/images/product/3.jpg" alt="img"> </a>
                                </div>
                            </td>
                            <td style="40%">
                                <div class="miniCartDescription">
                                    <h4><a href="http://localhost/walleee/html/product-details"> Denim T shirt Black </a></h4>
                                    <span class="size"> 12 x 1.5 L </span>

                                    <div class="price"><span> $8.80 </span></div>
                                </div>
                            </td>
                            <td style="10%" class="miniCartQuantity"><a> X 1 </a></td>
                            <td style="15%" class="miniCartSubtotal"><span> $8.80 </span></td>
                            <td style="5%" class="delete"><a> x </a></td>
                        </tr>
                        <tr class="miniCartProduct">
                            <td style="20%" class="miniCartProductThumb">
                                <div><a href="http://localhost/walleee/html/product-details"> <img src="http://localhost/images/product/2.jpg" alt="img"> </a>
                                </div>
                            </td>
                            <td style="40%">
                                <div class="miniCartDescription">
                                    <h4><a href="http://localhost/walleee/html/product-details"> Denim T shirt Black </a></h4>
                                    <span class="size"> 12 x 1.5 L </span>

                                    <div class="price"><span> $8.80 </span></div>
                                </div>
                            </td>
                            <td style="10%" class="miniCartQuantity"><a> X 1 </a></td>
                            <td style="15%" class="miniCartSubtotal"><span> $8.80 </span></td>
                            <td style="5%" class="delete"><a> x </a></td>
                        </tr>
                        <tr class="miniCartProduct">
                            <td style="20%" class="miniCartProductThumb">
                                <div><a href="http://localhost/walleee/html/product-details"> <img src="http://localhost/images/product/5.jpg" alt="img"> </a>
                                </div>
                            </td>
                            <td style="40%">
                                <div class="miniCartDescription">
                                    <h4><a href="http://localhost/walleee/html/product-details"> Denim T shirt Black </a></h4>
                                    <span class="size"> 12 x 1.5 L </span>

                                    <div class="price"><span> $8.80 </span></div>
                                </div>
                            </td>
                            <td style="10%" class="miniCartQuantity"><a> X 1 </a></td>
                            <td style="15%" class="miniCartSubtotal"><span> $8.80 </span></td>
                            <td style="5%" class="delete"><a> x </a></td>
                        </tr>
                        <tr class="miniCartProduct">
                            <td style="20%" class="miniCartProductThumb">
                                <div><a href="http://localhost/walleee/html/product-details"> <img src="http://localhost/images/product/3.jpg" alt="img"> </a>
                                </div>
                            </td>
                            <td style="40%">
                                <div class="miniCartDescription">
                                    <h4><a href="http://localhost/walleee/html/product-details"> Denim T shirt Black </a></h4>
                                    <span class="size"> 12 x 1.5 L </span>

                                    <div class="price"><span> $8.80 </span></div>
                                </div>
                            </td>
                            <td style="10%" class="miniCartQuantity"><a> X 1 </a></td>
                            <td style="15%" class="miniCartSubtotal"><span> $8.80 </span></td>
                            <td style="5%" class="delete"><a> x </a></td>
                        </tr>
                        <tr class="miniCartProduct">
                            <td style="20%" class="miniCartProductThumb">
                                <div><a href="http://localhost/walleee/html/product-details"> <img src="http://localhost/images/product/3.jpg" alt="img"> </a>
                                </div>
                            </td>
                            <td style="40%">
                                <div class="miniCartDescription">
                                    <h4><a href="http://localhost/walleee/html/product-details"> Denim T shirt Black </a></h4>
                                    <span class="size"> 12 x 1.5 L </span>

                                    <div class="price"><span> $8.80 </span></div>
                                </div>
                            </td>
                            <td style="10%" class="miniCartQuantity"><a> X 1 </a></td>
                            <td style="15%" class="miniCartSubtotal"><span> $8.80 </span></td>
                            <td style="5%" class="delete"><a> x </a></td>
                        </tr>
                        <tr class="miniCartProduct">
                            <td style="20%" class="miniCartProductThumb">
                                <div><a href="http://localhost/walleee/html/product-details"> <img src="http://localhost/images/product/4.jpg" alt="img"> </a>
                                </div>
                            </td>
                            <td style="40%">
                                <div class="miniCartDescription">
                                    <h4><a href="http://localhost/walleee/html/product-details"> Denim T shirt Black </a></h4>
                                    <span class="size"> 12 x 1.5 L </span>

                                    <div class="price"><span> $8.80 </span></div>
                                </div>
                            </td>
                            <td style="10%" class="miniCartQuantity"><a> X 1 </a></td>
                            <td style="15%" class="miniCartSubtotal"><span> $8.80 </span></td>
                            <td style="5%" class="delete"><a> x </a></td>
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
                <li ><a href="http://localhost/aboutus"> Home </a></li>
                <li ><a href="http://localhost/ourpillars"> Campaign </a></li>
                <li class="active"><a href="http://localhost/walleee/html/blog"> Social </a></li>
                
            </ul>
            </ul>

            <!--- this part will be hidden for mobile version -->
            <div class="nav navbar-nav navbar-right hidden-xs">
                <div class="dropdown  cartMenu "><!-- 
<a href="http://localhost/walleee/html/#" class="dropdown-toggle" data-toggle="dropdown"> <i
                        class="fa fa-shopping-cart"> </i> <span class="cartRespons"> Cart ($210.00) </span> <b
                        class="caret"> </b> </a>
 -->

                    <div class="dropdown-menu col-lg-4 col-xs-12 col-md-4 ">
                        <div class="w100 miniCartTable scroll-pane">
                            <table>
                                <tbody>
                                <tr class="miniCartProduct">
                                    <td style="width:20%" class="miniCartProductThumb">
                                        <div><a href="http://localhost/walleee/html/product-details"> <img src="http://localhost/images/product/3.jpg" alt="img">
                                        </a></div>
                                    </td>
                                    <td style="width:40%">
                                        <div class="miniCartDescription">
                                            <h4><a href="http://localhost/walleee/html/product-details"> Denim Tshirt DO9 </a></h4>
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
                                        <div><a href="http://localhost/walleee/html/product-details"> <img src="http://localhost/images/product/2.jpg" alt="img">
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
                                        <div><a href="http://localhost/walleee/html/product-details"> <img src="http://localhost/images/product/5.jpg" alt="img">
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
                                        <div><a href="http://localhost/walleee/html/product-details"> <img src="http://localhost/images/product/3.jpg" alt="img">
                                        </a></div>
                                    </td>
                                    <td style="width:40%">
                                        <div class="miniCartDescription">
                                            <h4><a href="http://localhost/walleee/html/product-details"> Denim T shirt DO20 </a></h4>
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
                                        <div><a href="http://localhost/walleee/html/product-details"> <img src="http://localhost/images/product/4.jpg" alt="img">
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
                                        <div><a href="http://localhost/walleee/html/product-details"> <img src="http://localhost/images/site/winter.jpg"
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

<section class="blog-intro parallaxOffset parallaxbg"
         style="background: url(images/blog/blogbg.jpg) no-repeat 50% -86px fixed; background-size: cover">
    <div class="display-table relative5 hw100">
        <div class="display-table-cell hw100 relative">
            <div class="container blogIntroContent zindex10 relative scrollme">
                <div class="row">
                    <div class="  wow  fadeInDown introContent text-center">
                       <!--  <h1 class="x2large"> TSHOP BLOG </h1> -->
                        <h5 class="parallaxSubtitle"> The latest fashion news, advice and comment. </h5>

                        <div class="subscribe-dropdown">
                            <div class="dropdown"><!-- 
<a class="btn btn-subscribe dropdown-toggle" id="dropdownMenu1"
                                                     data-toggle="dropdown" aria-expanded="true">Subscribe</a>
 -->
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li>
                                        <div>
                                            <label>
                                                <input name="option1" value="option1" type="checkbox">
                                                &nbsp; Latest News </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <label>
                                                <input name="option2" value="option2" type="checkbox">
                                                &nbsp; New Product </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <label>
                                                <input name="option3" value="option2" type="checkbox">
                                                &nbsp; Offer </label>
                                        </div>
                                    </li>
                                    <li>
                                        <input placeholder="Enter Your Email" id="subemail" name="subemail"
                                               type="text"/>
                                    </li>
                                   <!--  <li><a href="http://localhost/walleee/html/#" class="btn btn-block"> Subscribe </a></li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="overlay-shade"></div>
    <div class="background-overly g6"></div>
</section>
<!--/.blog-intro -->

<div class="blog-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-centered blog-left">
                <div class="bl-inner">
                    <div class="item-blog-post">
                        <div class="post-header clearfix">
                        <div id="pixlee_container"></div><script type="text/javascript">window.PixleeAsyncInit = function() {Pixlee.init({apiKey:'y2grhb9p6rk9L8Ahl7H5'});Pixlee.addSimpleWidget({widgetId:'500'});};</script><script src="//instafeed.assets.pixlee.com/assets/pixlee_widget_1_0_0.js"></script>
                            

                            
                        </div>
                        
                    </div>
                    <!--/.item-blog-post-->

                    <!-- 
<div class="item-blog-post">
                        <div class="post-header clearfix">
                            <h2 class=" wow fadeInDown  " data-wow-duration="0.2s"><a href="http://localhost/walleee/html/blog-details"> The 14
                                Fashion Blogger Instagrams to Follow Now </a></h2>

                            <div class="post-info"> by <span><a class="userBy">Detti S.</a></span> on
                                <span>Mar 24, 2015</span>

                                <div class="share-gallery pull-right no-float-xs "><a class="share-facebook"> <i
                                        class="fa fa-facebook-f"> </i> </a> <a class="share-twitter"
                                                                               href="http://localhost/walleee/html/http://facebook.com"> <i
                                        class="fa fa-twitter"> </i> </a> <a class="share-pinterest"
                                                                            href="http://localhost/walleee/html/http://facebook.com"> <i
                                        class="fa fa-pinterest-p"> </i> </a>
                                    <a class="share-email" href="http://localhost/walleee/html/#"> <i class="fa fa-envelope-o"> </i> </a>
                                </div>
                            </div>
                        </div>
                        <div class="post-main-view">
                            <div class="post-lead-image  wow fadeInDown  " data-wow-duration="0.2s"><a
                                    href="http://localhost/walleee/html/blog-details"> <img src="http://localhost/images/blog/unnamed3.jpg" class="img-responsive"
                                                                   alt="G"> </a></div>
                            <div class="post-description  wow fadeInDown  " data-wow-duration="0.2s">
                                <p>Content creation is central to your inbound marketing success, but as your volume
                                    of written content increases, inconsistencies are also bound to arise.
                                    Whether due to lack of clarity in your own head about the style with which you
                                    want to write, or disjointed communication across the content creators in your
                                    organization, failure to decide upon and document accepted editorial guidelines
                                    is a recipe for inconsistent messaging and an incoherent brand experience.</p>
                                <a href="http://localhost/walleee/html/blog-details" class="btn btn-more"> See More <i
                                        class="fa fa-long-arrow-right"></i> </a>
                            </div>
                        </div>
                    </div>
                    <!~~/.item-blog-post~~>

                    <div class="item-blog-post">
                        <div class="post-header clearfix">
                            <h2><a href="http://localhost/walleee/html/blog-details">The 14 Fashion Blogger Instagrams to Follow Now </a></h2>

                            <div class="post-info"> by <span><a class="userBy">Detti S.</a></span> on
                                <span>Mar 24, 2015</span>

                                <div class="share-gallery pull-right no-float-xs"><a class="share-facebook"> <i
                                        class="fa fa-facebook-f"> </i> </a> <a class="share-twitter"
                                                                               href="http://localhost/walleee/html/http://facebook.com"> <i
                                        class="fa fa-twitter"> </i> </a> <a class="share-pinterest"
                                                                            href="http://localhost/walleee/html/http://facebook.com"> <i
                                        class="fa fa-pinterest-p"> </i> </a>
                                    <a class="share-email" href="http://localhost/walleee/html/#"> <i class="fa fa-envelope-o"> </i> </a>
                                </div>
                            </div>
                        </div>
                        <div class="post-main-view">
                            <div class="post-lead-image  wow fadeInDown  " data-wow-duration="0.2s"><a
                                    href="http://localhost/walleee/html/blog-details">

                                <!~~ 16:9 aspect ratio ~~>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item"
                                            src="https://www.youtube.com/embed/Ud77cIZiNsE"></iframe>
                                </div>
                            </a></div>
                            <div class="post-description  wow fadeInDown  " data-wow-duration="0.2s">
                                <p>Content creation is central to your inbound marketing success, but as your volume
                                    of written content increases, inconsistencies are also bound to arise.
                                    Whether due to lack of clarity in your own head about the style with which you
                                    want to write, or disjointed communication across the content creators in your
                                    organization, failure to decide upon and document accepted editorial guidelines
                                    is a recipe for inconsistent messaging and an incoherent brand experience.</p>
                                <a href="http://localhost/walleee/html/blog-details" class="btn btn-more"> See More <i
                                        class="fa fa-long-arrow-right"></i> </a>
                            </div>
                        </div>
                    </div>
                    <!~~/.item-blog-post~~>

                    <div class="item-blog-post">
                        <div class="post-header clearfix">
                            <h2><a href="http://localhost/walleee/html/blog-details"> The 14 Fashion Blogger Instagrams to Follow Now </a></h2>

                            <div class="post-info"> by <span><a class="userBy">Detti S.</a></span> on
                                <span>Mar 24, 2015</span>

                                <div class="share-gallery pull-right no-float-xs"><a class="share-facebook"> <i
                                        class="fa fa-facebook-f"> </i> </a> <a class="share-twitter"
                                                                               href="http://localhost/walleee/html/http://facebook.com"> <i
                                        class="fa fa-twitter"> </i> </a> <a class="share-pinterest"
                                                                            href="http://localhost/walleee/html/http://facebook.com"> <i
                                        class="fa fa-pinterest-p"> </i> </a>
                                    <a class="share-email" href="http://localhost/walleee/html/#"> <i class="fa fa-envelope-o"> </i> </a>
                                </div>
                            </div>
                        </div>
                        <div class="post-main-view">
                            <div class="post-lead-image  wow fadeInDown  " data-wow-duration="0.2s"><a
                                    href="http://localhost/walleee/html/post-details"> <img src="http://localhost/images/blog/unnamed.jpg" class="img-responsive"
                                                                   alt="G"> </a></div>
                            <div class="post-description  wow fadeInDown  " data-wow-duration="0.2s">
                                <p>Content creation is central to your inbound marketing success, but as your volume
                                    of written content increases, inconsistencies are also bound to arise.
                                    Whether due to lack of clarity in your own head about the style with which you
                                    want to write, or disjointed communication across the content creators in your
                                    organization, failure to decide upon and document accepted editorial guidelines
                                    is a recipe for inconsistent messaging and an incoherent brand experience.</p>

                                <a href="http://localhost/walleee/html/blog-details" class="btn btn-more"> See More <i
                                        class="fa fa-long-arrow-right"></i> </a>
                            </div>
                        </div>
                    </div>
 -->
                    <!--/.item-blog-post-->

<!--                     <div class="loadMoreBlog clearfix text-center"><a class="btn  btn-block"> LOAD MORE </a></div> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!--/.blogwrapper -->

<div class="gap"></div>
@include('walleee.html.footer_demo')
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

<!-- include icheck plugin // customized checkboxes and radio buttons   -->
<script type="text/javascript" src="http://localhost/assets/plugins/icheck-1.x/icheck.min.js"></script>

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

<!-- Reveal Animations When You Scroll  -->
<script src="http://localhost/assets/js/wow.min.js"></script>
<script>
    new WOW().init();
</script>

</body>
</html>