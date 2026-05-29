<?php
include 'dbconfig.php';

/* Fetch data – adjust table & condition as per your DB */
$sql = "SELECT * FROM relievingorder WHERE id = 1";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Relieving Order</title>
    <style>
        @page {
            size: A4;
            margin: 20mm;
        }

        body {
            font-family: "Times New Roman", serif;
            font-size: 14pt;
            margin: 0;
        }

        .header {
            text-align: center;
        }

        .header img {
            width: 90px;
            position: absolute;
            left: 20mm;
            top: 20mm;
        }

        .college-name {
            font-size: 20pt;
            font-weight: bold;
        }

        .sub {
            font-size: 11pt;
        }

        hr {
            margin: 20px 0;
        }

        .ref-date {
            display: flex;
            justify-content: space-between;
        }

        .content {
            margin-top: 40px;
            text-align: justify;
            line-height: 1.6;
        }

        .signature {
            margin-top: 80px;
            text-align: right;
            font-weight: bold;
        }

        @media print {
            button {
                display: none;
            }
        }
    </style>
</head>

<body>

<div class="header">
    <img src="logo.png">
    <div class="college-name">SANJAY MEMORIAL POLYTECHNIC</div>
    <div class="sub">(Approved by AICTE, New Delhi and running with Grant-In-Aid of State Govt. of Karnataka)</div>
    <div class="sub">(Grant-In-Aid order No. ED 286 TPE 98 Bangalore Dt: 05/02/2001)</div>
    <br>
    <b>INST CODE : 308</b><br>
    Ikkeri Road, Sagar – 577 401, Shivamogga Dist., Karnataka<br>
    Phone : 08183-226034, 8971774244
</div>

<hr>

<div class="ref-date">
    <div>Ref: SMP/EST/</div>
    <div>Date: <?php echo date("d/m/Y", strtotime($row['edate'])); ?></div>
</div>

<div class="content">
    To,<br>
    The Secretary<br>
    Board of Technical Examination<br>
    Palace Road<br>
    Bengaluru<br><br>

    As per your instruction No., Sri. 
    <b><?php echo $row['employee']; ?></b>,
    <?php echo $row['post']; ?>,
    working in the Department of 
    <b><?php echo $row['branch']; ?></b>
    of our institution is relieved to attend Valuation work of 
    <b><?php echo $row['emonth']." ".$row['eyear']; ?></b>
    theory examinations to be held at 
    <b><?php echo $row['eplace']; ?></b>
    from <b><?php echo date("d/m/Y", strtotime($row['edate'])); ?></b>
    till the completion.
</div>

<div class="signature">
    PRINCIPAL
</div>

<br>
<button onclick="window.print()">Print</button>

</body>
</html>
