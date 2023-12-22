<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('img/logotranparan.png') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="shortcut icon" href="favicon.ico" type="{{ asset('img/logotranparan.png') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <title>LapCug. TECH</title>
</head>
<style>
        * {
            font-family: Pangram-ExtraLight;
        }

        @font-face {
            font-family: Pangram-ExtraLight;
            src: url({{ asset('PangramSans-FreeForPersonalUse/Pangram-FullFamily-FreeForPersonalUse/Pangram-Bold.otf') }});
        }
    body{
        margin: 0;
        padding: 0
    }

    .nav{
        display: flex;
        align-items: center;
        width: 1300px;
        height: 100px;
        background: #0C134F;
    }

    .nav img{
        width: 100px;
    }

    .nav H4{
        color:#03AEC6;
    }

    .nav input{
        width: 600px;
    }

    .nav i{
        font-size: 30px;
        margin-left: 30px;
        width: 50px;
        padding-left: 10px;
        padding-top: 3px;
        background: #5C469C;
        border-radius: 5px;
        height: 50px;
    }
</style>
<body>
    <div class="nav">
        <img src="{{ asset('img/logotranparan.png') }}" alt="">
        <h4>LapCug TECH</h4>
        <label for="search" style="color: white; margin:20px;">Cari Produk</label>
        <input type="text" name="search" id="search" placeholder="Cari Produk Disini...">
        <i class="bi bi-cart" style="color: white;"></i>

        <button type="button" style="margin-left: 30px;" class="btn btn-outline-info">Login</button>
        <button type="button" style="margin-left: 10px;" class="btn btn-warning">Register</button>
    </div>
</body>
</html>
