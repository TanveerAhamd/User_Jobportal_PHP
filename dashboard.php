<?php
session_start();
ob_start();
if (!isset($_SESSION['user_register_btn'])) {
    header("Location: index.php");
    exit();
}
?>
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Login | TEF - User & Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Codebucks" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- DataTables -->
    <link href="assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />

    <!-- buttons datatable -->
    <link href="assets/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet"
        type="text/css" />

    <!-- Responsive datatable -->
    <link href="assets/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet"
        type="text/css" />

    <!-- dark layout js -->
    <script src="assets/js/pages/layout.js"></script>

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- simplebar css -->
    <link href="assets/libs/simplebar/simplebar.min.css" rel="stylesheet">
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

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


        <header id="page-topbar">
            <div class="navbar-header">

                <!-- Logo -->

                <!-- Start Navbar-Brand -->

                <div class="navbar-logo-box">
                    <a href="dashboard.php" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="assets/images/logo-sm.png" alt="logo-sm-dark" height="20">
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/logo-dark.png" alt="logo-dark" height="18">
                        </span>
                    </a>

                    <a href="dashboard.php" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="assets/images/logo-sm.png" alt="logo-sm-light" height="20">
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/logo-light.png" alt="logo-light" height="18">
                        </span>
                    </a>

                    <button type="button" class="btn btn-sm top-icon sidebar-btn" id="sidebar-btn">
                        <i class="mdi mdi-menu-open align-middle fs-19"></i>
                    </button>
                </div>
                <!-- End Navbar-Brand -->
                <!-- Start Profile navbar -->
                <div class="d-flex justify-content-between menu-sm px-3 ms-auto">
                    <div class="d-flex align-items-center gap-2">
                        <!-- <div>
                            <h4 class="fs-16 fw-semibold mb-1 mb-md-2">TICER_<span class="text-primary">JOB_PORTAL
                                </span></h4>
                        </div> -->
                    </div>

                    <div class="d-flex align-items-center gap-2">
                        <!--Start App Search-->
                        <form class="app-search d-none d-lg-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="fab fa-sistrix fs-17 align-middle"></span>
                            </div>
                        </form>
                        <!--End App Search-->

                        <!-- Start Notification -->
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn btn-sm top-icon" id="page-header-notifications-dropdown"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-bell align-middle"></i>
                                <span class="btn-marker"><i class="marker marker-dot text-danger"></i><span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-md dropdown-menu-end p-0"
                                aria-labelledby="page-header-notifications-dropdown">
                                <div class="p-3 bg-info">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="text-white m-0"><i class="far fa-bell me-2"></i> Notifications
                                            </h6>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#!" class="badge bg-info-subtle text-info"> 8+</a>
                                        </div>
                                    </div>
                                </div>
                                <div data-simplebar style="max-height: 230px;">
                                    <a href="" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="avatar avatar-xs avatar-label-primary me-3">
                                                <span class="rounded fs-16">
                                                    <i class="mdi mdi-file-document-outline"></i>
                                                </span>
                                            </div>
                                            <div class="flex-1">
                                                <h6 class="mb-1">New report has been recived</h6>
                                                <div class="fs-12 text-muted">
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                                </div>
                                            </div>
                                            <i class="mdi mdi-chevron-right align-middle ms-2"></i>
                                        </div>
                                    </a>
                                    <a href="" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="avatar avatar-xs avatar-label-success me-3">
                                                <span class="rounded fs-16">
                                                    <i class="mdi mdi-cart-variant"></i>
                                                </span>
                                            </div>
                                            <div class="flex-1">
                                                <h6 class="mb-1">Last order was completed</h6>
                                                <div class="fs-12 text-muted">
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hour ago</p>
                                                </div>
                                            </div>
                                            <i class="mdi mdi-chevron-right align-middle ms-2"></i>
                                        </div>
                                    </a>
                                    <a href="" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="avatar avatar-xs avatar-label-danger me-3">
                                                <span class="rounded fs-16">
                                                    <i class="mdi mdi-account-group"></i>
                                                </span>
                                            </div>
                                            <div class="flex-1">
                                                <h6 class="mb-1">Completed meeting canceled</h6>
                                                <div class="fs-12 text-muted">
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 5 hour ago</p>
                                                </div>
                                            </div>
                                            <i class="mdi mdi-chevron-right align-middle ms-2"></i>
                                        </div>
                                    </a>
                                    <a href="" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="avatar avatar-xs avatar-label-warning me-3">
                                                <span class="rounded fs-16">
                                                    <i class="mdi mdi-send-outline"></i>
                                                </span>
                                            </div>
                                            <div class="flex-1">
                                                <h6 class="mb-1">New feedback received</h6>
                                                <div class="fs-12 text-muted">
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 6 hour ago</p>
                                                </div>
                                            </div>
                                            <i class="mdi mdi-chevron-right align-middle ms-2"></i>
                                        </div>
                                    </a>
                                    <a href="" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="avatar avatar-xs avatar-label-secondary me-3">
                                                <span class="rounded fs-16">
                                                    <i class="mdi mdi-download-box"></i>
                                                </span>
                                            </div>
                                            <div class="flex-1">
                                                <h6 class="mb-1">New update was available</h6>
                                                <div class="fs-12 text-muted">
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 day ago</p>
                                                </div>
                                            </div>
                                            <i class="mdi mdi-chevron-right align-middle ms-2"></i>
                                        </div>
                                    </a>
                                    <a href="" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="avatar avatar-xs avatar-label-info me-3">
                                                <span class="rounded fs-16">
                                                    <i class="mdi mdi-hexagram-outline"></i>
                                                </span>
                                            </div>
                                            <div class="flex-1">
                                                <h6 class="mb-1">Your password was changed</h6>
                                                <div class="fs-12 text-muted">
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 2 day ago</p>
                                                </div>
                                            </div>
                                            <i class="mdi mdi-chevron-right align-middle ms-2"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2 border-top">
                                    <div class="d-grid">
                                        <a class="btn btn-sm btn-link font-size-14 text-center"
                                            href="javascript:void(0)">
                                            <i class="mdi mdi-arrow-right-circle me-1"></i> View More..
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Notification -->

                        <!-- Start Activities -->
                        <div class="d-inline-block activities">
                            <button type="button" class="btn btn-sm top-icon" data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvas-rightsidabar">
                                <i class="fas fa-table align-middle"></i>
                            </button>
                        </div>
                        <!-- End Activities -->

                        <!-- Start Profile -->
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn btn-sm top-icon p-0" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded avatar-2xs p-0" src="assets/images/users/avatar-6.png"
                                    alt="Header Avatar">
                            </button>
                            <div
                                class="dropdown-menu dropdown-menu-wide dropdown-menu-end dropdown-menu-animated overflow-hidden py-0">
                                <div class="card border-0">
                                    <div class="card-header bg-primary rounded-0">
                                        <div class="rich-list-item w-100 p-0">
                                            <div class="rich-list-prepend">
                                                <div class="avatar avatar-label-light avatar-circle">
                                                    <div class="avatar-display"><i class="fa fa-user-alt"></i></div>
                                                </div>
                                            </div>
                                            <div class="rich-list-content">
                                                <h3 class="rich-list-title text-white">Charlie Stone</h3>
                                                <span class="rich-list-subtitle text-white">admin@codubucks.in</span>
                                            </div>
                                            <div class="rich-list-append"><span
                                                    class="badge badge-label-light fs-6">6+</span></div>
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="grid-nav grid-nav-flush grid-nav-action grid-nav-no-rounded">
                                            <div class="grid-nav-row">
                                                <a href="apps-contact.html" class="grid-nav-item">
                                                    <div class="grid-nav-icon"><i class="far fa-address-card"></i></div>
                                                    <span class="grid-nav-content">Profile</span>
                                                </a>
                                                <a href="#!" class="grid-nav-item">
                                                    <div class="grid-nav-icon"><i class="far fa-comments"></i></div>
                                                    <span class="grid-nav-content">Messages</span>
                                                </a>
                                                <a href="#!" class="grid-nav-item">
                                                    <div class="grid-nav-icon"><i class="far fa-clone"></i></div>
                                                    <span class="grid-nav-content">Activities</span>
                                                </a>
                                            </div>
                                            <div class="grid-nav-row">
                                                <a href="#!" class="grid-nav-item">
                                                    <div class="grid-nav-icon"><i class="far fa-calendar-check"></i>
                                                    </div>
                                                    <span class="grid-nav-content">Tasks</span>
                                                </a>
                                                <a href="#!" class="grid-nav-item">
                                                    <div class="grid-nav-icon"><i class="far fa-sticky-note"></i></div>
                                                    <span class="grid-nav-content">Notes</span>
                                                </a>
                                                <a href="#!" class="grid-nav-item">
                                                    <div class="grid-nav-icon"><i class="far fa-bell"></i></div>
                                                    <span class="grid-nav-content">Notification</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer card-footer-bordered rounded-0"><a href="signout.php"
                                            class="btn btn-label-danger">Sign out</a></div>
                                </div>
                            </div>
                        </div>
                        <!-- End Profile -->
                    </div>
                </div>
                <!-- End Profile navbar -->

            </div>
        </header>
        <!-- End topbar -->

        <!-- ========== Left Sidebar Start ========== -->
        <div class="sidebar-left">

            <div data-simplebar class="h-100">

                <!--- Sidebar-menu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="left-menu list-unstyled" id="side-menu">
                        <li>
                            <a href="dashboard.php" class="">
                                <i class="fas fa-desktop"></i>
                                <span>USER Dashboard</span>
                            </a>
                        </li>
                        <li class="menu-title">Profile</li>


                        <li>
                            <a href="javascript: void(0);" class="has-arrow ">
                                <i class="fa fa-palette"></i>
                                <span>Build Profile</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="profile_builder_form_wizard.php"><i
                                            class="mdi mdi-checkbox-blank-circle align-middle"></i>Profile_Form</a></li>
                                <li><a href="view_profile.php"><i
                                            class="mdi mdi-checkbox-blank-circle align-middle"></i>View Profile</a></li>
                                <li><a href="view_profiles.php"><i
                                            class="mdi mdi-checkbox-blank-circle align-middle"></i>View Profiles</a></li>
                       
                            </ul>
                        </li>
                        <li class="menu-title">jobs</li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow ">
                                <i class="fa fa-unlock-alt"></i>
                                <span>Apply Jobs</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="appliedjobs.php"><i class="mdi mdi-checkbox-blank-circle align-middle"></i>
                                        view job</a></li>
                                <li><a href="auth-register.html"><i
                                            class="mdi mdi-checkbox-blank-circle align-middle"></i>Applied list</a></li>
                            </ul>
                        </li>
                        <li class="menu-title">Pages</li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow ">
                                <i class="fa fa-unlock-alt"></i>
                                <span>Authentication</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="index.php"><i class="mdi mdi-checkbox-blank-circle align-middle"></i>
                                        Login</a></li>
                                <li><a href="register.php"><i
                                            class="mdi mdi-checkbox-blank-circle align-middle"></i> Register</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
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