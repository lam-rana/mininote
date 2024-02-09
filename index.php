<?php require('utils.php');
$askedPage= "accueil";

require('content/homepage_logged.php');

if(array_key_exists('page',$_GET)){
    $askedPage = $_GET['page'];
}



if(!checkPage($askedPage)){
    $askedPage ='acceuil';
}


$title = getPageTitle($askedPage);
    generateHTMLHeader($title);

    Menu();

    require("content/content_$askedPage.php");
    modalsignup();
    modalconnexion();
?>
    
<?php
    generateHTMLFooter();
?>   



 