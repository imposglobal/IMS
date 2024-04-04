<?php 
require('db.php');
$assign = $_POST['assign'];
if($assign == 'delist'){
    $refno = $_POST['refno'];
    $msg = $_POST['msg'];
    $condition = $_POST['condition'];
    $sql = "UPDATE inventory SET eid='0', conditionp ='$condition',comments = '$msg' WHERE serial_no = '$refno'";
            if ($db->query($sql) === TRUE) {
                echo "updated";
            } else {
               echo "false";
            }
}
if($assign == 'update'){
    $pname = $_POST['pname'];
    $vname = $_POST['vname'];
    $brand = $_POST['brand'];
    $refno = $_POST['refno'];
    $msg = $_POST['msg'];
    $condition = $_POST['condition'];
    $sql = "UPDATE inventory SET eid='0',vendor_name = '$vname', brand='$brand', product_name = '$pname', conditionp ='$condition',comments = '$msg' WHERE serial_no = '$refno'";
            if ($db->query($sql) === TRUE) {
                echo "updated";
            } else {
               echo "false";
            }
}

?>