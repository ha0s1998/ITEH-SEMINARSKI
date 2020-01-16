<?php
	include("konekcija.php");

 ?>

<!DOCTYPE html>
<html lang="en">

 
<?php include("header.php"); ?>

<body id="page-top" class="index">

    <?php include("menu.php"); ?>

    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in"> Dobrodošli! </div>
                <div class="intro-heading">Drago nam je što ste ovde...</div>
                <a href="index.php#blogovi" class="page-scroll btn btn-xl"> Pogledajte neke od blogova</a>
            </div>
        </div>
    </header>

    <section id="blogovi">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Online psiholog</h2>
                    <h3 class="section-subheading text-muted">Ovde možete pronaći naše blogove</h3>
					
				</div>
            </div>

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
                        <p><b>Da li je strah uvod u šizofreniju?</b> Da bi razumeli problematiku ludila i da li se može poludeti od straha ili bilo čega drugog, treba da se usaglasimo oko definicije ludila. <a href="blog.php">Pogledaj dalje</a></p>
                    </div>
                    <div class="col-md-4">
                        <img src="img/slika7.jpg" class="demo">
                        <h2>Kako lečiti opsesivno kompulzivni poremećaj – kontrola kompulzija</h2>
                        <p>Zbog čega se ovo dešava i kako uspostaviti osnovnu i početnu kontrolu nad opsesivnim mislima, pogledajte u video snimku koji smo pripremili za Vas. <a href="blog.php">Pogledaj dalje</a></p>

                    </div>
                </div>
            </div>


            
        </div>
    </section>

    <?php include("footer.php"); ?>

    <script src="vendor/jquery/jquery.min.js"></script>

    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <script src="js/psiholog.js"></script>


</body>

</html>
