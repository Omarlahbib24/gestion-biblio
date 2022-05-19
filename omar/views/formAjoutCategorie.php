<?php
	include 'C:/xampp/htdocs/omar/config.php';
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
                            <h2>Ajouter Livre</h2>
+                            </div>   

        <form action="ajouterCategorie.php" method="post">
            <table border="1" align="center">
            <tr>
                    <td>
                        <label for="NomLivre">Nom Livre:
                        </label>
                    </td>
                    <td><input type="text" name="NomLivre" id="NomLivre" maxlength="20"></td>
                </tr> 
            <tr>
                    <td>
                        <label for="NomCategorie">Nom Catégorie:
                        </label>
                    </td>
                    <td><input type="text" name="NomCategorie" id="NomCategorie" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="Prix">Les prix:
                        </label>
                    </td>
                    <td><input type="text" name="Prix" id="Prix" maxlength="20"></td>
                </tr> 
                <tr>
                    <td>
                        <label for="imageA">Image:
                        </label>
                    </td>
                    <td><input type="text" name="imageA" id="imageA" maxlength="1000"></td>
                </tr>             
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" class="btn" value="Envoyer"> 
                    </td>
                    <td>
                        <input type="reset" class="btn" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>