<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="assets/ico/favicon.png">
    <title>TSHOP - Bootstrap E-Commerce Parallax Theme</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Just for debugging purposes. -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- include pace script for automatic web page progress bar  -->

    <script>
        paceOptions = {
            elements: true
        };
    </script>
    <script src="assets/js/pace.min.js"></script>
</head>

<body>

<!-- Modal Login start -->
<div class="modal signUpContent fade" id="ModalLogin" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
                <h3 class="modal-title-site text-center"> Login to TSHOP </h3>
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
                    <a href="forgot-password.html"> Lost your password? </a></p>
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
                <div class="control-group"><a class="fb_button btn  btn-block btn-lg " href="#"> SIGNUP WITH
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
                <p class="text-center"> Already member? <a data-toggle="modal" data-dismiss="modal" href="#ModalLogin">
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
                            <li><a href="#"> <span class="hidden-xs">HELP</span><i
                                    class="glyphicon glyphicon-info-sign hide visible-xs "></i> </a></li>
                            <li class="phone-number"><a href="callto:+12025550151"> <span> <i
                                    class="glyphicon glyphicon-phone-alt "></i></span> <span class="hidden-xs"
                                                                                             style="margin-left:5px"> +1-202-555-0151 </span>
                            </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-xs-6 col-md-6 no-margin no-padding">
                    <div class="pull-right">
                        <ul class="userMenu">
                            <li><a href="account-1.html"><span class="hidden-xs"> My Account</span> <i
                                    class="glyphicon glyphicon-user hide visible-xs "></i></a></li>
                            <li><a href="#" data-toggle="modal" data-target="#ModalLogin"> <span class="hidden-xs">Sign In</span>
                                <i class="glyphicon glyphicon-log-in hide visible-xs "></i> </a></li>
                            <li class="hidden-xs"><a href="#" data-toggle="modal" data-target="#ModalSignup"> Create
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
                    class="cartRespons colorWhite"> Cart ($210.00) </span></button>
            <a class="navbar-brand " href="index.html"> <img src="images/logo.png" alt="TSHOP"> </a>

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
                                <div><a href="product-details.html"> <img src="images/product/3.jpg" alt="img"> </a>
                                </div>
                            </td>
                            <td style="width:40%">
                                <div class="miniCartDescription">
                                    <h4><a href="product-details.html"> TSHOP T shirt Black </a></h4>
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
                                <div><a href="product-details.html"> <img src="images/product/2.jpg" alt="img"> </a>
                                </div>
                            </td>
                            <td style="width:40%">
                                <div class="miniCartDescription">
                                    <h4><a href="product-details.html"> TSHOP T shirt Black </a></h4>
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
                                <div><a href="product-details.html"> <img src="images/product/5.jpg" alt="img"> </a>
                                </div>
                            </td>
                            <td style="width:40%">
                                <div class="miniCartDescription">
                                    <h4><a href="product-details.html"> TSHOP T shirt Black </a></h4>
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
                                <div><a href="product-details.html"> <img src="images/product/3.jpg" alt="img"> </a>
                                </div>
                            </td>
                            <td style="width:40%">
                                <div class="miniCartDescription">
                                    <h4><a href="product-details.html"> TSHOP T shirt Black </a></h4>
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
                                <div><a href="product-details.html"> <img src="images/product/3.jpg" alt="img"> </a>
                                </div>
                            </td>
                            <td style="width:40%">
                                <div class="miniCartDescription">
                                    <h4><a href="product-details.html"> TSHOP T shirt Black </a></h4>
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
                                <div><a href="product-details.html"> <img src="images/product/4.jpg" alt="img"> </a>
                                </div>
                            </td>
                            <td style="width:40%">
                                <div class="miniCartDescription">
                                    <h4><a href="product-details.html"> TSHOP T shirt Black </a></h4>
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
                    <a class="btn btn-sm btn-danger" href="cart.html"> <i class="fa fa-shopping-cart"> </i> VIEW CART
                    </a> <a href="checkout-0.html"
                            class="btn btn-sm btn-primary"> CHECKOUT </a></div>
                <!--/.miniCartFooter-->

            </div>
            <!--/.cartMenu-->
        </div>
        <!--/.navbar-cart-->

        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="index.html"> Home </a></li>
                <li class="dropdown megamenu-fullwidth"><a data-toggle="dropdown" class="dropdown-toggle" href="#"> New
                    Products <b class="caret"> </b> </a>
                    <ul class="dropdown-menu">
                        <li class="megamenu-content ">
                            <ul class="col-lg-3  col-sm-3 col-md-3 unstyled noMarginLeft newCollectionUl">
                                <li class="no-border">
                                    <p class="promo-1"><strong> NEW COLLECTION </strong></p>
                                </li>
                                <li><a href="category.html"> ALL NEW PRODUCTS </a></li>
                                <li><a href="category.html"> NEW TOPS </a></li>
                                <li><a href="category.html"> NEW SHOES </a></li>
                                <li><a href="category.html"> NEW TSHIRT </a></li>
                                <li><a href="category.html"> NEW TSHOP </a></li>
                            </ul>
                            <ul class="col-lg-3  col-sm-3 col-md-3  col-xs-4">
                                <li><a class="newProductMenuBlock" href="product-details.html"> <img
                                        class="img-responsive" src="images/site/promo1.jpg" alt="product"> <span
                                        class="ProductMenuCaption"> <i class="fa fa-caret-right"> </i> JEANS </span>
                                </a></li>
                            </ul>
                            <ul class="col-lg-3  col-sm-3 col-md-3 col-xs-4">
                                <li><a class="newProductMenuBlock" href="product-details.html"> <img
                                        class="img-responsive" src="images/site/promo2.jpg" alt="product"> <span
                                        class="ProductMenuCaption"> <i
                                        class="fa fa-caret-right"> </i> PARTY DRESS </span> </a></li>
                            </ul>
                            <ul class="col-lg-3  col-sm-3 col-md-3 col-xs-4">
                                <li><a class="newProductMenuBlock" href="product-details.html"> <img
                                        class="img-responsive" src="images/site/promo3.jpg" alt="product"> <span
                                        class="ProductMenuCaption"> <i class="fa fa-caret-right"> </i> SHOES </span>
                                </a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <!-- change width of megamenu = use class > megamenu-fullwidth, megamenu-60width, megamenu-40width -->
                <li class="dropdown active megamenu-80width "><a data-toggle="dropdown" class="dropdown-toggle"
                                                                 href="#"> SHOP <b class="caret"> </b> </a>
                    <ul class="dropdown-menu">
                        <li class="megamenu-content">

                            <!-- megamenu-content -->

                            <ul class="col-lg-2  col-sm-2 col-md-2  unstyled noMarginLeft">
                                <li>
                                    <p><strong> Women Collection </strong></p>
                                </li>
                                <li><a href="#"> Kameez </a></li>
                                <li><a href="#"> Tops </a></li>
                                <li><a href="#"> Shoes </a></li>
                                <li><a href="#"> T shirt </a></li>
                                <li><a href="#"> TSHOP </a></li>
                                <li><a href="#"> Party Dress </a></li>
                                <li><a href="#"> Women Fragrances </a></li>
                            </ul>
                            <ul class="col-lg-2  col-sm-2 col-md-2  unstyled">
                                <li>
                                    <p><strong> Men Collection </strong></p>
                                </li>
                                <li><a href="#"> Panjabi </a></li>
                                <li><a href="#"> Male Fragrances </a></li>
                                <li><a href="#"> Scarf </a></li>
                                <li><a href="#"> Sandal </a></li>
                                <li><a href="#"> Underwear </a></li>
                                <li><a href="#"> Winter Collection </a></li>
                                <li><a href="#"> Men Accessories </a></li>
                            </ul>
                            <ul class="col-lg-2  col-sm-2 col-md-2  unstyled">
                                <li>
                                    <p><strong> Top Brands </strong></p>
                                </li>
                                <li><a href="#"> Diesel </a></li>
                                <li><a href="#"> Farah </a></li>
                                <li><a href="#"> G-Star RAW </a></li>
                                <li><a href="#"> Lyle & Scott </a></li>
                                <li><a href="#"> Pretty Green </a></li>
                                <li><a href="#"> TSHOP </a></li>
                                <li><a href="#"> TANJIM </a></li>
                            </ul>
                            <ul class="col-lg-3  col-sm-3 col-md-3 col-xs-6">
                                <li class="no-margin productPopItem "><a href="product-details.html"> <img
                                        class="img-responsive" src="images/site/g4.jpg" alt="img"> </a> <a
                                        class="text-center productInfo alpha90" href="product-details.html"> Eodem modo
                                    typi <br>
                                    <span> $60 </span> </a></li>
                            </ul>
                            <ul class="col-lg-3  col-sm-3 col-md-3 col-xs-6">
                                <li class="no-margin productPopItem relative"><a href="product-details.html"> <img
                                        class="img-responsive" src="images/site/g5.jpg" alt="img"> </a> <a
                                        class="text-center productInfo alpha90" href="product-details.html"> Eodem modo
                                    typi <br>
                                    <span> $60 </span> </a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="dropdown megamenu-fullwidth"><a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    PAGES <b class="caret"> </b> </a>
                    <ul class="dropdown-menu">
                        <li class="megamenu-content ProductDetailsList">

                            <!-- remove .ProductDetailsList class from megamenu-content || this class for demo uses only -->

                            <!-- megamenu-content -->

                            <h3 class="promo-1 no-margin hidden-xs">60 + HTML PAGES || AVAILABLE ONLY AT WRAP
                                BOOTSTRAP </h3>

                            <h3 class="promo-1sub hidden-xs"> Complete Parallax E-Commerce Boostrap Template, Responsive
                                on any Device, 10+ color Theme + Parallax Effect </h3>

                            <ul class="col-lg-2  col-sm-2 col-md-2 unstyled">
                                <li class="no-border">
                                    <p><strong> Home Pages </strong></p>
                                </li>
                                <li><a href="index.html"> Home Version 1 </a></li>
                                <li><a href="index2.html"> Home Version 2 </a></li>
                                <li><a href="index3.html"> Home Version 3 (BOXES) </a></li>
                                <li><a href="index4.html"> Home Version 4 (LOOK 2)</a></li>
                                <li><a href="index5.html"> Home Version 5 (LOOK 3)</a></li>
                                <li><a href="index6.html"> Home Version 6 (STORY)</a></li>
                                <li><a href="index-v-7.html"> Home Version 7 (Flat) <span class="label label-success">new</span></a>
                                </li>
                                <li><a href="index-header2.html"> Header Version 2 </a></li>
                                <li><a href="index-header3.html"> Header Version 3 </a></li>
                                  <li><a href="index-logged-in.html">Topbar Logged In user menu <span
                                        class="label label-success">new</span></a></li>
                                <li><a href="sidebar-shopping-cart.html">Sidebar Shopping cart <span
                                        class="label label-success">new</span></a></li>
                            </ul>

                            <ul class="col-lg-2  col-sm-2 col-md-2 unstyled">
                                <li class="no-border">
                                    <p><strong> Featured Pages </strong></p>
                                </li>
                                <li><a href="category.html"> Category </a></li>
                                <li><a href="category2.html"> Category Style 2 [Parallax] </a></li>
                                <li><a href="sub-category.html"> Sub Category </a></li>
                                <li><a href="category-list.html"> Category List View </a></li>
                                <li><a href="category-product-hover.html"> Category [Product Hover] </a></li>
                                <li><a href="category-product-slide.html"> Category [Product Slide] </a></li>

                                <li><a href="cart.html"> Cart </a></li>
                                <li><a href="about-us-3.html"> About Us V3 <span
                                        class="label label-success">NEW</span> </a></li>
                                <li><a href="about-us-2.html"> About Us V2 </a></li>
                                <li><a href="about-us.html"> About Us V1 </a></li>
                                <li><a href="contact-us.html"> Contact us </a></li>
                                <li><a href="contact-us-2.html"> Contact us 2 (No Fixed Map) </a></li>
                                <li><a href="terms-conditions.html"> Terms &amp; Conditions </a></li>

                            </ul>

                            <ul class="col-lg-3  col-sm-3 col-md-3 unstyled ">
                                <li class="no-border">
                                    <p><strong> Product Details </strong></p>
                                </li>
                                <li><a href="product-details.html"> Product Details v1 </a></li>
                                <li><a href="product-details-style2.html"> Product Details v 2 </a></li>
                                <li><a href="product-details-style3.html"> Product Details v 3 (Custom Thumbnail
                                    Position)</a></li>
                                <li><a href="product-details-style4.html"> Product Details v 4 (with litebox)</a></li>


                                <li><a href="product-details-style5.html"> Product Details v 5 (Flat) <span
                                        class="label label-success">NEW</span> </a></li>
                                <li><a href="product-details-style5-1.html"> Product Details v 5.1 <span
                                        class="label label-success">NEW</span> </a></li>
                                <li><a href="product-details-style5-2.html"> Product Details v 5.2 <span
                                        class="label label-success">NEW</span> </a></li>
                                <li><a href="product-details-style5-3.html"> Product Details v 5.3 <span
                                        class="label label-success">NEW</span> </a></li>
                                <li><a href="product-details-style5-3-fadein.html"> Product Details v 5.3.1
                                    <small>(fadein)</small> <span
                                            class="label label-success">NEW</span> </a></li>
                                <li><a href="product-details-style5-4.html"> Product Details v 5.4  <span
                                        class="label label-success">NEW</span> </a></li>
                                <li><a href="product-details-style5-4.1-popup-video.html"> Product Details v 5.4.1
                                    <small>(popup video)</small><span
                                            class="label label-success">NEW</span> </a></li>
                                <li><a href="product-details-style5-4.1-with-zoom.html"> Product Details v 5.4.1
                                    <small>(zoom + litebox)</small> <span
                                            class="label label-success">NEW</span></a></li>

                            </ul>
                            <ul class="col-lg-2  col-sm-2 col-md-2 unstyled">
                                <li class="no-border">
                                    <p><strong> Checkout </strong></p>
                                </li>
                                <li><a href="checkout-0.html"> Checkout Before </a></li>
                                <li><a href="checkout-1.html"> checkout step 1 </a></li>
                                <li><a href="checkout-2.html"> checkout step 2 </a></li>
                                <li><a href="checkout-3.html"> checkout step 3 </a></li>
                                <li><a href="checkout-4.html"> checkout step 4 </a></li>
                                <li><a href="checkout-5.html"> checkout step 5 </a></li>
                                <li><a href="one-page-checkout.html"> One page checkout <span
                                        class="label label-success">NEW</span> </a></li>
                                <li><a href="thanks-for-order.html"> Thanks for order</a></li>
                            </ul>
                            <ul class="col-lg-1  col-sm-1 col-md-1 no-padding unstyled">
                                <li class="no-border">
                                    <p><strong> User Account </strong></p>
                                </li>
                                <li><a href="account-1.html"> Account Login </a></li>
                                <li><a href="account.html"> My Account </a></li>
                                <li><a href="my-address.html"> My Address </a></li>
                                <li><a href="user-information.html"> User information </a></li>
                                <li><a href="wishlist.html"> Wish List </a></li>
                                <li><a href="order-list.html"> Order list </a></li>
                                <li><a href="order-status.html"> Order Status </a></li>
                                <li><a href="forgot-password.html"> Forgot Password </a></li>
                            </ul>
                            <ul class="col-lg-2  col-sm-2 col-md-2 unstyled">
                                <li class="no-border">
                                    <p><strong> &nbsp; </strong></p>
                                </li>
                                <li><a href="blog.html"> Blog </a></li>
                                <li><a href="blog-details.html"> Blog Details </a></li>
                                <li><a href="single-product-modal.html"> Single Product Details Modal</a></li>
                                <li><a href="single-subscribe-modal.html"> Single Subscribe Modal</a></li>
                                <li><a href="error-page.html"> Error Page </a></li>
                                <li><a href="blank-page.html"> Blank Page </a></li>   <li><a href="form.html"> Basic Form Element </a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
				<li><a href="all-page-link.html" target="_blank"> All Page Link </a></li>
            </ul>
            </ul>

            <!--- this part will be hidden for mobile version -->
            <div class="nav navbar-nav navbar-right hidden-xs">
                <div class="dropdown  cartMenu "><a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i
                        class="fa fa-shopping-cart"> </i> <span class="cartRespons"> Cart ($210.00) </span> <b
                        class="caret"> </b> </a>

                    <div class="dropdown-menu col-lg-4 col-xs-12 col-md-4 ">
                        <div class="w100 miniCartTable scroll-pane">
                            <table>
                                <tbody>
                                <tr class="miniCartProduct">
                                    <td style="width:20%" class="miniCartProductThumb">
                                        <div><a href="product-details.html"> <img src="images/product/3.jpg" alt="img">
                                        </a></div>
                                    </td>
                                    <td style="width:40%">
                                        <div class="miniCartDescription">
                                            <h4><a href="product-details.html"> TSHOP Tshirt DO9 </a></h4>
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
                                        <div><a href="product-details.html"> <img src="images/product/2.jpg" alt="img">
                                        </a></div>
                                    </td>
                                    <td style="width:40%">
                                        <div class="miniCartDescription">
                                            <h4><a href="product-details.html"> TShir TSHOP 09 </a></h4>
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
                                        <div><a href="product-details.html"> <img src="images/product/5.jpg" alt="img">
                                        </a></div>
                                    </td>
                                    <td style="width:40%">
                                        <div class="miniCartDescription">
                                            <h4><a href="product-details.html"> Tshir 2014 </a></h4>
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
                                        <div><a href="product-details.html"> <img src="images/product/3.jpg" alt="img">
                                        </a></div>
                                    </td>
                                    <td style="width:40%">
                                        <div class="miniCartDescription">
                                            <h4><a href="product-details.html"> TSHOP T shirt DO20 </a></h4>
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
                                        <div><a href="product-details.html"> <img src="images/product/4.jpg" alt="img">
                                        </a></div>
                                    </td>
                                    <td style="width:40%">
                                        <div class="miniCartDescription">
                                            <h4><a href="product-details.html"> T shirt Black </a></h4>
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
                                        <div><a href="product-details.html"> <img src="images/site/winter.jpg"
                                                                                  alt="img"> </a></div>
                                    </td>
                                    <td style="width:40%">
                                        <div class="miniCartDescription">
                                            <h4><a href="product-details.html"> G Star T shirt </a></h4>
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
                            <a class="btn btn-sm btn-danger" href="cart.html"> <i class="fa fa-shopping-cart"> </i> VIEW
                                CART </a><a
                                class="btn btn-sm btn-primary"> CHECKOUT </a></div>
                        <!--/.miniCartFooter-->

                    </div>
                    <!--/.dropdown-menu-->
                </div>
                <!--/.cartMenu-->

                <div class="search-box">
                    <div class="input-group">
                        <button class="btn btn-nobg getFullSearch" type="button"><i class="fa fa-search"> </i></button>
                    </div>
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

    <!-- Main component call to action -->

    <div class="row">
        <div class="breadcrumbDiv col-lg-12">
            <ul class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">MEN COLLECTION</li>
            </ul>
        </div>
    </div>
    <!-- /.row  -->

    <div class="row">

        <!--left column-->

        <div class="col-lg-3 col-md-3 col-sm-12">
            <div class="panel-group" id="accordionNo">
                <!--Category-->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><a data-toggle="collapse" href="#collapseCategory"
                                                   class="collapseWill active ">
                            <span class="pull-left"> <i class="fa fa-caret-right"></i></span> Category </a></h4>
                    </div>
                    <div id="collapseCategory" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <ul class="nav nav-pills nav-stacked tree">
                                <li class="active dropdown-tree open-tree"><a class="dropdown-tree-a"> <span
                                        class="badge pull-right">42</span> WOMEN COLLECTION </a>
                                    <ul class="category-level-2 dropdown-menu-tree">
                                        <li class="dropdown-tree"><a class="dropdown-tree-a" href="sub-category.html">
                                            Tshirt</a></li>
                                        <li><a> Shoes</a></li>
                                        <li><a> Shirt</a></li>
                                        <li><a>T shirt</a></li>
                                        <li><a href="sub-category.html"> Shirt</a></li>
                                        <li><a href="sub-category.html">Fragrances</a></li>
                                        <li><a href="sub-category.html">Scarf</a></li>
                                        <li><a href="sub-category.html">Sandal</a></li>
                                        <li><a href="sub-category.html">Underwear</a></li>
                                        <li><a href="sub-category.html">Winter Collection</a></li>
                                        <li><a href="sub-category.html">Men Accessories</a></li>
                                    </ul>
                                </li>
                                <li><a href="#"> <span class="badge pull-right">42</span> MEN COLLECTION </a></li>
                                <li><a href="#"> <span class="badge pull-right">42</span> Baby & Kids </a></li>
                                <li><a href="#"> <span class="badge pull-right">42</span> Home & Kitchen </a></li>
                                <li><a href="#"> <span class="badge pull-right">42</span> Baby & Kids </a></li>
                                <li><a href="#"> <span class="badge pull-right">42</span> More Stores </a></li>
                                <li><a href="#"> <span class="badge pull-right">42</span> Offers Zone </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--/Category menu end-->

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><a class="collapseWill active " data-toggle="collapse"
                                                   href="#collapsePrice">
                            Price <span class="pull-left"> <i class="fa fa-caret-right"></i></span> </a> <span
                                class="pull-right clearFilter  label-danger"> Clear </span></h4>
                    </div>
                    <div id="collapsePrice" class="panel-collapse collapse in">
                        <div class="panel-body priceFilterBody">
                            <!-- -->
                            <label>
                                <input type="radio" name="agree" value="0"/>
                                100$ - 500$</label>
                            <br>
                            <label>
                                <input type="radio" name="agree" value="1"/>
                                500$ - 1000$</label>
                            <br>
                            <label>
                                <input type="radio" name="agree" value="2"/>
                                1000$ - 1500$</label>
                            <br>
                            <label>
                                <input type="radio" name="agree" value="3"/>
                                1500$ - 2000$</label>
                            <br>
                            <label>
                                <input type="radio" name="agree" value="4"/>
                                2000$ - 2500$</label>
                            <br>
                            <label>
                                <input type="radio" name="agree" value="5"/>
                                2500$ - 3000$</label>
                            <br>
                            <label>
                                <input type="radio" name="agree" value="6" disabled checked/>
                                Don't know</label>
                            <hr>
                            <p>Enter a Price range </p>

                            <form class="form-inline " role="form">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="exampleInputEmail2"
                                           placeholder="2000 $">
                                </div>
                                <div class="form-group sp"> -</div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="exampleInputPassword2"
                                           placeholder="3000 $">
                                </div>
                                <button type="submit" class="btn btn-default pull-right">check</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!--/price panel end-->

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><a data-toggle="collapse" href="#collapseBrand"
                                                   class="collapseWill active ">
                            Brand <span class="pull-left"> <i class="fa fa-caret-right"></i></span> </a></h4>
                    </div>
                    <div id="collapseBrand" class="panel-collapse collapse in">
                        <div class="panel-body smoothscroll maxheight300">
                            <div class="block-element">
                                <label>
                                    <input type="checkbox" name="tour" value="0"/>
                                    Armani </label>
                            </div>
                            <div class="block-element">
                                <label>
                                    <input type="checkbox" name="tour" value="1"/>
                                    Gucci </label>
                            </div>
                            <div class="block-element">
                                <label>
                                    <input type="checkbox" name="tour" value="2"/>
                                    Louis Vuitton </label>
                            </div>
                            <div class="block-element">
                                <label>
                                    <input type="checkbox" name="tour" value="3"/>
                                    Chanel </label>
                            </div>
                            <div class="block-element">
                                <label>
                                    <input type="checkbox" name="tour" value="3"/>
                                    Roberto Cavalli </label>
                            </div>
                            <div class="block-element">
                                <label>
                                    <input type="checkbox" name="tour" value="3"/>
                                    Valentino </label>
                            </div>
                            <div class="block-element">
                                <label>
                                    <input type="checkbox" name="tour" value="3"/>
                                    Ralph Lauren </label>
                            </div>
                            <div class="block-element">
                                <label>
                                    <input type="checkbox" name="tour" value="3"/>
                                    Miu Miu </label>
                            </div>
                            <div class="block-element">
                                <label>
                                    <input type="checkbox" name="tour" value="3"/>
                                    McQueen </label>
                            </div>
                            <div class="block-element">
                                <label>
                                    <input type="checkbox" name="tour" value="3"/>
                                    adidas </label>
                            </div>
                            <div class="block-element">
                                <label>
                                    <input type="checkbox" name="tour" value="3"/>
                                    Nike </label>
                            </div>
                            <div class="block-element">
                                <label>
                                    <input type="checkbox" name="tour" value="3"/>
                                    Jimmy Choo </label>
                            </div>
                            <div class="block-element">
                                <label>
                                    <input type="checkbox" name="tour" value="3"/>
                                    Bottega Veneta </label>
                            </div>
                            <div class="block-element">
                                <label>
                                    <input type="checkbox" name="tour" value="3"/>
                                    Donna Karan </label>
                            </div>
                            <div class="block-element">
                                <label>
                                    <input type="checkbox" name="tour" value="3"/>
                                    Oscar de la Renta </label>
                            </div>
                            <div class="block-element">
                                <label>
                                    <input type="checkbox" name="tour" value="3"/>
                                    Tods </label>
                            </div>
                            <div class="block-element">
                                <label>
                                    <input type="checkbox" name="tour" value="3"/>
                                    Burberry </label>
                            </div>
                            <div class="block-element">
                                <label>
                                    <input type="checkbox" name="tour" value="3"/>
                                    Michael Kors </label>
                            </div>
                            <div class="block-element">
                                <label>
                                    <input type="checkbox" name="tour" value="3"/>
                                    Mulberry </label>
                            </div>
                            <div class="block-element">
                                <label> &nbsp; </label>
                                <!-- keep it blank // -->
                            </div>
                        </div>
                    </div>
                </div>
                <!--/brand panel end-->

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><a data-toggle="collapse" href="#collapseColor"
                                                   class="collapseWill active ">
                            Color <span class="pull-left"> <i class="fa fa-caret-right"></i></span> </a></h4>
                    </div>
                    <div id="collapseColor" class="panel-collapse collapse in">
                        <div class="panel-body smoothscroll maxheight300 color-filter">
                            <div class="block-element">
                                <label>
                                    <input type="checkbox" name="tour" value="0"/>
                                    <small style="background-color:#333333"></small>
                                    Black <span>(123)</span> </label>
                            </div>
                            <div class="block-element">
                                <label>
                                    <input type="checkbox" name="tour" value="1"/>
                                    <small style="background-color:#1664c4"></small>
                                    Blue (434) </label>
                            </div>
                            <div class="block-element">
                                <label>
                                    <input type="checkbox" name="tour" value="2"/>
                                    <small style="background-color:#c00707"></small>
                                    Red (338) </label>
                            </div>
                            <div class="block-element">
                                <label>
                                    <input type="checkbox" name="tour" value="3"/>
                                    <small style="background-color:#6fcc14"></small>
                                    Green (253) </label>
                            </div>
                            <div class="block-element">
                                <label>
                                    <input type="checkbox" name="tour" value="3"/>
                                    <small style="background-color:#943f00"></small>
                                    Brown (240) </label>
                            </div>
                            <div class="block-element">
                                <label>
                                    <input type="checkbox" name="tour" value="3"/>
                                    <small style="background-color:#ff1cae"></small>
                                    Pink (212) </label>
                            </div>
                            <div class="block-element">
                                <label>
                                    <input type="checkbox" name="tour" value="3"/>
                                    <small style="background-color:#f5f5dc"></small>
                                    Beige (176) </label>
                            </div>
                            <div class="block-element">
                                <label>
                                    <input type="checkbox" name="tour" value="3"/>
                                    <small style="background-color:#adadad"></small>
                                    Grey (154) </label>
                            </div>
                            <div class="block-element">
                                <label>
                                    <input type="checkbox" name="tour" value="3"/>
                                    <small style="background-color:#5d00dc"></small>
                                    Purple (132) </label>
                            </div>
                            <div class="block-element">
                                <label>
                                    <input type="checkbox" name="tour" value="3"/>
                                    <small style="background-color:#f1f40e"></small>
                                    Yellow (104) </label>
                            </div>
                            <div class="block-element">
                                <label>
                                    <input type="checkbox" name="tour" value="3"/>
                                    <small style="background-color:#ffc600"></small>
                                    Orange (77) </label>
                            </div>
                            <div class="block-element">
                                <label>
                                    <input type="checkbox" name="tour" value="3"/>
                                    <small style="background-color:#9b1d00"></small>
                                    Maroon (76) </label>
                            </div>
                            <div class="block-element">
                                <label>
                                    <input type="checkbox" name="tour" value="3"/>
                                    <small style="background-color:#0a43a3"></small>
                                    Navy Blue (68) </label>
                            </div>
                            <div class="block-element">
                                <label>
                                    <input type="checkbox" name="tour" value="3"/>
                                    <small style="background-color:#ede4b2"></small>
                                    Tan (67) </label>
                            </div>
                            <div class="block-element">
                                <label>
                                    <input type="checkbox" name="tour" value="3"/>
                                    <small style="background-color:#ecf1ef"></small>
                                    Silver (49) </label>
                            </div>
                            <div class="block-element">
                                <label>
                                    <input type="checkbox" name="tour" value="3"/>
                                    <small style="background-color:#f3f1e7"></small>
                                    Off White (44) </label>
                            </div>
                            <div class="block-element">
                                <label> &nbsp; </label>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/color panel end-->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><a data-toggle="collapse" href="#collapseThree"
                                                   class="collapseWill active ">
                            Discount <span class="pull-left"> <i class="fa fa-caret-right"></i></span> </a></h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <div class="block-element">
                                <label>
                                    <input type="checkbox" name="tour" value="3"/>
                                    Non-Discounted items </label>
                            </div>
                            <div class="block-element">
                                <label>
                                    <input type="checkbox" name="tour" value="3"/>
                                    Discounted items </label>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/discount  panel end-->
            </div>
        </div>

        <!--right column-->
        <div class="col-lg-9 col-md-9 col-sm-12">
            <div class="w100 clearfix category-top">
                <h2> MEN COLLECTION </h2>

                <div class="categoryImage"><img src="images/site/category.jpg" class="img-responsive" alt="img"></div>
            </div>
            <!--/.category-top-->

            <div class="row subCategoryList clearfix">
                <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4  text-center ">
                    <div class="thumbnail equalheight"><a class="subCategoryThumb" href="sub-category.html"><img
                            src="images/product/3.jpg" class="img-rounded " alt="img"> </a> <a class="subCategoryTitle"><span> T shirt </span></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4  text-center">
                    <div class="thumbnail equalheight"><a class="subCategoryThumb" href="sub-category.html"><img
                            src="images/site/casual.jpg" class="img-rounded " alt="img"> </a> <a
                            class="subCategoryTitle"><span> Shirt </span></a></div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4  text-center">
                    <div class="thumbnail equalheight"><a class="subCategoryThumb" href="sub-category.html"><img
                            src="images/site/shoe.jpg" class="img-rounded " alt="img"> </a> <a class="subCategoryTitle"><span> shoes </span></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4  text-center">
                    <div class="thumbnail equalheight"><a class="subCategoryThumb" href="sub-category.html"><img
                            src="images/site/jewelry.jpg" class="img-rounded " alt="img"> </a> <a
                            class="subCategoryTitle"><span> Accessories </span></a></div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4  text-center">
                    <div class="thumbnail equalheight"><a class="subCategoryThumb" href="sub-category.html"><img
                            src="images/site/winter.jpg" class="img-rounded  " alt="img"> </a> <a
                            class="subCategoryTitle"><span> Winter Collection </span></a></div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4  text-center">
                    <div class="thumbnail equalheight"><a class="subCategoryThumb" href="sub-category.html"><img
                            src="images/site/Male-Fragrances.jpg" class="img-rounded " alt="img"> </a> <a
                            class="subCategoryTitle"><span> Fragrances </span></a></div>
                </div>
            </div>
            <!--/.subCategoryList-->

            <div class="w100 productFilter clearfix">
                <p class="pull-left"> Showing <strong>12</strong> products </p>

                <div class="pull-right ">
                    <div class="change-order pull-right">
                        <select class="form-control" name="orderby">
                            <option selected="selected">Default sorting</option>
                            <option value="popularity">Sort by popularity</option>
                            <option value="rating">Sort by average rating</option>
                            <option value="date">Sort by newness</option>
                            <option value="price">Sort by price: low to high</option>
                            <option value="price-desc">Sort by price: high to low</option>
                        </select>
                    </div>
                    <div class="change-view pull-right"><a href="#" title="Grid" class="grid-view"> <i
                            class="fa fa-th-large"></i> </a> <a href="#" title="List" class="list-view "><i
                            class="fa fa-th-list"></i></a></div>
                </div>
            </div>
            <!--/.productFilter-->
            <div class="row  categoryProduct xsResponse clearfix">
                <div class="item col-sm-4 col-lg-4 col-md-4 col-xs-6 list-view">
                    <div class="product">
                        <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist"
                           data-placement="left">
                            <i class="glyphicon glyphicon-heart"></i>
                        </a>

                        <div class="image">
                            <div class="quickview">
                                <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html"
                                   data-target="#productSetailsModalAjax">Quick View </a>
                            </div>
                            <a href="product-details.html"><img src="images/product/30.jpg" alt="img"
                                                                class="img-responsive"></a>

                            <div class="promotion"><span class="new-product"> NEW</span> <span
                                    class="discount">15% OFF</span></div>
                        </div>
                        <div class="description">
                            <h4><a href="product-details.html">aliquam erat volutpat</a></h4>

                            <div class="grid-description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                            </div>
                            <div class="list-description">
                                <p> Sed sed rutrum purus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Pellentesque risus lacus, iaculis in ante vitae, viverra hendrerit ante. Aliquam vel
                                    fermentum elit. Morbi rhoncus, neque in vulputate facilisis, leo tortor sollicitudin
                                    odio, quis pellentesque lorem nisi quis enim. In dolor mi, hendrerit at blandit
                                    vulputate, congue a purus. Sed eget turpis sit amet orci euismod accumsan. Praesent
                                    sit amet placerat elit. </p>
                            </div>
                            <span class="size">XL / XXL / S </span></div>
                        <div class="price"><span>$25</span></div>
                        <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                                class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
                    </div>
                </div>
                <!--/.item-->
                <div class="item col-sm-4 col-lg-4 col-md-4 col-xs-6 list-view">
                    <div class="product">
                        <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist"
                           data-placement="left">
                            <i class="glyphicon glyphicon-heart"></i>
                        </a>

                        <div class="image">
                            <div class="quickview">
                                <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html"
                                   data-target="#productSetailsModalAjax">Quick View </a>
                            </div>
                            <a href="product-details.html"><img src="images/product/31.jpg" alt="img"
                                                                class="img-responsive"></a>

                            <div class="promotion"><span class="discount">15% OFF</span></div>
                        </div>
                        <div class="description">
                            <h4><a href="product-details.html">ullamcorper suscipit lobortis </a></h4>

                            <div class="grid-description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                            </div>
                            <div class="list-description">
                                <p> Sed sed rutrum purus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Pellentesque risus lacus, iaculis in ante vitae, viverra hendrerit ante. Aliquam vel
                                    fermentum elit. Morbi rhoncus, neque in vulputate facilisis, leo tortor sollicitudin
                                    odio, quis pellentesque lorem nisi quis enim. In dolor mi, hendrerit at blandit
                                    vulputate, congue a purus. Sed eget turpis sit amet orci euismod accumsan. Praesent
                                    sit amet placerat elit. </p>
                            </div>
                            <span class="size">XL / XXL / S </span></div>
                        <div class="price"><span>$25</span></div>
                        <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                                class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
                    </div>
                </div>
                <!--/.item-->
                <div class="item col-sm-4 col-lg-4 col-md-4 col-xs-6 list-view">
                    <div class="product">
                        <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist"
                           data-placement="left">
                            <i class="glyphicon glyphicon-heart"></i>
                        </a>

                        <div class="image">
                            <div class="quickview">
                                <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html"
                                   data-target="#productSetailsModalAjax">Quick View </a>
                            </div>
                            <a href="product-details.html"><img src="images/product/34.jpg" alt="img"
                                                                class="img-responsive"></a>

                            <div class="promotion"><span class="new-product"> NEW</span></div>
                        </div>
                        <div class="description">
                            <h4><a href="product-details.html">demonstraverunt lectores </a></h4>

                            <div class="grid-description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                            </div>
                            <div class="list-description">
                                <p> Sed sed rutrum purus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Pellentesque risus lacus, iaculis in ante vitae, viverra hendrerit ante. Aliquam vel
                                    fermentum elit. Morbi rhoncus, neque in vulputate facilisis, leo tortor sollicitudin
                                    odio, quis pellentesque lorem nisi quis enim. In dolor mi, hendrerit at blandit
                                    vulputate, congue a purus. Sed eget turpis sit amet orci euismod accumsan. Praesent
                                    sit amet placerat elit. </p>
                            </div>
                            <span class="size">XL / XXL / S </span></div>
                        <div class="price"><span>$25</span> <span class="old-price">$75</span></div>
                        <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                                class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
                    </div>
                </div>
                <!--/.item-->
                <div class="item col-sm-4 col-lg-4 col-md-4 col-xs-6 list-view">
                    <div class="product">
                        <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist"
                           data-placement="left">
                            <i class="glyphicon glyphicon-heart"></i>
                        </a>

                        <div class="image">
                            <div class="quickview">
                                <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html"
                                   data-target="#productSetailsModalAjax">Quick View </a>
                            </div>
                            <a href="product-details.html"><img src="images/product/35.jpg" alt="img"
                                                                class="img-responsive"></a></div>
                        <div class="description">
                            <h4><a href="product-details.html">humanitatis per</a></h4>

                            <div class="grid-description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                            </div>
                            <div class="list-description">
                                <p> Sed sed rutrum purus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Pellentesque risus lacus, iaculis in ante vitae, viverra hendrerit ante. Aliquam vel
                                    fermentum elit. Morbi rhoncus, neque in vulputate facilisis, leo tortor sollicitudin
                                    odio, quis pellentesque lorem nisi quis enim. In dolor mi, hendrerit at blandit
                                    vulputate, congue a purus. Sed eget turpis sit amet orci euismod accumsan. Praesent
                                    sit amet placerat elit. </p>
                            </div>
                            <span class="size">XL / XXL / S </span></div>
                        <div class="price"><span>$25</span></div>
                        <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                                class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
                    </div>
                </div>
                <!--/.item-->
                <div class="item col-sm-4 col-lg-4 col-md-4 col-xs-6 list-view">
                    <div class="product">
                        <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist"
                           data-placement="left">
                            <i class="glyphicon glyphicon-heart"></i>
                        </a>

                        <div class="image">
                            <div class="quickview">
                                <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html"
                                   data-target="#productSetailsModalAjax">Quick View </a>
                            </div>
                            <a href="product-details.html"><img src="images/product/33.jpg" alt="img"
                                                                class="img-responsive"></a></div>
                        <div class="description">
                            <h4><a href="product-details.html">Eodem modo typi</a></h4>

                            <div class="grid-description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                            </div>
                            <div class="list-description">
                                <p> Sed sed rutrum purus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Pellentesque risus lacus, iaculis in ante vitae, viverra hendrerit ante. Aliquam vel
                                    fermentum elit. Morbi rhoncus, neque in vulputate facilisis, leo tortor sollicitudin
                                    odio, quis pellentesque lorem nisi quis enim. In dolor mi, hendrerit at blandit
                                    vulputate, congue a purus. Sed eget turpis sit amet orci euismod accumsan. Praesent
                                    sit amet placerat elit. </p>
                            </div>
                            <span class="size">XL / XXL / S </span></div>
                        <div class="price"><span>$25</span></div>
                        <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                                class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
                    </div>
                </div>
                <!--/.item-->
                <div class="item col-sm-4 col-lg-4 col-md-4 col-xs-6 list-view">
                    <div class="product">
                        <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist"
                           data-placement="left">
                            <i class="glyphicon glyphicon-heart"></i>
                        </a>

                        <div class="image">
                            <div class="quickview">
                                <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html"
                                   data-target="#productSetailsModalAjax">Quick View </a>
                            </div>
                            <a href="product-details.html"><img src="images/product/10.jpg" alt="img"
                                                                class="img-responsive"></a></div>
                        <div class="description">
                            <h4><a href="product-details.html">sequitur mutationem </a></h4>

                            <div class="grid-description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                            </div>
                            <div class="list-description">
                                <p> Sed sed rutrum purus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Pellentesque risus lacus, iaculis in ante vitae, viverra hendrerit ante. Aliquam vel
                                    fermentum elit. Morbi rhoncus, neque in vulputate facilisis, leo tortor sollicitudin
                                    odio, quis pellentesque lorem nisi quis enim. In dolor mi, hendrerit at blandit
                                    vulputate, congue a purus. Sed eget turpis sit amet orci euismod accumsan. Praesent
                                    sit amet placerat elit. </p>
                            </div>
                            <span class="size">XL / XXL / S </span></div>
                        <div class="price"><span>$25</span></div>
                        <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                                class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
                    </div>
                </div>
                <!--/.item-->
                <div class="item col-sm-4 col-lg-4 col-md-4 col-xs-6 list-view">
                    <div class="product">
                        <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist"
                           data-placement="left">
                            <i class="glyphicon glyphicon-heart"></i>
                        </a>

                        <div class="image">
                            <div class="quickview">
                                <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html"
                                   data-target="#productSetailsModalAjax">Quick View </a>
                            </div>
                            <a href="product-details.html"><img src="images/product/37.jpg" alt="img"
                                                                class="img-responsive"></a></div>
                        <div class="description">
                            <h4><a href="product-details.html">consuetudium lectorum.</a></h4>

                            <div class="grid-description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                            </div>
                            <div class="list-description">
                                <p> Sed sed rutrum purus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Pellentesque risus lacus, iaculis in ante vitae, viverra hendrerit ante. Aliquam vel
                                    fermentum elit. Morbi rhoncus, neque in vulputate facilisis, leo tortor sollicitudin
                                    odio, quis pellentesque lorem nisi quis enim. In dolor mi, hendrerit at blandit
                                    vulputate, congue a purus. Sed eget turpis sit amet orci euismod accumsan. Praesent
                                    sit amet placerat elit. </p>
                            </div>
                            <span class="size">XL / XXL / S </span></div>
                        <div class="price"><span>$25</span> <span class="old-price">$75</span></div>
                        <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                                class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
                    </div>
                </div>
                <!--/.item-->
                <div class="item col-sm-4 col-lg-4 col-md-4 col-xs-6 list-view">
                    <div class="product">
                        <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist"
                           data-placement="left">
                            <i class="glyphicon glyphicon-heart"></i>
                        </a>

                        <div class="image">
                            <div class="quickview">
                                <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html"
                                   data-target="#productSetailsModalAjax">Quick View </a>
                            </div>
                            <a href="product-details.html"><img src="images/product/16.jpg" alt="img"
                                                                class="img-responsive"></a></div>
                        <div class="description">
                            <h4><a href="product-details.html">parum claram</a></h4>

                            <div class="grid-description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                            </div>
                            <div class="list-description">
                                <p> Sed sed rutrum purus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Pellentesque risus lacus, iaculis in ante vitae, viverra hendrerit ante. Aliquam vel
                                    fermentum elit. Morbi rhoncus, neque in vulputate facilisis, leo tortor sollicitudin
                                    odio, quis pellentesque lorem nisi quis enim. In dolor mi, hendrerit at blandit
                                    vulputate, congue a purus. Sed eget turpis sit amet orci euismod accumsan. Praesent
                                    sit amet placerat elit. </p>
                            </div>
                            <span class="size">XL / XXL / S </span></div>
                        <div class="price"><span>$25</span> <span class="old-price">$75</span></div>
                        <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                                class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
                    </div>
                </div>
                <!--/.item-->
                <div class="item col-sm-4 col-lg-4 col-md-4 col-xs-6 list-view">
                    <div class="product">
                        <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist"
                           data-placement="left">
                            <i class="glyphicon glyphicon-heart"></i>
                        </a>

                        <div class="image">
                            <div class="quickview">
                                <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html"
                                   data-target="#productSetailsModalAjax">Quick View </a>
                            </div>
                            <a href="product-details.html"><img src="images/product/19.jpg" alt="img"
                                                                class="img-responsive"></a></div>
                        <div class="description">
                            <h4><a href="product-details.html">duis dolore </a></h4>

                            <div class="grid-description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                            </div>
                            <div class="list-description">
                                <p> Sed sed rutrum purus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Pellentesque risus lacus, iaculis in ante vitae, viverra hendrerit ante. Aliquam vel
                                    fermentum elit. Morbi rhoncus, neque in vulputate facilisis, leo tortor sollicitudin
                                    odio, quis pellentesque lorem nisi quis enim. In dolor mi, hendrerit at blandit
                                    vulputate, congue a purus. Sed eget turpis sit amet orci euismod accumsan. Praesent
                                    sit amet placerat elit. </p>
                            </div>
                            <span class="size">XL / XXL / S </span></div>
                        <div class="price"><span>$25</span></div>
                        <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                                class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
                    </div>
                </div>
                <!--/.item-->
                <div class="item col-sm-4 col-lg-4 col-md-4 col-xs-6 list-view">
                    <div class="product">
                        <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist"
                           data-placement="left">
                            <i class="glyphicon glyphicon-heart"></i>
                        </a>

                        <div class="image">
                            <div class="quickview">
                                <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html"
                                   data-target="#productSetailsModalAjax">Quick View </a>
                            </div>
                            <a href="product-details.html"><img src="images/product/15.jpg" alt="img"
                                                                class="img-responsive"></a>

                            <div class="promotion"><span class="new-product"> NEW</span> <span
                                    class="discount">15% OFF</span></div>
                        </div>
                        <div class="description">
                            <h4><a href="product-details.html">aliquam erat volutpat</a></h4>

                            <div class="grid-description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                            </div>
                            <div class="list-description">
                                <p> Sed sed rutrum purus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Pellentesque risus lacus, iaculis in ante vitae, viverra hendrerit ante. Aliquam vel
                                    fermentum elit. Morbi rhoncus, neque in vulputate facilisis, leo tortor sollicitudin
                                    odio, quis pellentesque lorem nisi quis enim. In dolor mi, hendrerit at blandit
                                    vulputate, congue a purus. Sed eget turpis sit amet orci euismod accumsan. Praesent
                                    sit amet placerat elit. </p>
                            </div>
                            <span class="size">XL / XXL / S </span></div>
                        <div class="price"><span>$25</span></div>
                        <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                                class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
                    </div>
                </div>
                <!--/.item-->
                <div class="item col-sm-4 col-lg-4 col-md-4 col-xs-6 list-view">
                    <div class="product">
                        <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist"
                           data-placement="left">
                            <i class="glyphicon glyphicon-heart"></i>
                        </a>

                        <div class="image">
                            <div class="quickview">
                                <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html"
                                   data-target="#productSetailsModalAjax">Quick View </a>
                            </div>
                            <a href="product-details.html"><img src="images/product/14.jpg" alt="img"
                                                                class="img-responsive"></a>

                            <div class="promotion"><span class="discount">15% OFF</span></div>
                        </div>
                        <div class="description">
                            <h4><a href="product-details.html">ullamcorper suscipit lobortis </a></h4>

                            <div class="grid-description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                            </div>
                            <div class="list-description">
                                <p> Sed sed rutrum purus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Pellentesque risus lacus, iaculis in ante vitae, viverra hendrerit ante. Aliquam vel
                                    fermentum elit. Morbi rhoncus, neque in vulputate facilisis, leo tortor sollicitudin
                                    odio, quis pellentesque lorem nisi quis enim. In dolor mi, hendrerit at blandit
                                    vulputate, congue a purus. Sed eget turpis sit amet orci euismod accumsan. Praesent
                                    sit amet placerat elit. </p>
                            </div>
                            <span class="size">XL / XXL / S </span></div>
                        <div class="price"><span>$25</span></div>
                        <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                                class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
                    </div>
                </div>
                <!--/.item-->
                <div class="item col-sm-4 col-lg-4 col-md-4 col-xs-6 list-view">
                    <div class="product">
                        <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist"
                           data-placement="left">
                            <i class="glyphicon glyphicon-heart"></i>
                        </a>

                        <div class="image">
                            <div class="quickview">
                                <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html"
                                   data-target="#productSetailsModalAjax">Quick View </a>
                            </div>
                            <a href="product-details.html"><img src="images/product/17.jpg" alt="img"
                                                                class="img-responsive"></a>

                            <div class="promotion"><span class="new-product"> NEW</span></div>
                        </div>
                        <div class="description">
                            <h4><a href="product-details.html">demonstraverunt lectores </a></h4>

                            <div class="grid-description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                            </div>
                            <div class="list-description">
                                <p> Sed sed rutrum purus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Pellentesque risus lacus, iaculis in ante vitae, viverra hendrerit ante. Aliquam vel
                                    fermentum elit. Morbi rhoncus, neque in vulputate facilisis, leo tortor sollicitudin
                                    odio, quis pellentesque lorem nisi quis enim. In dolor mi, hendrerit at blandit
                                    vulputate, congue a purus. Sed eget turpis sit amet orci euismod accumsan. Praesent
                                    sit amet placerat elit. </p>
                            </div>
                            <span class="size">XL / XXL / S </span></div>
                        <div class="price"><span>$25</span></div>
                        <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                                class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
                    </div>
                </div>
                <!--/.item-->
            </div>
            <!--/.categoryProduct || product content end-->

            <div class="w100 categoryFooter">
                <div class="pagination pull-left no-margin-top">
                    <ul class="pagination no-margin-top">
                        <li><a href="#">«</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                </div>
                <div class="pull-right pull-right col-sm-4 col-xs-12 no-padding text-right text-left-xs">
                    <p>Showing 1–450 of 12 results</p>
                </div>
            </div>
            <!--/.categoryFooter-->
        </div>
        <!--/right column end-->
    </div>
    <!-- /.row  -->
</div>
<!-- /main container -->

<div class="gap"></div>
<!-- Product Details Modal  -->
<!-- Modal -->
<div class="modal fade" id="productSetailsModalAjax" tabindex="-1" role="dialog"
     aria-labelledby="productSetailsModalAjaxLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!-- End Modal -->

<footer>
    <div class="footer" id="footer">

        <div class="container">
            <div class="row">
                <div class="col-lg-3  col-md-3 col-sm-4 col-xs-6">
                    <h3> Support </h3>
                    <ul>
                        <li class="supportLi">
                            <p> Lorem ipsum dolor sit amet, consectetur </p>
                            <h4><a class="inline" href="callto:+12025550151"> <strong> <i class="fa fa-phone"> </i> +1-202-555-0151 </strong> </a></h4>
                            <h4><a class="inline" href="mailto:help@yourweb.com"> <i class="fa fa-envelope-o"> </i>
                                help@yourweb.com </a></h4>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> Shop </h3>
                    <ul>
                        <li><a href="#">
                            Men's
                        </a></li>
                        <li><a href="#">
                            Women's</a></li>
                        <li><a href="#">
                            Kids'
                        </a></li>
                        <li><a href="#">Shoes
                        </a></li>
                        <li><a href="#">
                            Gift Cards
                        </a></li>

                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> Information </h3>
                    <ul class="list-unstyled footer-nav">
                        <li><a href="#">Questions?
                        </a></li>

                        <li><a href="#"> Order Status
                        </a></li>
                        <li><a href="#"> Sizing Charts
                        </a></li>
                        <li><a href="#"> Return Policy </a></li>
                        <li><a href="#">
                            Contact Us
                        </a></li>

                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> My Account </h3>
                    <ul>
                        <li><a href="account.html"> My Account </a></li>
                        <li><a href="my-address.html"> My Address </a></li>
                        <li><a href="wishlist.html"> Wish List </a></li>
                        <li><a href="order-list.html"> Order list </a></li>
                        <li><a href="order-status.html"> Order Status </a></li>
                    </ul>
                </div>
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
                        <li><a href="http://facebook.com"> <i class=" fa fa-facebook"> &nbsp; </i> </a></li>
                        <li><a href="http://twitter.com"> <i class="fa fa-twitter"> &nbsp; </i> </a></li>
                        <li><a href="https://plus.google.com"> <i class="fa fa-google-plus"> &nbsp; </i> </a></li>
                        <li><a href="http://youtube.com"> <i class="fa fa-pinterest"> &nbsp; </i> </a></li>
                        <li><a href="http://youtube.com"> <i class="fa fa-youtube"> &nbsp; </i> </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <p class="pull-left"> &copy; TSHOP 2014. All right reserved. </p>

            <div class="pull-right paymentMethodImg"><img height="30" class="pull-right"
                                                          src="images/site/payment/master_card.png" alt="img"> <img
                    height="30" class="pull-right" src="images/site/payment/visa_card.png" alt="img"><img height="30"
                                                                                                          class="pull-right"
                                                                                                          src="images/site/payment/paypal.png"
                                                                                                          alt="img">
                <img height="30" class="pull-right" src="images/site/payment/american_express_card.png" alt="img"> <img
                        height="30" class="pull-right" src="images/site/payment/discover_network_card.png" alt="img">
                <img height="30" class="pull-right" src="images/site/payment/google_wallet.png" alt="img">

            </div>
        </div>
    </div>
</footer>

<!-- Le javascript
================================================== -->

<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js">
</script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<!-- include  parallax plugin -->
<script type="text/javascript" src="assets/js/jquery.parallax-1.1.js"></script>

<!-- optionally include helper plugins -->
<script type="text/javascript" src="assets/js/helper-plugins/jquery.mousewheel.min.js"></script>

<!-- include mCustomScrollbar plugin //Custom Scrollbar  -->

<script type="text/javascript" src="assets/js/jquery.mCustomScrollbar.js"></script>

<!-- include icheck plugin // customized checkboxes and radio buttons   -->
<script type="text/javascript" src="assets/plugins/icheck-1.x/icheck.min.js"></script>

<!-- include grid.js // for equal Div height  -->
<script src="assets/js/grids.js"></script>

<!-- include carousel slider plugin  -->
<script src="assets/js/owl.carousel.min.js"></script>

<!-- jQuery select2 // custom select   -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>

<!-- include touchspin.js // touch friendly input spinner component   -->
<script src="assets/js/bootstrap.touchspin.js"></script>

<!-- include custom script for site  -->
<script src="assets/js/script.js"></script>
</body>
</html>
