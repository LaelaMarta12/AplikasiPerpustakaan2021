
                <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800" align="center">DATA ANGGOTA</h1>
<p class="mb-4"> <a target="_blank"
        href="https://datatables.net"></a>.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-black">Data Anggota</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
        <a href="beranda.php?page=anggota&aksi=tambahanggota">
        <button class="btn btn-success btn-lg"><i class="fa fa-plus"></i>Tambah</button>
        </a>
        <hr>
        
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama Anggota</th>
                        <th>JK</th>
                        <th>Alamat</th>
                        <th>No Hp</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
      
                <tbody>
                   <?php
                         require_once "config/connect.php";
                        $sql = "select * from tabel_anggota";
                        $show = $db->query($sql);

                        foreach($show as $agt):
                   ?>
                        <tr>
                            <td><?php echo $agt['nama_anggota']?></td>
                            <td><?php echo $agt['jenis_kelamin']?></td>
                            <td><?php echo $agt['alamat']?></td>
                            <td><?php echo $agt['no_hp']?></td>
                            <td>
                            <a href="beranda.php?page=anggota&aksi=editanggota&id=<?php echo $agt['id_anggota']?>" class="btn btn-primary btn-circle">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="model/anggota/prosesdeleteanggota.php?id=<?php echo $agt['id_anggota']?>" class="btn btn-danger btn-circle">
                                <i class="fa fa-trash"></i>
                            </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                   
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>