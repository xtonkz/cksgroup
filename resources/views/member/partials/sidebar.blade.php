<nav class="sidebar sidebar-offcanvas" id="sidebar">

  <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
    <a class="sidebar-brand brand-logo" href="/dashboard"><img src="images/company_logo/cks_logo.png" alt="logo" /></a>
    <a class="sidebar-brand brand-logo-mini" href="#"><img src="images/company_logo/favicon.png" alt="logo" /></a>
  </div>

  <ul class="nav">

    <li class="nav-item profile">
      <div class="profile-desc">
        <div class="profile-pic">
          <div class="count-indicator">
            <img class="img-xs rounded-circle" src="{{ auth()->user()->photo_path }}" alt="">
            <span class="count bg-success"></span>
          </div>
          <div class="profile-name ml-3">
            <p class="mb-0 font-weight-normal">{{ auth()->user()->name }}</p>
            {{-- <span>Administrators</span> --}}
          </div>
        </div>
      </div>
    </li>
    <!-- profile.sidebar -->

    <li class="nav-item nav-category">
      <span class="nav-link">Navigation</span>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="/dashboard">
        <span class="menu-icon">
          <i class="mdi mdi-laptop"></i>
        </span>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="/customer">
        <span class="menu-icon">
          <i class="mdi mdi-account-card-details"></i>
        </span>
        <span class="menu-title">Customers</span>
      </a>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="/project">
        <span class="menu-icon">
          <i class="mdi mdi-biohazard"></i>
        </span>
        <span class="menu-title">Projects</span>
      </a>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="/order">
        <span class="menu-icon">
          <i class="mdi mdi-clipboard-text"></i>
        </span>
        <span class="menu-title">Orders</span>
      </a>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" data-toggle="collapse" href="#stock" aria-expanded="false" aria-controls="stock">
        <span class="menu-icon">
          <i class="mdi mdi-coin"></i>
        </span>
        <span class="menu-title">Transaction</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="stock">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="/deposit"> Deposit </a></li>
          <li class="nav-item"> <a class="nav-link" href="/cost"> Cost </a></li>
          <li class="nav-item"> <a class="nav-link" href="/showtrans"> Show Transaction </a></li>
        </ul>
      </div>
    </li>
    {{-- <li class="nav-item menu-items">
      <a class="nav-link" href="/mstnk">
        <span class="menu-icon">
          <i class="mdi mdi-message-processing"></i>
        </span>
        <span class="menu-title">Mohon STNK</span>
      </a>
    </li> --}}
    {{-- <li class="nav-item menu-items">
      <a class="nav-link" href="/pstnk">
        <span class="menu-icon">
          <i class="mdi mdi-ghost"></i>
        </span>
        <span class="menu-title">Pending STNK</span>
      </a>
    </li> --}}
    {{-- <li class="nav-item menu-items">
      <a class="nav-link" href="/stnkjadi">
        <span class="menu-icon">
          <i class="mdi mdi-certificate"></i>
        </span>
        <span class="menu-title">STNK Jadi</span>
      </a>
    </li> --}}
    <li class="nav-item menu-items">
      <a class="nav-link" href="/invoice">
        <span class="menu-icon">
          <i class="mdi mdi-currency-usd"></i>
        </span>
        <span class="menu-title">Invoice</span>
      </a>
    </li>
    @if(auth()->user()->role == 'Admin')
    <li class="nav-item nav-category">
      <span class="nav-link">Admin Menu</span>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="/manageuser">
        <span class="menu-icon">
          <i class="mdi mdi-database"></i>
        </span>
        <span class="menu-title">Manage User</span>
      </a>
    </li>
    @endif
    {{-- <li class="nav-item menu-items">
      <a class="nav-link" data-toggle="collapse" href="#stock" aria-expanded="false" aria-controls="stock">
        <span class="menu-icon">
          <i class="mdi mdi-database"></i>
        </span>
        <span class="menu-title">History Stock</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="stock">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="/hs_stnk"> STNK </a></li>
          <li class="nav-item"> <a class="nav-link" href="/hs_bpkb"> BPKB </a></li>
        </ul>
      </div>
    </li> --}}

    <!-- navigation bar -->

  </ul>

</nav>