<div class="container-fluid" align="center">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>TAMBAH DATA PEMINJAMAN</h4>
                        <br>
                        <form action="model/peminjaman/prosestambahpeminjaman.php" method="POST">
                            <table class="table">

                                
                                <tr>
                                    <td>tanggal meminjam</td>
                                    <td>:</td>
                                    <td><input type="date" class="form-control" name="tanggal_peminjaman" id="tanggal_peminjaman" ></input></td>
                                </tr>
                                <tr>
                                    <td>nama anggota</td>
                                    <td>:</td>
                                    <td>
                                        <?php
                                            $sql  ="SELECT * FROM tabel_anggota";
                                            $show =$db->query($sql);
                                        ?>
                                        <select class="form-control" name="id_anggota" id="id_anggota">
                                             <?php 
                                            foreach ($show as $agt):
                                             ?>
                                             <option value ='<?php echo $agt['id_anggota'] ?>'><?php echo $agt['nama_anggota'] ?></option>
                                            <?php
                                            endforeach
                                            ?>
                                        </select>
                                    </td>
                                </tr>
                              
                                <tr>
                                    <td>nama buku</td>
                                    <td>:</td>
                                    <td>
                                        <?php
                                            $sql    = "SELECT * FROM tabel_buku";
                                            $show   = $db->query($sql);
                                        ?>
                                        <select class="form-control" name="id_buku" id="id_buku">
                                            <?php 
                                                foreach ($show as $buku):
                                            ?>
                                            <option value='<?php echo $buku['id_buku'] ?>'><?php echo $buku['nama_buku'] ?></option>
                                            <?php
                                                endforeach
                                            ?>
                                        </select>
                                    </td>
                                </tr>
                               
                                <tr>
                                    <td>jumlah</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="jumlah_buku" id="jumlah_buku"></input></td>
                                </tr>
                                <td colspan="3">
                                    <input type="submit" class="btn btn-primary" value="simpan">
                                </td>

                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>