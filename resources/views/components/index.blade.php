<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>https://www.starling.co.id/</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('template/img/favicon.png')}}" rel="icon">
  <link href="{{asset('template/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('template/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('template/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('template/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('template/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('template/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('template/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('template/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Delicious
  * Template URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
  * Updated: May 16 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center fixed-top topbar-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-center justify-content-lg-start">
      <i class="bi bi-phone d-flex align-items-center"><span>+6282311546684</span></i>
      <i class="bi bi-clock ms-4 d-none d-lg-flex align-items-center"><span>selasa-minggu: 09:00 pagi - 23:00 malam</span></i>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <div class="logo me-auto">
        <h1><a href="index.html">Starling</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="{{asset('template/img/logo.png')}}" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
          <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
          <li><a class="nav-link scrollto" href="#menu">Menu</a></li>
          <li><a class="nav-link scrollto" href="#specials">Spesial</a></li>
          <li><a class="nav-link scrollto" href="#events">Acara</a></li>
          <li><a class="nav-link scrollto" href="#chefs">Staff</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Galeri</a></li>
          
          <li><a class="nav-link scrollto" href="#contact">Hubungi</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="#book-a-table" class="book-a-table-btn scrollto">Reservasi</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url('{{ asset('template/img/specials-2.jpg') }}');">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>Starling</span> Warkop</h2>
                <p class="animate__animated animate__fadeInUp">"Kualitas Starbucks Harga Kaki Lima"</p>
                <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Menu</a>
                  <a href="#book-a-table" class="btn-book animate__animated animate__fadeInUp scrollto">Reservasi</a>
                </div>
              </div>
            </div>
          </div>

          

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url('{{ asset('template/img/slide/slide-3.jpg')}}');">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Starling Warkop</h2>
                <p class="animate__animated animate__fadeInUp">"Selamat datang di Starling Warkop, tempat terbaik untuk menikmati kopi berkualitas tinggi dengan harga terjangkau. Nikmati suasana yang nyaman dan layanan terbaik kami."</p>
                <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Menu</a>
                  <a href="#book-a-table" class="btn-book animate__animated animate__fadeInUp scrollto">Reservasi</a>
                </div>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">

          <div class="col-lg-5 align-items-stretch video-box" style='background-image: url('{{ asset('template/img/about.jpg') }}');">
            <a href="https://www.youtube.com/watch?v=Nu8kIIL-CDA" class="glightbox play-btn mb-4"></a>
          </div>

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">
    <div class="content">
        <h3>Tentang <strong>Starling Warkop</strong></h3>
        <p style="text-align: justify;">
            "Di Warkop Starling, kami menggabungkan kualitas kopi terbaik dengan harga yang terjangkau, memberikan Anda pengalaman yang tak terlupakan. Dengan motto kami, 'Warkop Kualitas Starbucks, Harga Kaki Lima,' kami berkomitmen untuk menyediakan tempat yang nyaman dan ramah bagi semua orang terutama kaum mendang mending. Dari kopi yang diseduh dengan sempurna hingga makanan yang lezat, kami berusaha untuk menjadi tempat favorit Anda untuk semua kesempatan."
        </p>
    </div>
</div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Whu Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="section-title">
          <h2>3 alasan kenapa harus<span> nongkrong di warkop kami ?</span></h2>
          
        </div>

        <div class="row">

        <div class="col-lg-4">
    <div class="box">
        <span>01</span>
        <h4>Kualitas Kopi Premium dengan Harga Terjangkau</h4>
        <p style="text-align: justify;">
            Kami memahami bahwa kualitas tidak harus mahal. Itulah sebabnya kami menyajikan kopi dengan kualitas setara Starbucks, tetapi dengan harga kaki lima. Setiap cangkir diseduh dengan biji kopi pilihan dan disiapkan oleh barista profesional kami untuk memastikan Anda mendapatkan rasa yang sempurna.
        </p>
    </div>
</div>

<div class="col-lg-4 mt-4 mt-lg-0">
    <div class="box">
        <span>02</span>
        <h4>Suasana Nyaman dan Ramah</h4>
        <p style="text-align: justify;">
            Warkop Starling dirancang untuk menjadi tempat yang nyaman bagi semua orang. Baik Anda datang untuk bekerja, belajar, atau hanya bersantai, Anda akan menemukan suasana yang tenang dan ramah. Dengan dekorasi yang hangat dan tempat duduk yang nyaman, kami adalah tempat ideal untuk menghabiskan waktu.
        </p>
    </div>
</div>

<div class="col-lg-4 mt-4 mt-lg-0">
    <div class="box">
        <span>03</span>
        <h4>Layanan Prima dan Personal</h4>
        <p style="text-align: justify;">
            Kami bangga dengan layanan pelanggan kami yang luar biasa. Tim kami yang profesional dan berpengalaman selalu siap untuk melayani Anda dengan senyuman. Kami memperlakukan setiap pelanggan seperti keluarga dan berusaha untuk memenuhi kebutuhan dan keinginan Anda dengan cepat dan efisien.
        </p>
    </div>
</div>

        </div>

      </div>
    </section><!-- End Whu Us Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container">

        <div class="section-title">
          <h2>Lihat menu enak dan mantap<span> Warkop kami</span></h2>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">Semua</li>
              <li data-filter=".filter-starters">Minuman</li>
              <li data-filter=".filter-salads">Makanan</li>
              <li data-filter=".filter-specialty">Spesial</li>
            </ul>
          </div>
        </div>

        <div class="row menu-container">

          <div class="col-lg-6 menu-item filter-starters">
            <div class="menu-content">
              <a href="#">Capucinno uno</a><span>Rp 12.000</span>
            </div>
            <div class="menu-ingredients">
            Cappuccino klasik dengan sentuhan modern, dibuat dengan susu almond untuk cita rasa yang ringan dan nutty. Cocok bagi mereka yang mencari alternatif bebas susu.
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <div class="menu-content">
              <a href="#">Charcoal Black Latte</a><span>Rp 25.000</span>
            </div>
            <div class="menu-ingredients">
            Minuman inovatif yang pasti akan memikat mata dan lidah Anda. Charcoal Black Latte adalah campuran espresso dengan susu almond dan arang aktif, memberikan tampilan hitam yang dramatis dan rasa yang halus.
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <div class="menu-content">
              <a href="#">Matcha Latte</a><span>Rp 15.000</span>
            </div>
            <div class="menu-ingredients">
            Pecinta teh hijau akan terpesona dengan Matcha Latte kami yang lembut dan creamy. Dibuat dengan matcha berkualitas tinggi, minuman ini tidak hanya lezat tetapi juga kaya akan antioksidan.
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <div class="menu-content">
              <a href="#">Indomie Goreng/Kuah Spesial Starling</a><span>Rp 13.000</span>
            </div>
            <div class="menu-ingredients">
            Nikmati sensasi Indomie Goreng atau Kuah klasik dengan sentuhan spesial dari Warkop Starling. Dilengkapi dengan telur mata sapi, irisan ayam suwir, dan taburan bawang goreng renyah. Cocok untuk menemani waktu nongkrong Anda.
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <div class="menu-content">
              <a href="#">Unicorn Dream Latte</a><span>Rp 25.000</span>
            </div>
            <div class="menu-ingredients">
            Rasakan keajaiban dalam secangkir dengan Unicorn Dream Latte kami. Minuman ini terdiri dari campuran susu putih, sirup vanilla, dan taburan permen warna-warni. Sempurna untuk merasakan dunia fantasi dalam setiap tegukan.
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <div class="menu-content">
              <a href="#">Starling Signature Espresso (recomended) </a><span>Rp 10.000</span>
            </div>
            <div class="menu-ingredients">
            Nikmati kekuatan murni espresso kami yang kaya dan beraroma. Dibuat dari biji kopi pilihan, Starling Signature Espresso akan memberikan Anda dorongan energi instan yang Anda butuhkan.
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <div class="menu-content">
              <a href="#">Starling French Fries</a><span>Rp 15.000</span>
            </div>
            <div class="menu-ingredients">
            Kentang goreng renyah yang disajikan dengan berbagai pilihan saus, dari saus tomat, mayones, hingga saus keju yang melimpah. Cemilan sempurna untuk menemani secangkir kopi Anda.
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <div class="menu-content">
              <a href="#">Sate Taichan Starling</a><span>Rp 20.000</span>
            </div>
            <div class="menu-ingredients">
            Sate ayam dengan bumbu taichan yang pedas dan segar, disajikan dengan lontong dan sambal pedas. Cocok untuk pecinta pedas.
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <div class="menu-content">
              <a href="#">Matcha Affogato</a><span>Rp 25.000</span>
            </div>
            <div class="menu-ingredients">
            Gabungan yang sempurna antara es krim vanilla lembut dan kekuatan matcha yang klasik. Matcha Affogato adalah minuman yang segar dan menggugah selera, cocok untuk dinikmati di siang atau malam hari.
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Menu Section -->

    <!-- ======= Specials Section ======= -->
    <section id="specials" class="specials">
      <div class="container">

        <div class="section-title">
          <h2>Spesial Menu dari<span> Starling</span></h2>
          <p>Kami menawarkan menu spesial yang dirancang untuk menggugah selera Anda.</p>
        </div>

        <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Unicorn Dream Latte</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Matcha Affogato</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
    <div class="tab-content">
        <div class="tab-pane active show" id="tab-1">
            <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Charcoal Black Latte</h3>
                    <p class="fst-italic" style="text-align: justify;">
                        Minuman inovatif yang pasti akan memikat mata dan lidah Anda. Charcoal Black Latte adalah campuran espresso dengan susu almond dan arang aktif, memberikan tampilan hitam yang dramatis dan rasa yang halus.
                    </p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="{{ asset('template/img/specials-1.jpg') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="tab-pane" id="tab-2">
            <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Et blanditiis nemo veritatis excepturi</h3>
                    <p class="fst-italic" style="text-align: justify;">
                        Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka
                    </p>
                    <p style="text-align: justify;">
                        Ea ipsum voluptatem consequatur quis est. Illum error ullam omnis quia et reiciendis sunt sunt est. Non aliquid repellendus itaque accusamus eius et velit ipsa voluptates. Optio nesciunt eaque beatae accusamus lerode pakto madirna desera vafle de nideran pal
                    </p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="{{ asset('template/img/specials-2.jpg') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="tab-pane" id="tab-3">
            <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Impedit facilis occaecati odio neque aperiam sit</h3>
                    <p class="fst-italic" style="text-align: justify;">
                        Eos voluptatibus quo. Odio similique illum id quidem non enim fuga. Qui natus non sunt dicta dolor et. In asperiores velit quaerat perferendis aut
                    </p>
                    <p style="text-align: justify;">
                        Iure officiis odit rerum. Harum sequi eum illum corrupti culpa veritatis quisquam. Neque necessitatibus illo rerum eum ut. Commodi ipsam minima molestiae sed laboriosam a iste odio. Earum odit nesciunt fugiat sit ullam. Soluta et harum voluptatem optio quae
                    </p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="{{ asset('template/img/specials-3.jpg') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="tab-pane" id="tab-4">
            <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Unicorn Dream Latte</h3>
                    <p class="fst-italic" style="text-align: justify;">
                        Rasakan keajaiban dalam secangkir dengan Unicorn Dream Latte kami. Minuman ini terdiri dari campuran susu putih, sirup vanilla, dan taburan permen warna-warni. Sempurna untuk merasakan dunia fantasi dalam setiap tegukan.
                    </p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="{{ asset('template/img/specials-4.jpg') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="tab-pane" id="tab-5">
            <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Matcha Affogato</h3>
                    <p class="fst-italic" style="text-align: justify;">
                        Gabungan yang sempurna antara es krim vanilla lembut dan kekuatan matcha yang klasik. Matcha Affogato adalah minuman yang segar dan menggugah selera, cocok untuk dinikmati di siang atau malam hari.
                    </p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="{{ asset('template/img/specials-5.jpg') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>

      </div>
    </section><!-- End Specials Section -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container">

        <div class="section-title">
          <h2>Rencanakan acara Anda di <span>Starling</span> Warkop!</h2>
        </div>

        <div class="events-slider swiper">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="row event-item">
                <div class="col-lg-6">
                    <img src="{{asset('template/img/event-birthday.jpg')}}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content" style="text-align: justify;">
                    <h3>Perayaan Ulang Tahun</h3>
                    <div class="price">
                        <p><span>Rp 2.000.000,- (untuk 20 orang)</span></p>
                    </div>
                    <p class="fst-italic">
                        Rayakan momen spesial Anda di Warkop Starling dengan suasana yang hangat dan ramah. Kami menawarkan paket ulang tahun yang mencakup :
                    </p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> Dekorasi Tematik : Ruang acara akan didekorasi sesuai dengan tema yang Anda pilih.</li>
                        <li><i class="bi bi-check-circle"></i> Makanan dan Minuman Spesial : Menu spesial untuk pesta ulang tahun, termasuk kue ulang tahun.</li>
                        <li><i class="bi bi-check-circle"></i> Musik dan Hiburan : Layanan musik dan hiburan untuk membuat acara lebih meriah.</li>
                    </ul>
                </div>
            </div>
        </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="{{asset('template/img/event-private.jpg')}}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content" style="text-align: justify;">
                  <h3>Acara Tematik</h3>
                  <div class="price">
                    <p><span>Rp 2.500.000,- (untuk 20 orang)</span></p>
                  </div>
                  <p class="fst-italic">
                  Ingin mengadakan acara dengan tema khusus? Kami siap membantu Anda merancang dan mewujudkan acara tematik impian Anda. kami menyediakan layanan lengkap untuk memastikan acara Anda berjalan lancar.
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circle"></i> Dekorasi Tematik : Dekorasi sesuai tema yang diinginkan.</li>
                    <li><i class="bi bi-check-circle"></i> Layanan Musik Live : Musik live untuk menghidupkan suasana acara.</li>
                    <li><i class="bi bi-check-circle"></i> Kostum dan Aksesoris: Penyediaan kostum dan aksesoris sesuai tema acara.</li>
                  </ul>
                  
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="{{asset('template/img/event-custom.jpg')}}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content" style="text-align: justify;">
                  <h3>Acara Keluarga</h3>
                  <div class="price">
                    <p><span>Rp 2.000.000,- (untuk 15 orang)</span></p>
                  </div>
                  <p class="fst-italic">
                  Nikmati waktu berkualitas dengan keluarga Anda di Warkop Starling. Kami menawarkan paket acara keluarga dengan menu yang disesuaikan untuk anak-anak dan orang dewasa, serta area bermain untuk anak-anak.
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circle"></i> Menu Keluarga : Pilihan menu untuk anak-anak dan orang dewasa.</li>
                    <li><i class="bi bi-check-circle"></i> Area Bermain Anak: Area bermain khusus untuk anak-anak.</li>
                    <li><i class="bi bi-check-circle"></i> Suasana Nyaman: Tempat duduk yang nyaman dan suasana yang ramah untuk keluarga.</li>
                  </ul>
                  
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Events Section -->

    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
      <div class="container">

        <div class="section-title">
          <h2>Reservasi <span>Meja</span></h2>
          <p>Dengan reservasi meja, Anda dapat menjamin bahwa tempat Anda akan siap ketika Anda tiba, sehingga Anda dapat fokus menikmati waktu bersama teman, keluarga, atau rekan bisnis Anda tanpa khawatir.</p>
        </div>

        <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Nama" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="text" class="form-control" name="phone" id="phone" placeholder="No Hp" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="text" name="date" class="form-control" id="date" placeholder="Tanggal" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="text" class="form-control" name="time" id="time" placeholder="Waktu" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="number" class="form-control" name="people" id="people" placeholder="jumlah orang" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Pesan"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit" disabled>Kirim</button></div>
        </form>

      </div>
    </section><!-- End Book A Table Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container-fluid">

        <div class="section-title">
          <h2>Beberapa foto dari <span> Starling Warkop</span></h2>
          <p>Lihat sekilas suasana dan aktivitas di Warkop Starling melalui galeri foto kami. Dari momen-momen spesial hingga tampilan menu kami, galeri ini memberi Anda gambaran tentang apa yang membuat Warkop Starling begitu istimewa.</p>
        </div>

        <div class="row g-0">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{asset('template/img/gallery/gallery-1.jpg')}}" class="gallery-lightbox">
                <img src="{{asset('template/img/gallery/gallery-1.jpg')}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{asset('template/img/gallery/gallery-2.jpg')}}" class="gallery-lightbox">
                <img src="{{asset('template/img/gallery/gallery-2.jpg')}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{asset('template/img/gallery/gallery-3.jpg')}}" class="gallery-lightbox">
                <img src="{{asset('template/img/gallery/gallery-3.jpg')}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{asset('template/img/gallery/gallery-4.jpg')}}" class="gallery-lightbox">
                <img src="{{asset('template/img/gallery/gallery-4.jpg')}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{asset('templateimg/gallery/gallery-5.jpg')}}" class="gallery-lightbox">
                <img src="{{asset('template/img/gallery/gallery-5.jpg')}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{asset('template/img/gallery/gallery-6.jpg')}}" class="gallery-lightbox">
                <img src="{{asset('template/img/gallery/gallery-6.jpg')}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{asset('template/img/gallery/gallery-7.jpg')}}" class="gallery-lightbox">
                <img src="{{asset('template/img/gallery/gallery-7.jpg')}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{asset('template/img/gallery/gallery-8.jpg')}}" class="gallery-lightbox">
                <img src="{{asset('template/img/gallery/gallery-8.jpg')}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs">
      <div class="container">

        <div class="section-title">
          <h2>Para Staff<span> Starling</span></h2>
          <p>Kenali tim profesional kami di Warkop Starling. Dari barista yang terlatih hingga koki berbakat, staf kami berdedikasi untuk memberikan Anda pengalaman yang terbaik. Kami bangga dengan tim kami yang bersemangat dan berpengalaman dalam seni kuliner dan penyajian kopi.</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="{{asset('template/img/chefs/chefs-1.jpg')}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Anggi </h4>
                <span>Barista</span>
                <div class="social">
                  <a href="https://x.com/?lang=en-id"><i class="bi bi-twitter"></i></a>
                  <a href="https://www.facebook.com/"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/anggi_sis13/"><i class="bi bi-instagram"></i></a>
                  <a href="https://www.linkedin.com/"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="{{asset('template/img/chefs/chefs-2.jpg')}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Natasya</h4>
                <span>Barista</span>
                <div class="social">
                  <a href="https://x.com/?lang=en-id"><i class="bi bi-twitter"></i></a>
                  <a href="https://www.facebook.com/"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/natasyaaa_n.h/"><i class="bi bi-instagram"></i></a>
                  <a href="https://www.linkedin.com/"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="{{asset('template/img/chefs/chefs-3.jpg')}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Roy</h4>
                <span>Koki</span>
                <div class="social">
                  <a href="https://x.com/?lang=en-id"><i class="bi bi-twitter"></i></a>
                  <a href="https://www.facebook.com/?campaign_id=1661741489&partner_id=googlesem&gclid=EAIaIQobChMIvobW64yohgMVH6NmAh1Erg76EAAYASAAEgJYwPD_BwE"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/roy_robbin99/"><i class="bi bi-instagram"></i></a>
                  <a href="https://www.linkedin.com/feed/"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Chefs Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container position-relative">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{asset('template/img/testimonials/testimonials-1.jpg')}}" class="testimonial-img" alt="">
                <h3>Elys</h3>
                <h4>Influencer </h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Starling adalah tempat nongkrong favoritku! Kopinya enak dan suasananya bikin betah lama-lama duduk sambil kerja.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{asset('template/img/testimonials/testimonials-2.jpg')}}" class="testimonial-img" alt="">
                <h3>Dzaky</h3>
                <h4>Youtuber</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Tempat yang cozy banget buat nongkrong sama teman-teman. Harganya pas di kantong, tapi rasa kopinya setara Starbucks!
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{asset('template/img/testimonials/testimonials-3.jpg')}}" class="testimonial-img" alt="">
                <h3>Hendri</h3>
                <h4>Manager</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Suka banget sama menu spesial mereka, terutama Charcoal Black Latte. Unik dan rasanya mantap!
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{asset('template/img/testimonials/testimonials-4.jpg')}}" class="testimonial-img" alt="">
                <h3>Samuel</h3>
                <h4>Gamer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Pelayanannya luar biasa ramah. Setiap kali datang ke sini, selalu disambut dengan senyuman. Tempat yang recommended!
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{asset('template/img/testimonials/testimonials-5.jpg')}}" class="testimonial-img" alt="">
                <h3>Pranoto</h3>
                <h4>Pengusaha</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Starling adalah tempat yang tepat buat bersantai. Dekorasinya keren, makanannya enak, dan harganya terjangkau. Pasti akan balik lagi!
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container">

    <div class="section-title">
      <h2><span>Hubungi</span> Kami</h2>
      <p>Kami di Warkop Starling selalu siap melayani Anda dengan sepenuh hati. Apakah Anda memiliki pertanyaan, saran, atau ingin memesan layanan delivery? Jangan ragu untuk menghubungi kami melalui email atau medsos kami:</p>
    </div>
  </div>

  <div class="map" style="text-align: center;">
    <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d127649.54026160631!2d103.94882082566339!3d1.1258128359952482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x31d9891338f82937%3A0x7d250d255bc07832!2s42GJ%2B8FH%2C%20Taman%20Baloi%2C%20Kec.%20Batam%20Kota%2C%20Kota%20Batam%2C%20Kepulauan%20Riau%2029444!3m2!1d1.1258139999999999!2d104.0312228!5e0!3m2!1sid!2sid!4v1716623059130!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>

  <div class="container mt-5">

    <div class="info-wrap">
      <div class="row">
        <div class="col-lg-3 col-md-6 info">
          <i class="bi bi-geo-alt"></i>
          <h4>Alamat:</h4>
          <p>Jl.Gelalel 69<br> Batam Center, No.1A</p>
        </div>

        <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
          <i class="bi bi-clock"></i>
          <h4>Jam Operasional:</h4>
          <p>Selasa-Minggu:<br>09:00 pagi - 23:00 malam</p>
        </div>

        <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
          <i class="bi bi-envelope"></i>
          <h4>Email:</h4>
          <p>starlingwarkop@gmail.com<br></p>
        </div>

        <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
          <i class="bi bi-phone"></i>
          <h4>No Hp:</h4>
          <p>+62 82311546684<br></p>
        </div>
      </div>
    </div>

    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
      <div class="row">
        <div class="col-md-6 form-group">
          <input type="text" name="name" class="form-control" id="name" placeholder="Nama" required>
        </div>
        <div class="col-md-6 form-group mt-3 mt-md-0">
          <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
        </div>
      </div>
      <div class="form-group mt-3">
        <input type="text" class="form-control" name="subject" id="subject" placeholder="Perihal" required>
      </div>
      <div class="form-group mt-3">
        <textarea class="form-control" name="message" rows="5" placeholder="Pesan" required></textarea>
      </div>
      <div class="my-3">
        <div class="loading">Loading</div>
        <div class="error-message"></div>
        <div class="sent-message">Your message has been sent. Thank you!</div>
      </div>
      <div class="text-center">
    <span><button type="submit" disabled>Kirim</button></span>
</div>
    </form>

  </div>
</section><!-- End Contact Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Starling Warkop</h3>
      <p>Jangan lupa untuk mengikuti kami di media sosial untuk mendapatkan update terbaru dan promosi spesial :</p>
      <div class="social-links">
        <a href="https://www.tiktok.com/explore" class="tiktok"><i class="bx bxl-tiktok"></i></a>
        <a href="https://www.whatsapp.com/" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
        <a href="https://www.instagram.com/?hl=en" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://www.youtube.com/index" class="youtube"><i class="bx bxl-youtube"></i></a>
       
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Starling Warkop</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/ -->
        Designed by <a href="https://bootstrapmade.com/">Roy Robin 2222035</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('template/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('template/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('template/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('template/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('template/js/main.js')}}"></script>

</body>

</html>