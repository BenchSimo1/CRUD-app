<?php 

include_once 'CONFIG/init.php' ;


$template = new Template('TEMPLATES/insertion1.php') ;

$personne = new Personne ;

if (isset($_POST['submit'])) {
    $data = array() ;
    $data['nom'] = $_POST['nom'] ;
    $data['prenom'] = $_POST['prenom'] ;
    $data['adresse'] = $_POST['adresse'] ;
    $data['cp'] = $_POST['cp'] ;
    $data['telephone'] = $_POST['telephone'];

    if ($personne->create($data)) {
        redirect("index.php" ,"personne enregistré avec succès" , "success");
    } else {
        redirect("index.php", "personne non enregistré" , "error");
    }
}

echo $template ;
