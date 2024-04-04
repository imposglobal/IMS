<?php 
require('db.php');
$assign = $_POST['assign'];
if($assign == 'deleteproduct'){
    $pid = $_POST['pid'];
    $sql = "DELETE FROM inventory WHERE pid ='$pid'";
            if ($db->query($sql) === TRUE) {
                echo "Deleted";
            } else {
               echo "Something Went Wrong";
            }
}
if($assign == 'deleteemp'){
    $eid = $_POST['eid'];
    $sql = "DELETE FROM emplyee WHERE emp_id ='$eid'";
            if ($db->query($sql) === TRUE) {
                echo "Deleted";
            } else {
               echo "Something Went Wrong";
            }
}

?>