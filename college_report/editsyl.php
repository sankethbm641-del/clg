<?php include 'header.php';?>
<?php
$sylid=$_GET['sylid'];
 include 'dbconfig.php';
    $sql="SELECT * FROM syllabus where sylid='$sylid';";
    $result=$conn->query($sql);
    if($result->num_rows>0)
    {
      while($row=$result->fetch_assoc())
      {
          $sylid=$row['sylid'];
          $yearofiossue=$row['yearofissue'];
      }
    }
?>
<div class="container-fluid">
                        <h1 class="mt-4">  Syllabus Details</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Edit Syllabus Details</li>
                        </ol>
<h3>Edit contact</h3>
<form action="editsyldb.php?id=<?php echo $sylid; ?>" method="POST">
     <div class="form-group col-xl-6">
    SyllabusID:<input class="form-control py-4" type="text"  value="<?php echo $sylid; ?>" name="sylid" placeholder="Enter Syllabus Id" required/>
    YearOfIssue:<input class="form-control py-4" type="number"  value="<?php echo $yearofiossue; ?>" name="yearofissue" placeholder="Enter YearOfIssue" required/>
    <div class="form-group mt-4 mb-0"><input type="submit" name="editsyl" class="btn btn-primary btn-block mt-2"value="Edit details"/></div>
     </div>
</div>
</form>
<?php include 'footer.php';?>
