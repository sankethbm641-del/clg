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
        <th>Subject Code</th>
        <th> Subject Type</th>
        <th>Subject Name</th>
        <th>Branch ID</th>
        <th>Semester</th>
        <th></th>
        <th></th>
    </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                 <th>Subject Code</th>
        <th> Subject Type</th>
        <th>Subject Name</th>
        <th>Branch ID</th>
        <th>Semester</th>
        <th></th>
        <th></th>
        </tr>
                                        </tfoot>
                                        <tbody>
    <?php
    include 'dbconfig.php';
    $sql="select * from subject ";
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
           echo "<tr><td>$subcode</td><td>$subtype</td><td>$subname</td><td>$branchname</td><td>$sem</td><td><a href='editsub.php?subcode=$subcode'>Edit</a></td><td><a href='deletesub.php?subcode=$subcode' onclick='return confirm(\"are you sure\");' >Delete</a></td></tr>";
      
           } 
   }
  ?>
</tbody>
                                    </table>
</div>
                            </div>
</div>

<?php  include 'footer.php';?>


