<?php 
session_name("user");
session_start();

if(!isset($_SESSION['initiated'])){
    session_regenerate_id();
    $_SESSION['initiated'] = true;
}

require('utils.php');
require('Database.php');
require('logInOut.php');
//require('menu.php');

//require('printForms.php');

$dbh = MininoteDatabase::connect();

if(array_key_exists('todo',$_GET) && $_GET['todo']=='login'){
    logIn($dbh);
}

if(array_key_exists('todo',$_GET) && $_GET['todo']=='logout'){
    logOut();
}
 
$askedPage= "accueil";

if(array_key_exists('page',$_GET)){
    $askedPage = $_GET['page'];
}


if(!checkPage($askedPage)){
    $askedPage ='accueil';
}


$title = getPageTitle($askedPage);
generateHTMLHeader($title);

Menu();

require("content/$askedPage.php");
//require('content/homepage_logged.php');

modalsignup();
modalconnexion($askedPage);

?>
    


<?php
    generateHTMLFooter();
?>   



 