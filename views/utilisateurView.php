<section class="py-5 text-center container bg">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Utilisateur sur notre sîte</h1>
        <p class="lead text-muted">Liste des utilisateurs inscrits sur notre sîte</p>
      </div>
    </div>
  </section>

<!-- ELEVES -->
<div class="container mt-4">
  <div class="row d-flex justify-content-center">
    <h3 class="text-center">Liste des Utilisateurs</h3>
    <table class="table text-center">
      <thead>
          <tr>
              <th scope="col">Adresse</th>
              <th scope="col">Mail</th>
              <th scope="col">Adresse</th>
              <th scope="col">Téléphone</th>
              <th scope="col">Action</th>
          </tr>
      </thead>
      <tbody>
        <?php
        $view = $bdd->query("SELECT * FROM users");
        if ($view->rowCount() == 0) { ?>
          <tr>
            <td colspan="3">Aucun utilisateurs trouvé dans la basse de données</td>
          </tr>
        <?php } elseif (isset($_GET['edit'])) { 
        while ($donnees = $view->fetch()) { ?>
          <tr>
            <form method="post" action="">
              <td>
                <input type="text" name="username" class="form-control" value="<?= $donnees['username'] ?>">
              </td>
              <td>
                <input type="text" name="email" class="form-control" value="<?= $donnees['email'] ?>">
              </td>
              <td>
                <button type='submit' name='retour' class='btn btn-primary' style='background-color: red; border-color: red;'>
                  X
                </button>
              </td>
            </form>
          </tr>
        <?php } ?>
        <?php } else {
          while ($donnees = $view->fetch()) {
        ?>
        <tr>
          <td><?= $donnees['username'] ?></td>
          <td><?= $donnees['email'] ?></td>
          <td><?= $donnees['adresse'] ?></td>
          <td><?= $donnees['tel'] ?></td>
          <td class="table-action">
            <a class="btn btn-danger active fw-bold" href="admin&id=<?= $donnees['id'] ?>" onclick="return(confirm('Voulez-vous vraiment supprimer cette élève ?'));">
              Supprimer
            </a>
          </td>
        </tr>
        <?php } ?>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>