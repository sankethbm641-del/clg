<?php include 'header.php';?>
<div class="container-fluid">
                        <h1 class="mt-4">Subjects Details</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Add Subjects Details</li>
                        </ol>
<h1>Add Subject details</h1>
<form action="addsubdb.php"method="POST">
     <div class="form-group col-xl-6">
    Subcode:<input class="form-control py-4" type="text" name="subcode" placeholder="Enter Subjectcode" required/>
    Subtype:<input class="form-control py-4" type="text" name="subtype" placeholder="Enter Subtype" required/>
    Subname:<input class="form-control py-4" type="text" name="subname" placeholder="Enter Subname" required/>
    BranchName:<input class="form-control py-4" type="text" name="branchname" placeholder="Enter BranchName" required/>
    Semester:<input class="form-control py-4" type="number" name="sem" placeholder="Enter Semester" required/>
    <div class="form-group mt-4 mb-0"><input type="submit" name="addsub" class="btn btn-primary btn-block mt-2" value="Add Subjects"/></div>
     </div>
</form>

 <?php include 'footer.php';?>