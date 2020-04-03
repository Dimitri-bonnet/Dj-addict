<?php
//Haut de page/Header
    include("template/header.php");
?>


<?php
//Doctype HTML
    include("template/doctype.php"); 
    get_header('musique');
?>



<main>

 

<div class="container mb-5">
<h3 class="mt-3 policeTitre titreBorder">MUSIQUE</h3>


   
<div class="text-center ml-5 mt-5"> 
    <iframe src="https://open.spotify.com/follow/1/?uri=spotify:artist:6sFIWsNpZYqfjUpaCgueju&size=detail&theme=light" width="300" height="56" scrolling="no" frameborder="0" style="border:none; overflow:hidden;" allowtransparency="true"></iframe>
</div>


    <div class="row">
        <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 mt-5">
            <div class="text-center">
                <iframe  src="https://open.spotify.com/embed/track/3eekarcy7kvN4yt5ZFzltW" width="230" height="300" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
            </div>       
        </div>

        <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 mt-5">
            <div class="text-center">
            <iframe src="https://open.spotify.com/embed/track/2HpgP7x3QbcX2RVXlELTxG" width="230" height="300" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>       
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 mt-5">
            <div class="text-center">
            <iframe src="https://open.spotify.com/embed/track/4iNPp0BZ4lBu7bipdWLcWk" width="230" height="300" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>       
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 mt-5">
            <div class="text-center">
            <iframe src="https://open.spotify.com/embed/track/5Q8gCS68FITJDiWnedMejb" width="230" height="300" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>       
            </div>
        </div>
           
    </div>


    <iframe src="https://open.spotify.com/embed/artist/4iV490oC4UjmkFIoXDQDjG" width="100%" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
   
        

</div>





</main>


 


<?php
//Bas de page/Footer
include("template/footer.php");
?>
