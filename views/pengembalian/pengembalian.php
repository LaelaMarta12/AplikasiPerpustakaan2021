
                <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800" align="center">DATA PENGEMBALIAN</h1>
<p class="mb-4"> <a target="_blank"
        href="https://datatables.net"></a>.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-black">DATA PENGEMBALIAN</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
        <a href="beranda.php?page=pengembalian&aksi=tambahpengembalian">
        <button class="btn btn-success btn-lg"><i class="fa fa-plus"></i>Tambah</button>
        </a>
        <hr>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>

                        <th>Tanggal Pengembalian</th>
                        <th>Nama Buku</th>
                        <th>Nama Anggota</th>
                        <th>Jumlah Buku</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                   <?php
                        require_once "config/connect.php";                
                        $sql = "SELECT pmb.*,bk.nama_buku,agt.nama_anggota FROM tabel_pengembalian pmb LEFT JOIN tabel_buku bk ON pmb.id_buku = bk.id_buku LEFT JOIN tabel_anggota agt ON pmb.id_anggota = agt.id_anggota
                        ";
                        $show = $db->query($sql);

                        foreach($show as $pengembalian):
                   ?>
                        <tr>

                            <td><?php echo $pengembalian['tanggal_pengembalian']?></td>
                            <td><?php echo $pengembalian['nama_buku']?></td>
                            <td><?php echo $pengembalian['nama_anggota']?></td>
                            <td><?php echo $pengembalian['jumlah_buku']?></td>
                            <td>
                            <a href="beranda.php?page=pengembalian&aksi=editpengembalian&id=<?php echo $pengembalian['id_pengembalian']?>" class="btn btn-primary btn-circle">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="model/pengembalian/prosesdeletepengembalian.php?id=<?php echo $pengembalian['id_pengembalian']?>" class="btn btn-danger btn-circle">
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