@include('walleee.HTML.walleee-header')

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
            <form method="post" id="loginsubmit">
                <div class="form-group login-username">
                    <div>
                    	<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                        <input name="email" id="login-user" class="form-control input" size="20"
                               placeholder="Enter Username" type="email" required>
                    </div>
                </div>
                <div class="form-group login-password">
                    <div>
                        <input name="password" id="login-password" class="form-control input" size="20"
                               placeholder="Password" type="password" required>
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
                        <input name="submit" id = "loginsubmitbut" class="btn  btn-block btn-lg btn-primary" value="LOGIN" type="submit">
                    </div>
                </div>
                </form>
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
	<form method="post" id="sign-up">
                <div class="form-group reg-username">
                    <div>
                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                        <input id="loginname" name="name" class="form-control input" size="80" placeholder="Enter Username"
                               type="text" required>
                    </div>
                </div>
                <div class="form-group reg-email">
                    <div>
                        <input id="loginemail" name="email" class="form-control input" size="80" placeholder="Enter Email" type="email" required>
                    </div>
                </div>
                <div class="form-group reg-password">
                    <div>
                        <input id="loginpassword" name="password" class="form-control input" size="20" placeholder="Password"
                               type="password" required>
                    </div>
                </div>
                <div class="form-group">
                    <div>
                        <div class="checkbox login-remember">
                            <label>
                                <input name="rememberme" id="rememberme" value="0" checked="checked"
                                       type="checkbox">
                                Remember Me </label> 
                                
                                <label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                                <input name="mtype_id" id="mtype_id" value="0" checked="checked"
                                       type="checkbox">
                                Check if seller </label> 
                               
                        </div>
                        <div class="error">
                        <label id="errormsg">
                                <!--<input name="mtype_id" id="sellercheck" value="0" checked="checked"
                                       type="checkbox">-->
                                 </label> 
                          </div>      
                    </div>
                </div>
                <div>
                    <div>
                        <input id="registeruser"  name="submit" class="btn  btn-block btn-lg btn-primary" value="Submit" type="submit">
                    </div>
                </div>
                </form>
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
                            </a></li>
 -->
                        </ul>
                    </div>
                </div>
               <div class="col-lg-6 col-sm-6 col-xs-6 col-md-6 no-margin no-padding">
                    <div class="pull-right">
                        <ul class="userMenu">
                            <li><a href="http://localhost/walleee/html/create-account"><span class="hidden-xs"> My Account</span> <i
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
                    class="cartRespons colorWhite"> Cart ({{$total}}) </span></button>
            <a class="navbar-brand " href="http://localhost"> <img src="http://localhost/images/logo.png" alt="WALLEEE"> </a>

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
                    <a class="btn btn-sm btn-danger" href="http://localhost/cart"> <i class="fa fa-shopping-cart"> </i> VIEW CART
                    </a> <a href="http://localhost/checkout-0"
                            class="btn btn-sm btn-primary"> CHECKOUT </a></div>
                <!--/.miniCartFooter-->

            </div>
            <!--/.cartMenu-->
        </div>
        <!--/.navbar-cart-->

        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="http://localhost"> Home </a></li>
               <!-- 
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

                <!~~ change width of megamenu = use class > megamenu-fullwidth, megamenu-60width, megamenu-40width ~~>
                <li class="dropdown active megamenu-80width "><a data-toggle="dropdown" class="dropdown-toggle"
                                                                 href="http://localhost/walleee/html/#"> SHOP <b class="caret"> </b> </a>
                    <ul class="dropdown-menu">
                        <li class="megamenu-content">

                            <!~~ megamenu-content ~~>

                            <ul class="col-lg-2  col-sm-2 col-md-2  unstyled noMarginLeft">
                                <li>
                                    <p><strong> Holiday & Experiences </strong></p>
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
				<li><a href="http://localhost/walleee/html/all-page-link" target="_blank"> All Page Link </a></li>
 -->
            </ul>
            </ul>

            <!--- this part will be hidden for mobile version -->
            <div class="nav navbar-nav navbar-right hidden-xs">
                <div class="dropdown  cartMenu "><a href="http://localhost/walleee/html/#" class="dropdown-toggle" data-toggle="dropdown"> <i
                        class="fa fa-shopping-cart"> </i> <span class="cartRespons"> Cart (${{$total}}) </span> <b
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
                            <a class="btn btn-sm btn-danger" href="http://localhost/cart"> <i class="fa fa-shopping-cart"> </i> VIEW
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
                <li><a href="http://localhost/walleee/html/category">Home</a></li>
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
                        <h4 class="panel-title"><a data-toggle="collapse" href="http://localhost/walleee/html/#collapseCategory"
                                                   class="collapseWill active ">
                            <span class="pull-left"> <i class="fa fa-caret-right"></i></span> Category </a></h4>
                    </div>
                   
                    <div id="collapseCategory" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <ul class="nav nav-pills nav-stacked tree">
                            @include('walleee.HTML.db_category') 
                              
                            </ul>
                        </div>
                    </div>
                    
                    <!-- ends here-->
                    
                </div>
                <!--/Category menu end-->

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><a class="collapseWill active " data-toggle="collapse"
                                                   href="http://localhost/walleee/html/#collapsePrice">
                            Price <span class="pull-left"> <i class="fa fa-caret-right"></i></span> </a> <span
                                class="pull-right clearFilter  label-danger"> Clear </span></h4>
                    </div>
                    <div id="collapsePrice" class="panel-collapse collapse">
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
                        <h4 class="panel-title"><a data-toggle="collapse" href="http://localhost/walleee/html/#collapseBrand"
                                                   class="collapseWill active ">
                            Brand <span class="pull-left"> <i class="fa fa-caret-right"></i></span> </a></h4>
                    </div>
                    <div id="collapseBrand" class="panel-collapse collapse">
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
                        <h4 class="panel-title"><a data-toggle="collapse" href="http://localhost/walleee/html/#collapseColor"
                                                   class="collapseWill active ">
                            Color <span class="pull-left"> <i class="fa fa-caret-right"></i></span> </a></h4>
                    </div>
                    <div id="collapseColor" class="panel-collapse collapse">
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
                        <h4 class="panel-title"><a data-toggle="collapse" href="http://localhost/walleee/html/#collapseThree"
                                                   class="collapseWill active ">
                            Discount <span class="pull-left"> <i class="fa fa-caret-right"></i></span> </a></h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse ">
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
           <!-- 
 <div class="w100 clearfix category-top">
                <h2> Holidays & Experiences </h2>

                <div class="categoryImage"><img src="http://localhost/images/site/holiday.jpg" class="img-responsive" alt="img"></div>
            </div>
 -->
  @include('walleee.HTML.category_right_column')
            <!--/.category-top-->

            <div class="row subCategoryList clearfix">
                <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4  text-center ">
                    <div class="thumbnail equalheight"><a class="subCategoryThumb" href="http://localhost/walleee/html/sub-category"><img
                            src="http://localhost/images/site/1.jpeg" class="img-rounded " alt="img"> </a> <a class="subCategoryTitle"><span> Adventure </span></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4  text-center">
                    <div class="thumbnail equalheight"><a class="subCategoryThumb" href="http://localhost/walleee/html/sub-category"><img
                            src="http://localhost/images/site/2.jpeg" class="img-rounded " alt="img"> </a> <a
                            class="subCategoryTitle"><span> Beaches </span></a></div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4  text-center">
                    <div class="thumbnail equalheight"><a class="subCategoryThumb" href="http://localhost/walleee/html/sub-category"><img
                            src="http://localhost/images/site/3.jpeg" class="img-rounded " alt="img"> </a> <a class="subCategoryTitle"><span> Wild Life </span></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4  text-center">
                    <div class="thumbnail equalheight"><a class="subCategoryThumb" href="http://localhost/walleee/html/sub-category"><img
                            src="http://localhost/images/site/4.jpeg" class="img-rounded " alt="img"> </a> <a
                            class="subCategoryTitle"><span> Flora </span></a></div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4  text-center">
                    <div class="thumbnail equalheight"><a class="subCategoryThumb" href="http://localhost/walleee/html/sub-category"><img
                            src="http://localhost/images/site/5.jpeg" class="img-rounded  " alt="img"> </a> <a
                            class="subCategoryTitle"><span> Seasons </span></a></div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4  text-center">
                    <div class="thumbnail equalheight"><a class="subCategoryThumb" href="http://localhost/walleee/html/sub-category"><img
                            src="http://localhost/images/site/6.jpeg" class="img-rounded " alt="img"> </a> <a
                            class="subCategoryTitle"><span> Nature </span></a></div>
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
                    <div class="change-view pull-right"><a href="http://localhost/walleee/html/#" title="Grid" class="grid-view"> <i
                            class="fa fa-th-large"></i> </a> <a href="http://localhost/walleee/html/#" title="List" class="list-view "><i
                            class="fa fa-th-list"></i></a></div>
                </div>
            </div>
            <!--/.productFilter-->
            <div class="row  categoryProduct xsResponse clearfix">
                <div class="item col-sm-4 col-lg-4 col-md-4 col-xs-6">
                    <div class="product">
                        <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist"
                           data-placement="left">
                            <i class="glyphicon glyphicon-heart"></i>
                        </a>

                        <div class="image">
                            <div class="quickview">
                                <a data-toggle="modal" class="btn btn-xs btn-quickview" href="http://localhost/walleee/html/ajax/product"
                                   data-target="#productSetailsModalAjax">Quick View </a>

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
                                <p> Sed sed rutrum purus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Pellentesque risus lacus, iaculis in ante vitae, viverra hendrerit ante. Aliquam vel
                                    fermentum elit. Morbi rhoncus, neque in vulputate facilisis, leo tortor sollicitudin
                                    odio, quis pellentesque lorem nisi quis enim. In dolor mi, hendrerit at blandit
                                    vulputate, congue a purus. Sed eget turpis sit amet orci euismod accumsan. Praesent
                                    sit amet placerat elit. </p>
                            </div>
                            <span class="size">XL / XXL / S </span></div>
                        <div class="price"><span>$500</span></div>
                        <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                                class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
                    </div>
                </div>
                <!--/.item-->
                <div class="item col-sm-4 col-lg-4 col-md-4 col-xs-6">
                    <div class="product">
                        <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist"
                           data-placement="left">
                            <i class="glyphicon glyphicon-heart"></i>
                        </a>

                        <div class="image">
                            <div class="quickview">
                                <a data-toggle="modal" class="btn btn-xs btn-quickview" href="http://localhost/walleee/html/ajax/product"
                                   data-target="#productSetailsModalAjax">Quick View </a>
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
                <div class="item col-sm-4 col-lg-4 col-md-4 col-xs-6">
                    <div class="product">
                        <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist"
                           data-placement="left">
                            <i class="glyphicon glyphicon-heart"></i>
                        </a>

                        <div class="image">
                            <div class="quickview">
                                <a data-toggle="modal" class="btn btn-xs btn-quickview" href="http://localhost/walleee/html/ajax/product"
                                   data-target="#productSetailsModalAjax">Quick View </a>
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
                <div class="item col-sm-4 col-lg-4 col-md-4 col-xs-6">
                    <div class="product">
                        <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist"
                           data-placement="left">
                            <i class="glyphicon glyphicon-heart"></i>
                        </a>

                        <div class="image">
                            <div class="quickview">
                                <a data-toggle="modal" class="btn btn-xs btn-quickview" href="http://localhost/walleee/html/ajax/product"
                                   data-target="#productSetailsModalAjax">Quick View </a>
                            </div>
                            <a href="http://localhost/walleee/html/product-details"><img src="http://localhost/images/product/35.jpg" alt="img"
                                                                class="img-responsive"></a></div>
                        <div class="description">
                            <h4><a href="http://localhost/walleee/html/product-details">humanitatis per</a></h4>

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
                <div class="item col-sm-4 col-lg-4 col-md-4 col-xs-6">
                    <div class="product">
                        <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist"
                           data-placement="left">
                            <i class="glyphicon glyphicon-heart"></i>
                        </a>

                        <div class="image">
                            <div class="quickview">
                                <a data-toggle="modal" class="btn btn-xs btn-quickview" href="http://localhost/walleee/html/ajax/product"
                                   data-target="#productSetailsModalAjax">Quick View </a>
                            </div>
                            <a href="http://localhost/walleee/html/product-details"><img src="http://localhost/images/product/33.jpg" alt="img"
                                                                class="img-responsive"></a></div>
                        <div class="description">
                            <h4><a href="http://localhost/walleee/html/product-details">Eodem modo typi</a></h4>

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
                <div class="item col-sm-4 col-lg-4 col-md-4 col-xs-6">
                    <div class="product">
                        <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist"
                           data-placement="left">
                            <i class="glyphicon glyphicon-heart"></i>
                        </a>

                        <div class="image">
                            <div class="quickview">
                                <a data-toggle="modal" class="btn btn-xs btn-quickview" href="http://localhost/walleee/html/ajax/product"
                                   data-target="#productSetailsModalAjax">Quick View </a>
                            </div>
                            <a href="http://localhost/walleee/html/product-details"><img src="http://localhost/images/product/10.jpg" alt="img"
                                                                class="img-responsive"></a></div>
                        <div class="description">
                            <h4><a href="http://localhost/walleee/html/product-details">sequitur mutationem </a></h4>

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
                <div class="item col-sm-4 col-lg-4 col-md-4 col-xs-6">
                    <div class="product">
                        <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist"
                           data-placement="left">
                            <i class="glyphicon glyphicon-heart"></i>
                        </a>

                        <div class="image">
                            <div class="quickview">
                                <a data-toggle="modal" class="btn btn-xs btn-quickview" href="http://localhost/walleee/html/ajax/product"
                                   data-target="#productSetailsModalAjax">Quick View </a>
                            </div>
                            <a href="http://localhost/walleee/html/product-details"><img src="http://localhost/images/product/37.jpg" alt="img"
                                                                class="img-responsive"></a></div>
                        <div class="description">
                            <h4><a href="http://localhost/walleee/html/product-details">consuetudium lectorum.</a></h4>

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
                <div class="item col-sm-4 col-lg-4 col-md-4 col-xs-6">
                    <div class="product">
                        <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist"
                           data-placement="left">
                            <i class="glyphicon glyphicon-heart"></i>
                        </a>

                        <div class="image">
                            <div class="quickview">
                                <a data-toggle="modal" class="btn btn-xs btn-quickview" href="http://localhost/walleee/html/ajax/product"
                                   data-target="#productSetailsModalAjax">Quick View </a>
                            </div>
                            <a href="http://localhost/walleee/html/product-details"><img src="http://localhost/images/product/16.jpg" alt="img"
                                                                class="img-responsive"></a></div>
                        <div class="description">
                            <h4><a href="http://localhost/walleee/html/product-details">parum claram</a></h4>

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
                <div class="item col-sm-4 col-lg-4 col-md-4 col-xs-6">
                    <div class="product">
                        <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist"
                           data-placement="left">
                            <i class="glyphicon glyphicon-heart"></i>
                        </a>

                        <div class="image">
                            <div class="quickview">
                                <a data-toggle="modal" class="btn btn-xs btn-quickview" href="http://localhost/walleee/html/ajax/product"
                                   data-target="#productSetailsModalAjax">Quick View </a>
                            </div>
                            <a href="http://localhost/walleee/html/product-details"><img src="http://localhost/images/product/19.jpg" alt="img"
                                                                class="img-responsive"></a></div>
                        <div class="description">
                            <h4><a href="http://localhost/walleee/html/product-details">duis dolore </a></h4>

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
                <div class="item col-sm-4 col-lg-4 col-md-4 col-xs-6">
                    <div class="product">
                        <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist"
                           data-placement="left">
                            <i class="glyphicon glyphicon-heart"></i>
                        </a>

                        <div class="image">
                            <div class="quickview">
                                <a data-toggle="modal" class="btn btn-xs btn-quickview" href="http://localhost/walleee/html/ajax/product"
                                   data-target="#productSetailsModalAjax">Quick View </a>
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
                <div class="item col-sm-4 col-lg-4 col-md-4 col-xs-6">
                    <div class="product">
                        <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist"
                           data-placement="left">
                            <i class="glyphicon glyphicon-heart"></i>
                        </a>

                        <div class="image">
                            <div class="quickview">
                                <a data-toggle="modal" class="btn btn-xs btn-quickview" href="http://localhost/walleee/html/ajax/product"
                                   data-target="#productSetailsModalAjax">Quick View </a>
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
                <div class="item col-sm-4 col-lg-4 col-md-4 col-xs-6">
                    <div class="product">
                        <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist"
                           data-placement="left">
                            <i class="glyphicon glyphicon-heart"></i>
                        </a>

                        <div class="image">
                            <div class="quickview">
                                <a data-toggle="modal" class="btn btn-xs btn-quickview" href="http://localhost/walleee/html/ajax/product"
                                   data-target="#productSetailsModalAjax">Quick View </a>
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
    <!-- /.row  -->
</div>
<!-- /main container -->

<div class="gap"></div>

<!-- Product Details Modal  -->
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


@include('walleee.HTML.footer_demo')
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

<!-- Added by Mad Script to create users in DB-->

<script type="text/javascript">


$(function(){

$('#sign-up').on('submit',function(e){
    $.ajaxSetup({
        header:$('meta[name="_token"]').attr('content')
    })
    e.preventDefault(e);

        $.ajax({

        type:"POST",
        url:'http://localhost/walleee/register',
        data:$(this).serialize(),
        dataType: 'json',
        success: function(data){
        	//var myObj = $.parseJSON(data);
        	//var status = myObj[0].["status"];
        	//var statusText = myObj[0].["StatusText"];
        	//alert(data);
  			console.log(JSON.stringify(data));
  			$("#errormsg").text("Your profile was created, you will receive an email shortly");
   // $.each(data.responseText, function(idx, topic){
//      $("#nav").html('<a href="' + topic.link_src + '">' + topic.link_text + "</a>");
//    });
        },
        error: function(data){
        	//var status = myObj[0].["status"];
        	//var statusText = myObj[0].["StatusText"];
        	//alert("Couldn't create your profile, " +status+" Error: "+statusText )
			console.log(JSON.stringify(data));
			$("#errormsg").text("Sorry, there was a problem creating your profile");
        }
    })
    });
});



</script>

<script type="text/javascript">
$(function(){

$('#loginsubmit').on('submit',function(e){
    $.ajaxSetup({
        header:$('meta[name="_token"]').attr('content')
    })
    e.preventDefault(e);

        $.ajax({

        type:"POST",
        url:'http://localhost/sessions',
        data:$(this).serialize(),
        dataType: 'json',
        success: function(data){
        
        	window.location = "http://localhost/loggedin";
        	//var myObj = $.parseJSON(data);
        	//var status = myObj[0].["status"];
        	//var statusText = myObj[0].["StatusText"];
        	//alert(data);
  			//console.log(JSON.stringify(data));
  			//console.log("is this true");
  			//$("#errormsg").text("Your profile was created, you will receive an email shortly");
   // $.each(data.responseText, function(idx, topic){
//      $("#nav").html('<a href="' + topic.link_src + '">' + topic.link_text + "</a>");
//    });
        },
        error: function(data){
        	//var status = myObj[0].["status"];
        	//var statusText = myObj[0].["StatusText"];
        	//alert("Couldn't create your profile, " +status+" Error: "+statusText )
			alert("please check your username and/or password");
			console.log(JSON.stringify(data));
			//console.log("is this false");
			//$("#errormsg").text("Sorry, there was a problem creating your profile");
        }
    })
    });
});


</script>

<!--ends here-->
</body>
</html>
