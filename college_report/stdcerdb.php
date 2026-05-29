<?php

if(isset($_POST['stdcer']))
{
    $stname=$_POST['stname'];
    $regno=$_POST['regno'];
    $branchname=$_POST['branchname'];
    $year=$_POST['year'];
    $category=$_POST['category'];
    $cast=$_POST['cast'];
    $fname=$_POST['fname'];
    $gender=$_POST['gender'];
        $date=$_POST['date'];
    include 'dbconfig.php';
    $sql="insert into studycertificate(stname,regno,branchname,year,category,cast,fname,gender,date) Values('$stname','$regno','$branchname','$year','$category','$cast','$fname','$gender','$date');";
     if($conn->query($sql))
      {
           echo"<script>alert('Data Inserted Sucessfully')</script>";
           echo "<meta http-equiv='refresh' content='0;viewstdcer.php?reg=$regno'/>";
      }
           else{
               
           echo "<script> alert('Fail to insert data')</script>";
           echo "<meta http-equiv='refresh' content='0;stdcer.php'/>";
      }
      }
       else{
           header("location:stdcer.php");
           }
?>