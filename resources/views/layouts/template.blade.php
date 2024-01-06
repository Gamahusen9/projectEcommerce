<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('img/logotranparan.png') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <title>LapCug. TECH</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap");
        @import url("https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400&display=swap");

        body {
            font-family: "Poppins", sans-serif;
        }

        body {
            --sb-track-color: #c1e1e6;
            --sb-thumb-color: #202230;
            --sb-size: 14px;

            scrollbar-color: var(--sb-thumb-color) var(--sb-track-color);
        }

        body::-webkit-scrollbar {
            width: var(--sb-size)
        }

        body::-webkit-scrollbar-track {
            background: var(--sb-track-color);
            border-radius: 30px;
        }

        body::-webkit-scrollbar-thumb {
            background: var(--sb-thumb-color);
            border-radius: 30px;
            border: 2px solid #00a4ef;
        }

        .owl-carousel .item img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .owl-nav {
            display: flex;
            justify-content: space-between;
            position: absolute;
            top: 50%;
            width: 100%;
            transform: translateY(-50%);
        }

        .owl-nav i {
            font-size: 3rem;
            color: #000;
            cursor: pointer;
        }
    </style>
</head>

<body>
    {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg fw-bold fixed-top" style="background-color: #0c134f">
        <div class="container">
            <img src="{{ asset('img/logotranparan.png') }}" width="70" alt="">
            <a class="navbar-brand fs-3" style="color: #03AEC6" href="#">LapCug.TECH</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Kategori
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex mx-auto" role="search">
                    <input class="form-control me-2 align-content-center mx-2" type="search"
                        placeholder="Cari di lapcug" aria-label="Search" style="width: 680px; ">
                </form>
                <button class="btn btn-primary mx-2" type="submit"><i class="bi bi-cart fs-4"></i></button>
                <button class="btn btn-outline-info mx-3" type="submit">Login</button>
                <button class="btn btn-warning " type="submit">Register</button>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        @yield('content')
    </div>

    {{-- FOOTER --}}
    <footer class="footer mt-5 pt-5 text-light rounded-3 rounded-bottom-0" style="background-color: #0c134f;">
        <div class="container">
            <div class="row">
                <div class="col-md-3 mx-3">
                    <h4 class="text-light">Tentang <span class="text-info fw-bold">LapCug .TECH</span></h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. dolorem obcaecati quos, possimus
                        pariatur veritatis rete, repellendus cupiditate
                        nostrum fugiat. Alias aut harum eligendi ipsam? Accusantium assumenda quisquam perferendis
                        cumque, earum laudantium et a asperiores, voluptas nihil, distinctio atque commodi
                        perspiciatis voluptates pariatur? Magni asperiores ea, voluptas nihil, !
                    </p>
                </div>
                <div class="col-md-4 mx-3">
                    <h4 class="text-light">Jual</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet, repellat voluptates aliquam est
                        voluptatum sint? Lorem ipsum, samet consectetur adipisicing elit. Amet, rep
                        voluptates aliquam est
                        voluptatum sint?</p>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam quo aperiam, nihil,
                        repellat nobis quis veniam officiis Lorem ips, dolor sit amet consectetur adipisicing.
                        Quisquam quo aperihil,
                        repellat nobis quis veniam officiis...</p>
                </div>
                <div class="col-md-2 mx-3">
                    <h4 class="text-light">Ikuti kami!</h4>
                    <div class="social-links">
                        <a href="#" class="text-light"><i
                                class="fab fa-twitter fs-3 bg-primary rounded-4 p-2"></i></a>
                        <a href="#" class="text-light"><i
                                class="fab fa-instagram fs-3 bg-danger rounded-4 p-2 "></i></a>
                        <a href="#" class="text-light"><i
                                class="fab fa-facebook fs-3 bg-primary rounded-4 p-2 "></i></a>
                        <a href="#" class="text-light"><i
                                class="fab fa-pinterest fs-3 bg-danger rounded-4 p-2 "></i></a>
                    </div>
                </div>
                <div class="col-md-1 mb-5 text-center align-self-center ml-md-3">
                    <img width="300" src="{{ asset('img/logotranparan.png') }}" alt="logoLapCug">
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
