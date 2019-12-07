<?php
include 'C:/wamp64/www/web/entities/client.php';
include 'C:/wamp64/www/web/core/clientC.php';



$id=$_POST['id'];
 
  //récupération des valeurs des champs:
  //nom:
  $nom     = $_POST["nom"] ;
  //prenom:
  $prenom = $_POST["prenom"] ;
  //adresse:
  $username = $_POST["username"] ;
  //code postal:
  $adresse       = $_POST["adresse"] ;
  //numéro de téléphone:
  $tel        = $_POST["tel"] ;
 
  //récupération de l'identifiant de la personne:
  $email         = $_POST["email"] ;

$password=$_POST['password'];

 $clientC=new clientC();
$clientC->modifierclient($id,$nom,$prenom,$username,$adresse,$tel,$email,$password);
header('location: profile.php');
         
 
 
 
  //affichage des résultats, pour savoir si la modification a marchée:
  // if($requete)
  // {
  //   echo("La modification à été correctement effectuée") ;
  // }
  // else
  // {
  //   echo("La modification à échouée") ;
  // }
?>