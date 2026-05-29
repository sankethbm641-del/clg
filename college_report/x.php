<?php // include 'header.php';?>
<div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                View Student TC
                            </div>
                            <div class="card-body">
<div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
    <tr>
        <th>Employee</th>
        <th>Branch</th>
        <th>Post</th>
        <th>Institute Name</th>
        <th> Gender</th>
         <th>Exam month</th>
        <th> Exam year</th>
        <th>Attendence Startdate</th>
        <th> Attendence Enddate</th>
        <th></th>
        <th></th>
    </tr>
    </thead>
                                        <tfoot>
                                             <tr>
          <th>Employee</th>
        <th>Branch</th>
        <th>Post</th>
        <th>Institute Name</th>
        <th> Gender</th>
         <th>Exam month</th>
        <th> Exam year</th>
        <th>Attendance Start date</th>
        <th> Attendance End date</th>
        <th></th>
        <th></th>
    </tr>
     </tfoot>
                                        <tbody>
    <?php
    include 'dbconfig.php';
    $sql="select * from facattend ";
   $result=$conn->query($sql);
   if($result->num_rows>0)
      {
       while($row=$result->fetch_assoc())
       {
         $employee=$row['stname'];
    $branch=$row['regno'];
      $post =$row['tcno'];
    $instname=$row['fname'];
     $gender=$row['gender'];
    $emonth=$row['nationality'];
    $eyear=$row['religion'];
     $astart=$row['dob'];
    $aend=$row['castandcategory'];
           echo "<tr><td>$stname</td><td>$regno</td><td>$tcno</td><td>$fname</td><td>$gender</td><td>$nationality</td><td>$religion</td><td>$dob</td><td>$castandcategory</td><td>$doa</td><td>$dol</td><td>$semleaving</td><td>$ano</td><td>$course</td><td>$lexamtokan</td><td>$result1</td><td>$ipay</td><td>$ireceipt</td><td>$scharacter</td></tr>";
      
           } 
   }
  ?>
 </tbody>
                                    </table>
</div>
                            </div>
</div>
<?php  include 'footer.php';?>
      
?>