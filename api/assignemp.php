<?php
require('db.php');
if(isset($_POST['assign']) == "assign"){
$empno = $_POST['empid'];
$pid = $_POST['refcode'];
$date = date('Y-m-d');

$sql = "SELECT * FROM inventory WHERE pid = '$pid'";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        $product_name = $row['product_name'];
        $refno = $row['serial_no'];
    }
}

$sql = "SELECT * FROM emplyee WHERE emp_id = '$empno'";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        $eid = $row['eid'];
        $emp_name = $row['emp_name'];
    }
}

//insert Data
$sql = "UPDATE inventory SET eid ='$eid',conditionp = 'assigned' WHERE pid = '$pid'";
        if ($db->query($sql) === TRUE) {
            echo "updated";
        } else {
           echo "false";
        }
$sql = "INSERT INTO history(emp_id,emp_name,ref_no,product_name,added_date) VALUES ('$empno','$emp_name','$refno','$product_name','$date')";
        if ($db->query($sql) === TRUE) {
            echo "true";
        } else {
           echo "false";
        }
}else{
    echo"200 - An error occured.";
}
?>