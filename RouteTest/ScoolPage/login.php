<?php
require_once("core/header.php");
require_once("core/modals.php");
?>


<main>
    <div class="container">
        <h1 class="text-center">Login</h1>
        <hr>
        <div class="row">
            <div class="col-12">
                <h3 class="text-center">Please log in before continuing</h3>
            </div>
        </div>
        <hr>
        <form action="FunctionalPHP\loginManager.php" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" placeholder="Username" id="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="text" name="password" placeholder="Password" id="password" class="form-control">
            </div>
            <div class="row">
                <div class="col-4">
                    <button type="button" class="btn btn-secondary" id="forgotPasswordButton" data-toggle="modal"
                        data-target="#forgotPasswordModal">Forgot Password</button>
                </div>
                <div class="col-4">
                    <button type="button" class="btn btn-secondary" id="registerButton" data-toggle="modal"
                        data-target="#registerModal">Register</button>
                </div>
                <div class="col-4">
                    <button type="submit" class="btn btn-primary" id="loginButton">Login</button>
                </div>
            </div>
        </form>
    </div>
</main>

<?php
ImportLoginModal();
require_once("core/footer.php");
?>