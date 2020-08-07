<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title;?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
</head>
<body>
<h3>Lihat Tanggapan</h3><hr>
<form class="mr-4 ml-4">
    <a href="<?php echo site_url('Dashboard/laporan_ms') ?>" class="btn btn-secondary">Kembali</a>
    <h4 class="text-danger mt-3">laporan pengaduan anda belum ditanggapi,mohon ditunggu</h4>
</form>
    
</body>
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
</html>