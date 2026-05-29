<?php 
if(isset($_POST['addstd']))
{
    $stname=$_POST['stname']; 
    $regno=$_POST['regno']; 
     $gender=$_POST['gender'];
     $fname=$_POST['fname'];
     $branchid=$_POST['branchid'];
       $sem=$_POST['sem'];
     $dob=$_POST['dob'];
       $doj=$_POST['doj'];
         $yearofjoin=$_POST['yearofjoin'];
           $phno=$_POST['phno'];
             $parentname=$_POST['parentname'];
              $parentphno=$_POST['parentphno'];
               $typeofjoin=$_POST['typeofjoin'];
      include 'dbconfig.php';
        $sql="insert into student (stname,regno,gender,fname,branchid,sem,dob,doj,yearofjoin,phno,parentname,parentphno,typeofjoin) Values('$stname','$regno','$gender','$fname','$branchid','$sem','$dob','$doj','$yearofjoin','$phno','$parentname','$parentphno','$typeofjoin');";
            If($conn->query($sql))
            {
            echo "<script>alert('Student Details accepted')</script>";
            echo "<meta http-equiv='refresh' content='0;addstd.php'/>";
            }
            else {
                echo "<script>alert('Student Details rejected')</script>";
                echo "<meta http-equiv='refresh' content='0;addstd.php'/>";
                
            }
}
else
{
    header("location:addstd.php");
}
?>