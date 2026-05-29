
<?php

if(isset($_POST['add']))
{
    $marksid=$_POST['marksid'];
    $year=$_POST['year'];
    $month=$_POST['month'];
    $regno=$_POST['regno'];
    $subcode=$_POST['subcode'];
    $obmarks=$_POST['obmarks'];
    $himarks=$_POST['himarks'];
    $pamarks=$_POST['pamarks'];
    $sem=$_POST['sem'];
    $cgpa=$_POST['cgpa'];
    $sgpa=$_POST['sgpa'];
    include 'dbconfig.php';
    $sql="insert into markscard(marksid,year,month,regno,subcode,obmarks,himarks,pamarks,sem,cgpa,sgpa,markscard) Values(null,'$marksid','$year','$month','$regno','$subcode','$obmarks','$himarks','$pamarks','$sem','$cgpa','$sgpa');";
     if($conn->query($sql))
      {
           echo"<script>alert('Data Inserted Sucessfully')</script>";
           echo "<meta http-equiv='refresh' content='0;addresult.php'/>";
      }
           else{
               
           echo "<script> alert('Fail to insert data')</script>";
           echo "<meta http-equiv='refresh' content='0;addresult.php'/>";
      }
      }
       else{
           header("location:addresult.php");
           }
?>


