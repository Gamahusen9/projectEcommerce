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
    <title>LapCug. TECH</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap");
        @import url("https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400&display=swap");

        body {
            font-family: "Poppins", sans-serif;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg fw-bold" style="background-color: #0c134f">
        <div class="container">
            <img src="{{ asset('img/logotranparan.png') }}" width="70" alt="">
            <a class="navbar-brand fs-3" style="color: #03AEC6" href="#">LapCug.Tech</a>
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
                        placeholder="Cari di lapcug" aria-label="Search" style="width: 690px; ">
                </form>
                <button class="btn btn-primary mx-2" type="submit"><i class="bi bi-cart fs-4"></i></button>
                <button class="btn btn-outline-info mx-3" type="submit">Login</button>
                <button class="btn btn-warning " type="submit">Register</button>
            </div>
        </div>
    </nav>



    {{-- FOOTER --}}
    {{-- <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Tentang LapCug .TECH</h4>
                    <ul>
                        <li><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa incidunt
                                earum tenetur porro, eligendi ullam repellendus dolorum tempora. Quos expedita et odio
                                nemo similique voluptates porro assumenda atque unde exercitationem eius sapiente
                                pariatur reiciendis, dolore repellat magni, iusto voluptate hic quas itaque. Veritatis,
                                quod eveniet dicta velit voluptas dolorum reprehenderit?</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Jual</h4>
                    <ul>
                        <li><a href="#">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet, repellat
                                voluptates aliquam est voluptatum sint?</a></li>
                    </ul>
                    <br><br>
                    <ul>
                        <li><a href="#">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam quo
                                aperiam, aliquam nihil, repellat nobis quis veniam officiis excepturi iste perferendis,
                                est dolorum tempora neque?</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Ikuti Kami</h4>
                    <ul>
                        <li><a href="#">Di sini gak tau apa</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <img width="350" src="{{ asset('img/logotranparan.png') }}" alt="logoLapCug">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer> --}}
</body>

</html>
