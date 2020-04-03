
<?php
//Doctype HTML
    include("template/doctype.php");   
?>

<?php
//Haut de page/Header
    include("template/header.php");
    get_header('accueil');
?>

<main>
        <div class="btnRemote" id="return_top">
            <i class="fas fa-angle-double-up fa-2x "></i>
        </div>

    <section>
        <div class="img1">
            <div class="text-center cardLogo col-8 col-sm-8 col-md-6 col-lg-5 col-xl-5"> 
                <img class=" animated fadeIn img-fluid"src="img/logoWpetit.png"  alt="Logo Dj Addict black" >              
            </div> 
        </div> 
    </section>
    
    <section>
        <div class="img2">
        <h1 class="box mb-5 text-white policeIndex"><!-- WHO AM I ? -->QUI SUIS-JE ?</h1>
            <div class="box box2">
                <div>
                <a  href="biographie"><button class="button">Bio & Press kit</button></a> 
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="img3">
        <h1 class="box mb-5 text-white policeIndex"><!-- MUSIC -->MUSIQUE</h1>
            <div class="box box3">
                <div>
                    <a href="musique"><button class="button">Mix & Podcast</button></a>
                </div>  
            </div>
        </div>
    </section>

    <section>
        <div class="img4">
        <h1 class="box mb-5 text-white policeIndex">GALERIE</h1>
            <div class="box box4">                      
                <a href="photos"><button class="button">Photos</button></a>
            </div>
        </div>
    </section>

    <section>
        <div class="img5">
        <h1 class="box mb-5 text-white policeIndex">MES SERVICES</h1>
            <div class="box box5">         
                <div>
                    <a href="prestations"><button class="button">Prestations</button></a>
                </div>
            </div>
        </div>
    </section>  
</main>




<?php
//Bas de page/Footer
include("template/footer.php");
?>


