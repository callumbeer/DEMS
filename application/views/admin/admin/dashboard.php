	<!-- START BREADCRUMB -->
	        <ul class="breadcrumb">
	            <li><a href="<?php echo base_url(); ?>admin">Home</a></li>
	            <li><a href="#"><?php echo $breadcrumb_name ?></a></li>
	        </ul>
	<!-- END BREADCRUMB -->
    <!-- PAGE CONTENT WRAPPER -->
    <div class="page-content-wrap">
       <!-- START CONTENT FRAME -->
  <div class="content-frame">   
                    
                    <!-- START CONTENT FRAME TOP -->
                    <div class="content-frame-top">                        
                        <div class="page-title">                    
                            <h2><span class="fa fa-image"></span> Admin Dashboard</h2>
                        </div>                                                              
                    </div>

                    <!-- START CONTENT FRAME RIGHT -->
                  <!--   <div class="content-frame-right"> 
                     <h3>hello</h3>
                    </div>
                   -->
                    <div class="content-frame-body content-frame-body-left" > 
                    <div class="container">
					 <div class="row">
					    <div class="col-md-3 col-xs-12 col-sm-6">
					      <div class="bg-1 bg-01 small-boxs">
					        <div class="inner">
					          <p class="desc">Total number of case</p>
					                           <?php 
					                            $query= $this->db->count_all("case");
												echo $query;
					                           ?>
					        </div>
					        <div class="icon"> <i class="fa-solid fa-cube fabs"></i> </div>
					      </div>
					    </div>
					    <div class="col-md-3 col-xs-12 col-sm-6">
					      <div class="bg-2 bg-1 small-boxs">
					        <div class="inner">
					          <p class="desc"> Total number of users </p>
					                           <?php 
					                            $query1= $this->db->count_all("user");
												echo $query1;
					                           ?>
					        </div>
					        <div class="icon"> <i class="fa-solid fa-cube fabs"></i> </div>
					      </div>
					    </div>
					    <div class="col-md-3 col-xs-12 col-sm-6">
					      <div class="bg-3 bg-1 small-boxs">
					        <div class="inner">
					       <!--    <h3 class="purchase_due"> 0.00 ₹</h3> -->
					          <p class="desc">Number of cases created by user</p>
					         <!--   <h3>Number of cases created by user</h3> -->
					                           <?php 
					                            // $query= $this->db->count_all("user");
					                            $query2=$this->db->query("select * from user where id='".$this->session->userdata('id')."'");

												echo $query2->num_rows();
					                          // print_r($query);exit;
												//echo $query;
					                           ?>
					        </div>
					        <div class="icon"> <i class="fa-solid fa-cube fabs"></i> </div>
					      </div>
					    </div>
					    <div class="col-md-3 col-xs-12 col-sm-6">
					      <div class="bg-4 bg-1 small-boxs">
					        <div class="inner">
					         <!--  <h3 class="purchase_due"> 0.00 ₹</h3> -->
					          <p class="desc"> Latest or last record id</p>
					          <!--  <h3>Latest or last record id</h3> -->
					                           <?php 
					                       $row = $this->db->select("*")->limit(1)->order_by('id',"DESC")->get("user")->row();
											echo $row->id;
											  ?>
					        </div>
					        <div class="icon"> <i class="fa-solid fa-cube fabs"></i> </div>
					      </div>
					    </div>
					  </div>
	 
                           
                    <!-- END CONTENT FRAME BODY -->
                </div>               
                <!-- END CONTENT FRAME -->
              <!-- START RESPONSIVE TABLES -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>View</strong> Cases</h3>
                   
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
                                    <td class="text-center">
                                        <a href="<?php echo base_url() ?>cases/case_details/<?php echo $case_item['case_no'] ?>">
                                            <button class="btn btn-default btn-rounded btn-sm">
                                                <span class="fa fa-eye"></span>
                                            </button>
                                        </a>
                                       
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
        <!-- START DASHBOARD CHART -->
		<div class="chart-holder" id="dashboard-area-1" style="height: 200px;"></div>
		<div class="block-full-width">                                              
        </div>                    
        <!-- END DASHBOARD CHART -->
        
    </div>
    <!-- END PAGE CONTENT WRAPPER -->    
        <!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cards Design</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper --> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<style>
.bg-1 {
    text-transform: uppercase;
    transition: 0.5s;
    background-size: 200% auto;
    color: white;
    box-shadow: 0 0 20px #eee;
    border-radius: 10px;
    display: block;
}
.purchase_due {
    font-size: 38px;
    margin: 0 0 10px 0;
}
.desc {
    font-size: 16px;
    margin: 0 0 10px 0;
}
.inner {
    padding: 10px;
}
.icon {
    -webkit-transition: all .3s linear;
    -o-transition: all .3s linear;
    transition: all .3s linear;
    position: absolute;
    top: -10px;
    right: 10px;
    z-index: 0;
    font-size: 70px;
    color: rgba(0,0,0,0.15);
    padding-top: 10px;
}
.bg-2 {
    background-image: linear-gradient(to right, #895dbc 0%, #5a4ab5 51%, #895dbc 100%);
}
.bg-3 {
    background-image: linear-gradient(to right, #54c5f1 0%, #638fce 51%, #54c5f1 100%);
}
.bg-4 {
    background-image: linear-gradient(to right, #fcb22f 0%, #fb8351 51%, #fcb22f 100%);
}
.bg-01 {
    background-image: linear-gradient(to right, #e74284 0%, #b3559f 51%, #e74284 100%);
}
.fabs {
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
.small-boxs {
    /*border-radius: 2px;*/
    position: relative;
    display: block;
    margin-bottom: 20px;
    box-shadow: 0 1px 1px rgb(0 0 0 / 10%);
    min-height:100px;
}
.info-box {
    display: block;
    min-height: 90px;
    background: #fff;
    width: 100%;
    box-shadow: 0px 0px 10px #cbcbcb;
    border-radius: 5px !important;
    margin-bottom: 23px;
}
.info-box-content {
    padding: 14px 10px;
    margin-left: 90px;
}
.bg-5 {
    background-image: linear-gradient(45deg, #ec4a83, #a05ca9);
}
	.info-box-icon {
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;
    border-bottom-left-radius: 5px;
    display: block;
    float: left;
    height: 90px;
    width: 90px;
    text-align: center;
    font-size: 45px;
    line-height: 90px;
    /*background: rgba(0,0,0,0.2);*/
}
	
	.info-box-number {
    display: block;
    font-weight: normal;
    font-size: 18px;
		text-transform: uppercase;
}
	
	.bg-5 {
    color: white;
}
	
	@media screen and (min-device-width: 320px) and (max-device-width: 480px) { 
    
		.col-xs-12{width: 100% !important;}
		
		.small-box {
    text-align: center;
}
}
	
</style>