<?php 
require('db.php');
if(isset($_POST['assign'])){
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $design = $_POST['design'];
    $team_name = $_POST['team_name'];
    $emp_id = $_POST['emp_id'];
    $pwd = $_POST['pwd'];
    $sql = "UPDATE emplyee SET email ='$email',emp_name = '$fname', department = '$design',team_name = '$team_name'  WHERE emp_id = '$emp_id'";
            if ($db->query($sql) === TRUE) {
                echo "updated";
            } else {
               echo "false";
            }
            
            $sql = "UPDATE creds SET password ='$pwd',emp_name = '$fname' WHERE emp_id = '$emp_id'";
            if ($db->query($sql) === TRUE) {
                echo "updated";
            } else {
               echo "false";
            }
}

?>