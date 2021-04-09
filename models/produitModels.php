<?php

function getProduit(PDO $bdd){

	$req = "SELECT * FROM produit";

	$res = $bdd -> query($req);

	$lesusers = $res->FetchAll();

		return $lesusers;
}

?>