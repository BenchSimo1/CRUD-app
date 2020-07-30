<?php

include_once 'CONFIG/init.php' ;


$template = new Template('TEMPLATES/front_page.php');
$personne = new Personne ;

$template->personnes = $personne->getPersonnes() ;

echo $template ;