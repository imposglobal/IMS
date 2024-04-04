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
  <title>Add Employee</title>
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
            <h3>Add Employee</h3> 
<?php
if(isset($_GET['status'])) {
$status = $_GET['status'];
if($status == "duplicate"){
  $msg = "Record Already Exists...!";
}else{
  $msg = "Something Went Wrong...!";
}
if($status == "success"){
?>
            <div class="mt-2 mb-4 alert card alert-success alert-dismissible" role="alert">
                        Employee has been Added...!
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
              <form class="card gy-3 py-4 px-3" action="api/add_employee.php" method="POST">
                <div class="contaier">
                  <div class="row gy-3">
                    <div class="col-lg-4">
                      <div class="form-floating form-floating-outline">
                        <input type="text" name="fname" class="form-control" id="fname" placeholder="John" aria-describedby="floatingInputHelp">
                        <label for="fname">First Name</label>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-floating form-floating-outline">
                        <input type="text" name="lname" class="form-control" id="lname" placeholder="Doe" aria-describedby="floatingInputHelp">
                        <label for="lname">Last Name</label>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-floating form-floating-outline">
                        <input type="email" name="email" class="form-control" id="email" placeholder="john@example.com" aria-describedby="floatingInputHelp">
                        <label for="email">Email</label>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-floating form-floating-outline">
                        <input type="text" name="design" class="form-control" id="design" placeholder="eg. BDE" aria-describedby="floatingInputHelp">
                        <label for="design">Department</label>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-floating form-floating-outline">
                        <input type="text" name="team_name" class="form-control" id="team_name" placeholder="eg. Eagle" aria-describedby="floatingInputHelp">
                        <label for="team_name">Team Name</label>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-floating form-floating-outline">
                        <input type="text" name="emp_id" class="form-control" id="emp_id" placeholder="John Doe" aria-describedby="floatingInputHelp">
                        <label for="emp_id">Employee ID</label>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-floating form-floating-outline">
                      <input type="Submit" class="text-white impos-bg-1 form-control" value="Add Employee" name="submit" >
                      </div>
                    </div>
                  </div>
                </div>
              </form>
           

          </div>


            <!-- / Content -->
<script>
fetch('https://api.quotable.io/quotes/random?limit=1')
  .then(response => response.json())
  .then(data => {
    const quote = data[0];
    const quoteContent = quote.content;
    const author = quote.author;

    // Display the quote on the webpage
    const quoteElement = document.getElementById('quote');
    quoteElement.innerHTML = `<p>"${quoteContent}"</p><p>- ${author}</p>`;
  })
  .catch(error => console.error('Error:', error));

</script>
            <!-- Footer -->
            <?php require('footer.php'); ?>
            <!-- footer END -->
  </body>
</html>
