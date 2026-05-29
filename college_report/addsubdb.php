<?php 
if(isset($_POST['addsub']))
{
    $subcode=$_POST['subcode']; 
    $subtype=$_POST['subtype'];
    $subname=$_POST['subname'];
     $branchname=$_POST['branchname'];
       $sem=$_POST['sem'];
      include 'dbconfig.php';
        $sql="insert into subject (subcode,subtype,subname,branchname,sem) Values('$subcode','$subtype','$subname','$branchname','$sem');";
            If($conn->query($sql))
            {
            echo "<script>alert('Subject Details accepted')</script>";
            echo "<meta http-equiv='refresh' content='0;addsub.php'/>";
            }
            else {
                echo "<script>alert('Subject Details rejected')</script>";
                echo "<meta http-equiv='refresh' content='0;addsub.php'/>";
                
            }
}
else
{
    header("location:addsub.php");
}
?>