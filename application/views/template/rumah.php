<!-- Masthead-->
<!-- <div class="fullscreen-bg">
    <video loop muted autoplay poster="poster.jpg" class="fullscreen-bg__video">
        <source src=<?= base_url('assets/img/video_back.mp4') ?> type="video/mp4">
    </video>
</div> -->
<header class="masthead">
    <div class="container" style="margin-top: 20px;">
        <img src=<?= base_url('assets/img/bandar_dalam_logo.png') ?> style="width: 200px;  " />
        <div class="masthead-heading text-uppercase">Desa bandar Dalam</div>
        <div class="masthead-subheading">Kecamatan Sidomulyo</div>

        <!-- <a class="btn btn-primary btn-xl text-uppercase" href=<?= base_url('SearchController') ?>>CEK ONGKIR</a> -->
    </div>

    <!-- Vendor CSS Files -->
    <link href=<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?> rel="stylesheet">
    <link href=<?= base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css') ?> rel="stylesheet">
    <link href=<?= base_url('assets/vendor/swiper/swiper-bundle.min.css') ?> rel="stylesheet">
    <link href=<?= base_url('assets/vendor/glightbox/css/glightbox.min.css') ?> rel="stylesheet">
    <link href=<?= base_url('assets/vendor/aos/aos.css') ?> rel="stylesheet">


    <!-- Vendor JS Files -->
    <script src=<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>> </script>
    <script src=<?= base_url('assets/vendor/swiper/swiper-bundle.min.js') ?>> </script>
    <script src=<?= base_url('assets/vendor/glightbox/js/glightbox.min.js') ?>> </script>
    <script src=<?= base_url('assets/vendor/aos/aos.js') ?>> </script>
    <script src=<?= base_url('assets/vendor/php-email-form/validate.js') ?>> </script>

    <!-- Template Main JS File -->
    <script src=<?= base_url('js/main.js') ?>> </script>

    <!-- ======= Hero Slider Section ======= -->
    <section id="hero-slider" class="hero-slider">
        <div class="container-md" data-aos="fade-in">
            <div class="row">
                <div class="col-12">
                    <div class="swiper sliderFeaturedPosts">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image:  url(<?= base_url('assets/img/kkn1.jpg') ?> );">
                                    <div class="img-bg-inner">
                                        <h2>Senam bersama mahasiswa KKN ITERA</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>
                                    </div>
                                </a>
                            </div>

                            <div class="swiper-slide">
                                <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url(<?= base_url('assets/img/post-slide-2.jpg') ?>);">
                                    <div class="img-bg-inner">
                                        <h2>17 Pictures of Medium Length Hair in Layers That Will Inspire Your New Haircut</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>
                                    </div>
                                </a>
                            </div>

                            <div class="swiper-slide">
                                <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url(<?= base_url('assets/img/post-slide-3.jpg') ?>);">
                                    <div class="img-bg-inner">
                                        <h2>13 Amazing Poems from Shel Silverstein with Valuable Life Lessons</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>
                                    </div>
                                </a>
                            </div>

                            <div class="swiper-slide">
                                <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url(<?= base_url('assets/img/post-slide-4.jpg') ?>);">
                                    <div class="img-bg-inner">
                                        <h2>9 Half-up/half-down Hairstyles for Long and Medium Hair</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="custom-swiper-button-next">
                            <span class="bi-chevron-right"></span>
                        </div>
                        <div class="custom-swiper-button-prev">
                            <span class="bi-chevron-left"></span>
                        </div>

                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Hero Slider Section -->

</header>

<!-- running text -->

<div class="runtext-container ">
    <div class="main-runtext">
        <marquee direction="" onmouseover="this.stop();" onmouseout="this.start();">

            <div class="holder">

                <div class="text-container">
                    &nbsp; &nbsp; <img src=<?= base_url('assets/logo.ico') ?>> &nbsp; <a data-fancybox-group="gallery" class="fancybox" href="images/runtext/Electric_Lighting_Act.jpg" title="THE ELECTRIC LIGHTING ACT: section 35">SELAMAT DATANG DI WEBSITE RESMI DESA BANDAR DALAM, MEDIA INFORMASI DAN TRANSPARANSI PEMERINTAH DESA BANDAR DALAM</a>
                </div>

                <div class="text-container">
                    &nbsp; &nbsp; <img src=<?= base_url('assets/logo.ico') ?>> &nbsp; <a data-fancybox-group="gallery" class="fancybox" href="images/runtext/Electric_Lighting_Act.jpg" title="THE ELECTRIC LIGHTING ACT: section 35">Silakan manfaatkan website ini dengan sebaik-baiknya</a>
                </div>

            </div>

        </marquee>
    </div>
</div>

<!-- running text end -->

<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
<link href="assets/vendor/aos/aos.css" rel="stylesheet">

<!-- Template Main CSS Files -->
<link href="assets/css/variables.css" rel="stylesheet">
<link href="assets/css/main.css" rel="stylesheet">

<!-- ======= Search Results ======= -->
<section id="search-result" class="search-result">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h3 class="category-title">Artikel</h3>

                <div class="d-md-flex post-entry-2 small-img">
                    <a href="single-post.html" class="me-4 thumbnail">
                        <img src=<?= base_url('assets/img/kkn1.jpg') ?> alt="" class="img-fluid">
                    </a>
                    <div>
                        <div class="post-meta"><span class="date">Business</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                        <h3><a href="single-post.html"> Senam Bersama Mahasiswa KKN Institut Teknologi Sumatera</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio placeat exercitationem magni voluptates dolore. Tenetur fugiat voluptates quas.</p>
                        <div class="d-flex align-items-center author">
                            <div class="photo"><img src="assets/img/person-2.jpg" alt="" class="img-fluid"></div>
                            <div class="name">
                                <h3 class="m-0 p-0">Wade Warren</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-md-flex post-entry-2 small-img">
                    <a href="single-post.html" class="me-4 thumbnail">
                        <img src=<?= base_url('assets/img/peta3.webp') ?> alt="" class="img-fluid">
                    </a>
                    <div>
                        <div class="post-meta"><span class="date">Business</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                        <h3><a href="single-post.html">Peta Wilayah Bandar Dalam</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio placeat exercitationem magni voluptates dolore. Tenetur fugiat voluptates quas.</p>
                        <div class="d-flex align-items-center author">
                            <div class="photo"><img src="assets/img/person-2.jpg" alt="" class="img-fluid"></div>
                            <div class="name">
                                <h3 class="m-0 p-0">Wade Warren</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-md-flex post-entry-2 small-img">
                    <a href="single-post.html" class="me-4 thumbnail">
                        <img src="data:image/jpeg;base64,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" alt="" class="img-fluid">
                    </a>
                    <div>
                        <div class="post-meta"><span class="date">Business</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                        <h3><a href="single-post.html">Struktur desa</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio placeat exercitationem magni voluptates dolore. Tenetur fugiat voluptates quas.</p>
                        <div class="d-flex align-items-center author">
                            <div class="photo"><img src="assets/img/person-2.jpg" alt="" class="img-fluid"></div>
                            <div class="name">
                                <h3 class="m-0 p-0">Wade Warren</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-md-flex post-entry-2 small-img">
                    <a href="single-post.html" class="me-4 thumbnail">
                        <img src=<?= base_url('assets/img/bandar_dalam_logo.png') ?> alt="" class="img-fluid">
                    </a>
                    <div>
                        <div class="post-meta"><span class="date">Business</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                        <h3><a href="single-post.html">Makna Logo</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio placeat exercitationem magni voluptates dolore. Tenetur fugiat voluptates quas.</p>
                        <div class="d-flex align-items-center author">
                            <div class="photo"><img src="assets/img/person-2.jpg" alt="" class="img-fluid"></div>
                            <div class="name">
                                <h3 class="m-0 p-0">Wade Warren</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Paging -->
                <div class="text-start py-4">
                    <div class="custom-pagination">
                        <a href="#" class="prev">Prevous</a>
                        <a href="#" class="active">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <a href="#">5</a>
                        <a href="#" class="next">Next</a>
                    </div>
                </div><!-- End Paging -->

            </div>

            <div class="col-md-3">
                <!-- ======= Sidebar ======= -->
                <div class="aside-block">

                    <ul class="nav nav-pills custom-tab-nav mb-4" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-popular-tab" data-bs-toggle="pill" data-bs-target="#pills-popular" type="button" role="tab" aria-controls="pills-popular" aria-selected="true">Popular</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-trending-tab" data-bs-toggle="pill" data-bs-target="#pills-trending" type="button" role="tab" aria-controls="pills-trending" aria-selected="false">Trending</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-latest-tab" data-bs-toggle="pill" data-bs-target="#pills-latest" type="button" role="tab" aria-controls="pills-latest" aria-selected="false">Latest</button>
                        </li>
                    </ul>

                    <div class="tab-content" id="pills-tabContent">

                        <!-- Popular -->
                        <div class="tab-pane fade show active" id="pills-popular" role="tabpanel" aria-labelledby="pills-popular-tab">
                            <div class="post-entry-1 border-bottom">
                                <div class="post-meta"><span class="date">Sport</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                <h2 class="mb-2"><a href="#">Senam Bersama mahasiswa kkn ITERA</a></h2>
                                <span class="author mb-3 d-block">Jenny Wilson</span>
                            </div>

                            <div class="post-entry-1 border-bottom">
                                <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                <h2 class="mb-2"><a href="#">Peta Wilayah Desa bandar dalam</a></h2>
                                <span class="author mb-3 d-block">Jenny Wilson</span>
                            </div>

                            <div class="post-entry-1 border-bottom">
                                <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                <h2 class="mb-2"><a href="#">9 Half-up/half-down Hairstyles for Long and Medium Hair</a></h2>
                                <span class="author mb-3 d-block">Jenny Wilson</span>
                            </div>

                            <div class="post-entry-1 border-bottom">
                                <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                <h2 class="mb-2"><a href="#">Life Insurance And Pregnancy: A Working Mom’s Guide</a></h2>
                                <span class="author mb-3 d-block">Jenny Wilson</span>
                            </div>

                            <div class="post-entry-1 border-bottom">
                                <div class="post-meta"><span class="date">Business</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                <h2 class="mb-2"><a href="#">The Best Homemade Masks for Face (keep the Pimples Away)</a></h2>
                                <span class="author mb-3 d-block">Jenny Wilson</span>
                            </div>

                            <div class="post-entry-1 border-bottom">
                                <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                <h2 class="mb-2"><a href="#">10 Life-Changing Hacks Every Working Mom Should Know</a></h2>
                                <span class="author mb-3 d-block">Jenny Wilson</span>
                            </div>
                        </div> <!-- End Popular -->

                        <!-- Trending -->
                        <div class="tab-pane fade" id="pills-trending" role="tabpanel" aria-labelledby="pills-trending-tab">
                            <div class="post-entry-1 border-bottom">
                                <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                <h2 class="mb-2"><a href="#">17 Pictures of Medium Length Hair in Layers That Will Inspire Your New Haircut</a></h2>
                                <span class="author mb-3 d-block">Jenny Wilson</span>
                            </div>

                            <div class="post-entry-1 border-bottom">
                                <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                <h2 class="mb-2"><a href="#">9 Half-up/half-down Hairstyles for Long and Medium Hair</a></h2>
                                <span class="author mb-3 d-block">Jenny Wilson</span>
                            </div>

                            <div class="post-entry-1 border-bottom">
                                <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                <h2 class="mb-2"><a href="#">Life Insurance And Pregnancy: A Working Mom’s Guide</a></h2>
                                <span class="author mb-3 d-block">Jenny Wilson</span>
                            </div>

                            <div class="post-entry-1 border-bottom">
                                <div class="post-meta"><span class="date">Sport</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                <h2 class="mb-2"><a href="#">How to Avoid Distraction and Stay Focused During Video Calls?</a></h2>
                                <span class="author mb-3 d-block">Jenny Wilson</span>
                            </div>
                            <div class="post-entry-1 border-bottom">
                                <div class="post-meta"><span class="date">Business</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                <h2 class="mb-2"><a href="#">The Best Homemade Masks for Face (keep the Pimples Away)</a></h2>
                                <span class="author mb-3 d-block">Jenny Wilson</span>
                            </div>

                            <div class="post-entry-1 border-bottom">
                                <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                <h2 class="mb-2"><a href="#">10 Life-Changing Hacks Every Working Mom Should Know</a></h2>
                                <span class="author mb-3 d-block">Jenny Wilson</span>
                            </div>
                        </div> <!-- End Trending -->

                        <!-- Latest -->
                        <div class="tab-pane fade" id="pills-latest" role="tabpanel" aria-labelledby="pills-latest-tab">
                            <div class="post-entry-1 border-bottom">
                                <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                <h2 class="mb-2"><a href="#">Life Insurance And Pregnancy: A Working Mom’s Guide</a></h2>
                                <span class="author mb-3 d-block">Jenny Wilson</span>
                            </div>

                            <div class="post-entry-1 border-bottom">
                                <div class="post-meta"><span class="date">Business</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                <h2 class="mb-2"><a href="#">The Best Homemade Masks for Face (keep the Pimples Away)</a></h2>
                                <span class="author mb-3 d-block">Jenny Wilson</span>
                            </div>

                            <div class="post-entry-1 border-bottom">
                                <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                <h2 class="mb-2"><a href="#">10 Life-Changing Hacks Every Working Mom Should Know</a></h2>
                                <span class="author mb-3 d-block">Jenny Wilson</span>
                            </div>

                            <div class="post-entry-1 border-bottom">
                                <div class="post-meta"><span class="date">Sport</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                <h2 class="mb-2"><a href="#">How to Avoid Distraction and Stay Focused During Video Calls?</a></h2>
                                <span class="author mb-3 d-block">Jenny Wilson</span>
                            </div>

                            <div class="post-entry-1 border-bottom">
                                <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                <h2 class="mb-2"><a href="#">17 Pictures of Medium Length Hair in Layers That Will Inspire Your New Haircut</a></h2>
                                <span class="author mb-3 d-block">Jenny Wilson</span>
                            </div>

                            <div class="post-entry-1 border-bottom">
                                <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                <h2 class="mb-2"><a href="#">9 Half-up/half-down Hairstyles for Long and Medium Hair</a></h2>
                                <span class="author mb-3 d-block">Jenny Wilson</span>
                            </div>

                        </div> <!-- End Latest -->

                    </div>
                </div>

                <div class="aside-block">
                    <h3 class="aside-title">Video</h3>
                    <div class="video-post">
                        <a href="https://www.youtube.com/watch?v=AiFfDjmd0jU" class="glightbox link-video">
                            <span class="bi-play-fill"></span>
                            <img src="assets/img/post-landscape-5.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div><!-- End Video -->

                <div class="aside-block">
                    <h3 class="aside-title">Categories</h3>
                    <ul class="aside-links list-unstyled">
                        <li><a href="category.html"><i class="bi bi-chevron-right"></i> Business</a></li>
                        <li><a href="category.html"><i class="bi bi-chevron-right"></i> Culture</a></li>
                        <li><a href="category.html"><i class="bi bi-chevron-right"></i> Sport</a></li>
                        <li><a href="category.html"><i class="bi bi-chevron-right"></i> Food</a></li>
                        <li><a href="category.html"><i class="bi bi-chevron-right"></i> Politics</a></li>
                        <li><a href="category.html"><i class="bi bi-chevron-right"></i> Celebrity</a></li>
                        <li><a href="category.html"><i class="bi bi-chevron-right"></i> Startups</a></li>
                        <li><a href="category.html"><i class="bi bi-chevron-right"></i> Travel</a></li>
                    </ul>
                </div><!-- End Categories -->

                <div class="aside-block">
                    <h3 class="aside-title">Tags</h3>
                    <ul class="aside-tags list-unstyled">
                        <li><a href="category.html">Business</a></li>
                        <li><a href="category.html">Culture</a></li>
                        <li><a href="category.html">Sport</a></li>
                        <li><a href="category.html">Food</a></li>
                        <li><a href="category.html">Politics</a></li>
                        <li><a href="category.html">Celebrity</a></li>
                        <li><a href="category.html">Startups</a></li>
                        <li><a href="category.html">Travel</a></li>
                    </ul>
                </div><!-- End Tags -->

            </div>

        </div>
    </div>
</section> <!-- End Search Result -->