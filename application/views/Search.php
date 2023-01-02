<!-- Masthead-->
<div class="fullscreen-bg">
    <video loop muted autoplay poster="poster.jpg" class="fullscreen-bg__video">
        <source src=<?= base_url('assets/img/video_back.mp4') ?> type="video/mp4">
    </video>
</div>
<header class="masthead">
    <div class="container">
        <div class="masthead-heading text-uppercase">MYROKET</div>
        <div class="masthead-subheading">Cek ongkir</div>
        <script>
            if (!$this->session->userdata('email')) {
                <a class="btn btn-primary btn-xl text-uppercase" href="welcome/tentang">Tell Me More</a>;
            }
            else{
                <a class="btn btn-primary btn-xl text-uppercase" href="user/tentang">Tell Me More</a>;
            }

           
            
        </script>
        
    </div>

</header>
<section class="page-section" id="ongkir">
    <div class="container">
         <div class="text-center">
            <h2 class="section-heading text-uppercase">CEK ONGKIR</h2>
        </div>
        <div class="row" style="margin-top: 50px" >
            <div class="col-xs-4 col-xs-offset-4">
                <form action="<?= base_url('SearchController/index') ?>" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="keyword" required placeholder="kota asal...">
                        <input type="text" class="form-control" name="keyword_tujuan" required placeholder="tujuan...">
                        <input type="text" class="form-control" name="berat" required placeholder="Berat...">
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="submit">Cari</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-4 col-xs-offset-4 text-center">
                <?php if (!empty($keyword)) { ?>
                    <p style="color:orange"><b>Menampilkan data dengan kata kunci : "<?= $keyword; ?>"</b></p>
                <?php } ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Asal</th>
                            <th scope="col">Tujuan</th>
                            <th scope="col">harga</th>
                            <th scope="col">Berat(kg)</th>
                            <th scope="col">harga total</th>
                            
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $row) { ?>
                            <tr>
                                <td><?= $row['asal'] ?></td>
                                <td><?= $row['tujuan'] ?></td>
                                <td><?= $row['harga'] ?></td>
                                <td><?= $berat ?></td>
                                <td><?= $row['harga']*$berat ?></td>
                                
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>