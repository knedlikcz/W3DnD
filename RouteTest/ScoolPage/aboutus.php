<?php
require_once("core/header.php");
require_once("core/modals.php");
?>


<main>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">About Us</h1>
            </div>
        </div>
    </div>
</main>

<?php
ImportLoginModal();
ImportRegisterModal();
require_once("core/footer.php");
?>