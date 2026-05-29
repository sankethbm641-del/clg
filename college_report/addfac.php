<?php include 'header.php';?>
<div class="container-fluid">
                        <h1 class="mt-4">Facalties Details</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Add Facalties Details</li>
                        </ol>
<h1>Add Facalties details</h1>
<form action="addfacdb.php"method="POST">
     <div class="form-group col-xl-6">
    Employee :<input class="form-control py-4" type="text" name="employee" placeholder="Enter Employee name" required/>
    Employee ID:<input class="form-control py-4" type="text" name="eid" placeholder="Enter Employee ID" required/>
            <label class="small mb-1" for="inputLastName">Gender : </label>
           <select  class="select-control" name="gender" required>
               <option  style="color: black">Male</option>
                <option>Female</option>
                 <option>Others</option>
            </select>
     Exam ID:<input class="form-control py-4" type="text" name="examid" placeholder="Enter Exam ID" required/>
    Destination:<input class="form-control py-4" type="text" name="destination" placeholder="Enter Destination" required/>
    Branch:<input class="form-control py-4" type="text" name="branch" placeholder="Enter Branch" required/>
    Pan No:<input class="form-control py-4" type="tet" name="panno" placeholder="Enter Pan No" required/>
    Basic Pay:<input class="form-control py-4" type="text" name="basicpay" placeholder="Enter  Basic Pay" required/>
    Recipient ID:<input class="form-control py-4" type="text" name="rid" placeholder="Enter Recipient ID" required/>
     Bank Account No:<input class="form-control py-4" type="text" name="bankaccno" placeholder="Enter  Bank Account No" required/>
      Bank Name:<input class="form-control py-4" type="text" name="bankname" placeholder="Enter Bank Name" required/>
     IFSC Code:<input class="form-control py-4" type="text" name="ifsc" placeholder="Enter IFSC Code" required/>
     Institute Name:<input class="form-control py-4" type="text" name="instname" placeholder="Enter Institute Name" required/>
     Institute Code:<input class="form-control py-4" type="text" name="instcode" placeholder="Enter Institute Code" required/>
     Post:<input class="form-control py-4" type="text" name="post" placeholder="Enter Your Post" required/>
     <div class="form-group mt-4 mb-0"><input type="submit" class="btn btn-primary btn-block mt-2" id="buttonstd" name="addfac" value="Add facdetails"/></div>
     </div>
</form>

 <?php include 'footer.php';?>