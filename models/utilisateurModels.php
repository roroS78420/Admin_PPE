<?php

function getUsers(PDO $bdd){

	$req = "SELECT username, tel, adresse, email, pass FROM users";

	$res = $bdd -> query($req);

	$lesusers = $res->FetchAll();

		return $lesusers;
}

?>