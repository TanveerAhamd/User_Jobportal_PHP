 <?php
    include('include/auth.php');
    $userId = $_SESSION['user_profile_id']; // Only if you already store it during login
    include('include/config.php');
    //  Handle delete action of experience
    if (isset($_GET['experience_id'])) {
        $experience_id = $_GET['experience_id'];
        $delete_query = "DELETE FROM job_experience WHERE id = $experience_id";
        $cn->query($delete_query);
        // Optional: Show a message or redirect
        header("Location: profile_builder_form_wizard.php");
        exit();
    }
    //  Handle delete action of degree
    if (isset($_GET['degree_id'])) {
        $degree_id = $_GET['degree_id'];
        $delete_query = "DELETE FROM degree_information WHERE id = $degree_id";
        $cn->query($delete_query);
        // Optional: Show a message or redirect
        header("Location: profile_builder_form_wizard.php");
        exit();
    }
    ?>


 <!doctype html>
 <html lang="en">

 <head>

     <meta charset="utf-8" />
     <title>Contact | Clivax - Admin & Dashboard Template</title>
     <?php include('include/source.html'); ?>

     <style>
         .tab-btn {
             background-color: #006400 !important;
             /* Green */
             color: white !important;
             border-radius: 0 !important;
             border: 1px solid white;
             flex: 1;
             text-align: center;
         }

         .tab-btn:hover {
             background-color: #006400 !important;
             color: white !important;
         }

         .tab-btn.active {
             background-color: red !important;
         }

         .data-section {
             display: none;
         }

         .data-section.active {
             display: block;
         }


         /* badge */

         .badge {
             display: inline-block;
             min-width: 10px;
             padding: 3px 7px;
             font-size: 12px;
             font-weight: 700;
             line-height: 1;
             color: #fff;
             text-align: center;
             white-space: nowrap;
             vertical-align: middle;
             background-color: #777;
             border-radius: 10px;
         }

         .inactive-row {
             background-color: #f8d7da !important;
             /* light red/pink */
         }
     </style>


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
                 <div class="container-fluid">

                     <!-- start page title -->
                     <div class="row">
                         <div class="col-12">
                             <!-- <div class="page-title-box d-flex align-items-center justify-content-between">
                                 <h4 class="mb-sm-0">Tabs</h4>

                                 <div class="page-title-right">
                                     <ol class="breadcrumb m-0">
                                         <li class="breadcrumb-item"><a href="javascript: void(0);">Elements</a></li>
                                         <li class="breadcrumb-item active">Tabs</li>
                                     </ol>
                                 </div>

                             </div> -->
                         </div>
                     </div>
                     <!-- end page title -->

                     <div class="row">
                         <div class="col-12">
                             <div class="card">
                                 <!-- <div class="card-header"> 1a-k
                                <h3 class="card-title">Basic tab</h3>
                                </div> -->
                                 <div class="card-body">
                                     <div class="container mt-1">
                                         <h3 class="text-center mb-4">Build Profile</h3>

                                         <!-- Tabs -->
                                         <div class="nav nav-tabs mb-3 w-100">
                                             <button class="btn tab-btn active" data-target="#personal"> Personal
                                                 Info</button>
                                             <button class="btn tab-btn" data-target="#experience"> Experience</button>
                                             <button class="btn tab-btn" data-target="#academics"> Academics</button>
                                             <button class="btn tab-btn" data-target="#skills"> Skill(s)</button>
                                             <button class="btn tab-btn" data-target="#trainings"> Training(s)</button>
                                             <button class="btn tab-btn" data-target="#certifications">
                                                 Certification(s)</button>
                                             <button class="btn tab-btn" data-target="#achievements">
                                                 Achievement(s)</button>
                                             <button class="btn tab-btn" data-target="#research"> Research
                                                 work(s)</button>
                                             <button class="btn tab-btn" data-target="#job">Target Job</button>

                                         </div>

                                         <!-- Tab1 Personal info  -->
                                         <div id="personal" class="data-section active">
                                             <p>Personal Information Table</p>
                                             <form method="POST" action="save-profile.php" style="font-size: 12px;" class="needs-validation" novalidate>

                                                 <!-- Row 1 -->
                                                 <div class="needs-validation">
                                                     <div class="row pb-2">
                                                         <div class="col-md-3">
                                                             <label for="validationCustom01" class="form-label">First Name
                                                                 *</label>
                                                             <input type="text" name="user_profile_first_name" class="form-control" id="validationCustom01"
                                                                 required>

                                                         </div>
                                                         <div class="col-md-3">
                                                             <label for="validationCustom02" class="form-label">Last Name *</label>
                                                             <input type="text" name="user_profile_last_name" class="form-control" id="validationCustom02"
                                                                 required>
                                                         </div>
                                                         <div class="col-md-3">
                                                             <label for="dob" class="form-label">Date of
                                                                 Birth *</label>
                                                             <input type="date" name="user_profile_birth" class="form-control" id="dob" required>
                                                         </div>
                                                         <div class="col-md-3">
                                                             <label for="age" class="form-label">Age
                                                                 *</label>
                                                             <input type="text" name="user_profile_age" class="form-control" id="age" required>
                                                         </div>

                                                     </div>
                                                 </div>

                                                 <!-- Row 2 -->
                                                 <div class="needs-validation">
                                                     <div class="row pb-2">
                                                         <div class="col-md-3">
                                                             <label for="gender" class="form-label">Gender *</label>
                                                             <select class="form-select" name="user_profile_gender" id="gender" required>
                                                                 <option selected disabled>Select Gender
                                                                 </option>
                                                                 <option>Male</option>
                                                                 <option>Female</option>
                                                             </select>
                                                         </div>
                                                         <div class="col-md-3">
                                                             <label for="maritalStatus" class="form-label">Marital
                                                                 Status</label>
                                                             <select class="form-select" name="user_profile_marital_status" id="maritalStatus" required>
                                                                 <option>Single</option>
                                                                 <option>Married</option>
                                                             </select>
                                                         </div>
                                                         <div class="col-md-3">
                                                             <label for="husbandName" class="form-label">Husband Name
                                                             </label>
                                                             <input type="text" name="user_profile_husband_name" class="form-control" id="husbandName">
                                                         </div>
                                                         <div class="col-md-3">
                                                             <label for="fatherName" class="form-label">Father's Name *</label>
                                                             <input type="text" name="user_profile_father_name" class="form-control" id="fatherName" placeholder="Father Name" required>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <!-- Row 3 -->
                                                 <div class="needs-validation">
                                                     <div class="row pb-2">
                                                         <div class="col-md-3">
                                                             <label for="religion" class="form-label">Religion</label>
                                                             <select class="form-select" name="user_profile_religion" id="religion" required>
                                                                 <option selected disabled>Select Religion</option>
                                                                 <option>Islam</option>
                                                                 <option>Christianity</option>
                                                                 <option>Hinduism</option>
                                                                 <option>Other</option>
                                                             </select>
                                                         </div>
                                                         <div class="col-md-3">
                                                             <label for="mobileNumber" class="form-label">Mobile Number *</label>
                                                             <input type="text" name="user_profile_phonenum" class="form-control" value="<?= $editData['user_profile_phonenum'] ?? '' ?>" placeholder="03XXXXXXXXX" id="cnic" required>
                                                             <!-- <div class="form-note  text-danger" style="font-size: 8px;">
                                                                Number should be
                                                                registered on Candidate own CNIC</div> -->
                                                         </div>

                                                         <div class="col-md-3">
                                                             <label for="landline" class="form-label">Land Line</label>
                                                             <input type="text" name="user_profile_landline" class="form-control" placeholder="+92-111111111" id="landline" required>
                                                             <div class="invalid-feedback"> +92-111111111 </div>
                                                         </div>
                                                         <div class="col-md-3">
                                                             <label for="postalAddress" class="form-label">Postal Address
                                                                 *</label>
                                                             <input type="text" name="user_profile_postaladr" class="form-control " id="postalAddress"
                                                                 required
                                                                 placeholder="House #4, A block, Johar Town, Lahore">
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <!-- Row 4 -->
                                                 <div class="needs-validation">
                                                     <div class="row pb-2">
                                                         <div class="col-md-3">
                                                             <label for="cnic" class="form-label">CNIC
                                                                 *</label>
                                                             <input type="text" name="user_profile_cnic" class="form-control" id="cnic" required>
                                                         </div>

                                                         <div class="col-md-3">
                                                             <label for="cnicExpiry" class="form-label">Select CNIC
                                                                 Expiry
                                                                 *</label>
                                                             <select class="form-select" name="user_profile_cnic_expery" id="cnicExpiry" required>
                                                                 <option selected disabled>-- Select
                                                                     Expiry --</option>
                                                                 <option>2025</option>
                                                                 <option>2026</option>
                                                                 <option>2027</option>
                                                             </select>
                                                         </div>
                                                         <div class="col-md-3">
                                                             <label for="cnicFront" class="form-label">Attach CNIC Front
                                                                 Attachment</label>
                                                             <input class="form-control" name="user_profile_cnic_front" type="file" id="cnicFront">
                                                             <!-- <div class="form-note text-danger" style="font-size: 8px;">
                                                                Scanned Document
                                                                Max:2MB (Only jpg,jpeg,png & pdf
                                                                allowed)</div> -->
                                                         </div>
                                                         <div class="col-md-3">
                                                             <label for="cnicBack" class="form-label">Attach CNIC Back
                                                                 Attachment</label>
                                                             <input class="form-control small" name="user_profile_cnic_back" type="file" id="cnicBack">
                                                             <div class="invalid-feedback">
                                                                 Scanned Document
                                                                 Max:2MB (Only jpg,jpeg,png & pdf
                                                                 allowed)
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <!-- Row 5 -->
                                                 <div class="needs-validation">
                                                     <div class="row pb-2">

                                                         <div class="col-md-3">
                                                             <label for="domicile" class="form-label">Domicile *</label>
                                                             <select class="form-select" name="user_profile_domicile" id="domicile" required>
                                                                 <option selected>Not Applicable (N/A)
                                                                 </option>
                                                                 <option>Lahore</option>
                                                                 <option>Karachi</option>
                                                                 <option>Other</option>
                                                             </select>
                                                         </div>
                                                         <div class="col-md-3">
                                                             <label for="domicileNumber" class="form-label">Domicile
                                                                 Number</label>
                                                             <input type="text" class="form-control" name="user_profile_domicilenum" id="domicileNumber"
                                                                 required>
                                                             <!-- <div class="form-note text-danger" style="font-size: 8px;">
                                                                Digital domicile
                                                                is mandatory</div> -->
                                                         </div>
                                                         <div class="col-md-3">
                                                             <label for="domicileFile"
                                                                 class="form-label">Domicile</label>
                                                             <input class="form-control" name="user_profile_domicile_file" type="file" id="domicileFile">
                                                             <div class="invalid-feedback">
                                                                 Scanned Document
                                                                 Max:2MB (Only jpg,jpeg,png & pdf
                                                                 allowed)
                                                             </div>
                                                         </div>

                                                     </div>
                                                 </div>

                                                 <!-- Row 6 -->

                                                 <div class="row pb-2">
                                                     <div class="col-md-3">
                                                         <label for="licenseNumber" class="form-label">Driving
                                                             License Number</label>
                                                         <input type="text" name="user_profile_driving_license" class="form-control" id="licenseNumber"
                                                             required>
                                                         <!-- <div class="invalid-feedback">
                                                                Only Punjab Driving License allowed
                                                            </div> -->
                                                     </div>
                                                     <div class="col-md-3">
                                                         <label for="licenseFront" class="form-label">Driving License
                                                             Front</label>
                                                         <input type="file" name="user_profile_license_front" class="form-control" id="licenseFront">
                                                         <div class="invalid-feedback">
                                                             Scanned Document Max: 2MB (Only jpg, jpeg, png & pdf
                                                             allowed)
                                                         </div>
                                                     </div>
                                                     <div class="col-md-3">
                                                         <label for="licenseBack" class="form-label">Driving License
                                                             Back</label>
                                                         <input type="file" name="user_profile_license_back" class="form-control" id="licenseBack">
                                                         <div class="invalid-feedback">
                                                             Scanned Document Max: 2MB (Only jpg, jpeg, png & pdf
                                                             allowed)
                                                         </div>
                                                     </div>
                                                 </div>






                                                 <!-- Row 7 -->
                                                 <div class="needs-validation">
                                                     <div class="row pb-2">
                                                         <div class="col-md-3">
                                                             <label for="religion" class="form-label">Nationality</label>
                                                             <select class="form-select" name="user_profile_nationality" id="religion" required>
                                                                 <option selected disabled>Select
                                                                     Nationality</option>
                                                                 <option>Afghan</option>
                                                                 <option>Albanian</option>
                                                                 <option>Algerian</option>
                                                                 <option>Andoran</option>
                                                                 <option>Antiguans</option>
                                                                 <option>Argentinean</option>
                                                                 <option>Arminian</option>
                                                                 <option>Astralian</option>
                                                                 <option>Austrian</option>
                                                                 <option>Azerbaijani</option>
                                                                 <option>Bahamian</option>
                                                                 <option>Barbadian</option>
                                                                 <option>Bangladeshi</option>
                                                                 <option>Pakistani</option>
                                                                 <option>Indian</option>
                                                             </select>
                                                         </div>

                                                         <div class="col-md-3">
                                                             <label for="religion" class="form-label">Residential
                                                                 Country</label>
                                                             <select class="form-select" name="user_profile_reside_country" id="religion" required>
                                                                 <option selected disabled>Select Country
                                                                 </option>
                                                                 <option>Afghan</option>
                                                                 <option>Albanian</option>
                                                                 <option>Algerian</option>
                                                                 <option>Andoran</option>
                                                                 <option>Antiguans</option>
                                                                 <option>Argentinean</option>
                                                                 <option>Arminian</option>
                                                                 <option>Astralian</option>
                                                                 <option>Austrian</option>
                                                                 <option>Azerbaijani</option>
                                                                 <option>Bahamian</option>
                                                                 <option>Barbadian</option>
                                                                 <option>Bangladeshi</option>
                                                                 <option>Pakistani</option>
                                                                 <option>Indian</option>


                                                             </select>
                                                         </div>
                                                         <div class="col-md-3">
                                                             <label for="firstName" class="form-label">Residential City
                                                                 *</label>
                                                             <input type="text" name="user_profile_reside_city" class="form-control" id="firstName"
                                                                 required>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <!-- Row 8 -->
                                                 <div class="needs-validation">
                                                     <div class="row pb-2">
                                                         <div class="col-md-3">
                                                             <label for="domicileNumber" class="form-label">Police
                                                                 Character
                                                                 Certificate Number</label>
                                                             <input type="text" name="user_profile_certificatenum" class="form-control" id="domicileNumber"
                                                                 required>
                                                             <!-- <div class="form-note text-danger" style="font-size: 8px;">
                                                                Only
                                                                Punjab
                                                                Driving License allowed</div> -->
                                                         </div>
                                                         <div class="col-md-3">
                                                             <label for="domicileFile" class="form-label">Police
                                                                 Character
                                                                 Certificate Attach</label>
                                                             <input class="form-control" name="user_profile_certificate_attach" type="file" id="domicileFile">
                                                             <div class="invalid-feedback">
                                                                 Scanned Document
                                                                 Max:2MB (Only jpg,jpeg,png & pdf
                                                                 allowed)
                                                             </div>
                                                         </div>
                                                         <div class="col-md-3">
                                                             <label for="religion"
                                                                 class="form-label">Hafiz-e-Quran</label>
                                                             <select class="form-select" name="user_profile_hafiz" id="religion" required>
                                                                 <option selected disabled>No</option>
                                                                 <option>Nothing Selected</option>
                                                                 <option>Yes</option>
                                                                 <option>No</option>



                                                             </select>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <!-- Row 9 -->
                                                 <div class="needs-validation">
                                                     <div class="row pb-2">
                                                         <div class="col-md-3">
                                                             <label for="religion" class="form-label">Ex-Service
                                                                 Official</label>
                                                             <select class="form-select" name="user_profile_exservice" id="religion" required>
                                                                 <option selected disabled>No</option>
                                                                 <option>Nothing Selected</option>
                                                                 <option>Yes</option>
                                                             </select>
                                                         </div>
                                                         <div class="col-md-3">
                                                             <label for=""> Are you Disabled?</label>
                                                             <input type="checkbox" name="user_profile_disable">
                                                         </div>
                                                         <div class="col-md-3">
                                                             <label for=""> Are you Governmenr Servent
                                                                 Son/daughter?</label>
                                                             <input type="checkbox" name="user_profile_servent">
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <!-- Row 10 -->
                                                 <div class="needs-validation">
                                                     <div class="row pb-2">
                                                         <div class="col-md-3">
                                                             <label for=""> Are you a Government
                                                                 Official?</label>
                                                             <input type="checkbox" name="user_profile_official">
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <!-- Row 11 -->
                                                 <div class="needs-validation">
                                                     <div class="row">
                                                         <div class="col">
                                                             <label for=""> Objective</label>
                                                             <textarea class="form-control" id="" name="user_profile_objective" rows="4"
                                                                 required></textarea>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="text-end my-3">
                                                     <button class="btn btn-success" name="savebtn" type="submit">Save</button>

                                                 </div>

                                                 <hr>


                                                 <a href="cv.php?user_profile_id=<?= $userId ?>" class="btn btn-primary">View CV</a>






                                                 <hr>
                                                 <div>
                                                     <a href="#" class="btn btn-success">Prev</a>
                                                     <a href="#" class="btn btn-success">Next</a>
                                                 </div>


                                             </form>

                                             <!-- <script>
                                                    // Bootstrap 5 validation handling
                                                    (() => {
                                                        'use strict';
                                                        const forms = document.querySelectorAll('.needs-validation');

                                                        Array.from(forms).forEach(form => {
                                                            form.addEventListener('submit', event => {
                                                                if (!form.checkValidity()) {
                                                                    event.preventDefault();
                                                                    event.stopPropagation();
                                                                }

                                                                form.classList.add('was-validated');
                                                            }, false);
                                                        });
                                                    })();
                                                </script> -->


                                         </div>




                                         <!-- Tab2 Experience -->
                                         <div id="experience" class="data-section">
                                             <p>Experience Table</p>
                                             <div class="col-md-12 table-responsive">
                                                 <table class="table table-hover table-striped bg-secondary-subtle" id="work_history_table">
                                                     <thead style="background-color:#000;">
                                                         <tr>
                                                             <th scope="col" class="bg-secondary-subtle py-3">Position Title</th>
                                                             <th scope="col" class="bg-secondary-subtle py-3">From</th>
                                                             <th scope="col" class="bg-secondary-subtle py-3">To</th>
                                                             <th scope="col" class="bg-secondary-subtle py-3">Company Name</th>
                                                             <th scope="col" class="bg-secondary-subtle py-3">Job Level</th>
                                                             <th scope="col" class="bg-secondary-subtle py-3">Status</th>
                                                             <!-- <th scope="col" class="bg-secondary-subtle py-3">Job Responsibilities</th> -->
                                                             <th scope="col" class="bg-secondary-subtle py-3">Action</th>
                                                         </tr>
                                                     </thead>
                                                     <tbody>
                                                         <?php

                                                            $sql = "SELECT * FROM job_experience";
                                                            $result = $cn->query($sql);
                                                            if ($result->num_rows > 0):
                                                                while ($row = $result->fetch_assoc()):
                                                            ?>
                                                                 <tr class="<?= ($row['status'] === 'Inactive') ? 'inactive-row' : '' ?>">
                                                                     <td><?= htmlspecialchars($row['position_title']) ?></td>
                                                                     <td><?= htmlspecialchars($row['from_date']) ?></td>
                                                                     <td><?= htmlspecialchars($row['to_date']) ?></td>
                                                                     <td><?= htmlspecialchars($row['company_name']) ?></td>
                                                                     <td><?= htmlspecialchars($row['job_level']) ?></td>
                                                                     <td>
                                                                         <?php if ($row['status'] === 'Active'): ?>
                                                                             <span class="badge bg-success">Active</span>
                                                                         <?php else: ?>
                                                                             <span class="badge bg-warning text-dark">Inactive</span>
                                                                         <?php endif; ?>
                                                                     </td>

                                                                     <!-- dropdown -->
                                                                     <td>
                                                                         <div class="dropdown">
                                                                             <button class="btn btn-sm btn-light border dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                 <a href="" class="fw-bold fs-3"> ⋮</a>
                                                                             </button>
                                                                             <ul class="dropdown-menu">
                                                                                 <li>
                                                                                     <a href="#" class="btn btn-sm btn-success m-1 status-btn"
                                                                                         data-id="<?= $row['id'] ?>"
                                                                                         data-status="Active">Active</a>
                                                                                 </li>
                                                                                 <li>
                                                                                     <a href="#" class="btn btn-sm btn-warning m-1 status-btn"
                                                                                         data-id="<?= $row['id'] ?>"
                                                                                         data-status="Inactive">Inactive</a>
                                                                                 </li>

                                                                                 <li>
                                                                                     <button
                                                                                         class="btn btn-sm btn-warning edit-btn m-1"
                                                                                         data-id="<?= $row['id'] ?>"
                                                                                         data-title="<?= htmlspecialchars($row['position_title'], ENT_QUOTES) ?>"
                                                                                         data-from="<?= $row['from_date'] ?>"
                                                                                         data-to="<?= $row['to_date'] ?>"
                                                                                         data-company="<?= htmlspecialchars($row['company_name'], ENT_QUOTES) ?>"
                                                                                         data-level="<?= $row['job_level'] ?>"
                                                                                         data-country="<?= $row['country'] ?>"
                                                                                         data-desc="<?= htmlspecialchars($row['jobDesc'], ENT_QUOTES) ?>"
                                                                                         data-bs-toggle="modal"
                                                                                         data-bs-target="#addForm">
                                                                                         Edit
                                                                                     </button>
                                                                                 </li>

                                                                                 <li>
                                                                                     <a href="profile_builder_form_wizard.php?experience_id=<?= $row['id'] ?>"
                                                                                         class="btn btn-sm btn-danger m-1"
                                                                                         onclick="return confirm('Are you sure you want to delete this profile?');">
                                                                                         Delete
                                                                                     </a>
                                                                                 </li>
                                                                             </ul>
                                                                         </div>
                                                                                    
                                                                     </td>




                                                                 </tr>
                                                             <?php
                                                                endwhile;
                                                            else:
                                                                ?>
                                                             <tr>
                                                                 <td colspan="7" class="text-center">No experience found.</td>
                                                             </tr>
                                                         <?php endif; ?>
                                                     </tbody>
                                                 </table>


                                                 <!-- <div class="bottom-line clearfix">
                                                <a class="btn_profile pull-right btn btn-primary " data-text="Add" data-target="#add-emp-job-information" data-toggle="modal" data-tooltip="tooltip">Add </a>
                                            </div> -->
                                             </div>
                                             <!-- Add Button -->
                                             <div class="text-end">
                                                 <button class="btn btn-success" data-bs-toggle="modal"
                                                     data-bs-target="#addForm">Add</button>
                                             </div>
                                             <hr>
                                             <div class="btns">
                                                 <button class="btn btn-success">Prev</button>
                                                 <button class="btn btn-success">Next</button>
                                             </div>


                                             <!-- Add Job Modal -->
                                             <div class="modal fade" id="addForm" tabindex="-1" aria-hidden="true">
                                                 <div class="modal-dialog modal-lg">
                                                     <div class="modal-content">
                                                         <form method="POST" action="save_experience.php" id="experienceForm" enctype="multipart/form-data">
                                                             <div class="modal-header bg-success text-white">
                                                                 <h5 class="modal-title">Add Job Information</h5>
                                                                 <button type="button" class="btn-close btn-close-white"
                                                                     data-bs-dismiss="modal"></button>
                                                             </div>

                                                             <div class="modal-body">
                                                                 <div class="row g-3">
                                                                     <input type="hidden" name="experience_id" id="experience_id">

                                                                     <div class="col-md-4">
                                                                         <label class="form-label">Position Title</label>
                                                                         <input type="text" name="position_title" id="position_title" class="form-control">
                                                                     </div>
                                                                     <div class="col-md-4">
                                                                         <label class="form-label">From</label>
                                                                         <input type="date" name="from_date" id="from_date" class="form-control">
                                                                     </div>
                                                                     <div class="col-md-4">
                                                                         <label class="form-label">To</label>
                                                                         <input type="date" name="to_date" id="to_date" class="form-control">
                                                                     </div>
                                                                     <div class="col-md-4">
                                                                         <label class="form-label">Company Name</label>
                                                                         <input type="text" name="company_name" id="company_name" class="form-control">
                                                                     </div>
                                                                     <div class="col-md-4">
                                                                         <label class="form-label">Job Level</label>
                                                                         <select class="form-select" name="job_level" id="job_level">
                                                                             <option>Select Job Level</option>
                                                                             <option>Entry Level</option>
                                                                             <option>Mid Level</option>
                                                                             <option>Senior Level</option>
                                                                         </select>
                                                                     </div>
                                                                     <div class="col-md-4">
                                                                         <label class="form-label">country</label>
                                                                         <select class="form-select" name="country" id="country">
                                                                             <option>Select Country</option>
                                                                             <option>Pakistan</option>
                                                                             <option>UAE</option>
                                                                             <option>USA</option>
                                                                         </select>
                                                                     </div>
                                                                     <div class="col-12">
                                                                         <label class="form-label">Experience
                                                                             Certificate</label>
                                                                         <input type="file" name="experience_certificate" class="form-control">
                                                                         <small class="text-danger">Attachment (Max: 2MB
                                                                             & Only jpg, jpeg, png, pdf
                                                                             allowed)</small>
                                                                     </div>
                                                                     <!-- Inside your modal body -->
                                                                     <div class="col-12">
                                                                         <label class="form-label">Job
                                                                             Responsibilities</label>

                                                                         <!-- ✅ Plain textarea, no <body> tag -->
                                                                         <textarea id="jobDesc"
                                                                             name="jobDesc"></textarea>
                                                                         <div class="text-muted">Characters: 0 out of
                                                                             5000</div>
                                                                     </div>

                                                                     <!-- ✅ Scripts should be OUTSIDE the modal at bottom of page -->
                                                                     <script
                                                                         src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
                                                                     <script>
                                                                         CKEDITOR.replace('jobDesc');
                                                                     </script>

                                                                 </div>
                                                             </div>

                                                             <div class="modal-footer">
                                                                 <button type="submit" name="savebtn" class="btn btn-success">Save &
                                                                     Continue</button>
                                                                 <button type="button" class="btn btn-secondary"
                                                                     data-bs-dismiss="modal">Exit</button>
                                                             </div>
                                                         </form>
                                                     </div>
                                                 </div>
                                             </div>
                                             <!-- Modal ends -->

                                         </div>

                                         <!-- Tab3 Academics -->
                                         <div id="academics" class="data-section">
                                             <p><strong>Academics:</strong></p>
                                             <div class="col-md-12">
                                                 <!--<h6>Total Year of Education: </h6>-->
                                                 <table class="table table-hover table-striped" id="academics_table">
                                                     <thead style="background-color:#000; font-size:15px;">
                                                         <tr>
                                                             <th scope="col" class="bg-secondary-subtle py-3">Institute
                                                             </th>
                                                             <th scope="col" class="bg-secondary-subtle py-3">Degree
                                                                 Level</th>
                                                             <th scope="col" class="bg-secondary-subtle py-3">Degree</th>
                                                             <th scope="col" class="bg-secondary-subtle py-3">Major
                                                                 Subjects</th>
                                                             <th scope="col" class="bg-secondary-subtle py-3">Start Date
                                                             </th>
                                                             <th scope="col" class="bg-secondary-subtle py-3">Completion
                                                                 Date</th>
                                                             <th scope="col" class="bg-secondary-subtle py-3">Status</th>

                                                             <!-- <th scope="col" class="bg-secondary-subtle py-3">Country
                                                             </th>
                                                             
                                                             <th scope="col" class="bg-secondary-subtle py-3">Percentage
                                                             </th>
                                                             <th scope="col" class="bg-secondary-subtle py-3">Position
                                                                 Holder</th>
                                                             <th scope="col" class="bg-secondary-subtle py-3">Degree
                                                                 Verification Number</th> -->

                                                             <th scope="col" class="bg-secondary-subtle py-3">Action</th>
                                                         </tr>
                                                     </thead>
                                                     <tbody>
                                                         <?php

                                                            $sql = "SELECT * FROM degree_information";
                                                            $result = $cn->query($sql);
                                                            if ($result->num_rows > 0):
                                                                while ($row = $result->fetch_assoc()):
                                                            ?>
                                                                 <tr>
                                                                     <td><?= htmlspecialchars($row['institute']) ?></td>
                                                                     <td><?= htmlspecialchars($row['degree_level']) ?></td>
                                                                     <td><?= htmlspecialchars($row['degree']) ?></td>
                                                                     <td><?= htmlspecialchars($row['major_subjects']) ?></td>
                                                                     <td><?= htmlspecialchars($row['start_date']) ?></td>
                                                                     <td><?= htmlspecialchars($row['completion_date']) ?></td>
                                                                     <td>
                                                                         <?php if ($row['status'] === 'Active'): ?>
                                                                             <span class="badge bg-success">Active</span>
                                                                         <?php else: ?>
                                                                             <span class="badge bg-warning text-dark">Inactive</span>
                                                                         <?php endif; ?>
                                                                     </td>


                                                                     <td>
                                                                         <div class="dropdown">
                                                                             <button class="btn btn-sm btn-light border dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                 <a href="" class="fw-bold fs-3"> ⋮</a>
                                                                             </button>
                                                                             <ul class="dropdown-menu">
                                                                                 <li>
                                                                                     <a href="#"
                                                                                         class="btn btn-sm btn-success m-1 status-btn"
                                                                                         data-id="<?= $row['id'] ?>"
                                                                                         data-status="Active">
                                                                                         Active
                                                                                     </a>
                                                                                 </li>

                                                                                 <li>
                                                                                     <a href="#"
                                                                                         class="btn btn-sm btn-warning m-1 status-btn"
                                                                                         data-id="<?= $row['id'] ?>"
                                                                                         data-status="Inactive">
                                                                                         Inactive
                                                                                     </a>
                                                                                 </li>

                                                                                 <li>
                                                                                     <button class="btn btn-sm btn-warning edit-degree-btn m-1"
                                                                                         data-id="<?= $row['id'] ?>"
                                                                                         data-degree_level="<?= htmlspecialchars($row['degree_level'], ENT_QUOTES) ?>"
                                                                                         data-degree="<?= htmlspecialchars($row['degree'], ENT_QUOTES) ?>"
                                                                                         data-institute="<?= htmlspecialchars($row['institute'], ENT_QUOTES) ?>"
                                                                                         data-major_subjects="<?= htmlspecialchars($row['major_subjects'], ENT_QUOTES) ?>"
                                                                                         data-start_date="<?= $row['start_date'] ?>"
                                                                                         data-completion_date="<?= $row['completion_date'] ?>"
                                                                                         data-country="<?= htmlspecialchars($row['country'], ENT_QUOTES) ?>"
                                                                                         data-marks_percentage="<?= $row['marks_percentage'] ?>"
                                                                                         data-position_holder="<?= $row['position_holder'] ?>"
                                                                                         data-bs-toggle="modal"
                                                                                         data-bs-target="#addDegree">
                                                                                         Edit
                                                                                     </button>

                                                                                 </li>

                                                                                 <li>
                                                                                     <a href="profile_builder_form_wizard.php?degree_id=<?= $row['id'] ?>"
                                                                                         class="btn btn-sm btn-danger m-1"
                                                                                         onclick="return confirm('Are you sure you want to delete this profile?');">
                                                                                         Delete
                                                                                     </a>
                                                                                 </li>
                                                                             </ul>
                                                                         </div>
                                                                                    
                                                                     </td>
                                                                 </tr>
                                                             <?php
                                                                endwhile;
                                                            else:
                                                                ?>
                                                             <tr>
                                                                 <td colspan="7" class="text-center">No experience found.</td>
                                                             </tr>
                                                         <?php endif; ?>
                                                     </tbody>
                                                 </table>
                                                 <!-- <div class="bottom-line clearfix" id="degree_btn">
                                                <a class="btn_profile pull-right btn btn-success " data-text="Add"  data-bs-toggle="modal" data-bs-target="#addDegree" data-tooltip="tooltip">Add </a>
                                            </div> -->

                                                 <!-- Buttons -->
                                                 <div class="text-end">
                                                     <button class="btn btn-success" data-bs-toggle="modal"
                                                         data-bs-target="#addDegree">Add</button>
                                                 </div>
                                                 <div class="btns">
                                                     <button class="btn btn-success">Prev</button>
                                                     <button class="btn btn-success">Next</button>
                                                 </div>
                                             </div>

                                             <!-- Add Job Modal -->
                                             <div class="modal fade" id="addDegree" tabindex="-1" aria-hidden="true">
                                                 <div class="modal-dialog modal-lg">
                                                     <div class="modal-content">
                                                         <form method="POST" action="degree_experience.php" id="experienceForm" enctype="multipart/form-data">
                                                             <div class="modal-header bg-success text-white">
                                                                 <h5 class="modal-title">Add Degree Information</h5>
                                                                 <button type="button" class="btn-close btn-close-white"
                                                                     data-bs-dismiss="modal"></button>
                                                             </div>

                                                             <div class="modal-body">
                                                                 <div class="row g-3">

                                                                     <input type="hidden" name="degree_id" id="degree_id">
                                                                     <div class="col-md-4">
                                                                         <label class="form-label">Degree Level</label>
                                                                         <select class="form-select" name="degree_level" id="degree_level">
                                                                             <option>Select Degree Level</option>
                                                                             <option>Entry Level</option>
                                                                             <option>Mid Level</option>
                                                                             <option>Senior Level</option>
                                                                         </select>
                                                                     </div>
                                                                     <div class="col-md-4">
                                                                         <label class="form-label">Degree</label>
                                                                         <select class="form-select" name="degree" id="degree">
                                                                             <option>Select Degree</option>
                                                                             <option>Pakistan</option>
                                                                             <option>UAE</option>
                                                                             <option>USA</option>
                                                                         </select>
                                                                     </div>
                                                                     <div class="col-md-4">
                                                                         <label class="form-label">Institute</label>
                                                                         <select class="form-select" name="institute" id="institute">
                                                                             <option>Select Institute</option>
                                                                             <option>Pakistan</option>
                                                                             <option>UAE</option>
                                                                             <option>USA</option>
                                                                         </select>
                                                                     </div>
                                                                     <div class="col-md-4">
                                                                         <label class="form-label">Major Subjects</label>
                                                                         <input type="text" class="form-control" name="major_subjects" id="major_subjects">
                                                                     </div>
                                                                     <div class="col-md-4">
                                                                         <label class="form-label">Start Date </label>
                                                                         <input type="date" class="form-control" name="start_date" id="start_date">
                                                                     </div>
                                                                     <div class="col-md-4">
                                                                         <label class="form-label">Completion Date
                                                                         </label>
                                                                         <input type="date" class="form-control" name="completion_date" id="completion_date">
                                                                     </div>
                                                                     <div class="col-md-4">
                                                                         <label class="form-label">Country</label>
                                                                         <select class="form-select" name="country" id="country">
                                                                             <option>Select Country</option>
                                                                             <option>Pakistan</option>
                                                                             <option>UAE</option>
                                                                             <option>USA</option>
                                                                         </select>
                                                                     </div>
                                                                     <div class="col-md-4">
                                                                         <label class="form-label">Marks Percentage
                                                                         </label>
                                                                         <input type="text" class="form-control" name="marks_percentage" id="marks_percentage">
                                                                     </div>
                                                                     <div class="col-md-4">
                                                                         <label class="form-label">Position
                                                                             Holder</label>
                                                                         <select class="form-select" name="position_holder" id="position_holder">
                                                                             <option>Select Position</option>
                                                                             <option>Pakistan</option>
                                                                             <option>UAE</option>
                                                                             <option>USA</option>
                                                                         </select>
                                                                     </div>
                                                                     <div class="col-md-4">
                                                                         <label class="form-label">Grading Criteria
                                                                         </label>
                                                                         <select class="form-select" name="grading_criteria" id="grading_criteria">
                                                                             <option>Select Type</option>
                                                                             <option>Pakistan</option>
                                                                             <option>UAE</option>
                                                                             <option>USA</option>
                                                                         </select>
                                                                     </div>
                                                                     <div class="col-md-4">
                                                                         <label class="form-label">Degree Verification
                                                                             Number </label>
                                                                         <input type="text" class="form-control" name="degree_verification_number" id="degree_verification_number">
                                                                     </div>




                                                                     <div class="col-12">
                                                                         <label class="form-label">Attach Degree /
                                                                             Certificate</label>
                                                                         <input type="file" class="form-control" name="degree_certificate" id="degree_certificate">
                                                                         <small class="text-danger">Scanned Document
                                                                             (Max: 2MB & Only jpg, jpeg, png, pdf
                                                                             allowed)</small>
                                                                     </div>

                                                                 </div>
                                                             </div>

                                                             <div class="modal-footer">
                                                                 <button type="submit" name="save_degree_info" id="degreeSubmitBtn" class="btn btn-success">
                                                                     Save and Continue
                                                                 </button>

                                                                 <button type="button" class="btn btn-secondary"
                                                                     data-bs-dismiss="modal">Exit</button>
                                                             </div>
                                                         </form>
                                                     </div>
                                                 </div>
                                             </div>
                                             <!-- Modal ends -->

                                         </div>

                                         <!-- Tab 4 Skills -->
                                         <div id="skills" class="data-section">
                                             <p>Skills Table</p>
                                             <div class="col-md-12">

                                                 <table class="table table-hover table-striped" id="skills_table">
                                                     <thead style="background-color:#000; font-size:15px;">
                                                         <tr>
                                                             <th scope="col" class="bg-secondary-subtle py-3">Skill(s)
                                                             </th>
                                                             <th scope="col" class="bg-secondary-subtle py-3">Level</th>
                                                             <th scope="col" class="bg-secondary-subtle py-3">Summary
                                                             </th>
                                                             <th scope="col" class="bg-secondary-subtle py-3">Action</th>

                                                         </tr>
                                                     </thead>
                                                     <tbody>

                                                     </tbody>
                                                 </table>

                                             </div>
                                             <!-- Buttons -->
                                             <div class="text-end">
                                                 <button class="btn btn-success" data-bs-toggle="modal"
                                                     data-bs-target="#addSkills">Add</button>
                                             </div>
                                             <div class="btns">
                                                 <button class="btn btn-success">Prev</button>
                                                 <button class="btn btn-success">Next</button>
                                             </div>

                                             <!-- Add Job Modal -->
                                             <div class="modal fade" id="addSkills" tabindex="-1" aria-hidden="true">
                                                 <div class="modal-dialog modal-lg">
                                                     <div class="modal-content">
                                                         <form>
                                                             <div class="modal-header bg-success text-white">
                                                                 <h5 class="modal-title">Add Skill </h5>
                                                                 <button type="button" class="btn-close btn-close-white"
                                                                     data-bs-dismiss="modal"></button>
                                                             </div>

                                                             <div class="modal-body">
                                                                 <div class="row g-3">


                                                                     <div class="col-md-6">
                                                                         <label class="form-label">Skill </label>
                                                                         <select class="form-select">
                                                                             <option>Select Skills </option>
                                                                             <option>Entry Level</option>
                                                                             <option>Mid Level</option>
                                                                             <option>Senior Level</option>
                                                                         </select>
                                                                     </div>
                                                                     <div class="col-md-6">
                                                                         <label class="form-label">Skill Level</label>
                                                                         <select class="form-select">
                                                                             <option>Select Skill Level</option>
                                                                             <option>Pakistan</option>
                                                                             <option>UAE</option>
                                                                             <option>USA</option>
                                                                         </select>
                                                                     </div>
                                                                     <div class="col">
                                                                         <label for=""> Skill Summary</label>
                                                                         <textarea class="form-control" id="" name=""
                                                                             rows="4"></textarea>
                                                                     </div>

                                                                 </div>
                                                             </div>

                                                             <div class="modal-footer">
                                                                 <button type="submit" class="btn btn-success">Save &
                                                                     Continue</button>
                                                                 <button type="button" class="btn btn-secondary"
                                                                     data-bs-dismiss="modal">Exit</button>
                                                             </div>
                                                         </form>
                                                     </div>
                                                 </div>
                                             </div>
                                             <!-- Modal ends -->

                                         </div>



                                         <!-- Tab 5 Treainings -->
                                         <div id="trainings" class="data-section">
                                             <p>Trainings Table</p>
                                             <div class="col-md-12">

                                                 <table class="table table-hover table-striped" id="training_table">
                                                     <thead style="background-color:#000; font-size:15px;">
                                                         <tr>
                                                             <th scope="col" class="bg-secondary-subtle py-3">Training
                                                             </th>
                                                             <th scope="col" class="bg-secondary-subtle py-3">Institute
                                                             </th>
                                                             <th scope="col" class="bg-secondary-subtle py-3">From</th>
                                                             <th scope="col" class="bg-secondary-subtle py-3">To</th>
                                                             <th scope="col" class="bg-secondary-subtle py-3">Action</th>
                                                         </tr>
                                                     </thead>
                                                     <tbody>
                                                     </tbody>
                                                 </table>

                                             </div>

                                             <!-- Buttons -->
                                             <div class="text-end">
                                                 <button class="btn btn-success" data-bs-toggle="modal"
                                                     data-bs-target="#addTraining">Add</button>
                                             </div>
                                             <div class="btns">
                                                 <button class="btn btn-success">Prev</button>
                                                 <button class="btn btn-success">Next</button>
                                             </div>
                                             <!-- Add Job Modal -->
                                             <div class="modal fade" id="addTraining" tabindex="-1" aria-hidden="true">
                                                 <div class="modal-dialog modal-lg">
                                                     <div class="modal-content">
                                                         <form>
                                                             <div class="modal-header bg-success text-white">
                                                                 <h5 class="modal-title">Add Training </h5>
                                                                 <button type="button" class="btn-close btn-close-white"
                                                                     data-bs-dismiss="modal"></button>
                                                             </div>

                                                             <div class="modal-body">
                                                                 <div class="row g-3">


                                                                     <div class="col-md-6">
                                                                         <label class="form-label">Training </label>
                                                                         <input type="text" class="form-control">
                                                                     </div>
                                                                     <div class="col-md-6">
                                                                         <label class="form-label">Institute </label>
                                                                         <input type="text" class="form-control">
                                                                     </div>
                                                                     <div class="col-md-6">
                                                                         <label class="form-label">From </label>
                                                                         <input type="date" class="form-control">
                                                                     </div>
                                                                     <div class="col-md-6">
                                                                         <label class="form-label">To </label>
                                                                         <input type="date" class="form-control">
                                                                     </div>

                                                                 </div>
                                                             </div>

                                                             <div class="modal-footer">
                                                                 <button type="submit" class="btn btn-success">Save &
                                                                     Continue</button>
                                                                 <button type="button" class="btn btn-secondary"
                                                                     data-bs-dismiss="modal">Exit</button>
                                                             </div>
                                                         </form>
                                                     </div>
                                                 </div>
                                             </div>
                                             <!-- Modal ends -->

                                         </div>

                                         <!-- Tab 6 Certification -->
                                         <div id="certifications" class="data-section">
                                             <p>Certifications Table</p>
                                             <div class="col-md-12">

                                                 <table class="table table-hover table-striped" id="certification_table">
                                                     <thead style="background-color:#000; font-size:15px;">
                                                         <tr>
                                                             <th scope="col" class="bg-secondary-subtle py-3">
                                                                 Certification(s)</th>
                                                             <th scope="col" class="bg-secondary-subtle py-3">Institute
                                                             </th>
                                                             <th scope="col" class="bg-secondary-subtle py-3">Valid Till
                                                             </th>
                                                             <th scope="col" class="bg-secondary-subtle py-3">Action</th>
                                                         </tr>
                                                     </thead>
                                                     <tbody>
                                                     </tbody>
                                                 </table>

                                             </div>

                                             <!-- Buttons -->
                                             <div class="text-end">
                                                 <button class="btn btn-success" data-bs-toggle="modal"
                                                     data-bs-target="#addCertification">Add</button>
                                             </div>
                                             <div class="btns">
                                                 <button class="btn btn-success">Prev</button>
                                                 <button class="btn btn-success">Next</button>
                                             </div>
                                             <!-- Add Job Modal -->
                                             <div class="modal fade" id="addCertification" tabindex="-1"
                                                 aria-hidden="true">
                                                 <div class="modal-dialog modal-lg">
                                                     <div class="modal-content">
                                                         <form>
                                                             <div class="modal-header bg-success text-white">
                                                                 <h5 class="modal-title">Add Certification </h5>
                                                                 <button type="button" class="btn-close btn-close-white"
                                                                     data-bs-dismiss="modal"></button>
                                                             </div>

                                                             <div class="modal-body">
                                                                 <div class="row g-3">


                                                                     <div class="col-md-4">
                                                                         <label class="form-label">Certification </label>
                                                                         <select class="form-select">
                                                                             <option>Select Certification </option>
                                                                             <option>Entry Level</option>
                                                                             <option>Mid Level</option>
                                                                             <option>Senior Level</option>
                                                                         </select>
                                                                     </div>


                                                                     <div class="col-md-4">
                                                                         <label class="form-label">Institute </label>
                                                                         <input type="text" class="form-control">
                                                                     </div>
                                                                     <div class="col-md-4">
                                                                         <label class="form-label">Valid Till </label>
                                                                         <input type="date" class="form-control">
                                                                         <small class="text-danger">Please enter valid
                                                                             till date</small>
                                                                     </div>


                                                                 </div>
                                                             </div>

                                                             <div class="modal-footer">
                                                                 <button type="submit" class="btn btn-success">Save &
                                                                     Continue</button>
                                                                 <button type="button" class="btn btn-secondary"
                                                                     data-bs-dismiss="modal">Exit</button>
                                                             </div>
                                                         </form>
                                                     </div>
                                                 </div>
                                             </div>
                                             <!-- Modal ends -->


                                         </div>

                                         <!-- Tab 7 Achievements -->
                                         <div id="achievements" class="data-section">
                                             <p>Achievements Table</p>
                                             <div class="col-md-12">

                                                 <table class="table table-hover table-striped" id="achievement_table">
                                                     <thead style="background-color:#000; font-size:15px;">
                                                         <tr>
                                                             <th scope="col" class="bg-secondary-subtle py-3">Achievement
                                                                 Title</th>
                                                             <th scope="col" class="bg-secondary-subtle py-3">
                                                                 Descriptions</th>
                                                             <th scope="col" class="bg-secondary-subtle py-3">Action</th>
                                                         </tr>
                                                     </thead>
                                                     <tbody>
                                                     </tbody>
                                                 </table>

                                             </div>

                                             <!-- Buttons -->
                                             <div class="text-end">
                                                 <button class="btn btn-success" data-bs-toggle="modal"
                                                     data-bs-target="#addAchievements">Add</button>
                                             </div>
                                             <div class="btns">
                                                 <button class="btn btn-success">Prev</button>
                                                 <button class="btn btn-success">Next</button>
                                             </div>
                                             <!-- Add Job Modal -->
                                             <div class="modal fade" id="addAchievements" tabindex="-1"
                                                 aria-hidden="true">
                                                 <div class="modal-dialog modal-lg">
                                                     <div class="modal-content">
                                                         <form>
                                                             <div class="modal-header bg-success text-white">
                                                                 <h5 class="modal-title">Add Achievement </h5>
                                                                 <button type="button" class="btn-close btn-close-white"
                                                                     data-bs-dismiss="modal"></button>
                                                             </div>

                                                             <div class="modal-body">
                                                                 <div class="row g-3">


                                                                     <div class="col-md-6">
                                                                         <label class="form-label">Achievement Title
                                                                         </label>
                                                                         <input type="text" class="form-control">
                                                                     </div>

                                                                     <div class="col-12">
                                                                         <label for=""> Achievement Description </label>
                                                                         <textarea class="form-control" id="" name=""
                                                                             rows="4"></textarea>
                                                                     </div>

                                                                 </div>
                                                             </div>

                                                             <div class="modal-footer">
                                                                 <button type="submit" class="btn btn-success">Save &
                                                                     Continue</button>
                                                                 <button type="button" class="btn btn-secondary"
                                                                     data-bs-dismiss="modal">Exit</button>
                                                             </div>
                                                         </form>
                                                     </div>
                                                 </div>
                                             </div>
                                             <!-- Modal ends -->



                                         </div>

                                         <!-- Tab 8 Reaserch -->
                                         <div id="research" class="data-section">
                                             <p>Research Work Table</p>
                                             <div class="col-md-12 bg-secondary">

                                                 <table class="table table-hover table-striped" id="research_table">
                                                     <thead style="background-color:#000; font-size:15px;">
                                                         <tr>
                                                             <th scope="col" class="bg-secondary-subtle py-3">Research
                                                                 Title</th>
                                                             <th scope="col" class="bg-secondary-subtle py-3">
                                                                 Publication Venue</th>
                                                             <th scope="col" class="bg-secondary-subtle py-3">
                                                                 Publication link</th>
                                                             <th scope="col" class="bg-secondary-subtle py-3">Action</th>
                                                         </tr>
                                                     </thead>
                                                     <tbody>

                                                     </tbody>
                                                 </table>

                                             </div>

                                             <!-- Buttons -->
                                             <div class="text-end">
                                                 <button class="btn btn-success" data-bs-toggle="modal"
                                                     data-bs-target="#addResearch">Add</button>
                                             </div>
                                             <div class="btns">
                                                 <button class="btn btn-success">Prev</button>
                                                 <button class="btn btn-success">Next</button>
                                             </div>
                                             <!-- Add Job Modal -->
                                             <div class="modal fade" id="addResearch" tabindex="-1" aria-hidden="true">
                                                 <div class="modal-dialog modal-lg">
                                                     <div class="modal-content">
                                                         <form>
                                                             <div class="modal-header bg-success text-white">
                                                                 <h5 class="modal-title">Add Research Work </h5>
                                                                 <button type="button" class="btn-close btn-close-white"
                                                                     data-bs-dismiss="modal"></button>
                                                             </div>

                                                             <div class="modal-body">
                                                                 <div class="row g-3">


                                                                     <div class="col-md-12">
                                                                         <label class="form-label">Research Title
                                                                         </label>
                                                                         <input type="text" class="form-control">
                                                                     </div>
                                                                     <div class="col-md-6">
                                                                         <label class="form-label">Publication Venue
                                                                         </label>
                                                                         <input type="text" class="form-control">
                                                                     </div>
                                                                     <div class="col-md-6">
                                                                         <label class="form-label">Publication Link
                                                                         </label>
                                                                         <input type="text" class="form-control">
                                                                     </div>


                                                                 </div>
                                                             </div>

                                                             <div class="modal-footer">
                                                                 <button type="submit" class="btn btn-success">Save &
                                                                     Continue</button>
                                                                 <button type="button" class="btn btn-secondary"
                                                                     data-bs-dismiss="modal">Exit</button>
                                                             </div>
                                                         </form>
                                                     </div>
                                                 </div>
                                             </div>
                                             <!-- Modal ends -->
                                         </div>

                                         <!-- Tab 9 Target job -->
                                         <div id="job" class="data-section">
                                             <p>Target Job Table</p>
                                             <div class="col-md-12 col-sm-12 col-lg-12">
                                                 <form id="target_job_forms" novalidate="novalidate" class="bv-form">
                                                     <button type="submit" class="bv-hidden-submit"
                                                         style="display: none; width: 0px; height: 0px;"></button>
                                                     <input type="hidden" name="ci_csrf_token" value="">
                                                     <div id="target_job_validation_erros">
                                                     </div>
                                                     <div class="row">

                                                         <div class="col-md-6 form-group has-feedback">
                                                             <label class="control-label">Job Title <span
                                                                     class="text-danger">*</span></label>
                                                             <input type="text" class="form-control"
                                                                 name="target_job_title" placeholder="Software Engineer"
                                                                 required="" data-bv-field="target_job_title"><i
                                                                 class="form-control-feedback"
                                                                 data-bv-icon-for="target_job_title"
                                                                 style="display: none;"></i>
                                                             <small class="help-block" data-bv-validator="notEmpty"
                                                                 data-bv-for="target_job_title"
                                                                 data-bv-result="NOT_VALIDATED"
                                                                 style="display: none;">Please
                                                                 enter target job</small><small class="help-block"
                                                                 data-bv-validator="regexp"
                                                                 data-bv-for="target_job_title"
                                                                 data-bv-result="NOT_VALIDATED"
                                                                 style="display: none;">Please
                                                                 enter alphabets
                                                                 only</small>
                                                         </div>
                                                         <div class="col-md-6 form-group has-feedback">
                                                             <label class="control-label">Career Level</label>
                                                             <select name="carrier_level" id="career_level"
                                                                 class="form-control " tabindex="-1" aria-hidden="true"
                                                                 data-bv-field="carrier_level">
                                                                 <option value="">
                                                                     Select Career
                                                                     Level</option>
                                                                 <option value="Student/Internship">
                                                                     Student/Internship
                                                                 </option>
                                                                 <option value="Entry Level">
                                                                     Entry Level
                                                                 </option>
                                                                 <option value="Mid Career">
                                                                     Mid Career
                                                                 </option>
                                                                 <option value="Management">
                                                                     Management
                                                                 </option>
                                                                 <option value="Executive/Director">
                                                                     Executive/Director
                                                                 </option>
                                                                 <option value="Senior Management">
                                                                     Senior
                                                                     Management
                                                                 </option>
                                                             </select><i class="form-control-feedback"
                                                                 data-bv-icon-for="carrier_level"
                                                                 style="display: none;"></i><span
                                                                 class="select2 select2-container select2-container--default"
                                                                 dir="ltr" style="width: 100px;"><span
                                                                     class="selection"><span
                                                                         class="select2-selection select2-selection--single"
                                                                         role="combobox" aria-haspopup="true"
                                                                         aria-expanded="false" tabindex="0"
                                                                         aria-labelledby="select2-career_level-container"><span
                                                                             class="select2-selection__rendered"
                                                                             id="select2-career_level-container"
                                                                             title="Select Career Level">Select
                                                                             Career
                                                                             Level</span><span
                                                                             class="select2-selection__arrow"
                                                                             role="presentation"><b
                                                                                 role="presentation"></b></span></span></span><span
                                                                     class="dropdown-wrapper"
                                                                     aria-hidden="true"></span></span>
                                                             <small class="help-block" data-bv-validator="notEmpty"
                                                                 data-bv-for="carrier_level"
                                                                 data-bv-result="NOT_VALIDATED"
                                                                 style="display: none;">Please
                                                                 enter career
                                                                 level</small>
                                                         </div>
                                                     </div>



                                                     <div class="row">
                                                         <div class="col-md-6 form-group has-feedback">
                                                             <label class="control-label">Target
                                                                 Monthly Salary
                                                                 (PKR)</label>
                                                             <select class="form-select">
                                                                 <option value="" class="black">
                                                                     Select One
                                                                 </option>
                                                                 <option value="N/A" class="black">
                                                                     Not Applicable
                                                                 </option>
                                                                 <option class="black" value="5000-5999">
                                                                     5,000 - 5,999
                                                                 </option>
                                                                 <option class="black" value="6000-6999">
                                                                     6,000 - 6,999
                                                                 </option>
                                                                 <option class="black" value="7000-7999">
                                                                     7,000 - 7,999
                                                                 </option>
                                                                 <option class="black" value="8000-8999">
                                                                     8,000 - 8,999
                                                                 </option>
                                                                 <option class="black" value="9000-9999">
                                                                     9,000 - 9,999
                                                                 </option>
                                                                 <option class="black" value="10000-14999">
                                                                     10,000 - 14,999
                                                                 </option>
                                                                 <option class="black" value="15000-19999">
                                                                     15,000 - 19,999
                                                                 </option>
                                                                 <option class="black" value="20000-24999">
                                                                     20,000 - 24,999
                                                                 </option>
                                                                 <option class="black" value="25000-29000">
                                                                     25,000 - 29,000
                                                                 </option>
                                                                 <option class="black" value="30000-34999">
                                                                     30,000 - 34,999
                                                                 </option>
                                                                 <option class="black" value="35000-3999">
                                                                     35,000 - 39,999
                                                                 </option>
                                                                 <option class="black" value="40000-44999">
                                                                     40,000 - 44,999
                                                                 </option>
                                                                 <option class="black" value="45000-49999">
                                                                     45,000 - 49,999
                                                                 </option>
                                                                 <option class="black" value="50000-59999">
                                                                     50,000 - 59,999
                                                                 </option>
                                                                 <option class="black" value="60000-69999">
                                                                     60,000 - 69,999
                                                                 </option>
                                                                 <option class="black" value="70000-79999">
                                                                     70,000 - 79,999
                                                                 </option>
                                                                 <option class="black" value="80000-89999">
                                                                     80,000 - 89,999
                                                                 </option>
                                                                 <option class="black" value="90000-99999">
                                                                     90,000 - 99,999
                                                                 </option>
                                                                 <option class="black" value="100000-124999">
                                                                     100,000 -
                                                                     124,999</option>
                                                                 <option class="black" value="125000-149999">
                                                                     125,000 -
                                                                     149,999</option>
                                                                 <option class="black" value="150000-174999">
                                                                     150,000 -
                                                                     174,999</option>
                                                                 <option class="black" value="175000-199999">
                                                                     175,000 -
                                                                     199,999</option>
                                                                 <option class="black" value="200000-249999">
                                                                     200,000 -
                                                                     249,999</option>
                                                                 <option class="black" value="250000-299999">
                                                                     250,000 -
                                                                     299,999</option>
                                                                 <option class="black" value="300000-349999">
                                                                     300,000 -
                                                                     349,999</option>
                                                                 <option class="black" value="350000-399999">
                                                                     350,000 -
                                                                     399,999</option>
                                                                 <option class="black" value="400000-449999">
                                                                     400,000 -
                                                                     449,999</option>
                                                                 <option class="black" value="500000-599999">
                                                                     500,000 -
                                                                     599,999</option>
                                                                 <option class="black" value="600000-699999">
                                                                     600,000 -
                                                                     699,999</option>
                                                                 <option class="black" value="700000-799999">
                                                                     700,000 -
                                                                     799,999</option>
                                                                 <option class="black" value="800000-899999">
                                                                     800,000 -
                                                                     899,999</option>
                                                                 <option class="black" value="1000000-1099999">
                                                                     1,000,000-1,099,999
                                                                 </option>
                                                                 <option class="black" value="1100000-1199999">
                                                                     1,100,000-1,199,999
                                                                 </option>
                                                             </select><i class="form-control-feedback"
                                                                 data-bv-icon-for="target_monthly_salary"
                                                                 style="display: none;"></i><span
                                                                 class="select2 select2-container select2-container--default"
                                                                 dir="ltr" style="width: 100px;"><span
                                                                     class="selection"><span
                                                                         class="select2-selection select2-selection--single"
                                                                         role="combobox" aria-haspopup="true"
                                                                         aria-expanded="false" tabindex="0"
                                                                         aria-labelledby="select2-target_monthly_salary-2n-container"><span
                                                                             class="select2-selection__rendered"
                                                                             id="select2-target_monthly_salary-2n-container"
                                                                             title="Select One">Select
                                                                             One</span><span
                                                                             class="select2-selection__arrow"
                                                                             role="presentation"><b
                                                                                 role="presentation"></b></span></span></span><span
                                                                     class="dropdown-wrapper"
                                                                     aria-hidden="true"></span></span>
                                                             <small class="help-block" data-bv-validator="notEmpty"
                                                                 data-bv-for="target_monthly_salary"
                                                                 data-bv-result="NOT_VALIDATED"
                                                                 style="display: none;">Please
                                                                 enter target monthly
                                                                 salary</small>
                                                         </div>
                                                         <div class="col-md-6 form-group has-feedback">
                                                             <label class="control-label">Last
                                                                 Monthly Salary
                                                                 (PKR)</label>
                                                             <select aria-required="true"
                                                                 class="form-select ss select2-hidden-accessible"
                                                                 name="last_monthly_salary" tabindex="-1"
                                                                 aria-hidden="true">
                                                                 <option value="" class="black">
                                                                     Not Available
                                                                 </option>
                                                                 <option class="black" value="5000-5999" 5000-5999="">
                                                                     5,000 - 5,999
                                                                 </option>
                                                                 <option class="black" value="6000-6999" 6000-6999="">
                                                                     6,000 - 6,999
                                                                 </option>
                                                                 <option class="black" value="7000-7999" 7000-7999="">
                                                                     7,000 - 7,999
                                                                 </option>
                                                                 <option class="black" value="8000-8999" 8000-8999="">
                                                                     8,000 - 8,999
                                                                 </option>
                                                                 <option class="black" value="9000-9999" 9000-9999="">
                                                                     9,000 - 9,999
                                                                 </option>
                                                                 <option class="black" value="10000-14999"
                                                                     10000-14999="">
                                                                     10,000 - 14,999
                                                                 </option>
                                                                 <option class="black" value="15000-19999"
                                                                     15000-19999="">
                                                                     15,000 - 19,999
                                                                 </option>
                                                                 <option class="black" value="20000-24999"
                                                                     20000-24999="">
                                                                     20,000 - 24,999
                                                                 </option>
                                                                 <option class="black" value="25000-29000"
                                                                     25000-29000="">
                                                                     25,000 - 29,000
                                                                 </option>
                                                                 <option class="black" value="30000-34999"
                                                                     30000-34999="">
                                                                     30,000 - 34,999
                                                                 </option>
                                                                 <option class="black" value="35000-3999" 35000-3999="">
                                                                     35,000 - 39,999
                                                                 </option>
                                                                 <option class="black" value="40000-44999"
                                                                     40000-44999="">
                                                                     40,000 - 44,999
                                                                 </option>
                                                                 <option class="black" value="45000-49999"
                                                                     45000-49999="">
                                                                     45,000 - 49,999
                                                                 </option>
                                                                 <option class="black" value="50000-59999"
                                                                     50000-59999="">
                                                                     50,000 - 59,999
                                                                 </option>
                                                                 <option class="black" value="60000-69999"
                                                                     60000-69999="">
                                                                     60,000 - 69,999
                                                                 </option>
                                                                 <option class="black" value="70000-79999"
                                                                     70000-79999="">
                                                                     70,000 - 79,999
                                                                 </option>
                                                                 <option class="black" value="80000-89999"
                                                                     80000-89999="">
                                                                     80,000 - 89,999
                                                                 </option>
                                                                 <option class="black" value="90000-99999"
                                                                     90000-99999="">
                                                                     90,000 - 99,999
                                                                 </option>
                                                                 <option class="black" value="100000-124999"
                                                                     100000-124999="">
                                                                     100,000 -
                                                                     124,999</option>
                                                                 <option class="black" value="125000-149999"
                                                                     125000-149999="">
                                                                     125,000 -
                                                                     149,999</option>
                                                                 <option class="black" value="150000-174999"
                                                                     150000-174999="">
                                                                     150,000 -
                                                                     174,999</option>
                                                                 <option class="black" value="175000-199999"
                                                                     175000-199999="">
                                                                     175,000 -
                                                                     199,999</option>
                                                                 <option class="black" value="200000-249999"
                                                                     200000-249999="">
                                                                     200,000 -
                                                                     249,999</option>
                                                                 <option class="black" value="250000-299999"
                                                                     250000-299999="">
                                                                     250,000 -
                                                                     299,999</option>
                                                                 <option class="black" value="300000-349999"
                                                                     300000-349999="">
                                                                     300,000 -
                                                                     349,999</option>
                                                                 <option class="black" value="350000-399999"
                                                                     350000-399999="">
                                                                     350,000 -
                                                                     399,999</option>
                                                                 <option class="black" value="400000-449999"
                                                                     400000-449999="">
                                                                     400,000 -
                                                                     449,999</option>
                                                                 <option class="black" value="500000-599999"
                                                                     500000-599999="">
                                                                     500,000 -
                                                                     599,999</option>
                                                                 <option class="black" value="600000-699999"
                                                                     600000-699999="">
                                                                     600,000 -
                                                                     699,999</option>
                                                                 <option class="black" value="700000-799999"
                                                                     700000-799999="">
                                                                     700,000 -
                                                                     799,999</option>
                                                                 <option class="black" value="800000-899999"
                                                                     800000-899999="">
                                                                     800,000 -
                                                                     899,999</option>
                                                                 <option class="black" value="1000000-1099999"
                                                                     1000000-1099999="">
                                                                     1,000,000-1,099,999
                                                                 </option>
                                                                 <option class="black" value="1100000-1199999"
                                                                     1100000-1199999="">
                                                                     1,100,000-1,199,999
                                                                 </option>
                                                             </select><span
                                                                 class="select2 select2-container select2-container--default"
                                                                 dir="ltr" style="width: 100px;"><span
                                                                     class="selection"><span
                                                                         class="select2-selection select2-selection--single"
                                                                         role="combobox" aria-haspopup="true"
                                                                         aria-expanded="false" tabindex="0"
                                                                         aria-labelledby="select2-last_monthly_salary-s6-container"><span
                                                                             class="select2-selection__rendered"
                                                                             id="select2-last_monthly_salary-s6-container"
                                                                             title="Not Available">Not
                                                                             Available</span><span
                                                                             class="select2-selection__arrow"
                                                                             role="presentation"><b
                                                                                 role="presentation"></b></span></span></span><span
                                                                     class="dropdown-wrapper"
                                                                     aria-hidden="true"></span></span>
                                                         </div>
                                                     </div>
                                                     <div class="bottom-line clearfix">
                                                         <button type="submit"
                                                             class="btn_profile pull-right btn btn-primary "
                                                             data-text="Add"><span>Save</span></button>
                                                     </div>
                                                 </form>
                                             </div>

                                         </div>


                                     </div>
                                     <!-- end row -->
                                 </div>

                                 <!-- end card-body -->
                             </div>
                             <!-- end card -->
                         </div>
                         <!-- end col -->
                     </div>
                     <!-- end row -->


                 </div>
                 <!-- container-fluid -->
             </div>

             <!-- End Page-content -->

             <!-- Footer start -->
             <?php include('include/footer.html'); ?>
             <!-- Footer end -->
         </div>

         <!-- end main content-->

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






     <!-- CKEditor CDN -->
     <script src="https://cdn.ckeditor.com/4.25.1-lts/standard/ckeditor.js"></script>

     <script>
         // Show modal on button click
         $(document).ready(function() {
             $('#addBtn').click(function() {
                 var modal = new bootstrap.Modal(document.getElementById('addForm'));
                 modal.show();
             });

             // ✅ Initialize CKEditor only when modal is shown
             $('#addForm').on('shown.bs.modal', function() {
                 if (!CKEDITOR.instances['jobDesc']) {
                     CKEDITOR.replace('jobDesc');
                 }
             });

             // ✅ Destroy CKEditor when modal is hidden (optional but recommended)
             $('#addForm').on('hidden.bs.modal', function() {
                 if (CKEDITOR.instances['jobDesc']) {
                     CKEDITOR.instances['jobDesc'].destroy(true);
                 }

                 // Clean up leftover modal classes if needed
                 $('body').removeClass('modal-open');
                 $('.modal-backdrop').remove();
             });
         });
     </script>


     <!-- Modal -->

     <script>
         $(document).ready(function() {
             // Show modal on Add button click
             $('#addBtn').click(function() {
                 var modal = new bootstrap.Modal(document.getElementById('addForm'));
                 modal.show();
             });

             // Initialize CKEditor only when modal is shown
             $('#addForm').on('shown.bs.modal', function() {
                 if (!CKEDITOR.instances['jobDesc']) {
                     CKEDITOR.replace('jobDesc');
                 }
             });

             // Destroy CKEditor when modal is hidden
             $('#addForm').on('hidden.bs.modal', function() {
                 if (CKEDITOR.instances['jobDesc']) {
                     CKEDITOR.instances['jobDesc'].destroy(true);
                 }

                 $('body').removeClass('modal-open');
                 $('.modal-backdrop').remove();
             });

             // ✅ AJAX submit on form save
             $('#experienceForm').on('submit', function(e) {
                 e.preventDefault();

                 var formData = new FormData(this);
                 formData.set('job_responsibilities', CKEDITOR.instances['jobDesc'].getData());

                 fetch('save_experience.php', {
                         method: 'POST',
                         body: formData
                     })
                     .then(response => response.json())
                     .then(data => {
                         if (data.success) {
                             let row = `
                        <tr>
                            <td>${data.experience.position_title}</td>
                            <td>${data.experience.from_date}</td>
                            <td>${data.experience.to_date}</td>
                            <td>${data.experience.company_name}</td>
                            <td>${data.experience.job_level}</td>
                            <td>${data.experience.job_responsibilities}</td>
                            <td><button class="btn btn-sm btn-danger">Delete</button></td>
                        </tr>
                    `;
                             $('#work_history_table tbody').append(row);

                             // Close modal and reset
                             const modal = bootstrap.Modal.getInstance(document.getElementById('addForm'));
                             modal.hide();

                             this.reset();
                             CKEDITOR.instances['jobDesc'].setData('');
                         } else {
                             alert("Error: " + data.message);
                         }
                     })
                     .catch(err => alert("Failed: " + err));
             });
         });
     </script>


     <!-- Scripts -->
     <!-- apexcharts -->

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
     <!-- DataTables JS and Extensions -->
     <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.flash.min.js"></script>
     <!-- Responsive examples -->
     <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>

     <!-- Datatable init js -->
     <script src="assets/js/pages/datatables-extension.init.js"></script>

     <script src="assets/libs/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
     <script src="assets/libs/jszip/jszip.min.js"></script>
     <script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
     <script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
     <script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
     <script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
     <script src="assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
     <!-- apexcharts -->
     <script src="assets/libs/apexcharts/apexcharts.min.js"></script>


     <script src="assets/js/pages/dashboard.init.js"></script>
     <script src="assets/libs/parsleyjs/parsley.min.js"></script>

     <script src="assets/js/pages/form-validation.init.js"></script>

     <script src="assets/js/app.js"></script>













     <!-- Sweet Alerts js -->
     <script src="../assets/libs/sweetalert2/sweetalert2.min.js"></script>

     <!-- Sweet alert init js-->
     <script src="../assets/js/pages/sweet-alerts.init.js"></script>

     <!-- Success Alert -->
     <?php
        // Control alert visibility (0 = none, 1 = success, 2 = warning)
        $showAlert = 2; // Change this value based on your condition

        if ($showAlert == 1): ?>
         <!-- Success Alert -->
         <script>
             window.addEventListener("load", function() {
                 Swal.fire({
                     title: 'Operation Done',
                     icon: 'success',
                     timer: 1000,
                     timerProgressBar: true,
                     showConfirmButton: false,
                     position: 'top-end'
                 });
             });
         </script>
     <?php elseif ($showAlert == 2): ?>
         <!-- Warning Alert -->
         <script>
             window.addEventListener("load", function() {
                 Swal.fire({
                     title: 'Operation Failed',
                     icon: 'warning',
                     timer: 1000,
                     timerProgressBar: true,
                     showConfirmButton: false,
                     position: 'top-end'
                 });
             });
         </script>
     <?php endif; ?>


     <script>
         $(document).ready(function() {
             // Handle tab switching
             $('.tab-btn').click(function() {
                 $('.tab-btn').removeClass('active');
                 $(this).addClass('active');

                 var target = $(this).data('target');
                 $('.data-section').removeClass('active');
                 $(target).addClass('active');
             });

             // Show modal on Add button click
             //    const myModal = document.getElementById('myModal');
             //   myModal.addEventListener('hidden.bs.modal', function () {
             //     document.body.classList.remove('modal-open');
             //     document.querySelector('.modal-backdrop')?.remove();
             //   });
             //   });

             //   $(document).ready(function () {
             //   $('#addBtn').click(function () {
             //     var modal = new bootstrap.Modal(document.getElementById('addForm'));
             //     modal.show();
             //   });


         });
     </script>

     <!-- Controll edit button of experience -->
     <script>
         $(document).ready(function() {
             $('.edit-btn').click(function() {
                 // Get data attributes from clicked button
                 let button = $(this);
                 $('#experience_id').val(button.data('id'));
                 $('#position_title').val(button.data('title'));
                 $('#from_date').val(button.data('from'));
                 $('#to_date').val(button.data('to'));
                 $('#company_name').val(button.data('company'));
                 $('#job_level').val(button.data('level'));
                 $('#country').val(button.data('country'));
                 $('#jobDesc').val(button.data('desc'));

                 // Change modal title and button text if you want
                 $('#experienceModalLabel').text('Edit Experience');
                 $('#saveExperienceBtn').val('Update'); // or .text() if it's a button
             });
         });
     </script>

     <!-- Controll edit button of degree -->
     <script>
         $(document).ready(function() {
             $('.edit-degree-btn').click(function() {
                 var btn = $(this);
                 $('#degreeSubmitBtn')
                     .text('Update') // Change button text
                     .attr('name', 'update_degree_info'); // Change form name for backend handling

                 $('#degree_id').val(btn.data('id'));
                 $('#degree_level').val(btn.data('degree_level'));
                 $('#degree').val(btn.data('degree'));
                 $('#institute').val(btn.data('institute'));
                 $('#major_subjects').val(btn.data('major_subjects'));
                 $('#start_date').val(btn.data('start_date'));
                 $('#completion_date').val(btn.data('completion_date'));
                 $('#country').val(btn.data('country'));
                 $('#marks_percentage').val(btn.data('marks_percentage'));
                 $('#position_holder').val(btn.data('position_holder'));
             });
         });
     </script>

     <!-- Input masking -->
     <script>
         // ✅ CNIC Mask: 12345-1234567-1
         Inputmask("99999-9999999-9").mask("#cnic");
     </script>

     <!-- Experience status handling -->
     <script>
         $(document).ready(function() {
             $('.status-btn').click(function(e) {
                 e.preventDefault();

                 var button = $(this);
                 var id = button.data('id');
                 var newStatus = button.data('status');

                 $.ajax({
                     url: 'update_experience_status.php', // Make sure this is the correct PHP file
                     method: 'POST',
                     data: {
                         id: id,
                         status: newStatus
                     },
                     success: function(response) {
                         console.log("Response:", response);
                         alert(response);
                         location.reload(true); // Force full reload
                     },
                     error: function() {
                         alert("❌ Error updating status.");
                     }
                 });
             });
         });
     </script>


     <!-- Active handling -->
     <script>
         $(document).ready(function() {
             // Status change handler
             $('.status-btn').click(function(e) {
                 e.preventDefault();
                 var button = $(this);
                 var id = button.data('id');
                 var newStatus = button.data('status');

                 $.ajax({
                     url: 'update_degree_status.php',
                     method: 'POST',
                     data: {
                         id: id,
                         status: newStatus
                     },
                     success: function(response) {
                         alert(response);
                         location.reload(); // Refresh page to reflect status change
                     },
                     error: function() {
                         alert("❌ Error updating status.");
                     }
                 });
             });
         });
     </script>





 </body>

 </html>