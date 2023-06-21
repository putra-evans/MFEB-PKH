<?php
include '../../model/Db.php';
$db = new Db();
date_default_timezone_set("Asia/Bangkok");
function TanggalIndo($date)
{
    $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

    $tahun = substr($date, 0, 4);
    $bulan = substr($date, 5, 2);
    $tgl   = substr($date, 8, 2);

    $result = $tgl . " " . $BulanIndo[(int) $bulan - 1] . " " . $tahun;
    return ($result);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Radio Kiara</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Custom fonts for this template-->
    <link href="../../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="../../assets/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../assets/css/sb-admin.css" rel="stylesheet">


    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin="" />
    <style type="text/css">
        #mapid {
            height: 600px;
            /* width: 400px; */
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <style>
        #customers {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: center;
            /* background-color: #4CAF50; */
            color: black;
        }
    </style>

</head>

<body onload="print()" id="page-top" style="background-color: seashell;">
    <script src="../../assets/vendor/jquery/jquery.min.js"></script>
    <div id="wrapper">
        <div id="content-wrapper">
            <table align="center">
                <tr>
                    <td width="100"> <img width="150px" src="../../images/Logo Radio Kiara.jpg" alt="Gambar"> &nbsp;&nbsp;&nbsp;&nbsp;
                    </td><br>
                    <td align="center" style="font-family: Arial;"><b><span style="font-size: 24px;">PT Radio Kiara Indah Berjaya</b></span>
                        <br><small> jl.
                            Raya Lubuk Begalung no.6 Padang, Sumatera Barat</small><br>
                        <small>0813-2288-8455 &emsp; Email. kiarafm@gmail.com</small><br>
                </tr>
            </table>
            <table align="center">
                <tr>
                    <td width="750">
                        <hr style="border-top: 5px double black;">
                    </td>
                </tr>
            </table>
            <br><br>
            <center>
                <h3 class="text-capitalize"> <u>Laporan Data Penyiar Radio </u> </h3>
            </center>
            <br><br>
            <table id="customers" width="70%" cellspacing="0">
                <thead>
                    <th>No</th>
                    <th>Nama Penyiar</th>
                    <th>No HP Penyiar</th>
                    <th>Email Penyiar</th>
                    <th>Total Nilai</th>
                    <th>Nilai Preferensi</th>
                    <th>Peringkat</th>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $no2 = 1;
                    $ambil = $koneksi->query("SELECT * FROM tbl_rank a JOIN tbl_penyiar b ON a.penyiar_id=b.penyiar_id ORDER BY a.nilai_ev DESC");
                    while ($pecah = $ambil->fetch_array()) {
                    ?>
                        <tr>
                            <td align="center"><?= $no++ ?></td>
                            <td><?= $pecah['penyiar_nama'] ?></td>
                            <td><?= $pecah['penyiar_nohp'] ?></td>
                            <td><?= $pecah['penyiar_email'] ?></td>
                            <td align="center"><?= $pecah['nilai_ev'] ?></td>
                            <td align="center"><?= $pecah['nilai_preferensi'] ?></td>
                            <td align="center"><?= $no2++ ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
                <tfoot>
                </tfoot>
            </table>

        </div>
    </div>
    <div class="col-6 " style="text-align: right; float: right;">
        <br><br>
        <table border="0" align="right">
            <tr>
                <td align="center">PT Radio Kiara Indah Berjaya</td>
                <td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</td>
            </tr>
            <tr>
                <td align="center">Padang, <?= TanggalIndo(date("Y-m-d H:i:s")); ?></td>
            </tr>
            <tr>
                <td>&emsp;</td>
            </tr>
            <tr>
                <td>&emsp;</td>
            </tr>
            <tr>
                <td>&emsp;</td>
            </tr>
            <tr>
                <td align="center">FRONT OFFICE</td>
            </tr>
        </table>
    </div>
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <!-- <script src="assets/jquery-easing/jquery.easing.min.js"></script> -->

    <!-- Page level plugin JavaScript-->
    <!-- <script src="assets/vendor/chart.js/Chart.min.js"></script> -->
    <script src="../../assets/vendor/datatables/jquery.dataTables.js"></script>
    <script src="../../assets/vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../assets/js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="../../assets/js/demo/datatables-demo.js"></script>
    <!-- <script src="assets/js/demo/chart-area-demo.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</body>



</html>