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

    $sql = "SELECT * FROM emplyee WHERE emp_id = '$emp_id'";
    $result = mysqli_query($db, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        header("Location: ../add_employee.php?status=duplicate");
    } else {
        echo "hii";
        $insertEmployeeSql = "INSERT INTO emplyee (emp_name, email, department, emp_id, added_date, added_time, team_name)
                              VALUES ('$fullname', '$email', '$design', '$emp_id', '$date', '$time', '$team_name')";
        
        $insertCredsSql = "INSERT INTO creds (emp_name, emp_id)
                           VALUES ('$fullname', '$emp_id')";

        $resEmployee = $db->query($insertEmployeeSql);
        $resCreds = $db->query($insertCredsSql);

        if ($resEmployee === TRUE && $resCreds === TRUE) {
            header("Location: ../add_employee.php?status=success");
        } else {
            header("Location: ../add_employee.php?status=error");
        }

    }
}
?>
