@include('admin.header')
@include('admin.sidebar')

<div class="container-fluid px-4" style="margin-top: 20px;">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Success or Error Message -->
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @elseif(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        <!-- Main content -->
        <section class="content">
            <div class="card shadow-lg border-light rounded">
                <div class="card-body">
                    <!-- Title Section -->
                    <h1 class="my-4 text-center font-weight-bold text-primary">JADWAL PIKET</h1>

                    <!-- Button to Add New Jadwal -->
                    <div class="text-right mb-3">
                        <a href="{{ route('jadwal.create') }}" class="btn btn-success btn-md shadow-lg rounded-pill px-4 py-2 transition-all hover:scale-105 hover:shadow-xl">
                            <i class="fas fa-plus-circle mr-2"></i>Tambah Jadwal
                        </a>
                    </div>

                    @foreach (['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat'] as $day)
                    <div class="day-section mb-5">
                        <h3 class="day-title text-uppercase text-secondary border-bottom pb-2 mb-3" style="font-size: 1.5rem; font-weight: 600;">
                            {{ $day }}
                        </h3>

                        <!-- Table Section -->
                        <div class="table-responsive shadow-sm rounded">
                            <table class="table table-bordered table-hover">
                                <thead class="bg-primary text-white">
                                    <tr>
                                        <th>Nama</th>
                                        <th>Waktu</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(isset($list_jadwal[$day]) && count($list_jadwal[$day]) > 0)
                                        @foreach ($list_jadwal[$day] as $jadwal)
                                            <tr>
                                                <td>{{ $jadwal->nama }}</td>
                                                <td>{{ $jadwal->waktu }}</td>
                                                <td class="d-flex justify-content-center">
                                                    <!-- Edit Button -->
                                                    <a href="{{ route('jadwal.edit', $jadwal->id) }}" class="btn btn-warning btn-sm mr-2" title="Edit Jadwal">
                                                        <i class="fas fa-edit"></i>
                                                    </a>

                                                    <!-- Delete Button -->
                                                    <form action="{{ route('jadwal.destroy', $jadwal->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus jadwal ini?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm" title="Hapus Jadwal">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="3" class="text-center text-muted">Tidak ada jadwal untuk {{ $day }}</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- /.card-body -->

                <div class="card-footer text-center text-muted py-2">
                    <small>&copy; 2024 Jadwal Piket - Semua Hak Dilindungi</small>
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</div>

@include('admin.footer')
