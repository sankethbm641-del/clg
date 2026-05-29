<?php include 'header.php';?>
<div class="container-fluid">
                        <h1 class="mt-4">Student Details</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Add Student Details</li>
                        </ol>
<h1>Add Student details</h1>
<form action="stdtcdb.php"method="POST">
     <div class="form-group col-xl-6">
    Student Name:<input class="form-control py-4" type="text" name="stname" placeholder="Enter Student name" required/>
    Regno:<input class="form-control py-4" type="text" name="regno" placeholder="Enter regno" required/>
     Father Name:<input class="form-control py-4" type="text" name="fname" placeholder="Enter Father Name" required/>
    Date Of Birth:<input class="form-control py-4" type="date" name="dob" placeholder="Enter Date of birth" required/>
    TC number:<input class="form-control py-4" type="text" name="tcno" placeholder="Enter   TC number" required/>
      <label class="small mb-1" for="inputLastName">Gender : </label>
           <select  class="select-control" name="gender" required>
               <option  style="color: black">Male</option>
                <option>Female</option>
                 <option>Others</option>
            </select>
    Nationality:<input class="form-control py-4" type="text" name="nationality" placeholder="Enter Nationality" required/>
     Religion:<input class="form-control py-4" type="text" name="religion" placeholder="Enter Religion" required/>
      Cast And Category:<input class="form-control py-4" type="text" name="castandcategory" placeholder="Enter Cast And Category" required/>
      Date Of Admission:<input class="form-control py-4" type="date" name="doa" placeholder="Enter Date Of Admission" required/>
     Date Of Leaving:<input class="form-control py-4" type="date" name="dol" placeholder="Enter Date Of Leaving" required/>
     Class studying at the time of leaving:<input class="form-control py-4" type="text" name="semleaving" placeholder="Enter  Class studying at the time of leaving" required/>
    Admission No:<input class="form-control py-4" type="text" name="ano" placeholder="Enter Admission No" required/>
    Course:<input class="form-control py-4" type="text" name="course" placeholder="Enter Course" required/>
    Last Exam Token :<input class="form-control py-4" type="text" name="lexamtokan" placeholder="Enter Last Exam Token" required/>
    Result:<input class="form-control py-4" type="text" name="result1" placeholder="Enter Result" required/>
     Whether the student as payed all institution due:<input class="form-control py-4" type="text" name="ipay" placeholder="Enter Whether the student as payed all institution due" required/>
     Whether the student was in Receipt of any concession :<input class="form-control py-4" type="text" name="ireceipt" placeholder="Enter Whether the student was in Receipt of any concession" required/>
     character of the student:<input class="form-control py-4" type="text" name="scharacter" placeholder="Enter character of the student" required/>
     <div class="form-group mt-4 mb-0"><input type="submit" class="btn btn-primary btn-block mt-2" id="buttonstd" name="stdtc" value="Generate TC"/></div>
     </div>
</form>

 <?php include 'footer.php';?>
 