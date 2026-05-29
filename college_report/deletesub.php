<?php
include 'header.php';
include 'dbconfig.php';
$subcode=$_GET['subcode'];
$sql="DELETE FROM subject WHERE subcode='$subcode';";
if($conn->query($sql))
{
echo"<script>alert('Delete Inserted Sucessfully')</script>";
echo "<meta http-equiv='refresh' content='0;viewsub.php'/>";
}
else{
echo "<script> alert('Fail to delete data')</script>";
echo "<meta http-equiv='refresh' content='0;viewsub.php'/>";
}
?>