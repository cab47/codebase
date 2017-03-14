
<?php
session_start();
?>
<html>
<head>
<script type="text/javascript">
function cur_date(){
    var day=new Date().getDate();
    var month=new Date().getMonth()+1;
    var year= new Date().getFullYear();
    document.getElementById("date").value= day+"/"+month+"/"+year;
}
</script></head>
<body onLoad="cur_date()">


<?php
	require("core/head.php");
	
?> 

<?php
	require("core/logo.php");
?>       


    
<div class="page-header col-lg-10 col-lg-offset-1">
  <h1>Request Details</h1>
</div>
                    
    <div class="content">
     <div class="row">
    <div class="col-lg-offset-1 col-lg-8 well">        
                 
          <form method="POST" action="#">
            <div style="float:right;">
              <input type="submit" name="pending"  class="btn btn-sm btn-primary" value="Show Pending Requests"/>
              <input type="submit" name="approved"  class="btn btn-sm btn-primary" value="Show Approved Requests"/>
            </div>
          </form>   

<div class="col-lg-offset-1 col-lg-8"> 
<div class="form-group" style="margin-top: 20px">
 <?php
require("config/connection.php");
$result=mysqli_query($connection,"select * from lat_long");

echo "<table border='1'>
<tr>
<td align=center> <b>Lat</b></td>
<td align=center><b>Longi</b></td>
<td align=center><b>Quick_ID</b></td>
<td align=center><b>Cluster</b></td></td>";  

while($data = mysqli_fetch_row($result))
{   
    echo "<tr>";
    echo "<td align=center>$data[0]</td>";
    echo "<td align=center>$data[1]</td>";
    echo "<td align=center>$data[2]</td>";
    echo "<td align=center>$data[3]</td>";
    echo "</tr>";
}
echo "</table>";
?>
</div>  
</div>              
    </div>
<div class="col-lg-2  my-sidebar affix">
  <div class="list-group">
                    <a href="#" class="list-group-item active">
                     Home
                    </a>
                    <a href="user_profile.php" class="list-group-item ">
                     Edit Profile
                    </a>
              
                    <a href="unsheduled.php" class="list-group-item">UnScheduled Cabs
                    </a>
                    <a href="shift.php" class="list-group-item">Shift Change
                    </a>
 
                    <a href="notify.php" class="list-group-item">Notification
                    </a>
                    </div>
                    
                    <!--From Here-->          
            </div>
        </div>
    </div>          
        <div class="bot" style="margin-bottom:165px;"></div>    
<?php
require_once("footer.php");
?> 
          
              
              	

