<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('sleacing.iconweb')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View - Agenda Kegiatan</title>
    @include('linkbootstrap.css')
</head>
<body>
    <div class="container position-absolute top-50 start-50 translate-middle">
        <div class="path-link-beranda mt-5">
            <a href="/admin/dashboard/dataagenda" class="text-decoration-none">Dashbord Data Agenda Kegiatan ></a>
            <a class="text-decoration-none text-dark">Show - Data Agenda Kegiatan</a>
        </div>
        <div class="d-flex">
            <hr class="wdth-pndk-pls">
            <hr class="wdth-pndk-wrna">
        </div>
        <div class="shadow-lg p-3 mb-5 bg-body rounded">
            <div class="card-body">
                <h1>Show Agenda Kegiatan</h1>
                <div class="p-2">
                    @foreach ($agendas as $agenda)
            <div class="col-xl-4 ">
                <div class="shadow p-3 mb-5 bg-body rounded p-2">
                    <img class="rounded hover-image" style="object-fit: cover; width: 100%; aspect-ratio: 1/1"
                        src="{{ asset('storage/' . $agenda->image) }}" alt="" />
                    <p class="mt-4" style="width: 100%;"> <b>{{ $agenda->title }} || {{ $agenda->date }}</b> <br /></p>
                    <p>{{ Str::limit($agenda->description, 40) }}</p>
                </div>
            </div>
            @endforeach
                </div>
            </div>
        </div>
    </div>

    @include('linkbootstrap.js')
</body>
</html>