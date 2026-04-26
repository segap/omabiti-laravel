<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <div class="app-brand demo">
<div class="app-brand text-center py-3">
    <a href="{{ url('/') }}" class="app-brand-link d-inline-flex align-items-center justify-content-center">
        <!-- Logo -->

        <!-- Tulisan -->
        <span class="app-brand-text demo menu-text fw-bolder">OmaBiti</span>
    </a>
</div>
    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
      <i class="bx bx-chevron-left bx-sm align-middle"></i>
    </a>
  </div>

  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">
    <!-- Dashboard -->
    <li class="menu-item {{ request()->routeIs('admin.produk') ? 'active' : '' }}">
      <a href="{{ route('admin.produk') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-box"></i>
        <div data-i18n="Analytics">Produk</div>
      </a>
    </li>

</aside>
