
        <!-- START BREADCRUMB -->
        <ul class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>admin">Home</a></li>
            <li><a href="#"><?php echo $breadcrumb_name ?></a></li>
        </ul>
        <!-- END BREADCRUMB -->
        <!-- PAGE CONTENT WRAPPER -->
        <div class="page-content-wrap">
            <!-- START RESPONSIVE TABLES -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">

                                <div class="panel-heading">
                                    <h3 class="panel-title">View User</h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" onClick="window.location='<?php echo base_url(); ?>user/add_user'" class="panel-remove"><span class="fa fa-plus"></span></a></li>
                                    </ul>
                                </div>

                                <div class="panel-body panel-body-table">

                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-actions">
                                            <thead>
                                                <tr>
                                                     <th>S.no.</th>
                                                <th width="100">First Name</th>
                                                   <!--  <th>Badge Number</th> -->
                                                    <th>Surname</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Account Type</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody> 
                                                <?php
												 $user_info = $this->usersModel->get_users();
                                                  $i=1;
                                            foreach ($user_info as $item) { ?>                                      
                                                <tr>
                                                     <td class="text-center"><?php echo $i ?></td>
                                                    <td class="text-center"><?php echo $item['first_name'] ?></td>
                                                   <!--  <td class="text-center"><?php echo $item['badge_number'] ?></td> -->
                                                    <td class="text-center"><?php echo $item['surname'] ?></td>
                                                    <td class="text-center"><?php echo $item['email'] ?></td>
                                                    <td class="text-center"><?php echo $item['phone_number'] ?></td>
                                                    <td class="text-center"><?php echo $item['account_type'] == 'normal' ? 'Normal': 'Admin' ?></td>
                                                    <td>
                                                        <a href="<?php echo base_url() ?>user/edit_user/<?php echo $item['id'] ?>"><button class="btn btn-default btn-rounded btn-sm"><span class="fa fa-pencil"></span></button></a>
                                                        <button class="btn btn-danger btn-rounded btn-sm" onClick="delete_row('<?php echo $item['id']; ?>','user/delete_user')"><span class="fa fa-times"></span></button>
                                                    </td>
                                                </tr>
                                                <?php  $i++; } ?>
                                            </tbody>
                                        </table>
                                    </div>                                

                                </div>
                            </div>                                                

                        </div>
                    </div>
            <!-- END RESPONSIVE TABLES -->                  
        </div>
        <!-- END PAGE CONTENT WRAPPER -->                                                
              
            <!-- END PAGE CONTENT -->






