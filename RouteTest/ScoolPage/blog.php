<?php
require_once("core/header.php");
require_once("core/modals.php");
?>


<main>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Blog</h1>
            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="PostContainer array">
                                            <div class="Post">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <h2 class="text-center">Blog Post Title</h2>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <p class="text-center">Author: <a href="#">Author</a></p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <p class="text-center">Category: <a href="#">Category</a></p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <p class="text-center">Date: <a href="#">Date</a></p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <p class="text-center">Tags: <a href="#">Tags</a></p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <p class="text-center">Comments: <a href="#">Comments</a></p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <p class="text-center">Content</p>
                                                    </div>
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