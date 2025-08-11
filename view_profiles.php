<?php
 include ('include/auth.php'); 

// Handle delete action
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $delete_query = "DELETE FROM Profile_builder WHERE user_profile_id = $delete_id";
    $cn->query($delete_query);
    // Optional: Show a message or redirect
    header("Location: view_profiles.php");
    exit();
}
// Fetch profiles
$sql = "SELECT * FROM Profile_builder ORDER BY user_profile_id DESC";
$result = $cn->query($sql);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Profile Dashboard</title>
    <?php include('include/source.html'); ?>
</head>

<body>
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
                <div class="container-fluid mt-5">
                    <h2>User Profiles</h2>
                    <table id="profilesTable" class="table table-bordered table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Gender</th>
                                <th>CNIC</th>
                                <th>Phone</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = $result->fetch_assoc()) { ?>
                                <tr>
                                    <td><?= $row['user_profile_id']; ?></td>
                                    <td><?= $row['user_profile_first_name']; ?></td>
                                    <td><?= $row['user_profile_last_name']; ?></td>
                                    <td><?= $row['user_profile_gender']; ?></td>
                                    <td><?= $row['user_profile_cnic']; ?></td>
                                    <td><?= $row['user_profile_phonenum']; ?></td>
                                    <td>
                                        <a href="edit_profile.php?id=<?= $row['user_profile_id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="view_profiles.php?delete_id=<?= $row['user_profile_id']; ?>" class="btn btn-sm btn-danger"
                                            onclick="return confirm('Are you sure you want to delete this profile?');">Delete</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <!-- container-fluid -->
                <!-- End Page-content -->

                <!-- Footer start -->
                <?php include('include/footer.html'); ?>
                <!-- Footer end -->
            </div>
            <!-- end main content-->
        </div>
        <!-- End main content -->
        <div class="custom-setting bg-primary pe-0 d-flex flex-column rounded-start">
            <button type="button" class="btn btn-wide border-0 text-white fs-20 avatar-sm rounded-end-0"
                id="light-dark-mode">
                <i class="mdi mdi-brightness-7 align-middle"></i>
                <i class="mdi mdi-white-balance-sunny align-middle"></i>
            </button>
            <button type="button" class="btn btn-wide border-0 text-white fs-20 avatar-sm" data-toggle="fullscreen">
                <i class="mdi mdi-arrow-expand-all align-middle"></i>
            </button>
            <button type="button" class="btn btn-wide border-0 text-white fs-16 avatar-sm" id="layout-dir-btn">
                <span>RTL</span>
            </button>
        </div>


        <!-- Rightbar Sidebar -->
        <div class="offcanvas offcanvas-end" id="offcanvas-rightsidabar">
            <div class="card h-100 rounded-0" data-simplebar="init">
                <div class="card-header bg-light">
                    <h6 class="card-title text-uppercase">Activities</h6>
                    <div class="card-addon">
                        <button class="btn btn-label-danger" data-bs-dismiss="offcanvas">
                            <i class="fa fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="">
                        <h3 class="card-title">Company summary</h3>
                        <div class="border rounded p-2">
                            <p class="text-muted mb-2">Server Load</p>
                            <h4 class="fs-16 mb-2">489</h4>
                            <div class="progress progress-sm" style="height:4px;">
                                <div class="progress-bar bg-success" style="width: 49.4%"></div>
                            </div>
                            <p class="text-muted mb-0 mt-1">49.4% <span>Avg</span></p>
                        </div>
                        <div class="border rounded p-2">
                            <p class="text-muted mb-2">Members online</p>
                            <h4 class="fs-16 mb-2">3,450</h4>
                            <div class="progress progress-sm" style="height:4px;">
                                <div class="progress-bar bg-danger" style="width: 34.6%"></div>
                            </div>
                            <p class="text-muted mb-0 mt-1">34.6% <span>Avg</span></p>
                        </div>
                        <div class="border rounded p-2">
                            <p class="text-muted mb-2">Today's revenue</p>
                            <h4 class="fs-16 mb-2">$18,390</h4>
                            <div class="progress progress-sm" style="height:4px;">
                                <div class="progress-bar bg-warning" style="width: 20%"></div>
                            </div>
                            <p class="text-muted mb-0 mt-1">$37,578 <span>Avg</span></p>
                        </div>
                        <div class="border rounded p-2">
                            <p class="text-muted mb-2">Expected profit</p>
                            <h4 class="fs-16 mb-2">$23,461</h4>
                            <div class="progress progress-sm" style="height:4px;">
                                <div class="progress-bar bg-info" style="width: 60%"></div>
                            </div>
                            <p class="text-muted mb-0 mt-1">$23,461 <span>Avg</span></p>
                        </div>
                    </div>

                    <div class="mt-4">
                        <h3 class="card-title">Latest log</h3>
                        <div class="timeline">
                            <div class="timeline-item">
                                <div class="timeline-pin"><i class="marker marker-dot text-primary"></i></div>
                                <div class="timeline-content">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-0">12 new users registered</p>
                                        <span class="text-muted">Just now</span>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline-item">
                                <div class="timeline-pin"><i class="marker marker-dot text-success"></i></div>
                                <div class="timeline-content">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-0">System shutdown <span
                                                class="badge badge-label-success">pending</span></p>
                                        <span class="text-muted">2 mins</span>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline-item">
                                <div class="timeline-pin"><i class="marker marker-dot text-primary"></i></div>
                                <div class="timeline-content">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-0">New invoice received</p>
                                        <span class="text-muted">3 mins</span>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline-item">
                                <div class="timeline-pin"><i class="marker marker-dot text-danger"></i></div>
                                <div class="timeline-content">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-0">New order received <span
                                                class="badge badge-label-danger">urgent</span></p>
                                        <span class="text-muted">10 mins</span>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline-item">
                                <div class="timeline-pin"><i class="marker marker-dot text-warning"></i></div>
                                <div class="timeline-content">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-0">Production server down</p>
                                        <span class="text-muted">1 hrs</span>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline-item">
                                <div class="timeline-pin"><i class="marker marker-dot text-info"></i></div>
                                <div class="timeline-content">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-0">System error <a href="#">check</a></p>
                                        <span class="text-muted">2 hrs</span>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline-item">
                                <div class="timeline-pin"><i class="marker marker-dot text-secondary"></i></div>
                                <div class="timeline-content">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-0">DB overloaded 80%</p>
                                        <span class="text-muted">5 hrs</span>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline-item">
                                <div class="timeline-pin"><i class="marker marker-dot text-success"></i></div>
                                <div class="timeline-content">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-0">Production server up</p>
                                        <span class="text-muted">6 hrs</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4">
                        <h3 class="card-title">Upcoming activities</h3>
                        <div class="timeline timeline-timed">
                            <div class="timeline-item">
                                <span class="timeline-time">10:00</span>
                                <div class="timeline-pin"><i class="marker marker-circle text-primary"></i></div>
                                <div class="timeline-content">
                                    <div>
                                        <span>Meeting with</span>
                                        <div class="avatar-group ms-2">
                                            <div class="avatar avatar-circle">
                                                <img src="assets/images/users/avatar-1.png" alt="Avatar image"
                                                    class="avatar-2xs" />
                                            </div>
                                            <div class="avatar avatar-circle">
                                                <img src="assets/images/users/avatar-2.png" alt="Avatar image"
                                                    class="avatar-2xs" />
                                            </div>
                                            <div class="avatar avatar-circle">
                                                <img src="assets/images/users/avatar-3.png" alt="Avatar image"
                                                    class="avatar-2xs" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline-item">
                                <span class="timeline-time">12:45</span>
                                <div class="timeline-pin"><i class="marker marker-circle text-warning"></i></div>
                                <div class="timeline-content">
                                    <p class="mb-0">Lorem ipsum dolor sit amit,consectetur eiusmdd tempor incididunt ut
                                        labore et dolore magna elit enim at minim veniam quis nostrud</p>
                                </div>
                            </div>
                            <div class="timeline-item">
                                <span class="timeline-time">14:00</span>
                                <div class="timeline-pin"><i class="marker marker-circle text-danger"></i></div>
                                <div class="timeline-content">
                                    <p class="mb-0">Received a new feedback on <a href="#">GoFinance</a> App product.</p>
                                </div>
                            </div>
                            <div class="timeline-item">
                                <span class="timeline-time">15:20</span>
                                <div class="timeline-pin"><i class="marker marker-circle text-success"></i></div>
                                <div class="timeline-content">
                                    <p class="mb-0">Lorem ipsum dolor sit amit,consectetur eiusmdd tempor incididunt ut
                                        labore et dolore magna.</p>
                                </div>
                            </div>
                            <div class="timeline-item">
                                <span class="timeline-time">17:00</span>
                                <div class="timeline-pin"><i class="marker marker-circle text-info"></i></div>
                                <div class="timeline-content">
                                    <p class="mb-0">Make Deposit <a href="#">USD 700</a> o ESL.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end card-->
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
    <!-- Required datatable js -->
    <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>

    <!-- Responsive examples -->
    <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="assets/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>

    <!-- contact init js -->
    <script src="assets/js/pages/profile.init.js"></script>

    <!-- Datatable init js -->
    <script src="assets/js/pages/datatables-base.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>


<!-- Filtering in table -->
<script>
    $(document).ready(function () {
        $('#profilesTable').DataTable({
            "order": [[0, "desc"]],
            "pageLength": -1, // Show all entries by default
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ]
        });
    });
</script>


    

</body>

</html>