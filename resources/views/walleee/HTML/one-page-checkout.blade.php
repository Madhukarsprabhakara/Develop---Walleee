<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://localhost/walleee/html/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://localhost/walleee/html/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://localhost/walleee/html/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="http://localhost/walleee/html/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="http://localhost/walleee/html/assets/ico/favicon.png">
    <title>WALLEEE - Save - Buy - Save again!</title>
    <!-- Bootstrap core CSS -->
    <link href="http://localhost/assets/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://localhost/assets/css/style.css" rel="stylesheet">

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
                            <li><a href="http://localhost/walleee/html/#"> <span class="hidden-xs">HELP</span><i
                                    class="glyphicon glyphicon-info-sign hide visible-xs "></i> </a></li>
                            <li class="phone-number"><a href="http://localhost/walleee/html/callto:+12025550151"> <span> <i
                                    class="glyphicon glyphicon-phone-alt "></i></span> <span class="hidden-xs"
                                                                                             style="margin-left:5px"> +1-202-555-0151 </span>
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
                    class="cartRespons colorWhite"> Cart ($210.00) </span></button>
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
                            <td style="width:20%" class="miniCartProductThumb">
                                <div><a href="http://localhost/walleee/html/product-details"> <img src="http://localhost/images/product/3.jpg" alt="img"> </a>
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
                                <div><a href="http://localhost/walleee/html/product-details"> <img src="http://localhost/images/product/2.jpg" alt="img"> </a>
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
                                <div><a href="http://localhost/walleee/html/product-details"> <img src="http://localhost/images/product/5.jpg" alt="img"> </a>
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
                                <div><a href="http://localhost/walleee/html/product-details"> <img src="http://localhost/images/product/3.jpg" alt="img"> </a>
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
                                <div><a href="http://localhost/walleee/html/product-details"> <img src="http://localhost/images/product/3.jpg" alt="img"> </a>
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
                                <div><a href="http://localhost/walleee/html/product-details"> <img src="http://localhost/images/product/4.jpg" alt="img"> </a>
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
                <li class="active"><a href="http://localhost/walleee/html/#"> Home </a></li>
                <li class="dropdown megamenu-fullwidth"><a data-toggle="dropdown" class="dropdown-toggle" href="http://localhost/walleee/html/#"> New
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
                                        class="img-responsive" src="http://localhost/images/site/promo1.jpg" alt="product"> <span
                                        class="ProductMenuCaption"> <i class="fa fa-caret-right"> </i> JEANS </span>
                                </a></li>
                            </ul>
                            <ul class="col-lg-3  col-sm-3 col-md-3 col-xs-4">
                                <li><a class="newProductMenuBlock" href="http://localhost/walleee/html/product-details"> <img
                                        class="img-responsive" src="http://localhost/images/site/promo2.jpg" alt="product"> <span
                                        class="ProductMenuCaption"> <i
                                        class="fa fa-caret-right"> </i> PARTY DRESS </span> </a></li>
                            </ul>
                            <ul class="col-lg-3  col-sm-3 col-md-3 col-xs-4">
                                <li><a class="newProductMenuBlock" href="http://localhost/walleee/html/product-details"> <img
                                        class="img-responsive" src="http://localhost/images/site/promo3.jpg" alt="product"> <span
                                        class="ProductMenuCaption"> <i class="fa fa-caret-right"> </i> SHOES </span>
                                </a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <!-- change width of megamenu = use class > megamenu-fullwidth, megamenu-60width, megamenu-40width -->
                <li class="dropdown megamenu-80width "><a data-toggle="dropdown" class="dropdown-toggle" href="http://localhost/walleee/html/#"> SHOP
                    <b class="caret"> </b> </a>
                    <ul class="dropdown-menu">
                        <li class="megamenu-content">

                            <!-- megamenu-content -->

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
                                        class="img-responsive" src="http://localhost/images/site/g4.jpg" alt="img"> </a> <a
                                        class="text-center productInfo alpha90" href="http://localhost/walleee/html/product-details"> Eodem modo
                                    typi <br>
                                    <span> $60 </span> </a></li>
                            </ul>
                            <ul class="col-lg-3  col-sm-3 col-md-3 col-xs-6">
                                <li class="no-margin productPopItem relative"><a href="http://localhost/walleee/html/product-details"> <img
                                        class="img-responsive" src="http://localhost/images/site/g5.jpg" alt="img"> </a> <a
                                        class="text-center productInfo alpha90" href="http://localhost/walleee/html/product-details"> Eodem modo
                                    typi <br>
                                    <span> $60 </span> </a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="dropdown megamenu-fullwidth"><a data-toggle="dropdown" class="dropdown-toggle" href="http://localhost/walleee/html/#">
                    PAGES <b class="caret"> </b> </a>
                    <ul class="dropdown-menu">
                        <li class="megamenu-content ProductDetailsList">

                            <!-- remove .ProductDetailsList class from megamenu-content || this class for demo uses only -->

                            <!-- megamenu-content -->

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
				<li><a href="http://localhost/walleee/html/all-page-link" target="_blank"> All Page Link </a></li>
            </ul>
            </ul>

            <!--- this part will be hidden for mobile version -->
            <div class="nav navbar-nav navbar-right hidden-xs">
                <div class="dropdown  cartMenu "><a href="http://localhost/walleee/html/#" class="dropdown-toggle" data-toggle="dropdown"> <i
                        class="fa fa-shopping-cart"> </i> <span class="cartRespons"> Cart ($210.00) </span> <b
                        class="caret"> </b> </a>

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


<!-- /.Fixed navbar  -->
<div class="container main-container headerOffset">
    <div class="row">
        <div class="breadcrumbDiv col-lg-12">
            <ul class="breadcrumb">
                <li><a href="http://localhost/walleee/html/index">Home</a></li>
                <li><a href="http://localhost/walleee/html/cart">Cart</a></li>
                <li class="active"> Checkout</li>
            </ul>
        </div>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-7">
            <h1 class="section-title-inner"><span><i
                    class="glyphicon glyphicon-shopping-cart"></i> ONEPAGE CHECKOUT</span></h1>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-5 rightSidebar">
            <h4 class="caps"><a href="http://localhost/walleee/html/category"><i class="fa fa-chevron-left"></i> Back to shopping </a></h4>
        </div>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-12">
            <div class="row userInfo">
                <div class="col-xs-12 col-sm-12">


                    <div class="w100 clearfix">
                        <div class="row userInfo">

                            <div style="clear: both"></div>

                            <div class="onepage-checkout col-lg-12">

                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingOne">
                                            <h4 class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion"
                                                   href="http://localhost/walleee/html/#BillingInformation" aria-expanded="true"
                                                   aria-controls="BillingInformation">
                                                    Billing information
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="BillingInformation" class="panel-collapse collapse in" role="tabpanel"
                                             aria-labelledby="BillingInformation">
                                            <div class="panel-body">

                                                <form class="form-inline" action="page" method="post">
                                                    <label class="radio inline">
                                                        <input id="exisitingAddress" type="radio" value="option1"
                                                               name="add"> Use my existing
                                                        Data address
                                                    </label>&nbsp;&nbsp;
                                                    <label class="radio inline">
                                                        <input id="newAddress" type="radio" value="option2" name="add">
                                                        I want to assign
                                                        new address
                                                    </label>


                                                </form>

                                                <hr>

                                                <div style="clear: both"></div>

                                                <div id="exisitingAddressBox" class="collapse in">
                                                    <div class="form-group uppercase"><strong>Select Billing
                                                        address</strong></div>
                                                    <form>

                                                        <div class="form-group required maxwidth300">
                                                            <label for="InputCountry">Select Address <sup>*</sup>
                                                            </label>
                                                            <select class="form-control" required aria-required="true"
                                                                    id="SelectAddress" name="SelectAddress">
                                                                <option value="">Address 1</option>
                                                                <option value="38">Address 2</option>
                                                                <option value="39">Address 3</option>
                                                                <option value="40">Address 4</option>
                                                                <option value="41">Address 5</option>
                                                            </select>
                                                        </div>
                                                    </form>


                                                </div>

                                                <div id="newBillingAddressBox" class="collapse">

                                                    <div class="form-group uppercase"><strong>New Billing
                                                        address</strong></div>


                                                    <form>
                                                        <div class="col-xs-12 col-sm-6">
                                                            <div class="form-group required">
                                                                <label for="InputName">First Name <sup>*</sup> </label>
                                                                <input required type="text" class="form-control"
                                                                       id="InputName" placeholder="First Name">
                                                            </div>
                                                            <div class="form-group required">
                                                                <label for="InputLastName">Last Name <sup>*</sup>
                                                                </label>
                                                                <input required type="text" class="form-control"
                                                                       id="InputLastName" placeholder="Last Name">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="InputEmail">Email </label>
                                                                <input type="text" class="form-control" id="InputEmail"
                                                                       placeholder="Email">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="InputCompany">Company </label>
                                                                <input type="text" class="form-control"
                                                                       id="InputCompany" placeholder="Company">
                                                            </div>
                                                            <div class="form-group required">
                                                                <label for="InputAddress">Address <sup>*</sup> </label>
                                                                <input required type="text" class="form-control"
                                                                       id="InputAddress" placeholder="Address">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="InputAddress2">Address (Line 2) </label>
                                                                <input type="text" class="form-control"
                                                                       id="InputAddress2" placeholder="Address">
                                                            </div>
                                                            <div class="form-group required">
                                                                <label for="InputCity">City <sup>*</sup> </label>
                                                                <input required type="text" class="form-control"
                                                                       id="InputCity" placeholder="City">
                                                            </div>
                                                            <div class="form-group required">
                                                                <label for="InputState">State <sup>*</sup> </label>

                                                                <select class="form-control" required
                                                                        aria-required="true" id="InputState"
                                                                        name="InputState">
                                                                    <option value="">Choose</option>
                                                                    <option value="1">Alabama</option>
                                                                    <option value="2">Alaska</option>
                                                                    <option value="3">Arizona</option>
                                                                    <option value="4">Arkansas</option>
                                                                    <option value="5">California</option>
                                                                    <option value="6">Colorado</option>
                                                                    <option value="7">Connecticut</option>
                                                                    <option value="8">Delaware</option>
                                                                    <option value="53">District of Columbia</option>
                                                                    <option value="9">Florida</option>
                                                                    <option value="10">Georgia</option>
                                                                    <option value="11">Hawaii</option>
                                                                    <option value="12">Idaho</option>
                                                                    <option value="13">Illinois</option>
                                                                    <option value="14">Indiana</option>
                                                                    <option value="15">Iowa</option>
                                                                    <option value="16">Kansas</option>
                                                                    <option value="17">Kentucky</option>
                                                                    <option value="18">Louisiana</option>
                                                                    <option value="19">Maine</option>
                                                                    <option value="20">Maryland</option>
                                                                    <option value="21">Massachusetts</option>
                                                                    <option value="22">Michigan</option>
                                                                    <option value="23">Minnesota</option>
                                                                    <option value="24">Mississippi</option>
                                                                    <option value="25">Missouri</option>
                                                                    <option value="26">Montana</option>
                                                                    <option value="27">Nebraska</option>
                                                                    <option value="28">Nevada</option>
                                                                    <option value="29">New Hampshire</option>
                                                                    <option value="30">New Jersey</option>
                                                                    <option value="31">New Mexico</option>
                                                                    <option value="32">New York</option>
                                                                    <option value="33">North Carolina</option>
                                                                    <option value="34">North Dakota</option>
                                                                    <option value="35">Ohio</option>
                                                                    <option value="36">Oklahoma</option>
                                                                    <option value="37">Oregon</option>
                                                                    <option value="38">Pennsylvania</option>
                                                                    <option value="51">Puerto Rico</option>
                                                                    <option value="39">Rhode Island</option>
                                                                    <option value="40">South Carolina</option>
                                                                    <option value="41">South Dakota</option>
                                                                    <option value="42">Tennessee</option>
                                                                    <option value="43">Texas</option>
                                                                    <option value="52">US Virgin Islands</option>
                                                                    <option value="44">Utah</option>
                                                                    <option value="45">Vermont</option>
                                                                    <option value="46">Virginia</option>
                                                                    <option value="47">Washington</option>
                                                                    <option value="48">West Virginia</option>
                                                                    <option value="49">Wisconsin</option>
                                                                    <option value="50">Wyoming</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-6">
                                                            <div class="form-group required">
                                                                <label for="InputZip">Zip / Postal Code <sup>*</sup>
                                                                </label>
                                                                <input required type="text" class="form-control"
                                                                       id="InputZip" placeholder="Zip / Postal Code">
                                                            </div>
                                                            <div class="form-group required">
                                                                <label for="InputCountry">Country <sup>*</sup> </label>
                                                                <select class="form-control" required
                                                                        aria-required="true" id="InputCountry"
                                                                        name="InputCountry">
                                                                    <option value="">Choose</option>
                                                                    <option value="38">Algeria</option>
                                                                    <option value="39">American Samoa</option>
                                                                    <option value="40">Andorra</option>
                                                                    <option value="41">Angola</option>
                                                                    <option value="42">Anguilla</option>
                                                                    <option value="43">Antigua and Barbuda</option>
                                                                    <option value="44">Argentina</option>
                                                                    <option value="45">Armenia</option>
                                                                    <option value="46">Aruba</option>
                                                                    <option value="24">Australia</option>
                                                                    <option value="2">Austria</option>
                                                                    <option value="47">Azerbaijan</option>
                                                                    <option value="48">Bahamas</option>
                                                                    <option value="49">Bahrain</option>
                                                                    <option value="50">Bangladesh</option>
                                                                    <option value="3">Belgium</option>
                                                                    <option value="34">Bolivia</option>
                                                                    <option value="4">Canada</option>
                                                                    <option value="5">China</option>
                                                                    <option value="16">Czech Republic</option>
                                                                    <option value="20">Denmark</option>
                                                                    <option value="7">Finland</option>
                                                                    <option value="8">France</option>
                                                                    <option value="1">Germany</option>
                                                                    <option value="9">Greece</option>
                                                                    <option value="22">HongKong</option>
                                                                    <option value="26">Ireland</option>
                                                                    <option value="29">Israel</option>
                                                                    <option value="10">Italy</option>
                                                                    <option value="32">Ivory Coast</option>
                                                                    <option value="11">Japan</option>
                                                                    <option value="12">Luxemburg</option>
                                                                    <option value="35">Mauritius</option>
                                                                    <option value="13">Netherlands</option>
                                                                    <option value="27">New Zealand</option>
                                                                    <option value="31">Nigeria</option>
                                                                    <option value="23">Norway</option>
                                                                    <option value="14">Poland</option>
                                                                    <option value="15">Portugal</option>
                                                                    <option value="36">Romania</option>
                                                                    <option value="25">Singapore</option>
                                                                    <option value="37">Slovakia</option>
                                                                    <option value="30">South Africa</option>
                                                                    <option value="28">South Korea</option>
                                                                    <option value="6">Spain</option>
                                                                    <option value="18">Sweden</option>
                                                                    <option value="19">Switzerland</option>
                                                                    <option value="33">Togo</option>
                                                                    <option value="17">United Kingdom</option>
                                                                    <option value="21">United States</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="InputAdditionalInformation">Additional
                                                                    information</label>
                                                                <textarea rows="3" cols="26"
                                                                          name="InputAdditionalInformation"
                                                                          class="form-control"
                                                                          id="InputAdditionalInformation"></textarea>
                                                            </div>
                                                            <div class="form-group required">
                                                                <label for="InputMobile">Mobile phone
                                                                    <sup>*</sup></label>
                                                                <input required type="tel" name="InputMobile"
                                                                       class="form-control" id="InputMobile">
                                                            </div>
                                                            <div class="form-group required">
                                                                <label for="addressAlias">Please assign an address title
                                                                    for future reference. <sup>*</sup></label>
                                                                <input required type="text" value="My address"
                                                                       name="addressAlias" class="form-control"
                                                                       id="addressAlias">
                                                            </div>
                                                        </div>
                                                    </form>

                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingTwo">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse"
                                                   data-parent="#accordion" href="http://localhost/walleee/html/#Shippinginformation"
                                                   aria-expanded="false" aria-controls="collapseTwo">
                                                    Shipping information
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="Shippinginformation" class="panel-collapse collapse" role="tabpanel"
                                             aria-labelledby="Shippinginformation">
                                            <div class="panel-body">

                                                <form class="form-inline" action="page" method="post">
                                                    <label class="radio inline">
                                                        <input id="existingShippingAddress" type="radio"
                                                               value="option-b1" name="add"> Same as
                                                        Billing address
                                                    </label>&nbsp;&nbsp;
                                                    <label class="radio inline">
                                                        <input id="newShippingAddress" type="radio" value="option-b2"
                                                               name="add"> New Shipping
                                                        address
                                                    </label>
                                                </form>
                                                <hr>
                                                <div style="clear: both"></div>

                                                <div class="expandBox collapse" id="newShippingAddressBox">

                                                    <div class="form-group uppercase"><strong>new shipping
                                                        address</strong></div>

                                                    <div class="col-xs-12">
                                                        <div class="form-group required">
                                                            <label for="InputName">First Name <sup>*</sup> </label>
                                                            <input placeholder="First Name" id="InputName"
                                                                   class="form-control" required
                                                                   type="text">
                                                        </div>
                                                        <div class="form-group required">
                                                            <label for="InputLastName">Last Name <sup>*</sup> </label>
                                                            <input placeholder="Last Name" id="InputLastName"
                                                                   class="form-control" required
                                                                   type="text">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="InputEmail">Email </label>
                                                            <input placeholder="Email" id="InputEmail"
                                                                   class="form-control"
                                                                   type="text">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="InputCompany">Company </label>
                                                            <input placeholder="Company" id="InputCompany"
                                                                   class="form-control"
                                                                   type="text">
                                                        </div>
                                                        <div class="form-group required">
                                                            <label for="InputAddress">Address <sup>*</sup> </label>
                                                            <input placeholder="Address" id="InputAddress"
                                                                   class="form-control" required
                                                                   type="text">
                                                        </div>

                                                        <div class="form-group required">
                                                            <label for="InputCity">City <sup>*</sup> </label>
                                                            <input placeholder="City" id="InputCity"
                                                                   class="form-control" required
                                                                   type="text">
                                                        </div>
                                                        <div class="form-group required">
                                                            <label for="InputState">State <sup>*</sup> </label>

                                                            <select name="InputState" id="InputState"
                                                                    aria-required="true" required
                                                                    class="form-control">
                                                                <option value="">Choose</option>
                                                                <option value="1">Alabama</option>
                                                                <option value="2">Alaska</option>
                                                                <option value="3">Arizona</option>
                                                                <option value="4">Arkansas</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse"
                                                   data-parent="#accordion" href="http://localhost/walleee/html/#Deliverymethod" aria-expanded="false"
                                                   aria-controls="Deliverymethod">
                                                    Delivery method
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="Deliverymethod" class="panel-collapse collapse" role="tabpanel"
                                             aria-labelledby="Deliverymethod">
                                            <div class="panel-body">
                                                <div class="w100 row">
                                                    <div class="form-group col-lg-4 col-sm-4 col-md-4 -col-xs-12">
                                                        <label for="id_country">Country</label>
                                                        <select class="form-control" required aria-required="true"
                                                                id="id_country" name="id_country">
                                                            <option value="">Choose</option>
                                                            <option value="38">Algeria</option>
                                                            <option value="39">American Samoa</option>
                                                            <option value="40">Andorra</option>
                                                            <option value="41">Angola</option>
                                                            <option value="42">Anguilla</option>
                                                            <option value="43">Antigua and Barbuda</option>
                                                            <option value="44">Argentina</option>
                                                            <option value="45">Armenia</option>
                                                            <option value="46">Aruba</option>
                                                            <option value="24">Australia</option>
                                                            <option value="2">Austria</option>
                                                            <option value="47">Azerbaijan</option>
                                                            <option value="48">Bahamas</option>
                                                            <option value="49">Bahrain</option>
                                                            <option value="50">Bangladesh</option>
                                                            <option value="3">Belgium</option>
                                                            <option value="34">Bolivia</option>
                                                            <option value="4">Canada</option>
                                                            <option value="5">China</option>
                                                            <option value="16">Czech Republic</option>
                                                            <option value="20">Denmark</option>
                                                            <option value="7">Finland</option>
                                                            <option value="8">France</option>
                                                            <option value="1">Germany</option>
                                                            <option value="9">Greece</option>
                                                            <option value="22">HongKong</option>
                                                            <option value="26">Ireland</option>
                                                            <option value="29">Israel</option>
                                                            <option value="10">Italy</option>
                                                            <option value="32">Ivory Coast</option>
                                                            <option value="11">Japan</option>
                                                            <option value="12">Luxemburg</option>
                                                            <option value="35">Mauritius</option>
                                                            <option value="13">Netherlands</option>
                                                            <option value="27">New Zealand</option>
                                                            <option value="31">Nigeria</option>
                                                            <option value="23">Norway</option>
                                                            <option value="14">Poland</option>
                                                            <option value="15">Portugal</option>
                                                            <option value="36">Romania</option>
                                                            <option value="25">Singapore</option>
                                                            <option value="37">Slovakia</option>
                                                            <option value="30">South Africa</option>
                                                            <option value="28">South Korea</option>
                                                            <option value="6">Spain</option>
                                                            <option value="18">Sweden</option>
                                                            <option value="19">Switzerland</option>
                                                            <option value="33">Togo</option>
                                                            <option value="17">United Kingdom</option>
                                                            <option selected="selected" value="21">United States
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <div id="states"
                                                         class="form-group  col-lg-4 col-sm-4 col-md-4 -col-xs-12">
                                                        <label for="id-state">State</label>
                                                        <select class="form-control" required aria-required="true"
                                                                id="id-state" name="id-state">
                                                            <option value="">Choose</option>
                                                            <option value="1">Alabama</option>
                                                            <option value="2">Alaska</option>
                                                            <option value="3">Arizona</option>
                                                            <option value="4">Arkansas</option>
                                                            <option value="5">California</option>
                                                            <option value="6">Colorado</option>
                                                            <option value="7">Connecticut</option>
                                                            <option value="8">Delaware</option>
                                                            <option value="9">Florida</option>
                                                            <option value="10">Georgia</option>
                                                            <option value="11">Hawaii</option>
                                                            <option value="12">Idaho</option>
                                                            <option value="13">Illinois</option>
                                                            <option value="14">Indiana</option>
                                                            <option value="15">Iowa</option>
                                                            <option value="16">Kansas</option>
                                                            <option value="17">Kentucky</option>
                                                            <option value="18">Louisiana</option>
                                                            <option value="19">Maine</option>
                                                            <option value="20">Maryland</option>
                                                            <option value="21">Massachusetts</option>
                                                            <option value="22">Michigan</option>
                                                            <option value="23">Minnesota</option>
                                                            <option value="24">Mississippi</option>
                                                            <option value="25">Missouri</option>
                                                            <option value="26">Montana</option>
                                                            <option value="27">Nebraska</option>
                                                            <option value="28">Nevada</option>
                                                            <option value="29">New Hampshire</option>
                                                            <option value="30">New Jersey</option>
                                                            <option value="31">New Mexico</option>
                                                            <option value="32">New York</option>
                                                            <option value="33">North Carolina</option>
                                                            <option value="34">North Dakota</option>
                                                            <option value="35">Ohio</option>
                                                            <option value="36">Oklahoma</option>
                                                            <option value="37">Oregon</option>
                                                            <option value="38">Pennsylvania</option>
                                                            <option value="39">Rhode Island</option>
                                                            <option value="40">South Carolina</option>
                                                            <option value="41">South Dakota</option>
                                                            <option value="42">Tennessee</option>
                                                            <option value="43">Texas</option>
                                                            <option value="44">Utah</option>
                                                            <option value="45">Vermont</option>
                                                            <option value="46">Virginia</option>
                                                            <option value="47">Washington</option>
                                                            <option value="48">West Virginia</option>
                                                            <option value="49">Wisconsin</option>
                                                            <option value="50">Wyoming</option>
                                                            <option value="51">Puerto Rico</option>
                                                            <option value="52">US Virgin Islands</option>
                                                            <option value="53">District of Columbia</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group  col-lg-4 col-sm-4 col-md-4 -col-xs-12">
                                                        <label for="zipcode">Zip Code</label>
                                                        <input type="text" id="zipcode" name="zipcode"
                                                               class="form-control">
                                                        (Needed for certain carriers.)
                                                    </div>
                                                    <div class="form-group col-lg-12 col-sm-12 col-md-12 -col-xs-12">
                                                        <table style="width:100%"
                                                               class="table-bordered table tablelook2">
                                                            <tbody>
                                                            <tr>
                                                                <td> Carrier</td>
                                                                <td>Method</td>
                                                                <td>Information</td>
                                                                <td>Price!</td>
                                                            </tr>
                                                            <tr>
                                                                <td><label class="radio">
                                                                    <input type="radio" name="optionsRadios"
                                                                           id="optionsRadios1" value="option1" checked>
                                                                    <i class="fa  fa-plane fa-2x"></i> </label></td>
                                                                <td> By Road</td>
                                                                <td>Pick up in-store</td>
                                                                <td>Free!</td>
                                                            </tr>
                                                            <tr>
                                                                <td><label class="radio">
                                                                    <input type="radio" name="optionsRadios"
                                                                           id="optionsRadios2" value="option2">
                                                                    <i class="fa fa-truck fa-2x"></i> </label></td>
                                                                <td>By Air</td>
                                                                <td>Delivery next day!</td>
                                                                <td>Free!</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse"
                                                   data-parent="#accordion" href="http://localhost/walleee/html/#Paymentmethod" aria-expanded="false"
                                                   aria-controls="Paymentmethod">
                                                    Payment method
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="Paymentmethod" class="panel-collapse collapse" role="tabpanel"
                                             aria-labelledby="Paymentmethod">
                                            <div class="panel-body">


                                                <div class="onepage-payment">

                                                    <div class="payment-method">
                                                        <label class="radio-inline" for="paypal">
                                                            <input name="radios" id="paypal" value="4" type="radio">
                                                            <img src="http://localhost/images/site/payment/paypal-small.png" height="18"
                                                                 alt="paypal"> Checkout with Paypal </label>

                                                    </div>

                                                    <div style="clear:both;"></div>

                                                    <div class="creditCardcollapse payment-method">

                                                        <label class="radio-inline" for="creditCard">
                                                            <input type="radio" name="radios" id="creditCard" value="">
                                                            <img style="height: 30px;" class="pull-right"
                                                                 src="http://localhost/images/site/card-payment.jpg" alt="card-payment">
                                                        </label>

                                                    </div>
                                                    <div style="clear:both;"></div>

                                                    <div id="creditCardCollapse" class="creditCard collapse ">

                                                        <div class="paymentInput">
                                                            <label for="CardNumber">Credit Card Number *</label>
                                                            <br>
                                                            <input id="CardNumber" type="text" name="Number">
                                                        </div>
                                                        <!--paymentInput-->
                                                        <div class="paymentInput">
                                                            <label for="CardNumber2">Name on Credit Card *</label>
                                                            <br>
                                                            <input type="text" name="CardNumber2" id="CardNumber2">
                                                        </div>
                                                        <!--paymentInput-->
                                                        <div class="paymentInput">
                                                            <div class="form-group">
                                                                <label>Expiration date *</label>
                                                                <br>

                                                                <div class="col-lg-4 col-md-4 col-sm-4 no-margin-left no-padding">
                                                                    <select required aria-required="true" name="expire">
                                                                        <option value="">Month</option>
                                                                        <option value="1">01 - January</option>
                                                                        <option value="2">02 - February</option>
                                                                        <option value="3">03 - March</option>
                                                                        <option value="4">04 - April</option>
                                                                        <option value="5">05 - May</option>
                                                                        <option value="6">06 - June</option>
                                                                        <option value="7">07 - July</option>
                                                                        <option value="8">08 - August</option>
                                                                        <option value="9">09 - September</option>
                                                                        <option value="10">10 - October</option>
                                                                        <option value="11">11 - November</option>
                                                                        <option value="12">12 - December</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-lg-4 col-md-4 col-sm-4">
                                                                    <select required aria-required="true" name="year">
                                                                        <option value="">Year</option>
                                                                        <option value="2013">2013</option>
                                                                        <option value="2014">2014</option>
                                                                        <option value="2015">2015</option>
                                                                        <option value="2016">2016</option>
                                                                        <option value="2017">2017</option>
                                                                        <option value="2018">2018</option>
                                                                        <option value="2019">2019</option>
                                                                        <option value="2020">2020</option>
                                                                        <option value="2021">2021</option>
                                                                        <option value="2022">2022</option>
                                                                        <option value="2023">2023</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--paymentInput-->

                                                        <div style="clear:both"></div>
                                                        <div class="paymentInput clearfix">
                                                            <label for="VerificationCode">Verification Code *</label>
                                                            <br>
                                                            <input type="text" id="VerificationCode"
                                                                   name="VerificationCode" style="width:90px;">
                                                            <br>
                                                        </div>
                                                        <!--paymentInput-->

                                                        <div>
                                                            <input type="checkbox" name="saveInfo" id="saveInfoid">
                                                            <label for="saveInfoid">&nbsp;Save my Card
                                                                information</label>
                                                        </div>
                                                    </div>
                                                    <!--creditCard-->


                                                    <div class="card-paynemt-box payment-method">


                                                        <label class="radio-inline" for="CashOnDelivery"
                                                               data-toggle="collapse"
                                                               data-target="#CashOnDeliveryCollapse"
                                                               aria-expanded="false"
                                                               aria-controls="CashOnDeliveryCollapse">
                                                            <input name="radios" id="CashOnDelivery" value="4"
                                                                   type="radio">
                                                            Cash On Delivery </label>

                                                        <div class="collapse" id="CashOnDeliveryCollapse">

                                                            <p>All transactions are secure and encrypted, and we
                                                                neverstor
                                                                To learn more, please view our privacy policy.</p>


                                                            <div class="form-group">
                                                                <label for="CommentsOrder">Add Comments About Your
                                                                    Order</label>
                                                                <textarea id="CommentsOrder" class="form-control"
                                                                          name="CommentsOrder" cols="26"
                                                                          rows="3"></textarea>
                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="form-group clearfix">
                                                        <br>
                                                        <label class="checkbox-inline" for="checkboxes-1">
                                                            <input name="checkboxes" id="checkboxes-1" value="1"
                                                                   type="checkbox">
                                                            I have read and agree to the <a
                                                                href="http://localhost/walleee/html/terms-conditions">Terms & Conditions</a>
                                                        </label>
                                                    </div>
                                                    <div class="pull-left"><a href="http://localhost/walleee/html/thanks-for-order"
                                                                              class="btn btn-primary btn-lg ">
                                                        Order &nbsp; <i class="fa fa-arrow-circle-right"></i> </a></div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <!--onepage-checkout-->


                        </div>
                        <!--/row end-->

                    </div>


                </div>
            </div>
            <!--/row end-->

        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 rightSidebar">
            <div class="w100 cartMiniTable">
                <table id="cart-summary" class="std table">
                    <tbody>
                    <tr>
                        <td>Total products</td>
                        <td class="price">$216.51</td>
                    </tr>
                    <tr style="">
                        <td>Shipping</td>
                        <td class="price"><span class="success">Free shipping!</span></td>
                    </tr>
                    <tr class="cart-total-price ">
                        <td>Total (tax excl.)</td>
                        <td class="price">$216.51</td>
                    </tr>
                    <tr>
                        <td>Total tax</td>
                        <td class="price" id="total-tax">$0.00</td>
                    </tr>
                    <tr>
                        <td> Total</td>
                        <td class=" site-color" id="total-price">$216.51</td>
                    </tr>
                    </tbody>
                    <tbody>
                    </tbody>
                </table>


            </div>
            <!--  /cartMiniTable-->

        </div>
        <!--/rightSidebar-->

    </div>
    <!--/row-->

    <div style="clear:both"></div>
</div>
<!-- /.main-container-->
<div class="gap"></div>


<footer>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3  col-md-3 col-sm-4 col-xs-6">
                    <h3> Support </h3>
                    <ul>
                        <li class="supportLi">
                            <p> Lorem ipsum dolor sit amet, consectetur </p>
                            <h4><a class="inline" href="http://localhost/walleee/html/callto:+12025550151"> <strong> <i class="fa fa-phone"> </i> +1-202-555-0151 </strong> </a></h4>
                            <h4><a class="inline" href="http://localhost/walleee/html/mailto:help@yourweb.com"> <i class="fa fa-envelope-o"> </i>
                                help@yourweb.com </a></h4>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> Shop </h3>
                    <ul>
                        <li><a href="http://localhost/walleee/html/#">
                            Men's
                        </a></li>
                        <li><a href="http://localhost/walleee/html/#">
                            Women's</a></li>
                        <li><a href="http://localhost/walleee/html/#">
                            Kids'
                        </a></li>
                        <li><a href="http://localhost/walleee/html/#">Shoes
                        </a></li>
                        <li><a href="http://localhost/walleee/html/#">
                            Gift Cards
                        </a></li>

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
            <p class="pull-left"> &copy; TSHOP 2014. All right reserved. </p>

            <div class="pull-right paymentMethodImg"><img height="30" class="pull-right"
                                                          src="http://localhost/images/site/payment/master_card.png" alt="img"> <img
                    height="30" class="pull-right" src="http://localhost/images/site/payment/visa_card.png" alt="img"><img height="30"
                                                                                                          class="pull-right"
                                                                                                          src="http://localhost/images/site/payment/paypal.png"
                                                                                                          alt="img">
                <img height="30" class="pull-right" src="http://localhost/images/site/payment/american_express_card.png" alt="img"> <img
                        height="30" class="pull-right" src="http://localhost/images/site/payment/discover_network_card.png" alt="img">
                <img height="30" class="pull-right" src="http://localhost/images/site/payment/google_wallet.png" alt="img">

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


<script>


    $(document).ready(function () {

        $('input#newAddress').on('ifChanged', function (event) {
            //alert(event.type + ' callback');
            $('#newBillingAddressBox').collapse("show");
            $('#exisitingAddressBox').collapse("hide");

        });

        $('input#exisitingAddress').on('ifChanged', function (event) {
            //alert(event.type + ' callback');
            $('#newBillingAddressBox').collapse("hide");
            $('#exisitingAddressBox').collapse("show");
        });


        $('input#newShippingAddress').on('ifChanged', function (event) {
            //alert(event.type + ' callback');
            $('#newShippingAddressBox').collapse("show");

        });

        $('input#existingShippingAddress').on('ifChanged', function (event) {
            //alert(event.type + ' callback');
            $('#newShippingAddressBox').collapse("hide");

        });


        $('input#creditCard').on('ifChanged', function (event) {
            //alert(event.type + ' callback');
            $('#creditCardCollapse').collapse("toggle");

        });


        $('input#CashOnDelivery').on('ifChanged', function (event) {
            //alert(event.type + ' callback');
            $('#CashOnDeliveryCollapse').collapse("toggle");

        });


    });


</script>

</body>
<>
