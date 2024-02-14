<head>
    @include('linkbootstrap.css')
</head>
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
                    <a class="nav-link active p-active" aria-current="page" href="/">Home<span class="underline"></span></a>
                </li>
                <li class="nav-item dropdown hover">
                    <a class="nav-link active p-active pointer-cursor" aria-current="page">Profile <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g transform="rotate(90 12 12)"><path fill="currentColor" d="m11.71 15.29l2.59-2.59a.996.996 0 0 0 0-1.41L11.71 8.7c-.63-.62-1.71-.18-1.71.71v5.17c0 .9 1.08 1.34 1.71.71"/></g></svg><span class="underline"></span></a>
                    <div class="dropdown-content">
                        <div class="row">
                            <div class="col-xl-12">
                                <a href="/TentangDSW" class="text-decoration-none text-dark hover-text-nav btn">Tentang DSW</a>
                            </div>
                            <div class="col-xl-12">
                                <a href="/TentangDSW" class="text-decoration-none text-dark hover-text-nav btn">Visi dan Misi</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown hover">
                    <a class="nav-link active p-active pointer-cursor" aria-current="page" href="/Layanan">Layanan <span class="underline"></span></a>
                    {{-- <div class="dropdown-content">
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
                <li class="nav-item dropdown hover">
                    <a class="nav-link active p-active pointer-cursor" aria-current="page">Informasi Publik <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g transform="rotate(90 12 12)"><path fill="currentColor" d="m11.71 15.29l2.59-2.59a.996.996 0 0 0 0-1.41L11.71 8.7c-.63-.62-1.71-.18-1.71.71v5.17c0 .9 1.08 1.34 1.71.71"/></g></svg><span class="underline"></span></a>
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
                <li class="nav-item dropdown hover">
                    <a class="nav-link active p-active pointer-cursor" aria-current="page">Berita <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g transform="rotate(90 12 12)"><path fill="currentColor" d="m11.71 15.29l2.59-2.59a.996.996 0 0 0 0-1.41L11.71 8.7c-.63-.62-1.71-.18-1.71.71v5.17c0 .9 1.08 1.34 1.71.71"/></g></svg><span class="underline"></span></a>
                    <div class="dropdown-content">
                        <div class="row">
                            <div class="col-xl-12">
                                <a href="/Pengumuman" class="text-decoration-none text-dark hover-text-nav btn">Pengumuman</a>
                            </div>
                            <div class="col-xl-12">
                                <a href="/Berita&Kegiatan" class="text-decoration-none text-dark hover-text-nav btn">Berita & Artikel</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown hover">
                    <a class="nav-link active p-active" aria-current="page" href="/Contact-Me">Kontak Kami<span class="underline"></span></a>
                </li>
            </ul>
        </div>
    </div>
</nav>