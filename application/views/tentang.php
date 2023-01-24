<!-- Masthead-->
<div class="fullscreen-bg">
    <video loop muted autoplay poster="poster.jpg" class="fullscreen-bg__video">
        <source src=<?= base_url('assets/img/video_back.mp4') ?> type="video/mp4">
    </video>
</div>
<header class="masthead">
    <div class="container">
        <div class="masthead-heading text-uppercase">MYROKET</div>
        <div class="masthead-subheading">TENTANGded KAMI</div>
        <a class="btn btn-primary btn-xl text-uppercase" href=<?= base_url('SearchController') ?>>CEK ONGKIR</a>;
    </div>

</header>
</section>
<!-- About-->
<section class="page-section" id="about">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Yuk kenalan !</h2>
        </div>

        <div class="text-center main_title">
            <p data-aos="fade-up" data-aos-duration="1800">PT. HRL Bisnis Indonesia, perusahaan jasa pengiriman berbasis teknologi digital, dengan menggunakan aplikasi dari smart phone dan
                komputer web service. Dengan kolaborasi yang solid, kami berusaha
                memberikan pelayanan yang terbaik bagi mitra-mitra kerja, sebagai
                komitmen kami yang utama.
                Pelanggan merupakan salah satu mitra kerja kami. Beragamnya fitur
                layanan Kurir Logistik kami, membuat pelanggan bebas memilih tipe
                layanan dan waktu pengiriman, sampai ke tujuan dengan aman dan
                cepat. Membuat semua menjadi mudah tanpa menggangu
                aktivitas anda.
            </p>
        </div>

        <ul class="timeline">
            <li>
                <div class="timeline-image"><img class="rounded-circle img-fluid" src=<?= base_url('assets/img/visi.png') ?> alt="..." /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="subheading">Visi</h4>
                    </div>
                    <div class="timeline-body">
                        <p class="text-muted">Dengan komitmen kami,menjadi perusahan pengiriman yang mendukung usaha kecil, menengah dan atas. Berbasis teknologi digital dan bersama-sama untuk menciptakan peluang dan meningkatkan kesejahteraan masyarakat, mitra dan perusahaan.</p>
                    </div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-image"><img class="rounded-circle img-fluid" src=<?= base_url('assets/img/modal-login.png') ?> alt="..." /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="subheading">Misi</h4>
                    </div>
                    <div class="timeline-body">
                        <p class="text-muted">Melaksanakan pelayanan yang prima dan bersama sama dengan mitra, masyarakat, berkembang dengan pesat dalam keterikatan yang sangat dekat sebagai keluarga besar MyRoket</p>
                    </div>
                </div>
            </li>

            <li class="timeline-inverted">
                <div class="timeline-image">
                    <h4>
                        Be Part
                        <br />
                        Of Our
                        <br />
                        Story!
                    </h4>
                </div>
            </li>
        </ul>
    </div>
</section>






<!-- Team-->
<section class="page-section bg-light" id="team">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Leader</h2>

        </div>
        <div class="row">
            <div class="team-member text-center">
                <img class="mx-auto text-center rounded-circle" src=<?= base_url('assets/img/CEO.jpg') ?> alt="..." />
                <h4>Angkasa</h4>
                <p class="text-muted">CEO / Founder</p>
                <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Twitter Profile"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
            </div>


        </div>

    </div>
</section>



<!--alamat-->
<section class="page-section" id="alamat">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">TEMUKAN KAMI</h2>


            <!--================Contact Area =================-->

            <div style="width: 100%"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63458.43501676849!2d106.5517508983612!3d-6.2436653312675885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fd7c9107a16d%3A0xc816299b54004549!2sMYROKET!5e0!3m2!1sen!2sid!4v1672418933250!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></iframe></a></iframe></div><br />
            <!--================Contact Area =================-->

        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <p class="large text-muted">ALAMAT :
                    Ruko Golden Madrid Blok D No.26
                    Room.552 Rt.005 Rw.002 JL Let.
                    Sutopo Bsd City, Kel. Rawa
                    Mekarjaya, Kec.Serpong
                    Tangerang Selatan, Banten
                    <br>
                    KANTOR PUSAT:
                    Jl.Bohemia Raya Blok C1 Kelapa Dua
                    Tangerang - Indonesia 15810.
                </p>
            </div>
        </div>
    </div>
</section>
<style>
    * {
        box-sizing: border-box;
    }

    /* Position the image container (needed to position the left and right arrows) */
    .container {
        position: relative;
    }

    /* Hide the images by default */
    .mySlides {
        display: none;
        text-align: center;
    }

    /* Add a pointer when hovering over the thumbnail images */
    .cursor {
        cursor: pointer;
    }

    /* Next & previous buttons */
    .prev,
    .next {
        cursor: pointer;
        position: absolute;
        top: 40%;
        width: auto;
        padding: 16px;
        margin-top: -50px;
        color: red;
        font-weight: bold;
        font-size: 20px;
        border-radius: 0 3px 3px 0;
        user-select: none;
        -webkit-user-select: none;
    }

    /* Position the "next button" to the right */
    .next {
        right: 0;
        border-radius: 3px 0 0 3px;
    }

    /* On hover, add a black background color with a little bit see-through */
    .prev:hover,
    .next:hover {
        background-color: rgba(0, 0, 0, 0.8);
    }

    /* Number text (1/3 etc) */
    .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
    }

    /* Container for image text */
    .caption-container {
        text-align: center;
        background-color: #222;
        padding: 2px 16px;
        color: white;
    }

    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    /* Six columns side by side */
    .column {
        float: left;
        width: 16.66%;
    }

    /* Add a transparency effect for thumnbail images */
    .demo {
        opacity: 0.6;
    }

    .active,
    .demo:hover {
        opacity: 1;
    }
</style>

<section class="page-section bg-light" id="galery">

    <!-- Container for the image gallery -->
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">GALERY</h2>

        </div>

        <!-- Full-width images with number text -->
        <div class="mySlides text-center">
            <div class="numbertext">1 / 9</div>
            <img src=<?= base_url('assets/img/galery/1.png') ?>>
        </div>

        <div class="mySlides">
            <div class="numbertext">2 / 9</div>
            <img src=<?= base_url('assets/img/galery/2.png') ?>>
        </div>

        <div class="mySlides">
            <div class="numbertext">3 / 9</div>
            <img src=<?= base_url('assets/img/galery/3.png') ?>>
        </div>

        <div class="mySlides">
            <div class="numbertext">4 / 9</div>
            <img src=<?= base_url('assets/img/galery/4.png') ?>>
        </div>

        <div class="mySlides">
            <div class="numbertext">5 / 9</div>
            <img src=<?= base_url('assets/img/galery/5.png') ?>>
        </div>

        <div class="mySlides">
            <div class="numbertext">6 / 9</div>
            <img src=<?= base_url('assets/img/galery/6.png') ?>>
        </div>


        <div class="mySlides">
            <div class="numbertext">7 / 9</div>
            <img src=<?= base_url('assets/img/galery/7.png') ?>>
        </div>

        <div class="mySlides">
            <div class="numbertext">8 / 9</div>
            <img src=<?= base_url('assets/img/galery/8.png') ?>>
        </div>

        <div class="mySlides">
            <div class="numbertext">9 / 9</div>
            <img src=<?= base_url('assets/img/galery/9.png') ?>>
        </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

        <!-- Image text -->
        <div class="caption-container">
            <p id="caption"></p>
        </div>

        <!-- Thumbnail images -->
        <div class="row">
            <div class="column">
                <img class="demo cursor" src=<?= base_url('assets/img/galery/1.png') ?> style="width:100%" onclick="currentSlide(1)" alt="Pengantaran Barang">
            </div>
            <div class="column">
                <img class="demo cursor" src=<?= base_url('assets/img/galery/2.png') ?> style="width:100%" onclick="currentSlide(2)" alt="Proses Pemuatan Barang">
            </div>
            <div class="column">
                <img class="demo cursor" src=<?= base_url('assets/img/galery/3.png') ?> style="width:100%" onclick="currentSlide(3)" alt="Poses Pemuatan Barang">
            </div>
            <div class="column">
                <img class="demo cursor" src=<?= base_url('assets/img/galery/4.png') ?> style="width:100%" onclick="currentSlide(4)" alt="Packing Barang">
            </div>
            <div class="column">
                <img class="demo cursor" src=<?= base_url('assets/img/galery/5.png') ?> style="width:100%" onclick="currentSlide(5)" alt="Pengantaran Barang">
            </div>
            <div class="column">
                <img class="demo cursor" src=<?= base_url('assets/img/galery/6.png') ?> style="width:100%" onclick="currentSlide(6)" alt="Penerimaan barang">
            </div>
            <div class="column">
                <img class="demo cursor" src=<?= base_url('assets/img/galery/7.png') ?> style="width:100%" onclick="currentSlide(7)" alt="Barang yang selesai di packing">
            </div>
            <div class="column">
                <img class="demo cursor" src=<?= base_url('assets/img/galery/8.png') ?> style="width:100%" onclick="currentSlide(8)" alt="Packing Barang">
            </div>
            <div class="column">
                <img class="demo cursor" src=<?= base_url('assets/img/galery/9.png') ?> style="width:100%" onclick="currentSlide(9)" alt="Packing Barang">
            </div>
        </div>
    </div>


</section>
<script>
    let slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("demo");
        let captionText = document.getElementById("caption");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        captionText.innerHTML = dots[slideIndex - 1].alt;
    }
</script>