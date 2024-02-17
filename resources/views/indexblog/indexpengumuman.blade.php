<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('sleacing.iconweb')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>News Pengumuman</title>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Hans McMurdy">
        <title>Bootstrap 5 Navbar Bottom Template · Bootstrap</title>
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
            <h1 class="fw-bold">News Pengumuman</h1>
        </center>
        <div class="path-link-beranda mt-5">
            <a href="/" class="text-decoration-none">Beranda ></a>
            <a href="/Pengumuman" class="text-decoration-none">Pengumuman></a>
            <a class="text-decoration-none text-dark">News Pengumuman</a>
            
        </div>

        <div class="blog mt-5">
            @foreach ($pengumumans as $pengumuman)
            <div class="image-container shadow p-3 mb-5 bg-body rounded p-2" style="width: 100%; position: relative; overflow: hidden;">
                    <a href="">
                        <img class="rounded" style="object-fit: cover; aspect-ratio: 1/1; width: 50%; justify-content: center; align-content: center; margin: auto; display: flex;" src="{{ asset('storage/' . $pengumuman->image) }}" alt="" />
                    </a>
                    <p class="mt-3"> <b>{{ $pengumuman->title }} || {{ $pengumuman->date }}</b> <br /></p>
                    <p class="container">{{ $pengumuman->description }}</p>
                </div>
            @endforeach
        </div>
    </div>

    @include('sleacing.footer')
    @include('linkbootstrap.js')
</body>

</html>
