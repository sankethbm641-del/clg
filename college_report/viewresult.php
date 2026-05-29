<?php include 'header.php';?>
<div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                View Result Details
                            </div>
                                 <div class="card-body">
                                       <form action="" method="post" name="frmExcelImport" id="frmExcelImport" enctype="multipart/form-data">
                                            <div class="form-row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputFirstName">Reg no</label>
                                                        <input class="form-control py-4"  type="text" name="regno" placeholder="308XX0001" required/>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Year And Month :</label>
                                                       <select  class="select-control" name="year" required>
                                                           <option>march 2026</option>
                  <?php
                            include 'dbconfig.php';
                            $sql="SELECT DISTINCT slot FROM `res`";
                                    $result=$conn->query($sql);
                                   
                                    if($result ->num_rows>0){
                                       
                                            while($row=$result->fetch_assoc()) {
                                                    
                                                   $slot=$row['slot'];
                                                   echo "<option value ='$slot'>$slot</option>";
                                                  
                                            }
                                           
                                    }
                                   
                        ?>
                  </select >
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Semester : </label>
                                                       <select  class="select-control" name="sem" required>
                                                            <option value="1">Semester 1</option>
                                                            <option value="2">Semester 2</option>
                                                            <option value="3">Semester 3</option>
                                                            <option value="4">Semester 4</option>
                                                            <option value="5">Semester 5</option>
                                                            <option value="6">Semester 6</option>
                                                        </select></p>
                                                    </div>
                                                </div>
                                                  <div class="form-group mt-4 mb-0"><button type="submit" id="submit" name="view" class="btn btn-primary btn-block mt-2">View</button></div>
                                            </div>
                                        </form>
                                        </div>
    
    
    
                                            <p>
                                                <?php
      if(isset($_POST['view']))
      {
          $regno=$_POST['regno'];
          $year=$_POST['year'];
          $sem=$_POST['sem'];
          $sql1="SELECT * FROM `res` where regno='$regno' and slot='$year' and sem='$sem'";
          //echo $sql1;
          $result1=$conn->query($sql1);
           if($result1 ->num_rows>0){
                                       
                                            while($row1=$result1->fetch_assoc()) {
                                                $qp1=$row1['qp1'];
                                                $sql2="SELECT * FROM `subject` where subcode='$qp1'";
                                               $result2=$conn->query($sql2);
                                              $sub1="";
                                                 if($result2 ->num_rows>0){
                                                    while($row2=$result2->fetch_assoc()){
                                                           $sub1=$row2['subname'];
                                                     }
                                                 }
                                                 $qp2=$row1['qp2'];
                                                $sql2="SELECT * FROM `subject` where subcode='$qp2'";
                                               $result2=$conn->query($sql2);
                                              $sub2="";
                                                 if($result2 ->num_rows>0){
                                                    while($row2=$result2->fetch_assoc()){
                                                           $sub2=$row2['subname'];
                                                     }
                                                 }
                                                 $qp3=$row1['qp3'];
                                                $sql2="SELECT * FROM `subject` where subcode='$qp3'";
                                               $result2=$conn->query($sql2);
                                              $sub3="";
                                                 if($result2 ->num_rows>0){
                                                    while($row2=$result2->fetch_assoc()){
                                                           $sub3=$row2['subname'];
                                                     }
                                                 }
                                                 $qp4=$row1['qp4'];
                                                $sql2="SELECT * FROM `subject` where subcode='$qp4'";
                                               $result2=$conn->query($sql2);
                                              $sub4="";
                                                 if($result2 ->num_rows>0){
                                                    while($row2=$result2->fetch_assoc()){
                                                           $sub4=$row2['subname'];
                                                     }
                                                 }
                                                 $qp5=$row1['qp5'];
                                                $sql2="SELECT * FROM `subject` where subcode='$qp5'";
                                               $result2=$conn->query($sql2);
                                              $sub5="";
                                                 if($result2 ->num_rows>0){
                                                    while($row2=$result2->fetch_assoc()){
                                                           $sub5=$row2['subname'];
                                                     }
                                                 }
                                                 $qp6=$row1['qp6'];
                                                $sql2="SELECT * FROM `subject` where subcode='$qp6'";
                                               $result2=$conn->query($sql2);
                                              $sub6="";
                                                 if($result2 ->num_rows>0){
                                                    while($row2=$result2->fetch_assoc()){
                                                           $sub6=$row2['subname'];
                                                     }
                                                 }
                                                 $qp7=$row1['qp7'];
                                                $sql2="SELECT * FROM `subject` where subcode='$qp7'";
                                               $result2=$conn->query($sql2);
                                              $sub7="";
                                                 if($result2 ->num_rows>0){
                                                    while($row2=$result2->fetch_assoc()){
                                                           $sub7=$row2['subname'];
                                                     }
                                                 }
                                                 $qp8=$row1['qp8'];
                                                $sql2="SELECT * FROM `subject` where subcode='$qp8'";
                                               $result2=$conn->query($sql2);
                                              $sub8="";
                                                 if($result2 ->num_rows>0){
                                                    while($row2=$result2->fetch_assoc()){
                                                           $sub8=$row2['subname'];
                                                     }
                                                 }
                                                 $qp9=$row1['qp9'];
                                                $sql2="SELECT * FROM `subject` where subcode='$qp9'";
                                               $result2=$conn->query($sql2);
                                              $sub9="";
                                                 if($result2 ->num_rows>0){
                                                    while($row2=$result2->fetch_assoc()){
                                                           $sub9=$row2['subname'];
                                                     }
                                                 }?>
                                            <div style="text-align: center">
                                                <?php
                                                   echo "<b>Name: </b>".$row1['Name'];
                                                   echo "<br><b>RegNO: </b>".$row1['regno'];
                                                   echo "<br><b>Sem: </b>".$row1['sem'];
                                                   
                                                   ?> 
                                            </div>
                                                       <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Result Sheet
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <tr><th>Subject Name</th><th>External Marks</th><th>Internal Marks</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <tr><th>Subject Name</th><th>External Marks</th><th>Internal Marks</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                       
                   
                                                       <?php
                                                   if($qp1!="")
                                                   echo "<tr><td>".$sub1." (".$row1['qp1'].")</td><td>".$row1['sub1']." </td><td>".$row1['ia1']."</td></tr>";
                                                   if($qp2!="")
                                                   echo "<tr><td>".$sub2." (".$row1['qp2'].")</td><td>".$row1['sub2']." </td><td>".$row1['ia2']."</td></tr>";
                                                   if($qp3!="")
                                                   echo "<tr><td>".$sub3." (".$row1['qp3'].")</td><td>".$row1['sub3']." </td><td>".$row1['ia3']."</td></tr>";
                                                   if($qp4!="")
                                                   echo "<tr><td>".$sub4." (".$row1['qp4'].")</td><td>".$row1['sub4']." </td><td>".$row1['ia4']."</td></tr>";
                                                   if($qp5!="")
                                                   echo "<tr><td>".$sub5." (".$row1['qp5'].")</td><td>".$row1['sub5']." </td><td>".$row1['ia5']."</td></tr>";
                                                   if($qp6!="")
                                                   echo "<tr><td>".$sub6." (".$row1['qp6'].")</td><td>".$row1['sub6']." </td><td>".$row1['ia6']."</td></tr>";
                                                   if($qp7!="")
                                                   echo "<tr><td>".$sub7." (".$row1['qp7'].")</td><td>".$row1['sub7']." </td><td>".$row1['ia7']."</td></tr>";
                                                   if($qp8!="")
                                                   echo "<tr><td>".$sub8." (".$row1['qp8'].")</td><td>".$row1['sub8']." </td><td>".$row1['ia8']."</td></tr>";
                                                   if($qp9!="")
                                                   echo "<tr><td>".$sub9." (".$row1['qp9'].")</td><td>".$row1['sub9']." </td><td>".$row1['ia9']."</td></tr>";
                                                    echo "<tr><td>Total</td><td>".$row1['extotal']." </td><td>".$row1['iatotal']."</td></tr>";
                                                   
                                                  ?>
                                                                                  </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                                                
                                            <div style="text-align: center">
                                                <?php
                                                   echo "<b>Total: </b>".$row1['total'];
                                                   echo "<br><b>Result: </b>".$row1['result']."<br><br><br><br><br><br>";
                                                   ?>
                                                </div>
                                                <?php
                                                  
                                            }
                                           
                                    }
                                    else{
                                        echo "No Result found";
                                    }
      }
      ?>
                            </div>
</div>
    
    

</body>
</html>