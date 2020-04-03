<?php 
require "function/function.php";
if(empty($_GET))
{
    $data = getMessage();
}
elseif (!empty($_GET['nom']) && !is_numeric($_GET['nom']) &&  getMessageByNom($_GET['nom']) !== [])
{
    $data = getMessageByNom($_GET['nom']);
}

elseif (!empty($_GET['prenom']) && !is_numeric($_GET['prenom']) &&  getMessageByPrenom($_GET['prenom']) !== [])
{
    $data = getMessageByPrenom($_GET['prenom']);
}

elseif (!empty($_GET['email']) && !is_numeric($_GET['email']) && getMessageByEmail($_GET['email']) !== [] ){
    $data = getMessageByEmail($_GET['email']);
}

elseif (!empty($_GET['objet']) && !is_numeric($_GET['objet']) && getMessageByObjet($_GET['objet']) !== [] ){
    $data = getMessageByObjet($_GET['objet']);
}

elseif (!empty($_GET['msg']) && !is_numeric($_GET['msg']) && getMessageByMessage($_GET['msg']) !== [] ){
    $data = getMessageByMessage($_GET['msg']);
}
elseif (!empty($_GET['date']) && is_numeric($_GET['date']) && getMessageByDate($_GET['date']) !== [] ){
    $data = getMessageByDate($_GET['date']);
}
elseif (empty($_GET['all'])){
    $data = getMessage($_GET['all']);
}
 
header("Content-Type: application/json");
header("Content-Encoding: UTF-8");
echo json_encode($data);  