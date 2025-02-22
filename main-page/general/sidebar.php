    <!-- <nav class="sidebar">
        <div class="logo-container">
            <img src="../../assets/logo.png" alt="World Donuts Logo" class="logo">
            <span class="logo-text">ADMIN DASHBOARD</span>
        </div>
        <ul class="nav-menu">
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="../interface/register.php">Register Pengguna</a></li>
            <li><a href="transaksi.php">Transaksi</a></li>
            <li><a href="manajemenB.php">Manajemen Barang</a></li>
            <li><a href="manajemenP.php">Manajemen Pelanggan</a></li>
            <li><a href="invoice.php">Invoice</a></li>
            <li><a href="detailTransaksi.php">Detail Transaksi</a></li>
            <li><a href="#">Laporan</a></li>
            <li><a href="../function/logout.php">Logout</a></li>
        </ul>
    </nav>
-->













<div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
      <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
      <span class="fs-4">Sidebar</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="dashboard.php" class="nav-link text-white">
        <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-house"><path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"/><path d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg>
          Home
        </a>
      </li>
      <li>
        
      </li>
      <li>
        <a href="transaksi.php" class="nav-link text-white">
        <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shopping-cart"><circle cx="8" cy="21" r="1"/><circle cx="19" cy="21" r="1"/><path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"/></svg>
          Orders
        </a>
      </li>
      <li>
        <a href="manajemenB.php" class="nav-link text-white">
        <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shopping-bag"><path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4Z"/><path d="M3 6h18"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
          <!-- <svg class="bi pe-none me-2" width="16" height="16"></svg> -->
          Products
        </a>
      </li>
      <li>
        <a href="manajemenP.php" class="nav-link text-white">
        <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shopping-bag"><path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4Z"/><path d="M3 6h18"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
          <!-- <svg class="bi pe-none me-2" width="16" height="16"></svg> -->
          Members
        </a>
      </li>


     
      

      

    </ul>

    <!-- ADMIN -->
    <hr>
    <div class="dropdown">
      <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
        <strong>Zulfi (Admin)</strong>
      </a>
      <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
        <li><a class="dropdown-item" href="../interface/register.php">Tambahkan Karyawan</a></li>
        <li><a class="dropdown-item" href="detailTransaksi.php">Laporan</a></li>
        <li><a class="dropdown-item" href="profil.php">Profile</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="../function/logout.php">Sign out</a></li>
      </ul>
    </div>
  </div>
<div class="b-example-divider b-example-vr"></div>


<!-- karyawan -->