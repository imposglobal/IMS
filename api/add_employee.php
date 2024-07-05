<?php 
//require('db.php');

if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $fullname = $fname . " " . $lname;
    $email = $_POST['email'];
    $design = $_POST['design'];
    $emp_id = $_POST['emp_id'];
    $team_name = $_POST['team_name'];
    $date = date("Y-m-d");
    $time = date("H:i:s");

    // Prepare statement to check for duplicate employee ID
    $stmt = $db->prepare("SELECT * FROM emplyee WHERE emp_id = ?");
    $stmt->bind_param("s", $emp_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $count = $result->num_rows;
    $stmt->close();

    if ($count >= 1) {
        header("location: ../add_employee.php?status=duplicate");
        exit();
    } else {
        // Prepare statement to insert data into employee table
        $stmt = $db->prepare("INSERT INTO emplyee (emp_name, email, department, emp_id, added_date, added_time, team_name) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssss", $fullname, $email, $design, $emp_id, $date, $time, $team_name);
        $res = $stmt->execute();
        $stmt->close();

        // Prepare statement to insert data into creds table
        $stmt = $db->prepare("INSERT INTO creds (emp_name, emp_id) VALUES (?, ?)");
        $stmt->bind_param("ss", $fullname, $emp_id);
        $resp = $stmt->execute();
        $stmt->close();

        if ($res && $resp) {
            header("location: ../add_employee.php?status=success");
        } else {
            header("location: ../add_employee.php?status=error");
        }
        exit();
    }
}
?>
