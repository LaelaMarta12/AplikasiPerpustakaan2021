
                <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800" align="center">  DATA PEMINJAMAN </h1>
<p class="mb-4"> <a target="_blank"
        href="https://datatables.net"></a>.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-black">DATA PEMINJAMAN</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
        <a href="beranda.php?page=peminjaman&aksi=tambahpeminjaman">
        <button class="btn btn-success btn-lg"><i class="fa fa-plus"></i>Tambah</button>
        </a>
        <hr>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Tanggal meminjam</th>
                        <th>Nama Buku</th>
                        <th>Nama Anggota</th>
                        <th>Jumlah</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                <?php
                        require_once "config/connect.php";
                        $sql = "SELECT pmj.*,bk.nama_buku,agt.nama_anggota FROM tabel_peminjaman pmj LEFT JOIN tabel_buku bk ON pmj.id_buku = bk.id_buku LEFT JOIN tabel_anggota agt ON pmj.id_anggota = agt.id_anggota
                        ";
                        $show = $db->query($sql);

                        foreach($show as $peminjaman):
                   ?>
                        <tr>
                            <td><?php echo $peminjaman['tanggal_peminjaman']?></td>
                            <td><?php echo $peminjaman['nama_buku']?></td>
                            <td><?php echo $peminjaman['nama_anggota']?></td>
                            <td><?php echo $peminjaman['jumlah_buku']?></td>
                            <td>
                            <a href="beranda.php?page=peminjaman&aksi=editpeminjaman&id=<?php echo $peminjaman['id_peminjaman']?>" class="btn btn-primary btn-circle">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="model/peminjaman/prosesdeletepeminjaman.php?id=<?php echo $peminjaman['id_peminjaman']?>" class="btn btn-danger btn-circle">
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