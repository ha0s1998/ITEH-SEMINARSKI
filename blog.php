<?php
include ('logovanje.php');

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="img/iconfinder_ic_directions_car_48px_352315.png"/>
        <title>Rent a car MISKO</title>
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <!--<link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">-->
        <!-- Custom styles for this template -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <nav class="navbar navbar-default navbar-fixed-top">

            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand em-text" href="index.php">RentACar Misko</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="cenovnik.php">&nbsp;&nbsp;&nbsp;&nbsp;Cenovnik</a></li>
                        <li><a href="galerija.php">Galerija</a></li>
                    </ul>

                    <div id="login">
                        <ul id="loginlista" class="nav navbar-nav">

<?php

if (isset($_SESSION['username'])) {
	echo '<li><a href="">Dobrodosao ' . ucfirst("{$_SESSION['username']}") . '!</a></li>';
	echo '<li><a href="adminsec.php">Admin sekcija</a></li>';
	echo '<li><a href="logout.php">Logout</a></li>';
}
else {
	echo '<li> <a href="login.php">Admin login</a></li>';
}

?>

                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <div id="jumbojet" class="jumbotron">
            <div class="container">
                <div class="row">
                    <div>

                        <section id="middle">
                            <div class="container" id="cenovnik">

<?php
include "konekcija.php";
$sql = "SELECT nazivklase FROM cenovnik where kategorija='trecaKlasa'";
$rezultat = $mysqli->query($sql);
?>

                                    <div id="pricing-table">
                                        <div class="plan" id="prvi">
                                            <h3>Treca klasa<span>€30</span></h3>
<?php
while ($red = $rezultat->fetch_array()) {
?>
                                                <ul>
                                                    <li><b><?php echo $red["nazivklase"] ?></b></li>
                                                </ul>
<?php
}
?>
                                        </div>
                                        <div class="plan" id="most-popular">

<?php
$sql = "SELECT nazivklase FROM cenovnik where kategorija='drugaKlasa'";
$rezultat = $mysqli->query($sql);
?>

                                                <h3>Druga klasa<span>€80</span></h3>

<?php

while ($red = $rezultat->fetch_array()) {
?>
                                                    <ul>
                                                        <li><b><?php echo $red["nazivklase"] ?></b></li>
                                                    </ul>
<?php
}
?>
                                        </div>
                                        <div class="plan">

<?php
$sql = "SELECT nazivklase FROM cenovnik where kategorija='prvaKlasa'";
$rezultat = $mysqli->query($sql);
?>

                                                <h3>Prva klasa<span>€150</span></h3>
<?php
while ($red = $rezultat->fetch_array()) {
?>
                                                    <ul>
                                                        <li><b><?php echo $red["nazivklase"] ?></b></li>
                                                    </ul>
<?php
}
?>
                                        </div>

                                        
                                    </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul>
                            <li><a href="index.php">Početna</a></li>
                            <li><a href="cenovnik.php">Cenovnik</a></li>
                            <li><a href="galerija.php">Galerija</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                    </div>
                </div>
            </div>
        </footer>

        <!-- Bootstrap core JavaScript
 ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>

    </body>

    </html>