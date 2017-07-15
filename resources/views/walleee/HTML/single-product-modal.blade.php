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
    <title>TSHOP - Bootstrap E-Commerce Parallax Theme</title>
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
<div class="container text-center">

    <a style="margin-top:100px" title="modal demo" class="btn btn-stroke-dark"
       data-toggle="modal" href="http://localhost/walleee/html/ajax/product" data-target="#productSetailsModalAjax"> Product Modal With Ajax </a>


    <a style="margin-top:100px" title="modal demo" class="btn btn-stroke-dark"
       data-target="#product-details-modal" data-toggle="modal"> Product Modal Without Ajax </a>


</div>

<!-- Modal without ajax -->
<div class="modal fade" id="product-details-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <button aria-hidden="true" data-dismiss="modal" class="close" type="button"> ×</button>
            <div class="col-lg-5 col-md-5 col-sm-5  col-xs-12">

                <!-- product Image -->

                <div class="main-image  col-lg-12 no-padding style3">
                    <a class="product-largeimg-link" href="http://localhost/walleee/html/product-details"><img
                            src="images/product_details/low-res-white/1.jpg"
                            class="img-responsive product-largeimg"
                            alt="img">
                    </a>
                </div>
                <!--/.main-image-->

                <div class="modal-product-thumb">
                    <a class="thumbLink selected"><img data-large="images/product_details/low-res-white/1.jpg" alt="img"
                                                       class="img-responsive"
                                                       src="images/product_details/low-res-white/1.jpg">
                    </a>
                    <a class="thumbLink"><img data-large="images/product_details/low-res-white/2.jpg" alt="img"
                                              class="img-responsive"
                                              src="images/product_details/low-res-white/2.jpg">
                    </a>
                    <a class="thumbLink"><img data-large="images/product_details/low-res-white/3.jpg" alt="img"
                                              class="img-responsive"
                                              src="images/product_details/low-res-white/3.jpg">
                    </a>
                </div>
                <!--/.modal-product-thumb-->
            </div>
            <!--/ product Image-->


            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 modal-details no-padding">
                <div class="modal-details-inner">
                    <h1 class="product-title"> Lorem ipsum dolor sit amet</h2>

                        <h3 class="product-code">Product Code : DEN1098</h3>

                        <div class="product-price"><span class="price-sales"> $70</span> <span
                                class="price-standard">$95</span></div>
                        <div class="details-description">
                            <p>In scelerisque libero ut elit porttitor commodo Suspendisse laoreet magna. </p>
                        </div>
                        <div class="color-details"><span class="selected-color"><strong>COLOR</strong></span>
                            <ul class="swatches Color">
                                <li class="selected">
                                    <a style="background-color:#f1f40e"> </a>
                                </li>
                                <li>
                                    <a style="background-color:#adadad"> </a>
                                </li>
                                <li>
                                    <a style="background-color:#4EC67F"> </a>
                                </li>
                            </ul>
                        </div>
                        <!--/.color-details-->

                        <div class="productFilter productFilterLook2">
                            <div class="row">
                                <div class="col-lg-6 col-sm-6 col-xs-6">
                                    <div class="filterBox">
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
                                </div>
                                <div class="col-lg-6 col-sm-6 col-xs-6">
                                    <div class="filterBox">
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
                            </div>
                        </div>
                        <!-- productFilter -->

                        <div class="cart-actions">
                            <div class="addto row">
                                <div class="col-lg-6">
                                    <button onclick="productAddToCartForm.submit(this);"
                                            class="button btn-block btn-cart cart first" title="Add to Cart"
                                            type="button">
                                        Add to Cart
                                    </button>
                                </div>
                                <div class="col-lg-6"><a class="link-wishlist wishlist btn-block ">Add to Wishlist</a>
                                </div>
                            </div>
                        </div>
                        <!--/.cart-actions-->

                        <div class="product-share clearfix">
                            <p> SHARE </p>

                            <div class="socialIcon">
                                <a href="http://localhost/walleee/html/#"> <i class="fa fa-facebook"></i>
                                </a>
                                <a href="http://localhost/walleee/html/#"> <i class="fa fa-twitter"></i>
                                </a>
                                <a href="http://localhost/walleee/html/#"> <i class="fa fa-google-plus"></i>
                                </a>
                                <a href="http://localhost/walleee/html/#"> <i class="fa fa-pinterest"></i>
                                </a>
                            </div>
                        </div>
                        <!--/.product-share-->
                </div>
                <!--/.modal-details-inner-->
            </div>
            <!--/.modal-details-->
            <div class="clear"></div>
        </div>
        <!--/.modal-content-->
    </div>
    <!--/.modal-content-->
</div>
<!-- End Modal -->


<!--With Ajax-->

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


<!-- Le javascript
================================================== -->

<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="assets/js/jquery/jquery-1.10.1.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>

<!-- include easing plugin -->
<script src="assets/js/jquery.easing.1.3.js"></script>

<!-- include  parallax plugin -->
<script type="text/javascript" src="assets/js/jquery.parallax-1.1.js"></script>

<!-- include mCustomScrollbar plugin //Custom Scrollbar  -->

<script type="text/javascript" src="assets/js/jquery.mCustomScrollbar.js"></script>

<!-- include icheck plugin // customized checkboxes and radio buttons   -->
<script type="text/javascript" src="assets/plugins/icheck-1.x/icheck.min.js"></script>

<!-- include grid.js // for equal Div height  -->
<script src="assets/js/grids.js"></script>

<!-- include carousel slider plugin  -->
<script src="assets/js/owl.carousel.min.js"></script>

<!-- include product-details thumb  -->
<script type="text/javascript" src="assets/js/product-details.js"></script>

<!-- jQuery select2 // custom select   -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>

<!-- include touchspin.js // touch friendly input spinner component   -->
<script src="assets/js/bootstrap.touchspin.js"></script>

<!-- include custom script for site  -->
<script src="assets/js/script.js"></script>
</body>

<>
