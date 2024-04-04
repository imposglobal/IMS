<?php
    require('db.php');

    $assign = $_POST['assign'];

   //get employee
   if( $assign == "getemployee"){
    $eid = $_POST['eid'];
// Fetch data from your MySQL database
$sql = "SELECT * FROM emplyee WHERE emp_id = '$eid'"; // Replace 'your_table' with your actual table name
$result = $db->query($sql);

if ($result->num_rows > 0) {
    $data = array();

    // Fetch each row and add it to the data array
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    // Encode the data as JSON
    $jsonResponse = json_encode($data);

    // Set the content type to JSON
    header('Content-Type: application/json');

    // Output the JSON data
    echo $jsonResponse;
} else {
    echo "No data found";
}

// Close the connection
$db->close();
}

 //get employee
   if( $assign == "getprod"){
    $eid = $_POST['eid'];
// Fetch data from your MySQL database
$sql = "SELECT product_name,serial_no FROM emplyee,inventory WHERE emplyee.eid = inventory.eid AND inventory.eid = '$eid';
"; // Replace 'your_table' with your actual table name
$result = $db->query($sql);

if ($result->num_rows > 0) {
    $data = array();

    // Fetch each row and add it to the data array
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    // Encode the data as JSON
    $jsonResponse = json_encode($data);

    // Set the content type to JSON
    header('Content-Type: application/json');

    // Output the JSON data
    echo $jsonResponse;
} else {
    echo "No data found";
}

// Close the connection
$db->close();
}

 //get employee
   if( $assign == "getemployee"){
    $eid = $_POST['eid'];
// Fetch data from your MySQL database
$sql = "SELECT * FROM emplyee WHERE emp_id = '$eid'"; // Replace 'your_table' with your actual table name
$result = $db->query($sql);

if ($result->num_rows > 0) {
    $data = array();

    // Fetch each row and add it to the data array
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    // Encode the data as JSON
    $jsonResponse = json_encode($data);

    // Set the content type to JSON
    header('Content-Type: application/json');

    // Output the JSON data
    echo $jsonResponse;
} else {
    echo "No data found";
}

// Close the connection
$db->close();
}

 //get employee
   if( $assign == "getpass"){
    $eid = $_POST['eid'];
// Fetch data from your MySQL database
$sql = "SELECT password FROM creds WHERE emp_id = '$eid'";// Replace 'your_table' with your actual table name
$result = $db->query($sql);

if ($result->num_rows > 0) {
    $data = array();

    // Fetch each row and add it to the data array
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    // Encode the data as JSON
    $jsonResponse = json_encode($data);

    // Set the content type to JSON
    header('Content-Type: application/json');

    // Output the JSON data
    echo $jsonResponse;
} else {
    echo "No data found";
}

// Close the connection
$db->close();
}


    //get product
    if( $assign == "getproduct"){
        $refno = $_POST['refno'];
    // Fetch data from your MySQL database
    $sql = "SELECT * FROM inventory WHERE serial_no = '$refno'"; // Replace 'your_table' with your actual table name
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        $data = array();

        // Fetch each row and add it to the data array
        while($row = $result->fetch_assoc()) {
            $data[] = $row;
        }

        // Encode the data as JSON
        $jsonResponse = json_encode($data);

        // Set the content type to JSON
        header('Content-Type: application/json');

        // Output the JSON data
        echo $jsonResponse;
    } else {
        echo "No data found";
    }

    // Close the connection
    $db->close();
    }
    
?>
