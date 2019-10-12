<?php
session_start();
 include_once "../model/GestionMedecin.php" ;
 
 $tab=array();
  $gestionMedecin=new GestionMedecin($tab,1);
  $medecins=$gestionMedecin->selectMedecin();
?>
<!DOCTYPE html>  
<html lang="fr">
    <head>
        <title> gestionnaire    </title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="../librairie/bootstrap/dist/css/bootstrap.css"/>
        <script> src="../librairie/bootstrap/js/jquery/dist/jquery.js"</script>
        <script> src="../librairie/bootstrap/dist/js/bootstrap.js"</script> 
        <link rel="stylesheet" href="../css/style.css"/>
        <script> type="text/javascript" src="../js/scripte.js"</script> 
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

       
    </head>


    <body>
    <div class="container-fluid">
    <!-- <menu>
      <a href="pre_rendez.php"> <button class="btn btn-danger" name="rdv" >Demander un rendez-Vous</button><a/>
      <a href="#"><button class="btn btn-danger" name="rdv" >Voir mon profile</button><a/>
      <a href="#"><button class="btn btn-danger" name="rdv" >RV en Attente</button><a/>
      <a href="../index.php"><button class="btn btn-danger" name="deconnexion" >Deconnexion</button><a/>
    </menu> -->
   
      
     
    <nav class="navbar navbar-light bg-light row">
    <div class="col-lg-3 ">SunuClinic</div>
      <div class="">
    <div class="row">
    <div class="btn-group">
  <button type="button" class="btn btn-light btn-lg btn-block dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gestion Medecin</button> 
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Add Medecin</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">List  Medecin</a>
  </div>
</div>

<div class="btn-group">
  <button type="button" class="btn btn-light btn-lg dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" 
  aria-haspopup="true" aria-expanded="false">GestionSecretaire</button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Add Secretaire</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">List  Secretaire</a>
  </div>
</div>

<div class="btn-group">
  <button type="button" class="btn btn-light btn-lg dropdown-toggle dropdown-toggle-split"
   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gestion Specialite</button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Add Specialite</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">List  Specialite</a>
  </div>
</div>

<div class="btn-group">
  <button type="button" class="btn btn-light btn-lg dropdown-toggle dropdown-toggle-split" 
  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gestion Service</button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Add Service</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">List  Service</a>
  </div>
</div>
<a href="#"><button class="btn btn-light btn-lg"  >Mon profil</button></a>
<a href="#"><button class="btn btn-danger btn-md"  >Deconexion</button></a>
    </div>
</nav> 

  
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> s
    </div>
    </body>
</html>