<footer>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-6">
                        <h1 class="text-center">
                            <a href="/">
                                <img src="ScoolPage/pics/DnDLogo.png" alt="DnD Logo" width="100" height="100">
                            </a>
                            <p class="text-center">All rights reserved</p>
                            <p class="text-center">© 2021</p>
                            <p class="text-center">Tomáš Miňovský</p>
                        </h1>
                    </div>
                    <div class="col-6 footNav">
                        <ul class="nav justify-content-center">
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
    </div>
</footer>

    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function(){
        $(".array").each(function(){
            if($(this).children().length == 0){
                $(this).remove();
            }else if($(this).children().length == 1){
                $(this).children().unwrap();
            }else{
                $(this).children().unwrap();
            }
        })
    })

    $("h2").each(function(){
        if($(this).text().match(/\d+/g)){
            $(this).remove();
        }
    })

    $("h2").each(function(){
        $(this).nextUntil("h2").wrapAll("<div class='entry " + $(this).text().toLowerCase().replace(/\s/g, "_") + "'></div>");
    })
</script>
<?php
    if(isset($_SESSION['username'])){
        echo '<script>$("#MainLoginButton").replaceWith("<div class=\"dropdown\" id=\"dropdownProfile\"><button class=\"btn btn-primary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">' . $_SESSION['username'] . '</button><div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\"><a class=\"dropdown-item\" href=\"profile.php\">Profile</a><a class=\"dropdown-item\" href=\"settings.php\">Settings</a><div class=\"dropdown-divider\"></div><a class=\"dropdown-item\" href=\"/logout\">Logout</a></div></div>");</script>';
    }
    else{
        exit();
    }
?>


</html>

