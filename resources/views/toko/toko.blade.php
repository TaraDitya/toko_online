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
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- title logo -->
    <link rel="icon" href="{{ asset('imgs/logo-balanja.png') }}" type="img/x-icon">

    <!-- Produk css -->
    <link rel="stylesheet" href="{{ asset('css/produk.css') }}">
    <!--toko css-->
    <link rel="stylesheet" href="{{ asset('css/toko.css') }}">

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <!--list css-->
    <link rel="stylesheet" href="{{ asset('css/list.css') }}">

</head>

<body>
    <!--header toko-->
    <div class="container pt-3">
        <div class="d-flex p-3  bg-ligth border border-dark-subtle w-auto h-auto justify-content-between"
            style="border-radius: 10px;" width="400">
            <div class="d-flex ">
                <img src="{{ asset('imgs/logo-balanja.png') }}"
                    class="rounded-circle float-start border border-dark-subtle object-fit-sm-contain mt-2"
                    width="70" height="70" alt="profil-toko">
                <div class="header-toko">
                    <h6 class="text-uppercase mt-2 ms-3"><b>balanja-id</b></h6>
                    <p class="text-success ms-3" style="margin-bottom: -25px; margin-top: -5px"><i class="bi bi-record-fill"></i><b
                            style="font-size: 15px">Online</b><span class="text-dark ms-2 opacity-75"
                            style="margin-top: -25px; font-size: 15px"><b>.</b> Bandung</span></p>

                    <div class="button mt-4 ms-3">
                        <button type="button" class="btn btn-sm btn-success ps-5 pe-5"><b>follow</b></button>
                        <button type="button"
                            class="btn btn-sm btn-light text-success border border-success ps-4 pe-4"><b>Chat
                                Penjual</b></button>

                        <!--Info toko icon-->
                        <a href="#popup" class="border border-dark-subtle p-2 pt-1 text-dark-emphasis"
                            title="info toko" style="border-radius: 5px; text-decoration: none;"><svg
                                xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor"
                                class="bi bi-info-circle-fill" viewBox="0 0 16 16">
                                <path
                                    d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                            </svg></a>

                        <!--info toko-->
                        <div class="popup " id="popup">
                            <div class="popup-content p-3">
                                <div class="header-popup d-flex justify-content-between">
                                    <h3 class="p-4 fw-bold text-uppercase">balanja.id</h3>
                                    <a href="#" class="popup-close" style="text-decoration: none;"><i
                                            class="bi bi-x" style="font-size: 30px;"></i></a>
                                </div>



                                <div class="container">
                                    <div class="row">
                                        <div class="col-3 p-2">
                                            <div class="pop-head text-uppercase">
                                                <h5>Deskipsi Toko</h5>
                                            </div>
                                            <hr>
                                            <div class="pop-deskipsi">
                                                <small>
                                                    <p style="line-height: 1.1;">Lorem ipsum dolor sit amet consectetur
                                                        adipisicing elit. officiis dolor quas earum beatae laborum ipsam
                                                        alias.</p>
                                                    <p class="text-secondary" style="line-height: 1;"><i
                                                            class="bi bi-geo-alt-fill"></i> Bandung</p>
                                                    <p class="text-secondary" style="line-height: 1;"><i
                                                            class="bi bi-door-open"></i> Buka sejak : January 2023</p>
                                                </small>
                                            </div>
                                        </div>
                                        <div class="col p-2 ">
                                            <div class="pop-head text-uppercase">
                                                <h5>catatan toko</h5>
                                            </div>
                                            <hr>
                                            <div class="dropdown">
                                                <button
                                                    class="btn btn-light dropdown-toggle w-100 border border-dark-subtle text-start d-flex justify-content-between align-items-center fw-medium"
                                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Informasi jadwal toko dan jadwal pengiriman
                                                </button>
                                                <ul class="dropdown-menu w-100 text-start p-2">
                                                    <li>
                                                        <p class="fw-medium" style="line-height: 1;">Open Shop:
                                                            Senin-Sabtu (hari minggu dan tanggal merah libur)</p>
                                                    </li>
                                                    <li>
                                                        <p style="line-height: 1;"><small>Lorem ipsum dolor sit amet
                                                                consectetur, adipisicing elit. Nihil deserunt sint enim,
                                                                nesciunt dicta provident ea quibusdam, facilis tempora
                                                                culpa ipsum alias sequi delectus asperiores nulla ipsam
                                                                esse consequuntur quasi.</small></p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <p class="fw-medium text-uppercase">langganan pengiriman</p>
                                    <div class="lampiran-toko d-flex">
                                        <div class="jnt p-2 d-flex border border-dark-subtle"
                                            style="border-radius: 10px;">
                                            <img src="{{ asset('jasa-pengiriman/jnt.png') }}"
                                                class="object-fit-sm-contain" style="padding-right: 5px;" width=50
                                                alt="">
                                            <p> pegiriman lewat JNT</p>
                                        </div>
                                        <div class="jne p-2 d-flex border border-dark-subtle ms-2"
                                            style="border-radius: 10px;">
                                            <img src="{{ asset('jasa-pengiriman/jne.png') }}"
                                                class="object-fit-sm-contain" style="padding-right: 5px;" width=50
                                                alt="">
                                            <p> pegiriman lewat JNE</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="" class="border border-dark-subtle p-2 pt-1 text-dark-emphasis" title="bagikan"
                            style="border-radius: 5px; text-decoration: none;"><svg xmlns="http://www.w3.org/2000/svg"
                                width="15" height="15" fill="currentColor" class="bi bi-share"
                                viewBox="0 0 16 16">
                                <path
                                    d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z" />
                            </svg></a>
                    </div>
                </div>
            </div>
            <!-- space between -->
            <div class="d-flex mt-3">
                <div class="d-flex flex-row mt-2">
                    <div class="justify-content-center ulasan">
                        <a href="/ulasan">
                            <p class="ps-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-star-fill mb-2 text-warning"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg><b> 4.8</b>
                            </p>
                            <p class="text-dark-emphasis pe-2" style="font-size: 0.9em; margin-top: -10px;">Rating &
                                Ulasan
                            </p>
                        </a>
                    </div>
                    <div class="border-end border-dark-subtle" style="height: 65%;"></div>
                    <div>
                        <p style="padding-left: 30px;"><b>± 3 jam</b></p>
                        <p class="text-dark-emphasis ps-2 pe-2" style="font-size: 0.9em; margin-top: -10px;">Pesanan
                            diproses</p>
                    </div>
                    <div class="border-end border-dark-subtle" style="height: 65%;"></div>
                    <div class="jam-operasi">
                        <a href="#jam-op" class="text-dark" style="text-decoration: none;">
                            <p class="ps-4"><b>08:00 - 16:00</b></p>
                            <p class="text-dark-emphasis pe-2" style="font-size: 0.9em; margin-top: -10px; margin-left: 20px;">Jam
                                operasi
                                toko</p>
                        </a>
                    </div>
                    <div class="jam-op" id="jam-op">
                        <div class="jam-op-content p-3">
                            <div class="header-jam-op d-flex justify-content-between">
                                <h5 class="ps-4 pt-4 fw-bold text-uppercase"> Jam Oprasional balanja.id</h5>
                                    <a href="#" class="jam-op-close pb-2 text-dark" style="text-decoration: none;"><i class="bi bi-x" style="font-size: 30px;"></i></a>
                            </div>

                            <div class="container ps-3">
                                <div class="deskripsi-jamop p-2 d-flex">
                                    <i class="bi bi-shop fs-3"></i>
                                    <p class="pt-3 ps-3" style="line-height: 1;"> <small>Pesanan di luar jam operasional akan berpotensi mengalami keterlambatan dalam pengiriman.</small></p>
                                </div>
                            </div>

                            <div class="container ps-3">
                                <div class="row ps-3 pb-2 pt-2 d-flex justify-content-between border-bottom border-dark-subtle" >
                                    <div class="col-sm text-space-between text-secondary">Senin</div>
                                    <div class="col-sm text-end text-black">08:00 - 17:00 WIB</div>
                                </div>
                                <div class="row ps-3 pb-2 pt-2 d-flex justify-content-between border-bottom border-dark-subtle" >
                                    <div class="col-sm text-space-between text-secondary">Selasa</div>
                                    <div class="col-sm text-end text-black">08:00 - 17:00 WIB</div>
                                </div>
                                <div class="row ps-3 pb-2 pt-2 d-flex justify-content-between border-bottom border-dark-subtle" >
                                    <div class="col-sm text-space-between text-secondary">Rabu</div>
                                    <div class="col-sm text-end text-black">08:00 - 17:00 WIB</div>
                                </div>
                                <div class="row ps-3 pb-2 pt-2 d-flex justify-content-between border-bottom border-dark-subtle" >
                                    <div class="col-sm text-space-between text-secondary">Kamis</div>
                                    <div class="col-sm text-end text-black">08:00 - 17:00 WIB</div>
                                </div>
                                <div class="row ps-3 pb-2 pt-2 d-flex justify-content-between border-bottom border-dark-subtle" >
                                    <div class="col-sm text-space-between text-secondary">Jum'at</div>
                                    <div class="col-sm text-end text-black">08:00 - 17:00 WIB</div>
                                </div>
                                <div class="row ps-3 pb-2 pt-2 d-flex justify-content-between" >
                                    <div class="col-sm text-space-between text-secondary">Sabtu</div>
                                    <div class="col-sm text-end text-black">08:00 - 16:00 WIB</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('toko.kontrol')
    <!--kontent-->
    <div class="detail mt-3 ">
        @yield('konten')

    </div>

    <!-- deskripsi toko -->
    <div class="container">
        <hr>
        <div class="deskripsi">
            <h5><b>Informasi Toko Balanja.id</b></h5>
            <br>
            <h6><b>deskripsi toko Balanja.id</b></h6>
            <p>Lorem ipsum dolor sit.</p>
            <br>

            <h5><b>buka sejak</b></h5>
            <h6>januari 2023</h6>
            <br>

            <h6><b>tentang toko balanja</b></h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis itaque quam at debitis ut totam,
                minus voluptate fugiat. Repellendus temporibus ipsam vitae amet excepturi quas! Facere cumque magni
                impedit doloribus nisi accusantium a optio quia voluptas explicabo soluta placeat in, pariatur
                laboriosam voluptates aliquam, magnam expedita minus. Earum iure aliquam expedita at sequi officiis eos
                harum voluptatibus aliquid vitae, saepe necessitatibus. Officiis corrupti corporis sed asperiores
                reprehenderit dolorem voluptate, et error explicabo quis impedit illo cumque esse possimus nulla
                adipisci iure deleniti iste natus velit dignissimos. Minima exercitationem nulla corrupti sapiente
                laudantium pariatur, rerum, odit sunt, ducimus vitae laborum. Possimus.</p>
        </div>
    </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
