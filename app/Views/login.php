<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
 
    <title>Login</title>
  </head>
  <body>
    <div class="container">
        <div class="row justify-content-md-center">
 
            <div class="col-6">
                <h1>Sign In</h1>
                <?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
                <?php endif;?>

                <form action="/login/auth" method="post">
                    <div class="mb-3">
                        <label for="InputForEmail" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="InputForEmail" value="<?= set_value('email') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="InputForPassword" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="InputForPassword">
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>

        <div class="row">
            <div class="col s12">
                <div class="container">
                    <div id="login-page" class="row">
                        <div class="col s12 m6 l4 z-depth-4 card-panel border-radius-6 login-card bg-opacity-8">
                            <form action="/login/auth" method="post">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <h5 class="ml-4">Sign in</h5>
                                    </div>
                                </div>
                                <div class="row margin">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix pt-2">person_outline</i>
                                        <input type="email" name="email" class="form-control" id="InputForEmail" value="<?= set_value('email') ?>">
                                        <label for="username" class="center-align">Email address</label>
                                    </div>
                                </div>
                                <div class="row margin">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix pt-2">lock_outline</i>
                                        <input id="password" type="password">
                                        <label for="password">Password</label>
                                    </div>
                                </div>
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
                                <div class="row">
                                    <div class="input-field col s12">
                                        <a href="index.html" class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12">Login</a>
                                    </div>
                                </div>
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









            </div>
             
        </div>
    </div>
     
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  </body>
</html>