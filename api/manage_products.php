<?php 
require('db.php');

if (isset($_POST["update"])) 
{
    $pid = $_POST["pid"];
    $newcondition = "rtu";

    $qry = "UPDATE inventory SET conditionp = '$newcondition' WHERE pid = '$pid'";
    $update = $db->query($qry);

    if ($update === true) 
    {
    echo "Product updated successfully.";
    } 
    else 
    {
    echo "Error updating product: " . $db->error;
    }
}
?>