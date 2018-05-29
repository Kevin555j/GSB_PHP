<?php
include("vues/v_sommaire.php");
$action = $_REQUEST['action'];
$idVisiteur = $_SESSION['idVisiteur'];

switch($action){
    case 'selectionnerVisiteur':{
      
      
      $lesVisiteurs = $pdo->getLesVisiteurs();
      $lesMois = $pdo->getLesMois();
      include("vues/v_validationFrais.php");
      break;
    }
    
    case 'voirEtatFrais':{
        $leMois = $_REQUEST['lstMois'];
        $idVisiteurCible = $_REQUEST['lstVis'];
        
        $lesMois = $pdo->getLesmois();
        $lesVisiteurs = $pdo->getLesVisiteurs();
        include("vues/v_validationFrais.php");
        
        $lesFraisForfait = $pdo->getLesFraisForfait($idVisiteurCible, $leMois);
        $lesFraisHorsForfait = $pdo->getLesFraisHorsForfait($idVisiteurCible, $leMois);
        $lesInfosFicheFrais = $pdo->getLesInfosFicheFrais($idVisiteurCible, $leMois);
        $numAnnee = substr($leMois, 0,4);
        $numMois = substr($leMois, 4,2);
        $libEtat = $lesInfosFicheFrais['libEtat'];
        $montantValide = $lesInfosFicheFrais['montantValide'];
        $nbJustificatifs = $lesInfosFicheFrais['nbJustificatifs'];
        $dateModif = $lesInfosFicheFrais['dateModif'];
        $dateModif = dateAnglaisVersFrancais($dateModif);
        include ("vues/v_etatFrais.php");
        break;
    }
}