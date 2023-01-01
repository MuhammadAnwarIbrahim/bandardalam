 <!-- Sweetalert Flashdata -->

 <?php if ($this->session->flashdata('success-reg')) : ?>
     <script>
         Swal.fire({
             icon: 'success',
             title: 'Kamu berhasil daftar!',
             text: 'Silahkan Cek Email Kamu, Buat Verifikasi!',
             showConfirmButton: false,
             timer: 2500
         })
     </script>
 <?php endif; ?>

 <?php if ($this->session->flashdata('login-success')) : ?>
     <script>
         Swal.fire({
             icon: 'success',
             title: 'Kamu berhasil daftar!',
             text: 'Sekarang login yuk!',
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
             title: 'Kamu berhasil logout!',
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
             title: 'Login Tidak berhasil !',
             text: 'Silakan perhatikan password dan email !',
             showConfirmButton: false,
             timer: 2500
         });
     </script>
 <?php endif; ?>
 <!-- end sweetalert -->