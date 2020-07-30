<?php 

include_once 'CONFIG/init.php' ;


$personne = new Personne ;


$del_id = $_GET['id'] ;

if ($personne->deletepersonne($del_id)){
    redirect("index.php" ,"enregistrement supprimée" , "success");
} else {
        redirect("index.php" ,"enregistrement non supprimée" , "error");
}


