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
  <title>Assign Product</title>
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
            <h3>Assign to "<span style="color:#000"><?php echo $name_emp; ?></span>"</h3> 
           
              <form class="card gy-3 py-4 px-3" action="api/insert_product.php" method="POST">
                <div class="contaier">
                  <div class="row gy-4">
                    <div class="col-lg-2">
                      <div class="form-floating form-floating-outline">
                        <input type="text" name="empid" class="form-control" id="empid" value="<?php echo $emp_id; ?>" aria-describedby="floatingInputHelp" readonly>
                        <label for="empid">Employee ID</label>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-floating form-floating-outline">
                        <input type="text" name="ename" class="form-control" id="ename" value="<?php echo $name_emp ?>" aria-describedby="floatingInputHelp">
                        <label for="ename">Employee Name</label>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-floating form-floating-outline">
                        <input type="text" name="dept" class="form-control" id="dept" value="<?php echo $deptartment ?>" aria-describedby="floatingInputHelp">
                        <label for="dept">Department</label>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-floating form-floating-outline">
                        <input type="text" name="team" class="form-control" id="team" value="<?php echo $team_name ?>" aria-describedby="floatingInputHelp">
                        <label for="team">Team Name</label>
                      </div>
                    </div>
                    <hr>
                    <div class="col-lg-3">
                    <div class="form-floating form-floating-outline">
                        <select  name="monitor" class="form-select" id="monitor" aria-label="Default select example">
                          <option selected="">Select Monitor</option>
                          <?php 
                          $sql = "SELECT * FROM inventory WHERE category = 'Monitor' AND conditionp ='rtu'";
                          $result = $db->query($sql);
                          if ($result->num_rows > 0) {
                              // Output data of each row
                              while($row = $result->fetch_assoc()) {  ?>
                                 <option value="<?php echo $row['pid'] ?>"><?php echo $row['serial_no']." - ".$row['product_name'];  ?></option>
                             <?php }
                          } 
                          ?>
                        </select>
                        <label for="monitor">Select Monitor</label>
                      </div>
                    </div>
                    <div class="col-lg-1">
                    <div class="col-lg-1">
                    <i id="mon_s" class="mdi mdi-check-decagram mt-2" style="color:green;font-size:20px"></i>
                    <button onclick="validate('Monitor')" type="button" name="" id="monb" class="mt-2 impos-bg-1 text-white px-3"><i id="famon_p" class=" py-2 fa fa-plus" ></i> <i id="famon_s" class="fa fa-spinner fa-spin faicon" ></i></button>
                    </div>
                    </div>
                    <div class="col-lg-3">
                    <div class="form-floating form-floating-outline">
                        <select  name="keyboard" class="form-select" id="keyboard" aria-label="Default select example">
                          <option selected="">Select Keyboard</option>
                          <?php 
                          $sql = "SELECT * FROM inventory WHERE category = 'Keyboard' AND conditionp ='rtu'";
                          $result = $db->query($sql);
                          if ($result->num_rows > 0) {
                              // Output data of each row
                              while($row = $result->fetch_assoc()) {  ?>
                                 <option value="<?php echo $row['pid'] ?>"><?php echo $row['serial_no']." - ".$row['product_name'];  ?></option>
                             <?php }
                          } 
                          ?>
                        </select>
                        <label for="keyboard">Select Keyboard</label>
                      </div>
                    </div>
                    <div class="col-lg-1">
                    <i id="key_s" class="mdi mdi-check-decagram mt-2" style="color:green;font-size:20px"></i>
                    <button onclick="validate('Keyboard')" type="button" name="" id="keyb" class="mt-2 impos-bg-1 text-white px-3"><i id="fakey_p" class=" py-2 fa fa-plus" ></i> <i id="fakey_s" class="fa fa-spinner fa-spin faicon" ></i></button>
                    </div>
                    <div class="col-lg-3">
                    <div class="form-floating form-floating-outline">
                        <select  name="cpu" class="form-select" id="cpu" aria-label="Default select example">
                          <option selected="">Select CPU</option>
                          <?php 
                          $sql = "SELECT * FROM inventory WHERE category = 'CPU' AND conditionp ='rtu'";
                          $result = $db->query($sql);
                          if ($result->num_rows > 0) {
                              // Output data of each row
                              while($row = $result->fetch_assoc()) {  ?>
                                 <option value="<?php echo $row['pid'] ?>"><?php echo $row['serial_no']." - ".$row['product_name'];  ?></option>
                             <?php }
                          } 
                          ?>
                        </select>
                        <label for="cpu">Select CPU</label>
                      </div>
                    </div>
                    <div class="col-lg-1">
                    <i id="cpu_s" class="mdi mdi-check-decagram mt-2" style="color:green;font-size:20px"></i>
                    <button onclick="validate('CPU')" type="button" name="" id="cpub" class="mt-2 impos-bg-1 text-white px-3"><i id="facpu_p" class=" py-2 fa fa-plus" ></i> <i id="facpu_s" class="fa fa-spinner fa-spin faicon" ></i></button>
                    </div>
                    <div class="col-lg-3">
                    <div class="form-floating form-floating-outline">
                        <select  name="mouse" class="form-select" id="mouse" aria-label="Default select example">
                          <option selected="">Select Mouse</option>
                          <?php 
                          $sql = "SELECT * FROM inventory WHERE category = 'Mouse' AND conditionp ='rtu'";
                          $result = $db->query($sql);
                          if ($result->num_rows > 0) {
                              // Output data of each row
                              while($row = $result->fetch_assoc()) {  ?>
                                 <option value="<?php echo $row['pid'] ?>"><?php echo $row['serial_no']." - ".$row['product_name'];  ?></option>
                             <?php }
                          } 
                          ?>
                        </select>
                        <label for="mouse">Select Mouse</label>
                      </div>
                    </div>
                    <div class="col-lg-1">
                    <i id="mous_s" class="mdi mdi-check-decagram mt-2" style="color:green;font-size:20px"></i>
                    <button onclick="validate('Mouse')" type="button" name="" id="mousb" class="mt-2 impos-bg-1 text-white px-3"><i id="famous_p" class=" py-2 fa fa-plus" ></i> <i id="famous_s" class="fa fa-spinner fa-spin faicon" ></i></button>
                    </div>
                    <div class="col-lg-3">
                    <div class="form-floating form-floating-outline">
                        <select  name="headphone" class="form-select" id="headphone" aria-label="Default select example">
                          <option selected="">Select Headphone</option>
                          <?php 
                          $sql = "SELECT * FROM inventory WHERE category = 'Headphones' AND conditionp ='rtu'";
                          $result = $db->query($sql);
                          if ($result->num_rows > 0) {
                              // Output data of each row
                              while($row = $result->fetch_assoc()) {  ?>
                                 <option value="<?php echo $row['pid'] ?>"><?php echo $row['serial_no']." - ".$row['product_name'];  ?></option>
                             <?php }
                          } 
                          ?>
                        </select>
                        <label for="headphone">Select Headphone</label>
                      </div>
                    </div>
                    <div class="col-lg-1">
                    <i id="head_s" class="mdi mdi-check-decagram mt-2" style="color:green;font-size:20px"></i>
                    <button onclick="validate('Headphone')" type="button" name="" id="headb" class="mt-2 impos-bg-1 text-white px-3"><i id="fahead_p" class=" py-2 fa fa-plus" ></i> <i id="fahead_s" class="fa fa-spinner fa-spin faicon" ></i></button>
                    </div>
                    <div class="col-lg-3">
                    <div class="form-floating form-floating-outline">
                        <select  name="ups" class="form-select" id="ups" aria-label="Default select example">
                          <option selected="">Select UPS</option>
                          <?php 
                          $sql = "SELECT * FROM inventory WHERE category = 'UPS' AND conditionp ='rtu'";
                          $result = $db->query($sql);
                          if ($result->num_rows > 0) {
                              // Output data of each row
                              while($row = $result->fetch_assoc()) {  ?>
                                 <option value="<?php echo $row['pid'] ?>"><?php echo $row['serial_no']." - ".$row['product_name'];  ?></option>
                             <?php }
                          } 
                          ?>
                        </select>
                        <label for="ups">Select UPS</label>
                      </div>
                    </div>
                    <div class="col-lg-1">
                    <i id="ups_s" class="mdi mdi-check-decagram mt-2" style="color:green;font-size:20px"></i>
                    <button onclick="validate('UPS')" type="button" name="" id="upsb" class="mt-2 impos-bg-1 text-white px-3"><i id="faups_p" class=" py-2 fa fa-plus" ></i> <i id="faups_s" class="fa fa-spinner fa-spin faicon" ></i></button>
                    </div>
                    <div class="col-lg-3">
                    <div class="form-floating form-floating-outline">
                        <select  name="laptop" class="form-select" id="laptop" aria-label="Default select example">
                          <option selected="">Select Laptop</option>
                          <?php 
                          $sql = "SELECT * FROM inventory WHERE category = 'Laptop' AND conditionp ='rtu'";
                          $result = $db->query($sql);
                          if ($result->num_rows > 0) {
                              // Output data of each row
                              while($row = $result->fetch_assoc()) {  ?>
                                 <option value="<?php echo $row['pid'] ?>"><?php echo $row['serial_no']." - ".$row['product_name'];  ?></option>
                             <?php }
                          } 
                          ?>
                        </select>
                        <label for="ups">Select Laptop</label>
                      </div>
                    </div>
                    <div class="col-lg-1">
                    <i id="laptop_s" class="mdi mdi-check-decagram mt-2" style="color:green;font-size:20px"></i>
                    <button onclick="validate('Laptop')" type="button" name="" id="laptopb" class="mt-2 impos-bg-1 text-white px-3"><i id="falaptop_p" class=" py-2 fa fa-plus" ></i> <i id="falaptop_s" class="fa fa-spinner fa-spin faicon" ></i></button>
                    </div>
                    
                    
                  </div>
                </div>
              </form>
           

          </div>


            <!-- / Content -->
<script>
   $('.mdi-check-decagram').hide();

  //check validation
  function validate(prod) {
    switch (prod) {
        case "Monitor":
            let monitor = $('#monitor').val();
            if (monitor == "Select Monitor") {
                alert("Please select item.");
            } else {
                assignMonitor();
            }
            break;
        case "Keyboard":
            let keyboard = $('#keyboard').val();
            if (keyboard == "Select Keyboard") {
                alert("Please select item.");
            } else {
                assignKeyboard();
            }
            break;
        case "CPU":
            let cpu = $('#cpu').val();
            if (cpu == "Select CPU") {
                alert("Please select item.");
            } else {
                assignCpu();
            }
            break;
        case "Mouse":
            let mouse = $('#mouse').val();
            if (mouse == "Select Mouse") {
                alert("Please select item.");
            } else {
                assignMouse();
            }
            break;
        case "Headphone":
            let headphone = $('#headphone').val();
            if (headphone == "Select Headphone") {
                alert("Please select item.");
            } else {
                assignHeadphone();
            }
            break;
        case "UPS":
            let ups = $('#ups').val();
            if (ups == "Select UPS") {
                alert("Please select item.");
            } else {
                assignUps();
            }
            break;
        case "Laptop":
            let laptop = $('#laptop').val();
            if (laptop == "Select Laptop") {
                alert("Please select item.");
            } else {
                assignLaptop();
            }
            break;
        default:
            // Default case if prod does not match any of the specified cases.
            break;
    }
}

 //for Keyboard
   function assignKeyboard(){
    let keyboard = $('#keyboard').val();
    let empid = $('#empid').val();
    $('#fakey_s').addClass('faicons');
    $('#fakey_p').hide();
    console.log(keyboard);
    $.ajax({
    url: 'https://ims.imposglobal.com/api/assignemp.php',
    type: 'POST',
    data: {
        empid: empid,
        refcode: keyboard,
        assign:'assign'
    },
    success: function(data) {
      $('#keyb').hide();
    $('#key_s').show();
        console.log('Post created:', data);
    },
    error: function(error) {
        console.error('Error:', error);
    }
});

  }
  //for monitor
  function assignMonitor(){
    let monitor = $('#monitor').val();
    let empid = $('#empid').val();
    $('#famon_s').addClass('faicons');
    $('#famon_p').hide();
    console.log(monitor);
    $.ajax({
    url: 'https://ims.imposglobal.com/api/assignemp.php',
    type: 'POST',
    data: {
        empid: empid,
        refcode: monitor,
        assign:'assign'
    },
    success: function(data) {
      $('#monb').hide();
    $('#mon_s').show();
        console.log('Post created:', data);
    },
    error: function(error) {
        console.error('Error:', error);
    }
});

  }

  //for cpu
  function assignCpu(){
    let cpu = $('#cpu').val();
    let empid = $('#empid').val();
    $('#facpu_s').addClass('faicons');
    $('#facpu_p').hide();
    console.log(cpu);
    $.ajax({
    url: 'https://ims.imposglobal.com/api/assignemp.php',
    type: 'POST',
    data: {
        empid: empid,
        refcode: cpu,
        assign:'assign'  },
    success: function(data) {
      $('#cpub').hide();
    $('#cpu_s').show();
        console.log('Post created:', data);
    },
    error: function(error) {
        console.error('Error:', error);
    }
});

  }

  //for Mouse
  function assignMouse(){
    let mous = $('#mouse').val();
    let empid = $('#empid').val();
    $('#famous_s').addClass('faicons');
    $('#famous_p').hide();
    console.log(mous);
    $.ajax({
    url: 'https://ims.imposglobal.com/api/assignemp.php',
    type: 'POST',
    data: {
        empid: empid,
        refcode: mous,
        assign:'assign'   },
    success: function(data) {
      $('#mousb').hide();
    $('#mous_s').show();
        console.log('Post created:', data);
    },
    error: function(error) {
        console.error('Error:', error);
    }
});

  }

  //for Headphone
  function assignHeadphone(){
    let head = $('#headphone').val();
    let empid = $('#empid').val();
    $('#fahead_s').addClass('faicons');
    $('#fahead_p').hide();
    console.log(head);
    $.ajax({
    url: 'https://ims.imposglobal.com/api/assignemp.php',
    type: 'POST',
    data: {
        empid: empid,
        refcode: head,
        assign:'assign'
         },
    success: function(data) {
      $('#headb').hide();
    $('#head_s').show();
        console.log('Post created:', data);
    },
    error: function(error) {
        console.error('Error:', error);
    }
});

  }

  //for UPS
  function assignUps(){
    let ups = $('#ups').val();
    let empid = $('#empid').val();
    $('#faups_s').addClass('faicons');
    $('#faups_p').hide();
    console.log(ups);
    $.ajax({
    url: 'https://ims.imposglobal.com/api/assignemp.php',
    type: 'POST',
    data: {
        empid: empid,
        refcode: ups,
        assign:'assign'
       },
    success: function(data) {
      $('#upsb').hide();
    $('#ups_s').show();
        console.log('Post created:', data);
    },
    error: function(error) {
        console.error('Error:', error);
    }
});

  }

  //for Laptop
  function assignLaptop(){
    let laptop = $('#laptop').val();
    let empid = $('#empid').val();
    $('#falaptop_s').addClass('faicons');
    $('#falaptop_p').hide();
    console.log(laptop);
    $.ajax({
    url: 'https://ims.imposglobal.com/api/assignemp.php',
    type: 'POST',
    data: {
        empid: empid,
        refcode: laptop,
        assign:'assign'
    },
    success: function(data) {
      $('#laptopb').hide();
    $('#laptop_s').show();
        console.log('Post created:', data);
    },
    error: function(error) {
        console.error('Error:', error);
    }
});

  }
</script>
            <!-- Footer -->
            <?php require('footer.php'); ?>
            <!-- footer END -->
  </body>
</html>
