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
                <div class="intro-lead-in">Dobrodošli!</div>
                <div class="intro-heading">Drago nam je što ste ovde...</div>
                <a href="onama.php#psihologDanas" class="page-scroll btn btn-xl">Pogledajte više</a>
            </div>
        </div>
    </header>
    <section id="psihologDanas">
        <div class="container">
            <h1> Šta mi radimo? </h1><br>
			<p>Polje lečenja kojima se bavim u psihoterapiji su svi neurotski poremećaji (panika, anksioznost, derealizacija i depersonalizacija, depresija, socijalna fobija, zavisnost od interneta, seksulana disfukcija, itd. ) 
      i životni problemi ili velike životne krize (poput traumatskih događaja, gubitak voljenih osoba, krize prelaznih perioda, Itd.). <br> Imamo izdvojena najčešća postavljana pitanja na koja su naši psiholozi dali odgovor.
      Takođe imamo stručan tim koji vam je uvek na raspolaganju!</p><br>
			<img src="img/slika4.jpg" class="demo">
    </section>
	
    <?php include("footer.php"); ?>
	
    <script src="vendor/jquery/jquery.min.js"></script>

    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <script src="js/psiholog.js"></script>

</body>

</html>
