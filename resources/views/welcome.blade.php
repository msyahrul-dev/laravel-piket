<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Freelancer - Start Bootstrap Theme</title>
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
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('logn')}}">Login</a></li>
                        
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
                    <a href="{{ route('logn') }}" class="btn" style="background-color: #1d83c0; color: white;">
                        Login
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

                    <!-- jadwal Item 2-->
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


<!-- jadwal Modal - Hari Selasa -->

        <!-- jadwal Modal 3-->


        <!-- jadwal Modal 4-->


   

        <!-- jadwal Modal 6-->
   
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
