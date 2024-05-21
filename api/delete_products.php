<?php 
require('db.php');

if (isset($_POST["delete"])) 
{
    $pid = $_POST["pid"];   
    // Corrected SQL query
    $qry = "DELETE FROM inventory WHERE pid = '$pid'";
    
    // Assuming $db is your database connection
    $delete = $db->query($qry);
  
    if ($delete === true) 
    {
      echo "Product deleted successfully.";
    } else {
      echo "Error deleting product: " . $db->error;
    }
}
?>