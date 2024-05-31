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
  <title>Add Product</title>
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
          <div class="content-wrapper px-5 mt-4" style="justify-content: flex-start;">
            <!-- Content -->
            <h3>Add Product</h3> 
            <?php
if(isset($_GET['status'])) {
$status = $_GET['status'];
if($status == "duplicate"){
  $msg = "Product Already Exists...!";
}else{
  $msg = "Something Went Wrong...!";
}
if($status == "success"){
?>
            <div class="mt-2 mb-4 alert card alert-success alert-dismissible" role="alert">
                        Product Added Successfully...!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
<?php }elseif($status  == "error" || $status == "duplicate"){ ?>
            <div class="mt-2 mb-4 alert card alert-warning alert-dismissible" role="alert">
                  <?php echo $msg; ?>           
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>

<?php }
}
?>
              <form class="card gy-3 py-4 px-3" action="api/insert_product.php" method="POST">
                <div class="contaier">
                  <div class="row gy-4">
                    <div class="col-lg-4">
                      <div class="form-floating form-floating-outline">
                        <input type="text" name="pname" class="form-control" id="pname" placeholder="eg. Apple Macbook" aria-describedby="floatingInputHelp">
                        <label for="pname">Product Name</label>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-floating form-floating-outline">
                        <input type="text" name="prodid" class="form-control" id="prodid" placeholder="eg. Appl12e232" aria-describedby="floatingInputHelp">
                        <label for="prodid">Product ID</label>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-floating form-floating-outline">
                        <input type="text" name="ref_no" class="form-control" id="ref_no" placeholder="eg. CP12348" aria-describedby="floatingInputHelp">
                        <label for="ref_no">Reference No</label>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-floating form-floating-outline">
                        <input type="date" name="purc_date" class="form-control" id="purc_date" placeholder="eg. BDE" aria-describedby="floatingInputHelp">
                        <label for="purc_date">Purchase Date</label>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-floating form-floating-outline">
                        <input type="text" name="mrp_rent" class="form-control" id="mrp_rent" placeholder="eg. BDE" aria-describedby="floatingInputHelp">
                        <label for="mrp_rent">MRP / Rent Price</label>
                      </div>
                    </div>
                    <div class="col-lg-4">
                    <div class="form-floating form-floating-outline">
                        <select  name="warranty_det" class="form-select" id="warranty_det" aria-label="Default select example">
                          <option selected="">Choose Warranty</option>
                          <option value="1 Month">1 Month</option>
                          <option value="2 Months">2 Months</option>
                          <option value="3 Months">3 Months</option>
                          <option value="6 Months">6 Months</option>
                          <option value="1 Year">1 Year</option>
                          <option value="2 Years">2 Years</option>
                        </select>
                        <label for="warranty_det">Select Warranty</label>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-floating form-floating-outline">
                        <input type="text" name="expire_date" class="form-control" id="expire_date" placeholder="eg. BDE" aria-describedby="floatingInputHelp" readonly>
                        <label for="expire_date">Expiry Date</label>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-floating form-floating-outline">
                        <input type="text" name="brand" class="form-control" id="brand" placeholder="eg. Apple" aria-describedby="floatingInputHelp">
                        <label for="brand">Brand</label>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-floating form-floating-outline">
                        <input type="text" name="vendor_name" class="form-control" id="vendor_name" placeholder="eg. Chroma" aria-describedby="floatingInputHelp">
                        <label for="vendor_name">Vendor Name</label>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-floating form-floating-outline">
                        <input type="text" name="invoice_no" class="form-control" id="invoice_no" placeholder="eg. CHRM125566" aria-describedby="floatingInputHelp">
                        <label for="invoice_no">Invoice No</label>
                      </div>
                    </div>
                    <div class="col-lg-4">
                    <div class="form-floating form-floating-outline">
                        <select name="category" class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                          <option selected="">Choose Category</option>
                          <option value="Laptop">Laptop</option>
                          <option value="Headphones">Headphone</option>
                          <option value="Monitor">Monitor</option>
                          <option value="Keyboard">Keyboard</option>
                          <option value="Mouse">Mouse</option>
                          <option value="CPU">CPU</option>
                          <option value="UPS">UPS</option>
                          <option value="Laptop-Charger">Laptop Charger</option>
                        </select>
                        <label for="exampleFormControlSelect1">Select Category</label>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-floating form-floating-outline">
                      <input type="hidden" name="aid" value="<?php echo $aid; ?>">
                      <input type="Submit" class="text-white impos-bg-1 form-control" value="Add Product" name="submit" >
                      </div>
                    </div>
                  </div>
                </div>
              </form>
           

          </div>


            <!-- / Content -->
<script>
$(document).ready(function() {
            $('#warranty_det').on('change', function() {
                var warranty = $('#warranty_det').val();
                var pdate = $('#purc_date').val();

                $.ajax({
                    url: 'https://ims.imposglobal.com/api/last_warranty.php',
                    type: 'POST',
                    data: { date: warranty, pdate: pdate},
                    success: function(result) {
                        $('#expire_date').val(result);
                        console.log(result);
                    },
                    error: function(error) {
                        console.error('Error:', error);
                    }
                });
            });
        });

</script>
            <!-- Footer -->
            <?php require('footer.php'); ?>
            <!-- footer END -->
  </body>
</html>
