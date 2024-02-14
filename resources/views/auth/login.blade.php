<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @include('linkbootstrap.csslogin')
    @include('linkbootstrap.css')
</head>

<body>
    <div id="adminModal" class="rounded-3">
        <label for="adminName">Apakah kamu admin? Masukkan nama admin:</label>
        <input type="password" class="form-control" id="adminName" required>
        <button class="btn btn-primary" onclick="checkAdmin()">Hanya Admin Yang Boleh Masuk</button>
    </div>

    {{-- <h2>Login</h2> --}}
    @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif
    <section class="none-12 background-radial-gradient overflow-hidden position-absolute top-50 start-50 translate-middle rounded-3" style="display: none;">
        <div class="p-2">
            <a href="/" class="btn btn-primary">Back</a>
        </div>
        <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
            <div class="row gx-lg-5 align-items-center mb-5">
                <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                    <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)"> DSW <br /> <span
                            style="color: hsl(218, 81%, 75%)">Depok Singel Window</span>
                    </h1>
                    <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Temporibus, expedita iusto veniam atque, magni tempora mollitia
                        dolorum consequatur nulla, neque debitis eos reprehenderit quasi
                        ab ipsum nisi dolorem modi. Quos?
                    </p>
                </div>

                <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                    <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                    <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                    <div class="card bg-glass">
                        <div class="card-body px-4 py-5 px-md-5">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example3">Email address</label>
                                    <input type="email" name="email" id="email" class="form-control" required>

                                </div>

                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example4">Password</label>
                                    <input type="password" name="password" id="password" class="form-control" required>
                                </div>

                                <!-- Submit button -->
                                <button type="submit" class="btn btn-primary btn-block mb-4">
                                    Hanya Admin Yang Masuk
                                </button>
                                <!-- Error Modal -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('linkbootstrap.jslogin')
</body>

</html>
