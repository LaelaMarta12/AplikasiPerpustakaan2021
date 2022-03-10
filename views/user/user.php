
                <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800" align="center">DATA USER</h1>
<p class="mb-4"> <a target="_blank"
        href="https://datatables.net"></a>.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-black">Data User</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
        <a href="beranda.php?page=user&aksi=tambahuser">
        <button class="btn btn-success btn-lg"><i class="fa fa-plus"></i>Tambah</button>
        </a>
        <hr>
        
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama Pegawai</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Jabatan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
      
                <tbody>
                   <?php
                        require_once "config/connect.php";
                        $sql = "SELECT u.*,p.nama_pegawai FROM tabel_user u LEFT JOIN tabel_pegawai p ON u.id_pegawai = p.id_pegawai
                        ";
                        $show = $db->query($sql);

                        foreach($show as $us):
                   ?>
                        <tr>
                            <td><?php echo $us['nama_pegawai']?></td>
                            <td><?php echo $us['username']?></td>
                            <td><?php echo $us['password']?></td>
                            <td><?php echo $us['level']?></td>
                            <td>
                            <a href="beranda.php?page=user&aksi=edituser&id=<?php echo $us['id_user']?>" class="btn btn-primary btn-circle">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="model/user/prosesdeleteuser.php?id=<?php echo $us['id_user']?>" class="btn btn-danger btn-circle">
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