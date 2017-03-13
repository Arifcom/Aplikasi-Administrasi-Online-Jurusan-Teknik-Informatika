<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>        
        <!-- META SECTION -->
        <title>Application</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url(); ?>assets/css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                                    
    </head>
    <body>
        <div class="login-container">
            <div class="login-box animated fadeInDown">
                <div class="login-body">
                    <div class="login-title"><strong>Welcome</strong>, Please login</div>
                    <?php echo $this->session->flashdata('flash_data');?>
                    <form action="<?php echo base_url(); ?>authentication/login" class="form-horizontal" method="post">
                        <div class="form-group">
                            <div class="col-md-12">
                                <input name="email" type="email" class="form-control" placeholder="Username" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <input name="password" type="password" class="form-control" placeholder="Password" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6">
                                <a href="#" class="btn btn-link btn-block">Forgot your password?</a>
                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-info btn-block">Log In</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="login-footer">
                    <div class="pull-left">
                        &copy; 2014 AppName
                    </div>
                    <div class="pull-right">
                        <a href="#">About</a> |
                        <a href="#">Privacy</a> |
                        <a href="#">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>