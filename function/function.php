<?php

function getLastMessage(){
    require_once "connexion/connexion.php";
    $connexion=new Connexion();
    $pdo=$connexion->getPdo();
    $message = $pdo->prepare("SELECT * FROM  messages ORDER BY date DESC LIMIT 6");
    $message -> execute();
    $message = $message->fetchAll(PDO::FETCH_ASSOC);
    return $message;
}

function getMessage(){
    require_once "connexion/connexion.php";
    $connexion=new Connexion();
    $pdo=$connexion->getPdo();
    $message = $pdo->prepare("SELECT * FROM  messages ORDER BY date DESC ");
    $message -> execute();
    $message = $message->fetchAll(PDO::FETCH_ASSOC);
    return $message;
}

function deleteMessage(int $id){
    require_once "connexion/connexion.php";
    $connexion=new Connexion();
    $pdo=$connexion->getPdo();
    $deleteMsg = $pdo->prepare('DELETE FROM messages WHERE id=:id');
    $deleteMsg->bindParam(':id', $id);
    $deleteMsg->execute();
    return $deleteMsg;
}

function getMessageByNom($nom){
    require_once "connexion/connexion.php";
    $connexion=new Connexion();
    $pdo=$connexion->getPdo();
    $messageByNom = $pdo->prepare("SELECT * FROM messages WHERE nom LIKE '%{$nom}%' ");
    $messageByNom->execute();
    $messageByNom =$messageByNom->fetchAll(PDO::FETCH_ASSOC);
    return $messageByNom;
}

function getMessageByPrenom($prenom){
    require_once "connexion/connexion.php";
    $connexion=new Connexion();
    $pdo=$connexion->getPdo();
    $messageByPrenom = $pdo->prepare("SELECT * FROM messages WHERE prenom LIKE '%{$prenom}%' ");
    $messageByPrenom->execute();
    $messageByPrenom = $messageByPrenom->fetchAll(PDO::FETCH_ASSOC);
    return $messageByPrenom;
}

function getMessageByEmail($email){
    require_once "connexion/connexion.php";
    $connexion=new Connexion();
    $pdo=$connexion->getPdo();
    $messageByEmail = $pdo->prepare("SELECT * FROM messages WHERE email LIKE '%{$email}%' ");
    $messageByEmail->execute();
    $messageByEmail = $messageByEmail->fetchAll(PDO::FETCH_ASSOC);
    return $messageByEmail;
}

function getMessageByObjet($objet){
    require_once "connexion/connexion.php";
    $connexion=new Connexion();
    $pdo=$connexion->getPdo();
    $messageByObjet = $pdo->prepare("SELECT * FROM messages WHERE objet LIKE '%{$objet}%' ");
    $messageByObjet->execute();
    $messageByObjet = $messageByObjet->fetchAll(PDO::FETCH_ASSOC);
    return $messageByObjet;
}

function getMessageByMessage($message){
    require_once "connexion/connexion.php";
    $connexion=new Connexion();
    $pdo=$connexion->getPdo();
    $messageByMessage = $pdo->prepare("SELECT * FROM messages WHERE msg LIKE '%{$message}%' ");
    $messageByMessage->execute();
    $messageByMessage = $messageByMessage->fetchAll(PDO::FETCH_ASSOC);
    return $messageByMessage;
}
function getMessageByDate( $date){
    require_once "connexion/connexion.php";
    $connexion=new Connexion();
    $pdo=$connexion->getPdo();
    $messageByDate = $pdo->prepare("SELECT * FROM messages WHERE date LIKE '%{$date}%'");
    $messageByDate->execute();
    $messageByDate = $messageByDate->fetchAll(PDO::FETCH_ASSOC);
    return $messageByDate;
}

function logged_only(){
    
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }
    
        if(!isset($_SESSION['auth'])){
            $_SESSION['flash']['danger'] = "Vous n'avez pas le droit d'accéder à cette page";
            header('location: admin');
        }
    }
?>