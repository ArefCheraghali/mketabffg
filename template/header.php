<?php include "config.php"; 
header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>
<html lang="fa-IR" dir="rtl">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel='icon' href='./images/favicon.ico' type='image/x-icon'/ >
    <meta charset="UTF-8">
    <title><?=$PageTitle?>
    </title>
    <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />

    <link
            rel="stylesheet"
            href="node_modules/bootstrap/dist/css/bootstrap.min.css"
    />
    <link
            rel="stylesheet"
            href="node_modules/font-awesome/css/font-awesome.min.css"
    />
    <link
            rel="stylesheet"
            href="node_modules/bootstrap-social/bootstrap-social.css"
    />
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="icon" src="./Images/book logo.png" type="image/gif">
    <link href="//db.onlinewebfonts.com/c/3671adca6f650c92b83f906e49656986?family=B+Nazanin" rel="stylesheet" type="text/css"/>
    <title>مسابقه کتابخوانی</title>
</head>

<body>
<nav class="navbar navbar-dark navbar-expand-sm fixed-top text-right">
    <div class="container">
        <button
                class="navbar-toggler "
                type="button"
                data-toggle="collapse"
                data-target="#navbar"
        >
            <span class="navbar-toggler-icon "></span>
        </button>
        <a class="navbar-brand " href="./Home"><image src="./images/book logo.png" style="width:50px;height:50px;"></a>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav ml-auto">
                <?php
                if(isset($_SESSION['loggedIn'])){ ?>
                    <li class="nav-item <?php if($PageName == 'Home') echo 'active' ?>">
                        <a class="nav-link" href="./Home"
                        ><span class="fa fa-home fa-lg"></span> خانه </a
                        >
                    </li>
                    <li class="nav-item <?php if($PageName == 'aboutus') echo 'active' ?>">
                        <a class="nav-link" href="./AboutUs"
                        ><span class="fa fa-info fa-lg"></span> درباره ما </a
                        >
                    </li>
                    <li class="nav-item <?php if($PageName == 'Dashboard') echo 'active' ?>">
                        <a class="nav-link" href="./Dashboard"
                        ><span class="fa fa-address-card fa-lg"></span> صفحه کاربری </a>
                    </li>
                    

                    <?php
                }else{
                    ?>
                    <li class="nav-item <?php if($PageName == 'Home') echo 'active' ?>">
                        <a class="nav-link" href="./Home"
                        ><span class="fa fa-home fa-lg"></span> خانه</a
                        >
                    </li>
                    
                    <li class="nav-item <?php if($PageName == 'aboutus') echo 'active' ?>">
                        <a class="nav-link" href="./AboutUs"
                        ><span class="fa fa-info fa-lg"></span> درباره ما</a
                        >
                    </li>
                    <?php
                }
                ?>
            </ul>
             <ul class="navbar-nav float-right ">
             <?php
                if(isset($_SESSION['loggedIn'])){ ?>
         <li class="nav-item ">
        <a class="nav-link " href="./logout.php">
            <span class="fa fa-sign-out fa-lg"></span> خروج </a>
        </li>
        
                    <?php
                }else{
                    ?>
         <li class="nav-item  <?php if($PageName == 'Login') echo 'active' ?>">
                        <a class="nav-link" href="./LogIn"
                        ><span class="fa fa-sign-in fa-lg"></span> ورود</a>
         </li>
         <?php
                }
                ?>
        <ul>
        </div>
       
       
        
    </div>
</nav>

<header class="jumbotron  text-right">
    <div class="container">
        <div class="row row-header">
            <div class="col-12">
                <h1>مسابقه کتابخوانی</h1>
                <br/>
                <p>کتاب را بخوانید که بیدار شوید...</p>
            </div>
        </div>
    </div>
</header>
