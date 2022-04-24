        <!-- START BREADCRUMB -->
        <ul class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>admin">Home</a></li>
            <li><a href="#"><?php if (isset($breadcrumb_name))echo $breadcrumb_name; ?></a></li>
        </ul>
        <!-- END BREADCRUMB -->
        <!-- PAGE CONTENT WRAPPER -->
        <div class="page-content-wrap">
            <div class="row">
                <div class="col-md-12">
                    <form class="form-horizontal" action="<?php echo base_url();?>user/add_user" method="post" id="add_adminUser_form" enctype="multipart/form-data" >
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><strong>Add</strong> User</h3>
                                <ul class="panel-controls">
                                    <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                </ul>
                            </div>
                            <div class="panel-body">                                            
                            <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Badge Number</label>
                                    <div class="col-md-6 col-xs-12">       
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                            <input type="text" class="form-control" name="badge_number" />
                                        </div> 
                                        <span style="color: tomato !important;" class="help-block error"> <?php echo form_error('badge_number');  ?></span>                                           
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">First name</label>
                                    <div class="col-md-6 col-xs-12">       
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                            <input type="text" class="form-control" name="first_name" />
                                        </div> 
                                        <span style="color: tomato !important;" class="help-block error"> <?php echo form_error('first_name');  ?></span>                                             
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Surname</label>
                                    <div class="col-md-6 col-xs-12">       
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                            <input type="text" class="form-control" name="surname" />
                                        </div>
                                        <span style="color: tomato !important;" class="help-block error"> <?php echo form_error('surname');  ?></span>                                              
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Email</label>
                                    <div class="col-md-6 col-xs-12">       
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                            <input type="email" class="form-control" name="email" />
                                        </div> 
                                        <span style="color: tomato !important;" class="help-block error"> <?php echo form_error('email');  ?></span>                                             
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Phone</label>
                                    <div class="col-md-6 col-xs-12">       
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                            <input type="text" class="form-control" name="phone_number" />
                                        </div> 
                                        <span style="color: tomato !important;" class="help-block error"> <?php echo form_error('phone_number');  ?></span>                                             
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Password</label>
                                    <div class="col-md-6 col-xs-12">       
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                            <input type="password" class="form-control" name="password" />
                                        </div> 
                                        <span style="color: tomato !important;" class="help-block error"> <?php echo form_error('password');  ?></span>                                             
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Account Type</label>
                                    <div class="col-md-6 col-xs-12">                                
                                        <select class="form-control select" name="level">
                                            <option value="normal">Normal</option>
                                            <option value="admin">Admin</option>
                                        </select>
                                    </div>
                                </div>
                                <span style="color: tomato !important;" class="help-block error"> <?php echo form_error('account_type');  ?></span>  
                                
                            </div>
                            <div class="panel-footer">
                                <button class="btn btn-default" >Clear Form</button>
                                <button class="btn btn-primary pull-right" type="submit" name="">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>                    
        </div>
        <!-- END PAGE CONTENT WRAPPER -->                                                
         





