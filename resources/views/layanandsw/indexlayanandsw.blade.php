<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('sleacing.iconweb')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Layanan DSW</title>
    @include('linkbootstrap.css')
</head>

<body>
    @include('sleacing.nav')

    <div class="container">
        <div class="path-link-beranda mt-5">
            <a href="/" class="text-decoration-none">Beranda ></a>
            <a class="text-decoration-none text-dark">Layanan DSW</a>
        </div>
        <div class="d-flex">
            <hr class="wdth-pndk-pls">
            <hr class="wdth-pndk-wrna">
        </div>
        <div class="blog mt-5 mb-5">
            <div class="row gap-2">
                <div class="col-xl-12">
                    <div class="row gap-5">
                        <div class="col-xl-2 shadow p-3 mb-5 bg-body rounded p-2" onclick="Pln()">
                            <div class="hover-image-layanan-image">
                                <img src="https://cms.depok.go.id/upload/externalLogo/2abf38002ebc9636ec2521b71182e928.png"
                                    class="rounded mx-auto d-block " width="50%" alt="">
                                <p class="text-center fw-bold mt-4 fs-4">Pln</p>
                            </div>
                        </div>
                        <div class="col-xl-2 shadow p-3 mb-5 bg-body rounded p-2 hover-image-layanan-image" onclick="Pendidikan()">
                            <div class="hover-image-layanan-image">
                                <img src="https://cms.depok.go.id/upload/externalLogo/a7077b58abe043023c7c02a33e3d9ae8.png"
                                    class="rounded mx-auto d-block " width="50%" alt="">
                                <p class="text-center fw-bold mt-4 fs-4">Pendidikan</p>
                            </div>
                        </div>
                        <div class="col-xl-2 shadow p-3 mb-5 bg-body rounded p-2 hover-image-layanan-image" onclick="Perpustakaan()">
                            <div class="hover-image-layanan-image">
                                <img src="https://cms.depok.go.id/upload/externalLogo/157e83d498870c1e18edcd95013a9c5d.png"
                                    class="rounded mx-auto d-block " width="50%" alt="">
                                <p class="text-center fw-bold mt-4 fs-4">Perpustakaan</p>
                            </div>
                        </div>
                        <div class="col-xl-2 shadow p-3 mb-5 bg-body rounded p-2 hover-image-layanan-image" onclick="PetaDepok()">
                            <div class="hover-image-layanan-image">
                                <img src="https://cms.depok.go.id/upload/externalLogo/a754d906d694f874da9baf4824ab7069.png"
                                    class="rounded mx-auto d-block " width="50%" alt="">
                                <p class="text-center fw-bold mt-4 fs-4">Peta</p>
                            </div>
                        </div>
                        <div class="col-xl-2 shadow p-3 mb-5 bg-body rounded p-2 hover-image-layanan-image" onclick="Transportasi()">
                            <div class="hover-image-layanan-image">
                                <img src="https://cms.depok.go.id/upload/externalLogo/fafecba56495a390f41f94308ff2cdd7.png"
                                    class="rounded mx-auto d-block " width="50%" alt="">
                                <p class="text-center fw-bold mt-4 fs-4">Transportasi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="center-tengah">
            <hr style="width: 10%;">
            <p class="fw-bold me-2 ms-2 mx-2">Form Layanan</p>
            <hr style="width: 10%;">
        </div>
    </div>
    @include('sleacing.footer')
    @include('linkbootstrap.js')
</body>

</html>
