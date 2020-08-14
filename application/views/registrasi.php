<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title;?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
</head>
<body>
<h3></i>form registrasi apm</h3><hr>
            <table class="table table-striped ">
                <thead>
                <?php
            if ($c_petugas){
                foreach ($petugas as $datas)
            
            ?>
                <tr>
                        <td>id petugas</td>
                        <td>nama petugas</td>
                        <td>username</td>
                        <td>password</td>
                        <td>telepon</td>
                        <td>level</td>
                        <td>button</td>
                        
                </tr>
                <tr>
                <td><?php echo $datas->id_petugas;?></td>
                <td><?php echo $datas->nama_petugas;?></td>
                <td><?php echo $datas->username;?></td>
                <td><?php echo $datas->password;?></td>
                <td><?php echo $datas->telp;?></td>
                <td><?php echo $datas->level;?></td>
                <td>
                    <div class="col-12">
                        <button class="btn btn-success btn-sm edit_data"
                        style="width:100%">Edit</button>
                    </div>
                    <div class="col-12 mt-2">
                        <button class="btn btn-danger btn-sm hapus_data"
                        style="width:100%">Hapus</button>
                    </div>
                </td>
                </tr>
                <?php }
                else {
                    ?>
                    <tr>
                    <td colspan="8"> DATA PENGGUNA KOSONG!</td>
                    </tr>
                    <?php
                }
                ?>
                
                    
                </thead>
                
                    
            </table>
            

    
</body>
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
</html>