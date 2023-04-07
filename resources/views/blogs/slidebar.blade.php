<aside class="slidebar position-fixed fixed-top h-100" style="width: 240px;">
    <!-- Sidebar -->
    <div class="p-3 d-flex align-items-center">
        <div class="logo">
            <img src="{{ asset('assets/images/logo.png') }}" alt="" width="100px">
        </div>
    </div>
    <hr class="m-1" style="color: #cfd8dc; opacity: 1;">
    <div class="navbar px-2">
        <ul class="navbar-nav w-100">
            <li class="nav-item">
                <a class="nav-link {{ Route::is('home') ? 'active' : '' }}" href="{{ route('home') }}">Trang chủ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('customers.*') ? 'active' : '' }}"
                    href="{{ route('customers.index') }}">Quản lý khách
                    hàng</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('contracts.*') ? 'active' : '' }}"
                    href="{{ route('contracts.index') }}">Quản lý Hợp
                    đồng</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('services.*') ? 'active' : '' }}"
                    href="{{ route('services.index') }}">Quản lý Dịch
                    vụ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('users.*') ? 'active' : '' }}" href="{{ route('users.index') }}">Quản
                    lý
                    Tài
                    khoản</a>
            </li>
        </ul>
    </div>
</aside>
