<?php
    @$id = $_GET['id'];

    $sql  ="select * from tabel_pegawai where id_pegawai=$id";
    $show =$db->query($sql);
    $hasil =mysqli_fetch_assoc($show);

    $id_pegawai  = $hasil['id_pegawai'];
?>
<div class="container-fluid" align="center">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>EDIT DATA PEGAWAI</h4>
                        <br>
                        <form action="model/pegawai/prosesupdatepegawai.php" method="POST">
                        <input type="hidden" name="id_pegawai" value="<?php echo $hasil['id_pegawai'] ?>">
                            <table class="table">
                                <tr>
                                    <td>id pegawai</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="id_pegawai" id="id_pegawai"value="<?php echo $hasil['id_pegawai'] ?>"></input></td>
                                </tr>
                                <tr>
                                    <td>nama pegawai</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="nama_pegawai" id="nama_pegawai"value="<?php echo $hasil['nama_pegawai']?>"></input></td>
                                </tr>
                                <tr>
                                    <td>jenis kelamin</td>
                                    <td>:</td>
                                    <td>   
                                            <select class="form-control" name="jenis_kelamin" id="jenis_kelamin"value="<?php echo $hasil['jenis_kelamin']?>">
                                                <option value="L">laki-laki</option>
                                                <option value="P">Perempuan</option>
                                            </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>alamat</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="alamat" id="alamat"value="<?php echo $hasil['alamat']?>"></input></td>
                                </tr>
                                <tr>
                                    <td>no hp</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="no_hp" id="no_hp"value="<?php echo $hasil['no_hp']?>"></input></td>
                                </tr>
                                <tr>
                                    <td>jabatan</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="jabatan" id="jabatan"value="<?php echo $hasil['jabatan']?>"></input></td>
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