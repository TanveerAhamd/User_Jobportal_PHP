<?php
session_start();
include ('include/config.php');



if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['savebtn'])) {

    // Collect form data
    $first_name = $_POST['user_profile_first_name'];
    $last_name = $_POST['user_profile_last_name'];
    $birth = $_POST['user_profile_birth'];
    $age = $_POST['user_profile_age'];
    $gender = $_POST['user_profile_gender'] ?? '';
    $marital_status = $_POST['user_profile_marital_status'] ?? '';
    $husband_name = $_POST['user_profile_husband_name'] ?? '';
    $father_name = $_POST['user_profile_father_name'];
    $religion = $_POST['user_profile_religion'] ?? '';
    $phone = $_POST['user_profile_phonenum'];
    $landline = $_POST['user_profile_landline'] ?? '';
    $postal = $_POST['user_profile_postaladr'];
    $cnic = $_POST['user_profile_cnic'];
    $cnic_expiry = $_POST['user_profile_cnic_expery'];
    $domicile = $_POST['user_profile_domicile'];
    $domicile_number = $_POST['user_profile_domicilenum'];
    $license_number = $_POST['user_profile_driving_license'];
    $nationality = $_POST['user_profile_nationality'];
    $reside_country = $_POST['user_profile_reside_country'];
    $reside_city = $_POST['user_profile_reside_city'];
    $certificate_number = $_POST['user_profile_certificatenum'] ?? '';
    $hafiz = $_POST['user_profile_hafiz'] ?? '';
    $ex_service = $_POST['user_profile_exservice'] ?? '';
    $disable = isset($_POST['user_profile_disable']) ? 1 : 0;
    $servent = isset($_POST['user_profile_servent']) ? 1 : 0;
    $official = isset($_POST['user_profile_official']) ? 1 : 0;
    $objective = $_POST['user_profile_objective'];

    $sql = "INSERT INTO Profile_builder (
        user_profile_first_name, user_profile_last_name, user_profile_birth, user_profile_age, 
        user_profile_gender, user_profile_marital_status, user_profile_husband_name, user_profile_father_name,
        user_profile_religion, user_profile_phonenum, user_profile_landline, user_profile_postaladr,
        user_profile_cnic, user_profile_cnic_expery, user_profile_domicile, user_profile_domicilenum,
        user_profile_driving_license, user_profile_nationality, user_profile_reside_country,
        user_profile_reside_city, user_profile_certificatenum, user_profile_hafiz, user_profile_exservice,
        user_profile_disable, user_profile_servent, user_profile_official, user_profile_objective
    ) VALUES (
        '$first_name', '$last_name', '$birth', '$age', 
        '$gender', '$marital_status', '$husband_name', '$father_name',
        '$religion', '$phone', '$landline', '$postal',
        '$cnic', '$cnic_expiry', '$domicile', '$domicile_number',
        '$license_number', '$nationality', '$reside_country',
        '$reside_city', '$certificate_number', '$hafiz', '$ex_service',
        '$disable', '$servent', '$official', '$objective'
    )";


    if ($cn->query($sql) === TRUE) {
        // echo "✅ Record inserted successfully!";
        header("Location: profile_builder_form_wizard.php");
        exit;
    } else {
        echo "❌ Error: " . $sql . "<br>" . $cn->error;
    }

    $cn->close();
}
?>
