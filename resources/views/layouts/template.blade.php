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
    <style>
        :root {
        --primary: #bd8ceb;
        --bg: #0C134F;
        --hover: #3498db;
        }
        * {
            font-family: Pangram-ExtraLight;
        }

        @font-face {
            font-family: Pangram-ExtraLight;
            src: url({{ asset('PangramSans-FreeForPersonalUse/Pangram-FullFamily-FreeForPersonalUse/Pangram-Bold.otf') }});
        }

        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        body {
            margin: 0;
            padding: 0;
            line-height: 1.5;
            font-family: 'Poppins', sans-serif;
            min-height: 1000px;

        }
        

        .nav {
            display: flex;
            align-items: center;
            width: 100%;
            height: 100px;
            background: var(--bg);
            color: #03AEC6;
        }

        .nav img {
            width: 100px;
        }

        .nav h4 {
            color: #03AEC6;
        }

        .nav input {
            width: 600px;
        }

        .nav i {
            font-size: 30px;
            margin-left: 30px;
            width: 50px;
            padding-left: 10px;
            padding-top: 3px;
            background: #5C469C;
            border-radius: 5px;
            height: 50px;
            color: white;
        }

        /* FOOTER */
        .container {
            max-width: 1170px;
            margin: auto;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
        }

        ul {
            list-style: none;
        }

        .footer {
            background-color: var(--bg);
            padding: 70px 0;
            position: relative;
            
        }

        .footer-col {
            width: 25%;
            padding: 0 15px;
        }

        .footer-col h4 {
            font-size: 18px;
            color: #ffffff;
            text-transform: capitalize;
            margin-bottom: 35px;
            font-weight: 500;
            position: relative;
        }

        .footer-col h4::before {
            content: '';
            position: absolute;
            left: 0;
            bottom: -10px;
            background-color: var(--primary);
            height: 2px;
            box-sizing: border-box;
            width: 50px;
        }

        .footer-col ul li:not(:last-child) {
            margin-bottom: 10px;
        }

        .footer-col ul li a {
            font-size: 16px;
            text-transform: capitalize;
            color: #ffffff;
            text-decoration: none;
            font-weight: 300;
            color: #bbbbbb;
            display: block;
            transition: all 0.3s ease;
        }

        .footer-col ul li a:hover {
            color: #ffffff;
            padding-left: 8px;
        }

        .footer-col .social-links a {
            display: inline-block;
            height: 40px;
            width: 40px;
            background-color: rgba(255, 255, 255, 0.2);
            margin: 0 10px 10px 0;
            text-align: center;
            line-height: 40px;
            border-radius: 50%;
            color: #ffffff;
            transition: all 0.5s ease;
        }

        .footer-col .social-links a:hover {
            color: #24262b;
            background-color: #ffffff;
        }

        /*responsive*/
        @media(max-width: 767px) {
            .footer-col {
                width: 50%;
                margin-bottom: 30px;
            }
        }

        @media(max-width: 574px) {
            .footer-col {
                width: 100%;
            }
        }
    </style>
    <title>LapCug. TECH</title>
</head>

<body>
    <div class="nav">
        <img src="{{ asset('img/logotranparan.png') }}" alt="">
        <h4>LapCug TECH</h4>
        <label for="search" style="color: white; margin:20px;">Cari Produk</label>
        <input type="text" name="search" id="search" placeholder="Cari Produk Disini...">
        <i class="bi bi-cart"></i>

        <button type="button" style="margin-left: 30px;" class="btn btn-outline-info">Login</button>
        <button type="button" style="margin-left: 10px;" class="btn btn-warning">Register</button>
    </div>
    <div class="container">
        {{-- bagian dinamis yang akan berubah tiap pagenya, harus di isi di file yang extends ke template ini --}}
        @yield('content')
    </div>

    {{-- FOOTER --}}
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Tentang LapCug .TECH</h4>
                    <ul>
                        <li><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa incidunt earum tenetur porro, eligendi ullam repellendus dolorum tempora. Quos expedita et odio nemo similique voluptates porro assumenda atque unde exercitationem eius sapiente pariatur reiciendis, dolore repellat magni, iusto voluptate hic quas itaque. Veritatis, quod eveniet dicta velit voluptas dolorum reprehenderit?</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Jual</h4>
                    <ul>
                        <li><a href="#">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet, repellat voluptates aliquam est voluptatum sint?</a></li>
                    </ul>
                    <br><br>
                     <ul>
                        <li><a href="#">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam quo aperiam, aliquam nihil, repellat nobis quis veniam officiis excepturi iste perferendis, est dolorum tempora neque?</a></li>
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
                    <img src="{{ asset('img/logotranparan.png') }}" alt="logoLapCug" style="max-width: 100%; max-height: 20rem;">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>