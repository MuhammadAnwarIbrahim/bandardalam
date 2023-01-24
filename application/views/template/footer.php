<!-- Contact-->
<section class="page-section" id="contact">
    <div class="container">
        <!-- Footer-->
        <footer class="text-white text-center text-lg-start">
            <!-- Grid container -->
            <div class="container p-4">
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Desa Bandar Dalam</h5>

                        <p>
                            Desa Bandar Dalam, Kecamatan Sidomulyo, Kabupaten Lampung Selatan, Kode post 35453
                        </p>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Links</h5>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#!" class="text-white">Beranda</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Pemerintahan Desa</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Profile Desa</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Lembaga Masyarakat</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2023 Copyright: Desa Bandar Dalam
            </div>
            <!-- Copyright -->
        </footer>




        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src=<?= base_url('js/scripts.js') ?>></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        </body>
        </footer>

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.10.4/dist/sweetalert2.all.min.js"></script>
        <script src="<?= base_url('assets/') ?>js/jquery-3.3.1.min.js"></script>
        <script src="<?= base_url('assets/') ?>js/popper.js"></script>
        <script src="<?= base_url('assets/') ?>js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.1/lottie.min.js"></script>
        <script src="<?= base_url('assets/') ?>js/lottie.js"></script>



        <!-- Start Login Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                <div class="modal-login-content">
                    <div class="modal-header">
                        <h2 class="modal-title text-dark font-weight-bold" style="color:#212529 !important;" id="exampleModalCenterTitle">
                            Myroket - Masuk Sekarang</h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <br>
                            <div class="row">
                                <div class="col-md-6 text-center">
                                    <img src="<?= base_url('assets/'); ?>img/modal-login-2.png" class="img-fluid img-responsive mx-auto " style="height: 350px;">
                                </div>
                                <div class=" col-md-6">
                                    <form action="<?= base_url('welcome/validateLogin') ?>" method="post">
                                        <div class="form-group">
                                            <label class="label-font" for="
                                        exampleFormControlInput1">
                                                Email</label>
                                            <input type="text" value="<?= set_value('email'); ?>" class="form-control" name="email" autocomplete="off" id="email" placeholder="Masukan email mu disini ..">
                                            <small class="text-danger"></small>
                                        </div>
                                        <div class="form-group">
                                            <label class="label-font" for="
                                        exampleFormControlInput1">
                                                Password</label>
                                            <input type="password" name="password" class="form-control" id="password" placeholder="Masukan password mu disini ..">
                                            <small class="text-danger"></small>
                                        </div>
                                        <div class="form-check mt-2">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Ingat saya.
                                            </label>
                                        </div>
                                        <p class="terms">Dengan login anda
                                            menyetujui
                                            <i>privasi dan persyaratan ketentuan
                                                hukum kami </i> .
                                            belum punya akun? daftar <a href=" <?= base_url('user/registration') ?>">
                                                disini.</a>
                                        </p>
                                        <button class="btn btn-block font-weight-bold" style="background-color: #348385;color:white;font-size:18px;">Login
                                            Sekarang!</button>
                                        <p class="text-center p-3">
                                            <i>Lupa Password ? </i> <a href=" <?= base_url('user/registration') ?>">
                                                Klik Disini.</a>
                                        </p>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Login Modal -->


        <!-- Sweetaler Flashdata -->
        <?php if ($this->session->flashdata('success-reg')) : ?>
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Kamu berhasil daftar!',
                    text: 'Sekarang kamu boleh login!',
                    showConfirmButton: false,
                    timer: 2500
                })
            </script>
        <?php endif; ?>


        <?php if ($this->session->flashdata('login-success')) : ?>
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Kamu berhasil masuk!',
                    text: 'Sekarang pilih kemitraan kesukaan anda!',
                    showConfirmButton: false,
                    timer: 2500
                })
            </script>
        <?php endif; ?>


        <?php if ($this->session->flashdata('success-verify')) : ?>
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Email Telah Diverifikasi!',
                    text: 'Sekarang login yuk!',
                    showConfirmButton: false,
                    timer: 2500
                })
            </script>
        <?php endif; ?>


        <?php if ($this->session->flashdata('success-logout')) : ?>
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Kamus berhasil logout!',
                    text: 'Selamat tinggal, Sampai jumpa lagi!',
                    showConfirmButton: false,
                    timer: 2500
                })
            </script>
        <?php endif; ?>


        <?php if ($this->session->flashdata('fail-login')) : ?>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal login!',
                    text: 'Silahkan Periksa Kembali Email dan Password Kamu!',
                    showConfirmButton: false,
                    timer: 2500
                });
            </script>
        <?php endif; ?>


        <?php if ($this->session->flashdata('fail-email')) : ?>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Email Belum Diverifikasi!',
                    text: 'Silahkan Cek Email Kamu Dahulu!',
                    showConfirmButton: false,
                    timer: 2500
                })
            </script>
        <?php endif; ?>


        <?php if ($this->session->flashdata('fail-pass')) : ?>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Password Salah!',
                    text: 'Silahkan Periksa Kembali Password Kamu!',
                    showConfirmButton: false,
                    timer: 2500
                });
            </script>
        <?php endif; ?>


        <?php if ($this->session->flashdata('not-login')) : ?>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Harap Login Terlebih Dahulu !',
                    text: 'Silahkan Login Dahulu !',
                    showConfirmButton: false,
                    timer: 2500
                });
            </script>
        <?php endif; ?>


        <?php if ($this->session->flashdata('kosong')) : ?>
            <script>
                Swal.fire({
                    icon: '',
                    title: '',
                    text: '',
                    showConfirmButton: false,
                    timer: 2500
                });
            </script>
        <?php endif; ?>

        <?php if ($this->session->flashdata('false-login')) : ?>
            <script>
                $("#exampleModalCenter").modal("show")
            </script>
        <?php endif; ?>

        <script src="<?= base_url('assets/') ?>js/stellar.js"></script>
        <script src="<?= base_url('assets/') ?>vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="<?= base_url('assets/') ?>vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="<?= base_url('assets/') ?>vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="<?= base_url('assets/') ?>vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="<?= base_url('assets/') ?>vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="<?= base_url('assets/') ?>vendors/popup/jquery.magnific-popup.min.js"></script>
        <script src="<?= base_url('assets/') ?>js/jquery.ajaxchimp.min.js"></script>
        <script src="<?= base_url('assets/') ?>vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="<?= base_url('assets/') ?>vendors/counter-up/jquery.counterup.js"></script>
        <script src="<?= base_url('assets/') ?>js/mail-script.js"></script>
        <script src="<?= base_url('assets/') ?>js/theme.js"></script>
        <script>
            var animateButton = function(e) {
                e.preventDefault;
                e.target.classList.remove('animate');
                e.target.classList.add('animate');
                setTimeout(function() {
                    e.target.classList.remove('animate');
                }, 700);
            };

            var bubblyButtons = document.getElementsByClassName("bubbly-button");

            for (var i = 0; i < bubblyButtons.length; i++) {
                bubblyButtons[i].addEventListener('click', animateButton, false);
            }
        </script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
        <style>
            #wa {
                opacity: 50%;
                text-align: center;
                z-index: 99999;
                position: fixed;
                bottom: 40px;
                right: 30px;
                cursor: pointer;
                display: block;
            }

            #wa:hover {
                opacity: 100%;
            }
        </style>

        <div id='wa'>
            <div class="text-align:center" style="background:white;text-shadow: 1px 2px red;">CHAT ME</div>
            <a href='http://wa.me/+6281335891676'>
                <img width='60px' alt='Whatsapp' src='https://i.pinimg.com/originals/79/dc/31/79dc31280371b8ffbe56ec656418e122.png' />
            </a>
        </div>