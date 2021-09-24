<?php
session_start();
include 'ConnectToDB.php';
switch ($_SERVER['PHP_SELF']){
    case '/404.php':
        $PageName='404';
        $PageTitle='Oops !';
        break;
    case '/login.php':
        $PageName='Login';
        $PageTitle='ورود';
        break;
    case '/dashboard.php':
        $PageName='Dashboard';
        $PageTitle='صفحه کاربری';
        break;
    case '/aboutus.php':
        $PageName='aboutus';
        $PageTitle='درباره ما';
        break;
    case '/details.php':
        $PageName='Details';
        $PageTitle='Edit user Details!';
        break;
    default:
        $PageName='Home';
        $PageTitle='مسابقه کتابخوانی';
}