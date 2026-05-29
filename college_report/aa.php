<? php 
include 'dbconfig.php';
$sql="select into facattend
name= <?php echo $row['employee']; ?>
branch= <?php echo $row['branch']; ?>
post =<?php echo $row['post']; ?>
college name= <?php echo $row['instname']; ?>
gender= <?php echo $row['gender']; ?>
exam month= <?php echo $row['emonth']; ?>
exam year= <?php echo $row['eyear']; ?>
attendance start= <?php echo $row['astart']; ?>
attendance end= <?php echo $row['aend']; ?>
    
    ?>