<?php
session_start();
?>

<?php
//Haut de page/Header
    include("template/header.php");
?>


<?php
//Doctype HTML
    include("template/doctype.php");  
    get_header('contact'); 
?>



<main class="fullScreen">

<div class="container">
<h3 class="mt-3 policeTitre titreBorder">CONTACT</h3>
    <div class="row justify-content-center mb-5 mt-5">
        <div class="col-10 col-md-10 col-lg-7">

        <?php if(array_key_exists('errors', $_SESSION)): ?>
                <div class="alert alert-danger mt-2">
                <p>Le formulaire n'est pas rempli correctement :<p>
                    <?= implode("<br>", $_SESSION['errors']); ?>
                </div>
        <?php  endif; ?>

        <?php if(array_key_exists('success', $_SESSION)): ?>
                <div class="alert alert-success mt-2">
                   <p class="policeTexte">Votre message a été envoyé avec succès</p>
                </div>
        <?php  endif; ?>

            <form action="postcontact.php" method="POST">
                <label class="" for="nom">Nom*</label>
                <input class="form-control  mb-2 text-black" id="nom" type="text" name="nom" class="form-control" value="<?= isset($_SESSION['inputs']['nom']) ? $_SESSION['inputs']['nom'] : '';?>">
                <label for="prenom">Prénom*</label>
                <input class="form-control  mb-2 text-black" id="prenom" type="text" name="prenom" class="form-control" value="<?= isset($_SESSION['inputs']['prenom']) ? $_SESSION['inputs']['prenom'] : '';?>">
                <label for="email">Email*</label>
                <input class="form-control  mb-2 text-black" id="email" type="text" name="email" class="form-control" value="<?= isset($_SESSION['inputs']['email']) ? $_SESSION['inputs']['email'] : '';?>">
                <label for="objet">Objet*</label>
                <input class="form-control  mb-2 text-black" id="objet" type="text" name="objet" class="form-control" value="<?= isset($_SESSION['inputs']['objet']) ? $_SESSION['inputs']['objet'] : '';?>">
                <label for="message">Votre message*</label>
                <textarea class=" form-control "  id="message" rows="3" name="message" ><?= isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message'] : '';?></textarea> 
                  
                <div class="text-center mt-2 ">
                    <button  type="submit" class="buttonContact">Envoyer</button>
                </div>
            </form>
        </div>

        <div class="col-12 col-md-12 col-lg-5 mt-2">
           
                <div class="text-center">
                    <div id="fb-root "></div>
                    <div class="fb-page " data-href="https://www.facebook.com/addictdj/" data-tabs="timeline, events, messages" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/addictdj/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/addictdj/">Dj Addict</a></blockquote></div>
                </div>
        </div>
    </div>
</div>

</main>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v5.0"></script>
 

<?php
//Bas de page/Footer
include("template/footer.php");
?>

<?php
unset($_SESSION['inputs']);
unset($_SESSION['success']);
unset($_SESSION['errors']);
?>
