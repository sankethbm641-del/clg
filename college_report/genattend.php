<?php
include 'dbconfig.php';

$sql = "SELECT * FROM facattend"; // adjust condition
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Attendance Certificate</title>

    <style>
        @page {
            size: A4;
            margin: 20mm;
        }

        body {
            font-family: "Times New Roman", serif;
            background: #fff;
        }

        .certificate {
            width: 210mm;
            height: 297mm;
            padding: 20mm;
            box-sizing: border-box;
        }

        .center {
            text-align: center;
        }

        h3, h4 {
            margin: 4px;
        }

        .title {
            margin-top: 70px;
            font-size: 20px;
            text-decoration: underline;
            font-weight: bold;
        }

        .content {
            margin-top: 40px;
            font-size: 16px;
            line-height: 1.8;
            text-align: justify;
        }

        .date {
            float: right;
            margin-top: 30px;
            font-size: 14px;
        }
        .smp{
            float: left;
            margin-top: 30px;
            font-size: 14px;
        }
        .signature {
            margin-top: 100px;
            display: flex;
            justify-content: space-between;
            font-size: 14px;
        }

        @media print {
            button {
                display: none;
            }
        }
    </style>
</head>

<body>

<!--<div class="certificate">
    <div class="logo">
        <img src="smplogo.png" alt="College Logo">
    </div>-->
    <div class="center">
        <h3>GOVERNMENT OF KARNATAKA</h3>
        <h4>Board of Technical Education</h4>
        <h4>Board of Technical Examination, Bangalore</h4>
        <h4>Office of the Chief Superintendent of Examination / Principal</h4>
        <h4>Sanjay Memorial Polytechnic, Sagar</h4>
    </div>

    <div>
        <div class="smp">SMP/EXAM/<?php echo $row['emonth'];?> <?php echo $row['eyear'];?>/</div>
        
        <div class="date">Date : <?php echo date("d/m/Y"); ?></div>
        
    </div>

    <div class="center title">
        ATTENDANCE CERTIFICATE
    </div>

    <div class="content">
        This is to certify that Sri.
        <strong><?php echo $row['employee']; ?></strong>,
        <?php echo $row['post']; ?>,
        Dept. of <?php echo $row['branch']; ?>,
        of <strong><?php echo $row['instname']; ?></strong>,
        has conducted Diploma Theory Examinations of
        <strong><?php echo $row['emonth']; ?> - <?php echo $row['eyear']; ?></strong>
        as Chief Observer at this center from
        <strong><?php echo $row['astart']; ?></strong>
        to
        <strong><?php echo $row['aend']; ?></strong>.
    </div>

    <div class="signature">
        <div>
            Place : Sagar
        </div>
        <div>
            <strong>Chief Superintendent</strong><br>
            Principal
        </div>
    </div>

</div>

<div class="center">
    <button onclick="window.print()">Print Certificate</button>
</div>

</body>
</html>
