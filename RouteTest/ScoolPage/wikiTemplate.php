<?php
require_once("core/header.php");
require_once("core/modals.php");
require_once("FunctionalPHP/ApiDecode.php");

$response = $_SESSION['response'];

?>

<div class="container WikiBack">
    <div class="row">
        <div class="col-md-12">
        <?php
            display(ClearUpArray(sanitize(decode($response))));
        ?>
        </div>
    </div>
</div>

<?php
ImportLoginModal();
require_once("core/footer.php");
?>


