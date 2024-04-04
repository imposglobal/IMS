        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
              <img src="assets/img/logo.png" width="180">
                
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
              <i class="mdi menu-toggle-icon d-xl-block align-middle mdi-20px"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboards -->
            <li class="menu-item active">
              <a
                href="dashboard.php?dab=1"
                class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-home-outline"></i>
                <div data-i18n="Email">Dashboard</div>
                
              </a>
            </li>
            
            
            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Employees</span>
            </li>
            <!-- Apps -->
            <li class="menu-item">
              <a
                href="add_employee.php"
                class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-account-multiple-plus-outline  "></i>
                <div data-i18n="Email">Add Employees</div>
              </a>
            </li>
            <li class="menu-item">
              <a
                href="view_employee.php"
                class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-account-eye-outline"></i>
                <div data-i18n="Email">View Employees</div>
              </a>
            </li>
           
            <li class="menu-header small text-uppercase mt-2">
              <span class="menu-header-text">Products</span>
            </li>
            <!-- Apps -->
            <li class="menu-item">
              <a
                href="add_product.php"
                class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-desktop-classic"></i>
                <div data-i18n="Email">Add Product</div>
              </a>
            </li>
            <li class="menu-item">
              <a
                href="view_product.php"
                class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-monitor-cellphone-star"></i>
                <div data-i18n="Email">View Product</div>
              </a>
            </li>


            <li class="menu-header small text-uppercase mt-2">
              <span class="menu-header-text">Operations</span>
            </li>
            <!-- Apps -->
            <li class="menu-item">
              <a
                href="operation.php"
                class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-application-import"></i>
                <div data-i18n="Email">Operation</div>
              </a>
            </li>
            
           
            <!-- Admin -->
            <li class="menu-header small text-uppercase mt-2"><span class="menu-header-text">Admin</span></li>
        
            <li class="menu-item">
              <a
                href=""
                class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-file-document-multiple-outline"></i>
                <div data-i18n="Documentation">Add Admin</div>
              </a>
            </li>
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar">
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="mdi mdi-menu mdi-24px"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <i class="mdi mdi-magnify mdi-24px lh-0"></i>
                  <input
                    type="text"
                    class="form-control border-0 shadow-none bg-body"
                    placeholder="Search..."
                    aria-label="Search..." />
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                
                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a
                    class="nav-link dropdown-toggle hide-arrow p-0"
                    href="javascript:void(0);"
                    data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end mt-3 py-2">
                    <li>
                      <a class="dropdown-item pb-2 mb-1" href="#">
                        <div class="d-flex align-items-center">
                          <div class="flex-shrink-0 me-2 pe-1">
                            <div class="avatar avatar-online">
                              <img src="assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-0"><?php echo $name;  ?></h6>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider my-1"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="mdi mdi-account-outline me-1 mdi-20px"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>
                   
                    <li>
                      <div class="dropdown-divider my-1"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);">
                        <i class="mdi mdi-power me-1 mdi-20px"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->