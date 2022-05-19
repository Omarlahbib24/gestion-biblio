<?php
include 'C:/xampp/htdocs/omar/controller/CategorieC.php';
$error ="";
$categorie = null;
$categorieC=new CategorieC();
if(
    isset($_POST['NomLivre'])
    &&isset($_POST['NomCategorie']) 
    &&isset($_POST['Prix']) 
    &&isset($_POST['imageA'])
){
    $categorie = new categorie($_POST['NomLivre'],$_POST['NomCategorie'],$_POST['Prix'],$_POST['imageA']);
    $categorieC->modifierCategorie($categorie,$_GET['IdCategorie']);
}else{
    echo 'Erreur';
    header('Location: dashboard.php');
}

?>