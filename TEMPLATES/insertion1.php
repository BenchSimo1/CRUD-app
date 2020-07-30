<?php include '../INCLUDE/header.php' ?>

<h2 class="page-header">Insertion de données en PHP ::partie1</h2>
        <form action="insertion1.php" method="post">
            <div class="form-group">
                <label for="nom">nom: </label>
                <input type="text" name="nom" class="form-control" id="nom">
            </div>
            <div class="form-group">
                <label for="prenom">prenom : </label>
                <input type="text" name="prenom" class="form-control" id="prenom">
            </div>
            <div class="form-group">
                <label for="adresse">adresse : </label>
                <input type="text" name="adresse" class="form-control" id="adresse">
            </div>
            <div class="form-group">
                <label for="cp">code postal : </label>   
                <input type="text" name="cp" class="form-control" id="cp">
            </div>
            <div class="form-group">
                <label for="telephone">telephone : </label>
                <input type="text" name="telephone" class="form-control" id="telephone">
            </div>
            <input type="submit" value="submit" class="btn btn-default btn-success" name="submit">
        </form>




<?php include '../INCLUDE/footer.php' ?>