<?php
include 'C:/xampp/htdocs/omar/controller/CategorieC.php';
$error="";
$categorie= null;
$categorieC=new CategorieC();


if(
    isset($_POST['NomCategorie']) 
    &&isset($_POST['NomLivre'])
    && isset($_POST['Prix'])
    && isset($_POST['imageA'])

){
    $categorie = new categorie(
        
    $_POST['NomLivre'],
    $_POST['NomCategorie'],
    $_POST['Prix'],
    $_POST['imageA']);
    $categorieC->modifierCategorie($categorie, $_POST['IdCategorie']);
    header('Location: dashboard.php');

}
else
{
echo 'Erreur test';
//header('Location: dashboard.php');
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Front/dashboard.css">
    <title>User Display</title>
</head>
    <body>
        <button><a href="dashboard.php" class="btn">Retour</a></button>
        <hr>
        
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="details">
                    <div class="recentorders">
                        <div class="cardheader">
                            <h2>Modifier Livre</h2>
                            </div>   


        
        
        <?php
			if (isset($_POST['IdCategorie'])){
				$categorie =$categorieC->recupererCategorie($_POST['IdCategorie']);
				
		?>
        <form action="" method="POST">
            <table border="1" align="center">
            <tr>
                    <td>
                        <label for="NomLivre">Nom Livre:
                        </label>
                    </td>
                    <td><input type="text" name="NomLivre" id="NomLivre" value="<?php echo $categorie['NomLivre']; ?>" maxlength="20"></td>
                    <input type="hidden" name="IdCategorie" value="<?php echo $categorie['IdCategorie']; ?>">
                </tr>    
            <tr>
                    <td>
                        <label for="NomCategorie">Nom Categorie:
                        </label>
                    </td>
                    <td><input type="text" name="NomCategorie" id="NomCategorie" value="<?php echo $categorie['NomCategorie']; ?>" maxlength="20"></td>
                    <input type="hidden" name="IdCategorie" value="<?php echo $categorie['IdCategorie']; ?>">
                </tr>
                <tr>
                    <td>
                        <label for="Prix">Prix:
                        </label>
                    </td>
                    <td><input type="text" name="Prix" id="Prix" value="<?php echo $categorie['Prix']; ?>" maxlength="20"></td>
                    <input type="hidden" name="IdCategorie" value="<?php echo $categorie['IdCategorie']; ?>">
                </tr>
                <tr>
                    <td>
                        <label for="imageA">image:
                        </label>
                    </td>
                    <td><input type="text" name="imageA" id="imageA" value="<?php echo $categorie['imageA']; ?>" maxlength="2000"></td>
                    <input type="hidden" name="IdCategorie" value="<?php echo $categorie['IdCategorie']; ?>">
                </tr>
                          
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" class="btn" value="Modifier"> 
                    </td>
                    <td>
                        <input type="reset" class="btn" value="Annuler" >
                    </td>
                </tr>
            </table>
            <?php
		}
		?>
        </form>

    </body>
</html>