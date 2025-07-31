<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Contact | Clivax - Admin & Dashboard Template</title>
    <?php include ('../include/source.html'); ?>


</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">


        <!-- Start topbar -->
       <?php include ('../include/topbar.php'); ?>
        <!-- End topbar -->

        <!-- ========== Left Sidebar Start ========== -->
        <?php include ('../include/sidebar.html'); ?>
        <!-- Left Sidebar End -->


        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- Left Side - Profile Picture -->
                        <div class="col-md-3" style="background-color: #dddddd;">
                            <div class="card text-center p-3">
                                <img class="preview" src="https://jobs.punjab.gov.pk/PJP-Uploads/frontend/employee.jpg"
                                    alt="">
                                <button class="btn btn-info mt-3">
                                    <label for="">Change Picture</label>
                                    <input type="file">
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
                                    <li><strong>Name</strong></li>
                                    <li><strong>Father Name</strong></li>
                                    <li><strong>CNIC</strong></li>
                                    <li><strong>D.O.B</strong></li>
                                    <li><strong>Age</strong> <span class="float-end">55 Years Old</span></li>
                                    <li><strong>Gender</strong></li>
                                    <li><strong>Marital Status</strong></li>
                                    <li><strong>Religion</strong></li>
                                    <li><strong>Mobile</strong> <span class="float-end">N/A</span></li>
                                    <li><strong>Land Line</strong> <span class="float-end">N/A</span></li>
                                    <li><strong>Address</strong></li>
                                    <li><strong>City</strong></li>
                                    <li><strong>Domicile</strong></li>
                                    <li><strong>Fax</strong> <span class="float-end">N/A</span></li>
                                    <li>
                                        <strong>E-mail</strong>
                                        <a href="mailto:noorjaveria976@gmail.com"
                                            class="d-block text-primary">noorjaveria976@gmail.com</a>
                                    </li>
                                    <li><strong>Nationality</strong></li>
                                    <li><strong>Country</strong></li>
                                </ul>

                                <hr class="bg-dark">

                                <p class="fw-bold text-primary mb-1">Target Job</p>
                                <hr class="mt-0 bg-dark">
                                <ul class="list-unstyled">
                                    <li><strong>Job Title</strong></li>
                                    <li><strong>Career Level</strong></li>
                                    <li><strong>Target Salary</strong> <span class="float-end">N/A</span></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Right Side - Summary and Work History -->
                        <div class="col-md-9">
                            <div class="card p-3" style="background-color: #dddddd;">
                                <h6 class="text-danger fw-bold">Summary</h6>
                                <hr>
                                <h6 class="text-danger fw-bold">Work History</h6>
                                <hr>

                                <p><strong>Total Experience:</strong> -0 Years</p>

                                <div class="table-responsive">
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
                                                <td>Et amet nemo ex deb</td>
                                                <td>18-Jul-2025</td>
                                                <td>11-Jul-2025</td>
                                                <td>Fowler and Elliott Associates</td>
                                                <td>Entry Level</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>   
                    <!-- end row -->
                </div>
                <!-- container-fluid -->
                <!-- End Page-content -->

                <!-- Footer start -->
                <?php include('../include/footer.html'); ?>
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

</body>

</html>