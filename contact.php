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
    <script>
        function isNumberKey(evt){
            var charCode = (evt.which) ? evt.which : event.ketCode
            if (charCode > 31 && (charCode < 45 || charCode > 57))
                return false;
            return true;
        }
    </script>

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

<div class="content container ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7">
                <form method="post" action="<?php echo htmlspecialchars($_server["PHP_SELF"]);?>" role="form">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                            <label for="naam">Uw voornaam: *</label>
                            <input type="text" class="form-control" id="naam" oninvalid="setCustomValidity('Vul uw naam in')" required>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                            <label for="naam">Uw achternaam: *</label>
                            <input type="text" class="form-control" id="naam" required>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-12 col-md-12">
                        <div class="form-group">
                            <label for="email">Uw E-Mail: *</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-12 col-md-12">
                        <div class="form-group">
                            <label for="tel">Uw telefoonnummer: *</label>
                            <input type="tel" onkeypress="return isNumberKey(event)" class="form-control" id="tel" required>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-12 col-md-12">
                        <div class="form-group">
                            <label for="comment">klachten</label>
                            <textarea class="form-control" rows="5" id="comment"></textarea>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-12 col-md-12">
                        <p>Vergeet niet de verplichte velden met een (*) in te vullen</p>
                    </div>

                    <div class="col-md-12">
                        <button type="submit" class="btn btn-default">Verstuur</button><br><br>
                    </div>

                </form>
            </div>
            <div class="col-md-5" id="informatie">
                <div class="col-xs-12 col-sm-6 col-md-12">
                    <h1>Adress gegevens</h1>
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        Boumaboulevard 573<br>
                        9723 ZS Groningen<br>
                        T: 06-6969696969<br>
                        M: <a href="core-dump@gmail.com">core-dump@gmail.com</a><br><br>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-12">
                    <h1>Openingstijden</h1>

                    <div class="col-xs-12 col-sm-12 col-md-6">
                        Maandag: 8:00 uur tot 18:00 uur  <br>
                        Dinsdag: 8:00 uur tot 18:00 uur  <br>
                        Woensdag: 8:00 uur tot 18:00 uur <br>
                        Donderdag: 8:00 uur tot 18:00 uur<br>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        Vrijdag: 0:00 tot 0:00 uur<br>
                        Zaterdag: 8:00 tot 16:00<br>
                        Zondag: fuck zondag<br>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="container">



    <?php
    include 'footer.php';
    ?>

</div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>