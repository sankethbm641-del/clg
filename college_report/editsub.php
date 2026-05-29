<?php include 'header.php';?>
<?php
    include 'dbconfig.php';
    $subcode=$_GET['subcode'];
    $sql="SELECT * FROM subject where subcode='$subcode';";
    $result=$conn->query($sql);
    if($result->num_rows>0)
    {
      while($row=$result->fetch_assoc())
      {
          $subcode=$row['subcode'];
          $subtype=$row['subtype'];
          $subname=$row['subname'];
            $branchname=$row['branchname'];
             $sem=$row['sem'];
      }
    }
?>
<div class="container-fluid">
                        <h1 class="mt-4">   Subject details</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Edit Subject </li>
                        </ol>
<h3>Edit subject </h3>
<form action="editsubdb.php?id=<?php echo $subcode; ?>" method="POST">
     <div class="form-group col-xl-6">
         Subcode:<input class="form-control py-4" type="text" value="<?php echo $subcode; ?>" name="subcode" placeholder="Enter Subcode" required/>
         Subtype:<input class="form-control py-4" type="text" name="subtype" value="<?php echo $subtype; ?>" placeholder="Enter Subtype" required/>
    Subname:<input class="form-control py-4" type="text" name="subname" value="<?php echo $subname; ?>" placeholder="Enter Subname" required/>
    BranchName:<input class="form-control py-4" type="text" name="branchname" value="<?php echo $branchname; ?>" placeholder="Enter BranchName" required/>
    Semester:<input class="form-control py-4" type="number" name="sem" value="<?php echo $sem; ?>" placeholder="Enter Semester" required/>
    <div class="form-group mt-4 mb-0"><input type="submit" name="editsub" class="btn btn-primary btn-block mt-2" value="Edit sub details"/></div>
     </div>
</div>
</form>
<?php include 'footer.php';?>

