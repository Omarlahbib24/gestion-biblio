<?php
 include_once 'C:/xampp/htdocs/omar/model/Categorie.php';
 include_once 'C:/xampp/htdocs/omar/controller/CategorieC.php';
 $categorieC=new categorieC();
$listecategories=$categorieC->afficherCategorie();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Front/dashboard.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="albums-outline"></ion-icon></span>
                        <span class="title">VR Biblio</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="book-outline"></ion-icon></span>
                        <span class="title">Livre</span>
                    </a>
                </li>
                
            </ul>
        </div>

<!---- main -->
            <div class="main">
                    <div class="topbar">
                        <div class="toggle">
                            <ion-icon name="menu-outline"></ion-icon>
                        </div>
                        
                        <!---- mainImg -->
                        <div class="user">
                            <img src="logo.png">
                        </div>
                    </div>
                                          
                
                 
                    <div class="details">
                             <!---- Order list -->
                            <div class="recentorders">
                                <div class="recentorders">
                                    <div class="cardheader">
                                        <h2>Bibliothèque</h2>
                                        <a href="formAjoutCategorie.php" class="btn">Ajouter</a>
                                    </div>
                                    <table>
                                   
                                        <thead>
                                         <tr>
                                            <td>Id Livre</td>
                                            <td>Nom Livre</td>
                                            <td>Nom Catégorie</td>
                                            <td>Prix</td>
                                            <td>Image</td>
                                            <td>Modifier</td>
                                            <td>Supprimer</td>
                                          </tr>
                                        </thead>
                                       
                                    <tbody>
                                    <?php
                foreach($listecategories as $categorie) {
             ?>
                                        <tr>
                                           <td> <?php echo $categorie['IdCategorie']; ?></td>
                                           <td> <?php echo $categorie['NomLivre']; ?></td>
                                           <td> <?php echo $categorie['NomCategorie']; ?></td>
                                           <td> <?php echo $categorie['Prix']; ?></td>
                                           <td> <?php echo $categorie['imageA']; ?></td>

                                           <td>
                                            <form method="post" action="formModifierCategorie.php">
						                     <input type="submit" class="btn modif" name="Modifier" value="Modifier">
						                     <input type="hidden" value=<?PHP echo $categorie['IdCategorie']; ?> name="IdCategorie">
					                        </form>
                                          </td>

                                           <td> 
                                           <form method="post" action="supprimerCategorie.php">
						                     <input type="submit" class="btn supp" name="Supprimer" value="Supprimer">
						                     <input type="hidden" value=<?PHP echo $categorie['IdCategorie']; ?> name="IdCategorie">
					                        </form> 
                                           </td>
                                           </tr>
                                           <?php
                }
                                           ?>
                                    </tbody>
                                    </table>
                                </div>
                               
                          

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


<script>
    //Menu Toggle
    let toggle = document.querySelector(".toggle");
    let navigation = document.querySelector('.navigation');
    let main= document.querySelector('.main');

    toggle.onclick = function(){
        navigation.classList.toggle("active");
        main.classList.toggle("active")
    }

    //adding hoverd class in selected div ! 
    let list =document.querySelectorAll(".navigation li");
    function activeLink(){
        list.forEach((item)=>
        item.classList.remove('hovered'));
        this.classList.add('hovered')
    }
    list.forEach((item)=> 
    item.addEventListener('mouseover',activeLink));
</script>
</body>
</html>