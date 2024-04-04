<?php 
require('db.php');
if(isset($_POST['submit'])){

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $fullname = $fname." ".$lname;
    $email = $_POST['email'];
    $design = $_POST['design'];
    $emp_id = $_POST['emp_id'];
    $team_name = $_POST['team_name'];
    $date = date("Y-m-d");
    $time = date("H:i:s");


    $sql = "SELECT * FROM emplyee WHERE emp_id = '$emp_id'";
    $result = mysqli_query($db, $sql);

    if ($result) {
        $count = mysqli_num_rows($result);
        
        if ($count >= 1) {
            header("location: ../add_employee.php?status=duplicate");
        }else{

        // SQL query to insert data
        $sql = "INSERT INTO emplyee (emp_name, email, department, emp_id , added_date, added_time, team_name)
        VALUES ('$fullname', '$email', '$design', '$emp_id', '$date', '$time', '$team_name')";


        if ($db->query($sql) === TRUE) {
            $res = "true";
        } else {
            $res = "false";
        }
        
         // SQL query to insert data
        $sql = "INSERT INTO creds (emp_name, emp_id)
        VALUES ('$fullname','$emp_id')";

        
        if ($db->query($sql) === TRUE) {
            $resp = "true";
        } else {
            $resp = "false";
        }
        
        if ($res == "true" && $resp == "true") {
            header("location: ../add_employee.php?status=success");
        } else {
            header("location: ../add_employee.php?status=error");
        }

 // Close the connection
 $db->close();
        }
    }
    
   
    

}
?>