<?php
     require_once "config/connect.php";
    @$id = $_GET['id'];

    $sql  ="select * from tabel_buku where id_buku=$id";
    $show =$db->query($sql);
    $hasil =mysqli_fetch_assoc($show);

    $id_buku  = $hasil['id_buku'];
?>
<div class="container-fluid" align="center">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>EDIT DATA BUKU</h4>
                        <br>
                        <form action="model/buku/prosesupdatebuku.php" method="POST">
                        <input type="hidden" name="id_buku" value="<?php echo $hasil['id_buku'] ?>">
                            <table class="table">
                                <tr>
                                    <td>id buku</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="id_buku" id="id_buku"value="<?php echo $hasil['id_buku'] ?>"></input></td>
                                </tr>
                                <tr>
                                    <td>jumlah </td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="jumlah" id="jumlah"value="<?php echo $hasil['jumlah']?>"></input></td>
                                </tr>
                                <tr>
                                    <td>nama buku</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="nama_buku" id="nama_buku"value="<?php echo $hasil['nama_buku']?>"></input></td>
                                </tr>
                                <tr>
                                    <td>Penulis</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="penulis" id="penulis" value=""><?php echo $hasil['penulis']?></td>
                                </tr>
                                <tr>
                                    <td>penerbit</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="penerbit" id="penerbit"value="<?php echo $hasil['penerbit']?>"></input></td>
                                </tr>
                                <tr>
                                    <td>tahun terbit</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="tahun_terbit" id="tahun_terbit"value="<?php echo $hasil['tahun_terbit']?>"></input></td>
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