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
  <title>Dashboard</title>
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
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row gy-4">
                <!-- Congratulations card -->
                <div class="col-md-12 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title mb-2">Hi <?php echo $name;  ?> ! </h5>
                      <h6 class="pb-0">Thought of the day</h6>
                      <div id="quote"></div>
                    </div>
                    <img
                      src="assets/img/icons/misc/triangle-light.png"
                      class="scaleX-n1-rtl position-absolute bottom-0 end-0"
                      width="166"
                      alt="triangle background"
                      data-app-light-img="icons/misc/triangle-light.png"
                      data-app-dark-img="icons/misc/triangle-dark.png" />
                    <img
                      src="assets/img/illustrations/trophy.png"
                      class="scaleX-n1-rtl position-absolute bottom-0 end-0 me-4 mb-4 pb-2"
                      width="30"
                      alt="view sales" />
                  </div>
                </div>
                <!--/ Congratulations card -->

                <!-- Transactions -->
                <div class="col-lg-8">
                  <div class="card">
                    <div class="card-header">
                      <div class="d-flex align-items-center justify-content-between">
                        <h5 class="card-title m-0 me-2">Quick Snap!</h5>
                        <div class="dropdown">
                          
                        </div>
                      </div>
                      <p class="mt-3"><span class="fw-medium">Total 48 Product added</span> 😎 this month</p>
                    </div>
                    <div class="card-body">
                      <div class="row g-3">
                        <div class="col-md-3 col-6">
                          <div class="d-flex align-items-center">
                            <div class="avatar">
                              <div class="avatar-initial impos-bg-1 rounded shadow">
                                <i class="mdi mdi-clock-time-eight-outline mdi-24px"></i>
                              </div>
                            </div>
                            <div class="ms-3">
                              <div class="small mb-1">Date</div>
                              <h5 class="mb-0"><?php echo date('d'); ?></h5>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3 col-6">
                          <div class="d-flex align-items-center">
                            <div class="avatar">
                              <div class="avatar-initial impos-bg-2 rounded shadow">
                              <i class="mdi mdi-calendar mdi-24px"></i>
                              </div>
                            </div>
                            <div class="ms-3">
                              <div class="small mb-1">Month</div>
                              <h6 class="mb-0"><?php echo date("F"); ?></h6>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3 col-6">
                          <div class="d-flex align-items-center">
                            <div class="avatar">
                              <div class="avatar-initial impos-bg-1 rounded shadow">
                                <i class="mdi mdi-calendar mdi-24px"></i>
                              </div>
                            </div>
                            <div class="ms-3">
                              <div class="small mb-1">Year  </div>
                              <h5 class="mb-0"><?php echo date('Y'); ?></h5>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3 col-6">
                          <div class="d-flex align-items-center">
                            <div class="avatar">
                              <div class="avatar-initial impos-bg-2 rounded shadow">
                                <i class="mdi mdi-sun-clock mdi-24px"></i>
                              </div>
                            </div>
                            <div class="ms-3">
                              <div class="small mb-1">Day</div>
                              <h6 class="mb-0"><?php echo date("l"); ?></h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/ Transactions -->

                

                <!-- Four Cards -->
                <div class="col-xl-12 col-md-12">
                <h5 class=" mt-4 mb-4" style="line-height: 22PX;">Assigned Products to Employees</h5>
                  <div class="row gy-4">
                  
                    <!-- Total Profit Weekly Project -->
                    <div class="col-sm-3">
                    <a href="view_products.php?category=monitor&amp;condition=assigned">
                      <div class="card h-100">
                        <div class="card-header d-flex align-items-center justify-content-between">
                          <div class="avatar">
                            <div class="avatar-initial impos-bg-2 rounded-circle shadow">
                              <i class="mdi mdi-monitor-multiple mdi-24px"></i>
                            </div>
                          </div>
                        </div>
                        <div class="card-body mt-mg-1">
                          <h6 class="mb-2" style="line-height: 22PX;">Assigned Monitors</h6>
                          <div class="d-flex flex-wrap align-items-center mb-2 pb-1">
                            <h4 class="mb-0 me-2"><?php echo $assignedMonitorCount; ?></h4><small>Units</small>
                          </div>
                        </div>
                      </div>
                     </a>
                    </div>
                    <!--/ Total Profit Weekly Project -->
                    <!-- Total Profit Weekly Project -->
                    <div class="col-sm-3">
                    <a href="view_products.php?category=headphones&amp;condition=assigned">
                      <div class="card h-100">
                        <div class="card-header d-flex align-items-center justify-content-between">
                          <div class="avatar">
                            <div class="avatar-initial impos-bg-1 rounded-circle shadow">
                              <i class="mdi mdi-headphones mdi-24px"></i>
                            </div>
                          </div>
                        </div>
                        <div class="card-body mt-mg-1">
                          <h6 class="mb-2" style="line-height: 22PX;">Assigned Headphones</h6>
                          <div class="d-flex flex-wrap align-items-center mb-2 pb-1">
                            <h4 class="mb-0 me-2"><?php echo $assignedHeadphoneCount; ?></h4><small>Units</small>
                          </div>
                        </div>
                      </div>
                      </a>
                    </div>
                    <!--/ Total Profit Weekly Project -->
                    <!-- Total Profit Weekly Project -->
                    <div class="col-sm-3">
                    <a href="view_products.php?category=mouse&amp;condition=assigned">
                      <div class="card h-100">
                        <div class="card-header d-flex align-items-center justify-content-between">
                          <div class="avatar">
                            <div class="avatar-initial impos-bg-2 rounded-circle shadow">
                              <i class="mdi mdi-mouse mdi-24px"></i>
                            </div>
                          </div>
                        </div>
                        <div class="card-body mt-mg-1">
                          <h6 class="mb-2" style="line-height: 22PX;">Assigned Mouses</h6>
                          <div class="d-flex flex-wrap align-items-center mb-2 pb-1">
                            <h4 class="mb-0 me-2"><?php echo $assignedMouseCount; ?></h4><small>Units</small>
                          </div>
                        </div>
                      </div>
                      </a>
                    </div>
                    <!--/ Total Profit Weekly Project -->
                    <!-- Total Profit Weekly Project -->
                    <div class="col-sm-3">
                    <a href="view_products.php?category=keyboard&amp;condition=assigned">
                      <div class="card h-100">
                        <div class="card-header d-flex align-items-center justify-content-between">
                          <div class="avatar">
                            <div class="avatar-initial impos-bg-1 rounded-circle shadow">
                              <i class="mdi mdi-keyboard-outline mdi-24px"></i>
                            </div>
                          </div>
                        </div>
                        <div class="card-body mt-mg-1">
                          <h6 class="mb-2" style="line-height: 22PX;">Assigned Keyboards</h6>
                          <div class="d-flex flex-wrap align-items-center mb-2 pb-1">
                            <h4 class="mb-0 me-2"><?php echo $assignedKeyboardCount; ?></h4><small>Units</small>
                          </div>
                        </div>
                      </div>
                      </a>
                    </div>
                    <!--/ Total Profit Weekly Project -->
                    <!-- Total Profit Weekly Project -->
                    <div class="col-sm-3">
                    <a href="view_products.php?category=ups&amp;condition=assigned">
                      <div class="card h-100">
                        <div class="card-header d-flex align-items-center justify-content-between">
                          <div class="avatar">
                            <div class="avatar-initial impos-bg-1 rounded-circle shadow">
                              <i class="mdi mdi-fuel-cell mdi-24px"></i>
                            </div>
                          </div>
                        </div>
                        <div class="card-body mt-mg-1">
                          <h6 class="mb-2" style="line-height: 22PX;">Assigned UPS's</h6>
                          <div class="d-flex flex-wrap align-items-center mb-2 pb-1">
                            <h4 class="mb-0 me-2"><?php echo $assignedUPSCount; ?></h4><small>Units</small>
                          </div>
                        </div>
                      </div>
                      </a>
                    </div>
                    <!--/ Total Profit Weekly Project -->
                    <!-- Total Profit Weekly Project -->
                    <div class="col-sm-3">
                    <a href="view_products.php?category=cpu&amp;condition=assigned">
                      <div class="card h-100">
                        <div class="card-header d-flex align-items-center justify-content-between">
                          <div class="avatar">
                            <div class="avatar-initial impos-bg-2 rounded-circle shadow">
                              <i class="mdi mdi-desktop-classic mdi-24px"></i>
                            </div>
                          </div>
                        </div>
                        <div class="card-body mt-mg-1">
                          <h6 class="mb-2" style="line-height: 22PX;">Assigned CPU</h6>
                          <div class="d-flex flex-wrap align-items-center mb-2 pb-1">
                            <h4 class="mb-0 me-2"><?php echo $assignedCPUCount; ?></h4><small>Units</small>
                          </div>
                        </div>
                      </div>
                       </a>
                    </div>
                    <!--/ Total Profit Weekly Project -->
                    <!-- Total Profit Weekly Project -->
                    <div class="col-sm-3">
                    <a href="view_products.php?category=Laptop&amp;condition=assigned">
                      <div class="card h-100">
                        <div class="card-header d-flex align-items-center justify-content-between">
                          <div class="avatar">
                            <div class="avatar-initial impos-bg-1 rounded-circle shadow">
                              <i class="mdi mdi-laptop mdi-24px"></i>
                            </div>
                          </div>
                        </div>
                        <div class="card-body mt-mg-1">
                          <h6 class="mb-2" style="line-height: 22PX;">Assigned Laptops</h6>
                          <div class="d-flex flex-wrap align-items-center mb-2 pb-1">
                            <h4 class="mb-0 me-2"><?php echo $assignedLaptopCount; ?></h4><small>Units</small>
                          </div>
                        </div>
                      </div>
                      </a>
                    </div>
                    <!--/ Total Profit Weekly Project -->
                    <h5 class=" mt-5 mb-1" style="line-height: 22PX;">Ready to Use Products</h5>
                    <div class="row gy-3">
                     <!-- Total Profit Weekly Project -->
                    <div class="col-sm-3">
                    <a href="view_products.php?category=monitor&amp;condition=rtu">
                      <div class="card h-100">
                        <div class="card-header d-flex align-items-center justify-content-between">
                          <div class="avatar">
                            <div class="avatar-initial impos-bg-2 rounded-circle shadow">
                              <i class="mdi mdi-monitor-multiple mdi-24px"></i>
                            </div>
                          </div>
                        </div>
                        <div class="card-body mt-mg-1">
                          <h6 class="mb-2" style="line-height: 22PX;">RTU Monitors</h6>
                          <div class="d-flex flex-wrap align-items-center mb-2 pb-1">
                            <h4 class="mb-0 me-2"><?php echo $totalMonitorCount; ?></h4><small>Units</small>
                          </div>
                        </div>
                      </div>
                    </a>
                    </div>
                    <!--/ Total Profit Weekly Project -->
                    <!-- Total Profit Weekly Project -->
                    <div class="col-sm-3">
                    <a href="view_products.php?category=headphones&amp;condition=rtu">
                      <div class="card h-100">
                        <div class="card-header d-flex align-items-center justify-content-between">
                          <div class="avatar">
                            <div class="avatar-initial impos-bg-1 rounded-circle shadow">
                              <i class="mdi mdi-headphones mdi-24px"></i>
                            </div>
                          </div>
                        </div>
                        <div class="card-body mt-mg-1">
                          <h6 class="mb-2" style="line-height: 22PX;">RTU Headphones</h6>
                          <div class="d-flex flex-wrap align-items-center mb-2 pb-1">
                            <h4 class="mb-0 me-2"><?php echo $totalHeadphoneCount; ?></h4><small>Units</small>
                          </div>
                        </div>
                      </div>
                      </a>
                    </div>
                    <!--/ Total Profit Weekly Project -->
                    <!-- Total Profit Weekly Project -->
                    <div class="col-sm-3">
                    <a href="view_products.php?category=mouse&amp;condition=rtu">
                      <div class="card h-100">
                        <div class="card-header d-flex align-items-center justify-content-between">
                          <div class="avatar">
                            <div class="avatar-initial impos-bg-2 rounded-circle shadow">
                              <i class="mdi mdi-mouse mdi-24px"></i>
                            </div>
                          </div>
                        </div>
                        <div class="card-body mt-mg-1">
                          <h6 class="mb-2" style="line-height: 22PX;">RTU Mouses</h6>
                          <div class="d-flex flex-wrap align-items-center mb-2 pb-1">
                            <h4 class="mb-0 me-2"><?php echo $totalMouseCount; ?></h4><small>Units</small>
                          </div>
                        </div>
                      </div>
                      </a>
                    </div>
                    <!--/ Total Profit Weekly Project -->
                    <!-- Total Profit Weekly Project -->
                    <div class="col-sm-3">
                    <a href="view_products.php?category=keyboard&amp;condition=rtu">
                      <div class="card h-100">
                        <div class="card-header d-flex align-items-center justify-content-between">
                          <div class="avatar">
                            <div class="avatar-initial impos-bg-1 rounded-circle shadow">
                              <i class="mdi mdi-keyboard-outline mdi-24px"></i>
                            </div>
                          </div>
                        </div>
                        <div class="card-body mt-mg-1">
                          <h6 class="mb-2" style="line-height: 22PX;">RTU Keyboards</h6>
                          <div class="d-flex flex-wrap align-items-center mb-2 pb-1">
                            <h4 class="mb-0 me-2"><?php echo $totalKeyboardCount; ?></h4><small>Units</small>
                          </div>
                        </div>
                      </div>
                      </a>
                    </div>
                    <!--/ Total Profit Weekly Project -->
                    <!-- Total Profit Weekly Project -->
                    <div class="col-sm-3">
                    <a href="view_products.php?category=ups&amp;condition=rtu">
                      <div class="card h-100">
                        <div class="card-header d-flex align-items-center justify-content-between">
                          <div class="avatar">
                            <div class="avatar-initial impos-bg-1 rounded-circle shadow">
                              <i class="mdi mdi-fuel-cell mdi-24px"></i>
                            </div>
                          </div>
                        </div>
                        <div class="card-body mt-mg-1">
                          <h6 class="mb-2" style="line-height: 22PX;">RTU UPS's</h6>
                          <div class="d-flex flex-wrap align-items-center mb-2 pb-1">
                            <h4 class="mb-0 me-2"><?php echo $totalUPSCount; ?></h4><small>Units</small>
                          </div>
                        </div>
                      </div>
                      </a>
                    </div>
                    <!--/ Total Profit Weekly Project -->
                    <!-- Total Profit Weekly Project -->
                    <div class="col-sm-3">
                    <a href="view_products.php?category=cpu&amp;condition=rtu">
                      <div class="card h-100">
                        <div class="card-header d-flex align-items-center justify-content-between">
                          <div class="avatar">
                            <div class="avatar-initial impos-bg-2 rounded-circle shadow">
                              <i class="mdi mdi-desktop-classic mdi-24px"></i>
                            </div>
                          </div>
                        </div>
                        <div class="card-body mt-mg-1">
                          <h6 class="mb-2" style="line-height: 22PX;">RTU CPU</h6>
                          <div class="d-flex flex-wrap align-items-center mb-2 pb-1">
                            <h4 class="mb-0 me-2"><?php echo $totalCPUCount; ?></h4><small>Units</small>
                          </div>
                        </div>
                      </div>
                      </a>
                    </div>
                    <!--/ Total Profit Weekly Project -->
                    <!-- Total Profit Weekly Project -->
                    <div class="col-sm-3">
                    <a href="view_products.php?category=laptop&amp;condition=rtu">
                      <div class="card h-100">
                        <div class="card-header d-flex align-items-center justify-content-between">
                          <div class="avatar">
                            <div class="avatar-initial impos-bg-1 rounded-circle shadow">
                              <i class="mdi mdi-laptop mdi-24px"></i>
                            </div>
                          </div>
                        </div>
                        <div class="card-body mt-mg-1">
                          <h6 class="mb-2" style="line-height: 22PX;">RTU Laptops</h6>
                          <div class="d-flex flex-wrap align-items-center mb-2 pb-1">
                            <h4 class="mb-0 me-2"><?php echo $totalLaptopCount; ?></h4><small>Units</small>
                          </div>
                        </div>
                      </div>
                      </a>
                    </div>
                    <!--/ Total Profit Weekly Project -->
                    </div>
                    <h5 class=" mt-5 mb-1" style="line-height: 22PX;">Dead Products</h5>
                    <div class="row gy-3">
                     <!-- Total Profit Weekly Project -->
                    <div class="col-sm-3">
                    <a href="view_products.php?category=monitor&amp;condition=dead">
                      <div class="card h-100">
                        <div class="card-header d-flex align-items-center justify-content-between">
                          <div class="avatar">
                            <div class="avatar-initial impos-bg-2 rounded-circle shadow">
                              <i class="mdi mdi-monitor-multiple mdi-24px"></i>
                            </div>
                          </div>
                        </div>
                        <div class="card-body mt-mg-1">
                          <h6 class="mb-2" style="line-height: 22PX;">Dead Monitors</h6>
                          <div class="d-flex flex-wrap align-items-center mb-2 pb-1">
                            <h4 class="mb-0 me-2"><?php echo $deadMonitorCount; ?></h4><small>Units</small>
                          </div>
                        </div>
                      </div>
                      </a>
                    </div>
                    <!--/ Total Profit Weekly Project -->
                    <!-- Total Profit Weekly Project -->
                    <div class="col-sm-3">
                    <a href="view_products.php?category=headphones&amp;condition=dead">
                      <div class="card h-100">
                        <div class="card-header d-flex align-items-center justify-content-between">
                          <div class="avatar">
                            <div class="avatar-initial impos-bg-1 rounded-circle shadow">
                              <i class="mdi mdi-headphones mdi-24px"></i>
                            </div>
                          </div>
                        </div>
                        <div class="card-body mt-mg-1">
                          <h6 class="mb-2" style="line-height: 22PX;">Dead Headphones</h6>
                          <div class="d-flex flex-wrap align-items-center mb-2 pb-1">
                            <h4 class="mb-0 me-2"><?php echo $deadHeadphoneCount; ?></h4><small>Units</small>
                          </div>
                        </div>
                      </div>
                      </a>
                    </div>
                    <!--/ Total Profit Weekly Project -->
                    <!-- Total Profit Weekly Project -->
                    <div class="col-sm-3">
                    <a href="view_products.php?category=mouse&amp;condition=dead">
                      <div class="card h-100">
                        <div class="card-header d-flex align-items-center justify-content-between">
                          <div class="avatar">
                            <div class="avatar-initial impos-bg-2 rounded-circle shadow">
                              <i class="mdi mdi-mouse mdi-24px"></i>
                            </div>
                          </div>
                        </div>
                        <div class="card-body mt-mg-1">
                          <h6 class="mb-2" style="line-height: 22PX;">Dead Mouses</h6>
                          <div class="d-flex flex-wrap align-items-center mb-2 pb-1">
                            <h4 class="mb-0 me-2"><?php echo $deadMouseCount; ?></h4><small>Units</small>
                          </div>
                        </div>
                      </div>
                      </a>
                    </div>
                    <!--/ Total Profit Weekly Project -->
                    <!-- Total Profit Weekly Project -->
                    <div class="col-sm-3">
                    <a href="view_products.php?category=keyboard&amp;condition=dead">
                      <div class="card h-100">
                        <div class="card-header d-flex align-items-center justify-content-between">
                          <div class="avatar">
                            <div class="avatar-initial impos-bg-1 rounded-circle shadow">
                              <i class="mdi mdi-keyboard-outline mdi-24px"></i>
                            </div>
                          </div>
                        </div>
                        <div class="card-body mt-mg-1">
                          <h6 class="mb-2" style="line-height: 22PX;">Dead Keyboards</h6>
                          <div class="d-flex flex-wrap align-items-center mb-2 pb-1">
                            <h4 class="mb-0 me-2"><?php echo $deadKeyboardCount; ?></h4><small>Units</small>
                          </div>
                        </div>
                      </div>
                      </a>
                    </div>
                    <!--/ Total Profit Weekly Project -->
                    <!-- Total Profit Weekly Project -->
                    <div class="col-sm-3">
                    <a href="view_products.php?category=ups&amp;condition=dead">
                      <div class="card h-100">
                        <div class="card-header d-flex align-items-center justify-content-between">
                          <div class="avatar">
                            <div class="avatar-initial impos-bg-1 rounded-circle shadow">
                              <i class="mdi mdi-fuel-cell mdi-24px"></i>
                            </div>
                          </div>
                        </div>
                        <div class="card-body mt-mg-1">
                          <h6 class="mb-2" style="line-height: 22PX;">Dead UPS's</h6>
                          <div class="d-flex flex-wrap align-items-center mb-2 pb-1">
                            <h4 class="mb-0 me-2"><?php echo $deadUPSCount; ?></h4><small>Units</small>
                          </div>
                        </div>
                      </div>
                      </a>
                    </div>
                    <!--/ Total Profit Weekly Project -->
                    <!-- Total Profit Weekly Project -->
                    <div class="col-sm-3">
                    <a href="view_products.php?category=cpu&amp;condition=dead">
                      <div class="card h-100">
                        <div class="card-header d-flex align-items-center justify-content-between">
                          <div class="avatar">
                            <div class="avatar-initial impos-bg-2 rounded-circle shadow">
                              <i class="mdi mdi-desktop-classic mdi-24px"></i>
                            </div>
                          </div>
                        </div>
                        <div class="card-body mt-mg-1">
                          <h6 class="mb-2" style="line-height: 22PX;">Dead CPU</h6>
                          <div class="d-flex flex-wrap align-items-center mb-2 pb-1">
                            <h4 class="mb-0 me-2"><?php echo $deadCPUCount; ?></h4><small>Units</small>
                          </div>
                        </div>
                      </div>
                      </a>
                    </div>
                    <!--/ Total Profit Weekly Project -->
                    <!-- Total Profit Weekly Project -->
                    <div class="col-sm-3">
                    <a href="view_products.php?category=laptop&amp;condition=dead">
                      <div class="card h-100">
                        <div class="card-header d-flex align-items-center justify-content-between">
                          <div class="avatar">
                            <div class="avatar-initial impos-bg-1 rounded-circle shadow">
                              <i class="mdi mdi-laptop mdi-24px"></i>
                            </div>
                          </div>
                        </div>
                        <div class="card-body mt-mg-1">
                          <h6 class="mb-2" style="line-height: 22PX;">Dead Laptops</h6>
                          <div class="d-flex flex-wrap align-items-center mb-2 pb-1">
                            <h4 class="mb-0 me-2"><?php echo $deadLaptopCount; ?></h4><small>Units</small>
                          </div>
                        </div>
                      </div>
                      </a>
                    </div>
                    <!--/ Total Profit Weekly Project -->
                    </div>
                  </div>
                </div>
                
               <!--repair-->
               <!--/ Total Earning -->
<h5 class=" mt-5 mb-1" style="line-height: 22PX;">Need to Repair Products</h5>
  <div class="row gy-3">
   <!-- Total Profit Weekly Project -->
   
  <div class="col-sm-3">
    <a href="view_products.php?category=monitor&amp;condition=repair">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <div class="avatar">
          <div class="avatar-initial impos-bg-2 rounded-circle shadow">
            <i class="mdi mdi-monitor-multiple mdi-24px"></i>
          </div>
        </div>
      </div>
      <div class="card-body mt-mg-1">
        <h6 class="mb-2" style="line-height: 22PX;">Repair Monitors</h6>
        <div class="d-flex flex-wrap align-items-center mb-2 pb-1">
          <h4 class="mb-0 me-2"><?php echo $repairMonitorCount; ?></h4><small>Units</small>
        </div>
      </div>
    </div>
    </a>
   
  </div>
  <!--/ Total Profit Weekly Project -->
  <!-- Total Profit Weekly Project -->
  <div class="col-sm-3">
  <a href="view_products.php?category=headphones&amp;condition=repair">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <div class="avatar">
          <div class="avatar-initial impos-bg-1 rounded-circle shadow">
            <i class="mdi mdi-headphones mdi-24px"></i>
          </div>
        </div>
      </div>
      <div class="card-body mt-mg-1">
        <h6 class="mb-2" style="line-height: 22PX;">Repair Headphones</h6>
        <div class="d-flex flex-wrap align-items-center mb-2 pb-1">
          <h4 class="mb-0 me-2"><?php echo $repairHeadphoneCount; ?></h4><small>Units</small>
        </div>
      </div>
    </div>
    </a>
  </div>
  <!--/ Total Profit Weekly Project -->
  <!-- Total Profit Weekly Project -->
  <div class="col-sm-3">
  <a href="view_products.php?category=mouse&amp;condition=repair">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <div class="avatar">
          <div class="avatar-initial impos-bg-2 rounded-circle shadow">
            <i class="mdi mdi-mouse mdi-24px"></i>
          </div>
        </div>
      </div>
      <div class="card-body mt-mg-1">
        <h6 class="mb-2" style="line-height: 22PX;">Repair Mouses</h6>
        <div class="d-flex flex-wrap align-items-center mb-2 pb-1">
          <h4 class="mb-0 me-2"><?php echo $repairMouseCount; ?></h4><small>Units</small>
        </div>
      </div>
    </div>
    </a>
  </div>
  <!--/ Total Profit Weekly Project -->
  <!-- Total Profit Weekly Project -->
  <div class="col-sm-3">
  <a href="view_products.php?category=keyboard&amp;condition=repair">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <div class="avatar">
          <div class="avatar-initial impos-bg-1 rounded-circle shadow">
            <i class="mdi mdi-keyboard-outline mdi-24px"></i>
          </div>
        </div>
      </div>
      <div class="card-body mt-mg-1">
        <h6 class="mb-2" style="line-height: 22PX;">Repair Keyboards</h6>
        <div class="d-flex flex-wrap align-items-center mb-2 pb-1">
          <h4 class="mb-0 me-2"><?php echo $repairKeyboardCount; ?></h4><small>Units</small>
        </div>
      </div>
    </div>
    </a>
  </div>
  <!--/ Total Profit Weekly Project -->
  <!-- Total Profit Weekly Project -->
  <div class="col-sm-3">
  <a href="view_products.php?category=ups&amp;condition=repair">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <div class="avatar">
          <div class="avatar-initial impos-bg-1 rounded-circle shadow">
            <i class="mdi mdi-fuel-cell mdi-24px"></i>
          </div>
        </div>
      </div>
      <div class="card-body mt-mg-1">
        <h6 class="mb-2" style="line-height: 22PX;">Repair UPS's</h6>
        <div class="d-flex flex-wrap align-items-center mb-2 pb-1">
          <h4 class="mb-0 me-2"><?php echo $repairUPSCount; ?></h4><small>Units</small>
        </div>
      </div>
    </div>
    </a>
  </div>
  <!--/ Total Profit Weekly Project -->
  <!-- Total Profit Weekly Project -->
  <div class="col-sm-3">
  <a href="view_products.php?category=cpu&amp;condition=repair">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <div class="avatar">
          <div class="avatar-initial impos-bg-2 rounded-circle shadow">
            <i class="mdi mdi-desktop-classic mdi-24px"></i>
          </div>
        </div>
      </div>
      <div class="card-body mt-mg-1">
        <h6 class="mb-2" style="line-height: 22PX;">Repair CPU</h6>
        <div class="d-flex flex-wrap align-items-center mb-2 pb-1">
          <h4 class="mb-0 me-2"><?php echo $repairCPUCount; ?></h4><small>Units</small>
        </div>
      </div>
    </div>
    </a>
  </div>
  <!--/ Total Profit Weekly Project -->
  <!-- Total Profit Weekly Project -->
  <div class="col-sm-3">
  <a href="view_products.php?category=laptop&amp;condition=repair">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <div class="avatar">
          <div class="avatar-initial impos-bg-1 rounded-circle shadow">
            <i class="mdi mdi-laptop mdi-24px"></i>
          </div>
        </div>
      </div>
      <div class="card-body mt-mg-1">
        <h6 class="mb-2" style="line-height: 22PX;">Repair Laptops</h6>
        <div class="d-flex flex-wrap align-items-center mb-2 pb-1">
          <h4 class="mb-0 me-2"><?php echo $repairLaptopCount; ?></h4><small>Units</small>
        </div>
      </div>
    </div>
    </a>
  </div>
  <!--/ Total Profit Weekly Project -->
  </div>
</div>
</div>
<!--/ Total Earning -->


              </div>
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
