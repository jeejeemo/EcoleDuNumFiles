<?php
// Fichier index.php
include 'BddManager.php';
include 'Produit.php';
include 'Promotion.php';


$bdd = new BddManager();
// $instanceProduit = $bdd->getProduitById(1);

//Insertion
// $nouvelObjet = new Produit();
// $nouvelObjet->setNom("Chaise Ikki");
// $nouvelObjet->setDescription("Superchaise au PAM");
// $nouvelObjet->setPrix(50);
// $nouvelObjet->setCouleur("noir");
// $nouvelObjet->save($bdd); //ceci est le save

//Update ATTENTION: LE PRODUIT AVEC ID 4 DOIT EXISTER!
// $instanceProduit = $bdd->getProduitById(4);
// // var_dump($instanceProduit);
// // die();
// $instanceProduit->setNom("Nouveau nom Meuble");
// $instanceProduit->save($bdd);

$instanceProduit = $bdd->getProduitById(1);
var_dump($instanceProduit->getMesPromotions($bdd));