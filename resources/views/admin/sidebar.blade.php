<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background: linear-gradient(to bottom, #2c3e50, #34495e); height: 100vh; overflow-y: hidden;">
    <!-- Brand Logo -->
<!-- Brand Logo -->
<a href="{{ route('admin.index') }}" class="brand-link d-flex align-items-center justify-content-center" 
   style="height: 56px; background: linear-gradient(to bottom, #2c3e50, #34495e); text-decoration: none; border-bottom: 1px solid rgba(255, 255, 255, 0.1);">
    <!-- Icon Brand -->
    <i class="fas fa-house-user" style="font-size: 1.25rem; color: #fff; margin-right: 10px;"></i>
    <!-- Text Brand -->
    <span class="brand-text" style="font-size: 0.9rem; font-weight: bold; color: #fff; text-transform: uppercase;">
        Piket Kontrakan
    </span>
</a>




    <!-- Sidebar -->
    <div class="sidebar">
        <!-- User Info -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center" style="border-bottom: 1px solid rgba(255, 255, 255, 0.1);">
            <div class="image">
                <img src="{{ asset('assets/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block" style="color: #ecf0f1; font-weight: bold;">Admin Konsap</a>
            </div>
        </div>

        <!-- Notifications Section -->
        <!-- <div class="notifications-section p-3 mb-3 text-white" style="background-color: #3c4b5e; border-radius: 8px;">
            <h5 class="text-uppercase font-weight-bold mb-2" style="font-size: 1rem;">📢 Notifikasi</h5>
            <ul class="list-unstyled" style="font-size: 0.9rem;">
                <li><i class="fas fa-bell"></i> Tidak ada notifikasi baru</li>
            </ul>
        </div> -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Menu Section -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-bars"></i>
                        <p>
                            Menu Utama
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.index') }}" class="nav-link">
                                <i class="fas fa-home nav-icon"></i>
                                <p>Home</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('jadwal.index') }}" class="nav-link">
                                <i class="fas fa-calendar-alt nav-icon"></i>
                                <p>Jadwal Piket</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('laporan.index') }}" class="nav-link">
                                <i class="fas fa-file-alt nav-icon"></i>
                                <p>Laporan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('logn.post') }}" class="nav-link">
                                <i class="fas fa-sign-out-alt nav-icon"></i>
                                <p>Log Out</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
