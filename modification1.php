<?php 

include_once 'CONFIG/init.php' ;


$template = new Template('TEMPLATES/modification1.php') ;

$person = new Personne ;

$id = $_GET['id'];

$template->personne = $person->getPersonne($id) ;

if (isset($_POST['submit'])) {
    $data = array() ;
    $data['nom'] = $_POST['nom'] ;
    $data['prenom'] = $_POST['prenom'] ;
    $data['adresse'] = $_POST['adresse'] ;
    $data['cp'] = $_POST['cp'] ;
    $data['telephone'] = $_POST['telephone'];
    

    if ($person->update($id , $data)) {
        redirect("index.php" ,"les données sont modifiées" , "success");
    } else {
        redirect("index.php", "les données ne sont pas modifiées" , "error");
    }
}

echo $template;