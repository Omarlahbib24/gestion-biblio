<?php
include 'C:/xampp/htdocs/omar/controller/CategorieC.php';
$categorieC=new categorieC();
$listecategorie=$categorieC->afficherCategorie();
?>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Livres</title>
	<link rel="stylesheet" href="css/style2.css">
	<link rel="icon" type="image/png" href="logo.png" />
</head>

<body>
	<header>

		<nav>
			<div class="posit">

				<div class="dropdown">
					<a class="dropbtn" href="Shop.php"></a>
					
			
					
			<div class="p">
				<span style='font-size:50px;'>&#9474;</span>

			</div>

		</nav>
		<div class="p1">
			<span style='font-size:50px;'>&#9474;</span>

		</div>
	

		<img src="img/book cov.jpg" alt="Banner" width="1500">
	</header>

	<section class="container">
		<div class="dropdowns"><form  method="post" action="shop.php">
			<div class="postri">
			<div class="dropdowns-sort">
			
	<input type="submit" name="tri" value="trier" ></input>
	<input type="submit" name="triS" value="stock" ></input>

				
			

			</div></form></div>
		</div>
		<h2><strong>Nos Livres</strong></h2>
		<form method="post" action="chercher.php">
			
			<input id="rechercher" type="rechercher" name="rechercher" required>
			<span class="caret"></span>
		</form>
		<?php
				foreach ($listecategorie as $categorie ){
			?>
		<div class="shop-items">
			<div class="shop-item">
				<a href="produit2.php?IdCategorie=<?php echo $categorie['IdCategorie'];?>">
					<img src="<?php echo $categorie['imageA']; ?>"
						class="shop-item-image">
					<div class="shop-item-details">
						<strong class="shop-item-title"><?php echo $categorie['NomLivre']; ?></strong>
						<div class="shop-item-details"></div>
						<span class="shop-item-price"><?php echo $categorie['NomCategorie']; ?></span> <br>
						<span class="shop-item-price"><?php echo $categorie['Prix']; ?>Dt</span>
						
				</a><br>

			
			</div>
		</div>
		</div>
		<?php
				}
			?>

		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
	
		<br>
		<a href="#"><img class="icon" src="img/fleche.png" alt="0" width="70"></a>
      <!-- Footer section -->
	 <footer>
        <p class="copy">&copy; Copyright 2BI 2021</p>
        <p class="copy">
          Built with &#x2661; by
          <a href="#about" class="nav-link">OMAR LAHBIB </a>
    
          
        </p>
  </footer>
	</section>
	
</body>


</html>