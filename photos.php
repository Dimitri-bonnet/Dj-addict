<?php
//Haut de page/Header
    include("template/header.php");
?>


<?php
//Doctype HTML
    include("template/doctype.php");  
    get_header('photo');
?>



<main class="fullScreen fullScreenResponsivePhotos">


    <div class="container">
        <h3 class="mt-3 policeTitre titreBorder">PHOTOS </h3>
    </div>

    <!-- Carousel for responsive 1000px -->
    <div class="container carouselResponsive">
        <div class="row">
            <div class="col-12">
            <div id="responsive" class="carousel slide carousel-fade rounded" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
            <img class="d-block w-100 mt-3 mb-3 rounded" src="img/DJ-Addict-212.jpg"  alt="First slide">
            </div>
            <div class="carousel-item ">
            <img class="d-block w-100 mt-3 mb-3 rounded" src="img/DJ-Addict-160.jpg"  alt="Second slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100 mt-3 mb-3 rounded" src="img/DJ-Addict-156.jpg"  alt="Second slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100 mt-3 mb-3 rounded" src="img/DJ-Addict-179.jpg"  alt="Second slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100 mt-3 mb-3 rounded" src="img/DJ-Addict-189.jpg"  alt="Second slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100 mt-3 mb-3 rounded" src="img/DJ-Addict-188.jpg"  alt="Second slide">
            </div>

        </div>
        <a class="carousel-control-prev" href="#responsive" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#responsive" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
            </div>
        </div>
    </div>

<!-- Losange galrey photo -->
    <div class="container-fluid mb-4 pictureHidden">
        
        <div class="row justify-content-center pt-4">

            <div class="col-10 col-md-7 col-lg-3 zoom marginBottomResponsive">
                <div>
                    <img class="card-img photoPoly" src="img/DJ-Addict-136-redi.jpg" alt="Card image" data-toggle="modal" data-target=".bd-example-modal-lg">
                </div>
            </div>

            <div class="col-10 col-md-7 col-lg-3 zoom marginBottomResponsive">
                <div>
                    <img class="card-img photoPoly" src="img/DJ-Addict-136-redi.jpg" alt="Card image" data-toggle="modal" data-target=".bd-example-modal-lg">
                </div>
            </div>

            <div class="col-10 col-md-7 col-lg-3 zoom marginBottomResponsive">
                <div>
                    <img class="card-img photoPoly" src="img/DJ-Addict-136-redi.jpg" alt="Card image" data-toggle="modal" data-target=".bd-example-modal-lg">
                </div>
            </div>
        </div>
        <div class="row justify-content-center marginNega">

            <div class="col-10 col-md-7 col-lg-3 zoom marginBottomResponsive">
                <div>
                    <img class="card-img photoPoly" src="img/DJ-Addict-136-redi.jpg" alt="Card image" data-toggle="modal" data-target=".bd-example-modal-lg">
                </div>
            </div>

            <div class="col-10 col-md-7 col-lg-3 zoom marginBottomResponsive">
                <div>
                    <img class="card-img photoPoly" src="img/DJ-Addict-136-redi.jpg" alt="Card image" data-toggle="modal" data-target=".bd-example-modal-lg">
                </div>
            </div>

            <div class="col-10 col-md-7 col-lg-3 zoom marginBottomResponsive">
                <div>
                    <img class="card-img photoPoly" src="img/DJ-Addict-136-redi.jpg" alt="Card image" data-toggle="modal" data-target=".bd-example-modal-lg">
                </div>
            </div>

            <div class="col-10 col-md-7 col-lg-3 zoom marginBottomResponsive">
                <div>
                    <img class="card-img photoPoly" src="img/DJ-Addict-136-redi.jpg" alt="Card image" data-toggle="modal" data-target=".bd-example-modal-lg">
                </div>
            </div>
        </div>

        <div class="row justify-content-center marginNega">
            <div class="col-10 col-md-7 col-lg-3  zoom marginBottomResponsive">
                <div>
                    <img class="card-img photoPoly " src="img/DJ-Addict-136-redi.jpg" alt="Card image" data-toggle="modal" data-target=".bd-example-modal-lg">
                </div>            
            </div>
           
            <div class="col-10 col-md-7 col-lg-3 zoom marginBottomResponsive ">
                <div>
                    <img class="card-img photoPoly " src="img/DJ-Addict-136-redi.jpg" alt="Card image" data-toggle="modal" data-target=".bd-example-modal-lg">
                </div>            
            </div>
            
            <div class="col-10 col-md-7 col-lg-3 zoom marginBottomResponsive">
                <div>
                    <img class="card-img photoPoly" src="img/DJ-Addict-136-redi.jpg" alt="Card image" data-toggle="modal" data-target=".bd-example-modal-lg">
                </div>            
            </div>
        </div>
        <!-- <div class="row justify-content-center marginNega">

            <div class="col-10 col-md-7 col-lg-3 zoom marginBottomResponsive">
                <div>
                    <img class="card-img photoPoly" src="img/DJ-Addict-146.jpg" alt="Card image" data-toggle="modal" data-target=".bd-example-modal-lg">
                </div>
            </div>

            <div class="col-10 col-md-7 col-lg-3 zoom marginBottomResponsive">
                <div>
                    <img class="card-img photoPoly" src="img/DJ-Addict-189.jpg" alt="Card image" data-toggle="modal" data-target=".bd-example-modal-lg">
                </div>
            </div>

            <div class="col-10 col-md-7 col-lg-3 zoom marginBottomResponsive">
                <div>
                    <img class="card-img photoPoly" src="img/DJ-Addict-196.jpg" alt="Card image" data-toggle="modal" data-target=".bd-example-modal-lg">
                </div>
            </div>

            <div class="col-10 col-md-7 col-lg-3 zoom marginBottomResponsive">
                <div>
                    <img class="card-img photoPoly" src="img/DJ-Addict-199.jpg" alt="Card image" data-toggle="modal" data-target=".bd-example-modal-lg">
                </div>
            </div>
        </div> -->
        <!-- <div class="row justify-content-center marginNega">
            <div class="col-10 col-md-7 col-lg-3  zoom marginBottomResponsive">
                <div>
                    <img class="card-img photoPoly " src="img/DJ-Addict-212.jpg" alt="Card image" data-toggle="modal" data-target=".bd-example-modal-lg">
                </div>            
            </div>
           
            <div class="col-10 col-md-7 col-lg-3 zoom marginBottomResponsive ">
                <div>
                    <img class="card-img photoPoly " src="img/DJ-Addict-212.jpg" alt="Card image" data-toggle="modal" data-target=".bd-example-modal-lg">
                </div>            
            </div>
            
            <div class="col-10 col-md-7 col-lg-3 zoom marginBottomResponsive">
                <div>
                    <img class="card-img photoPoly" src="img/DJ-Addict-212.jpg" alt="Card image" data-toggle="modal" data-target=".bd-example-modal-lg">
                </div>            
            </div>
        </div> -->
    </div>
   

<!-- Modal pictures -->
<div class="modal fade bd-example-modal-lg mt-5" tabindex="-1" role="dialog"
     aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

    <div class="container">
        <div class="row">
            <div class="col-12">
            <div id="carouselFadeExampleIndicators" class="carousel slide carousel-fade rounded" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
            <img class="d-block w-100 mt-3 mb-3 rounded" src="img/DJ-Addict-212.jpg"  alt="First slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100 mt-3 mb-3 rounded" src="img/DJ-Addict-146.jpg"  alt="Second slide">
            </div>
            <div class="carousel-item ">
            <img class="d-block w-100 mt-3 mb-3 rounded" src="img/DJ-Addict-160.jpg"  alt="Second slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100 mt-3 mb-3 rounded" src="img/DJ-Addict-156.jpg"  alt="Second slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100 mt-3 mb-3 rounded" src="img/DJ-Addict-179.jpg"  alt="Second slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100 mt-3 mb-3 rounded" src="img/DJ-Addict-189.jpg"  alt="Second slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100 mt-3 mb-3 rounded" src="img/DJ-Addict-188.jpg"  alt="Second slide">
            </div>

        </div>
        <a class="carousel-control-prev" href="#carouselFadeExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselFadeExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
            </div>
        </div>
    </div>
            
    </div>
  </div>
</div>
    
</main>


 


<?php
//Bas de page/Footer
include("template/footer.php");
?>
