<!DOCTYPE>
 lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://localhost/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://localhost/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://localhost/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="http://localhost/walleee/html/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="http://localhost/assets/ico/favicon.png">
    <title>TSHOP - Bootstrap E-Commerce Parallax Theme</title>
    <!-- Bootstrap core CSS -->
    <link href="http://localhost/assets/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://localhost/assets/css/style.css" rel="stylesheet">
    <link href="http://localhost/assets/css/category-2.css" rel="stylesheet">

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
                <li><a href="http://localhost/walleee/html/#"> Home </a></li>
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

<section class="category-wrapper">

    <section id="category-intro" class="section-intro scrollme parallaxOffset">
        <div class="cat-intro animateme" data-when="exit"
             data-from="0"
             data-to="1"
             data-opacity="0"
             data-translatey="-220"
             data-rotatez="0"
             data-crop="true">

            <div class="cat-intro-text">
                <div class="display-table hw100">
                    <div class="display-table-cell hw100">
                        <div class="box-text-cell-inner white animateme" data-when="exit"
                             data-from="0"
                             data-to="1"
                             data-opacity="0"
                             data-translatey="-260"
                             data-rotatez="0"
                             data-crop="true">

                            <h1>SHOP WOMEN</h1>

                            <p>Discover the latest women's fashion </p>

                            <p><a style="color:#fff" href="http://localhost/walleee/html/#main-container-wrapper" class="scrollto"><i
                                    class="fa fa-2x fa-angle-down"></i></a></p>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.cat-intro-text-->

            <img src="http://localhost/images/slider/single-img/2.jpg" alt="img" class=" cat-intro-banner"></div>
    </section>

    <section class="main-container-wrapper clearfix" id="main-container-wrapper">
        <div class="container main-container">

            <!-- Main component call to action -->

            <div class="row">

                <div class="catTopBar clearfix">
                    <div class="catTopBarInner clearfix">
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="f-left hidden-xs">
                                <h4 class="filterToggle"><i class="fa fa-bars"></i> <strong>Filter</strong> <span> &nbsp; </span>
                                </h4>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <div class="f-right">
                                <div class="w100  clearfix center-xs-inner">
                                    <p class="pull-left shrtByP center-xs"><span>Sort By :</span> <a
                                            class="active">NEW</a> | <a>POPULAR</a>| <a>PIRCE</a></p>


                                    <div class="pull-right hidden-xs">
                                        <p class="pull-right change-view-flat"><span>View By :</span> <a href="http://localhost/walleee/html/#"
                                                                                                         title="Grid"
                                                                                                         class="grid-view">
                                            <i class="fa fa-th-large"></i> </a> | <a href="http://localhost/walleee/html/#" title="List"
                                                                                     class="list-view "><i
                                                class="fa fa-th-list"></i></a></p>


                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <!--left column-->

                <div class="catColumnWrapper">
                    <div class="col-lg-3 col-md-3 col-sm-12 filterColumn">
                        <div class="panel-group" id="accordion">
                            <!--Category-->
                            <div class="panel panel-flat">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a data-toggle="collapse" href="http://localhost/walleee/html/#collapseCategory" class="">
                                        <span class="pull-right hasMinus"> <i class="i-minus"></i></span> Category </a>
                                    </h4>
                                </div>
                                <div id="collapseCategory" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <ul class="nav nav-list">
                                            <li><a> Watches </a></li>
                                            <li><a href="http://localhost/walleee/html/#"> Accessories </a></li>
                                            <li><a href="http://localhost/walleee/html/#"> Clothing </a></li>
                                            <li><a href="http://localhost/walleee/html/#"> Jackets </a></li>
                                            <li><a href="http://localhost/walleee/html/#"> Sweaters </a></li>
                                            <li><a href="http://localhost/walleee/html/#"> Shirts </a></li>
                                            <li><a href="http://localhost/walleee/html/#"> Offers Zone </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--/Category menu end-->

                            <div class="panel panel-flat">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a class="" data-toggle="collapse" href="http://localhost/walleee/html/#collapsePrice">
                                        Price <span class="pull-right hasMinus"> <i class="i-minus"></i></span> </a>
                                    </h4>
                                </div>
                                <div id="collapsePrice" class="panel-collapse collapse in">
                                    <div class="panel-body priceFilterBody ">
                                        <ul class="list-unstyled">
                                            <li>
                                                <!-- -->
                                                <label>
                                                    <input type="radio" name="agree" value="0"/>
                                                    100$ - 500$</label>
                                            </li>

                                            <li><label>
                                                <input type="radio" name="agree" value="1"/>
                                                500$ - 1000$</label>
                                            </li>
                                            <li><label>
                                                <input type="radio" name="agree" value="2"/>
                                                1000$ - 1500$</label>
                                            </li>
                                            <li><label>
                                                <input type="radio" name="agree" value="3"/>
                                                1500$ - 2000$</label>
                                            </li>
                                            <li><label>
                                                <input type="radio" name="agree" value="4"/>
                                                2000$ - 2500$</label>
                                            </li>
                                            <li><label>
                                                <input type="radio" name="agree" value="5"/>
                                                2500$ - 3000$</label>
                                            </li>
                                            <li><label>
                                                <input type="radio" name="agree" value="6" disabled checked/>
                                                Don't know</label></li>
                                        </ul>
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

                            <div class="panel panel-flat">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a data-toggle="collapse" href="http://localhost/walleee/html/#collapseBrand" class="">
                                        Brand <span class="pull-right hasMinus"> <i class="i-minus"></i></span> </a>
                                    </h4>
                                </div>
                                <div id="collapseBrand" class="panel-collapse collapse in">
                                    <div class="panel-body ">
                                        <ul class="list-unstyled long-list">
                                            <li>
                                                <div class="block-element">
                                                    <label>
                                                        <input type="checkbox" name="tour" value="0"/>
                                                        Armani </label>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="block-element">
                                                    <label>
                                                        <input type="checkbox" name="tour" value="1"/>
                                                        Gucci </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="block-element">
                                                    <label>
                                                        <input type="checkbox" name="tour" value="2"/>
                                                        Louis Vuitton </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="block-element">
                                                    <label>
                                                        <input type="checkbox" name="tour" value="3"/>
                                                        Chanel </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="block-element">
                                                    <label>
                                                        <input type="checkbox" name="tour" value="3"/>
                                                        Roberto Cavalli </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="block-element">
                                                    <label>
                                                        <input type="checkbox" name="tour" value="3"/>
                                                        Valentino </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="block-element">
                                                    <label>
                                                        <input type="checkbox" name="tour" value="3"/>
                                                        Ralph Lauren </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="block-element">
                                                    <label>
                                                        <input type="checkbox" name="tour" value="3"/>
                                                        Miu Miu </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="block-element">
                                                    <label>
                                                        <input type="checkbox" name="tour" value="3"/>
                                                        McQueen </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="block-element">
                                                    <label>
                                                        <input type="checkbox" name="tour" value="3"/>
                                                        adidas </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="block-element">
                                                    <label>
                                                        <input type="checkbox" name="tour" value="3"/>
                                                        Nike </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="block-element">
                                                    <label>
                                                        <input type="checkbox" name="tour" value="3"/>
                                                        Jimmy Choo </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="block-element">
                                                    <label>
                                                        <input type="checkbox" name="tour" value="3"/>
                                                        Bottega Veneta </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="block-element">
                                                    <label>
                                                        <input type="checkbox" name="tour" value="3"/>
                                                        Donna Karan </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="block-element">
                                                    <label>
                                                        <input type="checkbox" name="tour" value="3"/>
                                                        Oscar de la Renta </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="block-element">
                                                    <label>
                                                        <input type="checkbox" name="tour" value="3"/>
                                                        Tods </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="block-element">
                                                    <label>
                                                        <input type="checkbox" name="tour" value="3"/>
                                                        Burberry </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="block-element">
                                                    <label>
                                                        <input type="checkbox" name="tour" value="3"/>
                                                        Michael Kors </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="block-element">
                                                    <label>
                                                        <input type="checkbox" name="tour" value="3"/>
                                                        Mulberry </label>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--/brand panel end-->

                            <div class="panel panel-flat">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a data-toggle="collapse" href="http://localhost/walleee/html/#collapseColor" class="">
                                        Color <span class="pull-right hasMinus"> <i class="i-minus"></i></span> </a>
                                    </h4>
                                </div>
                                <div id="collapseColor" class="panel-collapse collapse in">
                                    <div class="panel-body  color-filter">

                                        <ul class="list-unstyled long-list">
                                            <li>
                                                <div class="block-element">
                                                    <label>
                                                        <input type="checkbox" name="tour" value="0"/>
                                                        <small style="background-color:#333333"></small>
                                                        Black <span>(123)</span> </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="block-element">
                                                    <label>
                                                        <input type="checkbox" name="tour" value="1"/>
                                                        <small style="background-color:#1664c4"></small>
                                                        Blue (434) </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="block-element">
                                                    <label>
                                                        <input type="checkbox" name="tour" value="2"/>
                                                        <small style="background-color:#c00707"></small>
                                                        Red (338) </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="block-element">
                                                    <label>
                                                        <input type="checkbox" name="tour" value="3"/>
                                                        <small style="background-color:#6fcc14"></small>
                                                        Green (253) </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="block-element">
                                                    <label>
                                                        <input type="checkbox" name="tour" value="3"/>
                                                        <small style="background-color:#943f00"></small>
                                                        Brown (240) </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="block-element">
                                                    <label>
                                                        <input type="checkbox" name="tour" value="3"/>
                                                        <small style="background-color:#ff1cae"></small>
                                                        Pink (212) </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="block-element">
                                                    <label>
                                                        <input type="checkbox" name="tour" value="3"/>
                                                        <small style="background-color:#f5f5dc"></small>
                                                        Beige (176) </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="block-element">
                                                    <label>
                                                        <input type="checkbox" name="tour" value="3"/>
                                                        <small style="background-color:#adadad"></small>
                                                        Grey (154) </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="block-element">
                                                    <label>
                                                        <input type="checkbox" name="tour" value="3"/>
                                                        <small style="background-color:#5d00dc"></small>
                                                        Purple (132) </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="block-element">
                                                    <label>
                                                        <input type="checkbox" name="tour" value="3"/>
                                                        <small style="background-color:#f1f40e"></small>
                                                        Yellow (104) </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="block-element">
                                                    <label>
                                                        <input type="checkbox" name="tour" value="3"/>
                                                        <small style="background-color:#ffc600"></small>
                                                        Orange (77) </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="block-element">
                                                    <label>
                                                        <input type="checkbox" name="tour" value="3"/>
                                                        <small style="background-color:#9b1d00"></small>
                                                        Maroon (76) </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="block-element">
                                                    <label>
                                                        <input type="checkbox" name="tour" value="3"/>
                                                        <small style="background-color:#0a43a3"></small>
                                                        Navy Blue (68) </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="block-element">
                                                    <label>
                                                        <input type="checkbox" name="tour" value="3"/>
                                                        <small style="background-color:#ede4b2"></small>
                                                        Tan (67) </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="block-element">
                                                    <label>
                                                        <input type="checkbox" name="tour" value="3"/>
                                                        <small style="background-color:#ecf1ef"></small>
                                                        Silver (49) </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="block-element">
                                                    <label>
                                                        <input type="checkbox" name="tour" value="3"/>
                                                        <small style="background-color:#f3f1e7"></small>
                                                        Off White (44) </label>
                                                </div>
                                            </li>

                                        </ul>

                                    </div>
                                </div>
                            </div>
                            <!--/color panel end-->
                            <div class="panel panel-flat">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a data-toggle="collapse" href="http://localhost/walleee/html/#collapseThree" class="">
                                        Discount <span class="pull-right hasMinus"> <i class="i-minus"></i></span> </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <ul class="list-unstyled">
                                            <li>
                                                <div class="block-element">
                                                    <label>
                                                        <input type="checkbox" name="tour" value="3"/>
                                                        Non-Discounted items </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="block-element">
                                                    <label>
                                                        <input type="checkbox" name="tour" value="3"/>
                                                        Discounted items </label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--/discount  panel end-->
                        </div>
                    </div>

                    <!--right column-->
                    <div class="col-lg-9 col-md-9 col-sm-12 categoryColumn">


                        <!--/.productFilter-->
                        <div class="row  categoryProduct xsResponse clearfix">
                            <div class="item col-sm-4 col-lg-4 col-md-4 col-xs-6">
                                <div class="product">
                                    <a class="add-fav tooltipHere" data-toggle="tooltip"
                                       data-original-title="Add to Wishlist" data-placement="left">
                                        <i class="glyphicon glyphicon-heart"></i>
                                    </a>

                                    <div class="image">
                                        <div class="quickview">
                                            <a data-toggle="modal" class="btn btn-xs btn-quickview"
                                               href="http://localhost/walleee/html/ajax/product" data-target="#productSetailsModalAjax">Quick
                                                View </a>
                                        </div>
                                        <a href="http://localhost/walleee/html/product-details"><img src="http://localhost/images/product/30.jpg" alt="img"
                                                                            class="img-responsive"></a>

                                        <div class="promotion"><span class="new-product"> NEW</span> <span
                                                class="discount">15% OFF</span></div>
                                    </div>
                                    <div class="description">
                                        <h4><a href="http://localhost/walleee/html/product-details">aliquam erat volutpat</a></h4>

                                        <div class="grid-description">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                        </div>
                                        <div class="list-description">
                                            <p> Sed sed rutrum purus. Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Pellentesque risus lacus, iaculis in ante vitae, viverra hendrerit
                                                ante. Aliquam vel fermentum elit. Morbi rhoncus, neque in vulputate
                                                facilisis, leo tortor sollicitudin odio, quis pellentesque lorem nisi
                                                quis enim. In dolor mi, hendrerit at blandit vulputate, congue a purus.
                                                Sed eget turpis sit amet orci euismod accumsan. Praesent sit amet
                                                placerat elit. </p>
                                        </div>
                                        <span class="size">XL / XXL / S </span></div>
                                    <div class="price"><span>$25</span></div>
                                    <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                                            class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a>
                                    </div>
                                </div>
                            </div>
                            <!--/.item-->
                            <div class="item col-sm-4 col-lg-4 col-md-4 col-xs-6">
                                <div class="product">
                                    <a class="add-fav tooltipHere" data-toggle="tooltip"
                                       data-original-title="Add to Wishlist" data-placement="left">
                                        <i class="glyphicon glyphicon-heart"></i>
                                    </a>

                                    <div class="image">
                                        <div class="quickview">
                                            <a data-toggle="modal" class="btn btn-xs btn-quickview"
                                               href="http://localhost/walleee/html/ajax/product" data-target="#productSetailsModalAjax">Quick
                                                View </a>
                                        </div>
                                        <a href="http://localhost/walleee/html/product-details"><img src="http://localhost/images/product/31.jpg" alt="img"
                                                                            class="img-responsive"></a>

                                        <div class="promotion"><span class="discount">15% OFF</span></div>
                                    </div>
                                    <div class="description">
                                        <h4><a href="http://localhost/walleee/html/product-details">ullamcorper suscipit lobortis </a></h4>

                                        <div class="grid-description">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                        </div>
                                        <div class="list-description">
                                            <p> Sed sed rutrum purus. Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Pellentesque risus lacus, iaculis in ante vitae, viverra hendrerit
                                                ante. Aliquam vel fermentum elit. Morbi rhoncus, neque in vulputate
                                                facilisis, leo tortor sollicitudin odio, quis pellentesque lorem nisi
                                                quis enim. In dolor mi, hendrerit at blandit vulputate, congue a purus.
                                                Sed eget turpis sit amet orci euismod accumsan. Praesent sit amet
                                                placerat elit. </p>
                                        </div>
                                        <span class="size">XL / XXL / S </span></div>
                                    <div class="price"><span>$25</span></div>
                                    <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                                            class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a>
                                    </div>
                                </div>
                            </div>
                            <!--/.item-->
                            <div class="item col-sm-4 col-lg-4 col-md-4 col-xs-6">
                                <div class="product">
                                    <a class="add-fav tooltipHere" data-toggle="tooltip"
                                       data-original-title="Add to Wishlist" data-placement="left">
                                        <i class="glyphicon glyphicon-heart"></i>
                                    </a>

                                    <div class="image">
                                        <div class="quickview">
                                            <a data-toggle="modal" class="btn btn-xs btn-quickview"
                                               href="http://localhost/walleee/html/ajax/product" data-target="#productSetailsModalAjax">Quick
                                                View </a>
                                        </div>
                                        <a href="http://localhost/walleee/html/product-details"><img src="http://localhost/images/product/34.jpg" alt="img"
                                                                            class="img-responsive"></a>

                                        <div class="promotion"><span class="new-product"> NEW</span></div>
                                    </div>
                                    <div class="description">
                                        <h4><a href="http://localhost/walleee/html/product-details">demonstraverunt lectores </a></h4>

                                        <div class="grid-description">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                        </div>
                                        <div class="list-description">
                                            <p> Sed sed rutrum purus. Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Pellentesque risus lacus, iaculis in ante vitae, viverra hendrerit
                                                ante. Aliquam vel fermentum elit. Morbi rhoncus, neque in vulputate
                                                facilisis, leo tortor sollicitudin odio, quis pellentesque lorem nisi
                                                quis enim. In dolor mi, hendrerit at blandit vulputate, congue a purus.
                                                Sed eget turpis sit amet orci euismod accumsan. Praesent sit amet
                                                placerat elit. </p>
                                        </div>
                                        <span class="size">XL / XXL / S </span></div>
                                    <div class="price"><span>$25</span> <span class="old-price">$75</span></div>
                                    <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                                            class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a>
                                    </div>
                                </div>
                            </div>
                            <!--/.item-->
                            <div class="item col-sm-4 col-lg-4 col-md-4 col-xs-6">
                                <div class="product">
                                    <a class="add-fav tooltipHere" data-toggle="tooltip"
                                       data-original-title="Add to Wishlist" data-placement="left">
                                        <i class="glyphicon glyphicon-heart"></i>
                                    </a>

                                    <div class="image">
                                        <div class="quickview">
                                            <a data-toggle="modal" class="btn btn-xs btn-quickview"
                                               href="http://localhost/walleee/html/ajax/product" data-target="#productSetailsModalAjax">Quick
                                                View </a>
                                        </div>
                                        <a href="http://localhost/walleee/html/product-details"><img src="http://localhost/images/product/35.jpg" alt="img"
                                                                            class="img-responsive"></a></div>
                                    <div class="description">
                                        <h4><a href="http://localhost/walleee/html/product-details">humanitatis per</a></h4>

                                        <div class="grid-description">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                        </div>
                                        <div class="list-description">
                                            <p> Sed sed rutrum purus. Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Pellentesque risus lacus, iaculis in ante vitae, viverra hendrerit
                                                ante. Aliquam vel fermentum elit. Morbi rhoncus, neque in vulputate
                                                facilisis, leo tortor sollicitudin odio, quis pellentesque lorem nisi
                                                quis enim. In dolor mi, hendrerit at blandit vulputate, congue a purus.
                                                Sed eget turpis sit amet orci euismod accumsan. Praesent sit amet
                                                placerat elit. </p>
                                        </div>
                                        <span class="size">XL / XXL / S </span></div>
                                    <div class="price"><span>$25</span></div>
                                    <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                                            class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a>
                                    </div>
                                </div>
                            </div>
                            <!--/.item-->
                            <div class="item col-sm-4 col-lg-4 col-md-4 col-xs-6">
                                <div class="product">
                                    <a class="add-fav tooltipHere" data-toggle="tooltip"
                                       data-original-title="Add to Wishlist" data-placement="left">
                                        <i class="glyphicon glyphicon-heart"></i>
                                    </a>

                                    <div class="image">
                                        <div class="quickview">
                                            <a data-toggle="modal" class="btn btn-xs btn-quickview"
                                               href="http://localhost/walleee/html/ajax/product" data-target="#productSetailsModalAjax">Quick
                                                View </a>
                                        </div>
                                        <a href="http://localhost/walleee/html/product-details"><img src="http://localhost/images/product/33.jpg" alt="img"
                                                                            class="img-responsive"></a></div>
                                    <div class="description">
                                        <h4><a href="http://localhost/walleee/html/product-details">Eodem modo typi</a></h4>

                                        <div class="grid-description">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                        </div>
                                        <div class="list-description">
                                            <p> Sed sed rutrum purus. Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Pellentesque risus lacus, iaculis in ante vitae, viverra hendrerit
                                                ante. Aliquam vel fermentum elit. Morbi rhoncus, neque in vulputate
                                                facilisis, leo tortor sollicitudin odio, quis pellentesque lorem nisi
                                                quis enim. In dolor mi, hendrerit at blandit vulputate, congue a purus.
                                                Sed eget turpis sit amet orci euismod accumsan. Praesent sit amet
                                                placerat elit. </p>
                                        </div>
                                        <span class="size">XL / XXL / S </span></div>
                                    <div class="price"><span>$25</span></div>
                                    <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                                            class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a>
                                    </div>
                                </div>
                            </div>
                            <!--/.item-->
                            <div class="item col-sm-4 col-lg-4 col-md-4 col-xs-6">
                                <div class="product">
                                    <a class="add-fav tooltipHere" data-toggle="tooltip"
                                       data-original-title="Add to Wishlist" data-placement="left">
                                        <i class="glyphicon glyphicon-heart"></i>
                                    </a>

                                    <div class="image">
                                        <div class="quickview">
                                            <a data-toggle="modal" class="btn btn-xs btn-quickview"
                                               href="http://localhost/walleee/html/ajax/product" data-target="#productSetailsModalAjax">Quick
                                                View </a>
                                        </div>
                                        <a href="http://localhost/walleee/html/product-details"><img src="http://localhost/images/product/10.jpg" alt="img"
                                                                            class="img-responsive"></a></div>
                                    <div class="description">
                                        <h4><a href="http://localhost/walleee/html/product-details">sequitur mutationem </a></h4>

                                        <div class="grid-description">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                        </div>
                                        <div class="list-description">
                                            <p> Sed sed rutrum purus. Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Pellentesque risus lacus, iaculis in ante vitae, viverra hendrerit
                                                ante. Aliquam vel fermentum elit. Morbi rhoncus, neque in vulputate
                                                facilisis, leo tortor sollicitudin odio, quis pellentesque lorem nisi
                                                quis enim. In dolor mi, hendrerit at blandit vulputate, congue a purus.
                                                Sed eget turpis sit amet orci euismod accumsan. Praesent sit amet
                                                placerat elit. </p>
                                        </div>
                                        <span class="size">XL / XXL / S </span></div>
                                    <div class="price"><span>$25</span></div>
                                    <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                                            class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a>
                                    </div>
                                </div>
                            </div>
                            <!--/.item-->
                            <div class="item col-sm-4 col-lg-4 col-md-4 col-xs-6">
                                <div class="product">
                                    <a class="add-fav tooltipHere" data-toggle="tooltip"
                                       data-original-title="Add to Wishlist" data-placement="left">
                                        <i class="glyphicon glyphicon-heart"></i>
                                    </a>

                                    <div class="image">
                                        <div class="quickview">
                                            <a data-toggle="modal" class="btn btn-xs btn-quickview"
                                               href="http://localhost/walleee/html/ajax/product" data-target="#productSetailsModalAjax">Quick
                                                View </a>
                                        </div>
                                        <a href="http://localhost/walleee/html/product-details"><img src="http://localhost/images/product/37.jpg" alt="img"
                                                                            class="img-responsive"></a></div>
                                    <div class="description">
                                        <h4><a href="http://localhost/walleee/html/product-details">consuetudium lectorum.</a></h4>

                                        <div class="grid-description">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                        </div>
                                        <div class="list-description">
                                            <p> Sed sed rutrum purus. Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Pellentesque risus lacus, iaculis in ante vitae, viverra hendrerit
                                                ante. Aliquam vel fermentum elit. Morbi rhoncus, neque in vulputate
                                                facilisis, leo tortor sollicitudin odio, quis pellentesque lorem nisi
                                                quis enim. In dolor mi, hendrerit at blandit vulputate, congue a purus.
                                                Sed eget turpis sit amet orci euismod accumsan. Praesent sit amet
                                                placerat elit. </p>
                                        </div>
                                        <span class="size">XL / XXL / S </span></div>
                                    <div class="price"><span>$25</span> <span class="old-price">$75</span></div>
                                    <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                                            class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a>
                                    </div>
                                </div>
                            </div>
                            <!--/.item-->
                            <div class="item col-sm-4 col-lg-4 col-md-4 col-xs-6">
                                <div class="product">
                                    <a class="add-fav tooltipHere" data-toggle="tooltip"
                                       data-original-title="Add to Wishlist" data-placement="left">
                                        <i class="glyphicon glyphicon-heart"></i>
                                    </a>

                                    <div class="image">
                                        <div class="quickview">
                                            <a data-toggle="modal" class="btn btn-xs btn-quickview"
                                               href="http://localhost/walleee/html/ajax/product" data-target="#productSetailsModalAjax">Quick
                                                View </a>
                                        </div>
                                        <a href="http://localhost/walleee/html/product-details"><img src="http://localhost/images/product/16.jpg" alt="img"
                                                                            class="img-responsive"></a></div>
                                    <div class="description">
                                        <h4><a href="http://localhost/walleee/html/product-details">parum claram</a></h4>

                                        <div class="grid-description">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                        </div>
                                        <div class="list-description">
                                            <p> Sed sed rutrum purus. Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Pellentesque risus lacus, iaculis in ante vitae, viverra hendrerit
                                                ante. Aliquam vel fermentum elit. Morbi rhoncus, neque in vulputate
                                                facilisis, leo tortor sollicitudin odio, quis pellentesque lorem nisi
                                                quis enim. In dolor mi, hendrerit at blandit vulputate, congue a purus.
                                                Sed eget turpis sit amet orci euismod accumsan. Praesent sit amet
                                                placerat elit. </p>
                                        </div>
                                        <span class="size">XL / XXL / S </span></div>
                                    <div class="price"><span>$25</span> <span class="old-price">$75</span></div>
                                    <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                                            class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a>
                                    </div>
                                </div>
                            </div>
                            <!--/.item-->
                            <div class="item col-sm-4 col-lg-4 col-md-4 col-xs-6">
                                <div class="product">
                                    <a class="add-fav tooltipHere" data-toggle="tooltip"
                                       data-original-title="Add to Wishlist" data-placement="left">
                                        <i class="glyphicon glyphicon-heart"></i>
                                    </a>

                                    <div class="image">
                                        <div class="quickview">
                                            <a data-toggle="modal" class="btn btn-xs btn-quickview"
                                               href="http://localhost/walleee/html/ajax/product" data-target="#productSetailsModalAjax">Quick
                                                View </a>
                                        </div>
                                        <a href="http://localhost/walleee/html/product-details"><img src="http://localhost/images/product/19.jpg" alt="img"
                                                                            class="img-responsive"></a></div>
                                    <div class="description">
                                        <h4><a href="http://localhost/walleee/html/product-details">duis dolore </a></h4>

                                        <div class="grid-description">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                        </div>
                                        <div class="list-description">
                                            <p> Sed sed rutrum purus. Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Pellentesque risus lacus, iaculis in ante vitae, viverra hendrerit
                                                ante. Aliquam vel fermentum elit. Morbi rhoncus, neque in vulputate
                                                facilisis, leo tortor sollicitudin odio, quis pellentesque lorem nisi
                                                quis enim. In dolor mi, hendrerit at blandit vulputate, congue a purus.
                                                Sed eget turpis sit amet orci euismod accumsan. Praesent sit amet
                                                placerat elit. </p>
                                        </div>
                                        <span class="size">XL / XXL / S </span></div>
                                    <div class="price"><span>$25</span></div>
                                    <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                                            class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a>
                                    </div>
                                </div>
                            </div>
                            <!--/.item-->
                            <div class="item col-sm-4 col-lg-4 col-md-4 col-xs-6">
                                <div class="product">
                                    <a class="add-fav tooltipHere" data-toggle="tooltip"
                                       data-original-title="Add to Wishlist" data-placement="left">
                                        <i class="glyphicon glyphicon-heart"></i>
                                    </a>

                                    <div class="image">
                                        <div class="quickview">
                                            <a data-toggle="modal" class="btn btn-xs btn-quickview"
                                               href="http://localhost/walleee/html/ajax/product" data-target="#productSetailsModalAjax">Quick
                                                View </a>
                                        </div>
                                        <a href="http://localhost/walleee/html/product-details"><img src="http://localhost/images/product/15.jpg" alt="img"
                                                                            class="img-responsive"></a>

                                        <div class="promotion"><span class="new-product"> NEW</span> <span
                                                class="discount">15% OFF</span></div>
                                    </div>
                                    <div class="description">
                                        <h4><a href="http://localhost/walleee/html/product-details">aliquam erat volutpat</a></h4>

                                        <div class="grid-description">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                        </div>
                                        <div class="list-description">
                                            <p> Sed sed rutrum purus. Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Pellentesque risus lacus, iaculis in ante vitae, viverra hendrerit
                                                ante. Aliquam vel fermentum elit. Morbi rhoncus, neque in vulputate
                                                facilisis, leo tortor sollicitudin odio, quis pellentesque lorem nisi
                                                quis enim. In dolor mi, hendrerit at blandit vulputate, congue a purus.
                                                Sed eget turpis sit amet orci euismod accumsan. Praesent sit amet
                                                placerat elit. </p>
                                        </div>
                                        <span class="size">XL / XXL / S </span></div>
                                    <div class="price"><span>$25</span></div>
                                    <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                                            class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a>
                                    </div>
                                </div>
                            </div>
                            <!--/.item-->
                            <div class="item col-sm-4 col-lg-4 col-md-4 col-xs-6">
                                <div class="product">
                                    <a class="add-fav tooltipHere" data-toggle="tooltip"
                                       data-original-title="Add to Wishlist" data-placement="left">
                                        <i class="glyphicon glyphicon-heart"></i>
                                    </a>

                                    <div class="image">
                                        <div class="quickview">
                                            <a data-toggle="modal" class="btn btn-xs btn-quickview"
                                               href="http://localhost/walleee/html/ajax/product" data-target="#productSetailsModalAjax">Quick
                                                View </a>
                                        </div>
                                        <a href="http://localhost/walleee/html/product-details"><img src="http://localhost/images/product/14.jpg" alt="img"
                                                                            class="img-responsive"></a>

                                        <div class="promotion"><span class="discount">15% OFF</span></div>
                                    </div>
                                    <div class="description">
                                        <h4><a href="http://localhost/walleee/html/product-details">ullamcorper suscipit lobortis </a></h4>

                                        <div class="grid-description">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                        </div>
                                        <div class="list-description">
                                            <p> Sed sed rutrum purus. Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Pellentesque risus lacus, iaculis in ante vitae, viverra hendrerit
                                                ante. Aliquam vel fermentum elit. Morbi rhoncus, neque in vulputate
                                                facilisis, leo tortor sollicitudin odio, quis pellentesque lorem nisi
                                                quis enim. In dolor mi, hendrerit at blandit vulputate, congue a purus.
                                                Sed eget turpis sit amet orci euismod accumsan. Praesent sit amet
                                                placerat elit. </p>
                                        </div>
                                        <span class="size">XL / XXL / S </span></div>
                                    <div class="price"><span>$25</span></div>
                                    <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                                            class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a>
                                    </div>
                                </div>
                            </div>
                            <!--/.item-->
                            <div class="item col-sm-4 col-lg-4 col-md-4 col-xs-6">
                                <div class="product">
                                    <a class="add-fav tooltipHere" data-toggle="tooltip"
                                       data-original-title="Add to Wishlist" data-placement="left">
                                        <i class="glyphicon glyphicon-heart"></i>
                                    </a>

                                    <div class="image">
                                        <div class="quickview">
                                            <a data-toggle="modal" class="btn btn-xs btn-quickview"
                                               href="http://localhost/walleee/html/ajax/product" data-target="#productSetailsModalAjax">Quick
                                                View </a>
                                        </div>
                                        <a href="http://localhost/walleee/html/product-details"><img src="http://localhost/images/product/17.jpg" alt="img"
                                                                            class="img-responsive"></a>

                                        <div class="promotion"><span class="new-product"> NEW</span></div>
                                    </div>
                                    <div class="description">
                                        <h4><a href="http://localhost/walleee/html/product-details">demonstraverunt lectores </a></h4>

                                        <div class="grid-description">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                        </div>
                                        <div class="list-description">
                                            <p> Sed sed rutrum purus. Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Pellentesque risus lacus, iaculis in ante vitae, viverra hendrerit
                                                ante. Aliquam vel fermentum elit. Morbi rhoncus, neque in vulputate
                                                facilisis, leo tortor sollicitudin odio, quis pellentesque lorem nisi
                                                quis enim. In dolor mi, hendrerit at blandit vulputate, congue a purus.
                                                Sed eget turpis sit amet orci euismod accumsan. Praesent sit amet
                                                placerat elit. </p>
                                        </div>
                                        <span class="size">XL / XXL / S </span></div>
                                    <div class="price"><span>$25</span></div>
                                    <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                                            class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a>
                                    </div>
                                </div>
                            </div>
                            <!--/.item-->
                        </div>
                        <!--/.categoryProduct || product content end-->

                        <div class="w100 categoryFooter">
                            <div class="pagination pull-left no-margin-top">
                                <ul class="pagination no-margin-top">
                                    <li><a href="http://localhost/walleee/html/#">«</a></li>
                                    <li class="active"><a href="http://localhost/walleee/html/#">1</a></li>
                                    <li><a href="http://localhost/walleee/html/#">2</a></li>
                                    <li><a href="http://localhost/walleee/html/#">3</a></li>
                                    <li><a href="http://localhost/walleee/html/#">4</a></li>
                                    <li><a href="http://localhost/walleee/html/#">5</a></li>
                                    <li><a href="http://localhost/walleee/html/#">»</a></li>
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
                <!--/.catColumnWrapper-->


            </div>
            <!-- /.row  -->
        </div>
        <!-- /main container -->
    </section>

</section>
<!-- /category-wrapper -->


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
        </div>
    </div>
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

<script src="http://localhost/assets/js/hideMaxListItem-min.js"></script>
<script>
    $(document).ready(function () {
        $('ul.long-list').hideMaxListItems({
            'max': 6,
            'speed': 500,
            'moreText': 'VIEW MORE ([COUNT])',
            'lessText': 'VIEW LESS',
            'morehtml': '<p class="maxlist-more"><a href="http://localhost/walleee/HTML/#">MORE OF THEM</a></p>'
        });
    });


</script>


<!-- scrollme || onscroll parallax effect for category page  -->
<script src="http://localhost/assets/js/jquery.scrollme.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        var isMobile = function () {
            //console.log("Navigator: " + navigator.userAgent);
            return /(iphone|ipod|ipad|android|blackberry|windows ce|palm|symbian)/i.test(navigator.userAgent);
        };

        if (isMobile()) {
            // For  mobile , ipad, tab
            $('.animateme').removeClass('animateme');
            $('.category-wrapper').addClass('ismobile');
            $('.main-container-wrapper').addClass('ismobile');
            $('#category-intro').addClass('ismobile');

        } else {
        }
        $('.shrtByP a').click(function () {
            $('.shrtByP a').removeClass('active');
            $(this).addClass('active');
        });


        $('.filterToggle').click(function () {
            $(this).toggleClass('filter-is-off');
            $('.filterToggle span').toggleClass('is-off');
            $('.catColumnWrapper').toggleClass('filter-is-off');
            $('.catColumnWrapper .col-sm-4').toggleClass('col-sm-3 col-lg-3 col-md-3');

            // equal height reload function

            var $elements = $('.categoryProduct > .item');
            var columns = $elements.detectGridColumns();
            $elements.equalHeightGrid(columns);


            setTimeout(function () {
                        //  reload function after 0.5 second
                        $('.categoryProduct > .item').responsiveEqualHeightGrid();
                    }
                    , 500);


        });


        $('[data-toggle="collapse"]').click(function (e) {

            $('#accordion').on('show.bs.collapse', function (e) {
                $(e.target).prev().addClass('active').find('span').removeClass('hasPlus').addClass('hasMinus');
            })

            $('#accordion').on('hide.bs.collapse', function (e) {
                $(e.target).prev().addClass('active').find('span').addClass('hasPlus').removeClass('hasMinus');

            })
        });

    }); // end


    $(window).bind('resize load', function () {
        if ($(this).width() < 767) {
            $('#accordion .panel-collapse').collapse('hide');

            $('#accordion .panel-heading ').find('span').removeClass('hasMinus').addClass('hasPlus');

        } else {
            $('#accordion .panel-collapse').removeClass('out').addClass('in').css('height', 'auto');
            $('#accordion .panel-heading ').find('span').removeClass('hasPlus').addClass('hasMinus');


        }
    });

</script>


</body>
<>
