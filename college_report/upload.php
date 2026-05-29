<?php
include 'dbconfig.php';
require_once('spreadsheet-reader-master/php-excel-reader/excel_reader2.php');
require_once('spreadsheet-reader-master/SpreadsheetReader.php');
$flag=1;
if (isset($_POST["import"]))
{
       
  $allowedFileType = ['application/vnd.ms-excel','text/xls','text/xlsx','application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'];
  
  if(in_array($_FILES["file"]["type"],$allowedFileType)){

        $targetPath = 'uploads/'.$_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'], $targetPath);
        
        $Reader = new SpreadsheetReader($targetPath);
        
        $sheetCount = count($Reader->sheets());
        
        for($i=0;$i<$sheetCount;$i++)
        {
            $Reader->ChangeSheet($i);
            
            foreach ($Reader as $Row)
            {
          
                $regno = "";
                if(isset($Row[1])) {
                    $regno = mysqli_real_escape_string($conn,$Row[1]);
                }
                
                $Name = "";
                if(isset($Row[2])) {
                    $Name = mysqli_real_escape_string($conn,$Row[2]);
                }
                 $sem = "";
                if(isset($Row[1])) {
                    $sem = mysqli_real_escape_string($conn,$Row[3]);
                }
                $sub1 = "";
                if(isset($Row[1])) {
                    $sub1 = mysqli_real_escape_string($conn,$Row[4]);
                }
                $sub2 = "";
                if(isset($Row[1])) {
                    $sub2 = mysqli_real_escape_string($conn,$Row[5]);
                }
                $sub3 = "";
                if(isset($Row[1])) {
                    $sub3 = mysqli_real_escape_string($conn,$Row[6]);
                }
                $sub4 = "";
                if(isset($Row[1])) {
                    $sub4 = mysqli_real_escape_string($conn,$Row[7]);
                }
                $sub5 = "";
                if(isset($Row[1])) {
                    $sub5 = mysqli_real_escape_string($conn,$Row[8]);
                }
                $sub6 = "";
                if(isset($Row[1])) {
                    $sub6 = mysqli_real_escape_string($conn,$Row[9]);
                }
                $sub7 = "";
                if(isset($Row[1])) {
                    $sub7 = mysqli_real_escape_string($conn,$Row[10]);
                }
                $sub8 = "";
                if(isset($Row[1])) {
                    $sub8 = mysqli_real_escape_string($conn,$Row[11]);
                }
                $sub9 = "";
                if(isset($Row[1])) {
                    $sub9 = mysqli_real_escape_string($conn,$Row[12]);
                }
                $ext = "";
                if(isset($Row[1])) {
                    $ext = mysqli_real_escape_string($conn,$Row[13]);
                }
                $ia1 = "";
                if(isset($Row[1])) {
                    $ia1 = mysqli_real_escape_string($conn,$Row[14]);
                }
                $ia2 = "";
                if(isset($Row[1])) {
                    $ia2 = mysqli_real_escape_string($conn,$Row[15]);
                }
                $ia3 = "";
                if(isset($Row[1])) {
                    $ia3 = mysqli_real_escape_string($conn,$Row[16]);
                }
                $ia4 = "";
                if(isset($Row[1])) {
                    $ia4 = mysqli_real_escape_string($conn,$Row[17]);
                }
                $ia5 = "";
                if(isset($Row[1])) {
                    $ia5 = mysqli_real_escape_string($conn,$Row[18]);
                }
                $ia6 = "";
                if(isset($Row[1])) {
                    $ia6 = mysqli_real_escape_string($conn,$Row[19]);
                }
                $ia7 = "";
                if(isset($Row[1])) {
                    $ia7 = mysqli_real_escape_string($conn,$Row[20]);
                }
                $ia8 = "";
                if(isset($Row[1])) {
                    $ia8 = mysqli_real_escape_string($conn,$Row[21]);
                }
                $ia9 = "";
                if(isset($Row[1])) {
                    $ia9 = mysqli_real_escape_string($conn,$Row[22]);
                }
                $iat = "";
                if(isset($Row[1])) {
                    $iat = mysqli_real_escape_string($conn,$Row[23]);
                }
                $total = "";
                if(isset($Row[1])) {
                    $total = mysqli_real_escape_string($conn,$Row[24]);
                }
                $result = "";
                if(isset($Row[1])) {
                    $result = mysqli_real_escape_string($conn,$Row[25]);
                }
                $qp1 = "";
                if(isset($Row[1])) {
                    $qp1 = mysqli_real_escape_string($conn,$Row[26]);
                }
                $qp2 = "";
                if(isset($Row[1])) {
                    $qp2 = mysqli_real_escape_string($conn,$Row[27]);
                }
                $qp3 = "";
                if(isset($Row[1])) {
                    $qp3 = mysqli_real_escape_string($conn,$Row[28]);
                }
                $qp4 = "";
                if(isset($Row[1])) {
                    $qp4 = mysqli_real_escape_string($conn,$Row[29]);
                }
                $qp5 = "";
                if(isset($Row[1])) {
                    $qp5 = mysqli_real_escape_string($conn,$Row[30]);
                }
                $qp6 = "";
                if(isset($Row[1])) {
                    $qp6 = mysqli_real_escape_string($conn,$Row[31]);
                }
                $qp7 = "";
                if(isset($Row[1])) {
                    $qp7 = mysqli_real_escape_string($conn,$Row[32]);
                }
                $qp8 = "";
                if(isset($Row[1])) {
                    $qp8 = mysqli_real_escape_string($conn,$Row[33]);
                }
                $qp9 = "";
                if(isset($Row[1])) {
                    $qp9 = mysqli_real_escape_string($conn,$Row[34]);
                }
                $slot=$_POST['year'];
                
               
                    $query = "INSERT INTO `res` (`id`, `regno`, `Name`, `sem`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `sub6`, `sub7`, `sub8`, `sub9`, `extotal`, `ia1`, `ia2`, `ia3`, `ia4`, `ia5`, `ia6`, `ia7`, `ia8`, `ia9`, `iatotal`, `total`, `result`, `qp1`, `qp2`, `qp3`, `qp4`, `qp5`, `qp6`, `qp7`, `qp8`, `qp9`, `slot`) VALUES (NULL, '$regno', '$Name', '$sem', '$sub1', '$sub2', '$sub3', '$sub4', '$sub5', '$sub6', '$sub7', '$sub8', '$sub9', '$ext', '$ia1', '$ia2', '$ia3', '$ia4', '$ia5', '$ia6', '$ia7', '$ia8', '$ia9', '$iat', '$total', '$result', '$qp1', '$qp2', '$qp3', '$qp4', '$qp5', '$qp6', '$qp7', '$qp8', '$qp9', '$slot')";
                    $result = mysqli_query($conn, $query);
                
                    if (! empty($result)) {
                        $flag=1;
                    } else {
                        $flag=0;
                    }
                
             }
        
         }
         if ($flag==1) {
                        echo '<script>alert("Uploaded Succesfully")</script>';
                        echo '<META http-equiv="refresh" content="0;addresult.php">';
                    } else {
                        echo '<script>alert("Error")</script>';
                        echo '<META http-equiv="refresh" content="0;addresult.php">';
                    }
  }
  else
  { 
        $type = "error";
        $message = "Invalid File Type. Upload Excel File.";
  }
}
?>

