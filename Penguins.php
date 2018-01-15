<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Your Penguin</title>
        <link href="CSS/fontawesome-free-5.0.3/web-fonts-with-css/css/fontawesome-all.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
        <link href="CSS/index.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #3d5474;">
            <a class="navbar-brand" href="index.php">
                <img src="Images/logoMenu2.png" alt=""/>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars fa-2x"></i>
            </button>
            <div class="collapse navbar-collapse navbarNav menu">
                <ul class="navbar-nav">
                    <li><a href="Penguins.php"><i class="far fa-snowflake"></i> Penguins</a></li>
                    <li><a href="#"><i class="fab fa-linux"></i> Cuddly Toys</a></li> 
                </ul>
            </div>
            <div class="collapse navbar-collapse navbarNav justify-content-md-end menu">
                <ul class="navbar-nav">
                    <?php
                    if (isset($_SESSION['login']) && isset($_SESSION['password'])) {
                        echo '<li><a href="membres.php"><i class="fa fa-user" style="font-size:30px;"></i></a></li>';
                        echo '<li><a href="Logout.php"><i class="fa fa-sign-out"></i> Log out </a></li>';
                    } else {
                        echo '<li><a href="Log.php"><i class="fa fa-user-plus"></i> Sign Up </a></li>';
                        echo '<li><a href="Log.php"><i class="fas fa-sign-in-alt"></i> Sign In </a></li>';
                    }
                    ?>
                    <li><a href="Contact.php"><i class="fa fa-address-book"></i> Contact</a>
                    <li><a href="#"><i class="fa fa-shopping-cart" id="caddie"></i></a></li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <h1 class="my-4 text-center text-lg-left">Your penguins !</h1>
            <div class="row text-center text-lg-left">
                <div class="col-lg-3 col-md-4 col-xs-6">
                    <a href="#" class="d-block mb-4 h-100" title="Dismissible popover" data-toggle="popover" data-trigger="focus" data-content="Click anywhere in the document to close this popover">
                        <img class="img-fluid img-thumbnail" src="Images/penguin 2.jpg" alt="">
                    </a> 
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6">
                    <a href="#" class="d-block mb-4 h-100" title="Dismissible popover" data-toggle="popover" data-trigger="focus" data-content="Click anywhere in the document to close this popover">
                        <img class="img-fluid img-thumbnail" src="Images/penguin 10.jpg" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6">
                    <a href="#" class="d-block mb-4 h-100" title="Dismissible popover" data-toggle="popover" data-trigger="focus" data-content="Click anywhere in the document to close this popover">
                        <img class="img-fluid img-thumbnail" src="Images/penguin 4.jpg" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6">
                    <a href="#" class="d-block mb-4 h-100" title="Dismissible popover" data-toggle="popover" data-trigger="focus" data-content="Click anywhere in the document to close this popover">
                        <img class="img-fluid img-thumbnail" src="Images/penguin 5.jpg" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6">
                    <a href="#" class="d-block mb-4 h-100" title="Dismissible popover" data-toggle="popover" data-trigger="focus" data-content="Click anywhere in the document to close this popover">
                        <img class="img-fluid img-thumbnail" src="Images/penguin 6-2.jpg" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6">
                    <a href="#" class="d-block mb-4 h-100" title="Dismissible popover" data-toggle="popover" data-trigger="focus" data-content="Click anywhere in the document to close this popover">
                        <img class="img-fluid img-thumbnail" src="Images/penguin 7.jpg" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6">
                    <a href="#" class="d-block mb-4 h-100" title="Dismissible popover" data-toggle="popover" data-trigger="focus" data-content="Click anywhere in the document to close this popover">
                        <img class="img-fluid img-thumbnail" src="Images/penguin 8-2.jpg" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6">
                    <a href="#" class="d-block mb-4 h-100" title="Dismissible popover" data-toggle="popover" data-trigger="focus" data-content="Click anywhere in the document to close this popover">
                        <img class="img-fluid img-thumbnail" src="Images/penguin 9-2.jpg" alt="">
                    </a>
                </div>
            </div>
            <script>
                $(document).ready(function(){
                $('[data-toggle="popover"]').popover();   
                });
            </script>
        </div>
    </body>
</html>
