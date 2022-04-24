<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="<?php echo base_url(); ?>admin">Home</a></li>
    <li><a href="#"><?php echo $breadcrumb_name ?></a></li>
</ul>
<!-- END BREADCRUMB -->

<?php $case_info = $this->DemsModel->get_info_by_id(null,'case','case_no',$case_id,null,null,null,null);                                          
            if(null == ($case_info)){
                show_404();
            } ?>

  <!-- START CONTENT FRAME -->
  <div class="content-frame">   
                    
                    <!-- START CONTENT FRAME TOP -->
                    <div class="content-frame-top">                        
                        <div class="page-title">                    
                            <h2><span class="fa fa-image"></span> Case Materials</h2>
                        </div>                                                              
                    </div>

                    <!-- START CONTENT FRAME RIGHT -->
                    <div class="content-frame-right">                                             
                        <h4>Case Details:</h4>
                        <div class="list-group border-bottom push-down-20">
                            <a href="#" class="list-group-item active">Case Details</a>
                            <a href="#" class="list-group-item">Case No <span class="badge badge-success"><?=$case_info->case_no?></span></a>
                            <a href="#" class="list-group-item">Title <span class="badge badge-warning"><?=$case_info->title?></span></a>
                            <a href="#" class="list-group-item">Case Type <span class="badge badge-info"><?=$case_info->case_type?></span></a>
                            <a href="#" class="list-group-item">Date Created <span class="badge badge-danger"><?=$case_info->date_created?></span></a>
                        </div>                                                
                        <h4>Description:</h4>
                        <p><?=$case_info->description?></p>
                    </div>
                    <!-- END CONTENT FRAME RIGHT -->
                    
                    <!-- START CONTENT FRAME BODY -->
                    <div class="content-frame-body content-frame-body-left">
                        
                        <div class="gallery" id="links">
                        <?php $images_array = $this->DemsModel->getImages($case_id);

                              foreach($images_array as $key=>$item):?>
                            <a class="gallery-item" href="<?php echo base_url().'assets/images/cases/'.$item['file_name'] ?>" title="Case Image" data-gallery>
                                <div class="image">                              
                                    <img src="<?php echo base_url().'assets/images/cases/'.$item['file_name'] ?>" alt="<?=$item['file_name']?>"/>                                                                                                          
                                </div>
                                <div class="meta">
                                    <strong><?=$item['file_name']?>"</strong>
                                    <!-- <span>Description</span> -->
                                </div>                                
                            </a>                           
                             <?php endforeach; ?>
                        </div>

                        <div>
                        <?php $case_info = $this->DemsModel->getVideo($case_id);                                        
                            if(null == ($case_info)){
                                show_404();
                            } ?>
                        <video width="900" height="600" controls>
                            <source src="<?php echo base_url().'assets/videos/'.$case_info->file_name?>" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        </div>  
                             
                        <!-- <ul class="pagination pagination-sm pull-right push-down-20 push-up-20">
                            <li class="disabled"><a href="#">«</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>                                    
                            <li><a href="#">»</a></li>
                        </ul> -->
                    </div>       
                    <!-- END CONTENT FRAME BODY -->
                </div>               
                <!-- END CONTENT FRAME -->

                 <!-- BLUEIMP GALLERY -->
        <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
            <div class="slides"></div>
            <h3 class="title"></h3>
            <a class="prev">‹</a>
            <a class="next">›</a>
            <a class="close">×</a>
            <a class="play-pause"></a>
            <ol class="indicator"></ol>
        </div>      
        <!-- END BLUEIMP GALLERY -->