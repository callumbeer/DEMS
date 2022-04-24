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
                    <h3 class="panel-title"><strong>View</strong> Cases</h3>
                    <ul class="panel-controls">
                        <li><a href="#" onClick="window.location='<?php echo base_url(); ?>cases/add_form'" class="panel-remove"><span class="fa fa-plus"></span></a></li>
                    </ul>
                </div>
                <div class="panel-body panel-body-table">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-actions">
                            <thead>
                                <tr>
                                    <th>Case No#</th>  
                                    <th>Title</th>
                                    <th>Case Type</th>
									<th>Date Created</th>
									<th>Created By</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>  
                                <?php
                                if(!empty($searches))
                                    $case_array = $searches;
                                else if($isSearch == FALSE)
                                    $case_array = $this->DemsModel->get_records(null,'case',null,null, null, null,null,null,null);
                                $i=1;
                                if(!empty($case_array)){
                                    foreach($case_array as $case_item):?>
                                    	                                          
                                    <td class="text-center"><?php echo $case_item['case_no']; ?></td>
                                    <td class="text-center"><?php echo $case_item['title']; ?></td>
                                    <td class="text-center"><?php echo $case_item['case_type']; ?></td>
                                    <td class="text-center"><?php echo $case_item['date_created']; ?></td>
									<td class="text-center"><?php echo $case_item['createdBy']; ?></td>
                                    <td class="text-center">
                                        <a href="<?php echo base_url() ?>cases/case_details/<?php echo $case_item['case_no'] ?>">
                                            <button class="btn btn-default btn-rounded btn-sm">
                                                <span class="fa fa-eye"></span>
                                            </button>
                                        </a>
                                        <a href="<?php echo base_url() ?>cases/caseeditform/<?php echo $case_item['case_no'] ?>">
                                            <button class="btn btn-default btn-rounded btn-sm">
                                                <span class="fa fa-pencil"></span>
                                            </button>
                                        </a>
                                        <!--<button class="btn btn-danger btn-rounded btn-sm" onClick="delete_row('<?php echo $case_item['case_no']; ?>','cases/delete_case');"><span class="fa fa-times"></span></button>-->
                                    </td>
                                </tr>
                                <?php endforeach; } ?>
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







