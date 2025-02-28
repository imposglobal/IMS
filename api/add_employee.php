<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
require('db.php');

if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $fullname = $fname . " " . $lname;
    $email = $_POST['email'];
    $design = $_POST['design'];
    $emp_id = $_POST['emp_id'];
    $team_name = $_POST['team_name'];
    $date = date("Y-m-d");
    $time = date("H:i:s");


$sql = "SELECT * FROM emplyee ORDER BY eid DESC LIMIT 1";
$result = mysqli_query($db, $sql);

// Check if the query was successful and print the last added record
if ($result) {
    if ($row = mysqli_fetch_assoc($result)) {
        $e_id = $row['eid']; // or any other field you want to display
        $eid = $e_id + 1;
    } else {
        echo "No records found.";
    }
} else {
    echo "Error: " . mysqli_error($db);
}

    $sql = "SELECT * FROM emplyee WHERE emp_id = '$emp_id'";
    $result = mysqli_query($db, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        header("Location: ../add_employee.php?status=duplicate");
    } else {
        //echo "hii";
        $insertEmployeeSql = "INSERT INTO emplyee (eid, emp_name, email, department, emp_id, added_date, added_time, team_name)
                              VALUES ('$eid','$fullname', '$email', '$design', '$emp_id', '$date', '$time', '$team_name')";
        
        // $insertCredsSql = "INSERT INTO creds (emp_name, emp_id)
        //                    VALUES ('$fullname', '$emp_id')";

        $resEmployee = $db->query($insertEmployeeSql);
        //$resCreds = $db->query($insertCredsSql);

        if ($resEmployee === TRUE && $resCreds === TRUE) {
            header("Location: ../add_employee.php?status=success");
        } else {
            header("Location: ../add_employee.php?status=error");
        }

    }
}
?>
