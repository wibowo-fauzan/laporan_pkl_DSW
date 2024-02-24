<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('sleacing.iconweb')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Layanan Perpustakaan Umum Kota Depok DSW</title>
    @include('linkbootstrap.css')
</head>

<body>
    @include('sleacing.nav')
    <div class="container mb-5">
        <div class="path-link-beranda mt-5">
            <a href="/" class="text-decoration-none">Beranda ></a>
            <a href="/Layanan" class="text-decoration-none">Layanan DSW ></a>
            <a class="text-decoration-none text-dark">Layanan Perpustakaan Umum Kota Depok DSW</a>
        </div>
        <div class="d-flex">
            <hr class="wdth-pndk-pls">
            <hr class="wdth-pndk-wrna">
        </div>
    </div>
    <div id="carouselExampleDark" class="carousel carousel-dark slide mt-5 container mb-5" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3"
                aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4"
                aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="3000">
                <img src="/asset/perpusumum.jpg" class="d-block rounded"
                    style=" object-fit: contain; background-repeat: no-repeat; width: 100%; height: 400px; border-radius: 20px;"
                    alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="/asset/perpusui.jpg" class="d-block rounded"
                    style=" object-fit: contain; background-repeat: no-repeat; width: 100%; height: 400px; border-radius: 20px;"
                    alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="/asset/perpustakaangundar.jpg" class="d-block rounded"
                    style=" object-fit: contain; background-repeat: no-repeat; width: 100%; height: 400px; border-radius: 20px;"
                    alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="/asset/perpusdaerah.jpg" class="d-block rounded"
                    style=" object-fit: contain; background-repeat: no-repeat; width: 100%; height: 400px; border-radius: 20px;"
                    alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="/asset/perpus2.jpg" class="d-block rounded"
                    style=" object-fit: contain; background-repeat: no-repeat; width: 100%; height: 400px; border-radius: 20px;"
                    alt="...">
            </div>

            <div class="carousel-item">
                <img src="https://asset.kompas.com/crops/_NRrco8g6CTluqwWLyguXb4SRhg=/98x0:944x564/750x500/data/photo/2021/12/02/61a8d64decf69.jpg"
                    class="d-block rounded"
                    style=" object-fit: contain; background-repeat: no-repeat; width: 100%; height: 400px; border-radius: 20px;"
                    alt="...">
            </div>
        </div>
    </div>
    <div class="container mb-5">
        <div class="mt-5">
            <h1 class="fw-bold fs-3">Perpustakaan Umum Kota Depok</h1>
            <ul class="mt-4">
                <li>
                    <p>Kota Depok bermula dari sebuah perkampungan kecil di wilayah Bogor yang didirikan oleh Cornelis
                        Chastelein pada tahun 1696. Awalnya, kawasan ini merupakan tanah perkebunan yang dimiliki oleh
                        VOC (Vereenigde Oostindische Compagnie) atau Perusahaan Hindia Timur Belanda.</p>
                </li>
                <div class="row mt-5 mb-5">
                    <div class="col-xl-4">
                        <div class="shadow p-3 mb-5 bg-body rounded p-2" style="height: 250px;">
                            <h1 class="fs-5">1. Perkembangan dan Pertumbuhan:</h1>
                            <ul>
                                <li>
                                    <p>Seiring berjalannya waktu, daerah ini berkembang menjadi sebuah pemukiman dengan
                                        pertanian sebagai aktivitas utama penduduknya. Pertumbuhan penduduk dan
                                        perkembangan ekonomi mengakibatkan perluasan wilayah Depok.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="shadow p-3 mb-5 bg-body rounded p-2" style="height: 250px;">
                            <h1 class="fs-5">2. Peranan Pendidikan:</h1>
                            <ul>
                                <li>
                                    <p>Depok memiliki sejarah pendidikan yang cukup kaya. Pada awalnya, beberapa yayasan
                                        keagamaan mendirikan sekolah-sekolah di wilayah ini. Peran sekolah-sekolah
                                        tersebut dalam pendidikan masyarakat setempat membantu mengangkat taraf
                                        pendidikan di Depok.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="shadow p-3 mb-5 bg-body rounded p-2" style="height: 250px;">
                            <h1 class="fs-5">3. Status Kota:</h1>
                            <ul>
                                <li>
                                    <p>Pada tanggal 18 Mei 1999, Depok resmi menjadi kota otonom yang terpisah dari
                                        Kabupaten Bogor. Status kota otonom memungkinkan Depok untuk mengelola urusan
                                        pemerintahan dan pembangunan secara mandiri.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="shadow p-3 mb-5 bg-body rounded p-2" style="height: 250px;">
                            <h1 class="fs-5">Perpustakaan Daerah Kabupaten Depok</h1>
                            <ul>
                                <li>
                                    <p>Depok telah menjadi pusat pendidikan yang penting dengan adanya berbagai
                                        universitas dan institusi pendidikan tinggi terkemuka, seperti Universitas
                                        Indonesia dan Universitas Gunadarma.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </ul>
        </div>
    </div>
    @include('sleacing.footer')
    @include('linkbootstrap.js')
    <script>
        function tampilkanSelengkapnya() {
            document.getElementById('sejarahDepok').style.display = 'block';
            document.getElementById('sejarahDepokDetail').style.display = 'block';
            document.getElementById('linkSelengkapnya').style.display = 'none'; // Menyembunyikan link Selengkapnya
        }

    </script>

</body>

</html>
