<?php auth(2); ?>
<section class="py-5 text-center container bg">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Commande effectué sur notre sîte</h1>
        <p class="lead text-muted"></p>
      </div>
    </div>
  </section>

<!-- ELEVES -->
<div class="container mt-4">
  <div class="row d-flex justify-content-center">
    <h3 class="text-center">Liste des Commande</h3>
    <table class="table text-center">
      <thead>
          <tr>
              <th scope="col">Reference de commande</th>
              <th scope="col">date de la commande</th>
              <th scope="col">Utilisateur</th>
              <th scope="col">total</th>
              <th scope="col">Action</th>
          </tr>
      </thead>
      <tbody>
      
        <?php
        $view = $bdd->query("SELECT * FROM commande");
        if ($view->rowCount() == 0) { ?>
          <tr>
            <td colspan="3">Aucune commande trouvé dans la basse de données</td>
          </tr>
         
        <?php } else {
          while ($donnees = $view->fetch()) {
        ?>
        <tr>
          <td><?= $donnees['ref_com'] ?></td>
          <td><?= $donnees['date_commande'] ?></td>
          <td><?= $donnees['id_u'] ?></td>
          <td><?= $donnees['total'] ?></td>
          <td class="table-action">
            <a class="btn btn-danger active fw-bold" href="commande&ref_com=<?= $donnees['ref_com'] ?>" onclick="return(confirm('Voulez-vous vraiment annuler cette commande ?'));">
              Supprimer
            </a>
          </td>
        </tr>
        <?php } ?>
        <?php } ?>
        <?php 
        error_reporting(E_ALL);
        ini_set('display_errors', TRUE);
        ini_set('display_startup_errors', TRUE);
      if(isset($_GET["ref_com"]) AND !empty($_GET['ref_com'])){
        $supprime = (int) $_GET['ref_com'];
      $req = $bdd->prepare('DELETE FROM commande WHERE ref_com = ?');
      $req->execute(array($supprime));
          header("location: commande");
        }
      
      ?>
      </tbody>
    </table>
  </div>
</div>