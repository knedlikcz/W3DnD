<?php
require_once("core/header.php");
require_once("core/modals.php");
?>


<main>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">D&D fandom</h1>
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/ScoolPage/pics/funnyWizard.png"
                                class="d-block w-100" alt="...">

                                <div class="carousel-caption d-none d-md-block">
                                    <h5>First slide label</h5>
                                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                    <button type="button" class="btn btn-primary" id="MainRegisterButton" data-toggle="modal"
                                        data-target="#registerModal">Register</button>
                                    </button>
                                </div>
                        </div>
                        <div class="carousel-item">
                            <img src="/ScoolPage/pics/funnyWizard.png"
                                class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Second slide label</h5>
                                    <p>Do not forget to check out the wiki!</p>
                                    <a class="btn btn-primary" href="/wiki" role="button">Wiki</a>
                                </div>
                        </div>
                        <div class="carousel-item">
                            <img src="/ScoolPage/pics/funnyWizard.png"
                                class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Third slide label</h5>
                                    <p>Give some credit to the api!</p>
                                    <a class="btn btn-primary" href="https://www.dnd5eapi.co/" role="button" target="_blank">API</a>
                                </div>
                        </div>
                    </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
            </div>
        </div>
    </div>
</main>

<?php
ImportLoginModal();
ImportRegisterModal();
require_once("core/footer.php");
?>