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
        <th>Syllabus Id</th>
        <th>Year Of Issue</th>
        <th></th>
        <th></th>
    </tr>
    </thead>
                                        <tfoot>
                                        
                                             <tr>
        <th>Syllabus Id</th>
        <th>Year Of Issue</th>
        <th></th>
        <th></th>
    </tr>
     </thead>
                                        </tfoot>
    <?php
    include 'dbconfig.php';
    $sql="select * from syllabus ";
   $result=$conn->query($sql);
   if($result->num_rows>0)
      {
       while($row=$result->fetch_assoc())
       {
           $sylid=$row['sylid'];
           $yearofissue=$row['yearofissue'];
           echo "<tr><td>$sylid</td><td>$yearofissue</td><td><a href='editsyl.php?sylid=$sylid'>Edit</a></td><td><a href='delsyl.php?sylid=$sylid' onclick='return confirm(\"are you sure\");' >Delete</a></td></tr>";
      
           } 
   }
  ?>
</tbody>
                                    </table>
</div>
                            </div>
</div>
<?php  include 'footer.php';?>