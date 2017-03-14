<!doctype html>
<html lang="en">

  <?php require("core/head.php"); ?>
  
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
$(function() {
    $("#vendorfnme").autocomplete({
      source: 'search.php'
    });
  });


</script>
</head>
<?php
require_once("core/sessioncheck.php");
require("core/logo.php");


?>
<?php
	
	
?>          
 

<div class="page-header col-lg-10 col-lg-offset-1">
                    
                     <h1>Vendor Details</h1>
   </div>  
               
<div class="content">
            <div class="col-lg-12">
            
                    <div class="col-md-8 col-md-offset-1 well">
                	
                    <div class="row col-sm-offset-1">	
<form class="col-md-8">


<div class="form-group">
<label>
<h4>Vendor Firm Name</h4></label>		
<input id="vendorfnme" required class="form-control" type="text" placeholder="" />
</div>   
<div class="form-group">
<label>
<h4>Vendor Name</h4></label>  
<input id="vendormne" required class="form-control" type="text" placeholder="" />
</div>
<div class="form-group">
<label>
<h4>Location</h4></label>
<input name="oid" required class="form-control" type="text" placeholder="" />
</div>
                        
<div class="form-group">
<label>
<h4>Contact No.</h4></label>
<input name="ptime" class="form-control" type="text" placeholder="" />
</div>

<div class="form-group">
<label>
<h4>No. Of Small Cabs</h4></label>
<input name="ploc" class="form-control" type="text" placeholder="" />
</div>

<div class="form-group">
<label>
<h4>No. of Large Cabs</h4></label>
<input name="dloc" class="form-control" type="text" placeholder="" />
</div>

<div class="form-group">
<label>
<h4>Rate</h4></label></textarea>
<input name="dloc2" class="form-control" type="text" placeholder="" />
</div>

<div class="btn-toolbar">
  <button type="button" class="btn btn-primary btn-color btn-bg-color btn-sm col-xs-2 margin-left">
      <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> ADD
    </button>
    <button type="button" class="btn btn-primary btn-color btn-bg-color btn-sm col-xs-4 margin-left">
      <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> UPDATE
    </button>
     <button type="button" class="btn btn-danger btn-color btn-bg-color btn-sm col-xs-3 margin-left">
      <span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span> REMOVE
    </button>
</div>
</form>
</div>

<div class="row">
<div id="result">
</div>
</div>
</div>
		<div class="col-md-2  my-sidebar affix">
			<div class="list-group">
                    <a href="super_notify" class="list-group-item active">
                    Notification
                    </a>
              
                    <a href="super_vendor.php" class="list-group-item">Vendor
                    </a>
                    <a href="super_driver.php" class="list-group-item">Driver
                    </a>
 
                    <a href="super_cluster.php" class="list-group-item">Clustering
                    </a>
                    <a href="super_report.php" class="list-group-item">Report
                    </a>
                     <a href="super_employee.php" class="list-group-item">Employee Detail
                    </a>
                    </div>
                    
                    <!--From Here-->          
            </div>
        </div>
    </div>          

<?php
require_once("core/footer.php");
?> 
