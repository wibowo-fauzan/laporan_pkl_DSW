<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .center-tengah {
            display: flex;
            margin: auto;
            justify-content: center;
            align-content: center;
        }

        .wdth-pndk-pls {
            width: 100px;
            border: 2px solid rgb(2, 2, 237);
        }

        .wdth-pndk-wrna {
            width: 50px;
            border: 2px solid;
        }

        .card-img-cuaca {
            display: flex;
            margin: auto;
            width: 100px;
        }

        .garis-width-respon {
            border: 1.5px solid black;
        }

        .img-backgrund {
            background-position: center;
            background-image: url('https://dummy.smartcity.co.id/dpmptsp-depok/public/assets/img/perizinan/bg-footer.svg');
            object-fit: cover;
            background-repeat: no-repeat;
            width: 100%;
            height: 100%;
        }

        /* Add your existing styles here */

        /* Add your existing styles here */

        .navbar-nav .nav-item {
            position: relative;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            z-index: 1;
            opacity: 0;
            width: 250px;
            margin-top: 3px;
            padding: 20px;
        }

        .navbar-nav .nav-item:hover .dropdown-content {
            display: block;
            opacity: 1;
        }

        /* Add your existing styles here */

        .navbar-nav .nav-item {
            position: relative;
        }

        .underline {
            position: absolute;
            left: 0;
            bottom: 0;
            height: 2px;
            width: 0;
            background-color: #007bff;
            transition: width 0.3s ease-out;
        }

        .navbar-nav .nav-item:hover .underline {
            width: 70%;
        }

        /* .belance-space {
            margin-top: 10% !important;
            margin-bottom: 10% !important;
        } */

        .hover-text-nav {
            transition: 0.2s;
            /* margin-top: 10px; */
        }

        .hover-text-nav:hover {
            margin-left: 10px;
            background-color: rgba(245, 222, 179, 0.508);
            /* padding: 10px; */
        }

        .pointer-cursor {
            cursor: pointer;
        }

        .hover-image {
            cursor: pointer;
            width: 99%;
            height: 100%;
            object-fit: cover;
            transition: 0.2s;
            
        }

        .hover-image:hover {
            padding: 5px;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .hover-image-layanan-image {
            cursor: pointer;
            object-fit: cover;
            transition: 0.2s;
        }

        .hover-image-layanan-image:hover {
            padding-inline-end: 10px;
            object-fit: cover;
        }

        .overlay {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            opacity: 0;
            transition: opacity 0.3s;
        }

        .image-container:hover .overlay {
            opacity: 1;
        }

        .center-btn:hover {
            transform: scale(1.1);
        }   

        @media only screen and (max-width: 600px) {
            .content-footer-responsive {
                justify-content: center;
                align-content: center;
                margin: auto;
            }
        }

        @media only screen and (max-width: 450px) {
            
        }

    </style>
</head>
