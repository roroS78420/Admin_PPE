<?php
	require "models/insertProduitModels.php";

	if(isset($_POST['insertProduit'])) {
    $nom_produit = htmlspecialchars($_POST['nom_produit']);
    $p_motscles = htmlspecialchars($_POST['p_motscles']);
    $description = htmlspecialchars($_POST['description']);
    $prix = ($_POST['prix']);
    $id_categorie = ($_POST['id_categorie']);
    $id_image = ($_POST['id_image']);
    if(!empty($_POST['nom_produit']) AND !empty($_POST['p_motscles']) AND !empty($_POST['description']) AND !empty($_POST['prix']) AND !empty($_POST['id_categorie']) AND !empty($_POST['id_image'])) {
       
    $insertpdt = $bdd->prepare("INSERT INTO produit(nom_produit, p_motscles, description, prix, id_categorie, id_image) VALUES(?, ?, ?, ?, ?, ?)");
    $insertpdt->execute(array($nom_produit, $p_motscles, $description, $prix, $id_categorie, $id_image));
                      $erreur = "Le produit a bien été enregistré !</a>";
                   } 
    }


  require "views/insertProduitView.php";
?>