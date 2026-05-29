<?php include 'header.php';?>
<div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                View Student Certificate
                            </div>
                            <div class="card-body">
<div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
    <tr>
         <th>St Name</th>
        <th>Reg No</th>
         <th>Branch Name</th>
        <th>Year</th>
        <th>Category</th>
        <th>Cast</th>
         <th>Father Name</th>
        <th>Gender</th>
        <th>Date</th>
    </tr>
    </thead>
                                        
    <?php
    include 'dbconfig.php';
    $sql="select * from studycertificate";
   $result=$conn->query($sql);
   if($result->num_rows>0)
      {
       while($row=$result->fetch_assoc())
       {
          $stname=$row['stname'];
    $regno=$row['regno'];
    $branchname=$row['branchname'];
    $year=$row['year'];
    $category=$row['category'];
    $cast=$row['cast'];
    $fname=$row['fname'];
              $gender=$row['gender'];
               $date=$row['date'];
           echo "<tr><td>$stname</td><td>$regno</td><td>$branchname</td><td>$year</td><td>$category</td><td>$cast</td><td>$fname</td><td>$gender</td><td>$date</td></tr>";
      
           } 
   }
  ?>
 </tbody>
 <tfoot>                                 
    <tr>
        <th>St Name</th>
        <th>Reg No</th>
         <th>Branch Name</th>
        <th>Year</th>
        <th>Category</th>
        <th>Cast</th>
         <th>Father Name</th>
        <th>Gender</th>
        <th>Date</th>   
    </tr>
</tfoot>
                                    </table>
</div>
                            </div>
</div>
<?php  include 'footer.php';?>