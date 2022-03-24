<?php include 'header.php'; ?>
<!-- PAGE CONTENT WRAPPER -->
    <div class="page-content-wrap">
        <?php 
            if(null != ($this->uri->segment(1)))
            {
                $controller_name = $this->uri->segment(1);
            }
            include($controller_name."/".$page_name.'.php');            
        ?>                  
    </div>
    <!-- END PAGE CONTENT WRAPPER -->                                
    <!-- END PAGE CONTENT -->
<?php include 'footer.php'; ?>

        
       