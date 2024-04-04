<?php 
require('db.php');
if(isset($_POST['submit'])){

    $pname = $_POST['pname'];
    $prodid = $_POST['prodid'];
    $ref_no = $_POST['ref_no'];
    $purc_date = $_POST['purc_date'];
    $warranty_det = $_POST['warranty_det'];
    $expire_date = $_POST['expire_date'];
    $brand = $_POST['brand'];
    $mrp_rent = $_POST['mrp_rent'];
    $vendor_name = $_POST['vendor_name'];
    $invoice_no = $_POST['invoice_no'];
    $category = $_POST['category'];
    $aid = $_POST['aid'];
    $date = date("Y-m-d");
    $rtu = "rtu";
    $time = date("H:i:s");


    $sql = "SELECT * FROM inventory WHERE serial_no = '$ref_no'";
    $result = mysqli_query($db, $sql);

    if ($result) {
        $count = mysqli_num_rows($result);
        
        if ($count >= 1) {
            header("location: ../add_product.php?status=duplicate");
        }else{

        // SQL query to insert data
        $sql = "INSERT INTO inventory (serial_no, product_name, brand, product_id , warrenty, mrp_rent, category, `conditionp`, purchase_date, entry_date, entry_time, aid, vendor_name, invoice_id, exp_warranty)
        VALUES ('$ref_no', '$pname', '$brand', '$prodid', '$warranty_det', '$mrp_rent', '$category', '$rtu', '$purc_date', '$date' , '$time', '$aid', '$vendor_name', '$invoice_no', '$expire_date')";



        if ($db->query($sql) === TRUE) {
            header("location: ../add_product.php?status=success");
        } else {
            header("location: ../add_product.php?status=error");
        }

 // Close the connection
 $db->close();
        }
    }
    
   
    

}
?>