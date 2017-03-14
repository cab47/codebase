
<?php
require_once("core/sessioncheck.php");

?>
<script type="text/javascript">
function mydetail()
{

<?php

require("config/connection.php");
$qlid=$_SESSION["qlid"];
echo $qlid;
  $sql = "SELECT * from employee where Quick_ID='$qlid'";
  echo $sql;
$result = mysqli_query($connection, $sql);
    if (mysqli_num_rows($result)) {
   
    while($row = mysqli_fetch_assoc($result)) 
    {
    $name=$row["E_Name"];
    $address=$row["E_Address"];
    $email=$row["E_Mail"];
    $mname=$row["M_ID"];
    $dept=$row["Dept"];
    $contact=$row["E_Contact"];
    echo $name;
        }
} else {
    echo "0 results";
}
 
?>
}
</script>

<!DOCTYPE html>
<html>
<head>
</head>
<body onload="mydetail()">

<?php
	require_once("core/head.php");
//Script Here
?>


<?php
require_once("core/logo.php");

?>
<div class="page-header col-lg-10 col-lg-offset-1">
         <h1>Edit my Profile</h1>
</div>
              
 <div class="content">
    <div class="col-lg-12">
      <div class="col-md-8 col-md-offset-1 well">
                    
                    <div class="row col-sm-offset-1">  
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
 
                    <form method="POST" action="#" class="col-md-8">


</form>
</div>
</div>
</div>
</div>
              <div class="col-lg-2  my-sidebar affix">
                          <a href="home.php" class="list-group-item active">
                               Home
                          </a>
                          <div class="list-group">
                           <a href="user_profile.php" class="list-group-item ">
                               Edit Profile
                          </a>
  
                
                      <a href="unsheduled.php" class="list-group-item">UnScheduled Cabs
                      </a>
                      <a href="shift.php" class="list-group-item">Shift Change
                      </a>
   
                      <a href="notify.php" class="list-group-item">Notification
                      </a>
                      <a href="man_reports.php" class="list-group-item">Reports
                      </a>
                      </div>
                    
                    <!--From Here-->          
            </div>
        </div>
    </div>                    
    <div class="row" style="margin-bottom:205px;"></div>                 
<?php
require_once("footer.php");
?>                    
</body>
</html>    
					
                    

