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
                    <?php echo $this->session->flashdata('flash_data');?>
                    <form action="<?php echo base_url(); ?>authentication/login" class="form-horizontal" method="post">
                        <div class="row text-center">
                            <img src="<?php echo base_url(); ?>assets/img/logo/logo.png" height="100px" width="100px">
                        </div>
                        <div class="clearfix"></div><br>
                        <div class="row text-center">
                            <div class="login-title">UIN SUSKA RIAU</div>
                        </div>
                        <div class="row text-center">
                            <div class="login-title">Assalammu'alaikum, silahkan masuk</div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group text-center">
                                    <div class="col-md-12">
                                        <input style="text-align: center;" name="email" type="email" class="form-control" placeholder="email" required autofocus/>
                                    </div>
                                </div>
                                <div class="form-group text-center">
                                    <div class="col-md-12">
                                        <input style="text-align: center;" name="password" type="password" class="form-control" placeholder="password" required/>
                                    </div>
                                </div>
                                <div class="clearfix"></div><br>
                                <div class="clearfix"></div><br>
                                <div class="clearfix"></div><br>
                                <div class="form-group text-center">
                                    <div class="col-md-12">
                                        <button class="btn btn-info btn-block btn-lg">masuk</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </form>
                </div>
                <div class="login-footer">
                    
                </div>
            </div>
        </div>
    </body>
</html>