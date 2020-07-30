<?php include '../INCLUDE/header.php' ?>

<?php displayMessage(); ?>
<div class="row">
   <div class="col-lg-12">
     <div class="bs-component">
       <div class="jumbotron">
          <h1 class="display-3">Bonjour !</h1>
          <p class="lead">Les enregistrement seront affichés dans cette page au dessous </p>
          <hr class="my-4">
          <p>Pour insérer votre données dans la base cliquez le bouton la dessous</p>
          <p class="lead">
              <a class="btn btn-primary btn-lg" href="insertion1.php" role="button">Insérer</a>
          </p>
      </div>
    </div>
  </div>
</div>
  <div class="row">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Nom</th>
          <th scope="col">Prenom</th>
          <th scope="col">adresse</th>
          <th scope="col">code postal</th>
          <th scope="col">telephone</th>
          <th scope="col">modifier</th>
          <th scope="col">supprimer</th>
        </tr>

      </thead>
      <?php foreach($personnes as $personne): ?>
      <tr>
        <td> <?php echo $personne->prenom ?> </td>
        <td> <?php echo $personne->nom ?> </td>
        <td> <?php echo $personne->adresse ?> </td>
        <td> <?php echo $personne->cp ?> </td>
        <td> <?php echo $personne->telephone ?></td>
        <td> 
          <a class="btn btn-light" href="modification1.php?id=<?php echo $personne->id ?>" role="button">modifier &raquo;</a>
        </td>
        <td>
        <a onclick="confirme(<?php echo $personne->id  ?>)" class="btn btn-outline-danger" style="margin-left:10px;"  role="button">supprimer &raquo;</a>
        </td>
      </tr>
      <?php endforeach; ?>
    </table>
  </div>
  <script>
    function myFunction() {
      document.getElementById("alert").style.display = "none"
    }
    const confirme = (id) => {
      let confirmation = confirm("voulez-vous vraiment supprimer cet enregistrement ?")
      if (confirmation) {
        document.location.href=`supression.php?id=${id}`;
      }
    }
  </script>




<?php include '../INCLUDE/footer.php' ?>;