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
        <div class="container pt-3">
        <div class="d-flex mt-3 p-3  bg-ligth border border-dark-subtle w-auto h-auto justify-content-between" style="border-radius: 10px;" width=400>
            <div class="d-flex ">
            <img src="./storage/img/profil-toko.jpg" class="rounded-circle float-start border border-dark-subtle " width=120 alt="profil-toko">
            <div class="deskripsi-toko">
            <h4 class="text-uppercase ms-2">balanja-id</h4>
            <p class="text-success ms-2" style="margin-bottom: -25px"><i class="bi bi-record-fill"></i><b>online</b><span class="text-dark ms-2 opacity-75" style="margin-top: -25px;"><b>.</b> Bandung</span></p>
            
            <div class="button mt-5 ms-2">
            <button type="button" class="btn btn-success ps-5 pe-5" ><b>follow</b></button> 
            <button type="button" class="btn btn-light text-success border border-success ps-4 pe-4"><b>Chat Penjual</b></button>
            <a href="" class="border border-dark-subtle p-2 pt-1 text-dark-emphasis" style="border-radius: 10px; text-decoration: none;"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
  <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
</svg></a>
            <a href="" class="border border-dark-subtle p-2 pt-1 text-dark-emphasis" style="border-radius: 10px; text-decoration: none;"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-share" viewBox="0 0 16 16">
  <path d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z"/>
</svg></a>
            </div>
            </div>
            </div>
<!-- space between -->
            <div class="d-flex h-25 mt-3">
            <div class="d-flex flex-row mb-3 mt-2">
                <div class="p-2 justify-content-center"><p class="mt-2 ps-4"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill mb-2 text-warning" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg><b> 4.8</b></p>
                <p class="text-dark-emphasis pe-2" style="font-size: 0.9em; margin-top: -10px;">Rating & Ulasan</p>
                </div>
                <div class="border-end border-dark-subtle"></div>
                <div class="p-2 mt-2"><p class="ps-4"><b>± 3 jam</b></p>
                <p class="text-dark-emphasis ps-2 pe-2" style="font-size: 0.9em; margin-top: -10px;">Pesanan diproses</p>
                </div>
                <div class="border-end border-dark-subtle"></div>
                <div class="p-2 mt-2"><p class="ps-3"><b>08:00 - 16:00</b></p>
                <p class="text-dark-emphasis ps-3 pe-2" style="font-size: 0.9em; margin-top: -10px;">Jam oprasi toko</p></div>
            </div>
            </div>
            </div>
        </div>
            <div class="detail mt-3 " >
                <!-- masukan content toko beranda,produk,ulasan disini -->
                <!-- menggunakan include -->
                <!-- bikin we dulu halamannya nanti di include nya :) -->
                <!-- mangat 💪 -->

            </div>

            <!-- info toko -->
            <div class="container">
                <hr>
            <div class="deskripsi">
                <h5><b>Lorem ipsum dolor sit amet consectetur adipisicing elit.</b></h5>
                <h6>deskripsi toko Balanja.id</h6>
                <br>
                
                <h5><b>buka sejak</b></h5>
                <h6>januari 2023</h6>
                <br>

                <h6><b>tentang toko balanja</b></h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis itaque quam at debitis ut totam, minus voluptate fugiat. Repellendus temporibus ipsam vitae amet excepturi quas! Facere cumque magni impedit doloribus nisi accusantium a optio quia voluptas explicabo soluta placeat in, pariatur laboriosam voluptates aliquam, magnam expedita minus. Earum iure aliquam expedita at sequi officiis eos harum voluptatibus aliquid vitae, saepe necessitatibus. Officiis corrupti corporis sed asperiores reprehenderit dolorem voluptate, et error explicabo quis impedit illo cumque esse possimus nulla adipisci iure deleniti iste natus velit dignissimos. Minima exercitationem nulla corrupti sapiente laudantium pariatur, rerum, odit sunt, ducimus vitae laborum. Possimus.</p>
            </div>
            </div>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>

</html>
