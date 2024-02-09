<?php

function Menu(){
    global $pageList;
    echo<<<FIB
    <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
        <a class="navbar-brand" href="index.php?page='homepage'">Wiki Note</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto ">
FIB;

    foreach($pageList as $page){
        if(array_key_exists('menutitle', $page)){
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


function MenuOut(){
    global $pageList;
    echo<<<FIB
    <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
        <a class="navbar-brand" href="index.php?page=accueil">Wiki Note</a>
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

    echo'</ul>';

    if(array_key_exists('loggedIn',$_SESSION) && $_SESSION['loggedIn']){
        Deconnexion();
    }
    else{
        Connexion();
    }
    echo "FIB                    
        </div>
    </nav> ";
}


?>