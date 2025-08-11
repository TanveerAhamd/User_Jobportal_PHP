<?php
include('include/auth.php'); // Database connection file

$errors = [];
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $job_title  = trim($_POST['job_title'] ?? '');
    $department = trim($_POST['department'] ?? '');
    $project    = trim($_POST['project'] ?? '');
    $province   = trim($_POST['province'] ?? '');
    $last_date  = trim($_POST['last_date'] ?? '');
    $job_link   = trim($_POST['job_link'] ?? '');

    // Validation
    if ($job_title === '') $errors[] = "Job Title is required.";
    if ($department === '') $errors[] = "Department is required.";
    if ($province === '') $errors[] = "Province is required.";
    if ($last_date === '') $errors[] = "Last Date is required.";
    if ($job_link === '') $errors[] = "Job Link is required.";

    if (empty($errors)) {
        $stmt = $cn->prepare("INSERT INTO jobs (job_title, department, project, province, last_date, job_link) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $job_title, $department, $project, $province, $last_date, $job_link);

        if ($stmt->execute()) {
            $success = "Job posted successfully!";
        } else {
            $errors[] = "Database error: " . $stmt->error;
        }
        $stmt->close();
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Post Job</title>
    <?php include('include/source.html'); ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <!-- Begin page -->
    <div id="layout-wrapper">
        <!-- Start topbar -->
        <?php include('include/topbar.php'); ?>
        <!-- End topbar -->

        <!-- ========== Left Sidebar Start ========== -->
        <?php include('include/sidebar.html'); ?>
        <!-- Left Sidebar End -->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid mt-4">
                    <div class="card shadow">
                        <div class="card-header bg-success text-white">
                            <h5 class="mb-0">Post New Job</h5>
                        </div>
                        <div class="card-body">
                            <?php if (!empty($errors)): ?>
                                <div class="alert alert-danger">
                                    <?php foreach ($errors as $e) echo "<div>" . htmlspecialchars($e) . "</div>"; ?>
                                </div>
                            <?php endif; ?>

                            <?php if ($success): ?>
                                <div class="alert alert-success"><?= htmlspecialchars($success) ?></div>
                            <?php endif; ?>

                            <form method="post">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label class="form-label">Job Title *</label>
                                        <input type="text" name="job_title" class="form-control" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Department *</label>
                                        <input type="text" name="department" class="form-control" required>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label">Project / Description</label>
                                        <textarea name="project" rows="3" class="form-control"></textarea>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Province *</label>
                                        <select name="province" class="form-select" required>
                                            <option value="">Select Province</option>
                                            <option value="PUNJAB">PUNJAB</option>
                                            <option value="SINDH">SINDH</option>
                                            <option value="BALOCHISTAN">BALOCHISTAN</option>
                                            <option value="KPK">KPK</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Last Date Apply *</label>
                                        <input type="date" name="last_date" class="form-control" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Job Link *</label>
                                        <input type="url" name="job_link" class="form-control">
                                    </div>
                                </div>
                                <div class="text-end mt-3">
                                    <button type="submit" class="btn btn-success">Post Job</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- End Page-content -->

                <!-- Footer start -->
                <?php include('include/footer.html'); ?>
                <!-- Footer end -->

            </div>
            <!-- end main content-->

        </div>
    </div>
    <!-- END layout-wrapper -->

 <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>


    <!-- apexcharts -->
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

    <script src="assets/js/pages/dashboard.init.js"></script>
     <script src="assets/js/app.js"></script>









    

</body>

</html>