
<?php
include("include\dbconnect.php"); 
extract($_POST);
session_start();
$id=$_REQUEST['id'];
 


$up_fees="update trust_details set status='1'  where id='$id'"; 

if($conn->query($up_fees) === TRUE){
 ?>
<script language="javascript" type="text/javascript">
alert("Update Success");
window.location.href="admin_view_trust.php";
</script>
<?php 
}
else
{
 ?>
<script language="javascript" type="text/javascript">
alert("Failed");
window.location.href="admin_view_trust.php";
</script>
<?php 
}
?>