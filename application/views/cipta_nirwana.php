<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Cipta Nirwana Pratama - Official Website</title>

    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/revolution-slider.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/responsive.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet">

    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url();?>assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url();?>assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url();?>assets/images/favicon/favicon-16x16.png">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>

<body>

    <div class="page-wrapper">

        <div class="preloader"></div>

        <header class="main-header">

            <div class="header-top">
                <div class="auto-container">
                    <div class="clearfix">
                        <div class="top-left">
                            <p>Selamat datang di PT. Cipta Nirwana Pratama</p>
                        </div>
                        <div class="top-right clearfix">
                            <ul class="clearfix">
                                <li class="quote-btn-box"><a data-target="footer" class="quote-btn scroll-to-target">Ada
                                        Proyek?</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header-upper">
                <div class="auto-container">
                    <div class="clearfix">

                        <div class="pull-left logo-outer">
                            <div class="logo">
                                <a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/images/logo.png"
                                        width="120" alt="Main logo" title=""></a>
                            </div>
                        </div>

                        <div class="pull-right upper-right clearfix">
                            <div class="upper-column info-box">
                                <div class="icon-box"><span class="flaticon-house-outline"></span></div>
                                <ul>
                                    <li><strong>Komplek Ruko Tiban Sentra Niaga (Tisenia)</strong></li>
                                    <li>Blok E #1 Tiban, Batam</li>
                                </ul>
                            </div>
                            <div class="upper-column info-box">
                                <div class="icon-box"><span class="flaticon-e-mail-envelope"></span></div>
                                <ul>
                                    <li><strong>Kirim email Anda</strong></li>
                                    <li>ciptanirwana@gmail.com</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="header-lower">

                <div class="auto-container">
                    <div class="nav-outer clearfix menu-bg">
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <!-- Toggle Button -->
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li class="current"><a class="scroll-to-target" data-target="#home">Home</a></li>
                                    <li><a class="scroll-to-target" data-target="#about">Tentang Kami</a></li>
                                    <li><a class="scroll-to-target" data-target="#project">Proyek Kami</a></li>
                                    <li><a class="scroll-to-target" data-target="#gallery">Galeri</a></li>
                                    <li><a class="scroll-to-target" data-target="#contact">Kontak Kami</a></li>
                                </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->
                        <div class="btn-box">
                            <a href="<?php echo base_url();?>file/Booklet_-_Cipta_Nirwana_Pratama_PT" class="brochure-btn theme-btn"><span
                                    class="icon fa fa-download theme_color"></span>&nbsp; Download Booklet</a>
                        </div>
                    </div>
                </div>
            </div>

            <!--Sticky Header-->
            <div class="sticky-header">
                <div class="auto-container clearfix">
                    <div class="logo pull-left">
                        <a href="<?php echo base_url();?>" class="img-responsive"><img src="<?php echo base_url();?>assets/images/logo.png"
                                width="120" alt="Logo sticky" title=""></a>
                    </div>

                    <div class="right-col pull-right">
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li class="current"><a class="scroll-to-target" data-target="#home">Home</a></li>
                                    <li><a class="scroll-to-target" data-target="#about">Tentang Kami</a></li>
                                    <li><a class="scroll-to-target" data-target="#project">Proyek Kami</a></li>
                                    <li><a class="scroll-to-target" data-target="#gallery">Galeri</a></li>
                                    <li><a class="scroll-to-target" data-target="#contact">Kontak Kami</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>

                </div>
            </div> <!-- kelar Sticky Header-->

        </header>

        <section class="main-slider" data-start-height="750" data-slide-overlay="yes" id="home">

            <div class="tp-banner-container">
                <div class="tp-banner">
                    <ul>
                        <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="<?php echo base_url();?>assets/images/main-slider/image-1.jpg"
                            data-saveperformance="off" data-title="Awesome Title Here">
                            <img src="<?php echo base_url();?>assets/images/main-slider/image-1.jpg" alt=""
                                data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

                            <div class="overlay-slide"></div>

                            <div class="tp-caption sfl sfb tp-resizeme" data-x="left" data-hoffset="15" data-y="center"
                                data-voffset="-100" data-speed="1500" data-start="500" data-easing="easeOutExpo"
                                data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3"
                                data-endspeed="1200" data-endeasing="Power4.easeIn">
                                <div class="title">Selamat datang di CNP</div>
                            </div>

                            <div class="tp-caption sfl sfb tp-resizeme" data-x="left" data-hoffset="15" data-y="center"
                                data-voffset="10" data-speed="1500" data-start="1000" data-easing="easeOutExpo"
                                data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3"
                                data-endspeed="1200" data-endeasing="Power4.easeIn">
                                <h2>Cipta Nirwana Pratama, PT <br> Perusahaan Trucking Terdepan di Batam</h2>
                            </div>

                        </li>

                        <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="<?php echo base_url();?>assets/images/main-slider/image-2.jpg"
                            data-saveperformance="off" data-title="Awesome Title Here">
                            <img src="<?php echo base_url();?>assets/images/main-slider/image-2.jpg" alt=""
                                data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

                            <div class="overlay-slide"></div>

                            <div class="tp-caption sfl sfb tp-resizeme" data-x="left" data-hoffset="15" data-y="center"
                                data-voffset="-100" data-speed="1500" data-start="500" data-easing="easeOutExpo"
                                data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3"
                                data-endspeed="1200" data-endeasing="Power4.easeIn">
                                <div class="title">Profesional adalah nama tengah kami</div>
                            </div>

                            <div class="tp-caption sfl sfb tp-resizeme" data-x="left" data-hoffset="15" data-y="center"
                                data-voffset="10" data-speed="1500" data-start="1000" data-easing="easeOutExpo"
                                data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3"
                                data-endspeed="1200" data-endeasing="Power4.easeIn">
                                <h2>Didukung oleh SDM yang berkualitas <br> di berbagai bidang.</h2>
                            </div>

                        </li>

                        <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="<?php echo base_url();?>assets/images/main-slider/image-3.jpg"
                            data-saveperformance="off" data-title="Awesome Title Here">
                            <img src="<?php echo base_url();?>assets/images/main-slider/image-3.jpg" alt=""
                                data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

                            <div class="overlay-slide"></div>

                            <div class="tp-caption sfl sfb tp-resizeme" data-x="left" data-hoffset="15" data-y="center"
                                data-voffset="-100" data-speed="1500" data-start="500" data-easing="easeOutExpo"
                                data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3"
                                data-endspeed="1200" data-endeasing="Power4.easeIn">
                                <div class="title">Ekspedisi darat adalah keahlian kami</div>
                            </div>

                            <div class="tp-caption sfl sfb tp-resizeme" data-x="left" data-hoffset="15" data-y="center"
                                data-voffset="10" data-speed="1500" data-start="1000" data-easing="easeOutExpo"
                                data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3"
                                data-endspeed="1200" data-endeasing="Power4.easeIn">
                                <h2>Kami siap menerima segala bentuk kerjasama <br> swasta maupun pemerintah.</h2>
                            </div>

                        </li>

                    </ul>

                </div>
            </div>
        </section>


        <section class="welcome-section">
            <div class="auto-container">
                <div class="top-title">
                    <div class="row clearfix">
                        <div class="col-md-4 col-sm-5 col-xs-12">
                            <h2>Selamat datang di <br><strong>Cipta Nirwana Pratama</strong></h2>
                        </div>
                        <div class="col-md-8 col-sm-7 col-xs-12">
                            <div class="text">
                                <p>
                                    Perusahaan jasa ekspedisi dan trucking dengan pelayanan prima dan professional
                                    berbasis di Batam, Kepulauan Riau.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="col-md-6 col-sm-12">
                        <div class="welcome-item big">
                            <div class="img-box">
                                <img src="<?php echo base_url();?>assets/images/gallery/6.jpg" alt="">
                            </div>
                            <div class="content">
                                <h3>Ekspedisi Darat</h3>
                                <div class="text">
                                    <p>Melayani jasa pengangkutan ekspedisi darat/trucking container dari pelabuhan
                                        bongkar ke-gudang customer.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="welcome-item display-table">
                            <div class="img-box">
                                <img src="<?php echo base_url();?>assets/images/gallery/5.jpg" alt="">
                            </div>
                            <div class="content">
                                <h3>Rental Truck Crane</h3>
                                <div class="text">
                                    <p>Melayani jasa pengangkutan sarana penunjang seperti Genset, Kompresor,
                                        memindahkan material, pembuatan gedung, dan workshop.</p>
                                </div>
                            </div>
                        </div>
                        <div class="welcome-item display-table">
                            <div class="img-box">
                                <img src="<?php echo base_url();?>assets/images/resource/airplane.jpg" alt="">
                            </div>
                            <div class="content">
                                <h3>Tour & Travel</h3>
                                <div class="text">
                                    <p>Melayani tiket pesawat dalam dan luar negeri, tour dalam dan luar negeri.</p>
                                </div>
                            </div>
                        </div>
                        <div class="welcome-item display-table">
                            <div class="img-box">
                                <img src="<?php echo base_url();?>assets/images/resource/kabah.jpg" alt="">
                            </div>
                            <div class="content">
                                <h3>Umroh & Haji</h3>
                                <div class="text">
                                    <p>Melayani kegiatan umroh dan haji.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="we_are clearfix">
            <div class="left_side float_left">
            </div> <!-- End Left_Side -->
            <div class="right_side float_right">
                <div class="we_are_deatails">
                    <!--Sec Title-->
                    <div class="sec-title light">
                        <h2>Visi dan Misi</h2>
                        <div class="separater"></div>
                    </div>
                    <p>Menjadi perusahaan jasa transportasi dan menyediakan alat berat lainnya yang handal, aman, dan
                        tepat waktu <br><br>
                        Membangun hubungan yang saling mendukung dengan mitra usaha. Membangun sumber daya manusia yang
                        jujur profesional dengan memanfaatkan teknologi informasi</p>
                    <div class="list_item">
                        <span class="flaticon-rocket"></span>
                        <p>Quality <br>Work</p>
                        <span class="flaticon-construction-tool-vehicle-with-crane-lifting-materials"></span>
                        <p>Heavy <br>Matarials</p>
                        <span class="flaticon-engineer"></span>
                        <p class="support">Expert <br>Engineer</p>
                    </div>
                </div>
            </div> <!-- End right_side -->
        </section>

        <section class="introduce_area_two" id="about">
            <div class="auto-container">

                <!--Sec Title-->
                <div class="sec-title">
                    <h2>Tentang <br><small>Cipta Nirwana Pratama, PT.</small></h2>
                    <div class="separater"></div>
                </div>

                <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="intorduce_img">
                            <img src="<?php echo base_url();?>assets/images/resource/about.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12 col-xs-12 margintop-30">
                        <div class="introduce_heading">
                            <h2>Kami siap bermitra <span>dengan Anda </span><br>Beritau kami apa yang bisa kami bantu.</h2>
                            <p>Di tengah banyaknya pesaing dalam dunia usaha khususnya dalam bidang Trucking dan
                                Ekspedisi, kami PT. Cipta Nirwana Pratama bergerak di bidang Pengadaan Jasa Ekspedisi
                                dan Trucking tetap turut berpartisipasi untuk berkarya dalam pelayanan.</p>
                        </div>
                        <div class="row">
                            <div class="col-md-5 col-sm-6 col-xs-12">
                                <div class="text">
                                    Dengan tujuan yang pasti serta idealisme yang tinggi, kami tetap konsisten
                                    dengan komitmen awal pada saat mendirikan perusahaan. Kami akan mencoba berkarya
                                    dan memberikan SDM yang berkualitas di berbagai bidang dalam mengerjakan proyek-
                                    proyek di lingkungan pemerintah maupun swasta yang diselesaikan dengan baik.
                                    Kepuasan klien adalah tujuan kami, sekaligus menjadi motto dalam pelaksanaan
                                    proyek–proyek
                                    nantinya.
                                </div>
                            </div>
                            <div class="col-md-7 col-sm-6 col-xs-12">
                                <div class="icon_home_two">
                                    <div class="single_icon_two">
                                        <i class="fa fa-bus"></i>
                                    </div>
                                    <div class="icon_details_two">
                                        <h2>Ekspedisi darat</h2>
                                        <p>Melayani jasa pengangkutan ekspedisi darat/trucking container dari pelabuhan
                                            bongkar ke-gudang customer.</p>
                                        <div class="separator"></div>
                                    </div>
                                </div>
                                <div class="icon_home_two">
                                    <div class="single_icon_two">
                                        <i class="fa fa-truck"></i>
                                    </div>
                                    <div class="icon_details_two">
                                        <h2>Rental Truck Crane</h2>
                                        <p>Melayani jasa pengangkutan sarana penunjang seperti Genset, Kompresor,
                                            memindahkan material, dan lainnya.</p>
                                        <div class="separator"></div>
                                    </div>
                                </div>
                                <div class="icon_home_two">
                                    <div class="single_icon_two">
                                        <i class="fa fa-plane"></i>
                                    </div>
                                    <div class="icon_details_two">
                                        <h2>Tour & Travel dan Umroh & Haji</h2>
                                        <p>Melayani tiket pesawat dalam & luar negeri, tour dalam dan luar negeri, dan
                                            umroh & haji.</p>
                                        <div class="separator"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!--Sidebar Page-->
        <div class="sidebar-page-container blog-page">
            <div class="auto-container">
                <div class="row clearfix">

                    <!--Content Side-->
                    <div class="content-side pull-right col-lg-9 col-md-8 col-sm-12 col-xs-12">
                        <!--Services Single-->
                        <div class="services-single">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="images/resource/services-single.jpg" alt="" />
                                </div>
                                <div class="services-content">
                                    <div class="text">
                                        <h4>Divisi Spesial Kami</h4>
                                        <p>PT. Cipta Nirwana Pratama merupakan perusahaan yang telah berdiri sejak 2
                                            Febuari 2018. Berdiri sebagai Perusahaan yang berfokus pada bisnis In-Land
                                            Transportation.

                                            Saat ini PT. Cipta Nirwana Pratama memiliki Rekanan Perusahaan yang cukup
                                            baik di Malaysia yang bergerak dalam bidang Konstruksi Oil & Gas.
                                        </p>
                                        <p>
                                            Setelah beberapa tahun menjalankan bisnis, Dewan komisaris melihat banyak
                                            peluang dalam bidang Konstruksi, khususnya Elektrikal dan Instrument

                                            Dengan saran dan dukungan yang kuat dari E&I team yang dimiliki, maka,
                                            terbentuklah PT.Cipta Nirwana Pratama dengan divisi khusus Electrical &
                                            Instrument
                                        </p>
                                        <br>
                                        <div class="row clearfix">
                                            <!--Services Block Three-->
                                            <div class="services-block-three style-two col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                <div class="inner-box">
                                                    <div class="icon-box">
                                                        <span class="icon flaticon-light-bulb"></span>
                                                    </div>
                                                    <div class="content-box">
                                                        <h3>Visi Kami</h3>
                                                        <ul>
                                                            <li>
                                                                Kami akan selalu menyediakan Solusi dan Pelayanan yang
                                                                Innovative, Prima, dan Tepat Waktu untuk kesuksesan
                                                                para Customer kami.
                                                            </li>
                                                            <li>
                                                                Serta akan senantiasa Mengedepankan Mutu, Keselamatan,
                                                                Kesehatan, serta Aspek Lingkungan dalam setiap
                                                                pekerjaan.
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Services Block Three-->
                                            <div class="services-block-three style-two col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                <div class="inner-box">
                                                    <div class="icon-box">
                                                        <span class="icon flaticon-light-bulb"></span>
                                                    </div>
                                                    <div class="content-box">
                                                        <h3>Misi Kami</h3>
                                                        <ul>
                                                            <li>Selalu berfokus kepada Kebutuhan Customer</li>
                                                            <li>Selalu melakukan Perbaikan Berkesinambungan dalam segi
                                                                Kualitas Produk, dan Pekerjaan yang kami lakukan</li>
                                                            <li>Mengutamakan keselamatan kerja</li>
                                                            <li>Membuat perencanaan dalam segala hal</li>
                                                            <li>Memantapkan kepedulian dalam pengendalian pencemaran
                                                                lingkungan</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Two Column-->
                                    <div class="two-column">
                                        <div class="row clearfix">
                                            <!--Image Column-->
                                            <div class="image-column col-md-4 col-sm-4 col-xs-12">
                                                <div class="image">
                                                    <img src="<?php echo base_url();?>assets/images/resource/about-placeholder.jpg" alt="" />
                                                </div>
                                            </div>
                                            <!--Content Column-->
                                            <div class="content-column col-md-8 col-sm-8 col-xs-12">
                                                <h4>Strength Points</h4>
                                                <div class="text">PT. Cipta Nirwana Pratama memiliki titik kekuatan
                                                    yang dapat memastikan bahwa kami mampu mengerjakan pekerjaan sesuai
                                                    dengan harapan Customer.</div>
                                                <ul class="list-style-one">
                                                    <li>Kami memiliki Project Team yang kuat serta berpengalaman dalam
                                                        bidang yang kami kerjakan, guna mendukung kesuksesan dari
                                                        setiap pekerjaan.</li>
                                                    <li>Seluruh Team yang kami miliki, telah berpengalaman dan ahli
                                                        dalam bidang Konstruksi Oil & Gas, Shipyard, Sipil, serta
                                                        Konstruksi-konstruksi khusus lainnya.</li>
                                                    <li>Kami juga sangat berkomitmen dalam pemenuhan Keselamatan Kerja,
                                                        Kesehatan, serta kepatuhan Lingkungan.</li>
                                                    <li>Beberapa contoh project yang telah dikerjakan oleh team kami
                                                        seperti ExxonMobil, Yamal LNG, PNG, GLNG, Aligator Crane Barge,
                                                        Castoro Oto Crane Barge, Gall Installer, Cairn Modul, dll.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Two Column-->
                                    <div class="two-column">
                                        <div class="row clearfix">
                                            <!--Content Column-->
                                            <div class="content-column col-md-8 col-sm-8 col-xs-12">
                                                <h4>Health, Safety, and Environment</h4>
                                                <ul class="list-style-one">
                                                    <li>Dalam menjalankan bisnisnya, PT. Cipta Nirwana Pratama sangat
                                                        peduli terhadap Keselamatan Kerja, Kesehatan, serta Lingkungan
                                                        Pekerjaan.</li>
                                                    <li>Kami berkomitmen akan senantiasa mematuhi serta mengaplikasikan
                                                        seluruh aturan keselamatan kerja, termasuk Prosedur Kerja,
                                                        Kebijakan, Instruksi Kerja, Serta Izin Kerja dalam seluruh
                                                        kegiatan produksi.</li>
                                                    <li>Team Safety kami memiliki kualifikasi serta kemampuan yang
                                                        handal yang akan selalu menjadi Role Model bagi personel lain
                                                        yang tergabung dalam kegiatan pekerjaan kami.</li>
                                                </ul>
                                            </div>
                                            <!--Image Column-->
                                            <div class="image-column col-md-4 col-sm-4 col-xs-12">
                                                <div class="image">
                                                    <img src="<?php echo base_url();?>assets/images/resource/about-placeholder.jpg" alt="" />
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Sidebar-->
                    <div class="sidebar-side pull-left col-lg-3 col-md-4 col-sm-12 col-xs-12">
                        <aside class="sidebar">

                            <!-- Sidebar Category -->
                            <div class="sidebar-widget sidebar-category">
                                <h2>Electrical <br> Equipments <br> Division</h2>
                            </div>

                            <!-- Sidebar Brouchers -->
                            <div class="sidebar-widget sidebar-broucher">
                                <div class="sidebar-title">
                                    <h2>Produk & Layanan</h2>
                                </div>
                                <ul class="brouchers">
                                    <li>
                                        <span class="icon flaticon-pdf"></span> 
                                        Electrical – Installation / Field Work
                                    </li>
                                    <li>
                                        <span class="icon flaticon-file"></span>
                                        Fire & Gas Detection System
                                    </li>
                                    <li>
                                        <span class="icon flaticon-file-1"></span>
                                        Electrical – Testing & Commissioning
                                    </li>
                                    <li>
                                        <span class="icon flaticon-pdf"></span> 
                                        HT & LV Cable
                                    </li>
                                    <li>
                                        <span class="icon flaticon-file"></span>
                                        Transformer Testing
                                    </li>
                                    <li>
                                        <span class="icon flaticon-file-1"></span>
                                        AC / DC High Potential Testing
                                    </li>
                                    <li>
                                        <span class="icon flaticon-pdf"></span> 
                                        Contact Resistance Testing
                                    </li>
                                    <li>
                                        <span class="icon flaticon-file"></span>
                                        Protective Relays CalibrationPrimary & Secondary Injection Testing
                                    </li>
                                    <li>
                                        <span class="icon flaticon-file-1"></span>
                                        Current & Potential Transformer Testing
                                    </li>
                                    
                                    <li>
                                        <span class="icon flaticon-pdf"></span> 
                                        UPS System & Battery / Charger Testing
                                    </li>
                                    <li>
                                        <span class="icon flaticon-file"></span>
                                        Electrical System Trouble Shooting
                                    </li>
                                    <li>
                                        <span class="icon flaticon-file-1"></span>
                                        Instrumentation – Testing & Commissioning
                                    </li>
                                    <li>
                                        <span class="icon flaticon-pdf"></span> 
                                        DCS System
                                    </li>
                                    <li>
                                        <span class="icon flaticon-file"></span>
                                        I/O Panel Wiring
                                    </li>
                                    <li>
                                        <span class="icon flaticon-file-1"></span>
                                        Panel Component Assembly & Wiring Work
                                    </li>
                                    <li>
                                        <span class="icon flaticon-pdf"></span> 
                                        Bow Truster System
                                    </li>
                                    <li>
                                        <span class="icon flaticon-file"></span>
                                        Rewinding Motor
                                    </li>
                                    <li>
                                        <span class="icon flaticon-file-1"></span>
                                        Cleaning Panel System
                                    </li>

                                    <li>
                                        <span class="icon flaticon-pdf"></span> 
                                        Generator System
                                    </li>
                                    <li>
                                        <span class="icon flaticon-file"></span>
                                        Air Conditioning
                                    </li>
                                    <li>
                                        <span class="icon flaticon-file-1"></span>
                                        HV & LV Equipment Installation
                                    </li>
                                    <li>
                                        <span class="icon flaticon-pdf"></span> 
                                        Power & Control Cable Way & Cabling
                                    </li>
                                    <li>
                                        <span class="icon flaticon-file"></span>
                                        Termination of HT & LV Cable
                                    </li>
                                    <li>
                                        <span class="icon flaticon-file-1"></span>
                                        Lighting & Small Power
                                    </li>
                                    <li>
                                        <span class="icon flaticon-pdf"></span> 
                                        Earthing & Lightning Protection System Installation
                                    </li>
                                    <li>
                                        <span class="icon flaticon-file"></span>
                                        Heat Tracing System
                                    </li>
                                    <li>
                                        <span class="icon flaticon-file-1"></span>
                                        Instrumentation – Installation / Field Work
                                    </li>

                                    <li>
                                        <span class="icon flaticon-pdf"></span> 
                                        Installation of Control Room Equipment & Instrument Panel
                                    </li>
                                    <li>
                                        <span class="icon flaticon-file"></span>
                                        Field Instrument Device Installation
                                    </li>
                                    <li>
                                        <span class="icon flaticon-file-1"></span>
                                        Instrument & Fiber Optic Cable Way & Cabling Work
                                    </li>
                                    <li>
                                        <span class="icon flaticon-pdf"></span> 
                                        Termination of Instrument & Fiber Optic Cable
                                    </li>
                                    <li>
                                        <span class="icon flaticon-file"></span>
                                        Instrument Impulse Piping & Tubing Work
                                    </li>
                                    <li>
                                        <span class="icon flaticon-file-1"></span>
                                        Instrument Air Piping & Tubing Work
                                    </li>
                                    <li>
                                        <span class="icon flaticon-pdf"></span> 
                                        Pre-commissioning & Commissioning Assistance
                                    </li>
                                    <li>
                                        <span class="icon flaticon-file"></span>
                                        Building of Remote Instrument Enclosure
                                    </li>
                                    <li>
                                        <span class="icon flaticon-file-1"></span>
                                        Communication System
                                    </li>
                                    <li>
                                        <span class="icon flaticon-file-1"></span>
                                        Dan lain-lain, Sesuai Enquiry.
                                    </li>
                                </ul>
                            </div>

                            <!-- Quote Widget-->
                            <div class="sidebar-widget quote-widget">
                                <div class="inner-box">
                                    <h2>Free Consultation</h2>
                                    <div class="text">Ada sesuatu yang ingin ditanyakan? Jangan sungkan.</div>
                                    <a href="#contact" class="theme-btn btn-style-one">Hubungi Kami</a>
                                </div>
                            </div>

                        </aside>
                    </div>
                    <!--End Sidebar-->

                </div>
            </div>
        </div>

        <section class="cases-section grey-bg" id="project">
            <div class="auto-container">
                <div class="sec-title centered">
                    <h2>Proyek-proyek Kami</h2>
                    <div class="separater"></div>
                </div>
                <div class="row clearfix">
                    <div class="case-block col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image">
                                <img src="<?php echo base_url();?>assets/images/gallery/1.jpg" alt="" />
                                <div class="overlay-box">
                                    <div class="content">
                                        <a class="lightbox-image" href="<?php echo base_url();?>assets/images/gallery/1.jpg"
                                            title="Pemasangan gudang workshop Batam Center" data-fancybox-group="gallery"><span
                                                class="icon fa fa-search"></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="lower-box clearfix">
                                <h3>Pemasangan gudang workshop</h3>
                            </div>
                        </div>
                    </div>
                    <div class="case-block col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image">
                                <img src="<?php echo base_url();?>assets/images/gallery/2.jpg" alt="" />
                                <div class="overlay-box">
                                    <div class="content">
                                        <a class="lightbox-image" href="<?php echo base_url();?>assets/images/gallery/2.jpg"
                                            title="Pengangkutan sarana penunjang" data-fancybox-group="gallery"><span
                                                class="icon fa fa-search"></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="lower-box clearfix">
                                <h3>Pengangkutan sarana penunjang</h3>
                            </div>
                        </div>
                    </div>
                    <div class="case-block col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image">
                                <img src="<?php echo base_url();?>assets/images/gallery/3.jpg" alt="" />
                                <div class="overlay-box">
                                    <div class="content">
                                        <a class="lightbox-image" href="<?php echo base_url();?>assets/images/gallery/3.jpg"
                                            title="Pengangkutan sarana penunjang" data-fancybox-group="gallery"><span
                                                class="icon fa fa-search"></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="lower-box clearfix">
                                <h3>Pengangkutan sarana penunjang</h3>
                            </div>
                        </div>
                    </div>
                    <div class="case-block col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image">
                                <img src="<?php echo base_url();?>assets/images/gallery/4.jpg" alt="" />
                                <div class="overlay-box">
                                    <div class="content">
                                        <a class="lightbox-image" href="<?php echo base_url();?>assets/images/gallery/4.jpg"
                                            title="Pembuatan workshop hanggar Lion Air" data-fancybox-group="gallery"><span
                                                class="icon fa fa-search"></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="lower-box clearfix">
                                <h3>Pembuatan workshop hanggar</h3>
                            </div>
                        </div>
                    </div>
                    <div class="case-block col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image">
                                <img src="<?php echo base_url();?>assets/images/gallery/5.jpg" alt="" />
                                <div class="overlay-box">
                                    <div class="content">
                                        <a class="lightbox-image" href="<?php echo base_url();?>assets/images/gallery/5.jpg"
                                            title="Pembuatan workshop hanggar Lion Air" data-fancybox-group="gallery"><span
                                                class="icon fa fa-search"></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="lower-box clearfix">
                                <h3>Pembuatan workshop hanggar</h3>
                            </div>
                        </div>
                    </div>
                    <div class="case-block col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image">
                                <img src="<?php echo base_url();?>assets/images/gallery/6.jpg" alt="" />
                                <div class="overlay-box">
                                    <div class="content">
                                        <a class="lightbox-image" href="<?php echo base_url();?>assets/images/gallery/6.jpg"
                                            title="Aktifitas trailer CNP" data-fancybox-group="gallery"><span class="icon fa fa-search"></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="lower-box clearfix">
                                <h3>Aktifitas trailer CNP</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="case-block col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image">
                                <img src="<?php echo base_url();?>assets/images/gallery/7.jpg" alt="" />
                                <div class="overlay-box">
                                    <div class="content">
                                        <a class="lightbox-image" href="<?php echo base_url();?>assets/images/gallery/7.jpg"
                                            title="Aktifitas trailer CNP" data-fancybox-group="gallery"><span class="icon fa fa-search"></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="lower-box clearfix">
                                <h3>Aktifitas trailer CNP</h3>
                            </div>
                        </div>
                    </div>

                    <div class="case-block col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image">
                                <img src="<?php echo base_url();?>assets/images/gallery/8.jpg" alt="" />
                                <div class="overlay-box">
                                    <div class="content">
                                        <a class="lightbox-image" href="<?php echo base_url();?>assets/images/gallery/8.jpg"
                                            title="Pembuatan taman - Nuvasa Bay Resort" data-fancybox-group="gallery"><span
                                                class="icon fa fa-search"></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="lower-box clearfix">
                                <h3>Pembuatan taman Nuvasa Bay Resort</h3>
                            </div>
                        </div>
                    </div>

                    <div class="case-block col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image">
                                <img src="<?php echo base_url();?>assets/images/gallery/9.jpg" alt="" />
                                <div class="overlay-box">
                                    <div class="content">
                                        <a class="lightbox-image" href="<?php echo base_url();?>assets/images/gallery/9.jpg"
                                            title="Pembuatan taman - Nuvasa Bay Resort" data-fancybox-group="gallery"><span
                                                class="icon fa fa-search"></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="lower-box clearfix">
                                <h3>Pembuatan taman Nuvasa Bay Resort</h3>
                            </div>
                        </div>
                    </div>

                    <div class="case-block col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image">
                                <img src="<?php echo base_url();?>assets/images/gallery/10.jpg" alt="" />
                                <div class="overlay-box">
                                    <div class="content">
                                        <a class="lightbox-image" href="<?php echo base_url();?>assets/images/gallery/10.jpg"
                                            title="Pengangkatan container dan accessories - PT Betchel"
                                            data-fancybox-group="gallery"><span class="icon fa fa-search"></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="lower-box clearfix">
                                <h3>Pengangkatan container dan accessories</h3>
                            </div>
                        </div>
                    </div>

                    <div class="case-block col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image">
                                <img src="<?php echo base_url();?>assets/images/gallery/11.jpg" alt="" />
                                <div class="overlay-box">
                                    <div class="content">
                                        <a class="lightbox-image" href="<?php echo base_url();?>assets/images/gallery/11.jpg"
                                            title="Pengangkatan material Hotel JW Marriott" data-fancybox-group="gallery"><span
                                                class="icon fa fa-search"></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="lower-box clearfix">
                                <h3>Pengangkatan material Hotel JW Marriott</h3>
                            </div>
                        </div>
                    </div>

                    <div class="case-block col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image">
                                <img src="<?php echo base_url();?>assets/images/gallery/12.jpg" alt="" />
                                <div class="overlay-box">
                                    <div class="content">
                                        <a class="lightbox-image" href="<?php echo base_url();?>assets/images/gallery/12.jpg"
                                            title="Pembangunan gedung Vitka Tiban" data-fancybox-group="gallery"><span
                                                class="icon fa fa-search"></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="lower-box clearfix">
                                <h3>Pembangunan gedung Vitka Tiban</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">

                    <div class="case-block col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image">
                                <img src="<?php echo base_url();?>assets/images/gallery/13.jpg" alt="" />
                                <div class="overlay-box">
                                    <div class="content">
                                        <a class="lightbox-image" href="<?php echo base_url();?>assets/images/gallery/13.jpg"
                                            title="Pembangunan gedung Vitka Tiban" data-fancybox-group="gallery"><span
                                                class="icon fa fa-search"></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="lower-box clearfix">
                                <h3>Pembangunan gedung Vitka Tiban</h3>
                            </div>
                        </div>
                    </div>

                    <div class="case-block col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image">
                                <img src="<?php echo base_url();?>assets/images/gallery/14.jpg" alt="" />
                                <div class="overlay-box">
                                    <div class="content">
                                        <a class="lightbox-image" href="<?php echo base_url();?>assets/images/gallery/14.jpg"
                                            title="Pengangkatan container dan accessories - PT Betchel"
                                            data-fancybox-group="gallery"><span class="icon fa fa-search"></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="lower-box clearfix">
                                <h3>Pengangkatan container dan accessories</h3>
                            </div>
                        </div>
                    </div>

                    <div class="case-block col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image">
                                <img src="<?php echo base_url();?>assets/images/gallery/15.jpg" alt="" />
                                <div class="overlay-box">
                                    <div class="content">
                                        <a class="lightbox-image" href="<?php echo base_url();?>assets/images/gallery/15.jpg"
                                            title="Pengangkatan material Hotel JW Marriott" data-fancybox-group="gallery"><span
                                                class="icon fa fa-search"></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="lower-box clearfix">
                                <h3>Pengangkatan material Hotel JW Marriott</h3>
                            </div>
                        </div>
                    </div>

                    <div class="case-block col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image">
                                <img src="<?php echo base_url();?>assets/images/gallery/16.jpg" alt="" />
                                <div class="overlay-box">
                                    <div class="content">
                                        <a class="lightbox-image" href="<?php echo base_url();?>assets/images/gallery/16.jpg"
                                            title="Aktifitas trailer CNP" data-fancybox-group="gallery"><span class="icon fa fa-search"></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="lower-box clearfix">
                                <h3>Aktifitas trailer CNP</h3>
                            </div>
                        </div>
                    </div>

                    <div class="case-block col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image">
                                <img src="<?php echo base_url();?>assets/images/gallery/17.jpg" alt="" />
                                <div class="overlay-box">
                                    <div class="content">
                                        <a class="lightbox-image" href="<?php echo base_url();?>assets/images/gallery/17.jpg"
                                            title="Pengangkatan Erction di Kawasan Industri Tunas Batam Centre"
                                            data-fancybox-group="gallery"><span class="icon fa fa-search"></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="lower-box clearfix">
                                <h3>Pengangkatan Erction di Kawasan Industri Tunas Batam Centre</h3>
                            </div>
                        </div>
                    </div>

                    <div class="case-block col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image">
                                <img src="<?php echo base_url();?>assets/images/gallery/27.jpg" alt="" />
                                <div class="overlay-box">
                                    <div class="content">
                                        <a class="lightbox-image" href="<?php echo base_url();?>assets/images/gallery/27.jpg"
                                            title="Pengangkatan balon launching kapal di-tanjung uncang"
                                            data-fancybox-group="gallery"><span class="icon fa fa-search"></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="lower-box clearfix">
                                <h3>Pengangkatan balon launching kapal di-tanjung uncang</h3>
                            </div>
                        </div>
                    </div>

                    <div class="case-block col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image">
                                <img src="<?php echo base_url();?>assets/images/gallery/28.jpg" alt="" />
                                <div class="overlay-box">
                                    <div class="content">
                                        <a class="lightbox-image" href="<?php echo base_url();?>assets/images/gallery/28.jpg"
                                            title="Pembuatan workshop hanggar lion air." data-fancybox-group="gallery"><span
                                                class="icon fa fa-search"></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="lower-box clearfix">
                                <h3>Pembuatan workshop hanggar lion air.</h3>
                            </div>
                        </div>
                    </div>

                </div> <!-- kelar Row terakhir -->
            </div>
        </section>

        <section class="call-to-action-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="text-column col-md-8 col-sm-12 col-xs-12">
                        <h2>Belum yakin dengan kualitas yang kami tawarkan? <span class="theme_color">Hubungi kami</span>
                            sekarang dan dapatkan gambaran yang lebih jelas.</h2>
                    </div>
                    <div class="btn-column col-md-4 col-sm-12 col-xs-12">
                        <a data-target="#contact" class="theme-btn btn-style-one scroll-to-target">Hubungi kami</a>
                    </div>
                </div>
            </div>
        </section>

        <div class="team-section" id="gallery">
            <div class="auto-container">
                <div class="sec-title centered">
                    <h2>Galeri Foto</h2>
                    <div class="separater"></div>
                </div>
                <div class="four-item-carousel owl-carousel owl-theme">
                    <div class="team-member">
                        <div class="inner-box">
                            <div class="image">
                                <img src="<?php echo base_url();?>assets/images/gallery/18.jpg" alt="">
                            </div>
                            <div class="lower-content">
                                <h3>Kantor CNP</h3>
                                <div class="text">Kantor</div>
                            </div>
                        </div>
                    </div>
                    <div class="team-member">
                        <div class="inner-box">
                            <div class="image">
                                <img src="<?php echo base_url();?>assets/images/gallery/19.jpg" alt="">
                            </div>
                            <div class="lower-content">
                                <h3>Kantor CNP</h3>
                                <div class="text">Kantor</div>
                            </div>
                        </div>
                    </div>
                    <div class="team-member">
                        <div class="inner-box">
                            <div class="image">
                                <img src="<?php echo base_url();?>assets/images/gallery/20.jpg" alt="">
                            </div>
                            <div class="lower-content">
                                <h3>Aktifitas di-yard</h3>
                                <div class="text">Aktifitas Trailer.</div>
                            </div>
                        </div>
                    </div>
                    <div class="team-member">
                        <div class="inner-box">
                            <div class="image">
                                <img src="<?php echo base_url();?>assets/images/gallery/25.jpg" alt="">
                            </div>
                            <div class="lower-content">
                                <h3>Perawatan Truck Crane</h3>
                                <div class="text">Maintenance</div>
                            </div>
                        </div>
                    </div>
                    <div class="team-member">
                        <div class="inner-box">
                            <div class="image">
                                <img src="<?php echo base_url();?>assets/images/gallery/26.jpg" alt="">
                            </div>
                            <div class="lower-content">
                                <h3>Pemindahan Material di-gudang Caterpillar</h3>
                                <div class="text">Aktifitas Truck Crane</div>
                            </div>
                        </div>
                    </div>
                    <div class="team-member">
                        <div class="inner-box">
                            <div class="image">
                                <img src="<?php echo base_url();?>assets/images/gallery/23.jpg" alt="">
                            </div>
                            <div class="lower-content">
                                <h3>Perawatan Trailer</h3>
                                <div class="text">Maintenance</div>
                            </div>
                        </div>
                    </div>
                    <div class="team-member">
                        <div class="inner-box">
                            <div class="image">
                                <img src="<?php echo base_url();?>assets/images/gallery/24.jpg" alt="">
                            </div>
                            <div class="lower-content">
                                <h3>Perawatan Truck Crane</h3>
                                <div class="text">Maintenance</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="testimonial-area">
            <div class="row">
                <div class="col-md-12">
                    <section class="map-section">
                        <div class="map-outer">
                            <div class="map-canvas" data-zoom="15" data-lat="1.1126522" data-lng="103.974289" data-type="roadmap"
                                data-hue="#ffc400" data-title="PT Cipta Nirwana Pratama" data-icon-path="<?php echo base_url();?>assets/images/icons/map-marker.png"
                                data-content="Tiban Sentra Niaga Blok E #1<br><a href='mailto:ciptanirwana@gmail.com'>ciptanirwana@gmail.com</a>">
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>

        <footer class="main-footer" id="contact">
            <div class="widgets-section">
                <div class="auto-container">
                    <div class="row clearfix">

                        <div class="big-column col-md-6 col-sm-12 col-xs-12">
                            <div class="row clearfix">

                                <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                                    <div class="footer-widget logo-widget">
                                        <div class="footer-logo"><a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/images/logo.png"
                                                    width="120" alt="Logo footer"></a></div>
                                        <div class="widget-content">
                                            <ul class="contact-info">
                                                <li>
                                                    <div class="icon small"><span class="flaticon-placeholder"></span></div><span
                                                        class="title">Basis tempat</span>Komplek Ruko Tiban Sentra
                                                    Niaga (Tisenia) Blok E #1 Tiban, Batam.
                                                </li>
                                                <li>
                                                    <div class="icon small"><span class="flaticon-email"></span></div><span
                                                        class="title">Email kami:</span>ciptanirwana@gmail.com
                                                </li>
                                                <li>
                                                    <div class="icon small"><span class="flaticon-phone-call"></span></div><span
                                                        class="title">Telepon kami:</span>+62 778 8013 616
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                                    <div class="footer-widget links-widget">
                                        <h2>Servis Kami</h2>
                                        <ul class="services-list">
                                            <li><a class="scroll-to-target" data-target="#about">Ekpedisi Darat</a></li>
                                            <li><a class="scroll-to-target" data-target="#about">Trucking Rental</a></li>
                                            <li><a class="scroll-to-target" data-target="#about">Tour & Travel, Umroh &
                                                    Haji</a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="big-column col-md-6 col-sm-12 col-xs-12">
                            <div class="row clearfix">

                                <div class="footer-column col-md-12 col-sm-12 col-xs-12">
                                    <div class="footer-widget contact-widget">
                                        <h2>Berbisnis dengan kami sekarang?</h2>

                                        <?php if (!empty($message)){ ?>
                                        <h2>
                                            <?php echo $message['text'];?>
                                        </h2>
                                        <?php } ?>
                                        <div class="widget-content">
                                            <div class="footer-form">
                                                <form method="post" action="<?php echo base_url();?>home/sendemail">
                                                    <div class="form-group">
                                                        <input type="text" name="name" value="" placeholder="Nama Anda *"
                                                            required="">
                                                        <p style="color: white;">
                                                            <?php echo form_error('name'); ?>
                                                        </p>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="email" name="email" value="" placeholder="Email Anda *"
                                                            required="">
                                                        <p style="color: white;">
                                                            <?php echo form_error('email'); ?>
                                                        </p>
                                                    </div>
                                                    <div class="form-group">
                                                        <textarea name="message" placeholder="Tulis pesan Anda"></textarea>
                                                        <p style="color: white;">
                                                            <?php echo form_error('message'); ?>
                                                        </p>
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit" class="theme-btn btn-style-one">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- kelar Footer Column -->
                            </div>
                        </div> <!-- kelar Big Column -->
                    </div>
                </div> <!-- kelar Auto Container -->
            </div>

            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="row clearfix">

                        <div class="column col-md-6 col-sm-12 col-xs-12">
                            <div class="copyright">Copyrights &copy; 2017 <a href="http://www.codewell.id">Codewell
                                    Indonesia</a> All Rights Reserved</div>
                        </div>

                        <div class="nav-column col-md-6 col-sm-12 col-xs-12">
                            <div class="copyright">Cipta Nirwana Pratama</div>
                            <!-- <ul class="footer-nav">
                        	<li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Contactus</a></li>
                        </ul> -->
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-long-arrow-up"></span></div>





    <script src="<?php echo base_url();?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/revolution.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.fancybox.pack.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.fancybox-media.js"></script>
    <script src="<?php echo base_url();?>assets/js/owl.js"></script>
    <script src="<?php echo base_url();?>assets/js/appear.js"></script>
    <script src="<?php echo base_url();?>assets/js/wow.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery-ui.js"></script>
    <script src="<?php echo base_url();?>assets/js/script.js"></script>

    <script src="<?php echo base_url();?>assets/js/chart.js"></script>
    <script src="<?php echo base_url();?>assets/js/graph.js"></script>

    <script src="http://maps.google.com/maps/api/js?key=AIzaSyBKS14AnP3HCIVlUpPKtGp7CbYuMtcXE2o"></script>
    <script src="<?php echo base_url();?>assets/js/map-script.js"></script>

</body>

</html>