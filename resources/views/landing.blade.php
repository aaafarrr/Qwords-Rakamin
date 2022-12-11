<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="author" content="Farhan">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="https://www.qwords.com/wp-content/themes/qwords_v10/assets/images/favicon.png" type="image/png">

  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

  <title>Qwords</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <style>
    .header-area .container {
      max-width: 100%;
      padding: 0 15px;
    }

  </style>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="#" class="logo text-center">
              <img src="assets/images/qwords-white-removebg.png" style="max-width: 200px; max-height: 66px;" alt="">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav navbar-links">
              <li class="navbar-dropdown">
                <a href="#" class="act active" style="padding-right: 5px; padding-left: 5px;">Login <i class="fas fa-chevron-down"></i></a>
                <div class="dropdown">
                  <a href="#">Login Qwords</a>
                  <a href="#">Login Goldenfast</a>
                </div>
              </li>
              {{-- looping --}}
              @foreach ($navbar as $item)
              <li class="navbar-dropdown">
                <a href="#" class="act" style="padding-right: 5px; padding-left: 5px;">{{ $item['name'] }} <i class="fas fa-chevron-down"></i></a>
                @if(isset($item['item']))
                <div class="dropdown">
                  @foreach ($item['item'] as $sub=>$subsub)
                  <a href="{{ $subsub }}">{{ $sub }}</a>
                  @endforeach
                </div>
                @endif
              </li>
              @endforeach
              <li><a href="#" style="padding-right: 5px; padding-left: 5px;">Promo</a></li>
            </ul>
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->
  <style>
    .typing span {
      border-right: .1em solid;
      padding-right: 5px;
      animation: caratteri 1s steps(1) infinite;
    }

    @keyframes caratteri {
      50% {
        border-color: transparent;
      }
    }

  </style>
  <!-- ***** Main Banner Area Start ***** -->
  <div class="main-banner" style="background-image: none; background-color: #333533; padding-bottom: 90px; padding-top: 200px;">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="header-text">
            <h4>Cloud Hosting Indonesia dengan</h4>
            <h2 id="selftype" class="typing"></h2>
            <p style="font-size: 25px;">Cloud Hosting Indonesia dengan pelayanan terbaik dan harga murah serta diskon
              nama domain.</p>
            <div class="buttons">
              <div class="border-button">
                <a href="#product">Lihat Produk</a>
              </div>
              <div class="main-button">
                <a href="#domain">Cek Domain</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 offset-lg-1">
          <div class="owl-banner owl-carousel">
            <div class="item">
              <img src="assets/images/internet-rumah-cepat.png" alt="">
            </div>
            <div class="item">
              <img src="assets/images/internet-rumah-cepat.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ***** Domain ***** -->
  <div class="categories-collections" style="background-image: none; background-color: #242423; padding-bottom: 60px; padding-top: 60px;">
    <div class="container">
      <div class="row">
        <div id="domain" class="col-lg-12 domain">
          <div class="categories">
            <div class="row">
              <div class="col-lg-12">
                <div class="section-heading" style=" margin-bottom: 25px;">
                  <div class="line-dec"></div>
                  <h2>Cek Nama <em>Domain</em> Disini.</h2>
                </div>
              </div>
              <div class="col-lg-12 col-sm-12">

                <form action="" id="">
                  <div class="item">
                    <div class="col-lg-12">
                      <input type="text" placeholder="Cari Domain" autocomplete="on" required="" style="margin-bottom: 25px;">
                      <div class="line-dec"></div>
                      <!-- button  -->
                      <div class="main-button">
                        <a href="">Cek Domain</a>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <div id="product" class="col-lg-12">
          <div class="collections" style="margin-top: 80px;">
            <div class="row">
              <div class="col-lg-12">
                <div class="section-heading" style="margin-bottom: 10px;">
                  <div class="line-dec"></div>
                  {{-- <h5>Domain Tambahan Lainnya</h5> --}}
                  <h2 style="margin-bottom: 10px;">Cloud Hosting dan VPS <em>Diskon Hingga 60%</em> !</h2>
                  <h6>Layanan unggulan dengan teknologi terbaik untuk website anda</h6>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="owl-collection owl-carousel">
                  <!-- loop -->
                  @foreach($hosting_vps as $key)
                  <div class="item text-center">
                    <img src="{{ $key['img'] }}" alt="">
                    <div class="down-content" style="border-top-left-radius: 20px; border-top-right-radius: 20px;">
                      <h6>{{ $key['name'] }}</h6>
                      <h4>{{ $key['title'] }}</h4>
                      <h6 style="text-decoration: line-through; color: #ff3d60!important;">{{ $key['price_before'] }}</h3>
                        <h4>{{ $key['price'] }}</h2>
                          <span class="collection">Disk:<br><strong>{{ $key['disk'] }}</strong></span>
                          <span class="category">Bandwidth:<br><strong>{{ $key['bandwidth'] }}</strong></span>
                          <span class="collection">Core CPU:<br><strong>{{ $key['core_cpu'] }}</strong></span>
                          <span class="category">Addon:<br><strong>{{ $key['addon_parked_domain'] }}</strong></span>
                          <div class="main-button">
                            <a href="{{ $key['link'] }}">Order Sekarang</a>
                          </div>
                    </div>
                  </div>
                  @endforeach
                  <!-- loop -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ***** Main Banner Area End ***** -->
  <div class="categories-collections" style="background-image: none; background-color: #333533; padding-top: 60px; padding-bottom: 60px;">
    <div class="container">
      <div class="row">
        <div class="collections" style="margin-top: 0px; margin-bottom: 25px;">
          <div class="col-lg-12">
            <div class="section-heading" style="margin-bottom: 10px;">
              <div class="line-dec"></div>
              <h2 style="margin-bottom: 10px;">Lihat Juga <em>Layanan Kami</em> Yang Lain</h2>
              <h6>Layanan unggulan dengan teknologi terbaik untuk website anda</h6>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="owl-collection owl-carousel">
              <!-- loop -->
              <div class="item text-center">
                {{-- <img src="https://www.qwords.com/wp-content/themes/qwords_v10/assets/images/icon_layananlain.png" alt="" style="clip: rect(100px,200px,150px, 0px);"> --}}
                <div class="down-content" style="border-top-left-radius: 20px; border-top-right-radius: 20px;">
                  <div class="icon" style="
                    background: url('https://www.qwords.com/wp-content/themes/qwords_v10/assets/images/icon_layananlain.png') -154px -82px; 
                    ">
                  </div>
                  <h4>SSL</h4>
                  <p>Jadikan website Anda lebih terpercaya dan disukai oleh search engine dengan menggunakan SSL
                    Certificate.</p>
                  <div class="" style="margin-top: 10px;">
                    <h6>Mulai dari</h5>
                      <h4 style="margin-top: 0px;">Rp 112.000 /thn</h3>
                  </div>
                  <div class="main-button">
                    <a href="#">Order Sekarang</a>
                  </div>
                </div>
              </div>
              <div class="item text-center">
                <div class="down-content" style="border-top-left-radius: 20px; border-top-right-radius: 20px;">
                  <div class="icon" style="
                    background: url('https://www.qwords.com/wp-content/themes/qwords_v10/assets/images/icon_layananlain.png') -10px -82px; 
                    ">
                  </div>
                  <h4>Dedicated Server</h4>
                  <p>Nikmati kelola Dedicated Server sendiri dengan akses remote dari seluruh dunia tanpa batas.</p>
                  <div class="" style="margin-top: 10px;">
                    <h6>Mulai dari</h5>
                      <h4 style="margin-top: 0px;">Rp 499.000 /bln</h3>
                  </div>
                  <div class="main-button">
                    <a href="#">Order Sekarang</a>
                  </div>
                </div>
              </div>
              <div class="item text-center">
                <div class="down-content" style="border-top-left-radius: 20px; border-top-right-radius: 20px;">
                  <div class="icon" style="
                    background: url('https://www.qwords.com/wp-content/themes/qwords_v10/assets/images/icon_layananlain.png') -154px -10px; 
                    ">
                  </div>
                  <h4>Colocation Server</h4>
                  <p>Akses cepat dari seluruh dunia dengan fasilitas 24x7 full monitoring dengan cooling system terbaik serta fire extinguisher.</p>
                  <div class="" style="margin-top: 10px;">
                    <h6>Mulai dari</h5>
                      <h4 style="margin-top: 0px;">Rp 500.000 /bln</h3>
                  </div>
                  <div class="main-button">
                    <a href="#">Order Sekarang</a>
                  </div>
                </div>
              </div>
              <!-- loop -->
            </div>
          </div>
        </div>

        <div class="categories" style="margin-top: 25px; margin-bottom: 25px;">
          <div class="col-lg-12">
            <div class="row">
              <div class="col-lg-12">
                <div class="section-heading" style="margin-bottom: 40px;">
                  <div class="line-dec"></div>
                  <h2 style="padding-bottom: 10px">Komitmen <em>Qwords</em></h2>
                  <h6>Berbagai Alasan Mengapa Pelanggan memilih Qwords</h6>
                </div>
              </div>
              <!-- loop -->
              @foreach($komitmen as $key)
              <div class="col-lg-3 col-6" style="margin-bottom: 20px;">
                <div class="item" style="height: 96%;">
                  <div class="icon" style="background: url('https://www.qwords.com/wp-content/themes/qwords_v10/assets/images/icon_keunggulan.png') {{ $key['coordinate'] }}; width: 80px; height: 80px;">
                    <!-- <img src="assets/images/icon-01.png" alt=""> -->
                  </div>
                  <h4>{{$key['title']}}</h4>
                  <p>{{$key['desc']}}</p>
                </div>
              </div>
              @endforeach
              <!-- loop -->

            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="item-details-page" style="background-image: none; background-color: #242423; padding-top: 60px; padding-bottom: 60px;">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <div class="line-dec"></div>
            <h2 style="margin-bottom: 10px;">
              <img src="https://www.qwords.com/wp-content/themes/qwords_v10/assets/images/banner/logo_bikin_website.png" alt="" style="width: 215px; margin-right: 3px;">
              by <em>Qwords</em>
            </h2>
            <!-- <h2>View Details <em>For Item</em> Here.</h2> -->
          </div>
        </div>
        <div class="col-lg-7">
          <div class="left-image">
            <img src="https://www.qwords.com/wp-content/themes/qwords_v10/assets/images/banner/banner_bikin_website.jpg" alt="" style="border-radius: 20px;">
          </div>
        </div>
        <div class="col-lg-5 align-self-center">
          <h3 style="margin-bottom: 15px;">Bikin website impian dengan mudah disini</h3>
          <p>Jasa pembuatan website profesional untuk Perusahaan, Bisnis & UKM. Bikin Website Impian dengan mudah disini, desain website elegan dan mudah dikelola.</p>
          <h2>Hanya 1 Jutaan!</h2>
          <div class="main-button" style="margin-bottom: 25px; margin-top: 25px;">
            <a href="#">Lihat Selengkapnya</a>
          </div>
        </div>

        <div class="col-lg-12">
          <div class="current-bid" style="margin-top: 60px;">
            <div class="row">
              <div class="col-lg-12">
                <div class="section-heading" style="margin-top: 25px; margin-bottom: 25px;">
                  <div class="line-dec"></div>
                  <h2 style="margin-bottom: 10px;"><em>Solusi Terbaik</em> dari Kami
                  </h2>
                  <!-- <h2>View Details <em>For Item</em> Here.</h2> -->
                </div>
              </div>

              @foreach($solusi as $key)
              <div class="col-lg-4 col-md-6">
              <a href="{{ $key['link'] }}" style="text-decoration: none; color: #000;">
                <div class="item" style="height: 90%;">
                  <div class="left-img">
                    <img src="{{ $key['img'] }}" alt="" style="object-fit: cover;">
                  </div>
                  <div class="right-content" style="padding: 15px;">
                    <h3 style="padding-bottom: 10px;">{{ $key['title'] }}</h3>
                    <p style="margin-bottom: 10px;">{{ $key['desc'] }}</p>
                  </div>
                </div>
              </a>
              </div>
              @endforeach

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="item-details-page" style="background-image: none; background-color: #333533; padding-top: 60px; padding-bottom: 60px;">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="left-image">
            <img src="https://www.qwords.com/wp-content/themes/qwords_v10/assets/images/illustration/img_money_back_guarantee.svg" alt="" style="border-radius: 20px;">
          </div>
        </div>
        <div class="col-lg-6 align-self-center">
          <h3 style="margin-bottom: 15px;">Garansi 30 Hari Uang Kembali</h3>
          <p>Untuk menjaga kepuasan pelanggan, kami memberikan garansi uang kembali yang berlaku hingga 30 hari setelah hosting aktif.</h2>
        </div>
      </div>
    </div>
  </div>

  <div class="item-details-page" style="background-image: none; background-color: #E8EDDF; padding-top: 60px; padding-bottom: 0px;">
    <div class="container">
      <div class="row text-center">
        <div class="col-lg-12 mb-3">
          <h2 class="text-dark mb-3">Telah Dipercaya oleh 45.000+ Pelanggan Aktif</h2>
          <img src="assets/images/partner-desktop.2.png" class="img-fluid" alt="Responsive image">
          <div class="main-button" style="margin-bottom: 25px; margin-top: 25px;">
            <a href="#">Lihat Selengkapnya</a>
          </div>
        </div>
        <div class="col-lg-12 mb-3">
          <h2 class="text-dark mb-3">Partner kami</h2>
          <div class="row">
          @foreach($partner as $key)
            <div class="col-lg-2 col-md-4 col-6">
              <img src="{{ $key['img'] }}" class="img-fluid" alt="Responsive image">
            </div>
          @endforeach
          </div>
          <div class="main-button" style="margin-bottom: 25px; margin-top: 25px;">
            <a href="#">Lihat Selengkapnya</a>
          </div>
        </div>
        <div class="col-lg-12 mb-3">
          <h2 class="text-dark mb-3">Diliput oleh</h2>
          <img src="assets/images/liput-desktop.1.png" class="img-fluid" alt="Responsive image">
          <div class="main-button" style="margin-bottom: 25px; margin-top: 25px;">
            <a href="#">Lihat Selengkapnya</a>
          </div>
        </div>
        <div class="col-lg-12 mb-3">
          <h4 class="text-dark mb-3">Pilih metode e-payment otomatis. Layanan Domain, Hosting, VPS langsung aktif tanpa perlu konfirmasi bayar.</h4>
          <img src="assets/images/all-payment.png" class="img-fluid" alt="Responsive image">
          <div class="main-button" style="margin-bottom: 25px; margin-top: 25px;">
            <a href="#">Lihat Panduan Pembayaran</a>
          </div>
        </div>

      </div>
    </div>



    <div class="create-nft" style="background-image: none; background-color: #C1B098; padding-top: 20px; padding-bottom: 0px;">
      <div class="container">
        <div class="row text-center">
          <div class="col-lg-6 align-self-center ">
            <h3 style="margin-bottom: 15px;" class="text-dark">Tertarik dengan layanan kami?</h3>
            <h6 class="text-dark" style="line-height: 2;">Hubungi kami untuk mendapatkan penawaran terbaik
              <br>
              Kami siap membantu anda 24 jam
              <br>
              <i class="fa fa-phone" aria-hidden="true"></i> 0804-1-808-888
              <br>
              <i class="fa fa-phone" aria-hidden="true"></i> 021 39708800
              <br>
              <i class="fa fa-phone" aria-hidden="true"></i> 081 7437 111 ( WhatsApp only )
              <br>
              <i class="fa fa-envelope" aria-hidden="true"></i> info@qwords.com
            </h6>
          </div>
          <div class="col-lg-6">
            <img src="https://www.qwords.com/wp-content/themes/qwords_v10/assets/images/img_cs_section.png" alt="" class="img-fluid" style="max-height: 400px; max-width: 400px;">
          </div>

        </div>
      </div>
    </div>
  </div>

  <footer style="background-image: none; background-color: #333533; padding-bottom: 20px;">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="footer-menu">
            <h4> Mengenai Kami </h4>
            <ul>
              <li><a href="https://www.qwords.com/about-us/"><i class="fa fa-arrow-right" aria-hidden="true"></i> Corporate Website</a></li>
              <li><a href="https://www.qwords.com/about-us/"><i class="fa fa-arrow-right" aria-hidden="true"></i> Qwords History</a></li>
              <li><a href="https://www.qwords.com/about-us/"><i class="fa fa-arrow-right" aria-hidden="true"></i> Qwords Differences</a></li>
              <li><a href="https://www.qwords.com/about-us/"><i class="fa fa-arrow-right" aria-hidden="true"></i> Media Publication</a></li>
              <li><a href="https://www.qwords.com/about-us/"><i class="fa fa-arrow-right" aria-hidden="true"></i> Network & Infrastructure</a></li>
              <li><a href="https://www.qwords.com/about-us/"><i class="fa fa-arrow-right" aria-hidden="true"></i> Partner</a></li>
              <li><a href="https://www.qwords.com/about-us/"><i class="fa fa-arrow-right" aria-hidden="true"></i> Media Kit</a></li>
              <li><a href="https://www.qwords.com/about-us/"><i class="fa fa-arrow-right" aria-hidden="true"></i> Career & Employment</a></li>
            </ul>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="footer-menu">
            <h4> MSA/SLA/AUP </h4>
            <ul>
              <li><a href="https://www.qwords.com/msa-sla-aup/"><i class="fa fa-arrow-right" aria-hidden="true"></i> Master Service Agreement</a></li>
              <li><a href="https://www.qwords.com/msa-sla-aup/"><i class="fa fa-arrow-right" aria-hidden="true"></i> Refund Policy</a></li>
              <li><a href="https://www.qwords.com/msa-sla-aup/"><i class="fa fa-arrow-right" aria-hidden="true"></i> Privacy Policy</a></li>
              <li><a href="https://www.qwords.com/msa-sla-aup/"><i class="fa fa-arrow-right" aria-hidden="true"></i> Product Life Cycle Policy</a></li>
              <li><a href="https://www.qwords.com/msa-sla-aup/"><i class="fa fa-arrow-right" aria-hidden="true"></i> Penggunaan Merek dan Logo</a></li>
              <li><a href="https://www.qwords.com/msa-sla-aup/"><i class="fa fa-arrow-right" aria-hidden="true"></i> Faktur Pajak</a></li>
              <li><a href="https://www.qwords.com/msa-sla-aup/"><i class="fa fa-arrow-right" aria-hidden="true"></i> Migrasi Ke Qwords</a></li>

            </ul>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="footer-menu">
            <h4> Layanan Reseller </h4>
            <ul>
              <li><a href="https://www.qwords.com/layanan-reseller/"><i class="fa fa-arrow-right" aria-hidden="true"></i> Afiliasi</a></li>
              <li><a href="https://www.qwords.com/layanan-reseller/"><i class="fa fa-arrow-right" aria-hidden="true"></i> Qwords Partner</a></li>
              <li><a href="https://www.qwords.com/layanan-reseller/"><i class="fa fa-arrow-right" aria-hidden="true"></i> Private Label cPanel Reseller</a></li>
              <li><a href="https://www.qwords.com/layanan-reseller/"><i class="fa fa-arrow-right" aria-hidden="true"></i> Private Label Domain Reseller</a></li>
            </ul>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="footer-menu">
            <h4> Layanan Lainnya </h4>
            <ul>
              <li><a href="https://www.qwords.com/layanan-lainnya/"><i class="fa fa-arrow-right" aria-hidden="true"></i> Standard Support</a></li>
              <li><a href="https://www.qwords.com/layanan-lainnya/"><i class="fa fa-arrow-right" aria-hidden="true"></i> Flexi Main Domain</a></li>
              <li><a href="https://www.qwords.com/layanan-lainnya/"><i class="fa fa-arrow-right" aria-hidden="true"></i> FTP Backup</a></li>
              <li><a href="https://www.qwords.com/layanan-lainnya/"><i class="fa fa-arrow-right" aria-hidden="true"></i> Hosting Insurance</a></li>
            </ul>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="footer-menu">
            <h4> PT Qwords Company International </h4>
            <p>
              Cloud Web Hosting Indonesia. Domain & hosting terbaik dengan akses cepat yang didukung layanan support 24/7.<br>
              Terdaftar di PSE & ICANN</p>
            <div class="row">
              <div class="col-6">
                <a href="https://www.qwords.com/"><img src="https://www.qwords.com/wp-content/themes/qwords_v10/assets/images/pse%20qwords.jpg" alt="Qwords" class="img-fluid" style="max-width: 120px; max-height: 120px;"></a>
              </div>
              <div class="col-6">
                <a href="https://www.qwords.com/"><img src="https://www.qwords.com/wp-content/themes/qwords_v10/assets/images/ICANN-Accred-Regi-Logo_Corptk08-120px.png" alt="Qwords" class="img-fluid" style="max-width: 120px; max-height: 120px;"></a>
              </div>
            </div>

          </div>
        </div>

        <div class="col-lg-4">
          <div class="footer-menu">
            <h4> Kantor Jakarta </h4>
            <p>
              Gedung Cyber 1 Lantai 3, Jl.Kuningan Barat No 8, Jakarta 12710 - Indonesia<br>
              <i class="fas fa-phone-alt"></i> 021 39708800</p>
            <h4> Kantor Yogyakarta </h4>
            <p>
              Jl. Blotan No 18 Kayen, Desa/Kel. Wedomartani, Kec. Ngemplak, Kab. Sleman, Provinsi D.I.Yogyakarta 55584 - Indonesia<br>
              <i class="fas fa-phone-alt"></i> 0274 6058800</p>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="footer-menu">
            <h4> Kantor Bandung </h4>
            <p>
              Jl. Terusan Setra Indah I No.19, Sukagalih, Kec. Sukajadi, Kota Bandung 40163 - Indonesia<br>
              <i class="fas fa-phone-alt"></i> 022 30508800</p>
            <h4> Kantor Surabaya </h4>
            <p>
              Gedung MNC Tower Lt. 10, Jl. Taman AIS Nasution No. 21, Surabaya 60271 - Indonesia<br>
              <i class="fas fa-phone-alt"></i> 031 30008800</p>
          </div>
        </div>

        <div class="col=12 mb-3">
          {{-- fb, twitter, instagram, youtube --}}
          <div class="social-icons ">
            <ul class="list-inline">
              <li class="list-inline-item"><a href="https://www.facebook.com/qwords.id" target="_blank"><i class="fab fa-facebook-f fa-2xl text-white"></i></a></li>
              <li class="list-inline-item"><a href="https://twitter.com/qwords_id" target="_blank"><i class="fab fa-twitter fa-2xl text-white"></i></a></li>
              <li class="list-inline-item"><a href="https://www.instagram.com/qwords.id/" target="_blank"><i class="fab fa-instagram fa-2xl text-white"></i></a></li>
              <li class="list-inline-item"><a href="https://www.youtube.com/channel/UCZQY4Z5ZQZ5ZQZ5ZQZ5ZQZ5" target="_blank"><i class="fab fa-youtube fa-2xl text-white"></i></a></li>
            </ul>
          </div>
        </div>


        <div class="col-lg-12">
          <p>© PT Qwords Company International</p>
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src=" vendor/jquery/jquery.min.js">
  </script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>

  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function(event) {
      // array with texts to type in typewriter
      var dataText = ["Pelayanan Terbaik", "Resource Terbaik", "Promo Menarik"];

      // type one text in the typwriter
      // keeps calling itself until the text is finished
      function typeWriter(text, i, fnCallback) {
        // chekc if text isn't finished yet
        if (i < (text.length)) {
          // add next character to id
          document.querySelector("#selftype").innerHTML = text.substring(0, i + 1) + '<span aria-hidden="true"></span>';

          // wait for a while and call this function again for next character
          setTimeout(function() {
            typeWriter(text, i + 1, fnCallback)
          }, 100);
        }
        // text finished, call callback if there is a callback function
        else if (typeof fnCallback == 'function') {
          // call callback after timeout
          setTimeout(fnCallback, 1000);
        }
      }
      // start a typewriter animation for a text in the dataText array
      function StartTextAnimation(i) {
        if (typeof dataText[i] == 'undefined') {
          setTimeout(function() {
            StartTextAnimation(0);
          }, 3000);
        }
        // check if dataText[i] TESTO exists
        else if (i < dataText[i].length) {
          // text exists! start typewriter animation
          typeWriter(dataText[i], 0, function() {
            // after callback (and whole text has been animated), start next text
            StartTextAnimation(i + 1);
          });
        }
      }
      // start the text animation
      StartTextAnimation(0);
    });

  </script>

</body>

</html>
