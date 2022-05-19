<?php
include 'C:/xampp/htdocs/omar/controller/CategorieC.php';
$categorieC=new categorieC();
$listecategories=$categorieC->afficherCategorie();
?>
<html>
    <head></head>
    <body>
        <button>
            <a href="ajouterCategorie.php">Ajouter </a>
        </button>
        <table border="1" align="center">
            <tr>
            <th>IdCategorie</th>
            <th>NomLivre</th>  
            <th>NomCategorie</th>  
                <th>Prix</th>
                <th>imageA</th>
                <th>Modifier</th>
                <th>Supprimer</th>
             </tr>
             <?php
                foreach($listecategories as $categorie) {
             ?>
             <tr>
                 <td> <?php echo $categorie['IdCategorie']; ?></td>
                 <td> <?php echo $categorie['NomCategorie']; ?></td>
                 <td> <?php echo $categorie['NomCategorie']; ?></td>
                 <td> <?php echo $categorie['Prix']; ?></td>
                 <td> <?php echo $categorie['imageA']; ?></td>

                 <td>
                    <a href="modifierCategorie.php?IdCategorie=<?php echo $categorie['IdCategorie'];
                       ?>"> Modifier </a> 
                 </td> 
                 <td> 
                    <a href="supprimerCategorie.php?IdCategorie=<?php echo $categorie['NomCategorie'];
                       ?>">Supprimer </a>
                 </td>
             </tr>
             <?php
                }
             ?>
         </table>
    </body>
</html>