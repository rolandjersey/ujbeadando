<?
include_once 'database.php';
?>


<!DOCTYPE html>
<html lang="en">
<?php
include_once 'common/head.php';
?>

<body class="index-page">

<?php
include_once 'common/header.php';
?>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <img src="assets/img/cards-4.jpg" alt="" data-aos="fade-in">

      <div class="container">
        <div class="row">
          <div class="col-xl-4">
            <h1 data-aos="fade-up">Szélerőművek</h1>
            <blockquote data-aos="fade-up" data-aos-delay="100">
              <p>A szélenergia jelenleg a világ leggyakrabban használt megújuló energiaforrása, megelőzve a vízenergiát és a napenergiát is. A szélerőmű pedig az az eszköz, mellyel a légmozgást elektromos árammá lehet alakítani. </p>
            </blockquote>
            <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
              <a href="#about" class="btn-get-started">Kezdjük!</a>
              <a href="https://www.youtube.com/watch?v=QkGA2AAiYig" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Rövid videó</span></a>
            </div>
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- Why Us Section -->
    <section id="why-us" class="why-us section">

      <div class="container">

        <div class="row g-0">

          <div class="col-xl-5 img-bg" data-aos="fade-up" data-aos-delay="100">
            <img src="assets/img/cards-3.jpg" alt="">
          </div>

          <div class="col-xl-7 slides position-relative" data-aos="fade-up" data-aos-delay="200">

            <div class="swiper init-swiper">
              <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "centeredSlides": true,
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  },
                  "navigation": {
                    "nextEl": ".swiper-button-next",
                    "prevEl": ".swiper-button-prev"
                  }
                }
              </script>
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <div class="item">
                    <h3 class="mb-3">A szélenergia végtelen lehetőségei</h3>
                    <p>A fejlett világban a szélenergia a leggyorsabban bővülő villamosenergia-termelési technológia. Ehhez képest hazánkban nagyon alacsony a részaránya, és a döntéshozók oldalán sem látható szándék az elterjesztésére.</p>
                  </div>
                </div><!-- End slide item -->

                <div class="swiper-slide">
                  <div class="item">
                    <h3 class="mb-3">A szélenergia végtelen lehetőségei</h3>
                    <p> Nap bolygónkat elérő energiájának nagyjából 1–4%-a alakul át szélenergiává, amely nemcsak időjárásunk alakításában játszik nagy szerepet, de szélturbinák segítségével elektromos áramot állíthatunk elő belőle.</p>
                  </div>
                </div><!-- End slide item -->

                <div class="swiper-slide">
                  <div class="item">
                    <h3 class="mb-3">A szélenergia végtelen lehetőségei</h3>
                    <p>A turbinák működésüket és felépítésüket tekintve viszonylag egyszerű, a klasszikus szélmalmokhoz hasonló szerkezetek. Általában három lapátjuk van, melyek a rotor tengelyéhez csatlakoznak, amely a lapátokat érő szél hatására forgásba jön. A gondolában elhelyezkedő generátor ezt a forgási energiát alakítja át villamos energiává.</p>
                  </div>
                </div><!-- End slide item -->

                <div class="swiper-slide">
                  <div class="item">
                    <h3 class="mb-3">A szélenergia végtelen lehetőségei</h3>
                    <p>Fenntarthatósági szempontból a szélerőműveknek több előnyös tulajdonságuk is van, ugyanis a szélenergiának nincs káros égésterméke, mint a fosszilis energiaforrásoknak. A szélerőművek az energiatermelés során egyáltalán nem bocsátanak ki szén-dioxidot, ezáltal pedig nem növelik az üvegházhatást. További előnyük, hogy felépítésük viszonylag egyszerű, és szinte bárhová telepíthetők.</p>
                  </div>
                </div><!-- End slide item -->

              </div>
              <div class="swiper-pagination"></div>
            </div>

            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>

        </div>

      </div>

    </section><!-- /Why Us Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Érdekességek</h2>
        <p>Tekintse meg őket</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="icon flex-shrink-0"><i class="bi bi-briefcase" style="color: #f57813;"></i></div>
            <div>
              <h4 class="title">Fenntarthatóság</h4>
              <p class="description"> A szélerőművek az energiatermelés során egyáltalán nem bocsátanak ki szén-dioxidot.</p>
              <a href="#" class="readmore stretched-link"><span>Olvass tovább</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="icon flex-shrink-0"><i class="bi bi-card-checklist" style="color: #15a04a;"></i></div>
            <div>
              <h4 class="title">Üzemeltetés</h4>
              <p class="description">Elhasználódása után – 25–30 éves élettartama végén – alkatrészeinek egy része újrahasznosítható.</p>
              <a href="#" class="readmore stretched-link"><span>Olvass tovább</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="icon flex-shrink-0"><i class="bi bi-bar-chart" style="color: #d90769;"></i></div>
            <div>
              <h4 class="title">Rotorlapátok</h4>
              <p class="description">Üveg- vagy szénszálas anyaguk nehezen újrahasznosítható, elégetésük viszont rendkívüli módon károsítja a környezetet.</p>
              <a href="#" class="readmore stretched-link"><span>Olvass tovább</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="icon flex-shrink-0"><i class="bi bi-binoculars" style="color: #15bfbc;"></i></div>
            <div>
              <h4 class="title">Telepítésük</h4>
              <p class="description">További előnyük, hogy felépítésük viszonylag egyszerű, és szinte bárhová telepíthetők.</p>
              <a href="#" class="readmore stretched-link"><span>Olvass tovább</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="500">
            <div class="icon flex-shrink-0"><i class="bi bi-brightness-high" style="color: #f5cf13;"></i></div>
            <div>
              <h4 class="title">Turbinák</h4>
              <p class="description">A turbinák működésüket és felépítésüket tekintve viszonylag egyszerű, a klasszikus szélmalmokhoz hasonló szerkezetek.</p>
              <a href="#" class="readmore stretched-link"><span>Olvass tovább</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="600">
            <div class="icon flex-shrink-0"><i class="bi bi-calendar4-week" style="color: #1335f5;"></i></div>
            <div>
              <h4 class="title">Örvényleválás</h4>
              <p class="description">Ezekre a problémákra a lapát nélküli szélerőművek jelentenek megoldást, melyek ötlete a Kármán Tódor fizikus által leírt jelenségen, az örvényleváláson alapul.</p>
              <a href="#" class="readmore stretched-link"><span>Olvass tovább</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section dark-background">

      <img src="assets/img/contact-page-title-bg.jpg" alt="">

      <div class="container">
        <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-xl-10">
            <div class="text-center">
              <h3>Egy jobb világ felé</h3>
              <p>Mivel a Nap mindig süt, a szél sosem fogy el. Tehát az sosem okoz gondot az emberiség számára, hogy nem fúj többé a szél – problémát csak az jelenthet, ha túl naggyá válik az elektromos áram iránti igény, és ezt a szélerőművek nem képesek kiszolgálni.</p>
              <a class="cta-btn" href="#">Kattits ide</a>
            </div>
          </div>
        </div>
      </div>

    </section><!-- /Call To Action Section -->

    <!-- Features Section -->
    <section id="features" class="features section">

      <div class="container">
        <div class="row">
          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
            <h3 class="mb-0">Még több érdekesség</h3>
            

            <div class="row gy-4">

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="bi bi-eye" style="color: #ff8b2c;"></i>
                  <span>Legyünk zöldek</span>
                </div>
              </div><!-- End Icon List Item-->

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="bi bi-infinity" style="color: #5578ff;"></i>
                  <span>A te szélerőműved</span>
                </div>
              </div><!-- End Icon List Item-->

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="bi bi-mortarboard" style="color: #e80368;"></i>
                  <span>Csináld magad</span>
                </div>
              </div><!-- End Icon List Item-->

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="bi bi-star" style="color: #ffa76e;"></i>
                  <span>Tudatosság</span>
                </div>
              </div><!-- End Icon List Item-->

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="bi bi-x-diamond" style="color: #11dbcf;"></i>
                  <span>Egy zöldebb világ</span>
                </div>
              </div><!-- End Icon List Item-->

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="bi bi-camera-video" style="color: #4233ff;"></i>
                  <span>Miért jó?</span>
                </div>
              </div><!-- End Icon List Item-->

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="bi bi-brightness-high" style="color: #29cc61;"></i>
                  <span>Neked is megéri</span>
                </div>
              </div><!-- End Icon List Item-->

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="bi bi-activity" style="color: #ff5828;"></i>
                  <span>Figyelj másokra</span>
                </div>
              </div><!-- End Icon List Item-->
            </div>
          </div>
          <div class="col-lg-5 position-relative" data-aos="zoom-out" data-aos-delay="200">
            <div class="phone-wrap">
              <img src="assets/img/iphone.png" alt="Image" class="img-fluid">
            </div>
          </div>
        </div>

      </div>

      <div class="details">
        <div class="container">
          <div class="row">
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
              <h4>A szélerőmű előnyei</h4>
              <p>Míg a fosszilis energiaforrásokat teljes mértékben mi kontrolláljuk, addig a megújuló energiaforrások tőlünk függetlenül működnek. Ez azt jelenti, hogy a napelemekhez hasonlóan a szélerőművek is csak akkor tudnak nagy hatékonysággal működni, amikor kedvezőek a körülmények, tehát szeles az időjárás.</p>
              <a href="#about" class="btn-get-started">Kezdjük</a>
            </div>
          </div>
        </div>
      </div>

    </section><!-- /Features Section -->

    <!-- Recent Posts Section -->
    <section id="recent-posts" class="recent-posts section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>További cikkek a témában</h2>

      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-5">

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="post-box">
              <div class="post-img"><img src="assets/img/blog/blog-1.jpg" class="img-fluid" alt=""></div>
              <div class="meta">
                <span class="post-date">December 12</span>
                <span class="post-author"> / Horváth József</span>
              </div>
              <h3 class="post-title">Az Unióban</h3>
              <p>Magyarország próbál felzárkózni a nyugati országokhoz, de....</p>
              <a href="blog-details.html" class="readmore stretched-link"><span>Olvass tovább</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="post-box">
              <div class="post-img"><img src="assets/img/blog/blog-2.jpg" class="img-fluid" alt=""></div>
              <div class="meta">
                <span class="post-date">Szeptember 05</span>
                <span class="post-author"> / Szabó Imre</span>
              </div>
              <h3 class="post-title">Miért pont a szélenergia?</h3>
              <p>Az egyik legfontosabb energiatermelő eszköz a szélerőmű, sok előnye van – de akadnak azért hátrányai is....</p>
              <a href="blog-details.html" class="readmore stretched-link"><span>Olvass tovább</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="post-box">
              <div class="post-img"><img src="assets/img/blog/blog-3.jpg" class="img-fluid" alt=""></div>
              <div class="meta">
                <span class="post-date">Július 27</span>
                <span class="post-author"> / Orosz Liza</span>
              </div>
              <h3 class="post-title">Kell nekünk a szélerőmű?!?</h3>
              <p>Míg a fosszilis energiaforrásokat teljes mértékben mi kontrolláljuk, addig a megújuló energiaforrások tőlünk függetlenül működnek...</p>
              <a href="blog-details.html" class="readmore stretched-link"><span>Olvass tovább</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="post-box">
              <div class="post-img"><img src="assets/img/blog/blog-4.jpg" class="img-fluid" alt=""></div>
              <div class="meta">
                <span class="post-date">Október 16</span>
                <span class="post-author"> / Kis Márió</span>
              </div>
              <h3 class="post-title">Több szélerőművet</h3>
              <p>A szélerőművek felépítése viszonylag egyszerű, és szinte bárhova telepíthetők, ahol effektív lehet a szélenergia hasznosítása....</p>
              <a href="blog-details.html" class="readmore stretched-link"><span>Olvass tovább</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Recent Posts Section -->

  </main>

  <?php
  include_once 'common/footer.php';
  ?>

</body>

</html>