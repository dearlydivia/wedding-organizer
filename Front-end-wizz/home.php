<?php
include('../Admin/security.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/png">

    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">


    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/styles.css">



    <<title>Wizz - Wedding Organizer</title>
</head>

<body>
    <header class="header" id="header">
        <nav class="nav">
            <div class="nav__left">
                <a href="#" class="nav__logo"><img src="assets/img/logo.png" alt=""></a>
                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="home.php" class="nav__link active-link">Home</a>
                        </li>
                        <li class="nav__item">
                            <a href="about.php" class="nav__link">About</a>
                        </li>
                        <li class="nav__item">
                            <a href="gallery.php" class="nav__link">Gallery</a>
                        </li>
                        <li class="nav__item">
                            <a href="package.php" class="nav__link" onclick="ArahkanKePackage()">Package</a>
                        </li>
                        <li class="nav__item">
                            <a href="#testimoni" class="nav__link">Testimoni</a>
                        </li>
                        <li class="nav__item">
                            <a href="#contact" class="nav__link">Contact</a>
                        </li>
                        <li class="nav__item">
                            <a href="#blog" class="nav__link">Blog</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- ... (bagian lainnya tetap sama) -->

            <div class="nav__right">
                <div id="userSection" class="hidden">
                    <!-- Jika pengguna sudah login, tampilkan icon profil -->
                    <div id="userProfile">
                        <img src="assets/img/Profile.svg" alt="Profile Icon">
                        <span id="username"></span>
                        <div id="dropdownMenu" class="hidden">
                            <ul>
                                <li><a href="#">Pesanan Saya</a></li>
                                <li><a href="#">Akun Saya</a></li>
                                <li><a href="#" onclick="logout()">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Tombol keranjang belanja -->
                <button class="nav__button__shop" id="cartButton">
                    <i class="ri-shopping-cart-line" onclick="pesananSaya()"></i>
                </button>

                <!-- Tombol masuk -->
                <button id="loginButton" class="button-login" onclick="loginPhp()">Masuk</button>

            </div>
            <!-- ... (bagian lainnya tetap sama) -->


            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-function-line"></i>
            </div>
        </nav>
    </header>


    <main class="main">
        <!--==================== AWAL HOME ====================-->
        <section class="home" id="home">
            <img src="assets/img/Homepage1.png" alt="" class="home__img">

            <div class="home__container">
                <div class="home__data">
                    <span class="home__data-subtitle">Discover your plan</span>
                    <h1 class="home__data-title">Make <br> Your <b class="pink-text">Dream <br> Wedding</b></h1>
                    <a href="#" class="button">Explore</a>

                </div>

                <div class="home__social">
                    <a href="https://www.facebook.com/" target="_blank" class="home__social-link">
                        <i class="ri-facebook-box-fill"></i>
                    </a>
                    <a href="https://www.instagram.com/" target="_blank" class="home__social-link">
                        <i class="ri-instagram-fill"></i>
                    </a>
                    <a href="https://twitter.com/" target="_blank" class="home__social-link">
                        <i class="ri-twitter-fill"></i>
                    </a>
                </div>

            </div>
            </div>
        </section>
        <!--==================== AKHIR HOME ====================-->

        <!--==================== AWAL ABOUT ====================-->
        <section class="about section" id="about">
            <div class="about__container container grid">
                <?php
                // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
                $query = "SELECT * FROM about";
                $result = mysqli_query($connection, $query);
                //mengecek apakah ada error ketika menjalankan query
                if (!$result) {
                    die("Query Error: " . mysqli_errno($connection) .
                        " - " . mysqli_error($connection));
                }
                
                $row = mysqli_fetch_assoc($result) 
                ?>
                <div class="about__data">
                    <h2 class="section__title about__title"><?php echo $row['judul'] ?></h2>
                    <p class="about__description"><?php echo $row["deskripsi"]; ?>

                    </p>
                    <a href="#" class="button">Reserve a package</a>
                </div>

                <div class="about__img">
                    <div class="about__img-overlay">
                        <img src="assets/img/about1.png" alt="" class="about__img-one">
                    </div>

                    <div class="about__img-overlay">
                        <img src="assets/img/about2.png" alt="" class="about__img-two">
                    </div>
                </div>
            </div>
        </section>
        <!--==================== AKHIR ABOUT ====================-->

        <!--==================== GALLERY ====================-->
        <section class="discover section" id="gallery">
            <h2 class="section__title">Gallery <br> pengantin</h2>

            <div class="discover__container container swiper-container">
                <div class="swiper-wrapper">
                    <!--==================== GALLERY 1 ====================-->
                    <div class="discover__card swiper-slide">
                        <img src="assets/img/gallery4.png" alt="" class="discover__img">
                        <div class="discover__data">
                            <h2 class="discover__title">keep on me</h2>
                            <span class="discover__description">Giska & budi</span>
                        </div>
                    </div>

                    <!--==================== GALLERY 2 ====================-->
                    <div class="discover__card swiper-slide">
                        <img src="assets/img/pengantin2.png" alt="" class="discover__img">
                        <div class="discover__data">
                            <h2 class="discover__title">Heaven</h2>
                            <span class="discover__description">Rahayu & Drajad</span>
                        </div>
                    </div>

                    <!--==================== GALLERY 3 ====================-->
                    <div class="discover__card swiper-slide">
                        <img src="assets/img/gallery3.png" alt="" class="discover__img">
                        <div class="discover__data">
                            <h2 class="discover__title"></h2>
                            <span class="discover__description"></span>
                        </div>
                    </div>

                    <!--==================== GALLERY 4 ====================-->
                    <div class="discover__card swiper-slide">
                        <img src="assets/img/pengantin5.png" alt="" class="discover__img">
                        <div class="discover__data">
                            <h2 class="discover__title">Your mine</h2>
                            <span class="discover__description">Kevin & Intan</span>
                        </div>
                    </div>
                </div>
            </div>

            <!--==================== AKHIR GALLERY ====================-->




            <!--==================== EXPERIENCE ====================-->

            <h2 class="section__title">Kami akan melayani anda <br> Dengan pengalaman kami</h2>

            <div class="experience__container container grid">
                <div class="experience__content grid">
                    <div class="experience__data">
                        <h2 class="experience__number">20</h2>
                        <span class="experience__description">Tahun <br> pengalaman</span>
                    </div>

                    <div class="experience__data">
                        <h2 class="experience__number">75</h2>
                        <span class="experience__description">Pernikahan <br> terlaksana</span>
                    </div>

                    <div class="experience__data">
                        <h2 class="experience__number">650+</h2>
                        <span class="experience__description">Pasangan <br> pengantin</span>
                    </div>
                </div>

                <div class="experience__img grid">
                    <div class="experience__overlay">
                        <img src="assets/img/gallery5.png" alt="" class="experience__img-one">
                    </div>

                    <div class="experience__overlay">
                        <img src="assets/img/gallery2.png" alt="" class="experience__img-two">
                    </div>
                </div>
            </div>

            <!--==================== AKHIR EXPERIENCE ====================-->



            <!--==================== AWAL VIDEO ====================-->

            <h2 class="section__title">Video Pernikahan</h2>

            <div class="video__container container">
                <p class="video__description">Buat kenangan indah dengan pasangan mu
                </p>

                <div class="video__content">
                    <video id="video-file">
                        <source src="assets/video/pexels-mikhail-nilov-8247019 (1080p).mp4" type="video/mp4">
                    </video>

                    <button class="button button--flex video__button" id="video-button">
                        <i class="ri-play-line video__button-icon" id="video-icon"></i>
                    </button>
                </div>
            </div>
        </section>

        <!--==================== AKHIR VIDEO ====================-->

        <!--==================== AWAL PACKAGES ====================-->
        <section class="packages" id="package">
            <div class="title_container">
                <h2 class="section__title">Pilih paket <br>sesuai kebutuhanmu</h2>
                <p class="package__title">Pilih, pesan dan laksanakan pernikahanmu</p>
            </div>
            <div class="cards-container">
                <article class="card" onclick=" ArahkanKePackage()">
                    <div class="card-info-hover">
                        <svg class="card-like" viewBox="0 0 24 24">
                            <path fill="#000000"
                                d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
                        </svg>
                        <div class="card-clock-info">
                            <svg class="card-clock" viewBox="0 0 24 24">
                                <path
                                    d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z" />
                            </svg>
                            <span class="card-time">20 min</span>
                        </div>
                    </div>
                    <div class="card-img"></div>
                    <a href="package.php">
                        <div class="card-img-hover" style="background-image: url(assets/img/about1.png);">
                        </div>
                    </a>
                    <div class="card-info">
                        <span class="card-category">Paket biasa</span>
                        <h3 class="card-title">Murah tapi tapi berkualitas</h3>
                        <span class="card-by">

                            <a href="#" class="card-admin">Rp. 50.000</a>
                        </span>
                    </div>
                </article>

                <article class="card" onclick=" ArahkanKePackage()">
                    <div class="card-info-hover">
                        <svg class="card-like" viewBox="0 0 24 24">
                            <path fill="#000000"
                                d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
                        </svg>
                        <div class="card-clock-info">
                            <svg class="card-clock" viewBox="0 0 24 24">
                                <path
                                    d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z" />
                            </svg>
                            <span class="card-time">20 min</span>
                        </div>
                    </div>
                    <div class="card-img"></div>
                    <a href="package.php">
                        <div class="card-img-hover" style="background-image: url(assets/img/about1.png);">
                        </div>
                    </a>
                    <div class="card-info">
                        <span class="card-category">Paket biasa</span>
                        <h3 class="card-title">Murah tapi tapi berkualitas</h3>
                        <span class="card-by">

                            <a href="#" class="card-admin">Rp. 50.000</a>
                        </span>
                    </div>
                </article>
                <article class="card" onclick=" ArahkanKePackage()">
                    <div class="card-info-hover">
                        <svg class="card-like" viewBox="0 0 24 24">
                            <path fill="#000000"
                                d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
                        </svg>
                        <div class="card-clock-info">
                            <svg class="card-clock" viewBox="0 0 24 24">
                                <path
                                    d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z" />
                            </svg>
                            <span class="card-time">20 min</span>
                        </div>
                    </div>
                    <div class="card-img"></div>
                    <a href="package.php">
                        <div class="card-img-hover" style="background-image: url(assets/img/about1.png);">
                        </div>
                    </a>
                    <div class="card-info">
                        <span class="card-category">Paket biasa</span>
                        <h3 class="card-title">Murah tapi tapi berkualitas</h3>
                        <span class="card-by">

                            <a href="" class="card-admin">Rp. 50.000</a>
                        </span>
                    </div>
                </article>
            </div>
        </section>

        <!--==================== AKHIR PACKAGES ====================-->

        <!--==================== AWAL TESTIMONIAL ====================-->


        <section class="testimonial-container" id="testimoni">
            <div class="title_container">
                <h2 class="section__title">Testimonial <br></h2>
                <p class="testi__title">Apa tanggapan mereka tentang Wizz?</p>
            </div>
            <div class="outerdiv">
                <div class="innerdiv">
                    <!-- div1 -->


                    <!-- div2 -->
                    <?php 
                    $query = "SELECT * FROM testimoni ORDER BY id ASC";
                    $result = mysqli_query($connection, $query);
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="div5 eachdiv">
                        <div class="userdetails">
                            <div class="imgbox">
                            <?php echo '<img src="../Admin/uptesti/'.$row['gambar_user'].'"alt="gambar">' ?>
                            </div>
                            <div class="detbox">
                                <p class="name"><?php echo $row["nama_user"] ?></p>
                                <p class="designation">Verified User</p>
                            </div>
                        </div>
                        <div class="review">
                            <h4><?php echo $row["judul"] ?></h4>
                            <p><?php echo $row["deskripsi"] ?></p>
                        </div>
                    </div>
                    <?php 
                    } 
                    ?>
                    <!-- div3 -->
                    
                    <!-- <div class="div5 eachdiv">
                        <div class="userdetails">
                            <div class="imgbox">
                                <img src="https://raw.githubusercontent.com/RahulSahOfficial/testimonials_grid_section/5532c958b7d3c9b910a216b198fdd21c73112d84/images/image-patrick.jpg"
                                    alt="">
                            </div>
                            <div class="detbox">
                                <p class="name">Patrick Abrams</p>
                                <p class="designation">Verified Graduate</p>
                            </div>
                        </div>
                        <div class="review">
                            <h4>Dekorasi yang indah!!</h4>
                            <p>"Dekorasi yang luar biasa indah! Setiap sentuhan artistik menciptakan atmosfer yang
                                memukau dan menghadirkan keajaiban pada hari istimewa kami."

                                "Pelayanan yang benar-benar membantu kami. Dari awal hingga akhir, tim ini memberikan
                                bantuan yang sangat berarti, membuat seluruh perjalanan perencanaan pernikahan menjadi
                                lebih lancar dan tak terlupakan."</p>
                        </div>
                    </div> -->
                    <!-- div4 -->
                    <!-- <div class="div5 eachdiv">
                        <div class="userdetails">
                            <div class="imgbox">
                                <img src="https://raw.githubusercontent.com/RahulSahOfficial/testimonials_grid_section/5532c958b7d3c9b910a216b198fdd21c73112d84/images/image-patrick.jpg"
                                    alt="">
                            </div>
                            <div class="detbox">
                                <p class="name">Patrick Abrams</p>
                                <p class="designation">Verified Graduate</p>
                            </div>
                        </div>
                        <div class="review">
                            <h4>Pelayanan benar benar membantu kami.</h4>
                            <p>"Pelayanan yang benar-benar membantu kami. Dari awal hingga akhir, tim ini memberikan
                                bantuan yang sangat berarti, membuat seluruh perjalanan perencanaan pernikahan menjadi
                                lebih lancar dan tak terlupakan."</p>
                        </div>
                    </div> -->
                    <!-- div5 -->
                    <!-- <div class="div5 eachdiv">
                        <div class="userdetails">
                            <div class="imgbox">
                                <img src="https://raw.githubusercontent.com/RahulSahOfficial/testimonials_grid_section/5532c958b7d3c9b910a216b198fdd21c73112d84/images/image-patrick.jpg"
                                    alt="">
                            </div>
                            <div class="detbox">
                                <p class="name">Patrick Abrams</p>
                                <p class="designation">Verified Graduate</p>
                            </div>
                        </div>
                        <div class="review">
                            <h4>Hasil foto yang luar biasa!</h4>
                            <p>"Staf wedding organizer ini luar biasa! Dengan profesionalisme, keahlian, dan perhatian
                                tiada tara, mereka membantu mewujudkan pernikahan impian kami. Terima kasih atas
                                dedikasi dan kerja kerasnya yang membuat hari istimewa kami begitu sempurna." </p>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>


        <!--==================== AKHIR TESTIMONIAL ====================-->


        <!--==================== AWAL KONTAK ====================-->
        <section id="contact">
            <h2 class="section__title">Berbincang dengan kami</h2>
            <p class="section__desc">Untuk konsultasi dan informasi lebih lanjut</p>
            <div class="background">
                <div class="container__contact">
                    <div class="screen">
                        <div class="screen-header">
                            <div class="screen-header-left">
                            </div>
                            <div class="screen-header-right">
                                <div class="screen-header-ellipsis"></div>
                                <div class="screen-header-ellipsis"></div>
                                <div class="screen-header-ellipsis"></div>
                            </div>
                        </div>
                        <div class="screen-body">
                            <div class="screen-body-item left">
                                <div class="app-title">
                                    <span>Hubungi</span>
                                    <span>Kami</span>
                                </div>
                                <div class="app-contact">CONTACT INFO : +62 81 314 928 595</div>
                            </div>
                            <div class="screen-body-item">
                                <div class="app-form">
                                    <div class="app-form-group">
                                        <input class="app-form-control" placeholder="NAMA" value="">
                                    </div>
                                    <div class="app-form-group">
                                        <input class="app-form-control" placeholder="EMAIL">
                                    </div>
                                    <div class="app-form-group">
                                        <input class="app-form-control" placeholder="NOMOR KONTAK">
                                    </div>
                                    <div class="app-form-group message">
                                        <input class="app-form-control" placeholder="PESAN">
                                    </div>
                                    <div class="app-form-group buttons">
                                        <button class="app-form-button">BATAL</button>
                                        <button class="app-form-button">KIRIM</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <!--==================== AKHIR KONTAK ====================-->


        <!--==================== AWAL BLOG ====================-->

        <h2 class="section__title">Blog terkait</h2>
        <p class="blog__title">Beberapa blog yang relevan dengan konten terkait</p>

        <section class="blog" id="blog">
            <div class="blog__item">
                <a href="">
                    <img src="assets/img/blog-1.jpg" alt="Blog 1">
                    <h3 class="blog-category">Blog 1</h3>
                    <p class="blog-title">Clothes Retail KPIs 2021 Guide for Clothes Executives.</p>
                </a>
                <p class="blog-meta">
                    By <cite>Mr Admin</cite> / <time datetime="2022-04-06">Apr 06, 2022</time>
                </p>
            </div>
            <div class="blog__item">
                <a href="">
                    <img src="assets/img/blog-2.jpg" alt="Blog 2">
                    <h3 class="blog-category">Blog 2</h3>
                    <p class="blog-title">Clothes Retail KPIs 2021 Guide for Clothes Executives.</p>
                </a>
                <p class="blog-meta">
                    By <cite>Mr Admin</cite> / <time datetime="2022-04-06">Apr 06, 2022</time>
                </p>
            </div>
            <div class="blog__item">
                <a href="">
                    <img src="assets/img/blog-3.jpg" alt="Blog 3">
                    <h3 class="blog-category">Blog 3</h3>
                    <p class="blog-title">Clothes Retail KPIs 2021 Guide for Clothes Executives.</p>
                </a>
                <p class="blog-meta">
                    By <cite>Mr Admin</cite> / <time datetime="2022-04-06">Apr 06, 2022</time>
                </p>
            </div>
            <div class="blog__item">
                <a href="">
                    <img src="assets/img/blog-4.jpg" alt="Blog 4">
                    <h3 class="blog-category">Blog 4</h3>
                    <p class="blog-title">Clothes Retail KPIs 2021 Guide for Clothes Executives.</p>
                </a>
                <p class="blog-meta">
                    By <cite>Mr Admin</cite> / <time datetime="2022-04-06">Apr 06, 2022</time>
                </p>
            </div>
        </section>

        <!--==================== AKHIR BLOG ====================-->


        <!--==================== SPONSORS ====================-->
        <section class="sponsor__section">
            <div class="sponsor__container container grid">
                <div class="sponsor__content">
                    <img src="assets/img/sponsors1.png" alt="" class="sponsor__img">
                </div>
                <div class="sponsor__content">
                    <img src="assets/img/sponsors2.png" alt="" class="sponsor__img">
                </div>
                <div class="sponsor__content">
                    <img src="assets/img/sponsors3.png" alt="" class="sponsor__img">
                </div>
                <div class="sponsor__content">
                    <img src="assets/img/sponsors4.png" alt="" class="sponsor__img">
                </div>
                <div class="sponsor__content">
                    <img src="assets/img/sponsors5.png" alt="" class="sponsor__img">
                </div>
            </div>
        </section>
    </main>



    <!--==================== AWAL FOOTER ====================-->
    <footer class="footer__section">
        <div class="footer__container container grid">
            <div class="footer__content grid">
                <div class="footer__data">
                    <h3 class="footer__title">Travel</h3>
                    <p class="footer__description">Travel you choose the <br> destination,
                        we offer you the <br> experience.
                    </p>
                    <div>
                        <a href="https://www.facebook.com/" target="_blank" class="footer__social">
                            <i class="ri-facebook-box-fill"></i>
                        </a>
                        <a href="https://twitter.com/" target="_blank" class="footer__social">
                            <i class="ri-twitter-fill"></i>
                        </a>
                        <a href="https://www.instagram.com/" target="_blank" class="footer__social">
                            <i class="ri-instagram-fill"></i>
                        </a>
                        <a href="https://www.youtube.com/" target="_blank" class="footer__social">
                            <i class="ri-youtube-fill"></i>
                        </a>
                    </div>
                </div>

                <div class="footer__data">
                    <h3 class="footer__subtitle">About</h3>
                    <ul>
                        <li class="footer__item">
                            <a href="" class="footer__link">About Us</a>
                        </li>
                        <li class="footer__item">
                            <a href="" class="footer__link">Features</a>
                        </li>
                        <li class="footer__item">
                            <a href="" class="footer__link">New & Blog</a>
                        </li>
                    </ul>
                </div>

                <div class="footer__data">
                    <h3 class="footer__subtitle">Company</h3>
                    <ul>
                        <li class="footer__item">
                            <a href="" class="footer__link">Team</a>
                        </li>
                        <li class="footer__item">
                            <a href="" class="footer__link">Plan y Pricing</a>
                        </li>
                        <li class="footer__item">
                            <a href="" class="footer__link">Become a member</a>
                        </li>
                    </ul>
                </div>

                <div class="footer__data">
                    <h3 class="footer__subtitle">Support</h3>
                    <ul>
                        <li class="footer__item">
                            <a href="" class="footer__link">FAQs</a>
                        </li>
                        <li class="footer__item">
                            <a href="" class="footer__link">Support Center</a>
                        </li>
                        <li class="footer__item">
                            <a href="" class="footer__link">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="footer__rights">
                <p class="footer__copy">&#169; 2021 Bedimcode. All rigths reserved.</p>
                <div class="footer__terms">
                    <a href="#" class="footer__terms-link">Terms & Agreements</a>
                    <a href="#" class="footer__terms-link">Privacy Policy</a>
                </div>
            </div>
        </div>
    </footer>

    <!--==================== AKHIR FOOTER ====================-->

    <!--========== SCROLL UP ==========-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="ri-arrow-up-line scrollup__icon"></i>
    </a>

    <!--=============== SCROLL REVEAL===============-->
    <script src="assets/js/scrollreveal.min.js"></script>

    <!--=============== SWIPER JS ===============-->
    <script src="assets/js/swiper-bundle.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>

</body>

</html>