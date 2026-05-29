<?php include 'header.php';?>
<div class="container-fluid">
                        <h1 class="mt-4">Result</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Add Result</li>
                        </ol>
<h3>Add Student Marks</h3>
<form action="upload.php" method="post" name="frmExcelImport" id="frmExcelImport" enctype="multipart/form-data">
  <div class="form-group col-xl-6">
      <p><span>File</span><input type="file" class="form-control py-4" name="file" id="file" accept=".xls,.xlsx"></p>
      <p><span>Year And Month</span><input type="text" class="form-control py-4" name="year" value="" required/></p>
      <p style="padding-top: 15px"><span>&nbsp;</span><div class="form-group mt-4 mb-0"><button type="submit" id="submit" name="import" class="btn btn-primary btn-block mt-2">Import</button></div></p>
  </div>
</form>

</div>
<?php include 'footer.php';?>