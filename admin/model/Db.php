<?php
session_start();
include 'conn.php';

class Db extends conn
{
    //-------------------------------------------------CRUD ADMIN----------------------------------------------------//
    public function tampilDataAdmin()
    {
        $query = $this->ambilData("SELECT * FROM tbl_admin");
        return $query;
    }
    public function ambilSatuId($id)
    {
        $query = $this->ambilData("SELECT * FROM tbl_admin WHERE admin_id = '$id'");
        return $query;
    }
    public function tambahData($data)
    {
        global $koneksi;
        $nama_admin = $data['nama'];
        $tempat     = $data['tempat'];
        $tgllahir   = $data['tgllahir'];
        $notelp     = $data['notelp'];
        $email      = $data['email'];
        $jk         = $data['jk'];
        $username   = $data['username'];
        $password   =  $data['pass'];
        $alamat     = $data['alamat'];
        $foto       = $_FILES['foto']['name'];
        $lokasi     = $_FILES['foto']['tmp_name'];
        move_uploaded_file($lokasi, "images/admin/" . $foto);


        $query = "INSERT INTO tbl_admin (admin_nama,admin_tempat,admin_lahir,admin_notelp,admin_email,admin_jk,admin_username,admin_password,admin_alamat,admin_foto)
                                                                                VALUES 
                                                                                ('$nama_admin',
                                                                                '$tempat',
                                                                                '$tgllahir',
                                                                                '$notelp',
                                                                                '$email',
                                                                                '$jk',
                                                                                '$username',
                                                                                '$password',
                                                                                '$alamat',
                                                                                '$foto')";

        return $koneksi->query($query);
    }

    public function HapusData($id)
    {
        global $koneksi;
        $data = $koneksi->query("SELECT admin_foto FROM tbl_admin WHERE admin_id = '$id'")->fetch_assoc();
        $gambar = $data['admin_foto'];
        @unlink("images/admin/" . $gambar);
        $query =  "DELETE FROM tbl_admin WHERE admin_id = '$id'";

        return $koneksi->query($query);
    }

    public function editdata($data)
    {

        global $koneksi;
        $id         = $data['admin_id'];
        $nama_admin = $data['admin_nama'];
        $tempat     = $data['admin_tempat'];
        $tgllahir   = $data['admin_tgllahir'];
        $notelp     = $data['admin_notelp'];
        $email      = $data['admin_email'];
        $jk         = $data['jk'];
        $username   = $data['admin_username'];
        $password   = $data['admin_password'];
        $alamat     = $data['admin_alamat'];

        $gambar_lama   = $data['gambar_lama'];

        $foto       = $_FILES['foto']['name'];
        $lokasi     = $_FILES['foto']['tmp_name'];

        if (!empty($lokasi)) {
            @unlink("images/admin/" . $gambar_lama);
            move_uploaded_file($lokasi, "images/admin/" . $foto);
            $query = "UPDATE tbl_admin SET 
            admin_nama     = '$nama_admin',
            admin_tempat     = '$tempat',
            admin_lahir     = '$tgllahir',
            admin_notelp     = '$notelp',
            admin_email     = '$email',
            admin_jk     = '$jk',
            admin_username = '$username',
            admin_password = '$password',
            admin_alamat = '$alamat',
            admin_foto     = '$foto'
            WHERE admin_id = '$id'";

            return $koneksi->query($query);
        } else {
            $query = "UPDATE tbl_admin SET 
            admin_nama     = '$nama_admin',
            admin_tempat     = '$tempat',
            admin_lahir     = '$tgllahir',
            admin_notelp     = '$notelp',
            admin_email     = '$email',
            admin_jk     = '$jk',
            admin_username = '$username',
            admin_password = '$password',
            admin_alamat = '$alamat'
            WHERE admin_id = '$id'";

            return $koneksi->query($query);
        }
    }
    //-------------------------------------------AKHIR DARI CRUD ADMIN---------------------------------------------//

    //-------------------------------------------AKHIR DARI CRUD KRITERIA---------------------------------------------//
    public function tampilDataKriteria()
    {

        $query = $this->ambilData("SELECT * FROM tbl_kriteria");
        return $query;
    }
    public function editKriteria($data)
    {
        global $koneksi;
        $id         = $data['kriteria_id'];
        $nama       = $data['kriteria_nama'];
        $nilai      = $data['nilai_bobot'];

        $query = "UPDATE tbl_kriteria SET 
            kriteria_nama     = '$nama',
            kriteria_bobot = '$nilai'
            WHERE kriteria_id = '$id'";
        return $koneksi->query($query);
    }
    //-------------------------------------------AKHIR DARI CRUD KRITERIA---------------------------------------------//
    //-------------------------------------------AKHIR DARI CRUD KARYAWAN---------------------------------------------//
    public function tampilKaryawan()
    {
        $query = $this->ambilData("SELECT * FROM tbl_penyiar");
        return $query;
    }
    public function HapusKaryawan($id)
    {
        global $koneksi;
        $query =  "DELETE FROM tbl_penyiar WHERE penyiar_id = '$id'";
        return $koneksi->query($query);
    }

    public function editKaryawan($data)
    {
        global $koneksi;
        $id     = $data['id'];
        $nama   = $data['nama'];
        $jk     = $data['jk'];
        $alamat = $data['alamat'];
        $nohp   = $data['nohp'];
        $email  = $data['email'];
        return $koneksi->query("UPDATE `tbl_penyiar` SET `penyiar_nama`='$nama',`penyiar_jk`='$jk ',`penyiar_alamat`='$alamat',`penyiar_nohp`='$nohp',`penyiar_email`='$email' WHERE `penyiar_id`='$id'");
    }

    public function tambahKaryawan($data)
    {
        global $koneksi;
        $nama       = $data['nama'];
        $jk         = $data['jk'];
        $alamat     = $data['alamat'];
        $nohp       = $data['nohp'];
        $email      = $data['email'];
        $query = "INSERT INTO `tbl_penyiar`(`penyiar_nama`, `penyiar_jk`, `penyiar_alamat`, `penyiar_nohp`, `penyiar_email`) VALUES 
                                                                                ('$nama',
                                                                                '$jk',
                                                                                '$alamat',
                                                                                '$nohp',
                                                                                '$email')";
        return $koneksi->query($query);
    }
    //-------------------------------------------AKHIR DARI CRUD KARYAWAN---------------------------------------------//
    //-------------------------------------------AKHIR DARI CRUD penilaian---------------------------------------------//
    public function tampilDataPenilaian()
    {
        $query = $this->ambilData("SELECT * FROM tbl_penilaian a JOIN tbl_penyiar b ON a.penyiar_id=b.penyiar_id");
        return $query;
    }
    public function tampilMasakerja()
    {
        $query = $this->ambilData("SELECT * FROM tbl_masakerja");
        return $query;
    }
    public function tampilDataNormalisasi()
    {
        $query = $this->ambilData("SELECT * FROM tbl_normalisasi a JOIN tbl_penyiar b ON a.penyiar_id=b.penyiar_id");
        return $query;
    }

    public function ambiljumlahKriteria()
    {
        global $koneksi;
        $data = $koneksi->query("SELECT * FROM tbl_kriteria");
        $hasil = mysqli_num_rows($data);

        return $hasil;
    }
    public function tambahDataPenilaian($data)
    {
        global $koneksi;
        $id_karyawan    = $data['id_karyawan'];
        $absen          = $data['absen'];
        $sikap          = $data['sikap'];
        $komunikasi     = $data['komunikasi'];
        $lagu           = $data['lagu'];
        $pendengar      = $data['pendengar'];
        $masa_kerja      = $data['masa_kerja'];

        // absensi
        if ($absen >= 91) {
            $absen_kary = 4;
        } elseif ($absen >= 71 && $absen <= 90) {
            $absen_kary = 3;
        } elseif ($absen >= 55 && $absen <= 70) {
            $absen_kary = 2;
        } else {
            $absen_kary = 1;
        }
        // sikap
        if ($sikap >= 90) {
            $sikap_kary = 4;
        } elseif ($sikap >= 76 && $sikap <= 89) {
            $sikap_kary = 3;
        } elseif ($sikap >= 60 && $sikap <= 75) {
            $sikap_kary = 2;
        } else {
            $sikap_kary = 1;
        }
        // komunikasi
        if ($komunikasi >= 86) {
            $komunikasi_kary = 4;
        } elseif ($komunikasi >= 66 && $komunikasi <= 85) {
            $komunikasi_kary = 3;
        } elseif ($komunikasi >= 51 && $komunikasi <= 65) {
            $komunikasi_kary = 2;
        } else {
            $komunikasi_kary = 1;
        }
        // lagu
        if ($lagu >= 76) {
            $lagu_kary = 4;
        } elseif ($lagu >= 60 && $lagu <= 75) {
            $lagu_kary = 3;
        } elseif ($lagu >= 45 && $lagu <= 59) {
            $lagu_kary = 2;
        } else {
            $lagu_kary = 1;
        }
        // pendengar
        if ($pendengar >= 70) {
            $pendengar_kary = 4;
        } elseif ($pendengar >= 50 && $pendengar <= 69) {
            $pendengar_kary = 3;
            // } elseif ($pendengar >= 51 && $pendengar <= 74) {
            //     $pendengar_kary = 2;
        } else {
            $pendengar_kary = 2;
        }

        //MASA KERJA

        if ($masa_kerja >= 16) {
            $kerja = 5;
        } else if ($masa_kerja >= 11 && $masa_kerja <= 15) {
            $kerja = 4;
        } else if ($masa_kerja >= 6 && $masa_kerja <= 10) {
            $kerja = 3;
        } else if ($masa_kerja >= 3 && $masa_kerja <= 5) {
            $kerja = 2;
        } else {
            $kerja = 1;
        }



        $koneksi->query("INSERT INTO `tbl_penilaian`(`penyiar_id`, `absensi`, `sikap`, `komunikasi`, `lagu`, `pendengar`,`masa_kerja`) VALUES 
                                                                                ('$id_karyawan',
                                                                                '$absen',
                                                                                '$sikap',
                                                                                '$komunikasi',
                                                                                '$lagu',
                                                                                '$pendengar',
                                                                                '$masa_kerja'
                                                                                )");
        $koneksi->query("INSERT INTO `tbl_normalisasi`(`penyiar_id`, `nor_absensi`, `nor_sikap`, `nor_komunikasi`, `nor_lagu`, `nor_pendengar`,`nor_masakerja`) VALUES
                                                                                ('$id_karyawan',
                                                                                '$absen_kary',
                                                                                '$sikap_kary',
                                                                                '$komunikasi_kary',
                                                                                '$lagu_kary',
                                                                                '$pendengar_kary',
                                                                                '$kerja'
                                                                                )");
    }



    public function HapusPenilaian($id)
    {
        global $koneksi;
        $query =  "DELETE FROM tbl_penilaian WHERE nilai_id = '$id'";

        return $koneksi->query($query);
    }
    //-------------------------------------------AKHIR DARI CRUD penilaian---------------------------------------------//
    //-------------------------------------------AKHIR DARI CRUD RANKING---------------------------------------------//
    public function tampilDataRank()
    {
        $query = $this->ambilData("SELECT * FROM tbl_rank a JOIN tbl_penyiar b ON a.penyiar_id=b.penyiar_id ORDER BY nilai_ev DESC ");
        return $query;
    }

    //-------------------------------------------AKHIR DARI CRUD RANKING---------------------------------------------//


    //------------------crud berita----------------------------------------------//
    public function tampilBerita()
    {
        return $this->ambilData("SELECT * FROM tbl_berita");
    }

    public function saveBerita($data)
    {
        global $koneksi;
        $judul = $data['judul'];
        $isi = $data['isi'];
        $tgl  = $data['tgl'];
        $gambar = $_FILES['foto']['name'];
        $lokasi = $_FILES['foto']['tmp_name'];
        move_uploaded_file($lokasi, "images/berita/" . $gambar);

        return $koneksi->query("INSERT INTO tbl_berita (berita_judul,berita_isi,berita_tgl,berita_gambar) VALUES ('$judul','$isi','$tgl','$gambar')");
    }

    public function editBerita($data)
    {
        global $koneksi;
        $id = $data['id'];
        $judul = $data['judul'];
        $isi = $data['isi'];
        $tgl  = $data['tgl'];
        $gambar_lama  = $data['gambar_lama'];

        $gambar = $_FILES['foto']['name'];
        $lokasi = $_FILES['foto']['tmp_name'];

        if (!empty($lokasi)) {
            @unlink("images/berita/" . $gambar_lama);
            move_uploaded_file($lokasi, "images/berita/" . $gambar);
            return $koneksi->query("UPDATE tbl_berita SET berita_judul = '$judul',
                                                                berita_isi = '$isi',
                                                                berita_tgl = '$tgl',
                                                                berita_gambar = '$gambar' WHERE 
                                                                berita_id = '$id'");
        } else {
            return $koneksi->query("UPDATE tbl_berita SET 
            berita_judul = '$judul',
            berita_isi = '$isi',
            berita_tgl = '$tgl'
           WHERE 
            berita_id = '$id'");
        }
    }

    public function hapusBerita($id)
    {
        global $koneksi;
        $data = $koneksi->query("SELECT berita_gambar FROM tbl_berita WHERE berita_id = '$id'")->fetch_assoc();
        $gambar = $data['berita_gambar'];
        @unlink("images/berita/" . $gambar);
        return $koneksi->query("DELETE FROM tbl_berita WHERE berita_id = '$id'");
    }

    //-------------------------------------akhir crud berita------------------//
    public function login($data)
    {
        global $koneksi;
        $user = $data['username'];
        $pass  = md5($data['password']);

        $query = "SELECT * FROM tbl_admin WHERE admin_username = '$user' AND admin_password = '$pass'";
        $ambil = $koneksi->query($query);
        $validasi = $ambil->num_rows;
        // var_dump($query);
        // die;

        if ($validasi >= 1) {
            session_start();

            $_SESSION['admin'] = $ambil->fetch_assoc();

            echo "
            <script>
            alert('Selamat Anda Berhasil Login');
            window.location='home.html';
            </script>";
        } else {
            echo " <script>
            alert('Login Gagal Silahkan Coba Lagi ');
            window.location='login.php';
            </script>";
        }
    }
}
