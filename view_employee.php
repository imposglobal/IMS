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
  <title>View Employee</title>
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
            <h3 class="px-4 py-2">Employees</h3> 

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
                <th class="text-white">View</th>
                <th class="text-white">Operation</th>
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
                    $buttonId = $row['emp_id'];
                    $eeid = $row['eid'];
                    $eid = $row['emp_id'];
                    ?>
                    
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $row['emp_id']; ?></td>
                <td><?php echo $row['emp_name']; ?></td>
                <td><?php echo $row['department']; ?></td>
                <td><?php echo $row['team_name']; ?></td>
                <td>
                    <?php 
                    echo"<i data-bs-toggle='offcanvas' data-bs-target='#offcanvasRight' aria-controls='offcanvasRight' style='color:green;cursor:pointer' class='mdi mdi-account-edit mdi-24px' id=\"$buttonId\"></i>";
                    echo "<script>
                              $('#$buttonId').click(function() {
                                  edit('$eid');
                                  getprod('$eeid');
                                  getPass('$eid');
                              });
                            </script>";
                    ?>
                </td>
                <td>
                <i onclick="deleteEmp('<?php echo $eid; ?>')" style="color:red;cursor:pointer" class="mdi mdi-delete-sweep-outline mdi-24px"></i>
                </td>
                
            </tr>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                    <div class="offcanvas-header">
                      <h5 class="mt-3" id="offcanvasRightLabel">Edit Employee</h5>
                      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                    <div class="contaier">
                  <div class="row gy-4">
                    <div class="col-lg-12">
                      <div class="form-floating form-floating-outline">
                        <input type="text" name="fname" class="form-control" id="fname" placeholder="Doe" aria-describedby="floatingInputHelp">
                        <label for="lname">Full Name</label>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="form-floating form-floating-outline">
                        <input type="email" name="email" class="form-control" id="email" placeholder="john@example.com" aria-describedby="floatingInputHelp">
                        <label for="email">Email</label>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-floating form-floating-outline">
                        <input type="text" name="design" class="form-control" id="design" placeholder="eg. BDE" aria-describedby="floatingInputHelp">
                        <label for="design">Department</label>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-floating form-floating-outline">
                        <input type="text" name="team_name" class="form-control" id="team_name" placeholder="eg. Eagle" aria-describedby="floatingInputHelp">
                        <label for="team_name">Team Name</label>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="form-floating form-floating-outline">
                        <input type="text" name="emp_id" class="form-control" id="emp_id" placeholder="John Doe" aria-describedby="floatingInputHelp">
                        <label for="emp_id">Employee ID</label>
                      </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-password-toggle">
                        <label class="form-label" for="basic-default-password32">Password</label>
                        <div class="input-group input-group-merge">
                          <input type="password" class="form-control" id="pwd" placeholder="············" aria-describedby="pwd">
                          <span class="input-group-text cursor-pointer"><i class="mdi mdi-eye-off-outline"></i></span>
                        </div>
                      </div>
                    </div>
                    <div class="row mt-4" id="productRow">
                        <h6>Assigned Products</h6>
                    </div>
                    <div class="col-lg-12">
                      <div class="form-floating form-floating-outline">
                      <button onclick="updateEmployee('<?php echo $eeid; ?>')" type="button" class="text-white impos-bg-1 form-control"  name="submit" > Update Employee </button>
                      </div>
                    </div>
                  </div>
                  
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

function edit(eid){
    $.ajax({
            url: 'https://ims.imposglobal.com/api/getdata.php',
            type: 'POST',
            data: {
                eid: eid,
                assign: 'getemployee'
            },
            success: function(data) {
              $('#fname').val(data[0].emp_name);
              $('#email').val(data[0].email);
              $('#design').val(data[0].department);
              $('#team_name').val(data[0].team_name);
              $('#emp_id').val(data[0].emp_id);
                console.log('Post created:', data);
            },
            error: function(error) {
                console.error('Error:', error);
                
            }
        });
}
function getPass(eid){
    $.ajax({
            url: 'https://ims.imposglobal.com/api/getdata.php',
            type: 'POST',
            data: {
                eid: eid,
                assign: 'getpass'
            },
            success: function(data) {
              $('#pwd').val(data[0].password);
                console.log('Post created:', data);
            },
            error: function(error) {
                console.error('Error:', error);
                
            }
        });
}
function getprod(eid){
    $.ajax({
    url: 'https://ims.imposglobal.com/api/getdata.php',
    type: 'POST',
    data: {
        eid: eid,
        assign: 'getprod'
    },
    success: function(data) {
        var productRow = $('#productRow');

        // Clear previous data
        productRow.empty();

        data.forEach(function(item) {
            var col = $('<div>').addClass('col-lg-6');
            var card = $('<div>').addClass('card');
            var cardBody = $('<div>').addClass('card-body');
            var productName = $('<h6>').addClass('card-title').text(item.product_name);
            var serialNo = $('<p>').addClass('card-text').text('' + item.serial_no);

            cardBody.append(productName, serialNo);
            card.append(cardBody);
            col.append(card);
            productRow.append(col);
        });
    },
    error: function(error) {
        console.error('Error fetching data:', error);
    }
});
}
</script>

<script>
    function updateEmployee(eeid){
        var fname = $('#fname').val();
        var email = $('#email').val();
        var design = $('#design').val();
        var teamName = $('#team_name').val();
        var empId = $('#emp_id').val();
        var pwd = $('#pwd').val();
        var eeid = eeid;

        $.ajax({
            url: 'https://ims.imposglobal.com/api/update_employee.php',
            type: 'POST',
            data: {
                emp_id: empId,
                email: email,
                design: design,
                team_name: teamName,
                fname: fname,
                pwd: pwd,
                assign: 'getemployee'
            },
            success: function(data) {
                alert(data);
                window.location.href = "view_employee.php";
            },
            error: function(error) {
                console.error('Error:', error);
                
            }
        });

    }
    function deleteEmp(eid) {
    var result = confirm("Are you sure you want to delete this Employee?");
    if (result) {
        $.ajax({
            type: 'POST',
            url: 'https://ims.imposglobal.com/api/delete.php', // replace with your actual endpoint
            data: {
                eid: eid,
                assign: 'deleteemp'
            
                },
            success: function(response) {
                alert(response);
                window.location.href = "view_employee.php";
            },
            error: function(error) {
                alert("Error deleting Employee.");
            }
        });
    } else {
        alert("Employee not deleted.");
    }
}
</script>
            <?php require('footer.php'); ?>
            <!-- footer END -->
  </body>
</html>
