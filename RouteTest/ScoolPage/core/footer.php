<footer>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="text-center">Footer</p>
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

