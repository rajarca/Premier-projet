
<?php

 session_start();

 if(empty($_SESSION['Nom'])) {

   header('location:index.php');
 }else{




 ?>




 <!DOCTYPE html>

<html lang="FR"> 
<head>
  <meta charset="utf-8" />
    
    <link rel="stylesheet" href="style.css" />
    </head>




<body style="background-color: #00FFFF; padding: 100PX; margin: 60PX; box-shadow: 10PX 10PX 10PX 10PX;"  >

    <h1 style="text-align: center; color: red;" > 
        Bonjour  <span> <?php echo  $_SESSION['Nom'] . ' ' . $_SESSION['Prenom'] ; ?>  Et Bienvenu Dans votre Bibliothèque  </span>   
    </h1> 


   <h2 style="text-align: CENTER ; text-decoration: underline;">Choisissez Votre Categorie Préférée </h2>

<section id="CONTENEUR">
<div style="  display: flex  ; justify-content: space-between; "  >

 <div > 
  <h3 style="color: blue; font-family: impact; text-decoration: underline ;   ">Litterature</h3>
  <a href="produits.php?id=1">Litterature Francaise</a></br>
  <a href="produits.php?id=2">Litterature Arabe</a></br>
  <a href="produits.php?id=3">Poésie</a></br>
  <a href="produits.php?id=4">Théatre</a></br>
</div>
<div class="montro">
  <h3 style="color:BLUE; font-family:impact ; text-decoration: underline ; "  >Arts et sciences humaines</h3>
  <a href="produits.php?id=5">Arts et culture</a></br>
  <a href="produits.php?id=6">Cinéma & photograpgie</a></br>
  <a href="produits.php?id=7">Sciences humaines</a></br>
  <a href="produits.php?id=8">Religions</a></br>

</div>
</div>
</section>


</body>
</html>
</footer>
<div style="text-align: center; box-shadow:10PX 10PX 10PX 10PX;margin: AUTO; padding:30PX ; width: 80PX; background-color: black; font-family: impact " >
<a href="deconnexion.php"> <span  > Se Deconnecter </span>  </a>

</div>

<?php } ?>