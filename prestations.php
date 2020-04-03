<?php
//Haut de page/Header
    include("template/header.php");
?>
<?php
//Doctype HTML
    include("template/doctype.php");   
    get_header('prestation');
?>


<main class="fullScreen">
<div class="container">
<h3 class="mt-3 policeTitre titreBorder">PRESTATIONS</h3>
    <div class="row justify-content-center pb-5 ">

        <div class="col-12 col-md-8 col-lg-4 mt-3">
            <div class="bg-light rounded text-center prestationCardShadow">
                <img class="rounded-top mb-2 img-fluid " src="img/club.jpg" alt="Card image">
                <h4 class="pt-1 policeSousTire ">Clubbing</h4>
                <p class="text-justify policeText pl-4 pr-4 ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit iusto nulla aperiam blanditiisad consequatur in dolores culpa, dignissimos, eius non possimus fugiat. Esse ratione fuga, enim,ab officiis totam.</p>
                <button  class="buttonPresta  mb-2 policeText" data-toggle="modal" data-target="#clubbing">En savoir plus</button>
            </div>
        </div>

        <div class="col-12 col-md-8 col-lg-4 mt-3">
            <div class="bg-light rounded text-center prestationCardShadow">
                <img class="rounded-top mb-2 img-fluid " src="img/costume.jpg" alt="Card image">
                <h4 class="pt-1 policeSousTire">Corporate</h4>
                <p class="text-justify policeText pl-4 pr-4 ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit iusto nulla aperiam blanditiisad consequatur in dolores culpa, dignissimos, eius non possimus fugiat. Esse ratione fuga, enim,ab officiis totam.<p>               
             <button  class="buttonPresta  mb-2 policeText" data-toggle="modal" data-target="#corporate">En savoir plus</button>
            </div>
        </div>

        <div class="col-12 col-md-8 col-lg-4 mt-3 ">
            <div class="bg-light rounded text-center prestationCardShadow">
                <img class="rounded-top mb-2 img-fluid " src="img/mariage.jpg" alt="Card image">
                <h4 class="pt-1 policeSousTire ">Mariage</h4>
                <p class="text-justify policeText pl-4 pr-4 ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit iusto nulla aperiam blanditiis
            ad consequatur in dolores culpa, dignissimos, eius non possimus fugiat. Esse ratione fuga, enim,
            ab officiis totam.</p>                
            <button  class="buttonPresta mb-2 policeText" data-toggle="modal" data-target="#mariage">En savoir plus</button>
            </div>
        </div>
    </div>
</div>


<!-- Les modales :  -->
<!-- Modale Mariage -->
<div class="modal fade bd-example-modal-lg  " id="mariage" tabindex="-1" role="dialog"
     aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content ">
      <!--Header-->
      <div class="modal-header bg-light">
        <h3 class="policeSousTire">Mariage</h3>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="text-dark">&times;</span>
        </button>
      </div>

      <!--Body-->
      <div class="modal-body">
        <div class="text-center ">
        <i class="AnimateModalIcon fas fa-ring fa-3x animated rotateIn" ></i>
        
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit iusto nulla aperiam blanditiisad consequatur in dolores culpa, dignissimos, eius non possimus fugiat. Esse ratione fuga, enim, ab officiis totam.</p>            
          <!-- Carousel -->
          <div class="row justify-content-center">
            <div class="col-10 ">
              <div id="Mariage" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                      <div class="carousel-item active">
                        <img class="d-block w-100 img-fluid" src="img/DJ-Addict-199.jpg"  alt="First slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="img/DJ-Addict-196.jpg" alt="Second slide">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#Mariage" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#Mariage" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
              </div>
            </div>
          </div>
            
        </div>
      </div>

      <!--Footer-->
      <div class="modal-footer justify-content-center bg-light ">
          <div class="text-center ">
            <p class="policeText">Besoin de plus d'information ? <br>Vous êtes intéressé pour travailler avec moi ?</p>
            <a  href="contact" type="button" class="buttonContactModal policeText">Contactez-moi <i class="fas fa-envelope ml-1 mt-2 "></i></a>          
          </div>       
      </div>
    </div>
    

    </div>
  </div>
</div>


<!-- Modale clubbing -->
<div class="modal fade bd-example-modal-      éalg" id="clubbing" tabindex="-1" role="dialog"
     aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

    <!--Header-->
    <div class="modal-header bg-light">
        <h3 class="policeSousTire">Clubbing</h3>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="text-dark">&times;</span>
        </button>
    </div>

      <!--Body-->
      <div class="modal-body">
        <div class="text-center ">
          <img  class="rotate mb-2" src="img/vinyl.png" alt="">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit iusto nulla aperiam blanditiis
            ad consequatur in dolores culpa, dignissimos, eius non possimus fugiat. Esse ratione fuga, enim,
            ab officiis totam.</p>
            <div class="row justify-content-center">
              <div class="col-10 ">
                <div id="Club" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                          <img class="d-block w-100 img-fluid" src="img/DJ-Addict-199.jpg"  alt="First slide">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="img/DJ-Addict-196.jpg" alt="Second slide">
                        </div>
                      </div>
                      <a class="carousel-control-prev" href="#Club" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#Club" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                </div>
              </div>
            </div>
        </div>
      </div>

      <!--Footer-->
      <div class="modal-footer justify-content-center bg-light ">
          <div class="text-center ">
            <p class="policeText">Besoin de plus d'information ? <br>Vous êtes intéressé pour travailler avec moi ?</p>
            <a  href="contact" type="button" class="buttonContactModal policeText">Contactez-moi <i class="fas fa-envelope ml-1 mt-2"></i></a>          
          </div>       
      </div>
    </div>
   
    </div>
  </div>
</div>

<!-- Modale corporate -->
<div class="modal fade bd-example-modal-lg" id="corporate" tabindex="-1" role="dialog"
     aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <!--Header-->
    <div class="modal-header bg-light">
        <h3 class="policeSousTire">Corporate</h3>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="text-dark">&times;</span>
        </button>
      </div>

      <!--Body-->
      <div class="modal-body">
        <div class="text-center ">
        <i class="AnimateModalIcon fas fa-industry fa-3x animated rotateIn" ></i>
        
        
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit iusto nulla aperiam blanditiis
            ad consequatur in dolores culpa, dignissimos, eius non possimus fugiat. Esse ratione fuga, enim,
            ab officiis totam.</p>
            <div class="row justify-content-center">
            <div class="col-10 ">
            <div id="Corporate" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                      <img class="d-block w-100 img-fluid" src="img/DJ-Addict-199.jpg"  alt="First slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="img/DJ-Addict-196.jpg" alt="Second slide">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#Corporate" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#Corporate" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>
            </div>
            
        </div>
      </div>

      <!--Footer-->
      <div class="modal-footer justify-content-center bg-light ">
          <div class="text-center ">
            <p class="policeText">Besoin de plus d'information ? <br>Vous êtes intéressé pour travailler avec moi ?</p>
            <a  href="contact" type="button" class="buttonContactModal policeText">Contactez-moi <i class="fas fa-envelope ml-1 mt-2 "></i></a>          
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