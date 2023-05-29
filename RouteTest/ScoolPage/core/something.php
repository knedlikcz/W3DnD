<?php
/*
function ImportHeader(){
    echo '<header>
            <div class="container">
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-4">
                        <div class="row">
                            <div class="col-2"></div>
                            <div class="col-8">
                                <img src="images/logo.png" alt="logo">
                            </div>
                            <div class="col-2"></div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="row">
                            <div class="col-2"></div>
                            <div class="col-8">
                                <button type="button" class="btn btn-primary" id="MainLoginButton" data-toggle="modal" data-target="#loginModal">Login</button>
                            </div>
                            <div class="col-2"></div>
                        </div>
                    </div>
                </div>
                <!-- nav bar with 5 pages -->
                <div classk="row">
                    <nav>
                        <ul>
                            <li><a href="index.php" id="home">Home</a></li>
                            <li><a href="aboutus.php" id="home">About Us</a></li>
                            <li><a href="products.php" id="home">Products</a></li>
                            <li><a href="contactus.php" id="home">Contact Us</a></li>
                            <li><a href="faq.php" id="home">FAQ</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>';
        SetNavButtonActive(GetCurrentPage());
}
*/

function ImportHead(){
    /*
    echo '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link href="css/style.css" rel="stylesheet">
        <title>Document</title>
    </head>';
    */
    /* 
        make it so a session is carried over multiple pages, and store the username in the session, 
    */
    session_start();
    echo '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link href="css/style.css" rel="stylesheet">
        <title>Document</title>
    </head>';
}

function ImportHeader(){
    echo '<header>
    <div class="container">
        <div class="row">
            <div class="col-4">
                
            </div>
            <div class="col-4">
                <h1 class="text-center">Logo</h1>
            </div>
            <div class="col-4">
                <button type="button" class="btn btn-primary" id="MainLoginButton" data-toggle="modal" data-target="#loginModal">Login</button>
                </button>
            </div>
        </div>
    </div>
</header>
<nav>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link" id="index-page" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li>
                        <div class="vl"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="wiki-page" href="wiki.php">Wiki</a>
                    </li>
                    <li>
                        <div class="vl"></div>
                        </li>
                    <li class="nav-item">
                        <a class="nav-link" id="blog-page" href="blog.php">Blog</a>
                    </li>
                    <li>
                        <div class="vl"></div>
                        </li>
                    <li class="nav-item">
                        <a class="nav-link" id="aboutus-page" href="aboutus.php">About Us</a>
                    </li>
                    <li>
                        <div class="vl"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="faq-page" href="faq.php">FAQ</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>';
SetNavButtonActive(GetCurrentPage());
}

function GetCurrentPage(){
    $page = $_SERVER['PHP_SELF'];
    $page = explode("/", $page);
    $page = end($page);
    return $page;
}

function SetNavButtonActive($page){
    $currentPage = GetCurrentPage();
    if($currentPage == "index.php"){
        echo '<script>document.getElementById("index-page").classList.add("active");</script>';
    }
    else if($currentPage == "wiki.php"){
        echo '<script>document.getElementById("wiki-page").classList.add("active");</script>';
    }
    else if($currentPage == "blog.php"){
        echo '<script>document.getElementById("blog-page").classList.add("active");</script>';
    }
    else if($currentPage == "aboutus.php"){
        echo '<script>document.getElementById("aboutus-page").classList.add("active");</script>';
    }
    else if($currentPage == "faq.php"){
        echo '<script>document.getElementById("faq-page").classList.add("active");</script>';
    }
    else{
        echo '<script>document.getElementById("index-page").classList.add("active");</script>';
    }
}

function CheckLogin(){
    if(isset($_SESSION['username'])){
    }
    else{
        header("Location: login.php");
        exit();
    }
}
?>