<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('sleacing.iconweb')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agenda Kegiatan</title>
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
            <h1 class="fw-bold">Agenda DSW</h1>
        </center>
        <div class="path-link-beranda mt-5">
            <a href="/" class="text-decoration-none">Beranda ></a>
            <a class="text-decoration-none text-dark">Agenda Kegiatan</a>
        </div>
        <div class="row mt-5">
            @foreach ($agendas as $agenda)
            <div class="col-xl-4 ">
                <div class="shadow p-3 mb-5 bg-body rounded p-2">
                    <img src="{{ asset('storage/' . $agenda->image) }}" alt="Logo" style="object-fit: cover; width: 100%; aspect-ratio: 1/1" class="hover-image agenda-image" data-id="{{ $agenda->id }}">
                    <p class="mt-4" style="width: 100%;"> <b>{{ $agenda->title }} || {{ $agenda->date }}</b> <br /></p>
                    <p>{{ Str::limit($agenda->description, 40) }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                // Menangani klik pada gambar agenda
                document.querySelectorAll('.agenda-image').forEach(function (image) {
                    image.addEventListener('click', function () {
                        // Mendapatkan ID dari atribut data-id
                        var agendaId = this.getAttribute('data-id');
                        // Pindah ke screen baru dengan ID sebagai parameter
                        window.location.href = '/agenda/details/' + agendaId;
                    });
                });
            });
        </script>
        @include('sleacing.footer')
        @include('linkbootstrap.js')
</body>

</html>
