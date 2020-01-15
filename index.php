<?php
include ('logovanje.php');
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="img/Ikona.png"/>
        <title>Online Psiholog</title>
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
                    <a class="navbar-brand em-text" href="">Online Psiholog</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="blog.php">&nbsp;&nbsp;&nbsp;&nbsp;Blog</a></li>
                        <li><a href="biografija.php">Biografija</a></li>
                        <li><a href="chat.php">Live chat</a></li>
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
	echo '<li> <a href="login.php">Login/Register</a></li>';
}

?>

                        </ul>
                    </div>
                </div>
            </div>
        </nav>


        <div class="slideshow-container" style="text-align:center">

                <br><br>

                <div class="mySlides fade">
                    <img src="img/slika2.jpg" style="width:80%">
                    <div class="text" style="bottom: 100px; color:white"><b>Želite da vidite odgovore na najčešća pitanja?</b>
                        <br>
                        Otvorili smo novi blog sa najčešćim pitanjima za Vas!
                        <br>
                        <a href="blog.php" class="btn btn-primary">Uđi na blog</a>
                    </div> 
                </div>

                <div class="mySlides fade">
                    <img src="img/slika3.jpg" style="width:80%">
                    <div class="text" style="bottom: 100px; color:black" ><b>Još uvek nemate nalog?</b>
                        <br>
                        Ulogujte se i pristupite našem online chat-u!
                        <br>
                        <a href="#" class="btn btn-primary">Napravi nalog</a>
                    </div>
                </div>

                <div class="mySlides fade">
                    <img src="img/slika4.jpg" style="width:80%">
                    <div class="text" style="bottom: 100px; color:black" ><b>Naš psiholog, Mihailo Igić</b>
                        <br>
                        Vidite životno iskustvo ovog mladog psihologa,zaintrigiraće vas.
                        <br>
                        <a href="biografija.php" class="btn btn-primary">Vidi biografiju</a>
                    </div>                   
                </div>

                
                <br><br>
                <div style="text-align:center" id='tacke'>
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                </div>
            </div>


        <section id="middle">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <img src="img/slika5.jpg" class="demo">
                        <h2>10 aktivnosti za koje nauka tvrdi da će vas učiniti srećnijim</h2>
                        <p>Poruka u kojoj se zahvaljujete, trošenje na druge, slušanje muzike, srećno sanjarenje u budnom stanju…Nauka vas može učiniti srećnijim. 
                            Uradite bar neke od ovih aktivnosti danas i osećajte tok pozitivnih vibracija. Nastavite da to radite nedelju dana ili duže i osetite koliko vam se raspoloženje popravlja...
                            <a href="blog.php">Pogledaj dalje</a></p>
                    </div>
                    <div class="col-md-4">
                        <img src="img/slika6.jpg" class="demo">
                        <h2>Kako pobediti strah od ludila?</h2>
                        <p><b>Da li je strah uvod u šizofreniju?</b> Da bi razumeli problematiku ludila i da li se može poludeti od straha ili bilo čega drugog, treba da se usaglasimo oko definicije ludila.<a href="blog.php">Pogledaj dalje</a></p>
                    </div>
                    <div class="col-md-4">
                        <img src="img/slika7.jpg" class="demo">
                        <h2>Kako lečiti opsesivno kompulzivni poremećaj – kontrola kompulzija</h2>
                        <p>Zbog čega se ovo dešava i kako uspostaviti osnovnu i početnu kontrolu nad opsesivnim mislima, pogledajte u video snimku koji smo pripremili za Vas.<a href="blog.php">Pogledaj dalje</a></p>

                    </div>
                </div>
            </div>
        </section>

        <section>

        </section>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul>
                            <li><a href="index.php">Početna</a></li>
                            <li><a href="blog.php">Blog</a></li>
                            <li><a href="chat.php">Live chat</a></li>
                            <li><a href="biografija.php">Biografija</a></li>
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

        <script>
            var slideIndex = 0;
            showSlides();

            function showSlides() {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                slideIndex++;
                if (slideIndex > slides.length) {
                    slideIndex = 1
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
                setTimeout(showSlides, 5000); // Change image every 5 seconds
            }
        </script>

    </body>

    </html>