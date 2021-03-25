<?php
  require "models/utilisateurModels.php";

  



  require "views/utilisateurView.php";
?>


<!--$lesusers = getUsers();
// parcourir les Contrats , tous les Contrats
foreach ($lesusers as $uneusers) {
    echo"<tr> <td>".$uneusers['id']."</td>
              <td>".$uneusers['username']."</td>
              <td>".$uneusers['tel']."</td>
              <td>".$uneusers['adresse']."</td>
              <td>".$uneusers['email']."</td>
              <td>".$uneusers['pass']."</td>
              </tr>";

}
