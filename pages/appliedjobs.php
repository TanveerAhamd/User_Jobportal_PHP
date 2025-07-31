<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Contact | Clivax - Admin & Dashboard Template</title>
    <?php include ('../include/source.html'); ?>
    <style>
        table,
        th,
        td {
            border: none !important;
        }

        table.dataTable.no-footer {
            border-bottom: none !important;
        }

        table.dataTable thead th,
        table.dataTable tbody td {
            border: none !important;
        }

        .dataTables_wrapper .dataTables_paginate {
            margin-top: 10px;
        }

        table td {
            white-space: normal !important;
            word-wrap: break-word;
            overflow-wrap: break-word;
            vertical-align: top;
        }

        @media (max-width: 576px) {
            table td {
                display: block;
                width: 100% !important;
                box-sizing: border-box;
            }

            table tr {
                display: block;
                margin-bottom: 1rem;
                border-bottom: 1px solid #dee2e6;
            }

            table td::before {
                content: attr(data-label);
                font-weight: bold;
                display: block;
                margin-bottom: 5px;
                color: #555;
            }
        }
    </style>

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

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Jobs Available</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Clivax</a></li>
                                        <li class="breadcrumb-item active">Chat</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-xl-3 bg-white p-3">
                            <div class="conatiner ">
                                <h5 class="fw-bold text-info">Filter Search</h5>
                                <input type="text" class="form-control mb-2" placeholder="Looking for...">
                                <a href="#" class="d-block mb-2 text-info">Clear Title</a>

                                <select class="form-select mb-2">
                                    <option>Departments</option>


                                    <option>Departments</option>
                                    <option>Departments</option>
                                    <option>Departments</option>
                                </select>
                                <a href="#" class="d-block mb-2 text-info">Clear Departments</a>

                                <select class="form-select mb-2">
                                    <option>Location</option>
                                    <option>Location</option>
                                    <option>Location</option>
                                    <option>Location</option>
                                    <option>Location</option>
                                </select>
                                <a href="#" class="d-block mb-2 text-info">Clear Location</a>

                                <button class="btn btn-primary w-100 mb-4">Search</button>

                                <h6 class="fw-bold">By Industry</h6>
                                <ul class="list-unstyled small">
                                    <li>Punjab Wildlife and Parks (1)</li>
                                    <li>Punjab Govt. (9)</li>
                                    <li>Education/Training (13)</li>
                                    <li>Punjab Education Initiatives (6)</li>
                                    <li>Information Technology (53)</li>

                                </ul>

                                <h6 class="fw-bold mt-4">Type of Contract</h6>
                                <div class="form-check small">
                                    <input type="checkbox" class="form-check-input"> Part Time <br>
                                    <input type="checkbox" class="form-check-input"> Full Time <br>
                                    <input type="checkbox" class="form-check-input"> Daily Wages <br>
                                    <input type="checkbox" class="form-check-input"> Permanent <br>
                                    <input type="checkbox" class="form-check-input"> Regular <br>
                                    <input type="checkbox" class="form-check-input"> Contract <br>
                                    <input type="checkbox" class="form-check-input"> Contingency <br>
                                    <input type="checkbox" class="form-check-input"> Adhoc Basis
                                </div>

                                <button class="btn btn-primary btn-sm mt-2">Clear All</button>
                                <div class="form-check small">
                                    <input type="radio" name="career" class="form-check-input"> Student/Internship <br>
                                    <input type="radio" name="career" class="form-check-input"> Entry Level <br>
                                    <input type="radio" name="career" class="form-check-input"> Mid Career <br>
                                    <input type="radio" name="career" class="form-check-input"> Management <br>
                                    <input type="radio" name="career" class="form-check-input"> Executive/Director <br>
                                    <input type="radio" name="career" class="form-check-input"> Senior Management
                                </div>
                                <button class="btn btn-primary btn-sm mt-2">Clear All</button>
                            </div>
                        </div>


                        <div class="col-xl-9 ">
                            <div class="container-fluid bg-white  p-3">
                                <div class="row">
                                    <div class="col-xl-12 ">
                                        <div class="table-responsive">
                                            <table id="selection-datatable" class="bg-secondary-subtle"
                                                class="table dt-responsive nowrap  border-0 ">
                                                <thead>
                                                    <tr>
                                                        <th>Jobs Title</th>
                                                        <th>Departement</th>
                                                        <th>Project</th>
                                                        <th>Province</th>
                                                        <th>Last Date Apply</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody class="bg-white">
                                                    <!-- Example row -->
                                                    <tr>
                                                        <td>
                                                            <a href="" class="text-info "
                                                                style="font-weight: 500; opacity: 0.5;">Company
                                                                Secretary</a>
                                                        </td>
                                                        <td>Management lorem30</td>
                                                        <td>


                                                            <p class="">Lorem ipsum dolor sit amet consectetur
                                                                adipisicing elit. Doloremque, libero.</p>
                                                        </td>
                                                        <td>PUNJAB</td>
                                                        <td>15-Aug-2025</td>
                                                        <td class="d-flex gap-1">
                                                            <small class="btn btn-primary text-white"> <i
                                                                    class="ri-printer-line"></i></small>
                                                            <small class="btn btn-primary">Apply</small>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <a href="" class="text-info "
                                                                style="font-weight: 500; opacity: 0.5;">Company
                                                                Secretary</a>
                                                        </td>
                                                        <td>Management lorem30</td>
                                                        <td>


                                                            <p class="">Lorem ipsum dolor sit amet consectetur
                                                                adipisicing elit. Doloremque, libero.</p>
                                                        </td>
                                                        <td>PUNJAB</td>
                                                        <td>15-Aug-2025</td>
                                                        <td class="d-flex gap-1">
                                                            <small class="btn btn-primary text-white"> <i
                                                                    class="ri-printer-line"></i></small>
                                                            <small class="btn btn-primary">Apply</small>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="" class="text-info "
                                                                style="font-weight: 500; opacity: 0.5;">Company
                                                                Secretary</a>
                                                        </td>
                                                        <td>Management lorem30</td>
                                                        <td>


                                                            <p class="">Lorem ipsum dolor sit amet consectetur
                                                                adipisicing elit. Doloremque, libero.</p>
                                                        </td>
                                                        <td>PUNJAB</td>
                                                        <td>15-Aug-2025</td>
                                                        <td class="d-flex gap-1">
                                                            <small class="btn btn-primary text-white"> <i
                                                                    class="ri-printer-line"></i></small>
                                                            <small class="btn btn-primary">Apply</small>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="" class="text-info "
                                                                style="font-weight: 500; opacity: 0.5;">Company
                                                                Secretary</a>
                                                        </td>
                                                        <td>Management lorem30</td>
                                                        <td>


                                                            <p class="">Lorem ipsum dolor sit amet consectetur
                                                                adipisicing elit. Doloremque, libero.</p>
                                                        </td>
                                                        <td>PUNJAB</td>
                                                        <td>15-Aug-2025</td>
                                                        <td class="d-flex gap-1">
                                                            <small class="btn btn-primary text-white"> <i
                                                                    class="ri-printer-line"></i></small>
                                                            <small class="btn btn-primary">Apply</small>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="" class="text-info "
                                                                style="font-weight: 500; opacity: 0.5;">Company
                                                                Secretary</a>
                                                        </td>
                                                        <td>Management lorem30</td>
                                                        <td>


                                                            <p class="">Lorem ipsum dolor sit amet consectetur
                                                                adipisicing elit. Doloremque, libero.</p>
                                                        </td>
                                                        <td>PUNJAB</td>
                                                        <td>15-Aug-2025</td>
                                                        <td class="d-flex gap-1">
                                                            <small class="btn btn-primary text-white"> <i
                                                                    class="ri-printer-line"></i></small>
                                                            <small class="btn btn-primary">Apply</small>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="" class="text-info "
                                                                style="font-weight: 500; opacity: 0.5;">Company
                                                                Secretary</a>
                                                        </td>
                                                        <td>Management lorem30</td>
                                                        <td>


                                                            <p class="">Lorem ipsum dolor sit amet consectetur
                                                                adipisicing elit. Doloremque, libero.</p>
                                                        </td>
                                                        <td>PUNJAB</td>
                                                        <td>15-Aug-2025</td>
                                                        <td class="d-flex gap-1">
                                                            <small class="btn btn-primary text-white"> <i
                                                                    class="ri-printer-line"></i></small>
                                                            <small class="btn btn-primary">Apply</small>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="" class="text-info "
                                                                style="font-weight: 500; opacity: 0.5;">Company
                                                                Secretary</a>
                                                        </td>
                                                        <td>Management lorem30</td>
                                                        <td>


                                                            <p class="">Lorem ipsum dolor sit amet consectetur
                                                                adipisicing elit. Doloremque, libero.</p>
                                                        </td>
                                                        <td>PUNJAB</td>
                                                        <td>15-Aug-2025</td>
                                                        <td class="d-flex gap-1">
                                                            <small class="btn btn-primary text-white"> <i
                                                                    class="ri-printer-line"></i></small>
                                                            <small class="btn btn-primary">Apply</small>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="" class="text-info "
                                                                style="font-weight: 500; opacity: 0.5;">Company
                                                                Secretary</a>
                                                        </td>
                                                        <td>Management lorem30</td>
                                                        <td>


                                                            <p class="">Lorem ipsum dolor sit amet consectetur
                                                                adipisicing elit. Doloremque, libero.</p>
                                                        </td>
                                                        <td>PUNJAB</td>
                                                        <td>15-Aug-2025</td>
                                                        <td class="d-flex gap-1">
                                                            <small class="btn btn-primary text-white"> <i
                                                                    class="ri-printer-line"></i></small>
                                                            <small class="btn btn-primary">Apply</small>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="" class="text-info "
                                                                style="font-weight: 500; opacity: 0.5;">Company
                                                                Secretary</a>
                                                        </td>
                                                        <td>Management lorem30</td>
                                                        <td>


                                                            <p class="">Lorem ipsum dolor sit amet consectetur
                                                                adipisicing elit. Doloremque, libero.</p>
                                                        </td>
                                                        <td>PUNJAB</td>
                                                        <td>15-Aug-2025</td>
                                                        <td class="d-flex gap-1">
                                                            <small class="btn btn-primary text-white"> <i
                                                                    class="ri-printer-line"></i></small>
                                                            <small class="btn btn-primary">Apply</small>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="" class="text-info "
                                                                style="font-weight: 500; opacity: 0.5;">Company
                                                                Secretary</a>
                                                        </td>
                                                        <td>Management lorem30</td>
                                                        <td>


                                                            <p class="">Lorem ipsum dolor sit amet consectetur
                                                                adipisicing elit. Doloremque, libero.</p>
                                                        </td>
                                                        <td>PUNJAB</td>
                                                        <td>15-Aug-2025</td>
                                                        <td class="d-flex gap-1">
                                                            <small class="btn btn-primary text-white"> <i
                                                                    class="ri-printer-line"></i></small>
                                                            <small class="btn btn-primary">Apply</small>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="" class="text-info "
                                                                style="font-weight: 500; opacity: 0.5;">Company
                                                                Secretary</a>
                                                        </td>
                                                        <td>Management lorem30</td>
                                                        <td>


                                                            <p class="">Lorem ipsum dolor sit amet consectetur
                                                                adipisicing elit. Doloremque, libero.</p>
                                                        </td>
                                                        <td>PUNJAB</td>
                                                        <td>15-Aug-2025</td>
                                                        <td class="d-flex gap-1">
                                                            <small class="btn btn-primary text-white"> <i
                                                                    class="ri-printer-line"></i></small>
                                                            <small class="btn btn-primary">Apply</small>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="" class="text-info "
                                                                style="font-weight: 500; opacity: 0.5;">Company
                                                                Secretary</a>
                                                        </td>
                                                        <td>Management lorem30</td>
                                                        <td>


                                                            <p class="">Lorem ipsum dolor sit amet consectetur
                                                                adipisicing elit. Doloremque, libero.</p>
                                                        </td>
                                                        <td>PUNJAB</td>
                                                        <td>15-Aug-2025</td>
                                                        <td class="d-flex gap-1">
                                                            <small class="btn btn-primary text-white"> <i
                                                                    class="ri-printer-line"></i></small>
                                                            <small class="btn btn-primary">Apply</small>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="" class="text-info "
                                                                style="font-weight: 500; opacity: 0.5;">Company
                                                                Secretary</a>
                                                        </td>
                                                        <td>Management lorem30</td>
                                                        <td>


                                                            <p class="">Lorem ipsum dolor sit amet consectetur
                                                                adipisicing elit. Doloremque, libero.</p>
                                                        </td>
                                                        <td>PUNJAB</td>
                                                        <td>15-Aug-2025</td>
                                                        <td class="d-flex gap-1">
                                                            <small class="btn btn-primary text-white"> <i
                                                                    class="ri-printer-line"></i></small>
                                                            <small class="btn btn-primary">Apply</small>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="" class="text-info "
                                                                style="font-weight: 500; opacity: 0.5;">Company
                                                                Secretary</a>
                                                        </td>
                                                        <td>Management lorem30</td>
                                                        <td>


                                                            <p class="">Lorem ipsum dolor sit amet consectetur
                                                                adipisicing elit. Doloremque, libero.</p>
                                                        </td>
                                                        <td>PUNJAB</td>
                                                        <td>15-Aug-2025</td>
                                                        <td class="d-flex gap-1">
                                                            <small class="btn btn-primary text-white"> <i
                                                                    class="ri-printer-line"></i></small>
                                                            <small class="btn btn-primary">Apply</small>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="" class="text-info "
                                                                style="font-weight: 500; opacity: 0.5;">Company
                                                                Secretary</a>
                                                        </td>
                                                        <td>Management lorem30</td>
                                                        <td>


                                                            <p class="">Lorem ipsum dolor sit amet consectetur
                                                                adipisicing elit. Doloremque, libero.</p>
                                                        </td>
                                                        <td>PUNJAB</td>
                                                        <td>15-Aug-2025</td>
                                                        <td class="d-flex gap-1">
                                                            <small class="btn btn-primary text-white"> <i
                                                                    class="ri-printer-line"></i></small>
                                                            <small class="btn btn-primary">Apply</small>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="" class="text-info "
                                                                style="font-weight: 500; opacity: 0.5;">Company
                                                                Secretary</a>
                                                        </td>
                                                        <td>Management lorem30</td>
                                                        <td>


                                                            <p class="">Lorem ipsum dolor sit amet consectetur
                                                                adipisicing elit. Doloremque, libero.</p>
                                                        </td>
                                                        <td>PUNJAB</td>
                                                        <td>15-Aug-2025</td>
                                                        <td class="d-flex gap-1">
                                                            <small class="btn btn-primary text-white"> <i
                                                                    class="ri-printer-line"></i></small>
                                                            <small class="btn btn-primary">Apply</small>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="" class="text-info "
                                                                style="font-weight: 500; opacity: 0.5;">Company
                                                                Secretary</a>
                                                        </td>
                                                        <td>Management lorem30</td>
                                                        <td>


                                                            <p class="">Lorem ipsum dolor sit amet consectetur
                                                                adipisicing elit. Doloremque, libero.</p>
                                                        </td>
                                                        <td>PUNJAB</td>
                                                        <td>15-Aug-2025</td>
                                                        <td class="d-flex gap-1">
                                                            <small class="btn btn-primary text-white"> <i
                                                                    class="ri-printer-line"></i></small>
                                                            <small class="btn btn-primary">Apply</small>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="" class="text-info "
                                                                style="font-weight: 500; opacity: 0.5;">Company
                                                                Secretary</a>
                                                        </td>
                                                        <td>Management lorem30</td>
                                                        <td>


                                                            <p class="">Lorem ipsum dolor sit amet consectetur
                                                                adipisicing elit. Doloremque, libero.</p>
                                                        </td>
                                                        <td>PUNJAB</td>
                                                        <td>15-Aug-2025</td>
                                                        <td class="d-flex gap-1">
                                                            <small class="btn btn-primary text-white"> <i
                                                                    class="ri-printer-line"></i></small>
                                                            <small class="btn btn-primary">Apply</small>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="" class="text-info "
                                                                style="font-weight: 500; opacity: 0.5;">Company
                                                                Secretary</a>
                                                        </td>
                                                        <td>Management lorem30</td>
                                                        <td>


                                                            <p class="">Lorem ipsum dolor sit amet consectetur
                                                                adipisicing elit. Doloremque, libero.</p>
                                                        </td>
                                                        <td>PUNJAB</td>
                                                        <td>15-Aug-2025</td>
                                                        <td class="d-flex gap-1">
                                                            <small class="btn btn-primary text-white"> <i
                                                                    class="ri-printer-line"></i></small>
                                                            <small class="btn btn-primary">Apply</small>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="" class="text-info "
                                                                style="font-weight: 500; opacity: 0.5;">Company
                                                                Secretary</a>
                                                        </td>
                                                        <td>Management lorem30</td>
                                                        <td>


                                                            <p class="">Lorem ipsum dolor sit amet consectetur
                                                                adipisicing elit. Doloremque, libero.</p>
                                                        </td>
                                                        <td>PUNJAB</td>
                                                        <td>15-Aug-2025</td>
                                                        <td class="d-flex gap-1">
                                                            <small class="btn btn-primary text-white"> <i
                                                                    class="ri-printer-line"></i></small>
                                                            <small class="btn btn-primary">Apply</small>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="" class="text-info "
                                                                style="font-weight: 500; opacity: 0.5;">Company
                                                                Secretary</a>
                                                        </td>
                                                        <td>Management lorem30</td>
                                                        <td>


                                                            <p class="">Lorem ipsum dolor sit amet consectetur
                                                                adipisicing elit. Doloremque, libero.</p>
                                                        </td>
                                                        <td>PUNJAB</td>
                                                        <td>15-Aug-2025</td>
                                                        <td class="d-flex gap-1">
                                                            <small class="btn btn-primary text-white"> <i
                                                                    class="ri-printer-line"></i></small>
                                                            <small class="btn btn-primary">Apply</small>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="" class="text-info "
                                                                style="font-weight: 500; opacity: 0.5;">Company
                                                                Secretary</a>
                                                        </td>
                                                        <td>Management lorem30</td>
                                                        <td>


                                                            <p class="">Lorem ipsum dolor sit amet consectetur
                                                                adipisicing elit. Doloremque, libero.</p>
                                                        </td>
                                                        <td>PUNJAB</td>
                                                        <td>15-Aug-2025</td>
                                                        <td class="d-flex gap-1">
                                                            <small class="btn btn-primary text-white"> <i
                                                                    class="ri-printer-line"></i></small>
                                                            <small class="btn btn-primary">Apply</small>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="" class="text-info "
                                                                style="font-weight: 500; opacity: 0.5;">Company
                                                                Secretary</a>
                                                        </td>
                                                        <td>Management lorem30</td>
                                                        <td>


                                                            <p class="">Lorem ipsum dolor sit amet consectetur
                                                                adipisicing elit. Doloremque, libero.</p>
                                                        </td>
                                                        <td>PUNJAB</td>
                                                        <td>15-Aug-2025</td>
                                                        <td class="d-flex gap-1">
                                                            <small class="btn btn-primary text-white"> <i
                                                                    class="ri-printer-line"></i></small>
                                                            <small class="btn btn-primary">Apply</small>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="" class="text-info "
                                                                style="font-weight: 500; opacity: 0.5;">Company
                                                                Secretary</a>
                                                        </td>
                                                        <td>Management lorem30</td>
                                                        <td>


                                                            <p class="">Lorem ipsum dolor sit amet consectetur
                                                                adipisicing elit. Doloremque, libero.</p>
                                                        </td>
                                                        <td>PUNJAB</td>
                                                        <td>15-Aug-2025</td>
                                                        <td class="d-flex gap-1">
                                                            <small class="btn btn-primary text-white"> <i
                                                                    class="ri-printer-line"></i></small>
                                                            <small class="btn btn-primary">Apply</small>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="" class="text-info "
                                                                style="font-weight: 500; opacity: 0.5;">Company
                                                                Secretary</a>
                                                        </td>
                                                        <td>Management lorem30</td>
                                                        <td>


                                                            <p class="">Lorem ipsum dolor sit amet consectetur
                                                                adipisicing elit. Doloremque, libero.</p>
                                                        </td>
                                                        <td>PUNJAB</td>
                                                        <td>15-Aug-2025</td>
                                                        <td class="d-flex gap-1">
                                                            <small class="btn btn-primary text-white"> <i
                                                                    class="ri-printer-line"></i></small>
                                                            <small class="btn btn-primary">Apply</small>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="" class="text-info "
                                                                style="font-weight: 500; opacity: 0.5;">Company
                                                                Secretary</a>
                                                        </td>
                                                        <td>Management lorem30</td>
                                                        <td>


                                                            <p class="">Lorem ipsum dolor sit amet consectetur
                                                                adipisicing elit. Doloremque, libero.</p>
                                                        </td>
                                                        <td>PUNJAB</td>
                                                        <td>15-Aug-2025</td>
                                                        <td class="d-flex gap-1">
                                                            <small class="btn btn-primary text-white"> <i
                                                                    class="ri-printer-line"></i></small>
                                                            <small class="btn btn-primary">Apply</small>
                                                        </td>
                                                    </tr>

                                                    <!-- Add more rows here -->
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-sm-6">
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> © Clivax.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Crafted with <i class="mdi mdi-heart text-danger"></i> by <a
                                        href="http://codebucks.in/" target="_blank" class="text-muted">Codebucks</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>

            </div>
            <!-- end main content-->

        </div>
    </div>
    <!-- END layout-wrapper -->


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
    <!-- <script src="./assets/libs/jquery/jquery.min.js"></script> -->
    <!-- <script src="./assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script> -->
    <!-- ✅ Load jQuery FIRST -->

    <!-- ✅ Load Bootstrap -->


    <!-- Bootstrap Bundle -->

    <!-- DataTables JS -->
    <script src="https://cdn.jsdelivr.net/npm/datatables.net@1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/datatables.net-bs5@1.13.6/js/dataTables.bootstrap5.min.js"></script>

    <!-- ✅ Load DataTables Core & Bootstrap Integration -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/datatables.net@1.13.6/js/jquery.dataTables.min.js"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/datatables.net-bs5@1.13.6/js/dataTables.bootstrap5.min.js"></script> -->

    <!-- ✅ FixedHeader -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/datatables.net-fixedheader@3.4.0/js/dataTables.fixedHeader.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/datatables.net-fixedheader-bs5@3.4.0/js/fixedHeader.bootstrap5.min.js"></script> -->

    <!-- ✅ Your Init -->
    <!-- <script>
  $(document).ready(function () {
    $('#selection-datatable').DataTable({
      fixedHeader: true,
      responsive: true,
      paging: true,
      searching: true,
      td:true,
      th:true,
      tbody:true
    });
  });
</script> -->
<!-- JAVASCRIPT -->
<script src="../assets/libs/jquery/jquery.min.js"></script>
<script src="../assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../assets/libs/metismenu/metisMenu.min.js"></script>
<script src="../assets/libs/simplebar/simplebar.min.js"></script>
<script src="../assets/libs/node-waves/waves.min.js"></script>


<!-- apexcharts -->
<script src="../assets/libs/apexcharts/apexcharts.min.js"></script>

<script src="../assets/js/pages/dashboard.init.js"></script>

<!-- App js -->
<script src="../assets/js/app.js"></script>

    <script>
        $(document).ready(function() {
            $('#selection-datatable').DataTable({
                responsive: true,
                pageLength: 10, // ✅ Show 10 rows per page
                lengthMenu: [5, 10, 25, 50, 100], // optional: dropdown values
                fixedHeader: true,
                language: {
                    search: "Search:",
                    lengthMenu: "Show _MENU_ entries",
                    info: "Showing _START_ to _END_ of _TOTAL_ jobs"
                }
            });
        });
    </script>

</body>

</html>