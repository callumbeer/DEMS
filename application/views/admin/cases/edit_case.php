        <!-- START BREADCRUMB -->
        <ul class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>admin">Home</a></li>
            <li><a href="#"><?php if (isset($breadcrumb_name))echo $breadcrumb_name; ?></a></li>
        </ul>
        <!-- END BREADCRUMB -->
        <style type="text/css">
            #category{
                height: 100%;
                width: 100%;
                overflow: scroll;
            }
            #category ul{
                padding-left: 0px !important;
            }
            #category ul li{
                list-style: none;
            }
           #category ul li input {
                margin-right: 10px;
                margin-top: 5px;
            }
            .fileinput-preview.fileinput-exists.thumbnail img{
                max-width: 115px;
                max-height: 115px;
                width: 100%; 
                height: 100%;
            }
            .btn.btn-sm, .btn-group-sm > .btn {
                padding: 2px 8px !important;
            }
            .alt_text{
                margin-top: 10px;
            }
        </style>
        <!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
    <div class="row">
        <div class="col-md-12">
        <?php 
            $case_info = $this->DemsModel->get_info_by_id(null,'case','case_no',$case_id,null,null,null,null);                                          
            if(null == ($case_info)){
                show_404();
            }
        ?>
            <form class="form-horizontal" action="<?php echo site_url();?>cases/updatecase/<?php echo $case_id ?>" method="post" id="case_form" enctype="multipart/form-data" >
                <div class="panel panel-default ">
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong>Edit</strong> Case</h3>
                        <ul class="panel-controls">
                            <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                        </ul>
                    </div>
                    <div class="tabs">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="active">
                                <a href="#tab_1" role="tab" data-toggle="tab">Case Details</a>
                            </li>
                            <li>
                                <a href="#tab_2" role="tab" data-toggle="tab">Case Images</a>
                            </li>
                            <li>
                                <a href="#tab_3" role="tab" data-toggle="tab">Case Video</a>
                            </li>
                        </ul>
                    </div>
                    <div class="panel-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_1">
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Case No.</label>
                                    <div class="col-md-6 col-xs-12">     
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                            <input type="text" required name="case_no" class="form-control" value="<?php if(null !=(set_value('title')))
                                              {
                                                echo set_value('case_no');
                                              }
                                              else{
                                                echo $case_info->case_no;  
                                              }
                                              ?>" disabled/>
                                        </div> 
                                        <span style="color: tomato !important;" class="help-block error"> <?php echo form_error('case_no'); ?></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Case Title</label>
                                    <div class="col-md-6 col-xs-12">     
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                            <input type="text" required name="title" class="form-control" value="<?php if(null !=(set_value('title')))
                                              {
                                                echo set_value('title');
                                              }
                                              else{
                                                echo $case_info->title;  
                                              }
                                              ?>"/>
                                        </div> 
                                        <span style="color: tomato !important;" class="help-block error"> <?php echo form_error('title'); ?></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Description</label>
                                    <div class="col-md-6 col-xs-12">       
                                        <div class="input-group">
                                            <textarea class="summernote" name="description" id="description" >
                                            	<?php echo (null != (set_value('description'))?set_value('description'):$case_info->description); ?>
                                            </textarea>
                                        </div>                                            
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Case Type</label>
                                    <div class="col-md-6 col-xs-12">     
                                        <select class="form-control" name="case_type" >
                                            <option value="Theft" <?php if($case_info->case_type == "Theft") echo "selected=''";?>>Theft</option>
                                            <option value="Robbery" <?php if($case_info->case_type == "Robbery") echo "selected=''";?>>Robbery</option>
                                            <option value="Murder" <?php if($case_info->case_type == "Murder") echo "selected=''";?>>Murder</option>
                                        </select>
                                        <span style="color: tomato !important;" class="help-block error"> <?php echo form_error('case_type'); ?></span>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <label class="col-md-3 col-xs-12 control-label">Date Created</label>
                                    <div class="col-md-6 col-xs-12">       
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                            <input type="number" class="form-control" name="date_created" value="<?php if(null !=(set_value('date_created')))
                                              {
                                                echo set_value('date_created');
                                              }
                                              else{
                                                echo $case_info->date_created;  
                                              }
                                              ?>"/>
                                        </div>
                                        <span style="color: tomato !important;" class="help-block error"><?php echo form_error('date_created'); ?></span>                                            
                                    </div>
                                </div>
                            </div> 
                            <div class="tab-pane" id="tab_2">
                                <div class="form-group">
                                    <div id="master" style="display:none">
                                        <div class="col-sm-4 rows" id="row">
                                            <div class="fileinput fileinput-exists" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail" style="width: 250px; height: 200px;" data-trigger="fileinput">
                                                    <img src="<?php echo base_url()?>assets/images/default/default_icon.png" alt="Default Image">
                                                </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 250px; max-height: 200px">
                                                    <img src="<?php echo base_url() ?>assets/images/default/default_icon.png" alt="Default Image">
                                                </div>
                                                <div>
                                                    <span class="btn btn-primary btn-sm btn-file">
                                                        <span class="fileinput-new">Select image</span>
                                                        <span class="fileinput-exists">Change</span>
                                                        <input type="file" disabled="disabled" name="case_image[]" accept="image/*">
                                                    </span>
                                                    <a href="#" onclick="$(this).parent().parent().parent().remove()" class="btn btn-warning btn-sm fileinput-exists" >Remove</a>
                                                    <input name="case_image_hidden_input[]" type="hidden" disabled="disabled" value="default_icon.png" />
                                                </div>
                                            </div>
                                        </div><!-- fileinput-new -->
                                    </div><!-- master -->
                                </div>
                                <div class="form-group">
                                    <div class="row" id="wrapper"> <!-- first row -->
                                        <div class="col-sm-4 rows" id="row1">
                                            <div class="fileinput fileinput-exists" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail" style="width: 250px; height: 200px;" data-trigger="fileinput">
                                                    <img src="<?php echo base_url() ?>assets/images/default/default_icon.png" alt="Default Image">
                                                </div>
                                                <?php $images_array = $this->DemsModel->getImages($case_id); ?>
                                               
                                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 250px; max-height: 200px">
                                                    <img src="<?php echo base_url() ?>assets/images/cases/<?php echo $images_array[0]['file_name']; ?>" alt="Default Image">
                                                </div>
                                                <div>
                                                    <span class="btn btn-primary btn-sm btn-file">
                                                        <span class="fileinput-new">Select image</span>
                                                        <span class="fileinput-exists">Change</span>
                                                        <input type="file" name="case_image[]" accept="image/*">
                                                    </span>
                                                </div>
                                                <input name="case_image_hidden_input[]" type="hidden" value="<?php echo $images_array[0]['file_name']; ?>" />
                                            </div>
                                        </div><!-- fileinput-new -->
                                        <?php 
                                        $counter = 2;
                                        foreach($images_array as $key=>$item):
                                           
                                            if($key == 0){
                                                continue;   
                                            }
                                    ?>
                                        <div class="col-sm-4 rows" id="row<?php echo $counter ?>">
                                            <div class="fileinput fileinput-exists" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail" style="width: 100px; height: 100px;" data-trigger="fileinput">
                                                    <img src="<?php echo base_url()?>assets/images/default/default_icon.png" alt="Default Image">
                                                </div>

                                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px">
                                                    <img src="<?php echo base_url().'assets/images/case/'.$item['file_name'] ?>" alt="Default Image">
                                                </div>
                                                <div>
                                                    <span class="btn btn-primary btn-sm btn-file">
                                                        <span class="fileinput-new">Select image</span>
                                                        <span class="fileinput-exists">Change</span>
                                                        <input type="file" name="case_image[]" accept="image/*">
                                                    </span>
                                                    <input name="case_image_hidden_input[]" type="hidden" value="<?php echo $item['file_name'] ?>" />
                                                    <a href="#" onclick="$(this).parent().parent().parent().remove()" class="btn btn-warning btn-sm fileinput-exists" >Remove</a>
                                        		</div>
                                            </div>
                                        </div><!-- fileinput-new -->
                                    <?php $counter++; endforeach; ?>
                                    </div><!-- first row  end-->
                                    <a href="#" class="btn btn-success btn-sm" id="add_more">Add More</a>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_3">
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Video</label>
                                    <div class="col-md-6 col-xs-12">     
                                        <div class="input-group">
                                            <input type="file" class="fileinput btn-primary" name="video" id="filename" title="Browse file"/>
                                        </div> 
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <button class="btn btn-default" >Clear Form</button>
                        <button class="btn btn-primary pull-right" type="button" name="" id="submt">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>                    
</div>




