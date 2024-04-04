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
  <title>Manage</title>
  <?php require("header.php"); ?>
  <style>
    .faicon{
      display:none;
    }
    .faicons{
      display:block;
    }
    .fa.fa-plus {
    font-size: 10px !important;
}
  </style>
  <!-- Head ENd -->
  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- nav / menu -->
        <?php require("navmenu.php"); ?>
        <!-- nav / menu end -->
        <?php 
        $empid = $_GET['emp'];
        $sql = "SELECT * FROM emplyee WHERE emp_id = '$empid'";
        $result = $db->query($sql);
        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) { 
                $eid = $row['eid'];
                $name_emp = $row['emp_name'];
                $emp_id = $row['emp_id'];
                $deptartment = $row['department'];
                $team_name = $row['team_name'];
            }
        } 
        
        ?>
          <!-- Content wrapper -->
          <div class="content-wrapper px-5 mt-4" style="justify-content: flex-start;">
            <!-- Content -->
            <h3 class="mb-3">Manage - "<span style="color:#000"><?php echo $name_emp; ?></span>"</h3> 
           
              <div class="card gy-3 py-4 px-3">
                <div class="contaier mt-2">
                  <div class="row gy-4">
                    <div class="col-lg-2">
                      <div class="form-floating form-floating-outline">
                        <input type="text" name="empid" class="form-control" id="empid" value="<?php echo $emp_id; ?>" aria-describedby="floatingInputHelp"  readonly>
                        <label for="empid">Employee ID</label>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-floating form-floating-outline">
                        <input type="text" name="ename" class="form-control" id="ename" value="<?php echo $name_emp ?>" aria-describedby="floatingInputHelp"  readonly>
                        <label for="ename">Employee Name</label>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-floating form-floating-outline">
                        <input type="text" name="dept" class="form-control" id="dept" value="<?php echo $deptartment ?>" aria-describedby="floatingInputHelp"  readonly>
                        <label for="dept">Department</label>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-floating form-floating-outline">
                        <input type="text" name="team" class="form-control" id="team" value="<?php echo $team_name ?>" aria-describedby="floatingInputHelp"  readonly>
                        <label for="team">Team Name</label>
                      </div>
                    </div>
                    <hr>
                    <?php
                        $sql = "SELECT * FROM inventory WHERE eid = '$eid'";
                        $result = $db->query($sql);
                        if ($result->num_rows > 0) {
                            // Output data of each row
                            while($row = $result->fetch_assoc()) { 
                            $buttonId = "btn".$row['pid'];
                            $loaderId = "load".$row['pid'];
                            $tickId = "tick".$row['pid'];
                            $refno = $row['serial_no'];
                                
                           
                        ?>
                    <div class="col-lg-3">
                        <div class="form-floating form-floating-outline">
                            <input type="text" name="team" class="form-control" id="team" value="<?php echo $refno; ?>" aria-describedby="floatingInputHelp"  readonly>  
                            <label for="team"><?php echo $row['category']; ?></label>
                        </div>
                    </div>
                    <div class="col-lg-1">
                     <?php 
                      echo "<button data-bs-toggle='offcanvas' data-bs-target='#offcanvasRight' aria-controls='offcanvasRight' class='mt-2 pt-0 py-1 px-2 bg-danger text-white' id=\"$buttonId\"><i class='fa fa-close'></i></button>";
                      echo "<div id=\"$loaderId\" style=\"display:none;\"><i class='fa fa-spinner fa-spin'></i></div>";
                      echo "<div id=\"$tickId\" style=\"display:none;color:green\">&#10004;</div>";
                      echo "<script>
                              $('#$buttonId').click(function() {
                                  deList('$refno', '$buttonId', '$loaderId', '$tickId');
                              });
                            </script>";
                     ?>
                     <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                    <div class="offcanvas-header">
                      <h5 class="mt-3" id="offcanvasRightLabel">Delist Product</h5>
                      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                      <div class="row">
                          <div class="col-lg-6">
                            <div class="form-floating form-floating-outline">
                                <input type="text" class="form-control" id="dpname"  aria-describedby="floatingInputHelp"  readonly>  
                                <label for="dpname">Product Name</label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-floating form-floating-outline">
                                <input type="text" class="form-control" id="drefno"  aria-describedby="floatingInputHelp"  readonly>  
                                <label for="drefno">Reference No</label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                          <br>
                          <div class="form-floating form-floating-outline">
                              <select name="category" class="form-select" id="dcondition" aria-label="Default select example">
                                <option selected="">Choose Condition</option>
                                <option value="rtu">Ready to Use</option>
                                <option value="dead">Dead</option>
                                <option value="repair">Need to Repair</option>
                              </select>
                              <label for="dcondition">Select Category</label>
                            </div>
                          </div>
                      </div>
                      <div class="col-lg-12">
                        <br>
                        <div class="form-floating form-floating-outline">
                                <input style="height:80px" type="text" class="form-control" id="msgs"  aria-describedby="floatingInputHelp"  >  
                                <label for="msgs">Message</label>
                            </div><br>
                      </div>
                      <div class="col-lg-12">
                          <button onclick="deListProduct()" type="submit" class="btn btn-danger waves-effect waves-light">Delist</button>
                      </div>
                    </div>
                  </div>
                    </div>
                    <?php  }
                        }else{?>
                        <p>Oops... Products are Not Assigned</p>
                    <?php } ?>
                  </div>
                </div>
                        </div>
           

          </div>


            <!-- / Content -->
<script>
    function deList(refno, buttonId, loaderId, tickId) {
    var button = $('#' + buttonId);
    var loader = $('#' + loaderId);
    var tick = $('#' + tickId);
        console.log(refno)
    loader.show();
    button.hide();

        $.ajax({
            url: 'https://ims.imposglobal.com/api/getdata.php',
            type: 'POST',
            data: {
                refno: refno,
                assign: 'getproduct'
            },
            success: function(data) {
              $('#dpname').val(data[0].product_name);
              $('#drefno').val(data[0].serial_no);
                loader.hide();
                button.show();
                // tick.show();
                console.log('Post created:', data);
            },
            error: function(error) {
                console.error('Error:', error);
                loader.hide();
                button.show();
            }
        });
    
}
function deListProduct(){
  var pname = $('#dpname').val();
  var refno = $('#drefno').val();
  var condition = $('#dcondition').val();
  var msg = $('#msgs').val();
  if( condition == "Choose Condition"){
    alert("Please Choose Condition");
  }else{
    $.ajax({
            url: 'https://ims.imposglobal.com/api/update_prod.php',
            type: 'POST',
            data: {
                refno: refno,
                condition: condition,
                msg : msg,
                assign: 'delist'
            },
            success: function(data) {
                alert(data);
                window.location.href = "manage_emp.php?emp=<?php echo $emp_id; ?>";
            },
            error: function(error) {
                console.error('Error:', error);
            
            }
        });
  }
  
}

</script>
            <!-- Footer -->
            <?php require('footer.php'); ?>
            <!-- footer END -->
  </body>
</html>
