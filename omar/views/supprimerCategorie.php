<?php
	include 'C:/xampp/htdocs/omar/controller/CategorieC.php';
	$categorieC=new CategorieC();
	$categorieC->supprimerCategorie($_POST["IdCategorie"]);
	header('Location:dashboard.php');
?>