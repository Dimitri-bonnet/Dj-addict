<?php
//Haut de page/Header
    include("template/headerAdmin.php");
?>
<?php
include("template/doctype.php");  
?>
<?php logged_only();?>



<main class="bg-dark">
<div class="text-center">
    <img src="img/logoB.png" alt="" height="100">
 </div>
 <h1 class="text-center  pb-2  text-white">Gestionnaire des messages</h1>

 <h4 class="text-center text-white">Les derniers messages reçus</h4>

<div class="container">
    <div class="row justify-content-center">
   
<?php 

$message = getLastMessage ();

foreach ($message as $messages){

$id = $messages['id'];

?>   
    <div class="col-12 col-md-12 col-lg-5 bg-light mt-4 mr-2 mb-2 rounded">
        
        <?php
   
    echo "<h6 class='text-center'> Date : $messages[date] </h6>";
    echo "<p> Nom : $messages[nom]  <br>  Prénom : $messages[prenom] <br> 
    Email : $messages[email]<br> Objet : $messages[objet] <br> Message : $messages[msg]</p>";
    echo "<div class='text-center'><a href='supp-msg.php?id=$id' class=' btn btn-danger mb-2'>Supprimer</a></div>";

?>
</div>
<?php } ?>
  
    </div>
</div>

<div class="container">
    <div class="row ">
        <div class="col-12 text-center">
            <h4 class="text-white">Recherche des messages</h4>

                <select name="recherche" id="recherche">
                    <option value="recherche">------Options------</option>
                    <!-- <option value="date">Date</option> -->
                    <option value="all">Tous les messages</option>
                    <option value="nom">Nom</option>
                    <option value="prenom">Prenom</option>
                    <option value="email">Email</option>
                    <option value="objet">Objet</option>
                    <option value="msg">Message</option>
                </select> 
            <div class="col-12 text-center">
                <input  class="mt-2 text-center"type="text" name="search" id="search" placeholder="Votre recherche" ><br>
                <button  id="bouton" class="btn btn-success mt-2 mb-2" >Recherche</button>
            </div>
        </div>
    </div>         
        
</div>


 <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-12 col-lg-6 ">
            <div class="" id="result"></div>
         </div>
     </div> 
</div> 
            
       
    
           

                
 

                
</main>