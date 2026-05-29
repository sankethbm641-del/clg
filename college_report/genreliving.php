<?php
include 'dbconfig.php';

/* Fetch data from database */
$sql = "SELECT employee, branch, post, gender, eplace, emonth, eyear, edate 
        FROM relivingorder 
        LIMIT 1";

$result = mysqli_query($conn, $sql);

if ($row = mysqli_fetch_assoc($result)) {
    $employee = $row['employee'];
    $branch   = $row['branch'];
    $post     = $row['post'];
    $gender   = $row['gender'];
    $eplace   = $row['eplace'];
    $emonth   = $row['emonth'];
    $eyear    = $row['eyear'];
    $edate    = $row['edate'];
} else {
    echo "No record found!";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Relieving Order</title>

<style>
@page {
    size: A4;
    margin: 20mm;
}

body {
    font-family: "Times New Roman", serif;
    background: #fff;
    color: #000;
}

.a4-page {
    width: 210mm;
    height: 297mm;
    padding: 10mm;
    box-sizing: border-box;
}

/* HEADER */
.header {
    display: flex;
    align-items: center;
}

.header img {
    width: 90px;
    margin-right: 15px;
}

.header-text {
    text-align: center;
    width: 100%;
}

.college-name {
    font-size: 20px;
    font-weight: bold;
}

.sub-text {
    font-size: 13px;
}

.hr {
    border-top: 1px solid #000;
    margin: 10px 0;
}

.ref-date {
    display: flex;
    justify-content: space-between;
    font-size: 14px;
}

.content {
    margin-top: 30px;
    font-size: 15px;
    line-height: 1.6;
    text-align: justify;
}

.signature {
    margin-top: 80px;
    text-align: right;
    font-weight: bold;
}

@media print {
    body {
        margin: 0;
    }
}
</style>
</head>

<body onload="window.print()">

<div class="a4-page">

    <!-- HEADER -->
    <div class="header">
        <img src="smplogo.png" alt="College Logo">

        <div class="header-text">
            <div class="college-name">SANJAY MEMORIAL POLYTECHNIC</div>
            <div class="sub-text">
                (Approved by AICTE, New Delhi and running with Grant-In-Aid of State Govt. of Karnataka)<br>
                (Grant-in-Aid order No. ED 286 TPE 98 Bangalore Dt: 05/02/2001)<br>
                <b>INST CODE : 308</b><br><br>
                Ikkeri Road, Sagar – 577 401, Shivamogga Dist., Karnataka<br>
                Phone : 08183-226034, 8971774244
            </div>
        </div>
    </div>

    <div class="hr"></div>

    <!-- REF & DATE -->
    <div class="ref-date">
        <div>Ref: SMP/EST/</div>
        <div>Date: <?php echo date("d/m/Y", strtotime($edate)); ?></div>
    </div>

    <!-- CONTENT -->
    <div class="content">
        <p>
            To,<br>
            The Secretary,<br>
            Board of Technical Examination,<br>
            Palace Road,<br>
            Bengaluru.
        </p>

        <p>
            As per your instruction No., Sri. <b><?php echo $employee; ?></b>,
            <?php echo ($gender == "Male") ? "S/o" : "D/o"; ?>,
            working as <b><?php echo $post; ?></b> in the Department of
            <b><?php echo $branch; ?></b> of our institution is hereby relieved
            to attend valuation work of <b><?php echo $emonth . " " . $eyear; ?></b>
            theory examinations to be held at <b><?php echo $eplace; ?></b>
            from <b><?php echo date("d/m/Y", strtotime($edate)); ?></b>
            till the completion.
        </p>
    </div>

    <!-- SIGNATURE -->
    <div class="signature">
        PRINCIPAL
    </div>

</div>

</body>
</html>
