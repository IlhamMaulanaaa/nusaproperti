@extends('layout.main')

@section('content')


<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="UTF-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="images/favicon.png" rel="shortcut icon">

    <!--====== Google Font ======-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">

    <!--====== Vendor Css ======-->
    <link rel="stylesheet" href="css/Lib/fix/css/vendor.css">

    <!--====== Utility-Spacing ======-->
    <link rel="stylesheet" href="css/Lib/fix/css/utility.css">

    <!--====== App ======-->
    <link rel="stylesheet" href="css/Lib/fix/css/app.css">
</head>
<body class="config">
    
    <div id="app">


        <!--====== App Content ======-->
        <div class="app-content">

            <!--====== Section 1 ======-->
            <div class="u-s-p-t-120">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">

                            <!--====== Product Breadcrumb ======-->
                            <div class="pd-breadcrumb u-s-m-b-30">
                                <ul class="pd-breadcrumb__list">
                                    <li class="has-separator">

                                        <a href="index.hml">Home</a></li>
                                    <li class="is-marked">

                                        <a href="">Detail</a></li>
                                </ul>
                            </div>
                            <!--====== End - Product Breadcrumb ======-->


                            <!--====== Product Detail Zoom ======-->
                            <div class="pd u-s-m-b-30">
                                <div class="slider-fouc pd-wrap">
                                    <div id="pd-o-initiate">
                                        <div class="pd-o-img-wrap" data-src="/assets/pages/home/kota.jpg">

                                            <img class="u-img-fluid" src="/assets/pages/home/kota.jpg" data-zoom-image="/assets/pages/home/kota.jpg" alt=""></div>
                                        <div class="pd-o-img-wrap" data-src="/assets/pages/home/kota.jpg">

                                            <img class="u-img-fluid" src="/assets/pages/home/kota.jpg" data-zoom-image="/assets/pages/home/kota.jpg" alt=""></div>
                                        <div class="pd-o-img-wrap" data-src="/assets/pages/home/kota.jpg">

                                            <img class="u-img-fluid" src="/assets/pages/home/kota.jpg" data-zoom-image="/assets/pages/home/kota.jpg" alt=""></div>
                                        <div class="pd-o-img-wrap" data-src="/assets/pages/home/kota.jpg">

                                            <img class="u-img-fluid" src="/assets/pages/home/kota.jpg" data-zoom-image="/assets/pages/home/kota.jpg" alt=""></div>
                                        <div class="pd-o-img-wrap" data-src="/assets/pages/home/kota.jpg">

                                            <img class="u-img-fluid" src="/assets/pages/home/kota.jpg" data-zoom-image="/assets/pages/home/kota.jpg" alt=""></div>
                                    </div>

                                    <span class="pd-text">Klik untuk zoom lebih besar</span>
                                </div>
                                <div class="u-s-m-t-15">
                                    <div class="slider-fouc">
                                        <div id="pd-o-thumbnail">
                                            <div>

                                                <img class="u-img-fluid" src="/assets/pages/home/kota.jpg" alt=""></div>
                                            <div>

                                                <img class="u-img-fluid" src="/assets/pages/home/kota.jpg" alt=""></div>
                                            <div>

                                                <img class="u-img-fluid" src="/assets/pages/home/kota.jpg" alt=""></div>
                                            <div>

                                                <img class="u-img-fluid" src="/assets/pages/home/kota.jpg" alt=""></div>
                                            <div>

                                                <img class="u-img-fluid" src="/assets/pages/home/kota.jpg" alt=""></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--====== End - Product Detail Zoom ======-->
                        </div>
                        <div class="col-lg-7">

                            <!--====== Product Right Side Details ======-->
                            <div class="pd-detail">
                                <div>

                                    <span class="pd-detail__name">Rumah Minimalis</span></div>
                                <div>
                                    <div class="pd-detail__inline">

                                        <span class="pd-detail__price">Rp. 900.000.000</span>
                                </div>
                                <div class="u-s-m-b-15">
                                    <div class="pd-detail__inline">

                                        <span class="pd-detail__stock">Rumah</span>

                                        <span class="pd-detail__left">Dijual</span>
                                        <span class="pd-detail__left">Disewa</span></div>
                                </div>
                                <div class="u-s-m-b-15">

                                    <span class="pd-detail__preview-desc">Deskripsi Properti Anda disini Deskripsi Properti Anda disini Deskripsi Properti Anda disini Deskripsi Properti Anda disini Deskripsi Properti Anda disini Deskripsi Properti Anda disiniDeskripsi Properti Anda disiniDeskripsi Properti Anda disiniDeskripsi Properti Anda disiniDeskripsi Properti Anda disiniDeskripsi Properti Anda disini</span></div>
                                <div class="u-s-m-b-15">
                                    <div class="pd-detail__inline">

                                        <span class="pd-detail__click-wrap"><i class="far fa-heart u-s-m-r-6"></i>

                                            <a href="signin.html">Tambahkan Ke Favorite</a></div>
                                </div>
                                <div class="u-s-m-b-15">
                                    <form class="pd-detail__form">
                                        <div class="pd-detail-inline-2">
                                            <div class="u-s-m-b-15">

                                                <button class="btn btn--e-brand-b-2" type="submit">Tanyakan Agen</button></div>
                                        </div>
                                    </form>
                                </div>
                                <div class="u-s-m-b-15">

                                    <span class="pd-detail__label u-s-m-b-8">Kebijakan Produk:</span>
                                    <ul class="pd-detail__policy-list">
                                        <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                            <span>Keamanan Properti.</span></li>
                                        <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                            <span>Informasi Properti.</span></li>
                                        <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                            <span>Hak Cipta dan Penggunaan Materi.</span></li>
                                    </ul>
                                </div>
                            </div>
                            <!--====== End - Product Right Side Details ======-->
                        </div>
                    </div>
                </div>
            </div>

            <!--====== Product Detail Tab ======-->
            <div class="u-s-p-y-90">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="pd-tab">
                                <div class="u-s-m-b-30">
                                    <ul class="nav pd-tab__list">
                                        <li class="nav-item">

                                            <a class="nav-link active" data-toggle="tab" href="#pd-desc">DESCRIPTION</a></li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#pd-desc">
                                                    <i class="fas fa-plus"></i> TAMBAH UNIT
                                                </a>
                                            </li>
                                            
                                    </ul>
                                </div>
                                <div class="tab-content">

                                    <!--====== Tab 1 ======-->
                                    <div class="tab-pane fade show active" id="pd-desc">
                                        <div class="pd-tab__desc">
                                            <div class="u-s-m-b-15">
                                                <p>Deskripsi Properti Anda disini Deskripsi Properti Anda disini Deskripsi Properti Anda disini Deskripsi Properti Anda disini Deskripsi Properti Anda disini Deskripsi Properti Anda disiniDeskripsi Properti Anda disiniDeskripsi Properti Anda disiniDeskripsi Properti Anda disiniDeskripsi Properti Anda disiniDeskripsi Properti Anda disini</p>
                                            </div>
                                            <!-- <div class="u-s-m-b-30"><iframe src="https://www.youtube.com/embed/qKqSBm07KZk" allowfullscreen></iframe></div> -->
                                            <div class="u-s-m-b-30">
                                                <ul>
                                                    <li><i class="fas fa-check u-s-m-r-8"></i>

                                                        <span>Keamanan Properti.</span></li>
                                                    <li><i class="fas fa-check u-s-m-r-8"></i>

                                                        <span>Informasi Properti.</span></li>
                                                    <li><i class="fas fa-check u-s-m-r-8"></i>

                                                        <span>Hak Cipta dan Penggunaan Materi.</span></li>
                                                </ul>
                                            </div>
                                            <div class="u-s-m-b-15">
                                                <h4>INFORMASI PRODUK</h4>
                                            </div>
                                            <div class="u-s-m-b-15">
                                                <div class="pd-table gl-scroll">
                                                    <table>
                                                        <tbody>
                                                            <tr>
                                                                <td>Developer</td>
                                                                <td>Sutejo</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tipe Properti</td>
                                                                <td>Apartemen</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tipe Properti</td>
                                                                <td>Apartemen</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Lokasi</td>
                                                                <td>Jakarta Selatan</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Luas Bangunan</td>
                                                                <td>75 m²</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Luas Tanah</td>
                                                                <td>84 m²</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Kamar Tidur</td>
                                                                <td>2</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Kamar Mandi</td>
                                                                <td>2</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Fasilitas</td>
                                                                <td>Kolam Renang, Gym</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tahun Dibangun</td>
                                                                <td>2020</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Harga</td>
                                                                <td>Rp 900.000.000</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <!--====== End - Tab 1 ======-->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Product Detail Tab ======-->
            <div class="u-s-p-b-90">

                <!--====== Section Intro ======-->
                <div class="section__intro u-s-m-b-46">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section__text-wrap">
                                    <h1 class="section__heading u-c-secondary u-s-m-b-12">DAFTAR UNIT</h1>

                                    <span class="section__span u-c-grey">DAFTAR UNIT YANG TERCANTUM</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Intro ======-->


                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <div class="slider-fouc">
                            <div class="owl-carousel product-slider" data-item="4">
                                <div class="u-s-m-b-30">
                                    <div class="product-o product-o--hover-on">
                                        <div class="product-o__wrap">

                                            <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">

                                                <img class="aspect__img" src="/assets/pages/home/kota.jpg" alt=""></a>
                                            <div class="product-o__action-wrap">
                                                <ul class="product-o__action-list">
                                                    <li>

                                                        <a data-modal="modal" data-modal-id="#quick-look" data-tooltip="tooltip" data-placement="top" title="Quick View"><i class="fas fa-search-plus"></i></a></li>
                                                    <li>

                                                        <a data-modal="modal" data-modal-id="#add-to-cart" data-tooltip="tooltip" data-placement="top" title="Add to Cart"><i class="fas fa-plus-circle"></i></a></li>
                                                    <li>

                                                        <a href="signin.html" data-tooltip="tooltip" data-placement="top" title="Tambahkan Ke Favorite"><i class="fas fa-heart"></i></a></li>
                                                    <li>

                                                        <a href="signin.html" data-tooltip="tooltip" data-placement="top" title="Email me When the price drops"><i class="fas fa-envelope"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <span class="product-o__category">

                                            <a href="shop-side-version-2.html">Rumah</a></span>

                                        <span class="product-o__name">

                                            <a href="product-detail.html">Rumah Minimalis</a></span>

                                        <span class="product-o__price">Rp. 1.300.000.000</span>
                                    </div>
                                </div>
                                <div class="u-s-m-b-30">
                                    <div class="product-o product-o--hover-on">
                                        <div class="product-o__wrap">

                                            <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">

                                                <img class="aspect__img" src="/assets/pages/home/kota.jpg" alt=""></a>
                                            <div class="product-o__action-wrap">
                                                <ul class="product-o__action-list">
                                                    <li>

                                                        <a data-modal="modal" data-modal-id="#quick-look" data-tooltip="tooltip" data-placement="top" title="Quick View"><i class="fas fa-search-plus"></i></a></li>
                                                    <li>

                                                        <a data-modal="modal" data-modal-id="#add-to-cart" data-tooltip="tooltip" data-placement="top" title="Add to Cart"><i class="fas fa-plus-circle"></i></a></li>
                                                    <li>

                                                        <a href="signin.html" data-tooltip="tooltip" data-placement="top" title="Tambahkan Ke Favorite"><i class="fas fa-heart"></i></a></li>
                                                    <li>

                                                        <a href="signin.html" data-tooltip="tooltip" data-placement="top" title="Email me When the price drops"><i class="fas fa-envelope"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <span class="product-o__category">

                                            <a href="shop-side-version-2.html">Rumah</a></span>

                                        <span class="product-o__name">

                                            <a href="product-detail.html">Rumah Minimalis</a></span>

                                        <span class="product-o__price">Rp. 1.300.000.000</span>
                                    </div>
                                </div>
                                <div class="u-s-m-b-30">
                                    <div class="product-o product-o--hover-on">
                                        <div class="product-o__wrap">

                                            <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">

                                                <img class="aspect__img" src="/assets/pages/home/kota.jpg" alt=""></a>
                                            <div class="product-o__action-wrap">
                                                <ul class="product-o__action-list">
                                                    <li>

                                                        <a data-modal="modal" data-modal-id="#quick-look" data-tooltip="tooltip" data-placement="top" title="Quick View"><i class="fas fa-search-plus"></i></a></li>
                                                    <li>

                                                        <a data-modal="modal" data-modal-id="#add-to-cart" data-tooltip="tooltip" data-placement="top" title="Add to Cart"><i class="fas fa-plus-circle"></i></a></li>
                                                    <li>

                                                        <a href="signin.html" data-tooltip="tooltip" data-placement="top" title="Tambahkan Ke Favorite"><i class="fas fa-heart"></i></a></li>
                                                    <li>

                                                        <a href="signin.html" data-tooltip="tooltip" data-placement="top" title="Email me When the price drops"><i class="fas fa-envelope"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <span class="product-o__category">

                                            <a href="shop-side-version-2.html">Rumah</a></span>

                                        <span class="product-o__name">

                                            <a href="product-detail.html">Rumah Minimalis</a></span>

                                        <span class="product-o__price">Rp. 1.300.000.000</span>
                                    </div>
                                </div>
                                <div class="u-s-m-b-30">
                                    <div class="product-o product-o--hover-on">
                                        <div class="product-o__wrap">

                                            <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">

                                                <img class="aspect__img" src="/assets/pages/home/kota.jpg" alt=""></a>
                                            <div class="product-o__action-wrap">
                                                <ul class="product-o__action-list">
                                                    <li>

                                                        <a data-modal="modal" data-modal-id="#quick-look" data-tooltip="tooltip" data-placement="top" title="Quick View"><i class="fas fa-search-plus"></i></a></li>
                                                    <li>

                                                        <a data-modal="modal" data-modal-id="#add-to-cart" data-tooltip="tooltip" data-placement="top" title="Add to Cart"><i class="fas fa-plus-circle"></i></a></li>
                                                    <li>

                                                        <a href="signin.html" data-tooltip="tooltip" data-placement="top" title="Tambahkan Ke Favorite"><i class="fas fa-heart"></i></a></li>
                                                    <li>

                                                        <a href="signin.html" data-tooltip="tooltip" data-placement="top" title="Email me When the price drops"><i class="fas fa-envelope"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <span class="product-o__category">

                                            <a href="shop-side-version-2.html">Rumah</a></span>

                                        <span class="product-o__name">

                                            <a href="product-detail.html">Rumah Minimalis</a></span>

                                        <span class="product-o__price">Rp. 1.300.000.000</span>
                                    </div>
                                </div>
                                <div class="u-s-m-b-30">
                                    <div class="product-o product-o--hover-on">
                                        <div class="product-o__wrap">

                                            <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">

                                                <img class="aspect__img" src="/assets/pages/home/kota.jpg" alt=""></a>
                                            <div class="product-o__action-wrap">
                                                <ul class="product-o__action-list">
                                                    <li>

                                                        <a data-modal="modal" data-modal-id="#quick-look" data-tooltip="tooltip" data-placement="top" title="Quick View"><i class="fas fa-search-plus"></i></a></li>
                                                    <li>

                                                        <a data-modal="modal" data-modal-id="#add-to-cart" data-tooltip="tooltip" data-placement="top" title="Add to Cart"><i class="fas fa-plus-circle"></i></a></li>
                                                    <li>

                                                        <a href="signin.html" data-tooltip="tooltip" data-placement="top" title="Tambahkan Ke Favorite"><i class="fas fa-heart"></i></a></li>
                                                    <li>

                                                        <a href="signin.html" data-tooltip="tooltip" data-placement="top" title="Email me When the price drops"><i class="fas fa-envelope"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <span class="product-o__category">

                                            <a href="shop-side-version-2.html">Rumah</a></span>

                                        <span class="product-o__name">

                                            <a href="product-detail.html">Rumah Minimalis</a></span>

                                        <span class="product-o__price">Rp. 1.300.000.000</span>
                                    </div>
                                </div>
                                <div class="u-s-m-b-30">
                                    <div class="product-o product-o--hover-on">
                                        <div class="product-o__wrap">

                                            <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">

                                                <img class="aspect__img" src="/assets/pages/home/kota.jpg" alt=""></a>
                                            <div class="product-o__action-wrap">
                                                <ul class="product-o__action-list">
                                                    <li>

                                                        <a data-modal="modal" data-modal-id="#quick-look" data-tooltip="tooltip" data-placement="top" title="Quick View"><i class="fas fa-search-plus"></i></a></li>
                                                    <li>

                                                        <a data-modal="modal" data-modal-id="#add-to-cart" data-tooltip="tooltip" data-placement="top" title="Add to Cart"><i class="fas fa-plus-circle"></i></a></li>
                                                    <li>

                                                        <a href="signin.html" data-tooltip="tooltip" data-placement="top" title="Tambahkan Ke Favorite"><i class="fas fa-heart"></i></a></li>
                                                    <li>

                                                        <a href="signin.html" data-tooltip="tooltip" data-placement="top" title="Email me When the price drops"><i class="fas fa-envelope"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <span class="product-o__category">

                                            <a href="shop-side-version-2.html">Rumah</a></span>

                                        <span class="product-o__name">

                                            <a href="product-detail.html">Rumah Minimalis</a></span>

                                        <span class="product-o__price">Rp. 1.300.000.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Content ======-->
            </div>
            <!--====== End - Section 1 ======-->
        </div>
        <!--====== End - App Content ======-->



    </div>
    <!--====== End - Main App ======-->


    <!--====== Google Analytics: change UA-XXXXX-Y to be your site's ID ======-->
    <script>
        window.ga = function() {
            ga.q.push(arguments)
        };
        ga.q = [];
        ga.l = +new Date;
        ga('create', 'UA-XXXXX-Y', 'auto');
        ga('send', 'pageview')
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async defer></script>

    <!--====== Vendor Js ======-->
    <script src="css/Lib/fix/js/vendor.js"></script>

    <!--====== jQuery Shopnav plugin ======-->
    <script src="css/Lib/fix/js/jquery.shopnav.js"></script>

    <!--====== App ======-->
    <script src="css/Lib/fix/js/app.js"></script>

    <!--====== Noscript ======-->
    <noscript>
        <div class="app-setting">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="app-setting__wrap">
                            <h1 class="app-setting__h1">JavaScript dinonaktifkan di browser Anda.</h1>

                            <span class="app-setting__text">Aktifkan JavaScript di browser Anda atau tingkatkan ke browser yang mendukung JavaScript.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </noscript>
</body>
</html>

@endsection