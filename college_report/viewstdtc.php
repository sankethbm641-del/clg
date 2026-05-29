<?php
include 'dbconfig.php';

$reg = $_GET['reg'];
$sql = "SELECT * FROM studenttc WHERE regno='$reg'";
$res = $conn->query($sql);
$row = $res->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Transfer Certificate</title>

<style>
@page {
    size: A4;
    margin: 20mm;
}

body {
    font-family: "Times New Roman", serif;
    font-size: 14px;
}

.header {
    display: flex;
    align-items: center;
    border-bottom: 2px solid #000;
    padding-bottom: 10px;
}

.logo img {
    width: 90px;
}

.college-details {
    text-align: center;
    flex-grow: 1;
}

.tc-title {
    text-align: center;
    font-weight: bold;
    margin: 15px 0;
}

table {
    width: 100%;
    border-collapse: collapse;
}

td {
    border: 1px solid #000;
    padding: 6px;
    vertical-align: top;
}

.footer {
    margin-top: 50px;
}

.sign-table td {
    border: none;
    padding-top: 40px;
}
</style>

<script>
window.onload = function () {
    window.print();
};
</script>

</head>
<body>

<!-- HEADER -->
<div class="header">
    <div class="logo" style="font-size: 13px">
        <img src="clg.png"><br>
       INST CODE: 308
    </div>
    
    <div class="college-details">
        <h2>SANJAY MEMORIAL POLYTECHNIC</h2>
        <p>(Approved by AICTE, New Delhi and running with Grant-in-Aid of State Govt. of Karnataka)</p>
        <p>Ikkeri Road, Sagar – 577401, Shivamogga Dist., Karnataka</p>
    </div>
</div>

<!-- TITLE -->
<div class="tc-title">
    TRANSFER CERTIFICATE (DUPLICATE)<br>
    TC No: <?php echo $row['tcno']; ?>
</div>

<!-- TABLE -->
<table>

<tr>
    <td colspan="3"><b>1. Name of the Student :</b> <?php echo $row['stname']; ?></td>
</tr>

<tr>
    <td colspan="3"><b>2. Father’s Name :</b> <?php echo $row['fname']; ?></td>
</tr>

<tr>
    <td><b>3. Gender :</b> <?php echo $row['gender']; ?></td>
    <td><b>4. Nationality :</b> <?php echo $row['nationality']; ?></td>
    <td><b>5. Religion :</b> <?php echo $row['religion']; ?></td>
</tr>

<tr>
    <td  colspan="3"><b>6. Date of Birth :</b> <?php echo $row['dob']; ?></td>
</tr>

<tr>
    <td  colspan="3"><b>7. Category & Caste :</b> <?php echo $row['castandcategory']; ?></td>
</tr>

<tr>
    <td><b>8. Date of Admission :</b> <?php echo $row['doa']; ?></td>
    <td  colspan="2"><b>9. Date of Leaving :</b> <?php echo $row['dol']; ?></td>
</tr>

<tr>
    <td><b>10. Class studying at the time of leaving :</b> <?php echo $row['semleaving']; ?></td>
    <td  colspan="2"><b>11. Admission Number :</b> <?php echo $row['ano']; ?></td>
</tr>

<tr>
    <td  colspan="2"><b>12. Register Number :</b> <?php echo $row['regno']; ?></td>
    <td><b>13. Course :</b> <?php echo $row['course']; ?></td>
</tr>

<tr>
    <td colspan="2"><b>14. Last Exam Taken :</b> <?php echo $row['lexamtokan']; ?></td>
    <td><b>15. Result :</b> <?php echo $row['result1']; ?></td>
</tr>

<tr>
    <td colspan="2"><b>16. Whether then student has paid all institution dues  :</b> <?php echo $row['ipay']; ?></td>
    <td ><b>17. Whether the student was in receipt of any concession  :</b> <?php echo $row['ireceipt']; ?></td>
</tr>

<tr>
    <td colspan="3"><b>18. Character of the Student :</b> <?php echo $row['scharacter']; ?></td>
</tr>

</table>

<!-- FOOTER -->
<div class="footer">
    Date: <?php echo date("d/m/Y"); ?>

    <table class="sign-table" width="100%">
        <tr>
            <td>Verified By</td>
            <td style="text-align:right;">Head of the Institution</td>
        </tr>
    </table>
</div>

</body>
</html>
