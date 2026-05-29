<?php include 'header.php';?>
<?php
$regno=$_GET['regno'];
 include 'dbconfig.php';
    $sql="SELECT * FROM student where regno='$regno';";
    $result=$conn->query($sql);
    if($result->num_rows>0)
    {
      while($row=$result->fetch_assoc())
      {
          $stname=$row['stname'];
          $regno=$row['regno'];
          $gender=$row['gender'];
           $fname=$row['fname'];
          $branchid=$row['branchid'];
          $sem=$row['sem'];
          $dob=$row['dob'];
          $doj=$row['doj'];
          $yearofjoin=$row['yearofjoin'];
          $phno=$row['phno'];
          $parentname=$row['parentname'];
          $parentphno=$row['parentphno'];
          $typeofjoin=$row['typeofjoin'];
      }
    }
?>
<div class="container-fluid">
                        <h1 class="mt-4">  Student Details</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Edit Student Details</li>
                        </ol>
<h3>Edit contact</h3>
<form action="editstddb.php?id=<?php echo $regno; ?>" method="POST">
     <div class="form-group col-xl-6">
    Stname:<input class="form-control py-4" type="text"  value="<?php echo $stname; ?>" name="stname" placeholder="Enter Student name" required/>
    Regno:<input class="form-control py-4" type="text"  value="<?php echo $regno; ?>" name="regno" placeholder="Enter regno" required/>
     <label class="small mb-1" for="inputLastName">Gender : </label>
           <select  class="select-control" value="<?php echo $gender; ?>" name="gender" required>
               <option style="color: black">Male</option>
                <option >Female</option>
                <option>Others</option>
            </select>
     Father Name:<input class="form-control py-4" type="text" name="fname" value="<?php echo $fname; ?>" required/>
    Branchid:<input class="form-control py-4" type="text"  value="<?php echo $branchid; ?>" name="branchid" placeholder="Enter branchid" required/>
    Semester:<input class="form-control py-4" type="number" value="<?php echo $sem; ?>"  name="sem" placeholder="Enter semester" required/>
    DOB:<input class="form-control py-4" type="date" name="dob" value="<?php echo $dob; ?>"  placeholder="Enter Date of birth" required/>
    Dateofjoin:<input class="form-control py-4" type="date" value="<?php echo $doj; ?>"  name="doj" placeholder="Enter Dateofjoin" required/>
    Yearofjoin:<input class="form-control py-4" type="number"  value="<?php echo $yearofjoin; ?>" name="yearofjoin" placeholder="Enter Yearofjoin" required/>
     Phoneno:<input class="form-control py-4" type="tel" name="phno"  value="<?php echo $phno; ?>" placeholder="Enter Phoneno" required/>
      Parentname:<input class="form-control py-4" type="text"  value="<?php echo $parentname; ?>" name="parentname" placeholder="Enter Parent name" required/>
     Parentphno:<input class="form-control py-4" type="tel"  value="<?php echo $parentphno; ?>" name="parentphno" placeholder="Enter Parent phone" required/>
     Typeofjoin:<input class="form-control py-4" type="text"  value="<?php echo $typeofjoin; ?>" name="typeofjoin" placeholder="Enter Typeofjoin" required/>
     <div class="form-group mt-4 mb-0"><input type="submit" name="editstd" class="btn btn-primary btn-block mt-2" value="Edit details"/></div>
     </div>
</div>
</form>
<?php include 'footer.php';?>




