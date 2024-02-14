<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('sleacing.iconweb')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Layanan Peta DSW</title>
    @include('linkbootstrap.css')
</head>

<body>
    @include('sleacing.nav')
    <div class="container mb-5">
        <div class="path-link-beranda mt-5">
            <a href="/" class="text-decoration-none">Beranda ></a>
            <a href="/Layanan" class="text-decoration-none">Layanan DSW ></a>
            <a class="text-decoration-none text-dark">Layanan PETA DSW</a>
        </div>
        <div class="d-flex">
            <hr class="wdth-pndk-pls">
            <hr class="wdth-pndk-wrna">
        </div>
        <div class="maps mt-5 mb-5">
            <center>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126881.56976748213!2d106.73539626105148!3d-6.387671395033122!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e95620a297d3%3A0x1cfd4042316fb217!2sKota%20Depok%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1706285406560!5m2!1sid!2sid"
                    class="rounded" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </center>
        </div>
        <h2>Sejarah Kota Depok</h2>
        <ul class="mt-5">
            <p class="fw-bold fs-5">Awal Mula</p>
            <ul>
                <li>
                    <p>Abad ke-17: Pada awalnya, Depok merupakan bagian dari wilayah Batavia (sekarang Jakarta). Namun, pada abad ke-17, daerah ini mulai dihuni oleh kelompok etnis Sunda.</p>
                </li>
            </ul>
            <p class="fw-bold fs-5">Pemukiman dan Pertumbuhan</p>
            <ul>
                <li>
                    <p>Abad ke-18: Masyarakat Sunda mulai membuka lahan pertanian dan pemukiman di wilayah ini. Aktivitas pertanian dan perkampungan menjadi ciri khas Depok pada masa ini. </p>
                </li>
            </ul>
            <p class="fw-bold fs-5">Pendirian Desa Depok</p>
            <ul>
                <li>
                    <p>1778: Desa Depok secara resmi didirikan oleh Cornelis Chastelein, seorang Belanda, untuk memberikan tempat tinggal kepada para budak yang diberikan kebebasan. Nama "Depok" sendiri berasal dari bahasa Belanda, "de" berarti "tempat" dan "pok" adalah singkatan dari "pokok" yang artinya "tanaman."</p>
                </li>
            </ul>
            <p class="fw-bold fs-5">Pertumbuhan Kolonial</p>
            <ul>
                <li>
                    <p>Abad ke-19: Depok terus mengalami pertumbuhan dengan adanya pembangunan fasilitas kolonial Belanda, seperti gereja dan sekolah.</p>
                </li>
            </ul>
            <p class="fw-bold fs-5">Perkembangan Modern</p>
            <ul>
                <li>
                    <p>Masa Kemerdekaan: Setelah kemerdekaan Indonesia pada 1945, Depok mengalami perkembangan lebih lanjut sebagai bagian dari perkembangan wilayah sekitarnya.</p>
                </li>
            </ul>
            <p class="fw-bold fs-5">Kota Depok</p>
            <ul>
                <li>
                    <p>1982: Depok ditingkatkan statusnya menjadi kota otonom. Sejak saat itu, Depok terus berkembang sebagai kota satelit Jakarta dengan pertumbuhan ekonomi, infrastruktur, dan penduduk yang pesat.</p>
                </li>
            </ul>
            <p class="fw-bold fs-5">Era Kontemporer</p>
            <ul>
                <li>
                    <p>Pertumbuhan Pesat: Sebagai kota satelit, Depok terus menjadi pusat pendidikan, perdagangan, dan industri. Pertumbuhan pesatnya membuat Depok menjadi salah satu kota terbesar di Indonesia.</p>
                </li>
            </ul>
            <p class="fw-bold fs-5">Saat Ini</p>
            <ul>
                <li>
                    <p>Pembangunan dan Pelayanan: Pemerintah setempat terus berupaya mengembangkan infrastruktur dan pelayanan untuk meningkatkan kualitas hidup masyarakat Depok.</p>
                </li>
            </ul>
        </ul>
    </div>
    @include('sleacing.footer')
    @include('linkbootstrap.js')
</body>

</html>
