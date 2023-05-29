<?php

function ImportLoginModal(){
    echo ' <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel"
    aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="closeModal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="loginMessage"></div>
                <form action="/login" method="POST">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" placeholder="Username" id="username"
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" name="password" placeholder="Password" id="password"
                            class="form-control">
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <button type="button" class="btn btn-secondary" id="forgotPasswordButton"
                                data-toggle="modal" data-target="#forgotPasswordModal">Forgot Password</button>
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
        </div>
    </div>
</div>';
}

function ImportRegisterModal(){
    echo '<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel"
    aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Register</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="closeModal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <div id="RegisterMessage"></div>
            <form action="/register" method="POST">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" placeholder="Username" id="username"
                        class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" placeholder="Email" id="email"
                        class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" name="password" placeholder="Password" id="password"
                        class="form-control">
                </div>
                <div class="form-group">
                    <label for="password2">Confirm Password</label>
                    <input type="text" name="password2" placeholder="Confirm Password" id="password2"
                        class="form-control">
                </div>
                <div class="row">
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary" id="registerButton">Register</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>';          
}

?>