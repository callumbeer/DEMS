<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>        
        <!-- META SECTION -->
        <title>DEMS | Evidence Management</title>            
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
                    <div class="login-title"><strong>Welcome</strong>, Please login</div>
                    <form class="form-horizontal" id="form1" action="<?php echo base_url() ?>admin-login" method="post">
                    <input type="hidden" name="redirect" value="<?php echo current_url(); ?>" />
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="email" class="form-control" name="email" placeholder="Username"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" class="form-control" name="password" placeholder="Password"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <a href="<?php echo base_url(); ?>user/register" class="btn btn-link btn-block">Register</a>
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-info btn-block" type="submit" form="form1">Log In</button>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="login-footer">
                    <div class="pull-left">
                        &copy; <?php echo date('Y');?> DEMS
                    </div>
					<br></br>
					<div class="pull-left">
						<strong>NOTICE</strong> - by using this website you agree to these terms. You are reminded that by making use of this site you are legally bound to follow the Data Protection Act 2018
					</div>
                </div>
            </div>
            
        </div>
        
    </body>
</html>






