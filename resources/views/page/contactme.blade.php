<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('sleacing.iconweb')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Me</title>
    @include('linkbootstrap.css')
</head>
<body>
    @include('sleacing.nav')

    <div class="container position-absolute top-50 start-50 translate-middle">
        <div class="path-link-beranda mt-5">
            <a href="/" class="text-decoration-none">Beranda ></a>
            <a class="text-decoration-none text-dark">Contac Us</a>
        </div>
        <div class="d-flex">
            <hr class="wdth-pndk-pls">
            <hr class="wdth-pndk-wrna">
        </div>
        <div class="card rounded py-5 p-5">
            <div class="row">
                <div class="col-xl-8">
                    <div class="container">
                        <h1>Contact Us</h1>
                        <div class="gairs-herizontal d-flex col-3">
                            <hr style="width: 100%; border: 2px solid black;">
                            <hr style="width: 100%; border: 2px solid blue;">
                            <hr style="width: 100%; border: 2px solid black;">
                        </div>
                        <form>
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="mb-3">
                                      <label for="full_name" class="form-label">Full Name</label>
                                      <input type="email" class="form-control" id="full_name" aria-describedby="full_name">
                                      <div id="full_name" class="form-text">We'll never share your email with anyone else.</div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="mb-3">
                                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="subject" class="form-label">Subject</label>
                                <input type="text" class="form-control" id="subject" aria-describedby="subject">
                                <div id="subject" class="form-text">We'll never share your email with anyone else.</div>
                              </div>
                            <div class="mb-3">
                              <label for="message" class="form-label">Message</label>
                              <input type="message" class="form-control" id="message">
                            </div>
                            <div class="mb-2">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                          </form>
                    </div>
                </div>
                <div class="col-xl-4">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126881.56976748213!2d106.73539626105148!3d-6.387671395033122!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e95620a297d3%3A0x1cfd4042316fb217!2sKota%20Depok%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1705947222246!5m2!1sid!2sid" width="100%" height="100%" style="border:0; border-radius: 10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>

    @include('linkbootstrap.js')
</body>
</html>