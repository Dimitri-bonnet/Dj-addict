<?php
$errors = [];

if(!array_key_exists('nom', $_POST) || $_POST['nom'] === ''){
     $errors['nom'] = "Vous n'avez pas renseingé votre nom.";
     
}elseif (preg_match('/[^a-z_\-]/i', $_POST['nom'])){
    $errors['nom'] = " Vous n'avez pas le droit de renseigner un chiffre pour votre nom.";
}

if(!array_key_exists('prenom', $_POST) || $_POST['prenom'] === ''){
    $errors['prenom'] = "Vous n'avez pas renseingé votre prenom.";

}elseif (preg_match('/[^a-z_\-]/i', $_POST['prenom'])) {
    $errors['prenom'] = " Vous n'avez pas le droit de renseigner un chiffre pour votre prénom.";
}

if(!array_key_exists('email', $_POST) || $_POST['email'] === ''){
    $errors['email'] = "Vous n'avez pas renseingé d'email.";
}elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = "Vous n'avez pas renseingé d'email valide.";
}

if(!array_key_exists('objet', $_POST) || $_POST['objet'] === ''){
    $errors['objet'] = "Vous n'avez pas renseingé l'objet du message.";
}elseif (preg_match('/[^a-z_\-0-9]/i', $_POST['objet'])){
    $errors['objet'] = "Seuls les caractères alphanumériques sont autorisés";
}

if(!array_key_exists('message', $_POST) || $_POST['message'] === ''){
    $errors['message'] = "Vous n'avez pas renseingé votre message.";
}elseif (preg_match('/[^a-z_\-0-9]/i', $_POST['objet'])){
    $errors['objet'] = "Seuls les caractères alphanumériques sont autorisés";
}


session_start();
if(!empty($errors)){
    $_SESSION['errors'] = $errors;
    $_SESSION['inputs'] = $_POST;
   
}else{
    $_SESSION['success'] = 1;
    $message = $_POST ['message'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $objet = $_POST['objet'];
try{
    require_once "connexion/connexion.php";
    $connexion=new Connexion();
    $pdo=$connexion->getPdo();
    echo 'Je suis connecté à la base de donnée';

    $pdostat = $pdo->prepare('INSERT INTO messages VALUE (NULL,:nom, :prenom, :email, :objet, :msg, NOW())');
    $pdostat->bindValue(':nom', $_POST['nom'], PDO::PARAM_STR);
    $pdostat->bindValue(':prenom', $_POST['prenom'], PDO::PARAM_STR);
    $pdostat->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
    $pdostat->bindValue(':objet', $_POST['objet'], PDO::PARAM_STR);
    $pdostat->bindValue(':msg', $_POST['message'], PDO::PARAM_STR);
    $insertOk = $pdostat->execute();

    mail('dimitri.bonnet18@gmail.com', 'Formulaire de contact','Expediteur : '.$email ."\n". 
    'Nom : '. $nom ."\n". 'Prénom : '. $prenom ."\n".'Objet : '. $objet ."\n".  'Message : '.$message  );
}
    catch(PDOException $e){
        echo 'Echec de la connexion : '.$e->getMessage();
    }
}
header('location: contact');
die();