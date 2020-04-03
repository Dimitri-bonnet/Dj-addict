<?php 
if(session_status() == PHP_SESSION_NONE){
    session_start();
}
?>
<?php
 require 'function/function.php'
?>

<header>

<nav class="navbar navbar-expand-lg navbar-light  bg-black ">
    <div class="container-fluid">
        <a class="navbar-brand" href="index">
            <img src="img/logoW.png"  alt="Logo Dj Addict black" height="40">
        </a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon bg-white rounded"></span>
        </button>

        <div class="collapse navbar-collapse text-white" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <?php if (isset($_SESSION['auth'])): ?>
                <li>
                    <a class="nav-link text-white" href="gestionmessage"><h6>Gestion messages</h6></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="admin"><h6>Admin</h6></a>
                </li>
                    <a class="nav-link text-white" href="logout"><h6>Se déconnecter</h6></a>
                </li>
                <?php else: ?>    
                <li class="nav-item">
                    <a class="nav-link text-white" href="admin"><h6>Admin</h6></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="login"><h6>Se connecter</h6></a>
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav> 
</header>

<div class="container">
    <div class="row justify-content-center">
    <?php if(isset($_SESSION['flash'])): ?>
        <?php foreach($_SESSION['flash'] as $type => $message): ?>
            <div class=" col-8 alert alert-<?= $type; ?>">
                <?= $message ?>
            </div>
        <?php endforeach; ?>
        <?php unset($_SESSION['flash']); ?>
    <?php endif; ?>
    </div>
</div>    