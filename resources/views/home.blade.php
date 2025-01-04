<!DOCTYPE html>
<html lang="en">
    <head>                      
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Piket Kontrakan</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset("landing-page/assets/favicon.ico")}}" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('landing-page/css/styles.css') }}" rel="stylesheet" />

    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">Piket Kontrakan</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#jadwal">Jadwal Piket</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#lapor">Lapor Piket</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('logn.post') }}">Log Out</a></li>
                        
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5" src="{{ asset('landing-page/assets/img/house-cleaning.png') }}" alt="..." />

                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">Piket Sekarang Yuk!!!</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon">
                    <a href="#lapor" class="btn" style="background-color: #1d83c0; color: white;">
                        Laporan Piket
                    </a>
                </div>



                <div class="divider-custom-line"></div>
            </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">Kebersamaan - Kerapian - Kebersihan</p>
            </div>
        </header>
        <!-- jadwal Section-->
        <section class="page-section jadwal" id="jadwal">
            <div class="container">
                <!-- jadwal Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Jadwal Piket</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- jadwal Grid Items-->
                <div class="row justify-content-center">
                    <!-- jadwal Item 1-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="jadwal-item mx-auto" data-bs-toggle="modal" data-bs-target="#jadwalModal1">
                            <div class="jadwal-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="jadwal-item-caption-content text-center text-white">
                                    <i class="fas fa-eye fa-3x"></i>
                                    <p class="mt-2">Lihat Jadwal Hari Senin</p> <!-- Menambahkan teks di sini -->
                                </div>
                            </div>
                            <img class="img-fluid" src="{{ asset('landing-page/assets/img/jadwal/senin.png') }}" alt="..." />
                        </div>
                    </div>

                    <!--  Item 2-->
                    <div class="col-md-6 col-lg-4 mb-5">
                    <div class="jadwal-item mx-auto" data-bs-toggle="modal" data-bs-target="#jadwalModalSelasa">
                        <div class="jadwal-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="jadwal-item-caption-content text-center text-white">
                                <i class="fas fa-eye fa-3x"></i>
                                <p class="mt-2">Lihat Jadwal Hari Selasa</p> <!-- Teks disesuaikan -->
                            </div>
                        </div>
                        <img class="img-fluid" src="{{ asset('landing-page/assets/img/jadwal/selasa.png') }}" alt="Jadwal Hari Selasa" />
                    </div>
                </div>

                    <!-- jadwal Item 3-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="jadwal-item mx-auto" data-bs-toggle="modal" data-bs-target="#jadwalModalRabu">
                            <div class="jadwal-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="jadwal-item-caption-content text-center text-white">
                                    <i class="fas fa-eye fa-3x"></i>
                                    <p class="mt-2">Lihat Jadwal Hari Rabu</p> <!-- Teks diubah menjadi lebih spesifik -->
                                </div>
                            </div>
                            <img class="img-fluid" src="{{ asset('landing-page/assets/img/jadwal/rabu.png') }}" alt="Jadwal Hari Rabu" /> <!-- Gambar tetap diubah sesuai -->
                        </div>
                    </div>

                    <!-- jadwal Item 4-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="jadwal-item mx-auto" data-bs-toggle="modal" data-bs-target="#jadwalModalKamis">
                            <div class="jadwal-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="jadwal-item-caption-content text-center text-white">
                                    <i class="fas fa-eye fa-3x"></i>
                                    <p class="mt-2">Lihat Jadwal Hari Kamis</p>
                                </div>
                            </div>
                            <img class="img-fluid" src="{{ asset('landing-page/assets/img/jadwal/kamis.png') }}" alt="Jadwal Hari Kamis" />
                        </div>
                    </div>

                    <!-- jadwal Item 5-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="jadwal-item mx-auto" data-bs-toggle="modal" data-bs-target="#jadwalModalJumat">
                            <div class="jadwal-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="jadwal-item-caption-content text-center text-white">
                                    <i class="fas fa-eye fa-3x"></i>
                                    <p class="mt-2">Lihat Jadwal Hari Jumat</p>
                                </div>
                            </div>
                            <img class="img-fluid" src="{{ asset('landing-page/assets/img/jadwal/jumat.png') }}" alt="Jadwal Hari Jumat" />
                        </div>
                    </div>

                    <!-- jadwal Item 6-->
                    <div class="col-md-6 col-lg-4">
                        <div class="jadwal-item mx-auto" data-bs-toggle="modal" data-bs-target="#jadwalModal6">
                            <div class="jadwal-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="jadwal-item-caption-content text-center text-white">
                                    <i class="fas fa-eye fa-3x"></i>
                                    <p class="mt-2">Lihat jadwal</p>
                                </div>
                            </div>
                            <img class="img-fluid" src="{{ asset ("landing-page/assets/img/jadwal/weekend.png")}}" alt="..." />
                        </div>
                    </div>
                </div>
            </div>
        </section>




<!-- Form Section -->
<section class="page-section bg-primary" id="lapor">
    <div class="container">
        <h2 class="page-section-heading text-center text-uppercase text-white mb-5">Laporan Piket</h2>

        <!-- Form Section Form-->
        <div class="card shadow-lg mb-5">
            <div class="card-body">
                <!-- Menampilkan pesan sukses jika ada -->
                @if(session('status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('status') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <!-- Form input laporan -->
                <form action="{{ route('laporan.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- Nama Lengkap -->
                    <div class="mb-3">
                        <label for="nama" class="form-label text-white">Nama Lengkap</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}" placeholder="Masukkan nama Anda" required>
                        @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Hari Piket -->
                    <div class="mb-3">
                        <label for="hari" class="form-label text-white">Hari Piket</label>
                        <input type="text" class="form-control @error('hari') is-invalid @enderror" id="hari" name="hari" value="{{ old('hari') }}" placeholder="Masukkan hari (contoh: Senin)" required>
                        @error('hari')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Tanggal Piket -->
                    <div class="mb-3">
                        <label for="tanggal" class="form-label text-white">Tanggal Piket</label>
                        <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" name="tanggal" value="{{ old('tanggal') }}" required>
                        @error('tanggal')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Foto Sebelum Piket -->
                    <div class="mb-3">
                        <label for="before_piket" class="form-label text-white">Foto Sebelum Piket</label>
                        <input type="file" class="form-control @error('before_piket') is-invalid @enderror" id="before_piket" name="before_piket[]" multiple>
                        <small class="form-text text-muted">Unggah foto kondisi sebelum piket (maksimal beberapa file).</small>
                        @error('before_piket')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Foto Setelah Piket -->
                    <div class="mb-3">
                        <label for="after_piket" class="form-label text-white">Foto Setelah Piket</label>
                        <input type="file" class="form-control @error('after_piket') is-invalid @enderror" id="after_piket" name="after_piket[]" multiple>
                        <small class="form-text text-muted">Unggah foto kondisi setelah piket (maksimal beberapa file).</small>
                        @error('after_piket')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Tombol Submit -->
                    <div class="d-grid">
                        <button type="submit" class="btn btn-light btn-lg">Simpan Laporan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Modal Bootstrap -->
<!-- Modal Status -->
<div class="modal fade" id="laporanModal" tabindex="-1" aria-labelledby="laporanModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="laporanModalLabel">Status Laporan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Pesan Modal -->
                @if(session('status') == 'Laporan berhasil disimpan!')
                    <p class="text-success">Laporan berhasil disimpan!</p>
                @else
                    <p class="text-danger">Laporan gagal disimpan, coba lagi.</p>
                @endif
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Kembali</button>
            </div>
        </div>
    </div>
</div>





        



        <!-- Footer-->
        <footer class="footer text-center bg-secondary text-white py-5">
            <div class="container">
                <div class="row">
                   
                <!-- Footer Tips Kebersihan -->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Tips Kebersihan</h4>
                    <p class="mb-2"><i class="fas fa-lightbulb text-warning"></i> Gunakan baking soda untuk membersihkan noda membandel di dapur.</p>
                    <p class="mb-2"><i class="fas fa-lightbulb text-warning"></i> Bersihkan kamar mandi setiap 3 hari sekali untuk mencegah bakteri.</p>
                    <p class="lead mb-0">Kebersihan adalah kunci kenyamanan!</p>
                </div>



                    <!-- Footer Social Icons -->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Around the Web</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
                    </div>

                    <!-- Footer Contact -->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">Contact Us</h4>
                        <p class="lead mb-0">
                            Email: piketkontr@gmail.com<br>
                            Phone: +1 234 567 890
                        </p>
                        <div class="mt-3">
                            <a class="btn btn-outline-light" href="#">Send Email</a>
                        </div>
                    </div>
                </div>

                <!-- Footer Bottom Text -->
                <div class="row mt-4">
                    <div class="col-12">
                        <p class="small mb-0">&copy; 2024 Piket Kontrakan. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </footer>


        <!-- jadwal Modals-->
        <!-- jadwal Modal 1-->
        <div class="jadwal-modal modal fade" id="jadwalModal1" tabindex="-1" aria-labelledby="jadwalModal1" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0">
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- jadwal Modal - Title-->
                                    <h2 class="jadwal-modal-title text-secondary text-uppercase mb-0">Jadwal Hari Senin</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- jadwal Modal - Text-->
                                    <ul class="list-group mb-4">
                                        @foreach($jadwalSenin as $jadwal)
                                            <li class="list-group-item d-flex align-items-center">
                                                <i class="fas fa-user-circle text-primary me-2"></i> <!-- Tambahkan ikon -->
                                                <span class="fw-bold text-uppercase">{{ ucwords($jadwal->nama) }}</span> <!-- Nama dalam Title Case -->
                                                <span class="ms-auto">{{ $jadwal->tanggal }}</span>
                                            </li>
                                        @endforeach
                                    </ul>

                                    <button class="btn btn-primary" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!-- jadwal Modal - Hari Selasa -->
<div class="jadwal-modal modal fade" id="jadwalModalSelasa" tabindex="-1" aria-labelledby="jadwalModalSelasa" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center pb-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <h2 class="jadwal-modal-title text-secondary text-uppercase mb-0">Jadwal Hari Selasa</h2>
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <ul class="list-group mb-4">
                                @foreach($jadwalSelasa as $jadwal)
                                    <li class="list-group-item d-flex align-items-center">
                                        <i class="fas fa-user-circle text-primary me-2"></i>
                                        <span class="fw-bold text-uppercase">{{ ucwords($jadwal->nama) }}</span>
                                        <span class="ms-auto">{{ $jadwal->tanggal }}</span>
                                    </li>
                                @endforeach
                            </ul>
                            <button class="btn btn-primary" data-bs-dismiss="modal">
                                <i class="fas fa-xmark fa-fw"></i>
                                Close Window
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        <!-- jadwal Modal 3-->
        <div class="jadwal-modal modal fade" id="jadwalModalRabu" tabindex="-1" aria-labelledby="jadwalModalRabu" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0">
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- jadwal Modal - Title-->
                                    <h2 class="jadwal-modal-title text-secondary text-uppercase mb-0">Jadwal Hari Rabu</h2> <!-- Judul Modal -->
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    
                                    <!-- jadwal Modal - Text-->
                                    <ul class="list-group mb-4">
                                        @foreach($jadwalRabu as $jadwal)
                                            <li class="list-group-item d-flex align-items-center">
                                                <i class="fas fa-user-circle text-primary me-2"></i>
                                                <span class="fw-bold text-uppercase">{{ ucwords($jadwal->nama) }}</span>
                                                <span class="ms-auto">{{ $jadwal->tanggal }}</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <button class="btn btn-primary" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jadwal Modal 4-->
        <div class="jadwal-modal modal fade" id="jadwalModalKamis" tabindex="-1" aria-labelledby="jadwalModalKamis" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0">
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- jadwal Modal - Title-->
                                    <h2 class="jadwal-modal-title text-secondary text-uppercase mb-0">Jadwal Hari Kamis</h2> <!-- Judul Modal -->
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    
                                    <!-- jadwal Modal - Text-->
                                    <ul class="list-group mb-4">
                                        @foreach($jadwalKamis as $jadwal)
                                            <li class="list-group-item d-flex align-items-center">
                                                <i class="fas fa-user-circle text-primary me-2"></i>
                                                <span class="fw-bold text-uppercase">{{ ucwords($jadwal->nama) }}</span>
                                                <span class="ms-auto">{{ $jadwal->tanggal }}</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <button class="btn btn-primary" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jadwal Modal 5-->
        <div class="jadwal-modal modal fade" id="jadwalModalJumat" tabindex="-1" aria-labelledby="jadwalModalJumat" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center pb-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <!-- jadwal Modal - Title-->
                            <h2 class="jadwal-modal-title text-secondary text-uppercase mb-0">Jadwal Hari Jumat</h2> <!-- Judul Modal -->
                            <!-- Icon Divider-->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                <div class="divider-custom-line"></div>
                            </div>
                            
                            <!-- jadwal Modal - Text-->
                            <ul class="list-group mb-4">
                                @foreach($jadwalJumat as $jadwal)
                                    <li class="list-group-item d-flex align-items-center">
                                        <i class="fas fa-user-circle text-primary me-2"></i>
                                        <span class="fw-bold text-uppercase">{{ ucwords($jadwal->nama) }}</span>
                                        <span class="ms-auto">{{ $jadwal->tanggal }}</span>
                                    </li>
                                @endforeach
                            </ul>
                            <button class="btn btn-primary" data-bs-dismiss="modal">
                                <i class="fas fa-xmark fa-fw"></i>
                                Close Window
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        <!-- jadwal Modal 6-->
        <div class="jadwal-modal modal fade" id="jadwalModal6" tabindex="-1" aria-labelledby="jadwalModal6" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- jadwal Modal - Title-->
                                    <h2 class="jadwal-modal-title text-secondary text-uppercase mb-0">WEEKEND</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- jadwal Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="{{ asset("landing-page/assets/img/jadwal/piket.png")}}" alt="..." />
                                    <!-- jadwal Modal - Text-->
                                    <button class="btn btn-primary" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset("js/scripts.js")}}"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

        <!-- sript modal -->
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                @if(session('status'))
                    var laporanModal = new bootstrap.Modal(document.getElementById('laporanModal'));
                    laporanModal.show();
                @endif
            });
        </script>

    </body>
</html>
