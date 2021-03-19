<div class="row vertical-layout page-header-light vertical-menu-collapsible vertical-dark-menu preload-transitions 1-column login-bg   blank-page blank-page" data-open="click" data-menu="vertical-dark-menu" data-col="1-column">
    <div class="col s12">
        <div class="container">
            <div id="login-page" class="row">
                <div class="col s12 m6 l4 z-depth-4 card-panel border-radius-6 login-card bg-opacity-8">
                
                    <?php if(isset($validation)):?>
                        <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
                    <?php endif;?>
                
                    <form action="/register/save" method="post" class="login-form">
                            <div class="row">
                                    <div class="input-field col s12">
                                        <h5 class="ml-4">Register</h5>
                                        <p class="ml-4">Join to our community now !</p>
                                    </div>
                            </div>
                            <div class="row margin">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix pt-2">person_outline</i>
                                    <input id="username" type="text" name="name" value="<?= set_value('name') ?>">
                                    <label for="username" class="center-align">Username</label>
                                </div>
                            </div>
                            <div class="row margin">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix pt-2">mail_outline</i>
                                    <input id="email" type="email" name="email" value="<?= set_value('email') ?>">
                                    <label for="email">Email</label>
                                </div>
                            </div>
                            <div class="row margin">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix pt-2">lock_outline</i>
                                    <input id="password" type="password"  name="password" >
                                    <label for="password">Password</label>
                                </div>
                            </div>
                            <div class="row margin">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix pt-2">lock_outline</i>
                                    <input id="password-again" type="password" name="confpassword">
                                    <label for="password-again">Password again</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <button type="submit" class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12">Register</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <p class="margin medium-small"><a href="<?php echo base_url('login') ;?>">Already have an account? Login</a></p>
                                </div>
                            </div>
                    </form>

                </div>
            </div>
        </div>
        <div class="content-overlay"></div>
    </div>
</div>
