<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title;?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
</head>
<body>
<h3>Tulis Pengaduan</h3><hr>

<form class="mr-4 ml-4">
  <div class="form-group">
    <label for="exampleInputEmail1">Tanggal Pengaduan</label>
    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="tanggal pengaduan">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">NIK</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="NIK">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Tulis Laporan</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Unggah Foto</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
    <small class="text-danger">*tipe yang bisa diupload adalah : .jpg, .jpeg, .png, .gif</small>    
  </div>
  <button type="button" class="btn btn-primary">Simpan</button>
  <button type="button" class="btn btn-warning">Kosongkan</button>
</form>  
</body>
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
</html>
