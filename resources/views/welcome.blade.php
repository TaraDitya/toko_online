<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Toko | Balanja</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- bootstrap icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        <!-- bootstrap css -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body >
        <div class="container">
        <div class="d-flex mt-3 p-2  bg-ligth border border-dark-subtle w-auto h-auto" style="border-radius: 10px;" width=400>
            <div class="d-flex float-start">
            <img src="./storage/img/profil-toko.jpg" class="rounded-circle float-start border border-dark-subtle" width=100 alt="profil-toko">
            <div class="deskripsi-toko">
            <h4 class="text-uppercase ms-2">balanja-id</h4>
            <p class="text-success ms-2" style="margin-bottom: -25px"><i class="bi bi-record-fill"></i><b>online</b><span class="text-dark ms-2 opacity-75" style="margin-top: -25px;"><b>.</b> Bandung</span></p>
            
            <div class="button mt-4">
            <button type="button" class="btn btn-success" width=400>follow</button> 
            </div>
            </div>
            </div>
        </div>
            <div class="detail">
                <!-- masukan content disini -->

            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>

</html>
