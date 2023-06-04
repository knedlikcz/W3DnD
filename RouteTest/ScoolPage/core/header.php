<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.PageContainer {
    display: grid;
    grid-template-rows: 100px 50px 1fr;
    grid-template-columns: 1fr;
    grid-template-areas:
        "header"
        "nav"
        "main"
        "footer";
    height: 100vh;
}

.WikiBack{
    background-color: #EBD5B3;
    border-radius: 25px;
    margin-top: 52px;
    margin-bottom: 10px;
}

body{
    background-image: url("ScoolPage/pics/GrandValleyCastle.png");
    /*make it so when the page is scrolled down the background image stays in place
    */
    background-attachment: fixed;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    background-color: #EBD5B3;
}

html {
    scroll-behavior: smooth;
}

header {
    grid-area: header;
    background-color: #4c918e;
    height: 125px;
}

header div {
    margin-top: 5px;
}

header .container .row{
    height: 100%;
}

nav {
    grid-area: nav;
    background-color: #7DB9B6;
    margin-top: 25px;
    margin-bottom: -40px;
    border-bottom-left-radius: 25px;
    border-bottom-right-radius: 25px;
}
main {
    grid-area: main;
    background-color: #F2D7AC;
    border-radius: 25px;
    margin-top: 52px;
    margin-bottom: 10px;
    margin-left: 10vw;
    margin-right: 10vw;
    min-height: 100vh;
}
footer {
    grid-area: footer;
    background-color: #7DB9B6;
    border-top-left-radius: 25px;
    border-top-right-radius: 25px;
    height: 320px;

}

footer div {
    margin-top: 5px;
}

footer .container .row{
    height: 100%;
}

.footNav{
    display: flex;
    align-items: center;

}

.footNav ul{
    display: flex;
    justify-content: center;
}

.footNav li{
    display: flex;
    align-items: center;
}

.footNav a{
    color: #212529;
}

.footNav .vl{
    border-left: 1px solid silver;
    height: 100%;
    margin-left: 0.5rem;
    margin-right: 0.5rem;
}

.footNav .nav-item{
    margin-left: 0.5rem;
    margin-right: 0.5rem;
}

.footNav .nav-item:hover{
    background-color: #d0d1d2;
    color: #212529;
    border-radius: .25rem;
}

hr {
    border: 3px solid #f1f1f1;
    margin: 0;
}

a{
    color: #212529;
}

.nav{
    margin-top: 10px;
    font-size: 20px;
}

.vl{
    border-left: 1px solid silver;
    height: 100%;
    margin-left: 50%;
}

#MainLoginButton {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
#dropdownProfile {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.active{
    background-color: #d0d1d2;
    color: #212529;
    border-radius: .25rem;
    margin-left: 0.5rem;
    margin-right: 0.5rem;
}
.dropdown-item{
    width: 100%;
    padding: .25rem 1.5rem;
    clear: both;
    font-weight: 400;
    color: #212529;
    text-align: inherit;
    white-space: nowrap;
    background-color: transparent;
    border: 0;
}

.array {
        margin: 10px;
        padding: 10px;
    }
    .entry {
        margin: 10px;
        padding: 10px;
    }
    .url {
        margin: 10px;
        padding: 10px;
    }

    .components{
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
    }

    .components > .entry{
        border: none;
        margin: 0;
        padding: 0;
    }

    .damage > .entry{
        display: grid;
        grid-template-columns: 1fr 1fr;
    }

    .damage_type{
        text-align: center;
    }

    .damage_at_slot_level{
        dispaly: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
    }

    .damage_at_slot_level > .entry{
        border: none;
        margin: 0;
        padding: 0;
    }
        </style>
    <title>Document</title>
</head>

<body>
    <div class="PageContainer">
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-4">

                    </div>
                    <div class="col-4">
                        <h1 class="text-center">
                            <a href="/">
                                <img src="ScoolPage/pics/DnDLogo.png" alt="DnD Logo" width="100" height="100">
                            </a>
                        </h1>
                    </div>
                    <div class="col-4">
                        <button type="button" class="btn btn-primary" id="MainLoginButton" data-toggle="modal"
                            data-target="#loginModal">Login</button>
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
                                <a class="nav-link" id="index-page" aria-current="page" href="/">Home</a>
                            </li>
                            <li>
                                <div class="vl"></div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="wiki-page" href="/wiki">Wiki</a>
                            </li>
                            <li>
                                <div class="vl"></div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="blog-page" href="/blog">Blog</a>
                            </li>
                            <li>
                                <div class="vl"></div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="aboutus-page" href="/aboutus">About Us</a>
                            </li>
                            <li>
                                <div class="vl"></div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="faq-page" href="/faq">FAQ</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>