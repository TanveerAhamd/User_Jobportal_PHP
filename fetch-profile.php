<?php
// 1. Database connection & authorization
include ('include/auth.php');

// 2. Fetch data from Profile_builder table
$sql = "SELECT * FROM Profile_builder";
$result = $cn->query($sql);

// 3. Display the data in table format
if ($result->num_rows > 0) {
    echo "<h3>User Profile Data</h3>";
    echo "<table border='1' cellpadding='10'>";
    echo "<tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>DOB</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Marital Status</th>
            <th>Father Name</th>
            <th>Mobile</th>
            <th>CNIC</th>
            <th>Postal Address</th>
            <th>Domicile</th>
            <th>Nationality</th>
            <th>City</th>
            <th>Objective</th>
          </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['user_profile_first_name'] . "</td>";
        echo "<td>" . $row['user_profile_last_name'] . "</td>";
        echo "<td>" . $row['user_profile_birth'] . "</td>";
        echo "<td>" . $row['user_profile_age'] . "</td>";
        echo "<td>" . $row['user_profile_gender'] . "</td>";
        echo "<td>" . $row['user_profile_marital_status'] . "</td>";
        echo "<td>" . $row['user_profile_father_name'] . "</td>";
        echo "<td>" . $row['user_profile_phonenum'] . "</td>";
        echo "<td>" . $row['user_profile_cnic'] . "</td>";
        echo "<td>" . $row['user_profile_postaladr'] . "</td>";
        echo "<td>" . $row['user_profile_domicile'] . "</td>";
        echo "<td>" . $row['user_profile_nationality'] . "</td>";
        echo "<td>" . $row['user_profile_reside_city'] . "</td>";
        echo "<td>" . $row['user_profile_objective'] . "</td>";
        echo "<td><a href='cv.php?user_profile_id= " . $row['user_profile_id'] ."' class='btn btn-primary'>View CV</a></td>";
    }

    echo "</table>";
} else {
    echo "No records found.";
}
 

// 5. Close connection
$cn->close();
?>


