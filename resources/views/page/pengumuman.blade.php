<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('sleacing.iconweb')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pengumuman</title>
    @include('linkbootstrap.css')
</head>

<body>
    @include('sleacing.nav')

    <div class="container">
        <center>
            <div class="gairs-herizontal d-flex col-3 mt-5">
                <hr style="width: 100%; border: 2px solid black;">
                <hr style="width: 100%; border: 2px solid blue;">
                <hr style="width: 100%; border: 2px solid black;">
            </div>
            <h1 class="fw-bold">Pengumuman DSW</h1>
        </center>
        <div class="path-link-beranda mt-5">
            <a href="/" class="text-decoration-none">Beranda ></a>
            <a class="text-decoration-none text-dark">Pengumuman</a>
        </div>
        <div class="row mt-5">
            @foreach ($pengumumans as $Pengumuman)
            <div class="col-xl-4">
                <div class="shadow p-3 mb-5 bg-body rounded p-2">
                    <img src="{{ asset('storage/' . $Pengumuman->image) }}" alt="Logo" style="object-fit: cover; width: 100%; aspect-ratio: 1/1" class="hover-image pengumuman-image" data-id="{{ $Pengumuman->id }}">
                    <p class="mt-4" style="width: 100%;"> <b>{{ $Pengumuman->title }} || {{ $Pengumuman->date }}</b> <br /></p>
                    <p>{{ Str::limit($Pengumuman->description, 40) }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('.pengumuman-image').forEach(function (image) {
                image.addEventListener('click', function () {
                    var pengumumanId = this.getAttribute('data-id');
                    console.log('Pengumuman ID:', pengumumanId); // Tambahkan ini untuk memeriksa nilai
                    window.location.href = '/pengumuman/detail/' + pengumumanId;
                });
            });
        });
    </script>
    

    @include('sleacing.footer')

    @include('linkbootstrap.js')
</body>

</html>
