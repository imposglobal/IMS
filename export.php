
<?php
session_start();

// Database connection assuming $db is your database connection object
include("api/db.php");

// Set headers for CSV export
header("Content-Type: text/csv");
header("Content-Disposition: attachment; filename=employee_inventory.csv");
header("Pragma: no-cache");
header("Expires: 0");

// Open output stream
$output = fopen("php://output", "w");

// Write headers to CSV
fputcsv($output, array('No', 'Employee ID', 'Employee Name', 'Laptop', 'Mouse', 'Headphone', 'Keyboard', 'CPU', 'UPS', 'Monitor', 'Charger'));

// Fetch data from database
// $sql = "SELECT 
//             emplyee.emp_id,
//             emplyee.emp_name,
//             MAX(CASE WHEN inventory.category = 'Laptop' THEN inventory.serial_no END) AS category1,
//             MAX(CASE WHEN inventory.category = 'Mouse' THEN  inventory.serial_no END) AS category2,
//             MAX(CASE WHEN inventory.category = 'Headphones' THEN inventory.serial_no END) AS category3,
//             MAX(CASE WHEN inventory.category = 'Keyboard' THEN inventory.serial_no END) AS category4,
//             MAX(CASE WHEN inventory.category = 'CPU' THEN inventory.serial_no END) AS category5,
//             MAX(CASE WHEN inventory.category = 'UPS' THEN inventory.serial_no END) AS category6,
//             MAX(CASE WHEN inventory.category = 'Monitor' THEN inventory.serial_no END) AS category7
//         FROM 
//             emplyee
//         INNER JOIN 
//             inventory ON emplyee.eid = inventory.eid 
//         GROUP BY 
//             emplyee.eid, emplyee.emp_name
//         ORDER BY 
//             emplyee.eid ASC";

// $result = $db->query($sql);

$sql = "SELECT 
    emplyee.eid,
    emplyee.emp_id,
    emplyee.emp_name,
    GROUP_CONCAT(CASE WHEN inventory.category = 'Laptop' THEN inventory.serial_no END) AS category1,
    GROUP_CONCAT(CASE WHEN inventory.category = 'Mouse' THEN inventory.serial_no END) AS category2,
    GROUP_CONCAT(CASE WHEN inventory.category = 'Headphones' THEN inventory.serial_no END) AS category3,
    GROUP_CONCAT(CASE WHEN inventory.category = 'Keyboard' THEN inventory.serial_no END) AS category4,
    GROUP_CONCAT(CASE WHEN inventory.category = 'CPU' THEN inventory.serial_no END) AS category5,
    GROUP_CONCAT(CASE WHEN inventory.category = 'UPS' THEN inventory.serial_no END) AS category6,
    GROUP_CONCAT(CASE WHEN inventory.category = 'Monitor' THEN inventory.serial_no END) AS category7,
    GROUP_CONCAT(CASE WHEN inventory.category = 'Charger' THEN inventory.serial_no END) AS category8
FROM 
    emplyee 
RIGHT JOIN 
    inventory ON emplyee.eid = inventory.eid
WHERE 
    emplyee.eid = emplyee.eid
GROUP BY 
    emplyee.eid, emplyee.emp_id, emplyee.emp_name;";

$result = $db->query($sql);

// Fetch and write data to CSV
if ($result->num_rows > 0) {
    $i = 1;
    while($row = $result->fetch_assoc()) {
        $data = array($i++, $row['emp_id'], $row['emp_name'], $row['category1'], $row['category2'], $row['category3'], $row['category4'], $row['category5'], $row['category6'], $row['category7'], $row['category8']);
        fputcsv($output, $data);
    }
}

// Close output stream
fclose($output);

// Exit script
exit;
?>
