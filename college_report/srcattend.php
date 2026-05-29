<?php include 'header.php';?>
<div class="container-fluid">
                        <h1 class="mt-4">Attendance Certificate</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Generate Attendance Certificate</li>
                        </ol>
<h1>Attendance Certificate</h1>
<form action="srcattenddb.php"method="POST">
     <div class="form-group col-xl-6">
    Employee :<input class="form-control py-4" type="text" name="employee" placeholder="Enter Employee name" required/>
    Branch:<input class="form-control py-4" type="text" name="branch" placeholder="Enter Branch" required/>
    Post:<input class="form-control py-4" type="text" name="post" placeholder="Enter Your Post" required/>
    Institute Name:<input class="form-control py-4" type="text" name="instname" placeholder="Enter Institute Name" required/>
     <label class="small mb-1" for="inputLastName">Gender : </label>
           <select  class="select-control" name="gender" required>
               <option  style="color: black">Male</option>
                <option>Female</option>
                 <option>Others</option>
            </select>
     Exam month:<input class="form-control py-4" type="text" name="emonth" placeholder="Enter Exam month" required/>
     Exam year:<input class="form-control py-4" type="text" name="eyear" placeholder="Enter Exam year" required/>
     Attendance Start date:<input class="form-control py-4" type="date" name="astart" placeholder="Enter Attendence Startdate" required/>
     Attendance End date:<input class="form-control py-4" type="date" name="aend" placeholder="Enter Attendence Enddate" required/>
    <div class="form-group mt-4 mb-0"><input type="submit" name="srcattend" class="btn btn-primary btn-block mt-2" value="Generate Attendance"/></div>
     </div>
</form>

 <?php include 'footer.php';?>