<?php 
if(isset($_POST['addfac']))
{
    $employee=$_POST['employee']; 
    $eid=$_POST['eid']; 
     $examid=$_POST['examid'];
     $destination=$_POST['destination'];
     $branch=$_POST['branch'];
      $panno=$_POST['panno'];
     $basicpay=$_POST['basicpay'];
    $rid=$_POST['rid'];
     $bankaccno=$_POST['bankaccno'];
    $bankname=$_POST['bankname'];
    $ifsc=$_POST['ifsc'];
     $instname=$_POST['instname'];
     $instcode=$_POST['instcode'];
     $gender=$_POST['gender'];
     $post=$_POST['post'];
      include 'dbconfig.php';
        $sql="insert into lecturer (employee,eid,examid,destination,branch,panno,basicpay,rid,bankaccno,bankname,ifsc,instname,instcode,gender,post) Values('$employee','$eid','$examid','$destination','$branch','$panno','$basicpay','$rid','$bankaccno','$bankname','$ifsc','$instname','$instcode','$gender','$post');";
            If($conn->query($sql))
            {
            echo "<script>alert('Student Details accepted')</script>";
            echo "<meta http-equiv='refresh' content='0;addfac.php'/>";
            }
            else {
                echo "<script>alert('Student Details rejected')</script>";
                echo "<meta http-equiv='refresh' content='0;viewfac.php'/>";
                
            }
}
else
{
    header("location:addfac.php");
}
?>