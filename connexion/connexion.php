<?php
class Connexion/* Ici c'est un objet qu'on appel Connexion */
{
    private $file; /* Ici c'est le paramétre d'accéssibilité de la variable  */
    private $data;
    private $pdo;

    private $DBUSER;
    private $DBPASSWORD;
    private $DBNAME;
    private $DBHOST;

    public function __construct() /*  */
    {
        $this->file = 'connexion/config.json'; /*j'attribue une valeur à cette objet  */
        $this->data = json_decode(file_get_contents($this->file));

        $this->DBUSER = $this->data->database->user; /* Ici je vais cherche le fichier data (json) puis le ficher databass du fichier json puis dans ce fichier json le user */
        $this->DBPASSWORD =  $this->data->database->password;
        $this->DBNAME =  $this->data->database->dbName;
        $this->DBHOST =  $this->data->database->host;

        try{
            $connexion = new PDO("mysql:host={$this->DBHOST};dbname={$this->DBNAME};charset=UTF8",$this->DBUSER, $this->DBPASSWORD); 
            $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            error_Log("PDO  instancié");
            $this->pdo = $connexion;
            
        }catch(PDOException $exception){
            error_log ("PDO non instancié : ($exception)");
        }
    }
    public function getPdo(): PDO{
        return $this->pdo;
    }
}