<?php
include('include/config.php');
session_start();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $cn->query("SELECT * FROM Profile_builder WHERE user_profile_id = $id");
    $row = $result->fetch_assoc();
}

if (isset($_POST['updatebtn'])) {
    $first_name = $_POST['user_profile_first_name'];
    $last_name = $_POST['user_profile_last_name'];
    $phone = $_POST['user_profile_phonenum'];

    $update = "UPDATE Profile_builder SET 
                user_profile_first_name='$first_name', 
                user_profile_last_name='$last_name',
                user_profile_phonenum='$phone' 
               WHERE user_profile_id=$id";

    if ($cn->query($update)) {
        header("Location: view_profiles.php");
        exit;
    } else {
        echo "Update failed!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   
    
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="card shadow-lg border-0">
        <div class="card-header bg-success text-white">
            <h4 class="mb-0">Edit Profile</h4>
        </div>
        <div class="card-body">
            <form method="POST">
                <div class="mb-3">
                    <label class="form-label">First Name</label>
                    <input type="text" name="user_profile_first_name" class="form-control" value="<?= $row['user_profile_first_name']; ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Last Name</label>
                    <input type="text" name="user_profile_last_name" class="form-control" value="<?= $row['user_profile_last_name']; ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Phone Number</label>
                    <input type="number" name="user_profile_phonenum" class="form-control" value="<?= $row['user_profile_phonenum']; ?>" required>
                </div>
                 <div class="mb-3">
                    <label class="form-label">CNIC </label>
                    <input type="number" name="user_profile_cnic" class="form-control" data-inputmask="'mask':'99999-9999999-9'" placeholder="xxxxx-xxxxxxx-x"  value="<?= $row['user_profile_cnic']; ?>" required>
                </div>
                <div class="d-flex justify-content-between">
                    <a href="view_profiles.php" class="btn btn-secondary">Back</a>
                    <button type="submit" name="updatebtn" class="btn btn-success">Update Profile</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Masking Code for CNIC, Mobile etc -->

<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/jquery.inputmask.bundle.js"></script>
<script>
    $(":input").inputmask();
</script>

</body>
</html>
