<div class="container-fluid" align="center">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>TAMBAH DATA BUKU</h4>
                        <br>
                        <form action="model/buku/prosestambahbuku.php" method="POST">
                            <table class="table">
                                <tr>
                                    <td>jumlah</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="jumlah" id="jumlah"></input></td>
                                </tr>
                                <tr>
                                    <td>nama buku</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="nama_buku" id="nama_buku"></input></td>
                                </tr>
                                <tr>
                                    <td>Penulis</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="penulis" id="penulis" ></td>
                                </tr>
                                <tr>
                                    <td>penerbit</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="penerbit" id="penerbit"></input></td>
                                </tr>
                                <tr>
                                    <td>tahun terbit</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="tahun_terbit" id="tahun_terbit"></input></td>
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