<?php session_start(); ?>
<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-menu-fixed layout-compact"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="assets/"
  data-template="vertical-menu-template-free">
  <!-- Head -->
  <title>View Product</title>
  <?php require("header.php"); ?>
  <!-- Head ENd -->
  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- nav / menu -->
        <?php require("navmenu.php"); ?>
        <!-- nav / menu end -->

          <!-- Content wrapper -->
          <div class="content-wrapper mt-4" style="justify-content: flex-start;">
            <!-- Content -->
            <h3 class="px-4 py-2">Products</h3> 

            <div class="container  mt-1 mb-5">
            <div class="text-end mt-4 mb-3">
                <form action="export.php" method="post">
                  <button type="submit" class="btn btn-primary">Export</button>
                </form>
              </div>
        <div class="table-responsive card p-3">
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead class="impos-bg-1 ">
            <tr>
                <th class="text-white">No</th>
                <th class="text-white">employee id</th>
                <th class="text-white">Employee Name</th>
                <th class="text-white">Laptop</th>
                <th class="text-white">Mouse</th>
                <th class="text-white">Headphone</th>
                <th class="text-white">Keyboard</th>
                <th class="text-white">CPU</th>
                <th class="text-white">UPS</th>
                <th class="text-white">Monitor</th>
                <th class="text-white">Charger</th>
                    
            </tr>
        </thead>
        <tbody>
<?php
//$i = 1;
// $sql = "SELECT 
// emplyee.eid,
// emplyee.emp_id,
// emplyee.emp_name,
// MAX(CASE WHEN inventory.category = 'Laptop' THEN inventory.serial_no END) AS category1,
// MAX(CASE WHEN inventory.category = 'Mouse' THEN  inventory.serial_no END) AS category2,
// MAX(CASE WHEN inventory.category = 'Headphones' THEN inventory.serial_no END) AS category3,
// MAX(CASE WHEN inventory.category = 'Keyboard' THEN inventory.serial_no END) AS category4,
// MAX(CASE WHEN inventory.category = 'CPU' THEN inventory.serial_no END) AS category5,
// MAX(CASE WHEN inventory.category = 'UPS' THEN inventory.serial_no END) AS category6,
// MAX(CASE WHEN inventory.category = 'Monitor' THEN inventory.serial_no END) AS category7
// FROM 
// emplyee
// INNER JOIN 
// inventory ON emplyee.eid = inventory.eid 
// GROUP BY 
// emplyee.eid, emplyee.emp_name
// ORDER BY 
// emplyee.eid ASC;";



$i = 1;

// query to fetch the muliple products assigned to each employee
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
if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) { 
        
    
        ?>
        <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $row['emp_id']; ?></td>
            <td><?php echo $row['emp_name']; ?></td>
            <td><?php echo $row['category1']; ?></td>
            <td><?php echo $row['category2']; ?></td>
            <td><?php echo $row['category3']; ?></td>
            <td><?php echo $row['category4']; ?></td>
            <td><?php echo $row['category5']; ?></td>
            <td><?php echo $row['category6']; ?></td>
            <td><?php echo $row['category7']; ?></td>
            <td><?php echo $row['category8']; ?></td>

        </tr>
        <?php
    }
} 
?>
</tbody>
    </table>
    <div>
    
</div>
        </div>

          </div>


            <!-- / Content -->
            <!-- Footer -->
           


            <?php require('footer.php'); ?>
            <!-- footer END -->
  </body>
</html>
