<?php 
try{
    require_once "../connexion/connexion.php";
    $connexion=new Connexion();
    $pdo=$connexion->getPdo();

    echo 'Je suis connecté à la base de donnée ';

    $table = "CREATE TABLE IF NOT EXISTS Admin(
        id INT AUTO_INCREMENT NOT NULL,
        username VARCHAR(255),
        password VARCHAR(500),
        PRIMARY KEY (id)
        )";
    $pdo->exec($table);
    echo 'table admin créee';

}
catch(PDOException $e){
    echo 'Echec de la connexion : '.$e->getMessage();
}

?>