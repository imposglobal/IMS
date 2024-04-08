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
  <?php
if(isset($_GET['category']) && isset($_GET['condition'])) 
{
  $category = $db->real_escape_string($_GET['category']);
  $condition = $db->real_escape_string($_GET['condition']);
  if($condition == "repair"){
    $sql = "SELECT * FROM inventory WHERE category = '$category' AND conditionp = '$condition'"; 
  }elseif($condition == "dead"){
    $sql = "SELECT * FROM inventory WHERE category = '$category' AND conditionp = '$condition'";
  }
  elseif($condition == "rtu"){
    $sql = "SELECT * FROM inventory WHERE category = '$category' AND conditionp = '$condition'";
  }
  elseif($condition == "assigned"){
    $sql = "SELECT * FROM inventory WHERE category = '$category' AND conditionp = '$condition'";
  }
  ?>
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
        <div class="table-responsive card p-3">
          <form method="POST">
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead class="impos-bg-1 ">
            <tr>
                <th class="text-white">No</th>
                <th class="text-white">Category Name</th>
                <th class="text-white">Product Name</th>
                <th class="text-white">Conditon</th>
                <th class="text-white">serial_no</th>
                <?php if($condition=='repair'){ ?>
                <th class="text-white">Action</th>
                <?php }?>
            </tr>
        </thead>
        <tbody>
<?php 

// update query for updatig status from repair to rtu
  

  $result = $db->query($sql);
  $i = 1;

  if ($result->num_rows > 0)
  {
    while($row = $result->fetch_assoc()) { 
?>
    <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $row['category']; ?></td>
        <td><?php echo $row['product_name']; ?></td>     
        <td><?php echo $row['conditionp']; ?></td>
        <td><?php echo $row['serial_no']; ?></td>
        <?php if($condition=='repair')
        { ?>
       

        <td>
        
          <input type="hidden" name="pid" value="<?php echo $row['pid']; ?>">
          <input type="submit" name="update" value="RTU"  class="text-white impos-bg-1 form-control">
        </td>
        <?php 
        }?>
    </tr>
<?php 
    }
  }
 
}
?>
</tbody>
    </table>
    </form>
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

<?php
if(isset($_POST["update"]))
{
  $pid = $_POST["pid"];
  $newcondition = "rtu";
  $qry = "UPDATE inventory SET conditionp = '$newcondition' WHERE pid = '$pid'";
  $update = $db->query($qry);

  if($update == true)
  {
    echo '<script>alert("Status Update")</script>';
  }
}
?>
