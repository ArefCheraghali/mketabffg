<?php include "config.php";
if(isset($_SESSION['loggedIn'])){
    unset($_SESSION['loggedIn']);
    unset($_SESSION['telnum']);
    unset($_SESSION['id']);
    header('location: '.'LogIn');
}else{
    header('location: '.'LogIn');
}