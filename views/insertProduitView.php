  <body>
       <div class="row d-flex justify-content-center">
        <div class="col-sm-8 col-md-7 py-4">
         <form method="POST" class="box">
            <table class="box-input">
            <h1 class="box-title">Enregistrer un nouveau produit</h1>
               <tr>
                  <td align="right">
                     <label for="username" >Nom du produit :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="le produit" id="nom_produit" name="nom_produit" class="box-input" value="<?php if(isset($nom_produit)) { echo $nom_produit; } ?>" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="text">mots cles :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="mots clés pour la barre de recherche" id="p_motscles" name="p_motscles" class="box-input" value="<?php if(isset($p_motscles)) { echo $p_motscles; } ?>" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="description">Description :</label>
                  </td>
                  <td>
                     <input type="description" placeholder="description du produit" id="description" name="description" class="box-input" value="<?php if(isset($description)) { echo $description; } ?>" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="prix">Prix du produit :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="prix" id="prix" name="prix" class="box-input" />
                  </td>
               </tr>
               <tr>
                  <tr>
                  <td align="right">
                     <label for="pass2">Quel Categorie ? :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="exemple : Voiture" id="id_categorie" name="id_categorie" class="box-input"/>
                  </td>
               </tr>
               <tr>
               <tr>
                  <td align="right">
                     <label for="pass">Image :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Choisir une image" id="id_image" name="id_image" class="box-input" />
                  </td>
               </tr>
               <tr>
                  
                  <td>
                     <br />
                     <input type="submit" name="insertProduit" value="Insertion" class="box-button" align="center" />
                  </td>
               </tr>
            </table>
         </form>
         <?php
         if(isset($erreur)) {
            echo '<font color="red" align="center">'.$erreur."</font>";
         }
         ?>
      </div>
   </body>
</html>