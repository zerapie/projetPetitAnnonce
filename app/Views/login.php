<div class="row vertical-layout page-header-light vertical-menu-collapsible vertical-dark-menu preload-transitions 1-column login-bg   blank-page blank-page" data-open="click" data-menu="vertical-dark-menu" data-col="1-column">
    <div class="col s12">
        <div class="container">
            <div id="login-page" class="row">
                <div class="col s12 m6 l4 z-depth-4 card-panel border-radius-6 login-card bg-opacity-8">

                <?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
                <?php endif;?>

                <form action="/login/auth" method="post" class="login-form">
                    <div class="row">
                                    <div class="input-field col s12">
                                        <h5 class="ml-4">Sign in</h5>
                                    </div>
                    </div>
                    <!-- EMAIL -->
                    <div class="row margin">
                        <div class="input-field col s12">
                            <i class="material-icons prefix pt-2">person_outline</i>
                            <input type="email" name="email" class="form-control" id="InputForEmail" value="<?= set_value('email') ?>">
                            <label for="username" class="center-align">Email address</label>
                        </div>
                    </div>
                    <!-- PASSWORD -->
                    <div class="row margin">
                        <div class="input-field col s12">
                            <i class="material-icons prefix pt-2">lock_outline</i>
                            <input id="password" name="password" type="password">
                            <label for="password">Password</label>
                        </div>
                    </div>
                    <!-- # -->
                    <div class="row">
                                    <div class="col s12 m12 l12 ml-2 mt-1">
                                        <p>
                                            <label>
                                                <input type="checkbox" />
                                                <span>Remember Me</span>
                                            </label>
                                        </p>
                                    </div>
                    </div>
                    <!-- button -->
                    <div class="row">
                        <div class="input-field col s12">
                            <button type="submit" class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12">Login</button>
                        </div>
                    </div>
                    <!-- lien -->
                    <div class="row">
                            <div class="input-field col s6 m6 l6">
                                <p class="margin medium-small"><a href="<?php echo base_url('register') ;?>">Register Now!</a></p>
                            </div>
                            <div class="input-field col s6 m6 l6">
                                <p class="margin right-align medium-small"><a href="user-forgot-password.html">Forgot password ?</a></p>
                            </div>
                    </div>
                </form>
                
                </div>
            </div>
        </div>
        <div class="content-overlay"></div>
    </div>
</div>
