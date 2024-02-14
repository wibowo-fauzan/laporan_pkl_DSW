<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('sleacing.iconweb')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Error Logout</title>
    @include('linkbootstrap.css')
</head>

<body>
    <div class="container position-absolute top-50 start-50 translate-middle">
        <div class="card rounded py-5 p-5">
            <div class="row">
                <div class="col-xl-8">
                    <div class="container">
                        <h1>Warning!!!</h1>
                        <div class="gairs-herizontal d-flex col-3">
                            <hr style="width: 100%; border: 2px solid black;">
                            <hr style="width: 100%; border: 2px solid blue;">
                            <hr style="width: 100%; border: 2px solid black;">
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="mb-4">
                                    <p>Kamu Lupa Logout,Silahkan Log out terlebih Dahulu</p>
                                </div>
                                <div class="d-flex gap-4">

                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-outline-primary">Logout</button>
                                    </form>
                                    <form action="/admin/dashboard" method="GET">
                                        @csrf
                                        <button type="submit" class="btn btn-primary">Back Dashboard
                                            Admin</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <img src="https://www.zarla.com/images/zarla-logo-seram.jpeg?crop=40:21,smart&width=1200&dpr=2"
                        width="100%" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="container position-absolute top-50 start-50 translate-middle">


    </div>
</body>

</html>
