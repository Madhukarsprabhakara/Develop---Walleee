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

<div class="container text-center"><a style="margin-top:100px" title="modal demo" class="btn btn-stroke-dark"
                                      data-target="#modalAds" data-toggle="modal"> Open Subscribe Modal </a></div>


<div class="modal fade hide" id="modalAds" role="dialog">
    <div class="modal-dialog  modal-bg-1">
        <div class="modal-body-content"><a class="close" data-dismiss="modal">×</a>

            <div class="modal-body">
                <div class="col-lg-6 col-sm-8 col-xs-8">
                    <h3>enter your <br>
                        email to receive</h3>

                    <p class="discountLg">10% OFF </p>

                    <p>We invite you to subscribe to our newsletter and receive 10% discount. </p>

                    <div class="clearfx">
                        <form id="newsletter" class="newsletter">
                            <input type="text" id="subscribe" name="s" placeholder="Enter email">
                            <button class="subscribe-btn">Subscribe</button>
                        </form>
                    </div>
                    <p><a href="http://localhost/walleee/html/category" class="link shoplink"> SHOP NOW <i class="fa fa-caret-right"> </i> </a>
                    </p>
                </div>
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
<script>
    // this script required for subscribe modal
    $(window).load(function () {
        // full load
        $('#modalAds').modal('show');
        $('#modalAds').removeClass('hide');
    });

</script>

</body>
<>
