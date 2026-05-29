<!DOCTYPE html>
<html>
    <head>
        <title>Generate study certificate</title>

<style>
@page {
    size: A4;
    margin: 20mm;
}

body {
    margin: 0;
    padding: 0;
    font-family: "Times New Roman", serif;
}

/* Outer Border */
.page {
    width: 210mm;
    height: 297mm;
    border: 2px solid #000;
    padding: 15mm;
    box-sizing: border-box;
    position: relative;
}

/* Header */
.header {
    text-align: center;
    position: relative;
}

.logo {
    position: absolute;
    left: 0;
    top: 0;
    width: 80px;
}

.college-name {
    font-size: 22px;
    font-weight: bold;
}

.sub-text {
    font-size: 12px;
}

.address {
    font-size: 13px;
    margin-top: 5px;
}

.phone {
    font-size: 13px;
    margin-top: 3px;
}

.inst {
    font-size: 12px;
    text-align: left;
    margin-top: 5px;
}

/* Title */
.title {
    text-align: center;
    font-size: 16px;
    font-weight: bold;
    margin: 30px 0;
    text-decoration: underline;
}

/* Content */
.content {
    font-size: 15px;
    line-height: 1.8;
    text-align: justify;
    margin: 0 20px;
}

/* Footer details */
.footer-info {
    margin-top: 80px;
    font-size: 14px;
}

.left {
    float: left;
}

.right {
    float: right;
    text-align: center;
}

/* Bottom email */
.bottom {
    border-top: 3px solid black;
    position: absolute;
    bottom: 10mm;
    width: 100%;
    margin-left: -55px;
    padding-top: 10px;
    text-align: center;
    font-size: 12px;
}

/* Print only certificate */
@media print {
    body * {
        visibility: hidden;
    }
    .page, .page * {
        visibility: visible;
    }
    .page {
        position: absolute;
        top: 0;
        left: 0;
    }
    .form-group {
  margin-bottom: 1rem;
}
.my-4 {
  margin-top: 1.5rem !important;
}
.my-0 {
  margin-bottom: 0 !important;
}
.btn {
  display: inline-block;
  font-weight: 400;
  color: #212529;
  text-align: center;
  vertical-align: middle;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  background-color: transparent;
  border: 1px solid transparent;
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  line-height: 1.5;
  border-radius: 0.25rem;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
.btn-primary {
  color: #fff;
  background-color: #007bff;
  border-color: #007bff;
}
.btn-primary:hover {
  color: #fff;
  background-color: #0069d9;
  border-color: #0062cc;
}
.btn-block {
  display: block;
  width: 100%;
}
.btn-block + .btn-block {
  margin-top: 0.5rem;
}
.mt-2,
.my-2 {
  margin-top: 0.5rem !important;
}
}
</style>
</head>

<body>

<?php
$reg=$_GET['reg'];
include 'dbconfig.php';

$sql = "SELECT * FROM `studycertificate` WHERE `regno`='$reg'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$stname   = $row['stname'];
$regno    = $row['regno'];
$branchname   = $row['branchname'];
$year     = $row['year'];
$category = $row['category'];
$cast     = $row['cast'];
$fname    = $row['fname'];
$gender= $row['gender'];
?>
<div class="container-fluid">
                        <h1 class="mt-4">Study Certificate</h1>
<div class="page">

    <div class="header">
        <img src="clg.png" class="logo">

        <div class="college-name">SANJAY MEMORIAL POLYTECHNIC</div>
        <div class="sub-text">(Approved by AICTE, New Delhi and running with Grant-in-Aid of State Govt. of Karnataka)</div>
        <div class="address">Ikkeri Road, Sagar – 577 401, Shivamogga Dist., Karnataka</div>
        <div class="phone">Phone : 08183-226034, 8971774244</div>

        <br><div class="inst"><b>INST CODE :</b> 308</div>
    </div>

    <div class="title">STUDY CERTIFICATE</div>

    <p class="content">
        This is to certify that Kum. <b><?php echo $stname; ?></b>
        <?php echo ($gender == 'Female') ? 'D/o' : 'S/o'; ?>
        <b><?php echo $fname; ?></b> bearing Register No.
        <b><?php echo $regno; ?></b> a student of this institution
        studying <b><?php echo $year; ?></b> Year Diploma in
        <b><?php echo $branchname; ?></b> Engineering during the academic
        year 2023-24. She belongs to <b><?php echo $cast; ?></b> caste in
        <b><?php echo $category; ?></b> category.
    </p>

    <div class="footer-info">
        <div class="left">
            <b>Place :</b> Sagar<br><br>
            <b>Date :</b> <?php echo date("d/m/Y"); ?>
        </div>

        <div class="right">
            <br><br>
            <b>PRINCIPAL</b>
        </div>
    </div>

    <div class="bottom">
        Email : smp308@gmail.com &nbsp;&nbsp; Website : www.smppolytechnic.org
    </div>

</div>

    <div class="form-group mt-4 mb-0"><button  onclick="window.print()" class="btn btn-primary btn-block mt-2">Print</button></div>
</div>
</body>
</html>