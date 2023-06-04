<?php
require_once("core/header.php");
require_once("core/modals.php");
?>


<main>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Dice Roll</h1>
            </div>
        </div>
        <div class = "container">
        <div class = "row">
            <div class = "col-12">
                <form action = "FunctionalPHP/funcDiceRoll.php" method = "post">
                    <div class = "form-group">
                        <label for = "dice">Dice</label>
                        <input type = "text" class = "form-control" id = "dice" name = "dice" placeholder = "Enter dice here">
                    </div>
                    <div class = "form-group">
                        <label for = "numDice">Number of Dice</label>
                        <input type = "text" class = "form-control" id = "numDice" name = "numDice" placeholder = "Enter number of dice here">
                    </div>
                    <div class = "form-group">
                        <label for = "modifier">Modifier</label>
                        <input type = "text" class = "form-control" id = "modifier" name = "modifier" placeholder = "Enter modifier here">
                    </div>
                    <button type = "submit" class = "btn btn-primary">Roll</button>
                </form>
            </div>
        </div>

<?php
ImportLoginModal();
ImportRegisterModal();
require_once("core/footer.php");
?>