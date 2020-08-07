<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title;?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
</head>
<body>
<h3></i>Data Pengaduan</h3><hr>
            <table class="table table-striped ">
                <thead>
                    <tr class="text-center">
                        <th scope="col">ID</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">NIK</th>
                        <th scope="col">Isi Laporan</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Status</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="text-center">
                            <a href="<?php echo site_url('Dashboard/detail_laporan') ?>" class="btn btn-info">
                                <span class="icon text-white-50">
                                <i class="fas fa-info"></i>
                                </span>
                                <span class="text">Detail</span>
                            </a>
                            <a href="<?php echo site_url('Dashboard/cek_tanggapanms') ?>" class="btn btn-success">
                                <span class="icon text-white-50">
                                <i class="fas fa-clipboard-check"></i>
                                </span>
                                <span class="text">Lihat Tanggapan</span>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>

    
</body>
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
</html>