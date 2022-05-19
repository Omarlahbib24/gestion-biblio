<?php
include_once 'C:/xampp/htdocs/omar/controller/CategorieC.php';
$categorieC=new CategorieC();

var_dump($_POST['Prix']);

if(
    isset($_POST['NomCategorie']) && !empty($_POST['NomCategorie'])
    &&isset($_POST['NomLivre']) && !empty($_POST['NomLivre'])
    && isset($_POST['Prix']) && !empty($_POST['Prix'])
    && isset($_POST['imageA']) && !empty($_POST['imageA'])

){
    $categorie = new categorie($_POST['NomLivre'],$_POST['NomCategorie'],$_POST['Prix'],$_POST['imageA']);
    $categorieC->ajouterCategorie($categorie);
}
else
{
echo 'Erreur test';
//header('Location: dashboard.php');
}
?>


