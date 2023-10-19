<!doctype html>
<html lang="en" class="no-focus">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <title>Sign In</title>

        <meta name="description" content="M Fikri - Membantu Anda menjadi Web Developer Profesional">
        <meta name="author" content="M Fikri Setiadi">
        <meta name="robots" content="noindex, nofollow">

        <link rel="shortcut icon" href="<?php echo base_url().'asset/images/favicon.png'?>">
        <link rel="stylesheet" id="css-main" href="<?php echo base_url().'asset/css/codebase.min.css'?>">

        <style>
            .btn-log {
                background-color: lightblue;
            }
            .btn-log:hover {
                background-color: #20a2de;
            }
        </style>

    </head>
    <body>
        <div id="page-container" class="main-content-boxed">
            <main id="main-container">
                <div class="bg-image" style="background-image: url('asset/img/compta.jpg');">
                    <div class="row mx-0 bg-black-op">
                        <div class="hero-static col-md-6 col-xl-8 d-none d-md-flex align-items-md-end">
                            <div class="p-30 invisible" data-toggle="appear">
                                <p class="font-size-h3 font-w600 text-white">
                                    Welcome
                                </p>
                                <p class="font-italic text-white-op">
                                    Copyright &copy; <span class="js-year-copy"><?php echo date('Y');?></span>
                                </p>
                            </div>
                        </div>
                        <div class="hero-static col-md-6 col-xl-4 d-flex align-items-center bg-white invisible" data-toggle="appear" data-class="animated fadeInRight">
                            <div class="content content-full">
                                <!-- Header -->
                                <div class="px-30 py-10">
                                    <a class="link-effect font-w700" href="<?php echo base_url();?>">
                                        <i class=""></i>
                                    </a> 
                                    <h1 class="h3 font-w700 mt-30 mb-10">Sign In to Your Account</h1>
                                    <h2 class="h5 font-w400 text-muted mb-0">Please sign in</h2>
                                </div>
                                <!-- END Header -->
                                <form class="js-validation-signin px-30" action="<?php echo base_url().'clogin/verification'?>/<?php echo $idservice; ?>" method="post">
                                    
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="form-material floating">
                                                <input type="text" class="form-control" id="login-username" name="email" required>
                                                <label for="login-username">Username</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="form-material floating">
                                                <input type="password" class="form-control" id="login-password"  name="mdp" required>
                                                <label for="login-password">Password</label>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-sm btn-hero btn-log">
                                            <i class="si si-login mr-10"></i> Sign In
                                        </button>
                                        
                                    </div>
                                </form>
                                <br><br><br><br><br><br><br><br><br>
                                <form action="<?php echo base_url().'cpersonne'?>" method="post">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-sm btn-hero btn-log">
                                            </i> New account
                                        </button>
                                    </div>
                                </form>
                                <!-- END Sign In Form -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->


        <script src="<?php echo base_url().'asset/js/core/jquery.min.js'?>"></script>
        <script src="<?php echo base_url().'asset/js/core/popper.min.js'?>"></script>
        <script src="<?php echo base_url().'asset/js/core/bootstrap.min.js'?>"></script>
        <script src="<?php echo base_url().'asset/js/core/jquery.slimscroll.min.js'?>"></script>
        <script src="<?php echo base_url().'asset/js/core/jquery.scrollLock.min.js'?>"></script>
        <script src="<?php echo base_url().'asset/js/core/jquery.appear.min.js'?>"></script>
        <script src="<?php echo base_url().'asset/js/core/jquery.countTo.min.js'?>"></script>
        <script src="<?php echo base_url().'asset/js/core/js.cookie.min.js'?>"></script>
        <script src="<?php echo base_url().'asset/js/codebase.js'?>"></script>

        <script src="<?php echo base_url().'asset/js/plugins/jquery-validation/jquery.validate.min.js'?>"></script>

        <script src="<?php echo base_url().'asset/js/pages/op_auth_signin.js'?>"></script>
    </body>
</html>