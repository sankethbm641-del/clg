<?php include 'header.php';?>
<div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                View Faculties Details
                            </div>
                            <div class="card-body">
<div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
    <tr>
       <th>Employee</th>
        <th>Employee ID</th>
         <th>Gender</th>
        <th>ExamId</th>
        <th>Destination</th>
        <th>Branch</th>
         <th>PAN No</th>
        <th>Basic Pay</th>
        <th>Receipent ID</th>
         <th>Bank Account No</th>
        <th>Name of Bank and Branch</th>
        <th>IFSC Code</th>
        <th>Institute Name</th>
        <th>Institute Code</th>
          <th>Post</th>
        <th></th>
    </tr>
    </thead>
      
    <?php
    include 'dbconfig.php';
     $sql="select * from lecturer ";
   $result=$conn->query($sql);
   if($result->num_rows>0)
      {
       while($row=$result->fetch_assoc())
       {
            $employee=$row['employee'];
           $eid=$row['eid'];
           $examid=$row['examid'];
           $destination=$row['destination'];
           $branch=$row['branch'];
           $panno=$row['panno'];
           $basicpay=$row['basicpay'];
           $rid=$row['rid'];
           $bankaccno=$row['bankaccno'];
           $bankname=$row['bankname'];
           $ifsc=$row['ifsc'];
           $instname=$row['instname'];
           $instcode=$row['instcode'];
           $gender=$row['gender'];
           $post=$row['post'];
           echo "<tr><td>$employee</td><td>$eid</td><td>$examid</td><td>$destination</td><td>$branch</td><td>$panno</td><td>$basicpay</td><td>$rid</td><td>$bankaccno</td><td>$bankname</td><td>$ifsc</td><td>$instname</td><td>$instcode</td><td>$gender</td><td>$post</td><td><a href='editsub.php?eid=$eid'>Edit</a></td></tr>";
      
           } 
   }
  ?>
 </tbody>
                                   <tfoot>
                                             <tr>
        <th>Employee</th>
        <th>Employee ID</th>
         <th>Gender</th>
        <th>ExamId</th>
        <th>Destination</th>
        <th>Branch</th>
         <th>PAN No</th>
        <th>Basic Pay</th>
        <th>Receipent ID</th>
         <th>Bank Account No</th>
        <th>Name of Bank and Branch</th>
        <th>IFSC Code</th>
        <th>Institute Name</th>
        <th>Institute Code</th>
          <th>Post</th>
        <th></th>
    </tr>
                                               </tfoot>
                                    </table>
</div>
                            </div>
</div>
<?php  include 'footer.php';?>