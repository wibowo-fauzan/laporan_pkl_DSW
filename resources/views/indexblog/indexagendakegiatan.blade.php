<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('sleacing.iconweb')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>News Agenda Kegiata</title>

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
            <h1 class="fw-bold">News Agenda Kegiata</h1>
        </center>
        <div class="path-link-beranda mt-5">
            <a href="/" class="text-decoration-none">Beranda ></a>
            <a href="/AgendaKegiatan" class="text-decoration-none">Agenda Kegiatan ></a>
            <a class="text-decoration-none text-dark">News Agenda Kegiata</a>
        </div>

        <div class="blog mt-5">
            <div class="image-container shadow p-3 mb-5 bg-body rounded p-2"
                style="width: 100%; position: relative; overflow: hidden;">
                <img class="rounded" style="object-fit: cover; aspect-ratio: 1/1; width: 50%; justify-content: center; align-content: center; margin: auto; display: flex;" src="{{ asset('storage/' . $agenda->image) }}" alt="" />
                <div class="container">
                    <p class="mt-3 container"> <b>{{ $agenda->title }} || {{ $agenda->date }}</b> <br /></p>
                    <p class="container">{!! $agenda->description !!}</p>
                    <hr>
                        <div class="d-flex gap-2">
                            <button class="btn btn-outline-secondary"><svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" viewBox="0 0 640 512"> <path fill="currentColor" d="M64 96c0-35.3 28.7-64 64-64h384c35.3 0 64 28.7 64 64v256h-64V96H128v256H64zM0 403.2C0 392.6 8.6 384 19.2 384h601.6c10.6 0 19.2 8.6 19.2 19.2c0 42.4-34.4 76.8-76.8 76.8H76.8C34.4 480 0 445.6 0 403.2M281 209l-31 31l31 31c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-48-48c-9.4-9.4-9.4-24.6 0-33.9l48-48c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9zm112-34l48 48c9.4 9.4 9.4 24.6 0 33.9l-48 48c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l31-31l-31-31c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0z" /> </svg></button>
                            <a href="https://www.instagram.com/depoksinglewindow/" target="_blank" class="btn btn-outline-primary"><svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" viewBox="0 0 24 24"> <path fill="currentColor" d="M16 7a1 1 0 1 1 2 0a1 1 0 0 1-2 0" /> <path fill="currentColor" fill-rule="evenodd" d="M12 7.25a4.75 4.75 0 1 0 0 9.5a4.75 4.75 0 0 0 0-9.5M8.75 12a3.25 3.25 0 1 1 6.5 0a3.25 3.25 0 0 1-6.5 0" clip-rule="evenodd" /> <path fill="currentColor" fill-rule="evenodd" d="M17.258 2.833a47.721 47.721 0 0 0-10.516 0c-2.012.225-3.637 1.81-3.873 3.832a45.922 45.922 0 0 0 0 10.67c.236 2.022 1.86 3.607 3.873 3.832a47.77 47.77 0 0 0 10.516 0c2.012-.225 3.637-1.81 3.873-3.832a45.914 45.914 0 0 0 0-10.67c-.236-2.022-1.86-3.607-3.873-3.832m-10.35 1.49a46.22 46.22 0 0 1 10.184 0c1.33.15 2.395 1.199 2.55 2.517a44.421 44.421 0 0 1 0 10.32a2.89 2.89 0 0 1-2.55 2.516a46.217 46.217 0 0 1-10.184 0a2.89 2.89 0 0 1-2.55-2.516a44.421 44.421 0 0 1 0-10.32a2.89 2.89 0 0 1 2.55-2.516" clip-rule="evenodd" /></svg></a>
                            <a href="https://web.facebook.com/p/Depok-Single-Window-100063885820560/?paipv=0&eav=AfbuQ-gAsJAf5TJ_pAXN_P9rhZsjycx1U19H-E7bpZXumeLki0LyOMBYGp0PuVISW6U&_rdc=1&_rdr" target="_blank" class="btn btn-outline-info"><svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" viewBox="0 0 24 24"><path fill="currentColor" d="M13 9h4.5l-.5 2h-4v9h-2v-9H7V9h4V7.128c0-1.783.186-2.43.534-3.082a3.635 3.635 0 0 1 1.512-1.512C13.698 2.186 14.345 2 16.128 2c.522 0 .98.05 1.372.15V4h-1.372c-1.324 0-1.727.078-2.139.298a1.63 1.63 0 0 0-.691.692c-.22.411-.298.814-.298 2.138z"/></svg></a>
                        </div>
                </div>
            </div>
        </div>

        @include('sleacing.footer')
        @include('linkbootstrap.js')
</body>

</html>
