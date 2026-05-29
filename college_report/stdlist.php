<?php include 'header.php';?>
<div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                               Student Count
                            </div>
                            <div class="card-body">
<div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
    <tr>
       <th> Student Count</th>
    </tr>
     <?php
    include 'dbconfig.php';
     $sql="select * from student  ";
   $result=$conn->query($sql);
   

          
           ?>