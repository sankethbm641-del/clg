<?php include 'header.php';?>
<div class="container-fluid">
                        <h1 class="mt-4">Study Certificate</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Generate Study Certificate</li>
                        </ol>
<h1>Generate Study Certificate</h1>
<form action="stdcerdb.php"method="POST">
     <div class="form-group col-xl-6">
    Stname:<input class="form-control py-4" type="text" name="stname" placeholder="Enter Stname"  required/>
    Regno:<input class="form-control py-4" type="text" name="regno" placeholder="Enter Regno    "     required/>
    BranchName:<input class="form-control py-4" type="text" name="branchname" placeholder="Enter BranchName" required/>
    Year:<input class="form-control py-4" type="text" name="year" placeholder="Enter Year" required/>
    Category:<input class="form-control py-4" type="text" name="category" placeholder="Enter Category" required/>
    Cast:<input class="form-control py-4" type="text" name="cast" placeholder="Enter Cast" required/>
    Father Name:<input class="form-control py-4" type="text" name="fname" placeholder="Enter Father Name" required/>
     <label class="small mb-1" for="inputLastName">Gender : </label>
           <select  class="select-control" name="gender" required>
               <option  style="color: black">Male</option>
                <option>Female</option>
                 <option>Others</option>
            </select>
     Date:<input class="form-control py-4" type="date" name="date" placeholder="Enter Date" required/>
    <div class="form-group mt-4 mb-0"><input type="submit" name="stdcer" class="btn btn-primary btn-block mt-2" value="Generate SC"/></div>
     </div>
</form>

 <?php include 'footer.php';?>