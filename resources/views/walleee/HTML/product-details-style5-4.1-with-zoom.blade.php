<!DOCTYPE>
 lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://localhost/walleee/html/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://localhost/walleee/html/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://localhost/walleee/html/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="http://localhost/walleee/html/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="http://localhost/walleee/html/assets/ico/favicon.png">
    <title>TSHOP - Bootstrap E-Commerce Parallax Theme </title>
    <!-- Bootstrap core CSS -->
    <link href="http://localhost/walleee/html/assets/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://localhost/walleee/html/assets/css/style.css" rel="stylesheet">
    <link href="http://localhost/walleee/html/assets/css/home-v7.css" rel="stylesheet">
    <link href="http://localhost/walleee/html/assets/css/cart-nav.css" rel="stylesheet">
    <link href="http://localhost/walleee/html/assets/css/product-details-5.css" rel="stylesheet">

    <!-- gall-item Gallery for gallery page -->
    <link href="http://localhost/walleee/html/assets/plugins/magnific/magnific-popup.css" rel="stylesheet">


    <!-- bxSlider CSS file -->
    <link href="http://localhost/walleee/html/assets/plugins/bxslider/jquery.bxslider.css" rel="stylesheet"/>


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

    <script src="assets/js/pace.min.js"></script>
</head>

<body>


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
            <a class="navbar-brand " href="http://localhost/walleee/html/index"> <img src="images/logo.png" alt="TSHOP"> </a>

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
                                <div><a href="http://localhost/walleee/html/product-details"> <img src="images/product/3.jpg" alt="img"> </a>
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
                                <div><a href="http://localhost/walleee/html/product-details"> <img src="images/product/2.jpg" alt="img"> </a>
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
                                <div><a href="http://localhost/walleee/html/product-details"> <img src="images/product/5.jpg" alt="img"> </a>
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
                                <div><a href="http://localhost/walleee/html/product-details"> <img src="images/product/3.jpg" alt="img"> </a>
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
                                <div><a href="http://localhost/walleee/html/product-details"> <img src="images/product/3.jpg" alt="img"> </a>
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
                                <div><a href="http://localhost/walleee/html/product-details"> <img src="images/product/4.jpg" alt="img"> </a>
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
                <li><a href="http://localhost/walleee/html/index"> Home </a></li>
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
                                        class="img-responsive" src="images/site/promo1.jpg" alt="product"> <span
                                        class="ProductMenuCaption"> <i class="fa fa-caret-right"> </i> JEANS </span>
                                </a></li>
                            </ul>
                            <ul class="col-lg-3  col-sm-3 col-md-3 col-xs-4">
                                <li><a class="newProductMenuBlock" href="http://localhost/walleee/html/product-details"> <img
                                        class="img-responsive" src="images/site/promo2.jpg" alt="product"> <span
                                        class="ProductMenuCaption"> <i
                                        class="fa fa-caret-right"> </i> PARTY DRESS </span> </a></li>
                            </ul>
                            <ul class="col-lg-3  col-sm-3 col-md-3 col-xs-4">
                                <li><a class="newProductMenuBlock" href="http://localhost/walleee/html/product-details"> <img
                                        class="img-responsive" src="images/site/promo3.jpg" alt="product"> <span
                                        class="ProductMenuCaption"> <i class="fa fa-caret-right"> </i> SHOES </span>
                                </a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <!-- change width of megamenu = use class > megamenu-fullwidth, megamenu-60width, megamenu-40width -->
                <li class="dropdown active megamenu-80width "><a data-toggle="dropdown" class="dropdown-toggle"
                                                                 href="http://localhost/walleee/html/#"> SHOP <b class="caret"> </b> </a>
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
                                        class="img-responsive" src="images/site/g4.jpg" alt="img"> </a> <a
                                        class="text-center productInfo alpha90" href="http://localhost/walleee/html/product-details"> Eodem modo
                                    typi <br>
                                    <span> $60 </span> </a></li>
                            </ul>
                            <ul class="col-lg-3  col-sm-3 col-md-3 col-xs-6">
                                <li class="no-margin productPopItem relative"><a href="http://localhost/walleee/html/product-details"> <img
                                        class="img-responsive" src="images/site/g5.jpg" alt="img"> </a> <a
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
                                        <div><a href="http://localhost/walleee/html/product-details"> <img src="images/product/3.jpg" alt="img">
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
                                        <div><a href="http://localhost/walleee/html/product-details"> <img src="images/product/2.jpg" alt="img">
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
                                        <div><a href="http://localhost/walleee/html/product-details"> <img src="images/product/5.jpg" alt="img">
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
                                        <div><a href="http://localhost/walleee/html/product-details"> <img src="images/product/3.jpg" alt="img">
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
                                        <div><a href="http://localhost/walleee/html/product-details"> <img src="images/product/4.jpg" alt="img">
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
                                        <div><a href="http://localhost/walleee/html/product-details"> <img src="images/site/winter.jpg"
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


<section class="section-product-info">
    <div class="container-1400 container   main-container product-details-container ">


        <div class="row">

            <!-- left column -->

            <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                <div class="product-images-carousel-wrapper">

                    <div class="productMainImage hasWhiteImg">
                        <ul class="bxslider product-view-slides product-view-slides-h ">
                            <li>

                                <div class='zoomContent'>
                                    <a class="gall-item" title="product-title"
                                       href="http://localhost/walleee/html/images/product_details/hi-res-croped/1.jpg"><img
                                            class="zoomImage1 img-responsive"
                                            data-src="images/product_details/hi-res-croped/1.jpg"
                                            src='images/product_details/low-res-white/1.jpg' alt='Image Title'/></a>
                                </div>


                            </li>
                            <li>

                                <div class='zoomContent'>
                                    <a class="gall-item" title="product-title"
                                       href="http://localhost/walleee/html/images/product_details/hi-res-croped/2.jpg"><img
                                            class="zoomImage1 img-responsive"
                                            data-src="images/product_details/hi-res-croped/2.jpg"
                                            src='images/product_details/low-res-white/1.jpg' alt='Image Title'/></a>
                                </div>
                            </li>
                            <li>


                                <div class='zoomContent'>
                                    <a class="gall-item" title="product-title"
                                       href="http://localhost/walleee/html/images/product_details/hi-res-croped/3.jpg"><img
                                            class="zoomImage1 img-responsive"
                                            data-src="images/product_details/hi-res-croped/3.jpg"
                                            src='images/product_details/low-res-white/3.jpg' alt='Image Title'/></a>
                                </div>


                            </li>

                        </ul>
                    </div>

                    <div class="product-view-thumb-wrapper has-carousel-v hasWhiteImg">
                        <div class="product-view-thumb-nav prev">
                        </div>

                        <ul id="bx-pager" class="product-view-thumb ">
                            <li><a class="thumb-item-link" data-slide-index="0" href="http://localhost/walleee/html/"><img
                                    src="images/product_details/low-res-white/1.jpg" alt="img"/></a></li>
                            <li><a class="thumb-item-link" data-slide-index="1" href="http://localhost/walleee/html/"><img
                                    src="images/product_details/low-res-white/2.jpg" alt="img"/></a></li>
                            <li><a class="thumb-item-link" data-slide-index="2" href="http://localhost/walleee/html/"><img
                                    src="images/product_details/low-res-white/3.jpg" alt="img"/></a></li>
                            <li><a class="popup-vimeo" href="http://localhost/walleee/html/https://player.vimeo.com/video/95929658"><img
                                    src="images/product_details/low-res-white/video-thumb.jpg" alt="img"/></a></li>
                        </ul>
                        <div class="product-view-thumb-nav next">

                        </div>

                    </div>


                </div>


            </div>
            <!--/ left column end -->


            <!-- right column -->
            <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                <div class="product-details-info-wrapper">


                    <h2 class="product-details-product-title"> Lorem ipsum dolor sit amet</h2>

                    <div class="product-price">
                        <span class="price-sales"> $ 70</span>
                        <span class="price-standard hide">$ 95</span>
                        <span class="price-tag"> including tax</span>
                    </div>


                    <div class="product-details-product-color">
                            <span class="selected-color"><strong>Colour </strong> <span
                                    class="color-value">Yellow  </span> </span>
                        <ul class="swatches Color swatches-rounded">
                            <li class="selected"><a title="Yellow" style="background-color:#f1f40e"> </a></li>
                            <li><a title="Gray" style="background-color:#adadad"> </a></li>
                            <li><a title="Green
" style="background-color:#4EC67F"> </a></li>
                            <li><a title="Dark blue
" style="background-color:darkblue"> </a></li>
                            <li><a title="Red
" style="background-color:Red"> </a></li>
                            <li><a title="Brown
 " style="background-color: brown"> </a></li>

                            <li><a title="Black
 " style="background-color:#000000"> </a></li>
                            <li><a title="Purple
 " style="background-color:purple"> </a></li>

                        </ul>
                    </div>
                    <!--/.color-details-->

                    <div class="row row-filter clearfix ">
                        <div class="col-xs-6">
                            <select class="form-control">
                                <option value="strawberries" selected>Quantity</option>
                                <option value="mango">1</option>
                                <option value="bananas">2</option>
                                <option value="watermelon">3</option>
                                <option value="grapes">4</option>
                                <option value="oranges">5</option>
                                <option value="pineapple">6</option>
                                <option value="peaches">7</option>
                                <option value="cherries">8</option>
                            </select>
                        </div>
                        <div class="col-xs-6">
                            <select class="form-control">
                                <option value="strawberries" selected>Size</option>
                                <option value="mango">XL</option>
                                <option value="bananas">XXL</option>
                                <option value="watermelon">M</option>
                                <option value="apples">L</option>
                                <option value="apples">S</option>
                            </select>
                        </div>
                    </div>
                    <!-- productFilter -->

                    <div class="row row-cart-actions clearfix ">
                        <div class="col-sm-12 ">

                            <a class="btn btn-block btn-dark">
                                Add to cart
                            </a>


                            <a class="btn btn-block btn-gray">
                                Add to Wishlist
                            </a>


                        </div>

                    </div>


                    <div class="clear"></div>

                    <div class="product-details-info">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-blank ">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                           data-parent="#accordion"
                                           href="http://localhost/walleee/html/#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            ABOUT
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse " role="tabpanel"
                                     aria-labelledby="headingOne">
                                    <div class="panel-body">


                                        <ul class="discription-list-inner bullet-list list-check">


                                            <li>
                                                <p>
                                                    <span>Vestibulum rutrum imperdiet nunc a interdum. In scelerisque libero </span>
                                                </p>
                                            </li>


                                            <li>
                                                <p>
                                                    <span>ut elit porttitor commodo.
</span>
                                                </p>
                                            </li>

                                            <li>
                                                <p>
                                                    <span> <strong>100% Cotton</strong></span>
                                                </p>
                                            </li>

                                            <li>
                                                <p>
                                                    <span>Hand wash</span>
                                                </p>
                                            </li>


                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-blank ">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                           data-parent="#accordion" href="http://localhost/walleee/html/#collapseTwo" aria-expanded="false"
                                           aria-controls="collapseTwo">
                                            SIZE & FIT
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                     aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        <ul class="discription-list-inner">

                                            <li>
                                                <strong>Size &amp; Fit</strong>

                                                <p>
                                                    <span>Measurements taken from size 30<br>
                        Model wears size 31. Model is 6'2 </span>
                                                </p>
                                            </li>


                                            <li>
                                                <strong>Fitting Information </strong>

                                                <p>
                                                    <span> 77" Bust<br>
                        78" Waist<br>
                        10.5" front rise<br>
                        Center Back: 77'<br>
                        Style: XCES<br><br>
                        
                        <a data-toggle="modal" data-target="#modal-size-guide" class="btn btn-default btn-link btn-sm">
                            View Size Guide <i class="fa fa-arrow-circle-o-right"></i> </a>
                   
                        
                        <br>
                    </span>
                                                </p>
                                            </li>


                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div style="clear:both"></div>


                </div>
            </div>
            <!--/ right column end -->

        </div>
        <!--/.row-->


        <div style="clear:both"></div>


    </div>
    <!-- /.product-details-container -->
</section>

<section class="section-product-info-bottom">
    <div class="product-details-bottom-bar">
        <div class="container-1400 container">
            <div class="row">
                <div class="col-lg-8">
                    <ul class="list-unstyled list-inline social-inline">
                        <li class="hasShareCount"><span>Share <span class="count">120</span></span>
                        </li>
                        <li><a><i class="fa fa-facebook-f"></i></a></li>
                        <li><a><i class="fa fa-twitter"></i> </a></li>
                        <li><a><i class="fa fa-google-plus"></i> </a></li>
                        <li><a><i class="fa fa-instagram"></i> </a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <div class="review-title-bar">
                        <a class="scrollto pull-right" href="http://localhost/walleee/html/#product-review"><i class="fa fa-comment-o"></i> 12 Review</a>


                    </div>
                </div>
            </div>

        </div>
    </div>

</section>

<!-- product details additional section -->

<section id="product-story-1" class="product-story product-story-hasbg  product-story-1 cover"
         style="background-image: url(images/product_details/pd-story-1.jpg); "

         data-0="background-position: 50% 80%;"
         data-end="background-position: 50% 0;"
         data-anchor-target="#product-story-1"
        >
    <div class="product-story-inner ">

        <div class="container">

            <div class="product-story-info-text"
                 data-center="transform:scale(0.9) rotate(0deg) translateX(0); opacity:1;"
                 data-0="transform:scale(1) rotate(0deg) translateX(100px); opacity:0;">

                <h5 class="subtitle">The Story</h5>

                <h3 class="title">Pellentesque nisl nulla</h3>

                <p class="desc">
                    Cras et vehicula risus, at ultricies neque. efficitur ac ex sollicitudin,
                    varius porttitor diam. Nunc a dignissim lectus. Nullam volutpat, est et cursus ornare, nulla eros
                    condimentum augue, at accumsan nulla odio ac lacus.
                    In hac habitasse platea dictumst.
                    Fusce lectus lorem, ultricies eget lectus at, malesuada volutpat neque.
                </p>

            </div>


        </div>

    </div>

</section>

<section class="product-story whitebg  product-story-2">
    <div class="product-story-inner ">

        <div class="container">

            <div class="row has-equal-height-child">

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12  is-equal">
                    <div class="hw100 display-table">
                        <div class="hw100 display-table-cell">


                            <div class="product-story-info-box">
                                <div class="product-story-info-text wow fadeInLeft" data-wow-duration=".8s"
                                     data-wow-delay="0">

                                    <h5 class="subtitle">The Story</h5>

                                    <h3 class="title">Product Features</h3>

                                    <p class="desc">

                                        In legendos salutatus qui, sit primis percipit probatus at. Est vidit iuvaret
                                        platonem eu. Et nam suas sint. Adhuc putant vivendo in has, omittam persecuti
                                        pro in. An ceteros tacimates facilisis nam, ex magna consul per.
                                    </p>

                                    <ul class="list">


                                        <li>Suspendisse vestibulum lectus id viverra viverra.</li>
                                        <li>Etiam a leo ut ipsum blandit elementum .</li>
                                        <li>Proin et ex gravida, sodales mauris id, .</li>
                                        <li>Maecenas id eros nec tellus .</li>
                                        <li>Praesent imperdiet est at sem .</li>

                                        <li>Lorem ipsum dolor sit amet, .</li>
                                        <li>Pellentesque pretium diam vitae risus vestibulum, .</li>


                                    </ul>


                                </div>
                            </div>


                        </div>
                    </div>

                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12  is-equal">
                    <div class="product-story-a-img wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.25">
                        <img alt="Image Title" src="images/product_details/product-features.jpg"
                             class="img-responsive ">
                    </div>
                </div>
            </div>


        </div>

    </div>

</section>

<section class="product-story whitebg  product-story-3">
    <div class="product-story-inner ">

        <div class="container">

            <div class="row has-equal-height-child">


                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12  is-equal">
                    <div class="product-story-a-img wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.25">
                        <img alt="Image Title" src="images/product_details/size-guide-model.jpg"
                             class="img-responsive ">
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12  is-equal">
                    <div class="hw100 display-table">
                        <div class="hw100 display-table-cell">


                            <div class="product-story-info-box">
                                <div class="product-story-info-text wow fadeInLeft" data-wow-duration=".8s"
                                     data-wow-delay="0">

                                    <h5 class="subtitle">Size Guide</h5>

                                    <h3 class="title">Product Specifications </h3>

                                    <div class="inner-content">
                                        <p>
                                            In legendos salutatus qui, sit primis percipit probatus at. Est vidit
                                            iuvaret platonem eu. Et nam suas sint. Adhuc putant vivendo in has, omittam
                                            persecuti pro in. An ceteros tacimates facilisis nam, ex magna consul per.
                                        </p>
                                        <ul class="list-unstyled no-padding">
                                            <li><strong>Style:</strong> XCES</li>

                                            <li><strong>Center Back:</strong> 77'</li>

                                            <li><strong>Fabric:</strong> body: 70 g/m² 100% Proin et ex gravida,
                                                sodales &trade;</li>

                                            <li><strong>Fabric:</strong> panel: 80 g/m² 100% Maecenas id eros nec tellus
                                                facilisis varius
                                            </li>


                                            <li><strong>Source:</strong>

                                                Imported
                                            </li>

                                            <li><strong>Guarantee: </strong>1 year</li>

                                        </ul>
                                    </div>


                                    <a class="btn btn-default btn-link" data-target="#modal-size-guide"
                                       data-toggle="modal"> View Size Guide <i class="fa fa-arrow-circle-o-right"></i>
                                    </a>

                                </div>
                            </div>


                        </div>
                    </div>

                </div>
            </div>


        </div>

    </div>

</section>
<section class="section-review graybg" id="product-review">


    <div class="container">

        <div class="hero-section-header productReviewTitleBAr">
            <h3 class="hero-section-title"><i class="fa fa-2x  fa-comments-o"></i> Product Review</h3>

            <div class="rating commentRating">
                <p><span><i class="fa fa-star"></i></span> <span><i class="fa fa-star"></i></span> <span><i
                        class="fa fa-star"></i></span>
                    <span><i class="fa fa-star"></i></span> <span> <i class="fa fa-star-o "></i> </span>


                    <span class="ratingInfo">

                         <span class="ratingNumber">4.0 </span>  Average rating</span>
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 review-sortByBar">
                <div class="pull-left">
                    <h4 class="no-margin-no-padding uppercase"><span class="bold">12</span> Reviews </h4>
                </div>

                <div class="pull-right col-lg-2 no-padding">
                    <select class="form-control">
                        <option selected>Most Recent</option>
                        <option>Most Recent</option>
                        <option>Most Helpful</option>
                        <option>Top Rated</option>
                    </select>
                </div>

            </div>
        </div>


        <div class="all-review-wrapper wow  fadeIn">


            <div class="row review-item">
                <div class="col-lg-3 col-sm-3  left">
                    <div class="review-item-user">
                        <div class="review-item-user-profile">
                            <img class="img-circle" alt="" src="images/product_details/user-2.jpg">
                        </div>
                        <div class="user-name">
                            <p>John Doe </p>
                            <small>5m ago</small>
                        </div>

                    </div>
                </div>

                <div class="col-lg-9  col-sm-9 right">


                    <div class="rating commentRating">
                        <p><span><i class="fa fa-star"></i></span> <span><i class="fa fa-star"></i></span> <span><i
                                class="fa fa-star"></i></span> <span><i class="fa fa-star"></i></span> <span> <i
                                class="fa fa-star-o "></i> </span> <span class="ratingInfo"> <span> / </span> <a
                                data-target="#modal-review" data-toggle="modal"> 4.0 </a> </span></p>
                    </div>
                    <h5 class="reviewUserTitle"><strong>Great product and very useful!</strong></h5>

                    <p class="commentText">
                        Lorem ipsum dolor sit amet, nam odio prompta ne. Mea semper repudiare in, eos ei dico tamquam
                        noluisse. Nec albucius lucilius i
                        ntellegebat at, cu epicurei rationibus est. Eos ei eros civibus ullamcorper,
                        nominavi repudiare vis at. Consul albucius assentior id vim, ei sit mazim dissentias, pri ea
                        melius laoreet delicatissimi.</p>


                </div>


            </div>

            <div class="row review-item">
                <div class="col-lg-3 col-sm-3  left">
                    <div class="review-item-user">
                        <div class="review-item-user-profile">
                            <img class="img-circle" alt="" src="images/site/default-user.png">
                        </div>
                        <div class="user-name">
                            <p>John Doe </p>
                            <small>5m ago</small>
                        </div>

                    </div>
                </div>

                <div class="col-lg-9  col-sm-9 right">


                    <div class="rating commentRating">
                        <p><span><i class="fa fa-star"></i></span> <span><i class="fa fa-star"></i></span> <span><i
                                class="fa fa-star"></i></span> <span><i class="fa fa-star"></i></span> <span> <i
                                class="fa fa-star-o "></i> </span> <span class="ratingInfo"> <span> / </span> <a
                                data-target="#modal-review" data-toggle="modal"> 4.0 </a> </span></p>
                    </div>
                    <h5 class="reviewUserTitle"><strong>In a professional context !</strong></h5>

                    <p class="commentText">
                        Ut eam tamquam ullamcorper vituperatoribus. Saepe nonumy complectitur duo id, eam labores
                        ponderum no, timeam elaboraret repudiandae ea quo. Dolores efficiendi complectitur eos eu. Id
                        sed brute nemore, eu sed agam democritum intellegam.</p>


                </div>


            </div>

            <div class="row review-item">
                <div class="col-lg-3 col-sm-3  left">
                    <div class="review-item-user">
                        <div class="review-item-user-profile">
                            <img class="img-circle" alt="" src="images/product_details/user-2.jpg">
                        </div>
                        <div class="user-name">
                            <p>John Doe </p>
                            <small>5m ago</small>
                        </div>

                    </div>
                </div>

                <div class="col-lg-9  col-sm-9 right">


                    <div class="rating commentRating">
                        <p><span><i class="fa fa-star"></i></span> <span><i class="fa fa-star"></i></span> <span><i
                                class="fa fa-star"></i></span> <span><i class="fa fa-star"></i></span> <span> <i
                                class="fa fa-star-o "></i> </span> <span class="ratingInfo"> <span> / </span> <a
                                data-target="#modal-review" data-toggle="modal"> 4.0 </a> </span></p>
                    </div>
                    <h5 class="reviewUserTitle"><strong>Sed ut perspiciatis!</strong></h5>

                    <p class="commentText">

                        Graece utamur reformidans vix in. No iisque detraxit senserit vim, mei ut menandri periculis. Eu
                        vide dolorum cotidieque vix, cum minim voluptua principes ad. Mei omnis option persius ut, pri
                        fastidii oporteat complectitur et, est cu novum temporibus. Id nulla semper dolorum pro.</p>


                </div>


            </div>


            <div class="row">
                <div class="col-lg-12 review-load-more">
                    <div class=" text-center">
                        <a href="http://localhost/walleee/html/#" class="btn  btn-default  ">
                            <i class="fa fa-plus-sign">+</i> Load 8 more reviews</a>
                        <a class="btn  btn-success" data-target="#modal-review" data-toggle="modal">
                            <i class="fa fa-edit"></i> Write reviews</a>
                    </div>
                </div>
            </div>


        </div>

    </div>


</section>
<!--/.section-review-->

<section class=" section-similar-product white-bg">
    <div class="container">

        <div class="hero-section-header ">
            <h3 class="hero-section-title"> You might also like</h3>
        </div>


        <div class="section-content">
            <div class="row has-equal-height-child">
                <div class="product-item item-flat col-lg-3 col-md-3 col-sm-3 col-xs-6 col-xxs-12">
                    <div class="product product-item-inner">


                        <a data-placement="left" data-original-title="Add to Wishlist" data-toggle="tooltip"
                           class="add-fav wisthlist-flat tooltipHere">
                            <i class="glyphicon glyphicon-heart"></i>
                        </a>

                        <div class="imageHover hasCart">
                            <a href="http://localhost/walleee/html/product-details">
                                <img class="img-responsive primaryImage" alt="img" src="images/product/54a.jpg">
                                <img class="img-responsive secondaryImage" alt="img" src="images/product/54b.jpg"></a>

                            <div class="product-btn-box">
                                <a class="btn btn-product-flat btn-primary">
                                    <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span>
                                </a>
                            </div>

                        </div>


                        <div class="prod-details">
                              <p class="title">
                                <a href="http://localhost/walleee/html/product-details-style5-4.1-with-zoom" title=""> Men Flat TShirt </a>
                            </p>


                            <p class="product-flat-info">
                                <span class="product-curreent-price">
                                $60.00
                                </span>
                                &nbsp;|&nbsp;
                                <span class="product-model">Mixed Grey </span></p>

                            <div class="product-color">
                                <a style="background-color:#f1f40e"> </a>
                                <a style="background-color:#adadad"> </a>
                                <a style="background-color:#4EC67F"> </a>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="product-item item-flat col-lg-3 col-md-3 col-sm-3 col-xs-6 col-xxs-12">
                    <div class="product product-item-inner">


                        <a data-placement="left" data-original-title="Add to Wishlist" data-toggle="tooltip"
                           class="add-fav wisthlist-flat tooltipHere">
                            <i class="glyphicon glyphicon-heart"></i>
                        </a>

                        <div class="imageHover hasCart">
                            <a href="http://localhost/walleee/html/product-details">
                                <img class="img-responsive primaryImage" alt="img" src="images/product/53a.jpg">
                                <img class="img-responsive secondaryImage" alt="img" src="images/product/53b.jpg"></a>

                            <div class="product-btn-box">
                                <a class="btn btn-product-flat btn-primary">
                                    <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span>
                                </a>
                            </div>

                        </div>


                        <div class="prod-details">
                           <p class="title">
                                <a href="http://localhost/walleee/html/product-details-style5-4.1-with-zoom" title="title">Women Flat TShirt</a>
                            </p>

                            <p class="product-flat-info">
                                <span class="product-curreent-price">
                                $100.00
                                </span>
                                &nbsp;|&nbsp;
                                <span class="product-model">Mixed Grey </span></p>

                            <div class="product-color">
                                <a style="background-color:#f1f40e"> </a>
                                <a style="background-color:#FE6FC3"> </a>
                                <a style="background-color:#4EC67F"> </a>

                            </div>
                        </div>

                    </div>
                </div>

                <div class="product-item item-flat col-lg-3 col-md-3 col-sm-3 col-xs-6 col-xxs-12">
                    <div class="product product-item-inner">


                        <a data-placement="left" data-original-title="Add to Wishlist" data-toggle="tooltip"
                           class="add-fav wisthlist-flat tooltipHere">
                            <i class="glyphicon glyphicon-heart"></i>
                        </a>

                        <div class="imageHover hasCart">
                            <a href="http://localhost/walleee/html/product-details">
                                <img class="img-responsive primaryImage" alt="img" src="images/product/50a.jpg">
                                <img class="img-responsive secondaryImage" alt="img" src="images/product/50b.jpg"></a>

                            <div class="product-btn-box">
                                <a class="btn btn-product-flat btn-primary">
                                    <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span>
                                </a>
                            </div>

                        </div>


                        <div class="prod-details">
                           <p class="title">
                                <a href="http://localhost/walleee/html/product-details-style5-4.1-with-zoom" title="title">Women Flat TShirt</a>
                            </p>

                            <p class="product-flat-info">
                                <span class="product-curreent-price">
                                $100.00
                                </span>
                                &nbsp;|&nbsp;
                                <span class="product-model">Mixed Grey </span></p>

                            <div class="product-color">
                                <a style="background-color:#73A44A"> </a>
                                <a style="background-color:#adadad"> </a>
                                <a style="background-color:#4EC67F"> </a>

                            </div>
                        </div>

                    </div>
                </div>

                <div class="product-item item-flat col-lg-3 col-md-3 col-sm-3 col-xs-6 col-xxs-12">
                    <div class="product product-item-inner">


                        <a data-placement="left" data-original-title="Add to Wishlist" data-toggle="tooltip"
                           class="add-fav wisthlist-flat tooltipHere">
                            <i class="glyphicon glyphicon-heart"></i>
                        </a>

                        <div class="imageHover hasCart">
                            <a href="http://localhost/walleee/html/product-details">
                                <img class="img-responsive primaryImage" alt="img" src="images/product/51a.jpg">
                                <img class="img-responsive secondaryImage" alt="img" src="images/product/51b.jpg"></a>

                            <div class="product-btn-box">
                                <a class="btn btn-product-flat btn-primary">
                                    <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span>
                                </a>
                            </div>

                        </div>


                        <div class="prod-details">
                              <p class="title">
                                <a href="http://localhost/walleee/html/product-details-style5-4.1-with-zoom" title=""> Men Flat TShirt </a>
                            </p>


                            <p class="product-flat-info">
                                <span class="product-curreent-price">
                                $100.00
                                </span>
                                &nbsp;|&nbsp;
                                <span class="product-model">Mixed Grey </span></p>

                            <div class="product-color">
                                <a style="background-color:#f1f40e"> </a>
                                <a style="background-color:#adadad"> </a>
                                <a style="background-color:#4EC67F"> </a>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>

</section>
<!--/.section-similar-product-->


<footer class="main-footer">
    <div class="footer-content">
        <div class="container">
            <div class="row">

                <div class=" col-lg-2 col-md-2 col-sm-2 col-xs-6 ">
                    <div class="footer-col">
                        <h4 class="footer-title">About us</h4>
                        <ul class="list-unstyled footer-nav">
                            <li><a href="http://localhost/walleee/html/#">Company Profile</a></li>
                            <li><a href="http://localhost/walleee/html/#">Leadership</a></li>
                            <li><a href="http://localhost/walleee/html/#">Manufacturing Facilities</a></li>
                            <li><a href="http://localhost/walleee/html/#">Quality Policy</a></li>
                            <li><a href="http://localhost/walleee/html/#">Our Values</a></li>
                        </ul>
                    </div>
                </div>
                <div class=" col-lg-2 col-md-2 col-sm-2 col-xs-6 ">
                    <div class="footer-col">
                        <h4 class="footer-title">Shop</h4>
                        <ul class="list-unstyled footer-nav">
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
                </div>
                <div class=" col-lg-2 col-md-2 col-sm-2 col-xs-6 ">
                    <div class="footer-col">
                        <h4 class="footer-title">Help</h4>
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
                </div>
                <div class=" col-lg-2 col-md-2 col-sm-2 col-xs-6 ">
                    <div class="footer-col">
                        <h4 class="footer-title">Events</h4>
                        <ul class="list-unstyled footer-nav">
                            <li><a href="http://localhost/walleee/html/#">Spring/Summer 2015
                            </a></li>
                            <li><a href="http://localhost/walleee/html/#">Spring/Summer 2014
                            </a></li>
                            <li><a href="http://localhost/walleee/html/#"> London Fashion Week
                            </a></li>
                            <li><a href="http://localhost/walleee/html/#"> Paris Fashion Week
                            </a></li>
                            <li><a href="http://localhost/walleee/html/#"> Look Back
                            </a></li>


                        </ul>
                    </div>
                </div>
                <div class=" col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <div class="footer-col row">
                        <div class="col-sm-12 col-xs-6 col-xxs-12 no-padding-lg">
                            <h4 class="footer-title">Follow us on</h4>
                            <ul class="list-unstyled list-inline footer-nav social-list footer-nav-inline">
                                <li><a title="Facebook" data-placement="top" data-toggle="tooltip" href="http://localhost/walleee/html/#"><i
                                        class="fa fa-facebook"></i> </a></li>
                                <li><a title="Twitter" data-placement="top" data-toggle="tooltip" href="http://localhost/walleee/html/#"><i
                                        class="fa fa-twitter"></i> </a></li>
                                <li><a title="Google+" data-placement="top" data-toggle="tooltip" href="http://localhost/walleee/html/#"><i
                                        class="fa fa-google-plus"></i> </a></li>
                                <li><a title="Linkedin" data-placement="top" data-toggle="tooltip" href="http://localhost/walleee/html/#"><i
                                        class="fa fa-linkedin"></i> </a></li>
                            </ul>
                        </div>
                        <div class="col-sm-12 col-xs-6 col-xxs-12 ">

                            <div class="hero-subscribe">
                                <h4 class="footer-title no-margin">Newsletter sign up </h4>
                                <!-- Appended Input-->
                                <form class="form-horizontal">
                                    <fieldset>

                                        <!-- Appended Input-->
                                        <div class="control-group">
                                            <div class="controls">
                                                <div class="search input-group" role="search" id="newsletter-signup">
                                                    <input type="search" class="form-control"
                                                           placeholder="Enter  your email address">
			<span class="input-group-btn">
				<button class="btn btn-default" type="button">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">GO</span>
                </button>

			</span>
                                                </div>
                                                <p class="help-block hide">help message or error message</p>
                                            </div>
                                        </div>

                                    </fieldset>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <div style="clear: both"></div>

                <div class="col-lg-12">
                    <div class=" text-center paymanet-method-logo">

                        <img src="images/site/payment/master_card.png" alt="img">
                        <img alt="img" src="images/site/payment/visa_card.png">
                        <img alt="img" src="images/site/payment/paypal.png">
                        <img alt="img" src="images/site/payment/american_express_card.png"> <img alt="img"
                                                                                                 src="images/site/payment/discover_network_card.png">
                        <img alt="img" src="images/site/payment/google_wallet.png">
                    </div>

                    <div class="copy-info text-center">
                        &copy; 2015 Tshop Template &amp; Co.
                    </div>

                </div>

            </div>
        </div>
    </div>
</footer>


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
<div class="modal signupcontent fade" id="modalsignup" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
                <h3 class="modal-title-site text-center"> register </h3>
            </div>
            <div class="modal-body">
                <div class="control-group"><a class="fb_button btn  btn-block btn-lg " href="http://localhost/walleee/html/#"> signup with
                    facebook </a></div>
                <h5 style="padding:10px 0 10px 0;" class="text-center"> or </h5>

                <div class="form-group reg-username">
                    <div>
                        <input name="login" class="form-control input" size="20" placeholder="enter username"
                               type="text">
                    </div>
                </div>
                <div class="form-group reg-email">
                    <div>
                        <input name="reg" class="form-control input" size="20" placeholder="enter email" type="text">
                    </div>
                </div>
                <div class="form-group reg-password">
                    <div>
                        <input name="password" class="form-control input" size="20" placeholder="password"
                               type="password">
                    </div>
                </div>
                <div class="form-group">
                    <div>
                        <div class="checkbox login-remember">
                            <label>
                                <input name="rememberme" id="rememberme" value="forever" checked="checked"
                                       type="checkbox">
                                remember me </label>
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <input name="submit" class="btn  btn-block btn-lg btn-primary" value="register" type="submit">
                    </div>
                </div>
                <!--userform-->

            </div>
            <div class="modal-footer">
                <p class="text-center"> already member? <a data-toggle="modal" data-dismiss="modal" href="http://localhost/walleee/html/#modallogin">
                    sign in </a></p>
            </div>
        </div>
        <!-- /.modal-content -->

    </div>
    <!-- /.modal-dialog -->

</div>


<!-- Modal review start -->
<div class="modal  fade" id="modal-size-guide" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
                <h3 class="modal-title-site text-center">SIZE GUIDE </h3>
            </div>
            <div class="modal-body">
              <div class="table-responsive">
                <table class="sizeguide-table table table-bordered">
                    <thead>
                    <tr>
                        <th colspan="6">Women's Clothing</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th>Size</th>
                        <td>X-Small</td>
                        <td>Small</td>
                        <td>Medium</td>
                        <td>Large</td>
                        <td>X-Large</td>
                    </tr>
                    <tr>
                        <th>UK</th>
                        <td>8</td>
                        <td>10</td>
                        <td>12</td>
                        <td>14</td>
                        <td>16</td>
                    </tr>
                    <tr>
                        <th>USA</th>
                        <td>4</td>
                        <td>6</td>
                        <td>8</td>
                        <td>10</td>
                        <td>12</td>
                    </tr>
                    <tr>
                        <th>JAPAN</th>
                        <td>7</td>
                        <td>9</td>
                        <td>11</td>
                        <td>13</td>
                        <td>15</td>
                    </tr>
                    <tr>
                        <th>Bust(cm)</th>
                        <td>84</td>
                        <td>88</td>
                        <td>92</td>
                        <td>98</td>
                        <td>104</td>
                    </tr>
                    <tr>
                        <th>Bust(inches)</th>
                        <td>33</td>
                        <td>34.5</td>
                        <td>36</td>
                        <td>38.5</td>
                        <td>40</td>
                    </tr>
                    <tr>
                        <th>Waist(cm)</th>
                        <td>66</td>
                        <td>70</td>
                        <td>74</td>
                        <td>80</td>
                        <td>86</td>
                    </tr>
                    <tr>
                        <th>Waist(inches)</th>
                        <td>26</td>
                        <td>27.5</td>
                        <td>29</td>
                        <td>31.5</td>
                        <td>34</td>
                    </tr>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal review start -->
<div class="modal  fade" id="modal-review" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
                <h3 class="modal-title-site text-center">PRODUCT REVIEW </h3>
            </div>
            <div class="modal-body">

                <h3 class="reviewtitle uppercase">You're reviewing: Lorem ipsum dolor sit amet</h3>

                <form>
                    <div class="form-group">
                        <label>
                            How do you rate this product? </label> <br>

                        <div class="rating-here">
                            <input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star fa-2x"
                                   data-empty="fa fa-star-o fa-2x" data-fractions="3"/>

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="rtext">Name</label>
                        <input type="text" class="form-control" id="rtext" placeholder="Your name" required>
                    </div>

                    <div class="form-group ">
                        <label>Review</label>
                        <textarea class="form-control" rows="3" placeholder="Your Review" required></textarea>

                    </div>


                    <button type="submit" class="btn btn-success">Submit Review</button>
                </form>


            </div>

        </div>
        <!-- /.modal-content -->

    </div>
    <!-- /.modal-dialog -->

</div>
<!-- /.Modal review -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<!-- include jqueryCycle plugin -->
<script src="assets/js/jquery.cycle2.min.js"></script>
<!-- include easing plugin -->
<script src="assets/js/jquery.easing.1.3.js"></script>
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
<!-- jQuery select2 // custom select   -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
<!-- include touchspin.js // touch friendly input spinner component   -->
<script src="assets/js/bootstrap.touchspin.js"></script>
<!-- include carousel slider plugin  -->
<script src="assets/js/owl.carousel.min.js"></script>


<script src="assets/plugins/magnific/jquery.magnific-popup.min.js"></script>
<script>
    $(document).ready(function () {

        $('#bx-pager .popup-youtube, #bx-pager .popup-vimeo, #bx-pager .popup-gmaps').click(function (ev) {
            // stop click event in bxslider
            ev.preventDefault();
            ev.stopPropagation();
        });

        $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
          //  disableOn: 700,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,
            fixedContentPos: false
        });
    });


</script>

<script src='assets/js/jquery.zoom.js'></script>
<script>
    $(document).ready(function () {

        // Product ZOOM

        $('.zoomContent').zoom();


        $('.gall-item').magnificPopup({
            type: 'image',
            gallery: {
                enabled: true
            }
        });


        // Fake Click Event to show popup

        $(".zoomContent").click(function () {
            $(this).find('.gall-item').trigger('click');
        });


    });


</script>


<!-- bxSlider Javascript file -->
<script src="assets/plugins/bxslider/plugins/jquery.fitvids.js"></script>
<script src="assets/plugins/bxslider/jquery.bxslider.min.js"></script>

<script>

    $(document).ready(function () {

        var $$mainImgSliderPager = $('#bx-pager');

        // Slider
        var $mainImgSlider = $('.bxslider').bxSlider({
            pagerCustom: '#bx-pager',
            video: true,
            useCSS: false,
            mode: 'vertical',
            touchEnabled: false,
            controls: false
        });

        // initiates responsive slide
        var settings = function () {
            var mobileSettings = {
                slideWidth: 60,
                minSlides: 2,
                maxSlides: 4,
                slideMargin: 10,
                controls: false

            };
            var pcSettings = {
                mode: 'vertical',
                minSlides: 4,
                pager: false,
                slideMargin: 10,
                nextSelector: '.product-view-thumb-nav.next',
                prevSelector: '.product-view-thumb-nav.prev',
                nextText: ' <i class="fa fa-angle-down"></i>',
                prevText: ' <i class="fa fa-angle-up"></i>'
            };
            return ($(window).width() < 768) ? mobileSettings : pcSettings;
        }

        var thumbSlider;

        function tourLandingScript() {
            thumbSlider.reloadSlider(settings());
        }

        thumbSlider = $('.has-carousel-v .product-view-thumb').bxSlider(settings());
        $(window).resize(tourLandingScript);

    });

</script>

<script src="assets/plugins/rating/bootstrap-rating.min.js"></script>
<script>
    $(function () {
        // for popup rating section
        $('.rating-tooltip-manual').rating({
            extendSymbol: function () {
                var title;
                $(this).tooltip({
                    container: 'body',
                    placement: 'bottom',
                    trigger: 'manual',
                    title: function () {
                        return title;
                    }
                });
                $(this).on('rating.rateenter', function (e, rate) {
                    title = rate;
                    $(this).tooltip('show');
                })
                        .on('rating.rateleave', function () {
                            $(this).tooltip('hide');
                        });
            }
        });

    });
</script>


<script type="text/javascript" src="assets/js/skrollr.min.js"></script>
<script type="text/javascript">
    var isMobile = function () {
        //console.log("Navigator: " + navigator.userAgent);
        return /(iphone|ipod|ipad|android|blackberry|windows ce|palm|symbian)/i.test(navigator.userAgent);
    };

    if (isMobile()) {
        // For  mobile , ipad, tab

    } else {

        if ($(window).width() < 768) {
        } else {
            var s = skrollr.init({forceHeight: false});
        }

    }


</script>


<!-- include custom script for site  -->
<script src="assets/js/script.js"></script>

<!-- Reveal Animations When You Scroll  -->
<script src="assets/js/wow.min.js"></script>
<script>
    new WOW().init();
</script>

</body>
<>

