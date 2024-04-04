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
        <div class="table-responsive card p-3">
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead class="impos-bg-1 ">
            <tr>
                <th class="text-white">No</th>
                <th class="text-white">Reference No</th>
                <th class="text-white">Product Name</th>
                <th class="text-white">Brand</th>
                <th class="text-white">Condition</th>
                <th class="text-white">Employee Name</th>
                <th class="text-white">Vendor Name</th>
                <th class="text-white">View</th>
                <th class="text-white">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i=1;
            $sql = "SELECT * FROM inventory as inv,emplyee as emp WHERE emp.eid = inv.eid";
            $result = $db->query($sql);
            
            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) { 
                    $buttonId = "btn".$row['pid'];
                    $pid = $row['pid'];
                    $refno = $row['serial_no'];
            ?>
                    
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $row['serial_no']; ?></td>
                <td><?php echo $row['product_name']; ?></td>
                <td><?php echo $row['brand']; ?></td>
                <?php if($row['conditionp'] == "rtu"){ $condition = "Ready to Use"; }else{$condition = $row['conditionp'];} ?>
                <td><?php echo $condition; ?></td>
                <td><?php echo $row['emp_name']; ?></td>
                <td><?php echo $row['vendor_name']; ?></td>
                <td>
                <?php 
                    echo"<i data-bs-toggle='offcanvas' data-bs-target='#offcanvasRight' aria-controls='offcanvasRight' style='color:green;cursor:pointer' class='mdi mdi-account-edit mdi-24px' id=\"$buttonId\"></i>";
                    echo "<script>
                              $('#$buttonId').click(function() {
                                  deList('$refno', '$buttonId');
                              });
                            </script>";
                    ?>
                </td>
                <td>
                    
                    <i onclick="deleteProduct('<?php echo $pid; ?>')" style="color:red;cursor:pointer" class="mdi mdi-delete-sweep-outline mdi-24px"></i>
                </td>
                
            </tr>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                    <div class="offcanvas-header">
                      <h5 class="mt-3" id="offcanvasRightLabel">Update Product</h5>
                      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                      <div class="row gy-4">
                          <div class="col-lg-6">
                            <div class="form-floating form-floating-outline">
                                <input type="text" class="form-control" id="dpname"  aria-describedby="floatingInputHelp" >  
                                <label for="dpname">Product Name</label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-floating form-floating-outline">
                                <input type="text" class="form-control" id="dbrand"  aria-describedby="floatingInputHelp"  >  
                                <label for="dpname">Brand Name</label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-floating form-floating-outline">
                                <input type="text" class="form-control" id="vname"  aria-describedby="floatingInputHelp" >  
                                <label for="dpname">Vendor Name</label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-floating form-floating-outline">
                                <input type="text" class="form-control" id="mrp"  aria-describedby="floatingInputHelp" >  
                                <label for="mrp">MRP / Rent</label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-floating form-floating-outline">
                                <input type="date" class="form-control" id="warrenty"  aria-describedby="floatingInputHelp" >  
                                <label for="warrenty">Warrenty</label></label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-floating form-floating-outline">
                                <input type="text" class="form-control" id="invoice_id"  aria-describedby="floatingInputHelp" >  
                                <label for="invoice_id">Invoice No</label></label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-floating form-floating-outline">
                                <input type="text" class="form-control" id="drefno"  aria-describedby="floatingInputHelp" >  
                                <label for="drefno">Reference No</label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-floating form-floating-outline">
                              <select name="category" class="form-select" id="dcondition" aria-label="Default select example">
                                <option value="Choose Condition" selected>Choose Condition</option>
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
                        <div class="form-floating form-floating-outline mb-4">
                          <textarea id="msgs" class="form-control" placeholder="Hi, Do you have a moment to talk Joe?" style="height: 60px"></textarea>
                          <label for="msgs">Message</label>
                        </div>
                      </div>
                      <div class="col-lg-12">
                          <button onclick="updateProduct()" type="submit" class="btn text-white form-control impos-bg-1 waves-effect waves-light">Update</button>
                      </div>
                    </div>
                  </div>

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


    function deList(refno, buttonId, loaderId, tickId) {
    var button = $('#' + buttonId);
        console.log(refno)

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
              $('#dbrand').val(data[0].brand);
              $('#vname').val(data[0].vendor_name);
              $('#mrp').val(data[0].mrp_rent);
              $('#warrenty').val(data[0].exp_warranty);
              $('#invoice_id').val(data[0].invoice_id);
              $('#msgs').val(data[0].comments);
            //   $('#dcondition').val(data[0].conditionp);
                console.log('Post created:', data);
            },
            error: function(error) {
                console.error('Error:', error);
        
            }
        });
    
}

function updateProduct(){
  var pname = $('#dpname').val();
  var refno = $('#drefno').val();
  var condition = $('#dcondition').val();
  var brand = $('#dbrand').val();
  var msg = $('#msgs').val();
  var vname = $('#vname').val();
  if( condition == "Choose Condition"){
    alert("Please Choose Condition");
  }else{
    $.ajax({
            url: 'https://ims.imposglobal.com/api/update_prod.php',
            type: 'POST',
            data: {
                pname: pname,
                brand: brand,
                vname: vname,
                refno: refno,
                condition: condition,
                msg : msg,
                assign: 'update'
            },
            success: function(data) {
                alert(data);
                window.location.href = "view_product.php";
            },
            error: function(error) {
                console.error('Error:', error);
            
            }
        });
  }
  
}

function deleteProduct(productId) {
    var result = confirm("Are you sure you want to delete this product?");
    if (result) {
        $.ajax({
            type: 'POST',
            url: 'https://ims.imposglobal.com/api/delete.php', // replace with your actual endpoint
            data: {
                pid: productId,
                assign: 'deleteproduct'
            
                },
            success: function(response) {
                alert(response);
                window.location.href = "view_product.php";
            },
            error: function(error) {
                alert("Error deleting product.");
            }
        });
    } else {
        alert("Product not deleted.");
    }
}
</script>
            <?php require('footer.php'); ?>
            <!-- footer END -->
  </body>
</html>
