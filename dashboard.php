<?php
include ('include/auth.php');
?>
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Login | TEF - User & Dashboard</title>
   <?php include('include/source.html'); ?>

    <style>
        th {
            background-color: #38c66cbb !important;
            color: white !important;
        }
    </style>
</head>

<body>

    <div id="layout-wrapper">


        <!-- Start topbar -->
         <?php include('include/topbar.php'); ?>
         <!-- End topbar -->

        <!-- ========== Left Sidebar Start ========== -->
         <?php include('include/sidebar.html'); ?>
        <!-- Left Sidebar End -->


        <!-- Start right Content here -->

        <div class="main-content ">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <div>
                                    <h4 class="fs-16 fw-semibold mb-1 mb-md-2">Good Morning, <?php echo htmlspecialchars($_SESSION['user_register_btn']); ?>! </h4>
                                    <p class="text-muted mb-0">Here's what's happening with your store today.</p>
                                </div>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">TICER_JOB_PORTAL</a>
                                        </li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--    end row -->
                    <div class="px-3">
                        <div class="row">
                            <div class="col-xxl-9">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-icon">
                                            <i class="fas fa-desktop fs-14 text-muted"></i>
                                        </div>
                                        <h4 class="card-title mb-0">Over All Statics</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">

                                            <div class="col-xl-3">
                                                <div class="card bg-danger-subtle"
                                                    style="background: url('assets/images/dashboard/dashboard-shape-1.png'); background-repeat: no-repeat; background-position: bottom center; ">
                                                    <div class="card-body">
                                                        <div class="d-flex">
                                                            <div class="avatar avatar-sm avatar-label-danger">
                                                                <i class="mdi mdi-buffer mt-1"></i>
                                                            </div>
                                                            <div class="ms-3">
                                                                <p class="text-danger mb-1">Total balance</p>
                                                                <h4 class="mb-0">$1,452.55</h4>
                                                            </div>
                                                        </div>
                                                        <div class="hstack gap-2 mt-3">
                                                            <button class="btn btn-light">Transfer</button>
                                                            <button class="btn btn-info">Request</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3">
                                                <div class="card bg-success-subtle"
                                                    style="background: url('assets/images/dashboard/dashboard-shape-2.png'); background-repeat: no-repeat; background-position: bottom center; ">
                                                    <div class="card-body">
                                                        <div class="d-flex">
                                                            <div class="avatar avatar-sm avatar-label-success">
                                                                <i class="mdi mdi-cash-usd-outline mt-1"></i>
                                                            </div>
                                                            <div class="ms-3">
                                                                <p class="text-success mb-1">Upcoming $</p>
                                                                <h4 class="mb-0">$120</h4>
                                                            </div>
                                                        </div>
                                                        <div class="mt-3 mb-2">
                                                            <p class="mb-0">4 not confirmed</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3">
                                                <div class="card bg-danger-subtle"
                                                    style="background: url('assets/images/dashboard/dashboard-shape-1.png'); background-repeat: no-repeat; background-position: bottom center; ">
                                                    <div class="card-body">
                                                        <div class="d-flex">
                                                            <div class="avatar avatar-sm avatar-label-danger">
                                                                <i class="mdi mdi-buffer mt-1"></i>
                                                            </div>
                                                            <div class="ms-3">
                                                                <p class="text-danger mb-1">Total balance</p>
                                                                <h4 class="mb-0">$1,452.55</h4>
                                                            </div>
                                                        </div>
                                                        <div class="hstack gap-2 mt-3">
                                                            <button class="btn btn-light">Transfer</button>
                                                            <button class="btn btn-info">Request</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3">
                                                <div class="card bg-info-subtle"
                                                    style="background: url('assets/images/dashboard/dashboard-shape-3.png'); background-repeat: no-repeat; background-position: bottom center; ">
                                                    <div class="card-body">
                                                        <div class="d-flex">
                                                            <div class="avatar avatar-sm avatar-label-info">
                                                                <i class="mdi mdi-webhook mt-1"></i>
                                                            </div>
                                                            <div class="ms-3">
                                                                <p class="text-info mb-1">Finished appt.</p>
                                                                <h4 class="mb-0">72</h4>
                                                            </div>
                                                        </div>
                                                        <div class="mt-3 mb-2">
                                                            <p class="mb-0"><span class="text-primary me-2 fs-14"><i
                                                                        class="fas fa-caret-up me-1"></i>3.4%</span>vs
                                                                last
                                                                month
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card ">
                                            <div class="card-header">
                                                <div class="card-icon">
                                                    <i class="fas fa-desktop fs-14 text-muted"></i>
                                                </div>
                                                <h4 class="card-title mb-0">Employee Data Table</h4>
                                            </div>
                                            <div class="card-body waves-block">
                                                <table id="datatable-buttons"
                                                    class="table table-hover table-bordered table-striped dt-responsive nowrap"
                                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                    <thead>
                                                        <tr>
                                                            <th>Sr.#</th>
                                                            <th>Name</th>
                                                            <th>Position</th>
                                                            <th>Office</th>
                                                            <th>Age</th>
                                                            <th>Start date</th>
                                                            <th>Salary</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        <tr>
                                                            <td>01</td>
                                                            <td>Prescott Bartlett</td>
                                                            <td>Technical Author</td>
                                                            <td>London</td>
                                                            <td>27</td>
                                                            <td>2011-05-07</td>
                                                            <td>$145,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>01</td>
                                                            <td>Prescott Bartlett</td>
                                                            <td>Technical Author</td>
                                                            <td>London</td>
                                                            <td>27</td>
                                                            <td>2011-05-07</td>
                                                            <td>$145,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>01</td>
                                                            <td>Prescott Bartlett</td>
                                                            <td>Technical Author</td>
                                                            <td>London</td>
                                                            <td>27</td>
                                                            <td>2011-05-07</td>
                                                            <td>$145,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>01</td>
                                                            <td>Prescott Bartlett</td>
                                                            <td>Technical Author</td>
                                                            <td>London</td>
                                                            <td>27</td>
                                                            <td>2011-05-07</td>
                                                            <td>$145,000</td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>

                                        </div> <!-- end col -->
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end container-fluid -->
                </div>
                <!-- End Page-content -->

                <!-- Footer start -->
                <?php include('include/footer.html'); ?>
                <!-- Footer end -->
            </div>
            <!-- end main content-->
        </div>
        <!-- end layout-wrapper -->

    </div>

    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>

    <!-- Required datatable js -->
    <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>

    <!-- buttons examples -->
    <script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>

    <script src="assets/libs/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
    <script src="assets/libs/jszip/jszip.min.js"></script>
    <script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
    <script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
    <script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <!-- DataTables JS and Extensions -->
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.flash.min.js"></script>
    <!-- Responsive examples -->
    <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="assets/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>

    <!-- Datatable init js -->
    <script src="assets/js/pages/datatables-extension.init.js"></script>

    <!-- apexcharts -->
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

    <script src="assets/js/pages/dashboard.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>
</body>

</html>