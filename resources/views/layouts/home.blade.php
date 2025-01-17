<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>AIR WING TICKETS</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ asset('assets/voyage') }}/assets/img/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('assets/voyage') }}/assets/img/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('assets/voyage') }}/assets/img/favicons/favicon.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/voyage') }}/assets/img/favicons/favicon.ico">
    <link rel="manifest" href="{{ asset('assets/voyage') }}/assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="{{ asset('assets/voyage') }}/assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="{{ asset('assets/voyage') }}/assets/css/theme.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="
https://cdn.jsdelivr.net/npm/sweetalert2@11.10.5/dist/sweetalert2.min.css
" rel="stylesheet">
    <style>
        .custom-dropdown>a {
            color: #000;
        }

        .custom-dropdown>a .arrow {
            display: inline-block;
            position: relative;
            -webkit-transition: .3s transform ease;
            -o-transition: .3s transform ease;
            transition: .3s transform ease;
        }

        .custom-dropdown.show>a .arrow {
            -webkit-transform: rotate(-180deg);
            -ms-transform: rotate(-180deg);
            transform: rotate(-180deg);
        }

        .custom-dropdown .btn:active,
        .custom-dropdown .btn:focus {
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            outline: none;
        }

        .custom-dropdown .btn.btn-custom {
            border: 1px solid #efefef;
        }

        .custom-dropdown .title-wrap {
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .custom-dropdown .title {
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .custom-dropdown .dropdown-link .profile-pic {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 50px;
            flex: 0 0 50px;
        }

        .custom-dropdown .dropdown-link .profile-pic img {
            width: 50px;
            border-radius: 50%;
        }

        .custom-dropdown .dropdown-link .profile-info h3,
        .custom-dropdown .dropdown-link .profile-info span {
            margin: 0;
            padding: 0;
        }

        .custom-dropdown .dropdown-link .profile-info h3 {
            font-size: 16px;
        }

        .custom-dropdown .dropdown-link .profile-info span {
            display: block;
            font-size: 13px;
        }

        .custom-dropdown .dropdown-menu {
            border: 1px solid transparent !important;
            -webkit-box-shadow: 0 15px 30px 0 rgba(0, 0, 0, 0.2);
            box-shadow: 0 15px 30px 0 rgba(0, 0, 0, 0.2);
            margin-top: -10px !important;
            padding-top: 0;
            padding-bottom: 0;
            opacity: 0;
            border-radius: 0;
            background: #fff;
            right: auto !important;
            left: auto !important;
            -webkit-transition: .3s margin-top ease, .3s opacity ease, .3s visibility ease;
            -o-transition: .3s margin-top ease, .3s opacity ease, .3s visibility ease;
            transition: .3s margin-top ease, .3s opacity ease, .3s visibility ease;
            visibility: hidden;
        }

        .custom-dropdown .dropdown-menu.active {
            opacity: 1;
            visibility: visible;
            margin-top: 0px !important;
        }

        .custom-dropdown .dropdown-menu a {
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
            font-size: 14px;
            padding: 15px 15px;
            position: relative;
            color: #b2bac1;
        }

        .custom-dropdown .dropdown-menu a:last-child {
            border-bottom: none;
        }

        .custom-dropdown .dropdown-menu a .icon {
            /* margin-right: px; */
            /* display: inline-block; */
        }

        .custom-dropdown .dropdown-menu a:hover,
        .custom-dropdown .dropdown-menu a:active,
        .custom-dropdown .dropdown-menu a:focus {
            background: #fff;
            color: #000;
        }

        .custom-dropdown .dropdown-menu a:hover .number,
        .custom-dropdown .dropdown-menu a:active .number,
        .custom-dropdown .dropdown-menu a:focus .number {
            color: #fff;
        }

        .custom-dropdown .dropdown-menu a .number {
            padding: 2px 6px;
            font-size: 11px;
            background: #fd7e14;
            position: absolute;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
            right: 15px;
            border-radius: 4px;
            color: #fff;
        }
    </style>
    @stack('css')
</head>


<body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <x-navbar />
        @yield('content')


        {{-- <section id="testimonial">
            <div class="container">
                <div class="row h-100">
                    <div class="col-lg-7 mx-auto text-center mb-6">
                        <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3">Flash Deals</h5>
                    </div>
                    <div class="col-12">
                        <div class="carousel slide" id="carouselTestimonials" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="10000">
                                    <div class="row h-100 align-items-center g-2">
                                        <div class="col-md-4 mb-3 mb-md-0 h-100">
                                            <div class="card card-span h-100 text-white"><img class="img-fluid h-100"
                                                    src="{{ asset('assets/voyage') }}/assets/img/gallery/maldives.png"
                                                    alt="..." />
                                                <div class="card-img-overlay ps-0"><span
                                                        class="badge bg-primary ms-3 me-1 p-2"><i
                                                            class="fas fa-clock me-1"></i><span>20:04:32:21</span></span><span
                                                        class="badge bg-secondary p-2"><i
                                                            class="fas fa-bolt me-1"></i><span>trending</span><i
                                                            class="fas fa-bolt ms-1"> </i></span></div>
                                                <div class="card-body ps-0">
                                                    <h5 class="fw-bold text-1000 mb-4 text-truncate">Mermaid Beach
                                                        Resort: The most joyful way to spend your holiday</h5>
                                                    <div class="d-flex align-items-center justify-content-start"><span
                                                            class="text-800 fs--1 me-2"><i
                                                                class="fas fa-map-marker-alt"></i></span><span
                                                            class="text-900 me-3">Maldives</span><span
                                                            class="text-800 fs--1 me-2"><i
                                                                class="fas fa-calendar"></i></span><span
                                                            class="text-900">4 days</span></div>
                                                    <p class="text-decoration-line-through text-900 mt-3 mb-0">$200</p>
                                                    <h1 class="mb-3 text-primary fw-bolder fs-4"><span>$175</span><span
                                                            class="text-900 fs--1 fw-normal">/Per person</span></h1>
                                                    <span class="badge bg-soft-secondary p-2"><i
                                                            class="fas fa-tag text-secondary fs--1 me-1"></i><span
                                                            class="text-secondary fw-normal fs-1">-15%</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3 mb-md-0 h-100">
                                            <div class="card card-span h-100 text-white"><img class="img-fluid h-100"
                                                    src="{{ asset('assets/voyage') }}/assets/img/gallery/cinnamon.png"
                                                    alt="..." />
                                                <div class="card-img-overlay ps-0"><span
                                                        class="badge bg-primary ms-3 me-1 p-2"><i
                                                            class="fas fa-clock me-1"></i><span>20:04:32:21</span></span><span
                                                        class="badge bg-secondary p-2"><i
                                                            class="fas fa-bolt me-1"></i><span>trending</span><i
                                                            class="fas fa-bolt ms-1"> </i></span></div>
                                                <div class="card-body ps-0">
                                                    <h5 class="fw-bold text-1000 mb-4 text-truncate">Bora Bora: Enjoy a
                                                        romantic cruise tour of at the sunny side of life</h5>
                                                    <div class="d-flex align-items-center justify-content-start"><span
                                                            class="text-800 fs--1 me-2"><i
                                                                class="fas fa-map-marker-alt"></i></span><span
                                                            class="text-900 me-3">Maldives</span><span
                                                            class="text-800 fs--1 me-2"><i
                                                                class="fas fa-calendar"></i></span><span
                                                            class="text-900">4 days</span></div>
                                                    <p class="text-decoration-line-through text-900 mt-3 mb-0">$300</p>
                                                    <h1 class="mb-3 text-primary fw-bolder fs-4"><span>$250</span><span
                                                            class="text-900 fs--1 fw-normal">/Per person</span></h1>
                                                    <span class="badge bg-soft-secondary p-2"><i
                                                            class="fas fa-tag text-secondary fs--1 me-1"></i><span
                                                            class="text-secondary fw-normal fs-1">-15%</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3 mb-md-0 h-100">
                                            <div class="card card-span h-100 text-white"><img class="img-fluid h-100"
                                                    src="{{ asset('assets/voyage') }}/assets/img/gallery/dhigu.png"
                                                    alt="..." />
                                                <div class="card-img-overlay ps-0"><span
                                                        class="badge bg-primary ms-3 me-1 p-2"><i
                                                            class="fas fa-clock me-1"></i><span>20:04:32:21</span></span><span
                                                        class="badge bg-secondary p-2"><i
                                                            class="fas fa-bolt me-1"></i><span>trending</span><i
                                                            class="fas fa-bolt ms-1"> </i></span></div>
                                                <div class="card-body ps-0">
                                                    <h5 class="fw-bold text-1000 mb-4 text-truncate">Fihalhohi Island
                                                        Resort: Luxury destination without compromise</h5>
                                                    <div class="d-flex align-items-center justify-content-start"><span
                                                            class="text-800 fs--1 me-2"><i
                                                                class="fas fa-map-marker-alt"></i></span><span
                                                            class="text-900 me-3">Maldives</span><span
                                                            class="text-800 fs--1 me-2"><i
                                                                class="fas fa-calendar"></i></span><span
                                                            class="text-900">4 days</span></div>
                                                    <p class="text-decoration-line-through text-900 mt-3 mb-0">$375</p>
                                                    <h1 class="mb-3 text-primary fw-bolder fs-4"><span>$300</span><span
                                                            class="text-900 fs--1 fw-normal">/Per person</span></h1>
                                                    <span class="badge bg-soft-secondary p-2"><i
                                                            class="fas fa-tag text-secondary fs--1 me-1"></i><span
                                                            class="text-secondary fw-normal fs-1">-15%</span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item" data-bs-interval="5000">
                                    <div class="row h-100 align-items-center g-2">
                                        <div class="col-md-4 mb-3 mb-md-0 h-100">
                                            <div class="card card-span h-100 text-white"><img class="img-fluid h-100"
                                                    src="{{ asset('assets/voyage') }}/assets/img/gallery/maldives.png"
                                                    alt="..." />
                                                <div class="card-img-overlay ps-0"><span
                                                        class="badge bg-primary ms-3 me-1 p-2"><i
                                                            class="fas fa-clock me-1"></i><span>20:04:32:21</span></span><span
                                                        class="badge bg-secondary p-2"><i
                                                            class="fas fa-bolt me-1"></i><span>trending</span><i
                                                            class="fas fa-bolt ms-1"> </i></span></div>
                                                <div class="card-body ps-0">
                                                    <h5 class="fw-bold text-1000 mb-4 text-truncate">Mermaid Beach
                                                        Resort: The most joyful way to spend your holiday</h5>
                                                    <div class="d-flex align-items-center justify-content-start"><span
                                                            class="text-800 fs--1 me-2"><i
                                                                class="fas fa-map-marker-alt"></i></span><span
                                                            class="text-900 me-3">Maldives</span><span
                                                            class="text-800 fs--1 me-2"><i
                                                                class="fas fa-calendar"></i></span><span
                                                            class="text-900">4 days</span></div>
                                                    <p class="text-decoration-line-through text-900 mt-3 mb-0">$200</p>
                                                    <h1 class="mb-3 text-primary fw-bolder fs-4"><span>$175</span><span
                                                            class="text-900 fs--1 fw-normal">/Per person</span></h1>
                                                    <span class="badge bg-soft-secondary p-2"><i
                                                            class="fas fa-tag text-secondary fs--1 me-1"></i><span
                                                            class="text-secondary fw-normal fs-1">-15%</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3 mb-md-0 h-100">
                                            <div class="card card-span h-100 text-white"><img class="img-fluid h-100"
                                                    src="{{ asset('assets/voyage') }}/assets/img/gallery/cinnamon.png"
                                                    alt="..." />
                                                <div class="card-img-overlay ps-0"><span
                                                        class="badge bg-primary ms-3 me-1 p-2"><i
                                                            class="fas fa-clock me-1"></i><span>20:04:32:21</span></span><span
                                                        class="badge bg-secondary p-2"><i
                                                            class="fas fa-bolt me-1"></i><span>trending</span><i
                                                            class="fas fa-bolt ms-1"> </i></span></div>
                                                <div class="card-body ps-0">
                                                    <h5 class="fw-bold text-1000 mb-4 text-truncate">Bora Bora: Enjoy a
                                                        romantic cruise tour of at the sunny side of life</h5>
                                                    <div class="d-flex align-items-center justify-content-start"><span
                                                            class="text-800 fs--1 me-2"><i
                                                                class="fas fa-map-marker-alt"></i></span><span
                                                            class="text-900 me-3">Maldives</span><span
                                                            class="text-800 fs--1 me-2"><i
                                                                class="fas fa-calendar"></i></span><span
                                                            class="text-900">4 days</span></div>
                                                    <p class="text-decoration-line-through text-900 mt-3 mb-0">$300</p>
                                                    <h1 class="mb-3 text-primary fw-bolder fs-4"><span>$250</span><span
                                                            class="text-900 fs--1 fw-normal">/Per person</span></h1>
                                                    <span class="badge bg-soft-secondary p-2"><i
                                                            class="fas fa-tag text-secondary fs--1 me-1"></i><span
                                                            class="text-secondary fw-normal fs-1">-15%</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3 mb-md-0 h-100">
                                            <div class="card card-span h-100 text-white"><img class="img-fluid h-100"
                                                    src="{{ asset('assets/voyage') }}/assets/img/gallery/dhigu.png"
                                                    alt="..." />
                                                <div class="card-img-overlay ps-0"><span
                                                        class="badge bg-primary ms-3 me-1 p-2"><i
                                                            class="fas fa-clock me-1"></i><span>20:04:32:21</span></span><span
                                                        class="badge bg-secondary p-2"><i
                                                            class="fas fa-bolt me-1"></i><span>trending</span><i
                                                            class="fas fa-bolt ms-1"> </i></span></div>
                                                <div class="card-body ps-0">
                                                    <h5 class="fw-bold text-1000 mb-4 text-truncate">Fihalhohi Island
                                                        Resort: Luxury destination without compromise</h5>
                                                    <div class="d-flex align-items-center justify-content-start"><span
                                                            class="text-800 fs--1 me-2"><i
                                                                class="fas fa-map-marker-alt"></i></span><span
                                                            class="text-900 me-3">Maldives</span><span
                                                            class="text-800 fs--1 me-2"><i
                                                                class="fas fa-calendar"></i></span><span
                                                            class="text-900">4 days</span></div>
                                                    <p class="text-decoration-line-through text-900 mt-3 mb-0">$375</p>
                                                    <h1 class="mb-3 text-primary fw-bolder fs-4"><span>$300</span><span
                                                            class="text-900 fs--1 fw-normal">/Per person</span></h1>
                                                    <span class="badge bg-soft-secondary p-2"><i
                                                            class="fas fa-tag text-secondary fs--1 me-1"></i><span
                                                            class="text-secondary fw-normal fs-1">-15%</span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item" data-bs-interval="3000">
                                    <div class="row h-100 align-items-center g-2">
                                        <div class="col-md-4 mb-3 mb-md-0 h-100">
                                            <div class="card card-span h-100 text-white"><img class="img-fluid h-100"
                                                    src="{{ asset('assets/voyage') }}/assets/img/gallery/maldives.png"
                                                    alt="..." />
                                                <div class="card-img-overlay ps-0"><span
                                                        class="badge bg-primary ms-3 me-1 p-2"><i
                                                            class="fas fa-clock me-1"></i><span>20:04:32:21</span></span><span
                                                        class="badge bg-secondary p-2"><i
                                                            class="fas fa-bolt me-1"></i><span>trending</span><i
                                                            class="fas fa-bolt ms-1"> </i></span></div>
                                                <div class="card-body ps-0">
                                                    <h5 class="fw-bold text-1000 mb-4 text-truncate">Mermaid Beach
                                                        Resort: The most joyful way to spend your holiday</h5>
                                                    <div class="d-flex align-items-center justify-content-start"><span
                                                            class="text-800 fs--1 me-2"><i
                                                                class="fas fa-map-marker-alt"></i></span><span
                                                            class="text-900 me-3">Maldives</span><span
                                                            class="text-800 fs--1 me-2"><i
                                                                class="fas fa-calendar"></i></span><span
                                                            class="text-900">4 days</span></div>
                                                    <p class="text-decoration-line-through text-900 mt-3 mb-0">$200</p>
                                                    <h1 class="mb-3 text-primary fw-bolder fs-4"><span>$175</span><span
                                                            class="text-900 fs--1 fw-normal">/Per person</span></h1>
                                                    <span class="badge bg-soft-secondary p-2"><i
                                                            class="fas fa-tag text-secondary fs--1 me-1"></i><span
                                                            class="text-secondary fw-normal fs-1">-15%</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3 mb-md-0 h-100">
                                            <div class="card card-span h-100 text-white"><img class="img-fluid h-100"
                                                    src="{{ asset('assets/voyage') }}/assets/img/gallery/cinnamon.png"
                                                    alt="..." />
                                                <div class="card-img-overlay ps-0"><span
                                                        class="badge bg-primary ms-3 me-1 p-2"><i
                                                            class="fas fa-clock me-1"></i><span>20:04:32:21</span></span><span
                                                        class="badge bg-secondary p-2"><i
                                                            class="fas fa-bolt me-1"></i><span>trending</span><i
                                                            class="fas fa-bolt ms-1"> </i></span></div>
                                                <div class="card-body ps-0">
                                                    <h5 class="fw-bold text-1000 mb-4 text-truncate">Bora Bora: Enjoy a
                                                        romantic cruise tour of at the sunny side of life</h5>
                                                    <div class="d-flex align-items-center justify-content-start"><span
                                                            class="text-800 fs--1 me-2"><i
                                                                class="fas fa-map-marker-alt"></i></span><span
                                                            class="text-900 me-3">Maldives</span><span
                                                            class="text-800 fs--1 me-2"><i
                                                                class="fas fa-calendar"></i></span><span
                                                            class="text-900">4 days</span></div>
                                                    <p class="text-decoration-line-through text-900 mt-3 mb-0">$300</p>
                                                    <h1 class="mb-3 text-primary fw-bolder fs-4"><span>$250</span><span
                                                            class="text-900 fs--1 fw-normal">/Per person</span></h1>
                                                    <span class="badge bg-soft-secondary p-2"><i
                                                            class="fas fa-tag text-secondary fs--1 me-1"></i><span
                                                            class="text-secondary fw-normal fs-1">-15%</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3 mb-md-0 h-100">
                                            <div class="card card-span h-100 text-white"><img class="img-fluid h-100"
                                                    src="{{ asset('assets/voyage') }}/assets/img/gallery/dhigu.png"
                                                    alt="..." />
                                                <div class="card-img-overlay ps-0"><span
                                                        class="badge bg-primary ms-3 me-1 p-2"><i
                                                            class="fas fa-clock me-1"></i><span>20:04:32:21</span></span><span
                                                        class="badge bg-secondary p-2"><i
                                                            class="fas fa-bolt me-1"></i><span>trending</span><i
                                                            class="fas fa-bolt ms-1"> </i></span></div>
                                                <div class="card-body ps-0">
                                                    <h5 class="fw-bold text-1000 mb-4 text-truncate">Fihalhohi Island
                                                        Resort: Luxury destination without compromise</h5>
                                                    <div class="d-flex align-items-center justify-content-start"><span
                                                            class="text-800 fs--1 me-2"><i
                                                                class="fas fa-map-marker-alt"></i></span><span
                                                            class="text-900 me-3">Maldives</span><span
                                                            class="text-800 fs--1 me-2"><i
                                                                class="fas fa-calendar"></i></span><span
                                                            class="text-900">4 days</span></div>
                                                    <p class="text-decoration-line-through text-900 mt-3 mb-0">$375</p>
                                                    <h1 class="mb-3 text-primary fw-bolder fs-4"><span>$300</span><span
                                                            class="text-900 fs--1 fw-normal">/Per person</span></h1>
                                                    <span class="badge bg-soft-secondary p-2"><i
                                                            class="fas fa-tag text-secondary fs--1 me-1"></i><span
                                                            class="text-secondary fw-normal fs-1">-15%</span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row h-100 align-items-center g-2">
                                        <div class="col-md-4 mb-3 mb-md-0 h-100">
                                            <div class="card card-span h-100 text-white"><img class="img-fluid h-100"
                                                    src="{{ asset('assets/voyage') }}/assets/img/gallery/maldives.png"
                                                    alt="..." />
                                                <div class="card-img-overlay ps-0"><span
                                                        class="badge bg-primary ms-3 me-1 p-2"><i
                                                            class="fas fa-clock me-1"></i><span>20:04:32:21</span></span><span
                                                        class="badge bg-secondary p-2"><i
                                                            class="fas fa-bolt me-1"></i><span>trending</span><i
                                                            class="fas fa-bolt ms-1"> </i></span></div>
                                                <div class="card-body ps-0">
                                                    <h5 class="fw-bold text-1000 mb-4 text-truncate">Mermaid Beach
                                                        Resort: The most joyful way to spend your holiday</h5>
                                                    <div class="d-flex align-items-center justify-content-start"><span
                                                            class="text-800 fs--1 me-2"><i
                                                                class="fas fa-map-marker-alt"></i></span><span
                                                            class="text-900 me-3">Maldives</span><span
                                                            class="text-800 fs--1 me-2"><i
                                                                class="fas fa-calendar"></i></span><span
                                                            class="text-900">4 days</span></div>
                                                    <p class="text-decoration-line-through text-900 mt-3 mb-0">$200</p>
                                                    <h1 class="mb-3 text-primary fw-bolder fs-4"><span>$175</span><span
                                                            class="text-900 fs--1 fw-normal">/Per person</span></h1>
                                                    <span class="badge bg-soft-secondary p-2"><i
                                                            class="fas fa-tag text-secondary fs--1 me-1"></i><span
                                                            class="text-secondary fw-normal fs-1">-15%</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3 mb-md-0 h-100">
                                            <div class="card card-span h-100 text-white"><img class="img-fluid h-100"
                                                    src="{{ asset('assets/voyage') }}/assets/img/gallery/cinnamon.png"
                                                    alt="..." />
                                                <div class="card-img-overlay ps-0"><span
                                                        class="badge bg-primary ms-3 me-1 p-2"><i
                                                            class="fas fa-clock me-1"></i><span>20:04:32:21</span></span><span
                                                        class="badge bg-secondary p-2"><i
                                                            class="fas fa-bolt me-1"></i><span>trending</span><i
                                                            class="fas fa-bolt ms-1"> </i></span></div>
                                                <div class="card-body ps-0">
                                                    <h5 class="fw-bold text-1000 mb-4 text-truncate">Bora Bora: Enjoy a
                                                        romantic cruise tour of at the sunny side of life</h5>
                                                    <div class="d-flex align-items-center justify-content-start"><span
                                                            class="text-800 fs--1 me-2"><i
                                                                class="fas fa-map-marker-alt"></i></span><span
                                                            class="text-900 me-3">Maldives</span><span
                                                            class="text-800 fs--1 me-2"><i
                                                                class="fas fa-calendar"></i></span><span
                                                            class="text-900">4 days</span></div>
                                                    <p class="text-decoration-line-through text-900 mt-3 mb-0">$300</p>
                                                    <h1 class="mb-3 text-primary fw-bolder fs-4"><span>$250</span><span
                                                            class="text-900 fs--1 fw-normal">/Per person</span></h1>
                                                    <span class="badge bg-soft-secondary p-2"><i
                                                            class="fas fa-tag text-secondary fs--1 me-1"></i><span
                                                            class="text-secondary fw-normal fs-1">-15%</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3 mb-md-0 h-100">
                                            <div class="card card-span h-100 text-white"><img class="img-fluid h-100"
                                                    src="{{ asset('assets/voyage') }}/assets/img/gallery/dhigu.png"
                                                    alt="..." />
                                                <div class="card-img-overlay ps-0"><span
                                                        class="badge bg-primary ms-3 me-1 p-2"><i
                                                            class="fas fa-clock me-1"></i><span>20:04:32:21</span></span><span
                                                        class="badge bg-secondary p-2"><i
                                                            class="fas fa-bolt me-1"></i><span>trending</span><i
                                                            class="fas fa-bolt ms-1"> </i></span></div>
                                                <div class="card-body ps-0">
                                                    <h5 class="fw-bold text-1000 mb-4 text-truncate">Fihalhohi Island
                                                        Resort: Luxury destination without compromise</h5>
                                                    <div class="d-flex align-items-center justify-content-start"><span
                                                            class="text-800 fs--1 me-2"><i
                                                                class="fas fa-map-marker-alt"></i></span><span
                                                            class="text-900 me-3">Maldives</span><span
                                                            class="text-800 fs--1 me-2"><i
                                                                class="fas fa-calendar"></i></span><span
                                                            class="text-900">4 days</span></div>
                                                    <p class="text-decoration-line-through text-900 mt-3 mb-0">$375</p>
                                                    <h1 class="mb-3 text-primary fw-bolder fs-4"><span>$300</span><span
                                                            class="text-900 fs--1 fw-normal">/Per person</span></h1>
                                                    <span class="badge bg-soft-secondary p-2"><i
                                                            class="fas fa-tag text-secondary fs--1 me-1"></i><span
                                                            class="text-secondary fw-normal fs-1">-15%</span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carouselTestimonials" data-bs-slide="prev"><span
                                            class="carousel-control-prev-icon" aria-hidden="true"></span><span
                                            class="visually-hidden">Previous</span></button>
                                    <button class="carousel-control-next" type="button"
                                        data-bs-target="#carouselTestimonials" data-bs-slide="next"><span
                                            class="carousel-control-next-icon" aria-hidden="true"></span><span
                                            class="visually-hidden">Next </span></button>
                                </div>
                            </div>
                            <div class="row flex-center">
                                <div class="col-auto position-relative z-index-2">
                                    <ol class="carousel-indicators me-xxl-7 me-xl-4 me-lg-7">
                                        <li class="active" data-bs-target="#carouselTestimonials"
                                            data-bs-slide-to="0"></li>
                                        <li data-bs-target="#carouselTestimonials" data-bs-slide-to="1"></li>
                                        <li data-bs-target="#carouselTestimonials" data-bs-slide-to="2"></li>
                                        <li data-bs-target="#carouselTestimonials" data-bs-slide-to="3"></li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-7 overflow-hidden" id="places">
            <div class="container bg-offcanvas-gray-right">
                <div class="row gx-2 mb-2">
                    <div class="col-12 col-md-12 col-lg-4">
                        <div class="bg-primary-gradient bg-offcanvas h-100">
                            <div class="row g-0 justify-content-end">
                                <div class="col-12">
                                    <div class="p-6 py-md-5 px-md-3 py-lg-8 text-light"><img class="mb-5"
                                            src="{{ asset('assets/voyage') }}/assets/img/icons/icon-location.svg"
                                            alt="..." />
                                        <h2 class="mb-2 text-light">Popular places</h2>
                                        <p>Enjoy the benefits of our packages to the<br
                                                class="d-none d-lg-block" />sites where our visitors have more fun. <br
                                                class="d-none d-lg-block" />Properly arranged with low costing.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100 w-100"
                                src="{{ asset('assets/voyage') }}/assets/img/gallery/agra.png" height="375"
                                alt="..." />
                            <div
                                class="card-img-overlay ps-0 d-flex flex-column justify-content-between bg-voyage-gradient">
                                <div class="mt-auto px-4 mb-1">
                                    <h3 class="fs-1 fs-md-2 text-white">Agra</h3><span
                                        class="text-light fs--1 me-1"><i class="fas fa-gift"></i></span><span
                                        class="text-light me-3">10 Packages</span>
                                </div>
                            </div><a class="stretched-link" href="#!"></a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100 w-100"
                                src="{{ asset('assets/voyage') }}/assets/img/gallery/kualalumpur.png" height="375"
                                alt="..." />
                            <div
                                class="card-img-overlay ps-0 d-flex flex-column justify-content-between bg-voyage-gradient">
                                <div class="mt-auto px-4 mb-1">
                                    <h3 class="fs-1 fs-md-2 text-white">Kuala Lumpur</h3><span
                                        class="text-light fs--1 me-1"><i class="fas fa-gift"></i></span><span
                                        class="text-light me-3">10 Packages</span>
                                </div>
                            </div><a class="stretched-link" href="#!"></a>
                        </div>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col-sm-6 col-lg-4">
                        <div class="row g-2">
                            <div class="col-12">
                                <div class="card card-span h-100 text-white"><img class="img-fluid h-100 w-100"
                                        src="{{ asset('assets/voyage') }}/assets/img/gallery/munich.png"
                                        height="375" alt="..." />
                                    <div
                                        class="card-img-overlay ps-0 d-flex flex-column justify-content-between bg-voyage-gradient">
                                        <div class="mt-auto px-4 mb-1">
                                            <h3 class="fs-1 fs-md-2 text-white">Munich</h3><span
                                                class="text-light fs--1 me-1"><i class="fas fa-gift"></i></span><span
                                                class="text-light me-3">10 Packages</span>
                                        </div>
                                    </div><a class="stretched-link" href="#!"></a>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card card-span h-100 text-white"><img class="img-fluid h-100 w-100"
                                        src="{{ asset('assets/voyage') }}/assets/img/gallery/munich.png"
                                        height="375" alt="..." />
                                    <div
                                        class="card-img-overlay ps-0 d-flex flex-column justify-content-between bg-voyage-gradient">
                                        <div class="mt-auto px-4 mb-1">
                                            <h3 class="fs-1 fs-md-2 text-white">Munich</h3><span
                                                class="text-light fs--1 me-1"><i class="fas fa-gift"></i></span><span
                                                class="text-light me-3">10 Packages</span>
                                        </div>
                                    </div><a class="stretched-link" href="#!"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="row g-2">
                            <div class="col-12">
                                <div class="card card-span h-100 text-white"><img class="img-fluid h-100 w-100"
                                        src="{{ asset('assets/voyage') }}/assets/img/gallery/paris.png"
                                        height="375" alt="..." />
                                    <div
                                        class="card-img-overlay ps-0 d-flex flex-column justify-content-between bg-voyage-gradient">
                                        <div class="mt-auto px-4 mb-1">
                                            <h3 class="fs-1 fs-md-2 text-white">Paris</h3><span
                                                class="text-light fs--1 me-1"><i class="fas fa-gift"></i></span><span
                                                class="text-light me-3">10 Packages</span>
                                        </div>
                                    </div><a class="stretched-link" href="#!"></a>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card card-span h-100 text-white"><img class="img-fluid h-100 w-100"
                                        src="{{ asset('assets/voyage') }}/assets/img/gallery/vienna.png"
                                        height="375" alt="..." />
                                    <div
                                        class="card-img-overlay ps-0 d-flex flex-column justify-content-between bg-voyage-gradient">
                                        <div class="mt-auto px-4 mb-1">
                                            <h3 class="fs-1 fs-md-2 text-white">Vienna</h3><span
                                                class="text-light fs--1 me-1"><i class="fas fa-gift"></i></span><span
                                                class="text-light me-3">10 Packages</span>
                                        </div>
                                    </div><a class="stretched-link" href="#!"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-4">
                        <div class="bg-secondary-gradient h-100 d-flex align-items-center">
                            <div class="text-light p-4 p-sm-6 p-lg-0 px-xxl-6">
                                <p class="fs-1 px-4 mb-6">Wanna travel to the most thrilling spot on the planet? We've
                                    set a bunch of surprises for you.</p><a class="btn btn-lg text-light fs-2"
                                    href="#!" role="button">Click to view more
                                    <svg class="bi bi-arrow-right-circle ms-5" xmlns="http://www.w3.org/2000/svg"
                                        width="55" height="55" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z">
                                        </path>
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-0 my-7">
            <div class="bg-holder w-50 bg-left  d-none d-lg-block"
                style="background-image:url({{ asset('assets/voyage') }}/assets/img/gallery/sharee.png);background-position:top;">
            </div>
            <!--/.bg-holder-->

            <div class="container">
                <div class="row g-0">
                    <div class="col-lg-4 order-1 order-lg-0"> </div>
                    <div class="col-lg-8 bg-white">
                        <div class="carousel slide" id="carouselShare" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="10000">
                                    <div class="row h-100">
                                        <div class="col-12"><img class="w-100"
                                                src="{{ asset('assets/voyage') }}/assets/img/gallery/dubai.png"
                                                height="600" alt="..." />
                                            <div class="pt-5 ps-sm-7">
                                                <h4 class="mb-2 text-1000">Share a trip</h4>
                                                <h2 class="mb-3 text-primary fs-3 fs-md-6">Dubai</h2>
                                                <p class="fw-normal mb-0">Dubai, a city with many faces, is one of the
                                                    world's most popular tourist destinations. The Burj Khalifa, the
                                                    world's highest tower, is located here. The futuristic beauty of new
                                                    buildings is at the heart of Dubai tourism.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <div class="row h-100">
                                        <div class="col-12"><img class="w-100"
                                                src="{{ asset('assets/voyage') }}/assets/img/gallery/cinnamon.png"
                                                height="600" alt="..." />
                                            <div class="pt-5 ps-sm-7">
                                                <h4 class="mb-2 text-1000">Share a trip</h4>
                                                <h2 class="mb-3 text-primary fs-3 fs-md-6">Maldives</h2>
                                                <p class="fw-normal mb-0">Dubai, a city with many faces, is one of the
                                                    world's most popular tourist destinations. The Burj Khalifa, the
                                                    world's highest tower, is located here. The futuristic beauty of new
                                                    buildings is at the heart of Dubai tourism.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item" data-bs-interval="1000">
                                    <div class="row h-100">
                                        <div class="col-12"><img class="w-100"
                                                src="{{ asset('assets/voyage') }}/assets/img/gallery/dhigu.png"
                                                height="600" alt="..." />
                                            <div class="pt-5 ps-sm-7">
                                                <h4 class="mb-2 text-1000">Share a trip</h4>
                                                <h2 class="mb-3 text-primary fs-3 fs-md-6">Maldives</h2>
                                                <p class="fw-normal mb-0">Dubai, a city with many faces, is one of the
                                                    world's most popular tourist destinations. The Burj Khalifa, the
                                                    world's highest tower, is located here. The futuristic beauty of new
                                                    buildings is at the heart of Dubai tourism.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row h-100">
                                        <div class="col-12"><img class="w-100"
                                                src="{{ asset('assets/voyage') }}/assets/img/gallery/dubai.png"
                                                height="600" alt="..." />
                                            <div class="pt-5 ps-sm-7">
                                                <h4 class="mb-2 text-1000">Share a trip</h4>
                                                <h2 class="mb-3 text-primary fs-3 fs-md-6">Dubai</h2>
                                                <p class="fw-normal mb-0">Dubai, a city with many faces, is one of the
                                                    world's most popular tourist destinations. The Burj Khalifa, the
                                                    world's highest tower, is located here. The futuristic beauty of new
                                                    buildings is at the heart of Dubai tourism.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row ps-sm-7 align-items-end">
                                <div class="col-4 col-sm-6 position-relative z-index-2">
                                    <ol class="carousel-indicators me-xxl-7 me-xl-4 me-lg-7">
                                        <li class="active" data-bs-target="#carouselShare" data-bs-slide-to="0"></li>
                                        <li data-bs-target="#carouselShare" data-bs-slide-to="1"></li>
                                        <li data-bs-target="#carouselShare" data-bs-slide-to="2"></li>
                                        <li data-bs-target="#carouselShare" data-bs-slide-to="3"></li>
                                    </ol>
                                </div>
                                <div class="col-8 col-sm-6 position-relative z-index-2 text-end"><a
                                        class="btn btn-lg text-secondary" href="#" role="button">Read More
                                        <svg class="bi bi-arrow-right ms-2" xmlns="http://www.w3.org/2000/svg"
                                            width="35" height="35" fill="currentColor" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
                                            </path>
                                        </svg></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-7 overflow-hidden">
            <div class="container bg-offcanvas-gray">
                <div class="row gx-2">
                    <div class="col-sm-6 col-lg-4 order-1 order-lg-0 gy-2 gy-lg-0">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100 w-100"
                                src="{{ asset('assets/voyage') }}/assets/img/gallery/sky-the-limit.png"
                                height="375" alt="..." />
                            <div
                                class="card-img-overlay ps-0 d-flex flex-column justify-content-between bg-voyage-gradient">
                                <div class="mt-auto px-4">
                                    <h3 class="fs-1 fs-md-2 text-white">Sky the Limit</h3>
                                    <div class="d-flex align-items-center justify-content-start"><span
                                            class="text-light fs--1 me-1"><i
                                                class="fas fa-map-marker-alt"></i></span><span
                                            class="text-light me-3">Manali</span><span
                                            class="text-light fs--1 me-1"><i class="fas fa-calendar"></i></span><span
                                            class="text-light">4 days</span></div>
                                    <h1 class="my-2 text-light fw-bolder fs-4"><span>$175</span><span
                                            class="text-light fs--1 fw-normal">/Per person</span></h1>
                                </div>
                            </div><a class="stretched-link" href="#!"></a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 order-2 order-lg-0 gy-2 gy-lg-0">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100 w-100"
                                src="{{ asset('assets/voyage') }}/assets/img/gallery/beyond-the-blues.png"
                                height="375" alt="..." />
                            <div
                                class="card-img-overlay ps-0 d-flex flex-column justify-content-between bg-voyage-gradient">
                                <div class="mt-auto px-4">
                                    <h3 class="fs-1 fs-md-2 text-white">Beyond the Blues</h3>
                                    <div class="d-flex align-items-center justify-content-start"><span
                                            class="text-light fs--1 me-1"><i
                                                class="fas fa-map-marker-alt"></i></span><span
                                            class="text-light me-3">Maldives</span><span
                                            class="text-light fs--1 me-1"><i class="fas fa-calendar"></i></span><span
                                            class="text-light">4 days</span></div>
                                    <h1 class="my-2 text-light fw-bolder fs-4"><span>$175</span><span
                                            class="text-light fs--1 fw-normal">/Per person</span></h1>
                                </div>
                            </div><a class="stretched-link" href="#!"></a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="bg-primary-gradient h-100 bg-offcanvas-right">
                            <div class="row g-0 h-100">
                                <div class="col-12 h-100">
                                    <div
                                        class="d-flex flex-column justify-content-center h-100 text-light ps-4 ps-xl-5 py-5 py-lg-0">
                                        <img class="mb-5"
                                            src="{{ asset('assets/voyage') }}/assets/img/icons/icon-gift-box.svg"
                                            width="58" alt="..." />
                                        <h2 class="mb-2 text-light">popular Packages</h2>
                                        <p>Choose the most popular bundles among <br class="d-none d-xl-block" />our
                                            current ones.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 gy-2">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100 w-100"
                                src="{{ asset('assets/voyage') }}/assets/img/gallery/green.png" height="375"
                                alt="..." />
                            <div
                                class="card-img-overlay ps-0 d-flex flex-column justify-content-between bg-voyage-gradient">
                                <div class="mt-auto px-4">
                                    <h3 class="fs-1 fs-md-2 text-white">Within the Gren</h3>
                                    <div class="d-flex align-items-center justify-content-start"><span
                                            class="text-light fs--1 me-1"><i
                                                class="fas fa-map-marker-alt"></i></span><span
                                            class="text-light me-3">Phillipines</span><span
                                            class="text-light fs--1 me-1"><i class="fas fa-calendar"></i></span><span
                                            class="text-light">4 days</span></div>
                                    <h1 class="my-2 text-light fw-bolder fs-4"><span>$175</span><span
                                            class="text-light fs--1 fw-normal">/Per person</span></h1>
                                </div>
                            </div><a class="stretched-link" href="#!"></a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 gy-2">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100 w-100"
                                src="{{ asset('assets/voyage') }}/assets/img/gallery/queens-gambit.png"
                                height="375" alt="..." />
                            <div
                                class="card-img-overlay ps-0 d-flex flex-column justify-content-between bg-voyage-gradient">
                                <div class="mt-auto px-4">
                                    <h3 class="fs-1 fs-md-2 text-white">Queens Gambit</h3>
                                    <div class="d-flex align-items-center justify-content-start"><span
                                            class="text-light fs--1 me-1"><i
                                                class="fas fa-map-marker-alt"></i></span><span
                                            class="text-light me-3">London</span><span
                                            class="text-light fs--1 me-1"><i class="fas fa-calendar"></i></span><span
                                            class="text-light">4 days</span></div>
                                    <h1 class="my-2 text-light fw-bolder fs-4"><span>$175</span><span
                                            class="text-light fs--1 fw-normal">/Per person</span></h1>
                                </div>
                            </div><a class="stretched-link" href="#!"></a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 gy-2">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100 w-100"
                                src="{{ asset('assets/voyage') }}/assets/img/gallery/canals.png" height="375"
                                alt="..." />
                            <div
                                class="card-img-overlay ps-0 d-flex flex-column justify-content-between bg-voyage-gradient">
                                <div class="mt-auto px-4">
                                    <h3 class="fs-1 fs-md-2 text-white">City of canals</h3>
                                    <div class="d-flex align-items-center justify-content-start"><span
                                            class="text-light fs--1 me-1"><i
                                                class="fas fa-map-marker-alt"></i></span><span
                                            class="text-light me-3">Maldives</span><span
                                            class="text-light fs--1 me-1"><i class="fas fa-calendar"></i></span><span
                                            class="text-light">4 days</span></div>
                                    <h1 class="my-2 text-light fw-bolder fs-4"><span>$175</span><span
                                            class="text-light fs--1 fw-normal">/Per person</span></h1>
                                </div>
                            </div><a class="stretched-link" href="#!"></a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-8 gy-2 order-3 order-lg-0">
                        <div class="bg-secondary-gradient h-100">
                            <div class="row h-100">
                                <div class="col-12">
                                    <div
                                        class="d-flex flex-column flex-center h-100 text-light p-4 p-sm-6 p-md-8 p-lg-0">
                                        <p class="fs-1 px-3 mb-5">Most exclusive packages are ready <br
                                                class="d-none d-xl-block" />for you. It's only a click away!</p><a
                                            class="btn btn-lg text-light fs-1" href="#!" role="button">Click to
                                            view more
                                            <svg class="bi bi-arrow-right-circle ms-7"
                                                xmlns="http://www.w3.org/2000/svg" width="55" height="55"
                                                fill="currentColor" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z">
                                                </path>
                                            </svg></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 gy-2">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100 w-100"
                                src="{{ asset('assets/voyage') }}/assets/img/gallery/mountain-venture.png"
                                height="375" alt="..." />
                            <div
                                class="card-img-overlay ps-0 d-flex flex-column justify-content-between bg-voyage-gradient">
                                <div class="mt-auto px-4">
                                    <h3 class="fs-1 fs-md-2 text-white">Mountain Venture</h3>
                                    <div class="d-flex align-items-center justify-content-start"><span
                                            class="text-light fs--1 me-1"><i
                                                class="fas fa-map-marker-alt"></i></span><span
                                            class="text-light me-3">Maldives</span><span
                                            class="text-light fs--1 me-1"><i class="fas fa-calendar"></i></span><span
                                            class="text-light">4 days</span></div>
                                    <h1 class="my-2 text-light fw-bolder fs-4"><span>$175</span><span
                                            class="text-light fs--1 fw-normal">/Per person</span></h1>
                                </div>
                            </div><a class="stretched-link" href="#!"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="py-7" id="activities">

            <div class="container">
                <div class="row g-0">
                    <div class="col-lg-4 order-1"><img class="w-100 mt-5 mt-lg-0"
                            src="{{ asset('assets/voyage') }}/assets/img/gallery/bungee-jumping.png" height="750"
                            alt="..." /></div>
                    <div class="col-lg-8">
                        <div class="carousel slide" id="carouselActivity" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="10000">
                                    <div class="row h-100">
                                        <div class="col-12"><img class="w-100"
                                                src="{{ asset('assets/voyage') }}/assets/img/gallery/activity.png"
                                                width="383" alt="..." />
                                            <div class="py-4">
                                                <h4 class="mb-2 text-1000">Participate in activities like</h4>
                                                <h2 class="mb-3 text-primary fs-3 fs-md-6">Bungee Jumping</h2>
                                                <p class="fw-normal mb-0 pe-lg-9">Bungee jumping, often known as bungy
                                                    jumping, is a sport in which a person jumps from a considerable
                                                    height while attached to a long elastic line. Usually, the pad is
                                                    built on a high structure like a structure or a crane, a bridge
                                                    across a steep ravine</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <div class="row h-100">
                                        <div class="col-12"><img class="w-100"
                                                src="{{ asset('assets/voyage') }}/assets/img/gallery/activity.png"
                                                width="383" alt="..." />
                                            <div class="py-4">
                                                <h4 class="mb-2 text-1000">Participate in activities like</h4>
                                                <h2 class="mb-3 text-primary fs-3 fs-md-6">Bungee Jumping</h2>
                                                <p class="fw-normal mb-0 pe-lg-9">Bungee jumping, often known as bungy
                                                    jumping, is a sport in which a person jumps from a considerable
                                                    height while attached to a long elastic line. Usually, the pad is
                                                    built on a high structure like a structure or a crane, a bridge
                                                    across a steep ravine</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item" data-bs-interval="1000">
                                    <div class="row h-100">
                                        <div class="col-12"><img class="w-100"
                                                src="{{ asset('assets/voyage') }}/assets/img/gallery/activity.png"
                                                width="383" alt="..." />
                                            <div class="py-4">
                                                <h4 class="mb-2 text-1000">Participate in activities like</h4>
                                                <h2 class="mb-3 text-primary fs-3 fs-md-6">Bungee Jumping</h2>
                                                <p class="fw-normal mb-0 pe-lg-9">Bungee jumping, often known as bungy
                                                    jumping, is a sport in which a person jumps from a considerable
                                                    height while attached to a long elastic line. Usually, the pad is
                                                    built on a high structure like a structure or a crane, a bridge
                                                    across a steep ravine</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row h-100">
                                        <div class="col-12"><img class="w-100"
                                                src="{{ asset('assets/voyage') }}/assets/img/gallery/activity.png"
                                                width="383" alt="..." />
                                            <div class="py-4">
                                                <h4 class="mb-2 text-1000">Participate in activities like</h4>
                                                <h2 class="mb-3 text-primary fs-3 fs-md-6">Bungee Jumping</h2>
                                                <p class="fw-normal mb-0 pe-lg-9">Bungee jumping, often known as bungy
                                                    jumping, is a sport in which a person jumps from a considerable
                                                    height while attached to a long elastic line. Usually, the pad is
                                                    built on a high structure like a structure or a crane, a bridge
                                                    across a steep ravine</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row ps-sm-5 ps-md-0 align-items-end">
                                <div class="col-4 col-sm-6 position-relative z-index-2">
                                    <ol class="carousel-indicators me-xxl-7 me-xl-4 me-lg-7">
                                        <li class="active" data-bs-target="#carouselShare" data-bs-slide-to="0">
                                        </li>
                                        <li data-bs-target="#carouselShare" data-bs-slide-to="1"></li>
                                        <li data-bs-target="#carouselShare" data-bs-slide-to="2"></li>
                                        <li data-bs-target="#carouselShare" data-bs-slide-to="3"></li>
                                    </ol>
                                </div>
                                <div class="col-8 col-sm-6 position-relative z-index-2 text-end"><a
                                        class="btn btn-lg text-secondary" href="#" role="button">Read More
                                        <svg class="bi bi-arrow-right ms-2" xmlns="http://www.w3.org/2000/svg"
                                            width="35" height="35" fill="currentColor"
                                            viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
                                            </path>
                                        </svg></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->


        <section class="py-7 overflow-hidden" id="hotels">
            <div class="container bg-offcanvas-gray-right">
                <div class="row gx-2">
                    <div class="col-sm-6 col-lg-4">
                        <div class="bg-primary-gradient h-100 d-flex align-items-end">
                            <div class="row g-0 justify-content-start">
                                <div class="col-xl-9">
                                    <div class="p-3 px-lg-4 text-light"><img class="mb-5"
                                            src="{{ asset('assets/voyage') }}/assets/img/icons/icon-hotel.svg"
                                            alt="..." />
                                        <h2 class="mb-3 text-light">Discover our best hotels to stay</h2>
                                        <p>Bundle tickets to any hotel to save on your whole order. Follow bundle it!
                                            method by picking the right hotel accommodation once you add your tickets to
                                            your cart.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="row g-2">
                            <div class="col-12">
                                <div class="card card-span h-100 text-white"><img class="img-fluid h-100 w-100"
                                        src="{{ asset('assets/voyage') }}/assets/img/gallery/moon-house-hotel.png"
                                        height="375" alt="..." />
                                    <div
                                        class="card-img-overlay ps-0 d-flex flex-column justify-content-between bg-voyage-gradient">
                                        <div class="mt-auto px-4">
                                            <h3 class="fs-1 fs-md-2 text-white">Moon House Hotel</h3>
                                            <div class="d-flex align-items-center justify-content-start"><span
                                                    class="text-light fs--1 me-1"><i
                                                        class="fas fa-map-marker-alt"></i></span><span
                                                    class="text-light me-md-3">Soi Petchburi 19, Bankok</span></div>
                                            <p class="mb-0 mt-3">Starts from </p>
                                            <h1 class="mb-2 text-light fw-bolder fs-2 fs-md-4"><span>$175</span><span
                                                    class="text-light fs--1 fw-normal">/Per person</span></h1>
                                        </div>
                                    </div><a class="stretched-link" href="#!"> </a>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card card-span h-100 text-white"><img class="img-fluid h-100 w-100"
                                        src="{{ asset('assets/voyage') }}/assets/img/gallery/blue-mosque-hotel.png"
                                        height="375" alt="..." />
                                    <div
                                        class="card-img-overlay ps-0 d-flex flex-column justify-content-between bg-voyage-gradient">
                                        <div class="mt-auto px-4">
                                            <h3 class="fs-1 fs-md-2 text-white">Blue Mosque Hotel</h3>
                                            <div class="d-flex align-items-center justify-content-start"><span
                                                    class="text-light fs--1 me-1"><i
                                                        class="fas fa-map-marker-alt"></i></span><span
                                                    class="text-light me-md-3">Dismesi Sokak, Istanbul</span></div>
                                            <p class="mb-0 mt-3">Starts from </p>
                                            <h1 class="mb-2 text-light fw-bolder fs-2 fs-md-4"><span>$175</span><span
                                                    class="text-light fs--1 fw-normal">/Per person</span></h1>
                                        </div>
                                    </div><a class="stretched-link" href="#!"> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="row g-2">
                            <div class="col-12">
                                <div class="card card-span h-100 text-white"><img class="img-fluid h-100 w-100"
                                        src="{{ asset('assets/voyage') }}/assets/img/gallery/hotel-royal.png"
                                        height="375" alt="..." />
                                    <div
                                        class="card-img-overlay ps-0 d-flex flex-column justify-content-between bg-voyage-gradient">
                                        <div class="mt-auto px-4">
                                            <h3 class="fs-1 fs-md-2 text-white">Hotel Royal</h3>
                                            <div class="d-flex align-items-center justify-content-start"><span
                                                    class="text-light fs--1 me-1"><i
                                                        class="fas fa-map-marker-alt"></i></span><span
                                                    class="text-light me-md-3">Kedewatan, Bali</span></div>
                                            <p class="mb-0 mt-3">Starts from </p>
                                            <h1 class="mb-2 text-light fw-bolder fs-2 fs-md-4"><span>$175</span><span
                                                    class="text-light fs--1 fw-normal">/Per person</span></h1>
                                        </div>
                                    </div><a class="stretched-link" href="#!"> </a>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card card-span h-100 text-white"><img class="img-fluid h-100 w-100"
                                        src="{{ asset('assets/voyage') }}/assets/img/gallery/boutique-hotel.png"
                                        height="375" alt="..." />
                                    <div
                                        class="card-img-overlay ps-0 d-flex flex-column justify-content-between bg-voyage-gradient">
                                        <div class="mt-auto px-4">
                                            <h3 class="fs-1 fs-md-2 text-white">The Rin Boutique Hotel</h3>
                                            <div class="d-flex align-items-center justify-content-start"><span
                                                    class="text-light fs--1 me-1"><i
                                                        class="fas fa-map-marker-alt"></i></span><span
                                                    class="text-light me-md-3">Bang Lamung, Pattaya</span></div>
                                            <p class="mb-0 mt-3">Starts from </p>
                                            <h1 class="mb-2 text-light fw-bolder fs-2 fs-md-4"><span>$175</span><span
                                                    class="text-light fs--1 fw-normal">/Per person</span></h1>
                                        </div>
                                    </div><a class="stretched-link" href="#!"> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-8 gy-2">
                        <div class="bg-secondary-gradient h-100 d-flex align-items-center">
                            <div class="text-light py-6">
                                <div class="row">
                                    <div class="col-12 col-xl-6">
                                        <p class="fs-1 px-5">In our offers, we have more hotels. Just to make your
                                            stay easy for your best interests.</p>
                                    </div>
                                    <div class="col-12 col-xl-6 text-end"><a
                                            class="btn btn-lg text-light fs-1 fs-sm--1 fs-md-1 px-5" href="#!"
                                            role="button">Click to view more
                                            <svg class="bi bi-arrow-right-circle ms-3"
                                                xmlns="http://www.w3.org/2000/svg" width="55" height="55"
                                                fill="currentColor" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z">
                                                </path>
                                            </svg></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="py-0 pb-8">

            <div class="container-fluid container-lg">
                <div class="row h-100 g-2 justify-content-center">
                    <div class="col-sm-9 col-md-4 mb-3 mb-md-0 h-100">
                        <div class="card card-span text-white h-100"><img class="img-card h-100"
                                src="{{ asset('assets/voyage') }}/assets/img/gallery/blog-1.png" alt="..." />
                            <div class="card-body px-xl-5 px-md-3 pt-0 pb-7">
                                <div class="d-flex justify-content-between align-items-center bg-100 mt-n5 me-auto">
                                    <img src="{{ asset('assets/voyage') }}/assets/img/gallery/author-1.png"
                                        width="60" alt="..." />
                                    <div class="d-flex flex-1 justify-content-around"> <span
                                            class="text-900 text-center"><i
                                                class="fas fa-heart text-primary"></i><span
                                                class="text-900 ms-2">355</span></span><span
                                            class="text-900 text-center"><i
                                                class="fas fa-eye text-primary"></i><span
                                                class="text-900 ms-2">234</span></span><span
                                            class="text-900 text-center"><i
                                                class="fas fa-share text-primary"></i><span
                                                class="text-900 ms-2">14</span></span></div>
                                </div>
                                <h5 class="text-900 mt-3">John Oliver. <span class="fw-normal">5 mins Read. </span>
                                </h5>
                                <h3 class="fw-bold text-1000 mt-5 text-truncate">15 Best Day Trips from Portland
                                    Oregon</h3>
                                <p class="text-900 mt-3">The structure of the trip blog is only a white canvas to
                                    highlight the atmospheric and immersive.</p><a
                                    class="btn btn-lg text-900 fs-1 px-0 hvr-icon-forward" href="#!"
                                    role="button">Read more
                                    <svg class="bi bi-arrow-right-short hover-icon"
                                        xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                        fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z">
                                        </path>
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9 col-md-4 mb-3 mb-md-0 h-100">
                        <div class="card card-span text-white h-100"><img class="img-card h-100"
                                src="{{ asset('assets/voyage') }}/assets/img/gallery/blog-2.png" alt="..." />
                            <div class="card-body px-xl-5 px-md-3 pt-0 pb-7">
                                <div class="d-flex justify-content-between align-items-center bg-100 mt-n5 me-auto">
                                    <img src="{{ asset('assets/voyage') }}/assets/img/gallery/author-2.png"
                                        width="60" alt="..." />
                                    <div class="d-flex flex-1 justify-content-around"> <span
                                            class="text-900 text-center"><i
                                                class="fas fa-heart text-primary"></i><span
                                                class="text-900 ms-2">35</span></span><span
                                            class="text-900 text-center"><i
                                                class="fas fa-eye text-primary"></i><span
                                                class="text-900 ms-2">23</span></span><span
                                            class="text-900 text-center"><i
                                                class="fas fa-share text-primary"></i><span
                                                class="text-900 ms-2">14</span></span></div>
                                </div>
                                <h5 class="text-900 mt-3">Haley Wilson . <span class="fw-normal">5 mins Read.
                                    </span></h5>
                                <h3 class="fw-bold text-1000 mt-5 text-truncate">Famous Roads for Great Drives in
                                    California</h3>
                                <p class="text-900 mt-3">I first discovered about famous road in california when I
                                    flew with KLM to Europe in 2018.</p><a
                                    class="btn btn-lg text-900 fs-1 px-0 hvr-icon-forward" href="#!"
                                    role="button">Read more
                                    <svg class="bi bi-arrow-right-short hover-icon"
                                        xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                        fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z">
                                        </path>
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9 col-md-4 mb-3 mb-md-0 h-100">
                        <div class="card card-span text-white h-100"><img class="img-card h-100"
                                src="{{ asset('assets/voyage') }}/assets/img/gallery/blog-3.png" alt="..." />
                            <div class="card-body px-xl-5 px-md-3 pt-0 pb-7">
                                <div class="d-flex justify-content-between align-items-center bg-100 mt-n5 me-auto">
                                    <img src="{{ asset('assets/voyage') }}/assets/img/gallery/author-3.png"
                                        width="60" alt="..." />
                                    <div class="d-flex flex-1 justify-content-around"> <span
                                            class="text-900 text-center"><i
                                                class="fas fa-heart text-primary"></i><span
                                                class="text-900 ms-2">35</span></span><span
                                            class="text-900 text-center"><i
                                                class="fas fa-eye text-primary"></i><span
                                                class="text-900 ms-2">23</span></span><span
                                            class="text-900 text-center"><i
                                                class="fas fa-share text-primary"></i><span
                                                class="text-900 ms-2">14</span></span></div>
                                </div>
                                <h5 class="text-900 mt-3">Jeff Baley. <span class="fw-normal">5 mins Read. </span>
                                </h5>
                                <h3 class="fw-bold text-1000 mt-5 text-truncate">7 of the Best Train Trips in Canada
                                </h3>
                                <p class="text-900 mt-3">On this very stunning rail ride from Vancouver to Calgary,
                                    take in the stunning vistas andspectacular.</p><a
                                    class="btn btn-lg text-900 fs-1 px-0 hvr-icon-forward" href="#!"
                                    role="button">Read more
                                    <svg class="bi bi-arrow-right-short hover-icon"
                                        xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                        fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z">
                                        </path>
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->
 --}}



        {{-- <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="py-0" id="flights">

            <div class="container-fluid">
                <div class="row h-100">
                    <div class="col-lg-7 mx-auto text-center mb-6">
                        <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3">Flights to Popular Places at the Best Costs</h5>
                    </div>
                </div>
                <div class="row g-0 flex-center">
                    <div class="col-12 col-sm-4 col-md-3 col-lg-4 col-xl-2">
                        <div class="d-flex flex-column justify-content-center px-3"
                            style="background-color:#240D8C; min-height:230px; ">
                            <h5 class="text-light">Dhaka - Chittagong</h5>
                            <h6 class="text-light fw-normal fs-0">From $100</h6><i
                                class="fas fa-arrow-right text-light mt-4"></i><a class="stretched-link"
                                href="#!"></a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4 col-md-3 col-lg-4 col-xl-2">
                        <div class="d-flex flex-column justify-content-center px-3"
                            style="background-color:#3011BB; min-height:230px;">
                            <h5 class="text-light">Dhaka - Sylhet</h5>
                            <h6 class="text-light fw-normal fs-0">From $100</h6><i
                                class="fas fa-arrow-right text-light mt-4"></i><a class="stretched-link"
                                href="#!"></a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4 col-md-3 col-lg-4 col-xl-2">
                        <div class="d-flex flex-column justify-content-center px-3"
                            style="background-color:#4914DC; min-height:230px;">
                            <h5 class="text-light">Dhaka - Chittagong</h5>
                            <h6 class="text-light fw-normal fs-0">From $100</h6><i
                                class="fas fa-arrow-right text-light mt-4"></i><a class="stretched-link"
                                href="#!"></a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4 col-md-3 col-lg-4 col-xl-2">
                        <div class="d-flex flex-column justify-content-center px-3"
                            style="background-color:#6213D2; min-height:230px;">
                            <h5 class="text-light">Dhaka - Chittagong</h5>
                            <h6 class="text-light fw-normal fs-0">From $100</h6><i
                                class="fas fa-arrow-right text-light mt-4"></i><a class="stretched-link"
                                href="#!"></a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4 col-md-3 col-lg-4 col-xl-2">
                        <div class="d-flex flex-column justify-content-center px-3"
                            style="background-color:#4611BC; min-height:230px;">
                            <h5 class="text-light">Dhaka - Coxs Bazar</h5>
                            <h6 class="text-light fw-normal fs-0">From $100</h6><i
                                class="fas fa-arrow-right text-light mt-4"></i><a class="stretched-link"
                                href="#!"></a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4 col-md-3 col-lg-4 col-xl-2">
                        <div class="d-flex flex-column justify-content-center px-3"
                            style="background-color:#7013CE; min-height:230px;">
                            <h5 class="text-light">Dhaka - Sylhet</h5>
                            <h6 class="text-light fw-normal fs-0">From $100</h6><i
                                class="fas fa-arrow-right text-light mt-4"></i><a class="stretched-link"
                                href="#!"></a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4 col-md-3 col-lg-4 col-xl-2">
                        <div class="d-flex flex-column justify-content-center px-3"
                            style="background-color:#4611BC; min-height:230px;">
                            <h5 class="text-light">Dhaka - Coxs Bazar</h5>
                            <h6 class="text-light fw-normal fs-0">From $100</h6><i
                                class="fas fa-arrow-right text-light mt-4"></i><a class="stretched-link"
                                href="#!"></a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4 col-md-3 col-lg-4 col-xl-2">
                        <div class="d-flex flex-column justify-content-center px-3"
                            style="background-color:#6213D2; min-height:230px;">
                            <h5 class="text-light">Dhaka - Chittagong</h5>
                            <h6 class="text-light fw-normal fs-0">From $100</h6><i
                                class="fas fa-arrow-right text-light mt-4"></i><a class="stretched-link"
                                href="#!"></a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4 col-md-3 col-lg-4 col-xl-2">
                        <div class="d-flex flex-column justify-content-center px-3"
                            style="background-color:#240D8C; min-height:230px;">
                            <h5 class="text-light">Dhaka - Coxs Bazar</h5>
                            <h6 class="text-light fw-normal fs-0">From $100</h6><i
                                class="fas fa-arrow-right text-light mt-4"></i><a class="stretched-link"
                                href="#!"></a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4 col-md-3 col-lg-4 col-xl-2">
                        <div class="d-flex flex-column justify-content-center px-3"
                            style="background-color:#4914DC; min-height:230px;">
                            <h5 class="text-light">Dhaka - Sylhet</h5>
                            <h6 class="text-light fw-normal fs-0">From $100</h6><i
                                class="fas fa-arrow-right text-light mt-4"></i><a class="stretched-link"
                                href="#!"></a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4 col-md-3 col-lg-4 col-xl-2">
                        <div class="d-flex flex-column justify-content-center px-3"
                            style="background-color:#3011BB; min-height:230px;">
                            <h5 class="text-light">Dhaka - Chittagong</h5>
                            <h6 class="text-light fw-normal fs-0">From $100</h6><i
                                class="fas fa-arrow-right text-light mt-4"></i><a class="stretched-link"
                                href="#!"></a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4 col-md-3 col-lg-4 col-xl-2">
                        <div class="d-flex flex-column justify-content-center px-3"
                            style="background-color:#4611BC; min-height:230px;">
                            <h5 class="text-light">Dhaka - Coxs Bazar</h5>
                            <h6 class="text-light fw-normal fs-0">From $100</h6><i
                                class="fas fa-arrow-right text-light mt-4"></i><a class="stretched-link"
                                href="#!"></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->


        <section>
            <div class="bg-holder"
                style="background-image:url({{ asset('assets/voyage') }}/assets/img/gallery/cta-bg.png);background-position:center;background-size:cover;">
            </div>
            <!--/.bg-holder-->

            <div class="container">
                <div class="row flex-center">
                    <div class="col-lg-6 text-center"><img class="mb-5 mb-lg-0"
                            src="{{ asset('assets/voyage') }}/assets/img/gallery/cta-mobile.png" alt="..." />
                    </div>
                    <div class="col-lg-6 text-center">
                        <h1 class="fs-6 pe-xxl-10">Get the app</h1>
                        <div class="mt-4 pe-xxl-10"><a href="https://play.google.com/store/apps" target="_blank"><img
                                    class="me-3"
                                    src="{{ asset('assets/voyage') }}/assets/img/gallery/google-play.png"
                                    width="170" alt="..." /></a><a href="https://www.apple.com/app-store/"
                                target="_blank"> <img
                                    src="{{ asset('assets/voyage') }}/assets/img/gallery/app-store.png"
                                    width="170" alt="..." /></a></div>
                    </div>
                </div>
            </div>
        </section> --}}


        <!-- ============================================-->
        <!-- <section> begin ============================
        <section class="py-0 overflow-hidden mt-5">

            <div class="container">
                <div class="row">
                    <div class="col-6 col-sm-4 col-lg-6">
                        <div class="py-7"><img class="d-inline-block"
                                src="{{ asset('assets/voyage') }}/assets/img/gallery/logo.png" width="50"
                                alt="logo" /><span class="fw-bold fs-4 text-primary ms-2">voyage</span>
                            <ul class="list-unstyled mt-4">
                                <li class="mb-2"><a class="text-800 fw-bold text-decoration-none"
                                        href="#!">News</a></li>
                                <li class="mb-2"><a class="text-800 fw-bold text-decoration-none" href="#!">Terms
                                        &amp; Conditions</a></li>
                                <li class="mb-2"><a class="text-800 fw-bold text-decoration-none"
                                        href="#!">Privacy</a></li>
                                <li class="mb-2"><a class="text-800 fw-bold text-decoration-none" href="#!">About
                                        Us</a></li>
                                <li class="mb-2"><a class="text-800 fw-bold text-decoration-none"
                                        href="#!">FAQs</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6 col-8 col-lg-6 bg-primary-gradient bg-offcanvas-right">
                        <div class="p-3 py-7 p-md-7">
                            <p class="text-light"><i class="fas fa-phone-alt me-3"></i><span
                                    class="text-light">+3930219390</span></p>
                            <p class="text-light"><i class="fas fa-envelope me-3"></i><span
                                    class="text-light">something@gmail.com</span></p>
                            <p class="text-light"><i class="fas fa-map-marker-alt me-3"></i><span
                                    class="text-light lh-lg">333, Lorem Street, Albania, Alifornia<br />United States
                                    of America</span></p>
                            <div class="mt-6"><a href="#!"> <img class="me-3"
                                        src="{{ asset('assets/voyage') }}/assets/img/icons/facebook.svg"
                                        alt="..." /></a><a href="#!"> <img class="me-3"
                                        src="{{ asset('assets/voyage') }}/assets/img/icons/twitter.svg"
                                        alt="..." /></a><a href="#!"> <img class="me-3"
                                        src="{{ asset('assets/voyage') }}/assets/img/icons/instagram.svg"
                                        alt="..." /></a></div>
                            <p class="mt-3 text-light text-center text-md-start"> Made with&nbsp;
                                <svg class="bi bi-suit-heart-fill" xmlns="http://www.w3.org/2000/svg" width="15"
                                    height="15" fill="#EB6453" viewBox="0 0 16 16">
                                    <path
                                        d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z">
                                    </path>
                                </svg>&nbsp;by&nbsp;<a class="text-light" href="https://themewagon.com/"
                                    target="_blank">ThemeWagon </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of .container-->

        </section>
        <!-- <section> close ============================-->


    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/voyage') }}/vendors/@popperjs/popper.min.js"></script>
    <script src="{{ asset('assets/voyage') }}/vendors/bootstrap/bootstrap.min.js"></script>
    <script src="{{ asset('assets/voyage') }}/vendors/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="{{ asset('assets/voyage') }}/vendors/fontawesome/all.min.js"></script>
    <script src="{{ asset('assets/voyage') }}/assets/js/theme.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300;400;600;700&amp;display=swap"
        rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.5/dist/sweetalert2.all.min.js"></script>
    <script>
        $(".select2").select2({
            theme: 'bootstrap-5'
        });
    </script>
    @if (session()->has('success'))
        <script>
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: '{{ session()->get('success') }}',
                showConfirmButton: false,
                timer: 1500
            })
        </script>
    @endif
    @if (session()->has('failed'))
        <script>
            Swal.fire({
                position: 'top-end',
                icon: 'error',
                title: '{{ session()->get('failed') }}',
                showConfirmButton: false,
                timer: 1500
            })
        </script>
    @endif
    <script>
        $(function() {

            $('.custom-dropdown').on('show.bs.dropdown', function() {
                var that = $(this);
                setTimeout(function() {
                    that.find('.dropdown-menu').addClass('active');
                }, 100);


            });
            $('.custom-dropdown').on('hide.bs.dropdown', function() {
                $(this).find('.dropdown-menu').removeClass('active');
            });

        });
        $(document).ready(function() {
            $(".logout").on('click', function() {
                Swal.fire({
                    title: "Are you sure?",
                    text: "",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, Logout "
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: '{{ route('logout') }}',
                            type: 'POST',
                            data: {
                                _token: '{{ csrf_token() }}'
                            },
                            success: function(e) {
                                if (e.status == 200) {
                                    Swal.fire({
                                        title: "Succesfully!",
                                        text: " the page will automatically redirect!.",
                                        icon: "success",
                                        showConfirmButton: false,
                                        timer: 1500
                                    }).then((result) => {
                                        location.reload();
                                    });
                                }
                            }
                        })

                    }
                });
            });
        });
    </script>
    @stack('js')
</body>

</html>
