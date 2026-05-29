<?php

if(isset($_POST['stdtc']))
{
    $stname=$_POST['stname'];
    $regno=$_POST['regno'];
      $tcno=$_POST['tcno'];
    $fname=$_POST['fname'];
     $gender=$_POST['gender'];
    $nationality=$_POST['nationality'];
    $religion=$_POST['religion'];
     $dob=$_POST['dob'];
    $castandcategory=$_POST['castandcategory'];
    $doa=$_POST['doa'];
    $dol=$_POST['dol'];
    $semleaving=$_POST['semleaving'];
     $ano=$_POST['ano'];
    $course=$_POST['course'];
    $lexamtokan=$_POST['lexamtokan'];
    $result1=$_POST['result1'];
    $ipay=$_POST['ipay'];
    $ireceipt=$_POST['ireceipt'];
    $scharacter=$_POST['scharacter'];
    include 'dbconfig.php';
    $sql="insert into studenttc(stname,regno,tcno,fname,gender,nationality,religion,dob,castandcategory,doa,dol,semleaving,ano,course,lexamtokan,result1,ipay,ireceipt,scharacter) Values('$stname','$regno','$tcno','$fname','$gender','$nationality','$religion','$dob','$castandcategory','$doa','$dol','$semleaving','$ano','$course','$lexamtokan','$result1','$ipay','$ireceipt','$scharacter');";
     if($conn->query($sql))
      {
           echo"<script>alert('Data Inserted Sucessfully')</script>";
           echo "<meta http-equiv='refresh' content='0;viewstdtc.php?reg=$regno'/>";
      }
           else{
               
           echo "<script> alert('Fail to insert data')</script>";
           echo "<meta http-equiv='refresh' content='0;stdtc.php'/>";
      }
      }
       else{
           header("location:stdtc.php");
           }
?>