<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Core-Dump</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Home</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="contact.php">Contact</a>
                </li>
                <li>
                    <a href="klantenpaneel.php">Klantenpaneel</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <span class="glyphicon glyphicon-shopping-cart"></span> 1 - Item<span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown-cart" role="menu">
                        <li>
                  <span class="item">
                    <span class="item-left">
                        <img src="http://lorempixel.com/50/50/" alt="" />
                        <span class="item-info">
                            <span>Item name</span>
                            <span>23$</span>
                        </span>
                    </span>
                    <span class="item-right">
                        <button class="btn btn-xs btn-danger pull-right">x</button>
                    </span>
                </span>
                        </li>
                        </span>
                </li>
                <li class="divider"></li>
                <li><a class="text-center" href="">View Cart</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">

    <div class="row">

        <div class="col-md-3">
            <p class="lead">Mobiele Telefoons & Tablets</p>
            <div class="list-group">
                <a href="telefoons&tablets.php" class="list-group-item">Mobiele Telefoons & Tablets</a>
                <a href="computers&componenten.php" class="list-group-item">Computers & Componenten</a>
                <a href="consoles&controlers.php" class="list-group-item">Consoles & Controllers</a>
            </div>
        </div>

        <div class="col-md-9">

            <div class="row carousel-holder">

                <div class="col-md-12">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="slide-image" src="img/plaatje1.PNG" alt="">
                            </div>
                            <div class="item">
                                <img class="slide-image" src="img/plaatje2.PNG" alt="">
                            </div>
                            <div class="item">
                                <img class="slide-image" src="img/plaatje3.PNG" alt="">
                            </div>
                        </div>
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <img src="img/htc-desire-500.jpg" alt="">
                        <div class="caption">
                            <h4 class="pull-right">$299.99</h4>
                            <h4><a href="#">HTC Desire 500</a>
                            </h4>
                            <p>HTC Desire 500.</p>
                                <span class="item-right"><br>
                                    <button class="btn btn-sm btn-info pull-right">Voeg toe aan winkelmandje</button>
                                </span>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <img src="img/moterola.jpg" alt="">
                        <div class="caption">
                            <h4 class="pull-right">$64.99</h4>
                            <h4><a href="#">Moterola</a>
                            </h4>
                            <p>Product nummer 1</p>
                                <span class="item-right"><br>
                                    <button class="btn btn-sm btn-info pull-right">Voeg toe aan winkelmandje</button>
                                </span>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <img src="img/samsung.jpg" alt="">
                        <div class="caption">
                            <h4 class="pull-right">$74.99</h4>
                            <h4><a href="#">Samsung</a>
                            </h4>
                            <p>Product nummer 2</p>
                                <span class="item-right"><br>
                                    <button class="btn btn-sm btn-info pull-right">Voeg toe aan winkelmandje</button>
                                </span>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <img src="img/lg.jpg" alt="">
                        <div class="caption">
                            <h4 class="pull-right">$84.99</h4>
                            <h4><a href="#">LG</a>
                            </h4>
                            <p>Product nummer 3</p>
                                <span class="item-right"><br>
                                    <button class="btn btn-sm btn-info pull-right">Voeg toe aan winkelmandje</button>
                                </span>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <img src="img/apple-iphone-5-320x150.jpg" alt="">
                        <div class="caption">
                            <h4 class="pull-right">$94.99</h4>
                            <h4><a href="#">Iphone 5</a>
                            </h4>
                            <p>Product nummer 4</p>
                                <span class="item-right"><br>
                                    <button class="btn btn-sm btn-info pull-right">Voeg toe aan winkelmandje</button>
                                </span>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <img src="img/ipad.jpg" alt="">
                        <div class="caption">
                            <h4 class="pull-right">$94.99</h4>
                            <h4><a href="#">Ipad</a>
                            </h4>
                            <p>Product nummer 5</p>
                                <span class="item-right"><br>
                                    <button class="btn btn-sm btn-info pull-right">Voeg toe aan winkelmandje</button>
                                </span>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

</div>
<!-- /.container -->

<div class="container">

    <hr>

    <?php
    include 'footer.php';
    ?>

</div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>

<!--
<ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Products</a></li>
                <li class="active">Accessories</li>
                </ul>

                --!>
