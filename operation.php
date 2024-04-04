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
  <title>Assign Operation</title>
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
            <h3 class="px-4 py-2">Assign Product to Employees</h3> 

            <div class="container  mt-1 mb-5">
        <div class="table-responsive card p-3">
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead class="impos-bg-1 ">
            <tr>
                <th class="text-white">No</th>
                <th class="text-white">Emp ID</th>
                <th class="text-white">Name</th>
                <th class="text-white">Department</th>
                <th class="text-white">Team Name</th>
                <th class="text-white">Assign</th>
                <th class="text-white">Manage</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i=1;
            $sql = "SELECT * FROM emplyee";
            $result = $db->query($sql);
            
            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    $emp_id = $row['emp_id'];
                    $eidencode = urlencode($emp_id);
                    ?>
                    
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $row['emp_id']; ?></td>
                <td><?php echo $row['emp_name']; ?></td>
                <td><?php echo $row['department']; ?></td>
                <td><?php echo $row['team_name']; ?></td>
                <td>
                    <a style="font-size:14px" class="impos-bg-2 py-2 px-3 text-white" href="assign_emp.php?emp=<?php echo $eidencode; ?>"> 
                    <i  class="mdi mdi-checkbook-arrow-right mdi-24px"></i>
                    </a>
                </td>
                <td>
                    <a style="font-size:14px" class="impos-bg-1 py-2 px-3 text-white" href="manage_emp.php?emp=<?php echo $eidencode; ?>"> 
                    <i  class="mdi mdi-checkbook-arrow-right mdi-24px"></i>
                    </a>
                </td>
                
            </tr>



               <?php }
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
            <script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
            <?php require('footer.php'); ?>
            <!-- footer END -->
  </body>
</html>
