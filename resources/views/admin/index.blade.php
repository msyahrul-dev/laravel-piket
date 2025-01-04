@include('admin.header')
@include('admin.sidebar')
<div class="container-fluid px-4" style="margin-top: 20px;">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="display-4 font-weight-bold">Dashboard</h1>
                    </div>

                </div>
            </div>
        </section>

        <!-- Main content -->
        <section class="content">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Admin!</strong> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Gagal!</strong> {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <!-- Dashboard cards -->
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card text-center shadow-lg border-0">
                        <div class="card-body">
                            <i class="fas fa-calendar-alt fa-5x text-primary mb-3"></i>
                            <h4 class="font-weight-bold">Jadwal</h4>
                            <p class="text-muted">Kelola dan lihat jadwal piket dengan mudah.</p>
                            <a href="/jadwal" class="btn btn-primary btn-lg">Lihat Jadwal</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card text-center shadow-lg border-0">
                        <div class="card-body">
                            <i class="fas fa-file-alt fa-5x text-success mb-3"></i>
                            <h4 class="font-weight-bold">Laporan</h4>
                            <p class="text-muted">Pantau laporan hasil piket secara lengkap.</p>
                            <a href="/laporan" class="btn btn-success btn-lg">Lihat Laporan</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</div>

<style>
    body {
        background-color: #f9f9f9;
    }
    .content-header {
        margin-bottom: 30px;
    }
    .breadcrumb {
        background: none;
    }
    .card {
        border-radius: 10px;
    }
    .card-body {
        padding: 40px;
    }
    .btn {
        border-radius: 50px;
    }
    .btn-lg {
        padding: 10px 30px;
    }
    .alert {
        font-size: 1.1rem;
    }
</style>

@include('admin.footer')
