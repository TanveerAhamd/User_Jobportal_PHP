
<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "user-experience"; // ✅ change this

$conn = new mysqli($host, $user, $password, $db);
if ($conn->connect_error) {
  echo json_encode(["success" => false, "message" => "Database connection failed."]);
  exit;
}

// Handle uploaded file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize data
    $position_title=$_POST['position_title'];
        $from_date=$_POST['from_date'];
        $to_date=$_POST['to_date'];
        $company_name=$_POST['company_name'];
        $job_level=$_POST['job_level'];
        $country=$_POST['country'];
         $experience_certificate=$_POST['experience_certificate'];
          $jobDesc=$_POST['jobDesc'];
        
        $insert_qry_run=mysqli_query($conn,$insert_qry);
    

    // NOTE: For file uploads like CNIC, Domicile, etc., use move_uploaded_file() logic if storing them.

    // 4. Insert query
    $sql = "INSERT INTO job_experience(position_title,from_date,to_date,company_name,job_level,country,experience_certificate,jobDesc)
     VALUES ('$position_title','$from_date','$to_date','$company_name','$job_level','$country','$experience_certificate','$jobDesc')";

    // 5. Execute query
    if ($conn->query($sql) === TRUE) {
        // echo "✅ Profile data saved successfully!";
        $inserted_id = $conn->insert_id;
header("Location:");
exit;

    } else {
        echo "❌ Error: " . $sql . "<br>" . $conn->error;
    }

    // 6. Close connection
    $conn->close();
}

?>



<!-- dkghj -->

