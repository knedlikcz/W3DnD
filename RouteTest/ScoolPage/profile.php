<?php
require_once("core/header.php");
require_once("core/modals.php");
require_once("core/something.php");
CheckLogin();
?>

<main>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Profile</h1>
            </div>
        </div>
    </div>
</main>

<?php
ImportLoginModal();
require_once("core/footer.php");
?>