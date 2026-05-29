<?php 
if(isset($_POST['addsyl']))
{
    $sylid=$_POST['sylid'];
    $yearofissue=$_POST['yearofissue'];
      include 'dbconfig.php';
        $sql="insert into syllabus (sylid,yearofissue) Values('$sylid','$yearofissue');";
            If($conn->query($sql))
            {
            echo "<script>alert('Syllabus accepted')</script>";
            echo "<meta http-equiv='refresh' content='0;addsyl.php'/>";
            }
            else {
                echo "<script>alert('Syllabus rejected')</script>";
                echo "<meta http-equiv='refresh' content='0;addsyl.php'/>";
                
            }
}
else
{
    header("location:addsyl.php");
}
?>