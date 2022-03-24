 <!-- START PAGE SIDEBAR -->
<div class="page-sidebar">
    <!-- START X-NAVIGATION -->
    <ul class="x-navigation">
        <li class="xn-logo">
            <a href="<?php echo base_url() ?>admin">DEMS</a>
            <a href="#" class="x-navigation-control"></a>
        </li>
        <!-- <li class="xn-profile">
            <div class="profile">
               
              
            </div>                                                                        
        </li> -->
        <!-- <li class="active">
            <a href="<?php echo base_url() ?>admin"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>                        
        </li> -->
       
                       
        <li class="xn-openable">
            <a href="#"><span class="fa fa-table"></span> <span class="xn-text">Cases</span></a>
            <ul>                            
                <li>
                    <a href="<?php echo base_url(); ?>cases/view_cases">
                        <span class="fa fa-align-justify"></span> View Cases
                    </a>
                </li>
            </ul>
        </li>
        <?php if($this->session->userdata('isAdmin') == true){ ?>
        <li class="xn-openable">
            <a href="#"><span class="fa fa-users"></span> <span class="xn-text">Users</span></a>
            <ul>                            
                <li><a href="<?php echo base_url() ?>user/view_user"><span class="fa fa-users"></span> View Users</a></li>   
            </ul>
        </li>
        <?php } ?>
        
    </ul>
    <!-- END X-NAVIGATION -->
</div>
<!-- END PAGE SIDEBAR -->