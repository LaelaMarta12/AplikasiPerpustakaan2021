<?php
    @$id = $_GET['id'];

    $sql  ="select * from tabel_user where id_user=$id";
    $show =$db->query($sql);
    $hasil =mysqli_fetch_assoc($show);

    $id_user  = $hasil['id_user'];
?>
<div class="container-fluid" align="center">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>EDIT DATA USER</h4>
                        <br>
                        <form action="model/user/prosesupdateuser.php" method="POST">
                        <input type="hidden" name="id_user" value="<?php echo $hasil['id_user'] ?>">
                            <table class="table">
                              
                                <tr>
                                    <td>nama pegawai</td>
                                    <td>:</td>
                                    <td>
                                    <?php
                                            $sql  ="SELECT * FROM tabel_pegawai";
                                            $show =$db->query($sql);
                                        ?>
                                        <select class="form-control" name="id_pegawai" id="id_pegawai">
                                            <?php 
                                            foreach ($show as $us):
                                            ?>
                                            <option value='<?php echo $us['id_pegawai'] ?>'><?php echo $us['nama_pegawai'] ?></option>
                                            <?php
                                            endforeach
                                            ?>
                                        </select> 
                                    </td>
                                </tr>
                                <tr>
                                    <td>username</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="username" id="username"value="<?php echo $hasil['username'] ?>"></input></td>
                                </tr>
                                <tr>
                                    <td>password</td>
                                    <td>:</td>
                                    <td><input class="form-control" name="password" id="password"value="<?php echo $hasil['password']?>"></input></td>
                                </tr>
                                <tr>
                                    <td>jabatan</td>
                                    <td>:</td>
                                    <td>
                                             <select class="form-control" name="level" id="level"value="<?php echo $hasil['level']?>">
                                                <option value="L">admin</option>
                                                <option value="P">petugas</option>
                                                <option value="P">kepala perpustakaan</option>
                                            </select>
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