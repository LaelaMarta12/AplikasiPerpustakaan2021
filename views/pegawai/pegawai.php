
                <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800" align="center">DATA PEGAWAI</h1>
<p class="mb-4"> <a target="_blank"
        href="https://datatables.net"></a>.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-black">Data Pegawai</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
        <a href="beranda.php?page=pegawai&aksi=tambahpegawai">
        <button class="btn btn-success btn-lg"><i class="fa fa-plus"></i>Tambah</button>
        </a>
        <hr>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>JK</th>
                        <th>Alamat</th>
                        <th>No Hp</th>
                        <th>Jabatan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                   <?php
                        require_once "config/connect.php";
                        $sql = "select * from tabel_pegawai";
                        $show = $db->query($sql);

                        foreach($show as $pgw):
                   ?>
                        <tr>
                            <td><?php echo $pgw['nama_pegawai']?></td>
                            <td><?php echo $pgw['jenis_kelamin']?></td>
                            <td><?php echo $pgw['alamat']?></td>
                            <td><?php echo $pgw['no_hp']?></td>
                            <td><?php echo $pgw['jabatan']?></td>
                            <td>
                            <a href="beranda.php?page=pegawai&aksi=editpegawai&id=<?php echo $pgw['id_pegawai']?>" class="btn btn-primary btn-circle">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="model/pegawai/prosesdeletepegawai.php?id=<?php echo $pgw['id_pegawai']?>" class="btn btn-danger btn-circle">
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