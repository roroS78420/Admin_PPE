<section class="py-5 text-center container bg">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Produit sur notre sîte</h1>
        <p class="lead text-muted"></p>
      </div>
    </div>
  </section>

<!-- ELEVES -->
<div class="container mt-4">
  <div class="row d-flex justify-content-center">
    <h3 class="text-center">Liste des Produits</h3>
    <table class="table text-center">
      <thead>
          <tr>
              <th scope="col">Reference du produit</th>
              <th scope="col">Nom du produit</th>
              <th scope="col">description</th>
              <th scope="col">prix</th>
              <th scope="col">Categorie Associé</th>
          </tr>
      </thead>
      <tbody>
      
        <?php
        $view = $bdd->query("SELECT * FROM produit");
        if ($view->rowCount() == 0) { ?>
          <tr>
            <td colspan="3">Aucun produit trouvé dans la basse de données</td>
          </tr>
         
        <?php } else {
          while ($donnees = $view->fetch()) {
        ?>
        <tr>
          <td><?= $donnees['id_produit'] ?></td>
          <td><?= $donnees['nom_produit'] ?></td>
          <td><?= $donnees['description'] ?></td>
          <td><?= $donnees['prix'] ?></td>
          <td><?= $donnees['id_categorie'] ?></td>
          <td class="table-action">
            <a class="btn btn-danger active fw-bold" href="produit&id_produit=<?= $donnees['id_produit'] ?>" onclick="return(confirm('Voulez-vous vraiment supprimer cette article ?'));">
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
      if(isset($_GET["id_produit"]) AND !empty($_GET['id_produit'])){
        $supprime = (int) $_GET['id_produit'];
      $req = $bdd->prepare('DELETE FROM produit WHERE id_produit = ?');
      $req->execute(array($supprime));
          header("location: produit");
        }
      
      ?>
      </tbody>
    </table>
  </div>
</div>