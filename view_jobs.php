 <?php
// DB Connection
$conn = new mysqli("localhost", "root", "", "user-profile");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Job ID from URL
if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("Job not found.");
}

$id = intval($_GET['id']);

// Fetch job details
$sql = "SELECT * FROM jobs WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
    die("Job not found.");
}

$job = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitoring Officer - FWMC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <?php include('include/source.html'); ?>
    <style>
        .date-box {
            background-color: #3498db;
            color: white;
            text-align: center;
            padding: 5px;
            border-radius: 5px;
            width: 60px;
            font-size: 14px;
        }

        .date-box strong {
            font-size: 18px;
            display: block;
        }

        .job-logo {
            width: 70px;
            height: auto;
            border-radius: 5px;
        }

        .left-col {
            background-color: #f8f9fa;
            border-right: 2px solid #e9ecef;
            padding: 15px;
        }

        .section-title {
            border-bottom: 1px solid #ccc;
            padding-bottom: 5px;
            margin-bottom: 10px;
        }

        /* Remove borders from all rows except section headings */
        .custom-table td,
        .custom-table th {
            border-bottom: none !important;
        }

        /* Keep bottom border for heading rows */
        .custom-table thead th,
        .custom-table .section-heading th {
            border-bottom: 1px solid #dee2e6 !important;
        }

        .tag {
            background-color: #5bc0de;
            color: white;
            padding: 5px 10px;
            border-radius: 4px;
            display: inline-block;
            margin: 3px 3px 3px 0;
        }
    </style>
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
                <div class="container-fluid py-4">
                    <div class="card shadow">
                        <div class="card-body">


                            <div class="row">
                                <!-- Left Column: Job Details -->
                                <div class="col-md-4 left-col">


                                    <table class="table custom-table">
                                        <thead>
                                            <tr>
                                                <th colspan="2" class="text-primary">Job Details</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>Division:</th>
                                                <td>Faisalabad</td>
                                            </tr>
                                            <tr>
                                                <th>District:</th>
                                                <td>CHINIOT FAISALABAD JHANG TOBA TEK SINGH</td>
                                            </tr>
                                            <tr>
                                                <th>Industry:</th>
                                                <td>Services</td>
                                            </tr>
                                            <tr>
                                                <th>Project:</th>
                                                <td>Faisalabad Waste Management Company</td>
                                            </tr>
                                            <tr>
                                                <th>Total Positions:</th>
                                                <td>201</td>
                                            </tr>
                                            <tr>
                                                <th>Employment Status:</th>
                                                <td>Contract</td>
                                            </tr>
                                            <tr>
                                                <th>Role:</th>
                                                <td>Monitoring Officer</td>
                                            </tr>
                                            <tr>
                                                <th>Job Posted:</th>
                                                <td>06-08-2025</td>
                                            </tr>
                                            <tr>
                                                <th>Level:</th>
                                                <td>S-I</td>
                                            </tr>
                                            <tr>
                                                <th>Last Date to Apply:</th>
                                                <td>15-08-2025</td>
                                            </tr>

                                            <tr class="section-heading">
                                                <th colspan="2" class="text-primary">Preferred Candidates</th>
                                            </tr>
                                            <tr>
                                                <th>Years of Experience:</th>
                                                <td>MS/M-Phill : 8 year(s) &nbsp; | &nbsp; Masters/Bachelors (Hons) : 8 year(s)</td>
                                            </tr>
                                            <tr>
                                                <th>Gender:</th>
                                                <td>Both</td>
                                            </tr>
                                            <tr>
                                                <th>Age:</th>
                                                <td>18 - 70</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>


                                <!-- Right Column: Job Description -->
                                <div class="col-md-8">
                                    <!-- Back Button -->
                                    <a href="appliedjobs.php" class="btn btn-success btn-sm mb-3">Back to Listings</a>

                                    <!-- Top Header -->
                                    <div class="d-flex align-items-center mb-3">
                                        <img src="logo.png" alt="Logo" class="job-logo me-3">
                                        <div class="date-box me-3">
                                            <strong>06</strong>Aug
                                        </div>
                                        <div>
                                            <h5 class="mb-0">Monitoring Officer</h5>
                                            <small class="text-muted">Faisalabad Waste Management Company, PAKISTAN</small>
                                        </div>
                                    </div>
                                    <h6 class="section-title text-danger">Job Description</h6>
                                    <p><strong>Qualification & Experience:</strong></p>
                                    <ul>
                                        <li>Minimum Graduate from HEC recognized University.</li>
                                        <li>At least 2 years of experience in a relevant field in a well-established public/private sector organization.</li>
                                        <li>Must have own motorcycle with valid license.</li>
                                        <li>Well versed with the use of mobile & IT.</li>
                                    </ul>
                                    <p><strong>Details of Tehsils:</strong> Residents of the concerned districts (Faisalabad, Chiniot, Jhang, Toba Tek Singh) will be given preference.</p>

                                    <p>
                                        Applicants must log on to
                                        <a href="http://www.fwmc.com.pk/careers" target="_blank">www.fwmc.com.pk/careers</a>
                                        to download the application form and send hard copies with attested CNIC, educational documents, experience certificates, and one passport photograph by <strong>15-08-2025</strong> to:
                                    </p>
                                    <p>
                                        FWMC Complex, University Road, Near DC Office, Faisalabad.
                                    </p>

                                    <h6 class="section-title text-danger">Job Responsibilities</h6>
                                    <ul>
                                        <li>Monitor the organization’s compliance with relevant legislation, regulations, and policies.</li>
                                        <li>Provide support to the Assistant Manager Operations.</li>
                                        <li>Technically manage all the android and software development, maintenance, deployment activities of the project.</li>
                                        <li>Ensure the development of protocols for the dashboards and other data sharing dashboard for stakeholders and android applications.</li>
                                    </ul>

                                    <!-- Degree Level -->
                                    <h6 class="section-title text-danger mt-3">Degree Level</h6>
                                    <span class="tag">MS/M-Phill</span>
                                    <span class="tag">Masters/Bachelors (Hons)</span>
                                    <span class="tag">18 Years of Education</span>
                                    <span class="tag">16 Years of Education</span>

                                    <!-- Degree Area -->
                                    <h6 class="section-title text-danger mt-3">Degree Area</h6>
                                    <span class="tag">Computer Engineering/Sciences</span>
                                    <span class="tag">Geographical Information System (GIS)</span>
                                    <span class="tag">Information Technology</span>
                                    <span class="tag">Software Engineering</span>

                                    <!-- Apply Button -->
                                    <div class="mt-4">
                                        <a href="#" class="btn btn-success me-2">Apply for this Job</a>
                                        <!-- <td>
                                           
                                            <form method="POST" action="apply-job.php">
                                                <input type="hidden" name="job_title" value="Company Secretary">
                                                <input type="hidden" name="department" value="Management lorem30">
                                                <input type="hidden" name="project" value="Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, libero.">
                                                <input type="hidden" name="province" value="PUNJAB">
                                                <input type="hidden" name="last_date" value="2025-08-15">
                                                <button type="submit" name="apply" class="btn btn-primary btn-sm">Apply</button>
                                            </form>
                                        </td> -->
                                        <a href="#" class="btn btn-warning text-white">View Advertisement</a>
                                    </div>
                                </div>
                            </div>

                            <!-- dxfgchvjb -->
                            

<div class="row">
    <!-- Left Column -->
    <div class="col-md-4 left-col">
        <table class="table custom-table">
            <thead>
                <tr>
                    <th colspan="2" class="text-primary">Job Details</th>
                </tr>
            </thead>
            <tbody>
                <tr><th>Division:</th><td><?= $job['division'] ?></td></tr>
                <tr><th>District:</th><td><?= $job['district'] ?></td></tr>
                <tr><th>Industry:</th><td><?= $job['industry'] ?></td></tr>
                <tr><th>Project:</th><td><?= $job['project'] ?></td></tr>
                <tr><th>Total Positions:</th><td><?= $job['total_positions'] ?></td></tr>
                <tr><th>Employment Status:</th><td><?= $job['employment_status'] ?></td></tr>
                <tr><th>Role:</th><td><?= $job['role_title'] ?></td></tr>
                <tr><th>Job Posted:</th><td><?= date("d-m-Y", strtotime($job['job_posted'])) ?></td></tr>
                <tr><th>Level:</th><td><?= $job['level'] ?></td></tr>
                <tr><th>Last Date to Apply:</th><td><?= date("d-m-Y", strtotime($job['last_date'])) ?></td></tr>

                <tr class="section-heading">
                    <th colspan="2" class="text-primary">Preferred Candidates</th>
                </tr>
                <tr><th>Years of Experience:</th><td><?= $job['experience'] ?></td></tr>
                <tr><th>Gender:</th><td><?= $job['gender'] ?></td></tr>
                <tr><th>Age:</th><td><?= $job['age_range'] ?></td></tr>
            </tbody>
        </table>
    </div>

    <!-- Right Column -->
    <div class="col-md-8">
        <a href="appliedjobs.php" class="btn btn-success btn-sm mb-3">Back to Listings</a>

        <div class="d-flex align-items-center mb-3">
            <img src="<?= $job['company_logo'] ?? 'default-logo.png' ?>" alt="Logo" class="job-logo me-3">
            <div class="date-box me-3">
                <strong><?= date("d", strtotime($job['job_posted'])) ?></strong><?= date("M", strtotime($job['job_posted'])) ?>
            </div>
            <div>
                <h5 class="mb-0"><?= $job['job_title'] ?></h5>
                <small class="text-muted"><?= $job['project'] ?>, <?= $job['province'] ?></small>
            </div>
        </div>

        <h6 class="section-title text-danger">Job Description</h6>
        <p><?= nl2br($job['job_description']) ?></p>

        <h6 class="section-title text-danger">Job Responsibilities</h6>
        <p><?= nl2br($job['job_responsibilities']) ?></p>

        <h6 class="section-title text-danger mt-3">Degree Level</h6>
        <span class="tag"><?= $job['degree_level'] ?></span>

        <h6 class="section-title text-danger mt-3">Degree Area</h6>
        <span class="tag"><?= $job['degree_area'] ?></span>

        <div class="mt-4">
            <a href="<?= $job['job_link'] ?>" target="_blank" class="btn btn-success me-2">Apply for this Job</a>
            <a href="#" class="btn btn-warning text-white">View Advertisement</a>
        </div>
    </div>
</div>

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

    <!-- App js -->
    <script src="assets/js/app.js"></script>



</body>

</html>