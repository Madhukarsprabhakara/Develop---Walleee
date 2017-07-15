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
                            <li class="phone-number">
                                <a href="http://localhost/walleee/html/callto:+12025550151">
                                    <span> <i class="glyphicon glyphicon-phone-alt "></i></span>
                                    <span class="hidden-xs" style="margin-left:5px"> +1-202-555-0151 </span> </a></li>
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
                            <td style="20%" class="miniCartProductThumb">
                                <div><a href="http://localhost/walleee/html/product-details"> <img src="images/product/3.jpg" alt="img"> </a>
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
                                <div><a href="http://localhost/walleee/html/product-details"> <img src="images/product/2.jpg" alt="img"> </a>
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
                                <div><a href="http://localhost/walleee/html/product-details"> <img src="images/product/5.jpg" alt="img"> </a>
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
                                <div><a href="http://localhost/walleee/html/product-details"> <img src="images/product/3.jpg" alt="img"> </a>
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
                                <div><a href="http://localhost/walleee/html/product-details"> <img src="images/product/3.jpg" alt="img"> </a>
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
                                <div><a href="http://localhost/walleee/html/product-details"> <img src="images/product/4.jpg" alt="img"> </a>
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
                    <a class="btn btn-sm btn-danger">
                        <i class="fa fa-shopping-cart"> </i> VIEW CART </a> <a class="btn btn-sm btn-primary">
                    CHECKOUT </a>
                </div>
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
                                <li><a href="http://localhost/walleee/html/category"> NEW DENIM </a></li>
                            </ul>
                            <ul class="col-lg-3  col-sm-3 col-md-3  col-xs-4">
                                <li><a class="newProductMenuBlock" href="http://localhost/walleee/html/product-details">
                                    <img class="img-responsive" src="images/site/promo1.jpg" alt="product">
                    <span class="ProductMenuCaption"> 
                    <i class="fa fa-caret-right"> </i> JEANS </span> </a>
                                </li>
                            </ul>
                            <ul class="col-lg-3  col-sm-3 col-md-3 col-xs-4">
                                <li><a class="newProductMenuBlock" href="http://localhost/walleee/html/product-details">
                                    <img class="img-responsive" src="images/site/promo2.jpg" alt="product">
                                    <span class="ProductMenuCaption"> <i
                                            class="fa fa-caret-right"> </i> PARTY DRESS </span>
                                </a>
                                </li>
                            </ul>
                            <ul class="col-lg-3  col-sm-3 col-md-3 col-xs-4">
                                <li><a class="newProductMenuBlock" href="http://localhost/walleee/html/product-details">
                                    <img class="img-responsive" src="images/site/promo3.jpg" alt="product">
                                    <span class="ProductMenuCaption"> <i class="fa fa-caret-right"> </i> SHOES </span>
                                </a>
                                </li>
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
                                <li><a href="http://localhost/walleee/html/#"> Denim </a></li>
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
                                <li><a href="http://localhost/walleee/html/#"> DENIM </a></li>
                                <li><a href="http://localhost/walleee/html/#"> TANJIM </a></li>
                            </ul>
                            <ul class="col-lg-3  col-sm-3 col-md-3 col-xs-6">
                                <li class="no-margin productPopItem ">

                                    <a href="http://localhost/walleee/html/product-details">
                                        <img class="img-responsive" src="images/site/g4.jpg" alt="img">
                                    </a>

                                    <a class="text-center productInfo alpha90" href="http://localhost/walleee/html/product-details"> Eodem modo
                                        typi <br>

                                        <span> $60 </span> </a>
                                </li>
                            </ul>
                            <ul class="col-lg-3  col-sm-3 col-md-3 col-xs-6">
                                <li class="no-margin productPopItem relative">
                                    <a href="http://localhost/walleee/html/product-details">
                                        <img class="img-responsive" src="images/site/g5.jpg" alt="img">
                                    </a>
                                    <a class="text-center productInfo alpha90" href="http://localhost/walleee/html/product-details"> Eodem modo
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

                <div class="dropdown  cartMenu ">
                    <a href="http://localhost/walleee/html/#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-shopping-cart"> </i>
                        <span class="cartRespons"> Cart ($210.00) </span>
                        <b class="caret"> </b>
                    </a>

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
                            <a class="btn btn-sm btn-danger">
                                <i class="fa fa-shopping-cart"> </i> VIEW CART </a>
                            <a class="btn btn-sm btn-primary"> CHECKOUT </a>
                        </div>
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


<div class="parallax-section parallax-fx about-3 parallaxOffset no-padding"
     style="background-image: url(images/about/1.jpg); ">
    <div class="w100 ">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="parallax-content clearfix  wow fadeInUp" data-wow-duration=".8s" data-wow-delay="0">
                        <h2 class="intro-heading ">Exlusive Fashion Shop
                            <br> Discover Tshop </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.parallax -->


<div class="container main-container ">

    <div class="row innerPage">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="about-content wow fadeIn" data-wow-duration=".8s" data-wow-delay="0">
                <p class="lead-2 text-center">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac augue at erat hendrerit
                    dictum. Praesent porta, purus eget sagittis imperdiet, nulla mi ullamcorper metus, id hendrerit
                    metus diam vitae est.
                </p>

            </div>

            <div style="clear:both;">
                <hr class="hr40">
            </div>


            <div class="row has-equal-height-child">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xxs-12 is-equal">
                    <div class="hw100 display-table">
                        <div class="hw100 display-table-cell">
                            <div class="content-inner wow fadeInRight" data-wow-duration=".8s" data-wow-delay="0">

                                <div class="about-content-text">

                                    <h3>
                                        Lorem ipsum dolor sit amet <br> consectetur adipiscing elit
                                    </h3>

                                    <p>
                                        Maecenas ac augue at erat hendrerit dictum. Praesent porta, purus eget sagittis
                                        imperdiet, nulla mi ullamcorper
                                        metus, id hendrerit metus diam vitae est. Class aptent taciti sociosqu ad litora
                                        torquent per conubia nostra, per inceptos himenaeos. Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xxs-12 is-equal">
                    <div class="content-inner wow fadeInLeft" data-wow-duration=".8s" data-wow-delay="0">
                        <img src="images/about/2.jpg" class="img-responsive abt-img" alt="img">
                    </div>

                </div>


            </div>
            <!--/.row-->

            <div style="clear:both;">
                <hr class="hr40">
            </div>

            <div class="row has-equal-height-child">

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xxs-12 is-equal">
                    <div class="content-inner wow fadeInLeft" data-wow-duration=".8s" data-wow-delay="0">
                        <img src="images/about/3.jpg" class="img-responsive abt-img" alt="img">
                    </div>

                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xxs-12 is-equal">
                    <div class="hw100 display-table">
                        <div class="hw100 display-table-cell">
                            <div class="content-inner wow fadeInRight" data-wow-duration=".8s" data-wow-delay="0">

                                <div class="about-content-text">

                                    <h3>
                                        Lorem ipsum dolor sit amet <br> consectetur adipiscing elit
                                    </h3>

                                    <p>
                                        Maecenas ac augue at erat hendrerit dictum. Praesent porta, purus eget sagittis
                                        imperdiet, nulla mi ullamcorper
                                        metus, id hendrerit metus diam vitae est. Class aptent taciti sociosqu ad litora
                                        torquent per conubia nostra, per inceptos himenaeos. Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>


            </div>
            <!--/.row-->


            <div style="clear:both;">
                <hr class="hr40">
            </div>


            <div class="row has-equal-height-child">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xxs-12 is-equal">
                    <div class="hw100 display-table">
                        <div class="hw100 display-table-cell">
                            <div class="content-inner  wow fadeInRight" data-wow-duration=".8s" data-wow-delay="0">

                                <div class="about-content-text">

                                    <h3>
                                        Lorem ipsum dolor sit amet <br> consectetur adipiscing elit
                                    </h3>

                                    <p>
                                        Maecenas ac augue at erat hendrerit dictum. Praesent porta, purus eget sagittis
                                        imperdiet, nulla mi ullamcorper
                                        metus, id hendrerit metus diam vitae est. Class aptent taciti sociosqu ad litora
                                        torquent per conubia nostra, per inceptos himenaeos. Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xxs-12 is-equal">
                    <div class="content-inner wow fadeInLeft" data-wow-duration=".8s" data-wow-delay="0">
                        <img src="images/about/7.jpg" class="img-responsive abt-img" alt="img">
                    </div>

                </div>


            </div>
            <!--/.row-->

            <div style="clear:both;">
                <hr class="hr40">
            </div>

            <div class="row has-equal-height-child">

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xxs-12 is-equal">
                    <div class="content-inner  wow fadeInLeft" data-wow-duration=".8s" data-wow-delay="0">
                        <img src="images/about/4.jpg" class="img-responsive abt-img" alt="img">
                    </div>

                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xxs-12 is-equal">
                    <div class="hw100 display-table">
                        <div class="hw100 display-table-cell">
                            <div class="content-inner  wow fadeInRight" data-wow-duration=".8s" data-wow-delay="0">

                                <div class="about-content-text">

                                    <h3>
                                        Lorem ipsum dolor sit amet <br> consectetur adipiscing elit
                                    </h3>

                                    <p>
                                        Maecenas ac augue at erat hendrerit dictum. Praesent porta, purus eget sagittis
                                        imperdiet, nulla mi ullamcorper
                                        metus, id hendrerit metus diam vitae est. Class aptent taciti sociosqu ad litora
                                        torquent per conubia nostra, per inceptos himenaeos. Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!--/.row-->





            <!--/row end-->
        </div>
    </div>
    <!--/.innerPage-->
    <div style="clear:both"></div>
</div>
<!-- /.main-container -->



<div class="section-people white-bg">
<div class="container">
    <div style="clear:both;">
     <hr class="hr40 hide-on-gray-look">
    </div>

    <div class="row ">
        <div class="col-xs-12">
            <h2 class="text-center about-title">Our People</h2>


            <div class="row row-center preson-row">
                <div class=" preson text-center wow fadeInUp" data-wow-duration=".5s" data-wow-delay="0.05">
                    <img src="images/about/p2.jpg" class="img-circle img-responsive" alt="img">

                    <div class="preson-details">
                        <p>George Stanley<br><span>Director</span></p>

                    </div>
                </div>

                <div class=" preson text-center wow fadeInUp" data-wow-duration=".25s" data-wow-delay="0.07">
                    <img src="images/about/p1.jpg" class="img-circle img-responsive" alt="img">

                    <div class="preson-details">
                        <p>Michael Harmon<br><span>Manager</span></p>

                    </div>
                </div>

                <div class=" preson text-center wow fadeInUp" data-wow-duration=".40s" data-wow-delay="0.09">
                    <img src="images/about/p3.jpg" class="img-circle img-responsive" alt="img">

                    <div class="preson-details">
                        <p>James Flynn<br><span>CTO</span></p>

                    </div>
                </div>

                <div class=" preson text-center wow fadeInUp" data-wow-duration=".65s" data-wow-delay="0.1">
                    <img src="images/about/p4.jpg" class="img-circle img-responsive" alt="img">

                    <div class="preson-details">
                        <p>Julie N. <br><span>Head Marketing</span></p>

                    </div>
                </div>


            </div>


        </div>

    </div>
</div>
</div>

<div class="section-about-bottom"
     style="background: url(images/about/bg.jpg) no-repeat bottom center; background-size: 100% auto">



    <!--  .row || Our People -->

    <div class="container">
        <div class="col-lg-12">
            <div class="about-content text-center  wow fadeInUp">
                <h2 class="text-center about-title"> Enquiries </h2>

                <p class="lead-2 ">
                    If you have any questions, comments or concerns, <br> Send us a text message, and we'll get you what
                    you want </p>


                <a class="btn btn-center btn-lg  btn-primary" data-toggle="modal" href="http://localhost/walleee/html/#contact-us"><i
                        class=" fa fa-envelope"></i> Send a message </a>
            </div>

        </div>
    </div>
</div>
<!-- /.section-about-bottom -->


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
    <!--/.footer-bottom-->
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


<div role="dialog" tabindex="-1" id="contact-us" class="modal fade" aria-hidden="true">
    <div class="modal-dialog modal-xs">
        <div class="modal-content">

            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button"> ×</button>
                <h3 class="modal-title-site text-center"> Selling Enquiries </h3>
            </div>


            <div class="modal-body">
                <form role="form" lpformnum="24">
                    <div class="form-group">
                        <label class="control-label" for="recipient-name">Name:</label>
                        <input type="text"
                               data-content="Must be at least 3 characters long, and must only contain letters."
                               data-trigger="manual" data-placement="top" placeholder="Your Name" id="recipient-name"
                               class="form-control required">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="sender-email">E-mail:</label>
                        <input type="text" class="form-control email" placeholder="email@website.com"
                               data-placement="top" data-trigger="manual" id="sender-email">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="recipient-Phone-Number">Phone Number:</label>
                        <input type="text" id="recipient-Phone-Number" class="form-control" maxlength="60">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="message-text">Message <span class="text-count">(300) </span>:</label>
                        <textarea data-trigger="manual" data-placement="top" placeholder="Your message here.."
                                  id="message-text" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <p id="form-error" class="help-block pull-left error text-danger hide">&nbsp; The form is not
                            valid. </p>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary btn-lg pull-right btn-block" type="submit">Send message!</button>
            </div>
        </div>
    </div>
</div>

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


<!-- Reveal Animations When You Scroll  -->
<script src="assets/js/wow.min.js"></script>
<script>
    new WOW().init();
</script>

</body>
<>



