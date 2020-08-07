<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title;?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
</head>
<body>
<h3>Detail Pengaduan</h3><hr>
    <form class="mr-4 ml-4">
        <a href="<?php echo site_url('Dashboard/laporan_ms') ?>" class="btn btn-secondary">Kembali</a>
        <div class="form-group mt-3">
            <label for="exampleInput">Tanggal Pengaduan</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="tahun-bulan-tanggal" disabled>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Isi Laporan</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="laporan saya" disabled></textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Bukti Foto</label>
            <br>
            <img src="<?php echo base_url().'' ?>" width="15%" alt="">
        </div>
    </form>

    
</body>
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
</html>