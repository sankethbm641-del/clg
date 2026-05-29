
<?php
if(isset($_POST['editstd']))
{
    $id=$_GET['id'];
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
    $sql="UPDATE student SET stname='$stname',regno='$regno',gender='$gender',fname='$fname',branchid='$branchid',sem='$sem',dob='$dob',doj='$doj',yearofjoin='$yearofjoin',phno='$phno',parentname='$parentname',parentphno='$parentphno',typeofjoin='$typeofjoin' WHERE regno='$id';";
    echo $sql;
    if($conn->query($sql))
      {
           echo"<script>alert('edit Inserted Sucessfully')</script>";
          echo "<meta http-equiv='refresh' content='0;veiwstd.php'/>";
           
           }
           else{
               
           echo "<script> alert('Fail to insert data')</script>";
           echo "<meta http-equiv='refresh' content='0;veiwstd.php'/>";
      }
      }
       else{
           header("location:addstd.php");
           }
?>


