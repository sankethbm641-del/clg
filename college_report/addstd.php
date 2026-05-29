<?php include 'header.php';?>
<div class="container-fluid">
                        <h1 class="mt-4">Student Details</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Add Student Details</li>
                        </ol>
<h1>Add Student details</h1>
<form action="addstddb.php"method="POST">
     <div class="form-group col-xl-6">
    Stname:<input class="form-control py-4" type="text" name="stname" placeholder="Enter Student name" required/>
    Regno:<input class="form-control py-4" type="text" name="regno" placeholder="Enter regno" required/>

            <label class="small mb-1" for="inputLastName">Gender : </label>
           <select  class="select-control" name="gender" required>
               <option  style="color: black">Male</option>
                <option>Female</option>
                 <option>Others</option>
            </select>
     Father Name:<input class="form-control py-4" type="text" name="fname" placeholder="Enter Father Name" required/>
    Branchid:<input class="form-control py-4" type="text" name="branchid" placeholder="Enter branchid" required/>
    Semester:<input class="form-control py-4" type="number" name="sem" placeholder="Enter semester" required/>
    DOB:<input class="form-control py-4" type="date" name="dob" placeholder="Enter Date of birth" required/>
    Dateofjoin:<input class="form-control py-4" type="date" name="doj" placeholder="Enter Dateofjoin" required/>
    Yearofjoin:<input class="form-control py-4" type="number" name="yearofjoin" placeholder="Enter Yearofjoin" required/>
     Phoneno:<input class="form-control py-4" type="tel" name="phno" placeholder="Enter Phoneno" required/>
      Parentname:<input class="form-control py-4" type="text" name="parentname" placeholder="Enter Parent name" required/>
     Parentphno:<input class="form-control py-4" type="tel" name="parentphno" placeholder="Enter Parent phone" required/>
     Typeofjoin:<input class="form-control py-4" type="text" name="typeofjoin" placeholder="Enter Typeofjoin" required/>
     <div class="form-group mt-4 mb-0"><input type="submit" class="btn btn-primary btn-block mt-2" id="buttonstd" name="addstd" value="Add stdetails"/></div>
     </div>
</form>

 <?php include 'footer.php';?>