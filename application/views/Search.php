<!DOCTYPE html>
<html>

<head>
    <title>Search Data</title>
</head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<body>

    <div class="container">
        <div class="row" style="margin-top: 50px">
            <div class="col-xs-4 col-xs-offset-4">
                <form action="<?= base_url('SearchController/index') ?>" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="keyword" placeholder="kota asal...">
                        <input type="text" class="form-control" name="keyword_tujuan" placeholder="tujuan...">
                        <input type="text" class="form-control" name="berat" placeholder="Berat...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit">Cari</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-4 col-xs-offset-4 text-center">
                <h3>Data Barang</h3>
                <?php if (!empty($keyword)) { ?>
                    <p style="color:orange"><b>Menampilkan data dengan kata kunci : "<?= $keyword; ?>"</b></p>
                <?php } ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Asal</th>
                            <th scope="col">Tujuan</th>
                            <th scope="col">harga</th>
                            <th scope="col">harga total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $row) { ?>
                            <tr>
                                <th scope="row"><?= $row['id'] ?></th>
                                <td><?= $row['asal'] ?></td>
                                <td><?= $row['tujuan'] ?></td>
                                <td><?= $row['harga'] ?></td>
                                <td><?= $row['harga']*$berat ?></td>
                                
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>