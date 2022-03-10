<?php


if(@$_GET['page'] == ''){
    include "views/beranda.php";
}//data buku
elseif(@$_GET['page'] == 'buku'){
    @$aksi = $_GET['aksi'];
    if(@$aksi){
        if(@$aksi == 'tambahbuku'){
            include "views/buku/tambahbuku.php";  
        }elseif(@$aksi == 'editbuku'){
            include "views/buku/editbuku.php";  
        }elseif(@$aksi == 'delete'){
            include "model/buku/prosesdeletbuku.php";   
        }
    
    }
    else{
        include "views/buku/buku.php";    
    }


}//data pegawai
elseif(@$_GET['page'] == 'pegawai'){
    @$aksi = $_GET['aksi'];
    if(@$aksi){
        if(@$aksi == 'tambahpegawai'){
            include "views/pegawai/tambahpegawai.php";  
        }elseif(@$aksi == 'editpegawai'){
            include "views/pegawai/editpegawai.php";  
        }elseif(@$aksi == 'delete'){
            include "model/pegawai/prosesdeletepegawai.php";   
        }
    
    }else{
        include "views/pegawai/pegawai.php";    
    }
}//data pengembalian
elseif(@$_GET['page'] == 'pengembalian'){
    @$aksi = $_GET['aksi'];
    if(@$aksi){
        if(@$aksi == 'tambahpengembalian'){
            include "views/pengembalian/tambahpengembalian.php";  
        }elseif(@$aksi == 'editpengembalian'){
            include "views/pengembalian/editpengembalian.php";  
        }elseif(@$aksi == 'delete'){
            include "model/pengembalian/prosesdeletepengembalian.php";   
        }
    }else{
        include "views/pengembalian/pengembalian.php";    
    }
}//data anggota
elseif(@$_GET['page'] == 'anggota'){
    @$aksi = $_GET['aksi'];
    if(@$aksi){
        if(@$aksi == 'tambahanggota'){
            include "views/anggota/tambahanggota.php";  
        }elseif(@$aksi == 'editanggota'){
            include "views/anggota/editanggota.php";  
        }elseif(@$aksi == 'delete'){
            include "model/anggota/prosesdeleteanggota.php";   
        }
    
    }else{
        include "views/anggota/anggota.php";    
    }
}//data peminjaman
elseif(@$_GET['page'] == 'peminjaman'){
    @$aksi = $_GET['aksi'];
    if(@$aksi){
        if(@$aksi == 'tambahpeminjaman'){
            include "views/peminjaman/tambahpeminjaman.php";  
        }elseif(@$aksi == 'editpeminjaman'){
            include "views/peminjaman/editpeminjaman.php";  
        }elseif(@$aksi == 'delete'){
            include "model/peminjaman/prosesdeletepeminjaman.php";   
        }
    
    }else{
        include "views/peminjaman/peminjaman.php";    
    }
}//data user
elseif(@$_GET['page'] == 'user'){
    @$aksi = $_GET['aksi'];
    if(@$aksi){
        if(@$aksi == 'tambahuser'){
            include "views/user/tambahuser.php";  
        }elseif(@$aksi == 'edituser'){
            include "views/user/edituser.php";  
        }elseif(@$aksi == 'delete'){
            include "model/user/prosesdeleteuser.php";   
        }
    
    }else{
        include "views/user/user.php";    
    }
}
else{
    include "views/eror.php";
}
