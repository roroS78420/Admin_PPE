<?php

function getCommande(PDO $bdd){

	$req = "SELECT ref_com, date_commande, id_u, total FROM commande";

	$res = $bdd -> query($req);

	$lesusers = $res->FetchAll();

		return $lesusers;
}

?>