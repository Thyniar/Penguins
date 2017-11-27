<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Your Penguin</title>
        <link href="CSS/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="CSS/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="CSS/Contact.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        <!-- Header -->
        <header id="header">
            <h1><a href="index.php"><img class="img-responsive" src="Images/logoMenu2.png" alt=""/></a></h1>

            <nav id="navbis">
                <ul>
                    <li><a href="#"><i class="fa fa-snowflake-o"></i> Penguins</a></li>
                    <li><a href="#"><i class="fa fa-linux"></i> Cuddly Toys</a></li>
                </ul>   
            </nav>

            <nav>
                <ul>
                    <li><a href="Log.php"><i class="fa fa-user"></i> Sign Up </a></li>
                    <li><a href="Log.php"><i class="fa fa-sign-in"></i> Sign In </a></li>
                    <li><a href="Contact.php"><i class="fa fa-address-book"></i> Contact</a>
                    <li><a href="#"><i class="fa fa-shopping-cart" id="caddie"></i></a></li>
                </ul>
            </nav>

        </header>

        <div class="container col-lg-12" id="contact">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-1">
                    <h1>Contact us :</h1>
                    <form>
                        <div class="input-group margin-bottom-sm">
                            <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                            <input class="form-control" type="text" placeholder="Name">
                        </div>
                        <br>
                        <div class="input-group margin-bottom-sm">
                            <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                            <input class="form-control" type="text" placeholder="Surname">
                        </div>
                        <br>
                        <div class="input-group margin-bottom-sm">
                            <span class="input-group-addon"><i class="fa fa-info fa-fw"></i></span>
                            <input class="form-control" type="text" placeholder="Subject">
                        </div>
                        <br>
                        <div class="input-group margin-bottom-sm">
                            <span class="input-group-addon"><i class="fa fa-envelope fa-fw"></i></span>
                            <input class="form-control" type="email" placeholder="Email address">
                        </div>
                        <br><br>
                        <div class="input-group margin-bottom-sm">
                            <span class="input-group-addon"><i class="fa fa-comment fa-fw"></i></span>
                            <textarea class="form-control" rows="5" id="description"></textarea>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-default pull-right">Submit</button>
                        <br>
                    </form>
                </div>
            </div>
        </div>
        <br><br>
                   
        <footer>
            <div class="container col-lg-12">
                <div class="row">                   
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        <li><a href="#"><i class="fa fa-instagram"></i></a>
                    </ul>
                    <p><i class="fa fa-copyright"></i> copyright. All rights reserved.</p>
                    <p><i class="fa fa-camera"></i> Unsplash</p>
                </div>
            </div>
        </footer>
    </body>
</html>
