@include('admin.header')
@include('admin.sidebar')

<div class="container-fluid px-4">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <!-- Optional Header Content -->
            </div>
        </section>

        <section class="content">
            <div class="card shadow-lg border-light rounded">
                <div class="card-header bg-success text-white">
                    <h3 class="card-title font-weight-bold">Form Input Jadwal Piket</h3>
                </div>
                <div class="card-body">
                    <!-- Menampilkan pesan sukses jika ada -->
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <!-- Form input jadwal -->
                    <form action="{{ route('jadwal.store') }}" method="POST">
                        @csrf
                        <div class="form-group mb-4">
                            <label for="nama" class="font-weight-semibold">Nama</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}" required>
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-4">
                            <label for="hari" class="font-weight-semibold">Hari</label>
                            <select class="form-control @error('hari') is-invalid @enderror" id="hari" name="hari" required>
                                <option value="Senin" {{ old('hari') == 'Senin' ? 'selected' : '' }}>Senin</option>
                                <option value="Selasa" {{ old('hari') == 'Selasa' ? 'selected' : '' }}>Selasa</option>
                                <option value="Rabu" {{ old('hari') == 'Rabu' ? 'selected' : '' }}>Rabu</option>
                                <option value="Kamis" {{ old('hari') == 'Kamis' ? 'selected' : '' }}>Kamis</option>
                                <option value="Jumat" {{ old('hari') == 'Jumat' ? 'selected' : '' }}>Jumat</option>
                            </select>
                            @error('hari')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-4">
                            <label for="waktu" class="font-weight-semibold">Waktu</label>
                            <input type="text" class="form-control @error('waktu') is-invalid @enderror" id="waktu" name="waktu" value="{{ old('waktu') }}" required>
                            @error('waktu')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary btn-lg shadow-lg rounded-pill px-4 py-2 transition-all hover:scale-105 hover:shadow-xl">
                                <i class="fas fa-save mr-2"></i>Simpan Jadwal
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>

@include('admin.footer')
