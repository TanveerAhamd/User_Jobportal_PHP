<?php
// Database connection
$host = "localhost";
$username = "root";
$password = "";
$database = "user-profile";

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
var_dump($_GET['user_profile_id']);


// Check if user_profile_id is passed via URL
if (isset($_GET['user_profile_id'])) {
    $id = intval($_GET['user_profile_id']);
    $sql = "SELECT * FROM profile_builder WHERE user_profile_id = $id LIMIT 1";
} else {
    // Fallback to show latest
    $sql = "SELECT * FROM profile_builder ORDER BY user_profile_id DESC LIMIT 1";
}

$result = $conn->query($sql);
if ($result && $result->num_rows > 0) {
    $user = $result->fetch_assoc();
} else {
    die("No user profile found.");
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User CV</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="page-content">
    <div class="container-fluid">

        <!-- Page Title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Contact</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                            <li class="breadcrumb-item active">Contact</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <!-- CV Content -->
        <div class="row">
            <!-- Left Side -->
            <div class="col-md-3" style="background-color: #dddddd;">
                <div class="card text-center p-3">
                    <img class="preview" src="https://jobs.punjab.gov.pk/PJP-Uploads/frontend/employee.jpg" alt="">
                    <button class="btn btn-info mt-3">
                        <label>Change Picture</label>
                        <input type="file" style="display: none;">
                    </button>
                    <small class="text-danger mt-2 d-block">
                        Picture with white background, max 1mb allowed, jpeg, png allowed.
                    </small>
                </div>

                <div class="mt-3 border-top border-black pt-2">
                    <strong class="text-primary">Personal Information</strong>
                </div>

                <div class="p-3">
                    <ul class="list-unstyled mb-0">
                        <li><strong>Name:</strong> <?= $user['user_profile_first_name'] . ' ' . $user['user_profile_last_name'] ?></li>
                        <li><strong>Father Name:</strong> <?= $user['user_profile_father_name'] ?></li>
                        <li><strong>CNIC:</strong> <?= $user['user_profile_cnic'] ?></li>
                        <li><strong>D.O.B:</strong> <?= $user['user_profile_birth'] ?></li>
                        <li><strong>Age:</strong> <?= $user['user_profile_age'] ?> Years</li>
                        <li><strong>Gender:</strong> <?= $user['user_profile_gender'] ?></li>
                        <li><strong>Marital Status:</strong> <?= $user['user_profile_marital_status'] ?></li>
                        <li><strong>Religion:</strong> <?= $user['user_profile_religion'] ?></li>
                        <li><strong>Mobile:</strong> <?= $user['user_profile_phonenum'] ?></li>
                        <li><strong>Land Line:</strong> <?= $user['user_profile_landline'] ?></li>
                        <li><strong>Address:</strong> <?= $user['user_profile_postaladr'] ?></li>
                        <li><strong>City:</strong> <?= $user['user_profile_reside_city'] ?></li>
                        <li><strong>Domicile:</strong> <?= $user['user_profile_domicile'] ?></li>
                        <li><strong>Fax:</strong> N/A</li>
                        <!-- <li>
                            <strong>E-mail:</strong>
                            <a href="mailto:<?= $user['user_profile_email'] ?>" class="d-block text-primary">
                                <?= $user['user_profile_email'] ?>
                            </a>
                        </li> -->
                        <li><strong>Nationality:</strong> <?= $user['user_profile_nationality'] ?></li>
                        <li><strong>Country:</strong> <?= $user['user_profile_reside_country'] ?></li>
                    </ul>

                    <hr class="bg-dark">

                    <!-- <p class="fw-bold text-primary mb-1">Target Job</p>
                    <hr class="mt-0 bg-dark"> -->
                    <!-- <ul class="list-unstyled">
                        <li><strong>Job Title:</strong> <?= $user['user_profile_targetjob_title'] ?></li>
                        <li><strong>Career Level:</strong> <?= $user['user_profile_targetjob_careerlevel'] ?></li>
                        <li><strong>Target Salary:</strong> <?= $user['user_profile_targetjob_salary'] ?></li>
                    </ul> -->
                </div>
            </div>

            <!-- Right Side -->
            <div class="col-md-9">
                <div class="card p-3" style="background-color: #dddddd;">
                    <h6 class="text-danger fw-bold">Summary</h6>
                    <hr>
                    <p><?= $user['user_profile_objective'] ?></p>

                    <h6 class="text-danger fw-bold">Work History</h6>
                    <hr>
                    <p><strong>Total Experience:</strong> <?= $user['user_profile_totalexp'] ?> Years</p>

                    <!-- <div class="table-responsive">
                        <table class="table table-striped">
                            <thead class="text-white" style="background-color: #cbcbcb;">
                                <tr>
                                    <th>Position Title</th>
                                    <th>From</th>
                                    <th>To</th>
                                    <th>Company Name</th>
                                    <th>Job Level</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?= $user['user_profile_worktitle'] ?></td>
                                    <td><?= $user['user_profile_fromdate'] ?></td>
                                    <td><?= $user['user_profile_todate'] ?></td>
                                    <td><?= $user['user_profile_company'] ?></td>
                                    <td><?= $user['user_profile_worklevel'] ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div> -->

                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
