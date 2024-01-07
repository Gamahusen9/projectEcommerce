@extends('layouts.template')

@section('content')
    <main class="container-fluid pt-5">
        <div class="d-flex flex-wrap pt-5 pb-5 mb-3 mx-5 border-bottom border-bold">
            <div class="owl-carousel">
                <div class="item"><img class="rounded-4" src="{{ asset('img/thumbnail.jpg') }}" alt=""></div>
                <div class="item"><img class="rounded-4" src="{{ asset('img/thumbnail1.jpg') }}" alt=""></div>
                <div class="item"><img class="rounded-4" src="{{ asset('img/thumbnail2.jpg') }}" alt=""></div>
                <div class="item"><img class="rounded-4" src="{{ asset('img/thumbnail3.jpg') }}" alt=""></div>
                <div class="item"><img class="rounded-4" src="{{ asset('img/thumbnail4.jpg') }}" alt=""></div>
            </div>
        </div>

        {{-- Kategori Pilihan --}}
        <div class="row pt-3">
            <div class="col-md-12 mt-3">
                <div class=" card pt-4 pb-5 mx-5 px-3 rounded-4" style="background-color:#0c134f;">
                    <div class="card-body text-light ">
                        <h4 class="card-title">Kategori Pilihan :</h4>
                        <div class="d-flex pt-3 ">
                            <img class="border border-dark-subtle border-5 rounded-3 mx-auto" width="160"
                                src="{{ asset('img/kategori_pilihan/accerlp.jpg') }}" alt="">
                            <img class="border border-dark-subtle border-5 rounded-3 mx-auto" width="160"
                                src="{{ asset('img/kategori_pilihan/maclp.jpg') }}" alt="">
                            <img class="border border-dark-subtle border-5 rounded-3 mx-auto" width="160"
                                src="{{ asset('img/kategori_pilihan/hplp.jpg') }}" alt="">
                            <img class="border border-dark-subtle border-5 rounded-3 mx-auto" width="160"
                                src="{{ asset('img/kategori_pilihan/legionlp.jpg') }}" alt="">
                            <img class="border border-dark-subtle border-5 rounded-3 mx-auto" width="160"
                                src="{{ asset('img/kategori_pilihan/msilp.jpg') }}" alt="">
                            <img class="border border-dark-subtle border-5 rounded-3 mx-auto" width="160"
                                src="{{ asset('img/kategori_pilihan/roglp.jpg') }}" alt="">
                        </div>
                        <div class="d-flex pt-4">
                        </div>
                    </div>
                </div>
            </div>

            {{-- Traktir Pengguna Baru --}}
            <div class="col-md-12 mt-3">
                <div class="card pt-5 pb-5 mx-5 px-3 rounded-4 bg-secondary">
                    <div class="card-body text-light">
                        <h4 class="card-title">Traktir Pengguna Baru </h4>
                    </div>
                </div>
            </div>

            {{-- Produk --}}
            <div class="grid gap-3 d-flex mx-5 mt-5 ">
                <div class=" mt-3">
                    <div class="card pt-1 pb-1 bg-secondary-subtle rounded-3">
                        <div class="card-body">
                            <img class="border rounded-2" width="253" src="{{ asset('img/cardproduklegion.jpg') }}"
                                alt="">
                            <h5 class="card-title pt-3">LENOVO LEGION PRO 5i</h5>
                            <h6 class="card-title">i9-13900HX RTX4070 1TB</h6>
                            <p class="card-text fs-5 fw-bold">Rp. 35.500.000</p>
                            <p class="card-text fw-bold text-secondary"><span class="text-danger">4%</span> Rp.
                                35.100.000</p>
                            <p class="card-text  fw-bolder text-dark"><i class="bi bi-patch-check-fill text-success"></i>
                                Jakarta
                                Pusat</p>
                            <button class="btn btn-outline-success col-md-12">+ Keranjang</button>
                        </div>
                    </div>
                </div>
                <div class=" mt-3">
                    <div class="card pt-1 pb-1 bg-secondary-subtle rounded-3">
                        <div class="card-body">
                            <img class="border rounded-2" width="253" src="{{ asset('img/cardproduklegion.jpg') }}"
                                alt="">
                            <h5 class="card-title pt-3">LENOVO LEGION PRO 5i</h5>
                            <h6 class="card-title">i9-13900HX RTX4070 1TB</h6>
                            <p class="card-text fs-5 fw-bold">Rp. 35.500.000</p>
                            <p class="card-text fw-bold text-secondary"><span class="text-danger">4%</span> Rp.
                                35.100.000</p>
                            <p class="card-text  fw-bolder text-dark"><i class="bi bi-patch-check-fill text-success"></i>
                                Jakarta
                                Pusat</p>
                            <button class="btn btn-outline-success col-md-12">+ Keranjang</button>
                        </div>
                    </div>
                </div>
                <div class=" mt-3">
                    <div class="card pt-1 pb-1 bg-secondary-subtle rounded-3">
                        <div class="card-body">
                            <img class="border rounded-2" width="253" src="{{ asset('img/cardproduklegion.jpg') }}"
                                alt="">
                            <h5 class="card-title pt-3">LENOVO LEGION PRO 5i</h5>
                            <h6 class="card-title">i9-13900HX RTX4070 1TB</h6>
                            <p class="card-text fs-5 fw-bold">Rp. 35.500.000</p>
                            <p class="card-text fw-bold text-secondary"><span class="text-danger">4%</span> Rp.
                                35.100.000</p>
                            <p class="card-text  fw-bolder text-dark"><i class="bi bi-patch-check-fill text-success"></i>
                                Jakarta
                                Pusat</p>
                            <button class="btn btn-outline-success col-md-12">+ Keranjang</button>
                        </div>
                    </div>
                </div>
                <div class=" mt-3">
                    <div class="card pt-1 pb-1 bg-secondary-subtle rounded-3">
                        <div class="card-body">
                            <img class="border rounded-2" width="253" src="{{ asset('img/cardproduklegion.jpg') }}"
                                alt="">
                            <h5 class="card-title pt-3">LENOVO LEGION PRO 5i</h5>
                            <h6 class="card-title">i9-13900HX RTX4070 1TB</h6>
                            <p class="card-text fs-5 fw-bold">Rp. 35.500.000</p>
                            <p class="card-text fw-bold text-secondary"><span class="text-danger">4%</span> Rp.
                                35.100.000</p>
                            <p class="card-text  fw-bolder text-dark"><i class="bi bi-patch-check-fill text-success"></i>
                                Jakarta
                                Pusat</p>
                            <button class="btn btn-outline-success col-md-12">+ Keranjang</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script>
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel({
                loop: true,
                margin: 5,
                nav: true,
                responsive: {
                    0: {
                        items: 1,
                        autoWidth: false,
                        center: true
                    },
                    600: {
                        items: 3,
                        autoWidth: true,
                        center: false
                    },
                    1000: {
                        items: 5,
                        autoWidth: true,
                        center: false
                    }
                },
                center: true,
                dots: false,
                navText: ["<i class='bi bi-chevron-left'></i>", "<i class='bi bi-chevron-right'></i>"],
                responsiveClass: true,
                autoplay: true,
                autoplayTimeout: 3000
            });
        });
    </script>
@endsection
