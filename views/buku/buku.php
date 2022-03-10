
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800" align="center">DATA BUKU</h1>
<p class="mb-4"> <a target="_blank"
        href="https://datatables.net"></a></p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-black">Data Buku</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
        <a href="beranda.php?page=buku&aksi=tambahbuku">
            <button class="btn btn-success"><i class="fa fa-plus"></i>Tambah</button>
        </a>
        <hr>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Jumlah</th>
                        <th>Nama Buku</th>
                        <th>Penulis</th>
                        <th>Penerbit</th>
                        <th>Tahun Terbit</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                
                <tbody>
                   <?php
                         require_once "config/connect.php";
                        $sql = "select * from tabel_buku";
                        $show = $db->query($sql);

                        foreach($show as $buku):
                   ?>
                        <tr>
                            <td><?php echo $buku['jumlah']?></td>
                            <td><?php echo $buku['nama_buku']?></td>
                            <td><?php echo $buku['penulis']?></td>
                            <td><?php echo $buku['penerbit']?></td>
                            <td><?php echo $buku['tahun_terbit']?></td>
                            <td>
                            <a href="beranda.php?page=buku&aksi=editbuku&id=<?php echo $buku['id_buku']?>" class="btn btn-primary btn-circle">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="model/buku/prosesdeletebuku.php?id=<?php echo $buku['id_buku']?>" class="btn btn-danger btn-circle">
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