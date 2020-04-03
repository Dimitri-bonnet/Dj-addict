
<?php
function get_header($current_page = ''){
?>

<header>

<nav class=" navbar navbar-expand-lg  navbar-light bg-black">
<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon bg-white rounded"></span>
</button>
    <a class="navbar-brand" href="index">
      <img src="img/logoW.png"  alt="Logo Dj Addict black" height="40">
    </a>


<div class="collapse navbar-collapse policeNav" id="navbarTogglerDemo02">
  <ul class="navbar-nav mr-auto mt-2 mt-md-0">

    <?php if($current_page == 'accueil'): ?>
      <li class="nav-item navBorderCurrentPage">
        <a class="nav-link text-white " href="index">ACCUEIL</a>
      </li>
    <?php else: ?>
      <li class="nav-item navHover">
      <a class="nav-link text-white " href="index">ACCUEIL</a>
    </li>
    <?php endif; ?>

    <?php if($current_page == 'bio'): ?>
      <li class="nav-item  navBorderCurrentPage">
        <a class="nav-link text-white" href="biographie">BIO</a>
      </li>
    <?php else: ?>
      <li class="nav-item navHover">
        <a class="nav-link text-white" href="biographie">BIO</a>
      </li>
    <?php endif; ?>

    <?php if($current_page == 'musique'): ?>
      <li class="nav-item  navBorderCurrentPage">
        <a class="nav-link text-white " href="musique">MUSIQUE</a>
      </li>
    <?php else: ?>
      <li class="nav-item navHover">
        <a class="nav-link text-white" href="musique">MUSIQUE</a>
      </li>
    <?php endif; ?>

   <?php if($current_page == 'photo'): ?>
      <li class="nav-item  navBorderCurrentPage">
        <a class="nav-link text-white" href="photos">PHOTOS</a>
      </li>
    <?php else: ?>
      <li class="nav-item navHover">
        <a class="nav-link text-white" href="photos">PHOTOS</a>
      </li>
    <?php endif; ?>

    <?php if($current_page == 'prestation'): ?>
      <li class="nav-item  navBorderCurrentPage">
        <a class="nav-link text-white" href="prestations">PRESTATIONS</a>
      </li>
    <?php else: ?>
      <li class="nav-item navHover">
        <a class="nav-link text-white" href="prestations">PRESTATIONS</a>
      </li>
    <?php endif; ?>

    <?php if($current_page == 'contact'): ?>
     <li class="nav-item  navBorderCurrentPage ">
      <a class="nav-link text-white" href="contact">CONTACT</a>
     </li>
    <?php else: ?>
     <li class="nav-item navHover">
      <a class="nav-link text-white" href="contact">CONTACT</a>
     </li>
     <?php endif; ?>
  </ul>

  <ul class="navbar-nav ml-auto nav-flex-icons mt-1">
    <li class="nav-item">
      <a  class="mr-2" href="https://www.instagram.com/addictdj"  target="_blank"><i class="fab fa-instagram fa-lg" id="iconeColorHover"></i></a>
      <a  class="mr-2" href="https://www.facebook.com/addictdj/"  target="_blank"><i class="fab fa-facebook-f fa-lg" id="iconeColorHover"></i></a>
      <a  class="mr-2" href="https://podcasts.apple.com/fr/podcast/dj-addict-essential-flavor/id296829313?mt=2"  target="_blank" id="iconeColorHover"><i class="fab fa-apple fa-lg"></i></a>
      <a  class="mr-2" href="http://essential-flavor.backdoorpodcasts.com"  target="_blank"><i class="fab fa-itunes-note fa-lg" id="iconeColorHover"></i></a>
    </li>
  </ul>
  
</div>
</nav>
</header>
 <?php
}
?>
