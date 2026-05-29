<?php include 'header.php';?>
<div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                View Subjects Details
                            </div>
                            <div class="card-body">
<div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
    <tr>
        <th>St Name</th>
        <th>Reg No</th>
        <th>Gender</th>
        <th>Father Name</th>
        <th>Branch Id</th>
        <th>Sem</th>
        <th>DOB</th>
        <th>Date Of Join</th>
        <th>Year Of Join</th>
        <th>Phone No</th>
        <th>Parent Name</th>
        <th>Parent No</th>
        <th>Type Of Join</th>
        <th></th>
        <th></th>
    </tr>
    </thead>
                                        <tfoot>
                                             <tr>
        <th>St Name</th>
        <th>Reg No</th>
        <th>Gender</th>
        <th>Father Name</th>
        <th>Branch Id</th>
        <th>Sem</th>
        <th>DOB</th>
        <th>Date Of Join</th>
        <th>Year Of Join</th>
        <th>Phone No</th>
        <th>Parent Name</th>
        <th>Parent No</th>
        <th>Type Of Join</th>
        <th></th>
        <th></th>
    </tr>
     </tfoot>
                                        <tbody>
    <?php
    include 'dbconfig.php';
    $sql="select * from student ";
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
           echo "<tr><td>$stname</td><td>$regno</td><td>$gender</td><td>$fname</td><td>$branchid</td><td>$sem</td><td>$dob</td><td>$doj</td><td>$yearofjoin</td><td>$phno</td><td>$parentname</td><td>$parentphno</td><td>$typeofjoin</td><td><a href='editstd.php?regno=$regno'>Edit</a></td><td><a href='deletestd.php?regno=$regno' onclick='return confirm(\"are you sure\");' >Delete</a></td></tr>";
      
           } 
   }
  ?>
 </tbody>
                                    </table>
</div>
                            </div>
</div>
<?php  include 'footer.php';?>