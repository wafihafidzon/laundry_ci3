<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="./index.html" class="text-nowrap logo-img">
            <img src="<?= base_url() ?>assets/images/logos/dark-logo.svg" width="180" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <?php if($this->session->userdata('role') == 'Admin' || $this->session->userdata('role') == 'Kasir') { ?>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?= base_url('dashboard') ?>" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <?php } if($this->session->userdata('role') == 'Admin') { ?>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?= base_url('outlet') ?>" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Outlet</span>
              </a>
            </li>
            <?php } if($this->session->userdata('role') == 'Admin') { ?>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?= base_url('admin') ?>" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Admin</span>
              </a>
            </li>
            <?php } if($this->session->userdata('role') == 'Admin' || $this->session->userdata('role') == 'Owner') { ?>
              <li class="sidebar-item">
                <a class="sidebar-link" href="<?= base_url('invoice') ?>" aria-expanded="false">
                  <span>
                    <i class="ti ti-layout-dashboard"></i>
                  </span>
                  <span class="hide-menu">Invoice</span>
                </a>
              </li>
              <?php } ?>
          </ul>
        </nav>
      </div>
    </aside>
    <div class="body-wrapper">
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
            <a class="navbar-brand" href="<?= base_url('dashboard/keranjang') ?>">Total Belanja : <?= $this->cart->total_items() ?></a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#"></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"></a>
                </li>
                <li class="nav-item dropdown">
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#"></a></li>
                    <li><a class="dropdown-item" href="#"></a></li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#"></a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
                </li>
              </ul>
              <form class="d-flex">
                <a href="<?= base_url('auth/logout') ?>" class="btn btn-outline-danger" type="submit">Logout</a>
              </form>
            </div>
          </div>
        </nav>
      </header>