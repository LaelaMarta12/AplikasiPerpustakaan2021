<?php
    @$id = $_GET['id'];

    $sql  ="select * from tabel_pengembalian where id_pengembalian=$id";
    $show =$db->query($sql);
    $hasil =mysqli_fetch_assoc($show);

    $id_pengembalian  = $hasil['id_pengembalian'];
?>
<div class="container-fluid" align="center">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>EDIT DATA PENGEMBALIAN</h4>
                        <br>
                        <form action="model/pengembalian/prosesupdatepengembalian.php" method="POST">
                        <input type="hidden" name="id_pengembalian" value="<?php echo $hasil['id_pengembalian'] ?>">
                            <table class="table">
                                <tr>
                                    <td>id pengembalian</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="id_pengembalian" id="id_pengembalian"value="<?php echo $hasil['id_pengembalian'] ?>"></input></td>
                                </tr>
                                <tr>
                                    <td>tanggal pengembalian</td>
                                    <td>:</td>
                                    <td><input type="date" class="form-control" name="tanggal_pengembalian" id="tanggal_pengembalian"value="<?php echo $hasil['tanggal_pengembalian']?>"></input></td>
                                </tr>
                                <tr>
                                    <td>id buku</td>
                                    <td>:</td>
                                    <td>
                                         <?php
                                            $sql  ="SELECT * FROM tabel_buku";
                                            $show =$db->query($sql);
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
                                    <td>id anggota</td>
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
                                             <option value='<?php echo $agt['id_anggota'] ?>'><?php echo $agt['nama_anggota'] ?></option>
                                            <?php
                                            endforeach
                                            ?>
                                        </select>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td>jumlah</td>
                                    <td>:</td>
                                    <td>
                                           <input class="form-control" name="jumlah_buku" id="jumlah_buku"value="<?php echo $hasil['jumlah_buku']?>"></input>
                                    </td>
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