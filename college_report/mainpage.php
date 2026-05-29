<?php 
include 'header.php';
include 'dbconfig.php';

// Student Count
$student_query = "SELECT COUNT(*) as total_students FROM student";
$student_result = mysqli_query($conn, $student_query);
$student_row = mysqli_fetch_assoc($student_result);
$total_students = $student_row['total_students'];

// Faculties Count
$faculty_query = "SELECT COUNT(*) as total_faculty FROM lecturer";
$faculty_result = mysqli_query($conn, $faculty_query);
$faculty_row = mysqli_fetch_assoc($faculty_result);
$total_faculty = $faculty_row['total_faculty'];
?>

<div class="container-fluid">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"></li>
    </ol>

    <div class="row">
        <!-- Student Count -->
        <div class="col-xl-4 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">
                    Student Joined: <?php echo $total_students; ?>
                </div>
            </div>
        </div>

        <!-- Passing Percentage -->
        <div class="col-xl-4 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">
                    Passing Percentage
                </div>
            </div>
        </div>

        <!-- Faculty Count -->
        <div class="col-xl-4 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">
                    Faculties: <?php echo $total_faculty; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>