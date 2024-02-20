<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('sleacing.iconweb')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create - Agenda Kegiatan</title>
    @include('linkbootstrap.css')
</head>

<body>
    <div class="container position-absolute top-50 start-50 translate-middle">
        <div class="path-link-beranda mt-5">
            <a href="/admin/dashboard/dataagenda" class="text-decoration-none">Dashbord Data Agenda Kegiatan ></a>
            <a class="text-decoration-none text-dark">Create - Data Agenda Kegiatan</a>
        </div>
        <div class="d-flex">
            <hr class="wdth-pndk-pls">
            <hr class="wdth-pndk-wrna">
        </div>
        <div class="shadow-lg p-3 mb-5 bg-body rounded">
            <div class="card-body">
                <h1>Create Agenda Kegiatan</h1>
                <div class="p-2">
                    <form action="{{ route('agendas.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Judul Agenda Kegiatan</label>
                            <input type="text" name="title" id="title" class="form-control" id="title"
                                aria-describedby="title" required>
                            <div id="title" class="form-text">Isi Dengan Judul Agenda Kegiatan Depok</div>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Deskripsi Agenda Kegiatan</label>
                            <textarea name="description" id="description" class="form-control" id="description" aria-describedby="description" required rows="5">{!! old('description') !!}</textarea>
                            <div id="description" class="form-text">Isi Dengan Deskripsi Agenda Kegiatan Depok</div>
                        </div>                        
                        <div class="mb-3">
                            <label for="image" class="form-label">Gambar Agenda Kegiatan</label>
                            <input type="file" name="image" id="image" class="form-control" id="image" accept="image/*" aria-describedby="image" required>
                            <div id="image" class="form-text">Isi Dengan Image/Gambar Agenda Kegiatan Depok</div>
                        </div>
                        <div class="mb-3">
                            <label for="date" class="form-label">Date Agenda Kegiatan</label>
                            <input type="date" name="date" id="date" class="form-control" id="date" aria-describedby="date" required>
                            <div id="date" class="form-text">Isi Dengan Date Update Agenda Kegiatan Depok</div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('linkbootstrap.js')
</body>

</html>