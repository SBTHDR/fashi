<div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="{{ asset('backend/assets/img/logo-small.png') }}">
            </div>
            <!-- <p>CT</p> -->
        </a>
        <a href="https://www.creative-tim.com" class="simple-text logo-normal">
            Fashi Admin
            <!-- <div class="logo-image-big">
              <img src="../assets/img/logo-big.png">
            </div> -->
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="{{ Route::is('admin') ? 'active' : '' }}">
                <a href="{{ route('admin') }}">
                    <i class="nc-icon nc-bank"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="{{ Route::is('banner.index') ? 'active' : '' }}">
                <a href="{{ route('banner.index') }}">
                    <i class="nc-icon nc-atom"></i>
                    <p>Banner Management</p>
                </a>
            </li>
            <li>
                <a href="./map.html">
                    <i class="nc-icon nc-box"></i>
                    <p>Category Management</p>
                </a>
            </li>
            <li>
                <a href="./notifications.html">
                    <i class="nc-icon nc-bag-16"></i>
                    <p>Products Management</p>
                </a>
            </li>
            <li>
                <a href="./user.html">
                    <i class="nc-icon nc-cart-simple"></i>
                    <p>Cart Management</p>
                </a>
            </li>
            <li>
                <a href="./typography.html">
                    <i class="nc-icon nc-basket"></i>
                    <p>Order Management</p>
                </a>
            </li>
            <li>
                <a href="./tables.html">
                    <i class="nc-icon nc-single-copy-04"></i>
                    <p>Post Management</p>
                </a>
            </li>
            <li>
                <a href="./tables.html">
                    <i class="nc-icon nc-bookmark-2"></i>
                    <p>Post Category</p>
                </a>
            </li>
            <li>
                <a href="./typography.html">
                    <i class="nc-icon nc-tag-content"></i>
                    <p>Post Tag</p>
                </a>
            </li>
            <li>
                <a href="./typography.html">
                    <i class="nc-icon nc-chat-33"></i>
                    <p>Reviews Management</p>
                </a>
            </li>
            <li>
                <a href="./typography.html">
                    <i class="nc-icon nc-single-02"></i>
                    <p>User Management</p>
                </a>
            </li>


            <li class="active-pro">
                <a href="./upgrade.html">
                    <i class="nc-icon nc-settings"></i>
                    <p>Settings</p>
                </a>
            </li>
        </ul>
    </div>
</div>
