<?php

session_name("mininote" );
session_start();

if (!isset($_SESSION['initiated'])) {
    session_regenerate_id();
    $_SESSION['initiated'] = true;
}

if(isset($_SESSION['initiated'])){
    if(!isset($_SESSION['loggedIn']))
        $_SESSION['loggedIn'] = false;
}

if(isset($_SESSION['loggedIn']) && isset($_GET['logout']) && $_SESSION['loggedIn']){
    $_SESSION['loggedIn'] = false;
}

var_dump($_SESSION);

require("utils.php");
require("logInOut.php");
require("Database.php");

$pageTitle = "index";
generateHTMLHeader($pageTitle, 'bootstrap.css');

$askedPage= "accueil";

if(array_key_exists('page',$_GET)){
    $askedPage = $_GET['page'];
}

if(!checkPage($askedPage)){
    $askedPage ='accueil';
}

$title = getPageTitle($askedPage);

generateHTMLHeader($title);

menu();

$dbh = Database::connect();
logIn($dbh);

var_dump($_SESSION);

require("content/content_$askedPage.php");

?>


    
<?php
    generateHTMLFooter();
?>   



 