<nav class="mt-4">
  <ul class="nav nav-pills bg-light nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
          with font-awesome or any other icon font library -->
    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-th"></i>
        <p>
          Dashboard
        </p>
      </a>
    </li>
    <li class="nav-item has-treeview">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-folder-open"></i>
        <p>Elektronik
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{ route('produk.index') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Elektronik</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('kategori.index') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Merk Elektronik</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('promo.index') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Diskon Elektronik</p>
          </a>
        </li>
      </ul>
    </li>
    
    <li class="nav-item has-treeview">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-cogs"></i>
        <p>
          Setting Data Penjualan
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{ route('slideshow.index') }}" class="nav-link">
            <i class="far fa-images nav-icon"></i>
            <p>Tampilan Slide Penjualan</p>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <i class="nav-icon fas fa-sign-out-alt"></i>
        <p>
          Sign Out
        </p>
      </a>
    </li>
  </ul>
</nav>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
@csrf
</form>
  </ul>
</nav>