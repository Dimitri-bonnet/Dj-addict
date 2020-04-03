<?php
include("template/doctype.php");  
?>
 
 <?php 

require_once "function/function.php";
$id = $_GET['id'];
deleteMessage($id);
header('Location:gestionmessage.php')

?> 
