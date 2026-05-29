<?php include 'header.php';?>
<div class="container-fluid">
                        <h1 class="mt-4">Student Syllabus</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Add Syllabus Details</li>
                        </ol>
<h1>Add Syllabus details</h1>
<form action="addsyldb.php"method="POST">
     <div class="form-group col-xl-6">
    SyllabusId:<input class="form-control py-4" type="text" name="sylid" placeholder="Enter Syllabus Id" required/>
    YearOfIssue:<input class="form-control py-4" type="number" name="yearofissue" placeholder="Enter YearOfIssue" required/>
    <div class="form-group mt-4 mb-0"><input type="submit" name="addsyl" class="btn btn-primary btn-block mt-2" value="Add Syllabus"/></div>
     </div>
</form>

 <?php include 'footer.php';?>