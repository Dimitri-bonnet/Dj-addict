<?php
//Haut de page/Header
    include("template/headerAdmin.php");
?>

<?php
include("template/doctype.php");  
?>

<?php 
if(!empty($_POST) && !empty($_POST['username']) && !empty($_POST['password'])){
    require_once "connexion/connexion.php";
    
    $connexion=new Connexion();
    $pdo=$connexion->getPdo();

    $req = $pdo->prepare('SELECT * FROM admin WHERE (username = :username)');
    $req->execute(['username' => $_POST['username']]);
    $user = $req->fetch();
    
    if(password_verify($_POST['password'], $user['password'])){

        $_SESSION['auth'] = $user;
        $_SESSION['flash']['success'] = 'Vous êtes bien connecté';
        header('location: account.php');
        exit();
    }else{
        
        $_SESSION['flash']['danger'] = 'Identifiant ou mot de passe incorrecte';
        header('location:login.php');
    }
}
?>

<main>
<div class="login-form mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header bg-black text-center text-white"><h4 class="font-weight-bold ">Se connecter</h4></div>
                        <div class="card-body bg-light">
                            <form action="" method="POST">
                                <div class="form-group row">
                                    <label for="nom de compte" class="col-md-4 col-form-label text-md-right"><h6>Nom de compte admin</h6></label>
                                    <div class="col-md-6">
                                        <input type="text" id="nom de compte"  class="form-control" name="username" >
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right"><h6>Mot de passe</h6></label>
                                    <div class="col-md-6">
                                        <input type="password" id="password"  class="form-control" name="password" >
                                    </div>
                                </div>

                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-outline-dark">
                                    Se connecter
                                    </button>
                                </div>
                            </form>
                        </div>     
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>