<?php
include('connexion.php');
$code_barre   = $_POST["code_barre"];
$nom          = $_POST["nom"];
$prenom       = $_POST["prenom"];
$gouvernourat = $_POST["gouvernourat"];
$ville        = $_POST["ville"];
$adresse      = $_POST["adresse"];
$numtelephone = $_POST["numTelephone"];
$prix         = $_POST["prix"];
$article      = $_POST["article"];
$nbreArticle  = $_POST["nbreArticle"];

$req =$dbh->prepare("INSERT INTO expediteur (codeBarre,nom,prenom,gouvernourat,ville,adresse,numTelephone,prix,article,nbreArticle) 
VALUES (:code_barre,:Nom,:Prenom,:Gouvernourat,:ville,:Adresse,:Numtelephone,:Prix,:Article,:NbreArticle)");
        $req->execute(array(
          ':code_barre'   => $code_barre,
          ':Nom'          => $nom,
          ':Prenom'       => $prenom,
          ':Gouvernourat' => $gouvernourat,
          ':ville'        => $ville,
          ':Adresse'      => $adresse,
          ':Numtelephone' => $numtelephone,
          ':Prix'         => $prix,
          ':Article'      => $article,
          ':NbreArticle'  => $nbreArticle,
        ));
          
?>
 <?php //include("deconnexion.php");?>