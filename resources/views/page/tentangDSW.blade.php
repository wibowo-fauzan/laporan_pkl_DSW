<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('sleacing.iconweb')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About DSW</title>
    @include('linkbootstrap.css')
</head>
<body>
    @include('sleacing.nav')

    <div class="container mt-5 mb-5">
        <div class="path-link-beranda">
            <a href="/" class="text-decoration-none">Beranda ></a>
            <a class="text-decoration-none text-dark">Tentang Depok Single Window / Visi & Misi</a>
        </div>
        <div class="d-flex">
            <hr class="wdth-pndk-pls">
            <hr class="wdth-pndk-wrna">
        </div>
        <div class="mt-5">
            <button class="btn btn-primary active" onclick="showContent('tentang-dsw')">Tentang DSW</button>
            <button class="btn btn-primary" onclick="showContent('visi-misi')">Visi & Misi</button>
            <hr>
        </div>
        <div class="content-active-button">
            <div id="tentang-dsw-content" class="content">
                <h2 class="fs-1 fw-bold">Tentang DSW</h2>
                <p>
                    Part Of Depok Smart City, Depok Single Window adalah media bagi masyarakat Kota Depok untuk memudahkan layanan informasi yang dapat diakses di smartphone hanya dengan satu aplikasi.
                </p>
                <p>
                    Informasi lebih lanjut tentang fitur-fitur, layanan, dan kontribusi DSW dalam membangun Depok Smart City dapat ditemukan di sini.
                </p>   
                <ul>
                    <li><p>Pusat Informasi.</p></li>
                </ul>
                <ul>
                    <li><p>Keterhubungan Masyarakat.</p></li>
                </ul>
                <ul>
                    <li><p>Pusat Komunikasi.</p></li>
                </ul>
                <ul>
                    <li><p>Akses Informasi Publik.</p></li>
                </ul>
                <ul>
                    <li><p>Perubahan Positif.</p></li>
                </ul>    
                <ul>
                    <li><p>Kesejahteraan Kota.</p></li>
                </ul>    
            </div>
            <div id="visi-misi-content" class="content" style="display: none;">
                <h2 class="fs-1 fw-bold">Visi & Misi</h2>
                <h2 class="mt-5">Visi</h2>
                <p>"Kota Depok yang Maju, Berbudaya dan Sejahtera"</p>
                <h2 class="mt-5">Misi</h2>
                <ul>
                    <li><p>Meningkatkan Pembangunan Infrastruktur Berbasis Teknologi dan Berwawasan Lingkungan.</p></li>
                </ul>
                <ul>
                    <li><p>Meningkatkan Tata Kelola Pemerintahan dan Pelayanan Publik yang Modern dan Partisipatif.</p></li>
                </ul>
                <ul>
                    <li><p>Mewujudkan Masyarakat yang Religius dan Berbudaya Berbasis Kebhinekaan dan Ketahanan Keluarga.</p></li>
                </ul>
                <ul>
                    <li><p>Mewujudkan Masyarakat yang Sejahtera, Mandiri, dan Berdaya Saing.</p></li>
                </ul>
                <ul>
                    <li><p>Mewujudkan Kota yang Sehat, Aman, Tertib dan Nyaman.</p></li>
                </ul>
            </div>
        </div>
    </div>

    @include('sleacing.footer')

    @include('linkbootstrap.js')
</body>
</html>