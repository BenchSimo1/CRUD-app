<?php include '../INCLUDE/header.php' ?>


<h2 class="page-header">Modifie les donnée :</h2>
        <form action="modification1.php?id=<?php echo $personne->id ?>" method="post">
            <div class="form-group">
                <label for="nom">nom: </label>
                <input type="text" name="nom" class="form-control" id="nom" value="<?php echo $personne->nom ?>">
            </div>
            <div class="form-group">
                <label for="prenom">prenom : </label>
                <input type="text" name="prenom" class="form-control" id="prenom" value="<?php echo $personne->prenom ?>">
            </div>
            <div class="form-group">
                <label for="adresse">adresse : </label>
                <input type="text" name="adresse" class="form-control" id="adresse" value="<?php echo $personne->adresse?>">
            </div>
            <div class="form-group">
                <label for="cp">code postal : </label>   
                <input type="text" name="cp" class="form-control" id="cp" value="<?php echo $personne->cp ?>">
            </div>
            <div class="form-group">
                <label for="telephone">telephone : </label>
                <input type="text" name="telephone" class="form-control" id="telephone" value="<?php echo $personne->telephone ?>">
            </div>
            <input type="submit" value="submit" class="btn btn-default btn-success" name="submit">
        </form>



<?php include '../INCLUDE/footer.php' ?>