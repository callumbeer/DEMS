<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>        
        <!-- META SECTION -->
        <title>VMS</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- <link rel="icon" href="favicon.ico" type="image/x-icon" /> -->
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme"  href="<?php echo base_url() ?>assets/admin/css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                                    
    </head>
    <body>
        
        <div class="login-container">
        
            <div class="login-box animated fadeInDown">
                <div class="login-body">
                    <div class="login-title"><strong>Welcome</strong>, Please Register</div>
                    <form class="form-horizontal" id="form1" action="<?php echo base_url() ?>/user/save" method="post">
                    <input type="hidden" name="redirect" value="<?php echo current_url(); ?>" />
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="first_name" placeholder="First Name"/>
                            <span style="color: tomato !important;" class="help-block error"> <?php echo form_error('first_name');  ?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="surname" placeholder="Surname"/>
                            <span style="color: tomato !important;" class="help-block error"> <?php echo form_error('surname');  ?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="pass_number" placeholder="Pass Number"/>
                            <span style="color: tomato !important;" class="help-block error"> <?php echo form_error('pass_number');  ?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="email" class="form-control" name="email" placeholder="email"/>
                            <span style="color: tomato !important;" class="help-block error"> <?php echo form_error('email');  ?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="phone" placeholder="Phone Number"/>
                            <span style="color: tomato !important;" class="help-block error"> <?php echo form_error('phone');  ?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" class="form-control" name="password" placeholder="Password"/>
                            <span style="color: tomato !important;" class="help-block error"> <?php echo form_error('password');  ?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <!--<div class="col-md-6">
                            <a href="#" class="btn btn-link btn-block">Forgot your password?</a>
                        </div>-->
                        <div class="col-md-6">
                            <button class="btn btn-info btn-block" type="submit" form="form1">Register</button>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="login-footer">
                    <div class="pull-left">
                        &copy; <?php echo date('Y');?> VMS
                    </div>
                </div>
            </div>
            
        </div>
        
    </body>
</html>






