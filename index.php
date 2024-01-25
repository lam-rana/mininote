<?php require('utils.php');
$askedPage= "accueil";
if(array_key_exists('page',$_GET)){
    $askedPage = $_GET['page'];
}
if(!checkPage($askedPage)){
    $askedPage ='acceuil';
}
$title = getPageTitle($askedPage);
    generateHTMLHeader($title);
  
    Menu();
    require("Content/content_$askedPage.php");
?>
    
<?php
    generateHTMLFooter();
?>   



 