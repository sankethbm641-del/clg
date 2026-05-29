<?php include 'header.php';?>
<div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                View Student TC Details
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
    <tr>
        <th>St Name</th>
        <th>Reg No</th>
        <th>Father Name</th>
        <th>Date Of Birth</th>
        <th> TC number</th>
         <th>Gender</th>
        <th> Nationality</th>
        <th>Religion</th>
        <th> Cast And Category</th>
        <th> Date Of Admission</th>
        <th>Date Of Leaving</th>
        <th> Class studying at the time of leaving</th>
        <th>  Admission No</th>
        <th>Course</th>
        <th> Last Exam Token</th>
        <th>  Result</th>
        <th>  Whether the student as payed all institution due</th>
        <th>  Whether the student was in Receipt of any concession</th>
        <th> character of the student</th>
     </tr>
    </thead>
                                        <tfoot>
                                        
                                             <tr>
        <th>St Name</th>
        <th>Reg No</th>
        <th>Father Name</th>
        <th>Date Of Birth</th>
        <th> TC number</th>
         <th>Gender</th>
        <th> Nationality</th>
        <th>Religion</th>
        <th> Cast And Category</th>
        <th> Date Of Admission</th>
        <th>Date Of Leaving</th>
        <th> Class studying at the time of leaving</th>
        <th>  Admission No</th>
        <th>Course</th>
        <th> Last Exam Token</th>
        <th>  Result</th>
        <th>  Whether the student as payed all institution due</th>
        <th>  Whether the student was in Receipt of any concession</th>
        <th> character of the student</th>
    </tr>
     </thead>
                                        </tfoot>
    <?php
    include 'dbconfig.php';
    $sql="select * from studenttc ";
   $result=$conn->query($sql);
   if($result->num_rows>0)
      {
       while($row=$result->fetch_assoc())
       {
         $stname=$row['stname'];
    $regno=$row['regno'];
      $tcno=$row['tcno'];
    $fname=$row['fname'];
     $gender=$row['gender'];
    $nationality=$row['nationality'];
    $religion=$row['religion'];
     $dob=$row['dob'];
    $castandcategory=$row['castandcategory'];
    $doa=$row['doa'];
    $dol=$row['dol'];
    $semleaving=$row['semleaving'];
     $ano=$row['ano'];
    $course=$row['course'];
    $lexamtokan=$row['lexamtokan'];
    $result1=$row['result1'];
    $ipay=$row['ipay'];
    $ireceipt=$row['ireceipt'];
    $scharacter=$row['scharacter'];
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