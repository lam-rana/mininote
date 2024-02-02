<?php
require ("query.php");

function logIn($dbh){
    print($_SESSION['loggedIn']);

    if(isset($_SESSION['loggedIn']) && !$_SESSION['loggedIn']){
        if(isset($_GET["login"]) && $_GET["login"] != "" && isset($_GET["pass"])) {

//        require('../TD3/query.php');
//            require('query.php');

            $login = $_GET["login"];
            $pass = $_GET["pass"];

            print_r($pass);

//        $logged = User::checkPass($dbh, $login, $pass);
            $_SESSION['loggedIn'] = Utilisateur::checkPass($dbh, $login, $pass);
//        print_r($logged);

        }
    }

}

function logOut(){
    unset($_SESSION['loggedIn']);
}




?>