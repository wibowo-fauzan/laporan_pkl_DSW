<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('sleacing.iconweb')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan PKL DSW</title>
    @include('linkbootstrap.css')
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="https://dsw.depok.go.id/assets-web/img/dsw-square.png" alt="" width="100" height="auto">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown hover">
                        <a class="nav-link active p-active pointer-cursor" aria-current="page">Profile <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g transform="rotate(90 12 12)"><path fill="currentColor" d="m11.71 15.29l2.59-2.59a.996.996 0 0 0 0-1.41L11.71 8.7c-.63-.62-1.71-.18-1.71.71v5.17c0 .9 1.08 1.34 1.71.71"/></g></svg><span class="underline"></span></a>
                        <div class="dropdown-content">
                            <div class="row">
                                <div class="col-xl-12">
                                    <a href="/TentangDSW" class="text-decoration-none text-dark hover-text-nav btn" href="/Layanan">Tentang DSW</a>
                                </div>
                                <div class="col-xl-12">
                                    <a href="/TentangDSW" class="text-decoration-none text-dark hover-text-nav btn">Visi dan Misi</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown hover pointer-cursor">
                        <a class="nav-link active p-active" aria-current="page" href="/Layanan">Layanan <span class="underline"></span></a>
                        {{-- <div class="dropdown-content" style="width: 900px; margin-left: -200%;">
                            <div class="row">
                                <div class="col-xl-12">
                                    <a href="" class="text-decoration-none text-dark hover-text-nav">Tentang DSW</a>
                                </div>
                                <div class="col-xl-12">
                                    <a href="" class="text-decoration-none text-dark hover-text-nav">Visi dan Misi</a>
                                </div>
                            </div>
                        </div> --}}
                    </li>
                    <li class="nav-item dropdown hover pointer-cursor">
                        <a class="nav-link active p-active" aria-current="page" >Informasi Publik <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g transform="rotate(90 12 12)"><path fill="currentColor" d="m11.71 15.29l2.59-2.59a.996.996 0 0 0 0-1.41L11.71 8.7c-.63-.62-1.71-.18-1.71.71v5.17c0 .9 1.08 1.34 1.71.71"/></g></svg><span class="underline"></span></a>
                        <div class="dropdown-content">
                            <div class="row">
                                <div class="col-xl-12">
                                    <a href="/AgendaKegiatan" class="text-decoration-none text-dark hover-text-nav btn">Agenda Kegiatan</a>
                                </div>
                                <div class="col-xl-12">
                                    {{-- <a href="" class="text-decoration-none text-dark hover-text-nav">Visi dan Misi</a> --}}
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown hover pointer-cursor">
                        <a class="nav-link active p-active" aria-current="page" >Berita <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g transform="rotate(90 12 12)"><path fill="currentColor" d="m11.71 15.29l2.59-2.59a.996.996 0 0 0 0-1.41L11.71 8.7c-.63-.62-1.71-.18-1.71.71v5.17c0 .9 1.08 1.34 1.71.71"/></g></svg><span class="underline"></span></a>
                        <div class="dropdown-content">
                            <div class="row">
                                <div class="col-xl-12">
                                    <a href="/Pengumuman" class="text-decoration-none text-dark hover-text-nav btn">Pengumuman </a>
                                </div>
                                <div class="col-xl-12">
                                    <a href="/Berita&Kegiatan" class="text-decoration-none text-dark hover-text-nav btn">Beirta & Artikel</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown hover">
                        <a class="nav-link active p-active btn" aria-current="page" href="/Contact-Me">Kontak Kami<span class="underline"></span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <center>
        <div id="carouselExampleCaptions" class="carousel slide mt-3" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="asset/img/img-1.png" class="d-block" width="90%" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="asset/img/img-2.png" class="d-block" width="90%" alt="...">
                </div>
            </div>
        </div>
    </center>

    <div class="container mt-5">
        <div class="d-flex">
            <hr class="wdth-pndk-pls">
            <hr class="wdth-pndk-wrna">
        </div>
        <p class="fw-bold fs-4">Informasi Cuaca Dan Waktu</p>
        <center>
            <div class="row mt-4">
                <div class="col-md-3">
                    <div class="shadow p-3 mb-5 bg-body rounded p-2" style="width: 18rem;">
                        <img src="https://dsw.depok.go.id/assets-web/img/icon/cuaca/calendar.png"
                            class="mt-3 card-img-top card-img-cuaca" alt="...">
                        <div class="card-body">
                            <p class="fw-bold">Tanggal: {{ $today->format('d M Y') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="shadow p-3 mb-5 bg-body rounded p-2" style="width: 18rem;">
                        <img src="https://dsw.depok.go.id/assets-web/img/icon/cuaca/clock.png"
                            class="mt-3 card-img-top card-img-cuaca" alt="...">
                        <div class="card-body">
                            <p class="fw-bold text-center" id="realtime-clock">Loading...</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="shadow p-3 mb-5 bg-body rounded p-2" style="width: 18rem;">
                        <img src="https://dsw.depok.go.id/assets-web/img/icon/cuaca/cloudy.png"
                            class="mt-3 card-img-top card-img-cuaca" alt="...">
                        <div class="card-body">
                            <p class="fw-bold text-center">testing</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="shadow p-3 mb-5 bg-body rounded p-2" style="width: 18rem;">
                        <img src="https://dsw.depok.go.id/assets-web/img/icon/cuaca/cloudy-day.png"
                            class="mt-3 card-img-top card-img-cuaca" alt="...">
                        <div class="card-body">
                            <p class="fw-bold text-center">testing</p>
                        </div>
                    </div>
                </div>
            </div>
        </center>
    </div>
    <div class="container mt-5 mb-5">
        <div class="d-flex">
            <hr class="wdth-pndk-pls">
            <hr class="wdth-pndk-wrna">
        </div>
        <p class="fw-bold fs-4">Lembaga & BUMD</p>
        <center>
            <div class="row mt-4">
                <div class="col-md-3">
                    <div class="shadow p-3 mb-5 bg-body rounded p-2" style="width: 18rem;">
                        <img src="https://depoknews.id/wp-content/uploads/2021/09/pdam-depok2.png"
                            class="mt-3 card-img-top card-img-cuaca" height="100" alt="...">
                        <center>
                            <hr class="wdth-pndk-wrna" style="width: 50%;">
                        </center>
                        <div class="card-body">
                            <p class="fw-bold">Cek Tagihan dan Informasi Lainnya Seputar PDAM</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="shadow p-3 mb-5 bg-body rounded p-2" style="width: 18rem;">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/e/e6/Logo_BAZNAS_RI-Hijau-01.png"
                            class="mt-3 card-img-top card-img-cuaca" height="100" alt="...">
                        <center>
                            <hr class="wdth-pndk-wrna" style="width: 50%;">
                        </center>
                        <div class="card-body">
                            <p class="fw-bold text-center">Bayar Zakat dan Layanan Lainnya Seputar Baznas</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="shadow p-3 mb-5 bg-body rounded p-2" style="width: 18rem;">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/88/Logo_BNN.svg/2048px-Logo_BNN.svg.png"
                            class="mt-3 card-img-top card-img-cuaca" height="100" alt="...">
                        <center>
                            <hr class="wdth-pndk-wrna" style="width: 50%;">
                        </center>
                        <div class="card-body">
                            <p class="fw-bold text-center">Akses Pengaduan dan Layanan Seputar BNN</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="shadow p-3 mb-5 bg-body rounded p-2" style="width: 18rem;">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/46/KPU_Logo.svg/1849px-KPU_Logo.svg.png"
                            class="mt-3 card-img-top card-img-cuaca" height="100" alt="...">
                        <center>
                            <hr class="wdth-pndk-wrna" style="width: 50%;">
                        </center>
                        <div class="card-body">
                            <p class="fw-bold text-center">Pemilihan umum di <br> Indonesia</p>
                        </div>
                    </div>
                </div>
            </div>
        </center>
    </div>
    <center>
        <div id="carouselExampleCaptions" class="carousel slide mt-3" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="asset/img/img-1.png" class="d-block" width="90%" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="asset/img/img-2.png" class="d-block" width="90%" alt="...">
                </div>
            </div>
        </div>
    </center>
    <div class="container mt-5 mb-5">
        <div class="d-flex">
            <hr class="wdth-pndk-pls">
            <hr class="wdth-pndk-wrna">
        </div>
        <h3>List of News</h3>
        <div class="row mt-5">

            {{-- agenda kegiatan --}}
            <div class="col-xl-4  rounded">
                <div class="shadow p-3 mb-5 bg-body rounded p-2">
                    <img class="rounded " style="object-fit: cover; width: 100%; aspect-ratio: 1/1" src="{{ asset('storage/' . $agenda->image) }}" width="100%" alt="" />
                    <p class="mt-3"> <b>Jhon Due | 20-08-2022</b> <br /> Lorem ipsum dolor sit amet consectetur adipisicing elit Soluta accusantium praesentium ducimus
                    </p>
                </div>
            </div>
            {{-- agenda kegiatan --}}

            {{-- pengumuman --}}
            <div class="col-xl-4 rounded">
                <div class="shadow p-3 mb-5 bg-body rounded p-2">
                    <img class="rounded " style="object-fit: cover; width: 100%; aspect-ratio: 1/1" src="https://cdn.pixabay.com/photo/2014/05/21/22/28/old-newspaper-350376__340.jpg" width="100%" alt="" />
                    <p class="mt-3"> <b>Jhon Due | 20-08-2022</b> <br /> Lorem ipsum dolor sit amet consectetur adipisicing elit Soluta accusantium praesentium ducimus </p>
                </div>
            </div>
            {{-- pengumuman --}}

            {{-- berita dan artikel --}}
            <div class="col-xl-4 rounded">
                <div class="shadow p-3 mb-5 bg-body rounded p-2">
                    <img class="rounded " style="object-fit: cover; width: 100%; aspect-ratio: 1/1" src="https://cdn.pixabay.com/photo/2014/05/21/22/28/old-newspaper-350376__340.jpg" width="100%" alt="" />
                    <p class="mt-3"> <b>Jhon Due | 20-08-2022</b> <br /> Lorem ipsum dolor sit amet consectetur adipisicing elit Soluta accusantium praesentium ducimus </p>
                </div>
            </div>
            {{-- berita dan artikel --}}
        </div>
    </div>
    <div class="mb-2">
        <h1 class="text-center">Titik Kota Depok</h1>
        <p class="text-center">Maps Depok</p>
        <div class="map container ">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126881.56976748213!2d106.73539626105148!3d-6.387671395033122!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e95620a297d3%3A0x1cfd4042316fb217!2sKota%20Depok%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1705680006088!5m2!1sid!2sid" width="100%" height="450" style="border:0; border-radius: 20px;" allowfullscreen="" loading="lazy" class="shadow-lg p-3 mb-5 bg-body rounded" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    @include('sleacing.footer')
    @include('linkbootstrap.js')
</body>

</html>
