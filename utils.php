<?php
function generateHTMLHeader($title){
    echo<<<CHAINE_DE_FIN
    <!DOCTYPE html>
    <html>
 
    <head>
    <title>$title</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/perso.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Shadows+Into+light' rel='stylesheet' type='text/css'>
    <script src="js/bootstrap.min.js"></script>
    <link href='css/style.css' rel='stylesheet'>
    <script src="js/jquery.min.js"></script>  
    </head>
 
    <body>
CHAINE_DE_FIN;
}

$pageList = array(
    array(
    'name' => 'accueil',
    'title' => 'Accueil site',
    'menutitle' => 'Accueil'
    ),
array(
    'name' => 'info',
    'title' => 'Info',
    'menutitle' => 'Contact'
),
array(
    'name' => 'signup',
    'title' => 'Inscription'
),
array(
    'name' => 'compte',
    'title' => 'Compte'
)
);

function Menu(){
    global $pageList;
    echo<<<FIB
    <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
        <a class="navbar-brand" href="index.php?page='accueil'">Wiki Note</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto ">
FIB;
    foreach($pageList as $page){
        if(array_key_exists('menutitle',$page)){
        echo"
            <li class='nav-item active'>
            <a class='nav-link' href='index.php?page={$page['name']}'>{$page['menutitle']} </a>
                    </li>";
    }
}
echo<<<FIB
                </ul>
                <form class='form-inline d-flex '>
                   <button class='btn btn-primary my-2 my-sm-0' type='button' data-bs-toggle='modal' data-bs-target='#logindemo'>Connexion</button>&nbsp;&nbsp;
                    <button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#signupdemo'>
                    Signup
                    </button>
                </form>
                
                      
        </div>
    </nav>
    

FIB;    
 }
function generateHTMLFooter(){
    echo<<<CHAINE
    </body>
    </html>
    CHAINE;
    }


function CheckPage($askedPage) {
    global $pageList;
    foreach($pageList as $page) {
      if( $page["name"] == $askedPage ) {
        return true;}
    }
    return false;
  }

function getPageTitle($page_name){
    global $pageList;
    foreach( $pageList as $page ) {
      if( $page["name"] == $page_name ) {
        return $page["title"];
      }
    }
    return "erreur";
}  
function modalsignup(){
    echo<<<AA
<div id='signupdemo' class='modal signup'>
 <div class='modal-dialog modal-dialog-centered'>
  <div class='modal-content'>
   <div class='modal-body'>
    <button type='button' class='btn-close btn-close-white' data-bs-dismiss='modal'>
    </button>
    <div class='myform bg-dark'>
    <h1 class='text-center'>Signup Form</h1>
    <form action='#'>
    <div>
        <label for='input_name' class='col-sm-4 control-label'>Name</label>
        <input class='form-control' type='text' placeholder='Name' id='input_name' name='Name' require> 
              </div>&nbsp;
              <div class='form-group'>
              <label for='input_Login' class='col-sm-4 control-label'>Login</label>
              <div class='mr-sm-2'>
                  <input class='form-control' type='text' placeholder='Login' id='imput_login' name='login' require></div>
              </div> 
              <div class='form-group'>
              <label for='input_mdp' class='col-sm-4 control-label'>Mot de Passe</label>
              <div class='mr-sm-2'>
                <input class='form-control' type='password' placeholder='Mot de passe' id='input_mdp' name='psw'></div>
              </div> 
              <div class='form-group'>
              <label for='input_mdp2' class='control-label'>confirmer Mot de Passe</label>
              <div class='mr-sm-2'>  
                <input class='form-control mr-sm-2' type='password' placeholder='Confirmation Mot de passe' id='input_mdp2' name='psw2'></div> 
                </div>
            <button type='button' class='btn btn-light mt-3'>Signup</button>
            <p>Vous avez un compte?<button class='btn1 btn-primary' type='button' data-bs-toggle='modal' data-bs-target='#logindemo'>Connexion</button></a></p>
        </form>
    </div>
   </div>
  </div>
 </div>
</div>

AA;
}

function modalconnexion(){
    echo<<<AA
    

<div id='logindemo' class='modal Login'>
 <div class='modal-dialog modal-dialog-centered'>
  <div class='modal-content'>
   <div class='modal-body'>
    <button type='button' class='btn-close btn-close-white' data-bs-dismiss='modal'>
    </button>
    <div class='myform bg-dark'>
    <h1 class='text-center'>Connexion</h1>
    <form action='#'>
        <div class='form-group'>
        <label for='input_Login' class='col-sm-4 control-label'>Login</label>
            <div class='mr-sm-2'>
                  <input class='form-control' type='text' placeholder='Login' id='imput_login' name='login' require></div>
            </div> 
              <div class='form-group'>
              <label for='input_mdp' class='col-sm-4 control-label'>Mot de Passe</label>
              <div class='mr-sm-2'>
                <input class='form-control' type='password' placeholder='Mot de passe' id='input_mdp' name='psw'></div>
              </div> 
            <button type='button' class='btn btn-light mt-3'>Connexion</button>
            < <p>Vous n'avez pas de compte?<button class='btn1 btn-primary' type='button' data-bs-toggle='modal' data-bs-target='#signupdemo'>Signup</button></a></p>
        </form>
    </div>
   </div>
  </div>
 </div>
</div>

AA;
}
?>