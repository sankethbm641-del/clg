    <?php
    include 'header.php';
    include 'dbconfig.php';
    $regno=$_GET['regno'];
    $sql="DELETE FROM student WHERE regno='$regno';";
      if($conn->query($sql))
           {
           echo"<script>alert('Delete Inserted Sucessfully')</script>";
           echo "<meta http-equiv='refresh' content='0;veiwstd.php'/>";
           }
           else{
           echo "<script> alert('Fail to delete data')</script>";
           echo "<meta http-equiv='refresh' content='0;viewstd.php'/>";
           }
           ?>