<?php

function connectBDD(){
    
    try{
        $bdd = new PDO("mysql:host=localhost;dbname=ppe","root","");
        
        // Activation des erreurs PDO
 $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 // mode de fetch par défaut : FETCH_ASSOC / FETCH_OBJ / FETCH_BOTH
  $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  return $bdd;
    }catch(Exception $e){
        die("erreur bdd");
    }
}

function auth($lvl){// fonction qui controle si le lvl de l utilisateur est suffisant
    
    if(isset($_SESSION['lvl']) && $_SESSION['lvl'] >= $lvl)
        return true;
    else
        header("Location:connexionAdmin");
}





