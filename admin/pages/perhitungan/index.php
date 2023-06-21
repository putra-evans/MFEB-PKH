<div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Perhitungan</li>
    </ol>

    <!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Data Kriteria Bobot
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="" width="100%" cellspacing="0">
                    <thead>
                        <tr class="bg-primary" align="center">
                            <th width="10%">No</th>
                            <th>Nama Kriteria</th>
                            <th>Nilai Bobot</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $kriteria = $db->tampilDataKriteria();
                        foreach ($kriteria as $no => $pecah) :
                            @$jumlah += $pecah['kriteria_bobot'];
                        ?>
                            <tr>
                                <td><?= ++$no ?></td>
                                <td><?= $pecah['kriteria_nama'] ?></td>
                                <td class="text-center"><?= $pecah['kriteria_bobot'] ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2" align="right"> <b>Jumlah</b> </td>
                            <td class="text-center"> <b><?= @$jumlah ?></b> </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Data Penilaian
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="" width="100%" cellspacing="0">
                    <thead>
                        <tr class="bg-primary" align="center">
                            <th>No</th>
                            <th>Nama Penyiar</th>
                            <th>Absensi</th>
                            <th>Sikap Kerja</th>
                            <th>Kemampuan Komunikasi</th>
                            <th>Pemilihan Lagu</th>
                            <th>Audience / Pendengar</th>
                            <th>Masa Kerja</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $penilaian = $db->tampilDataPenilaian();
                        foreach ($penilaian as $no => $pecah) :
                            // $hadir = $pecah['nor_sikap'];
                            // $penghasilan = $pecah['nor_komunikasi'];
                            // $tanggungan = $pecah['nor_lagu'];

                            // if ($hadir == 4) {
                            //     $kehadiran = "Alpa < 1";
                            // } elseif ($hadir == 3) {
                            //     $kehadiran = "Alpa = 1";
                            // } elseif ($hadir == 2) {
                            //     $kehadiran = "Alpa = 2";
                            // } else {
                            //     $kehadiran = "Alpa > 3";
                            // }

                            // if ($penghasilan == 4) {
                            //     $Portu = "Penghasilan ≤ Rp.1.000.000";
                            // } elseif ($penghasilan == 3) {
                            //     $Portu = "Rp.1.000.000 < Penghasilan ≥ Rp.3.000.000";
                            // } elseif ($penghasilan == 2) {
                            //     $Portu = "Rp.3.000.000 < Penghasilan ≥ Rp.5000.000";
                            // } else {
                            //     $Portu = "Penghasilan > 5.000.000";
                            // }

                            // if ($tanggungan == 4) {
                            //     $JA = "≥ 4 Anak";
                            // } elseif ($tanggungan == 3) {
                            //     $JA = "3 Anak";
                            // } elseif ($tanggungan == 2) {
                            //     $JA = "2 Anak";
                            // } else {
                            //     $JA = "1 Anak";
                            // }
                        ?>
                            <tr align="center">
                                <td><?= ++$no ?></td>
                                <td><?= $pecah['penyiar_nama'] ?></td>
                                <td><?= $pecah['absensi'] ?></td>
                                <td><?= $pecah['sikap'] ?></td>
                                <td><?= $pecah['komunikasi'] ?></td>
                                <td><?= $pecah['lagu'] ?></td>
                                <td><?= $pecah['pendengar'] ?></td>
                                <td><?= $pecah['masa_kerja'] ?> Tahun</td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Data Normalisasi Alternatif
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="" width="100%" cellspacing="0">
                    <thead>
                        <tr class="bg-primary" align="center">
                            <th>No</th>
                            <th>Nama Penyiar</th>
                            <th>Absensi</th>
                            <th>Sikap Kerja</th>
                            <th>Kemampuan Komunikasi</th>
                            <th>Pemilihan Lagu</th>
                            <th>Audience / Pendengar</th>
                            <th>Masa Kerja</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $penilaian = $db->tampilDataNormalisasi();
                        foreach ($penilaian as $no => $pecah) :
                        ?>
                            <tr align="center">
                                <td><?= ++$no ?></td>
                                <td><?= $pecah['penyiar_nama'] ?></td>
                                <td><?= $pecah['nor_absensi'] ?></td>
                                <td><?= $pecah['nor_sikap'] ?></td>
                                <td><?= $pecah['nor_komunikasi'] ?></td>
                                <td><?= $pecah['nor_lagu'] ?></td>
                                <td><?= $pecah['nor_pendengar'] ?></td>
                                <td><?= $pecah['nor_masakerja'] ?> Tahun</td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Data Hasil Perhitungan
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="" width="100%" cellspacing="0">
                    <thead>
                        <tr class="bg-primary" align="center">
                            <th>No</th>
                            <th>Nama Penyiar</th>
                            <th>Absensi</th>
                            <th>Sikap Kerja</th>
                            <th>Kemampuan Komunikasi</th>
                            <th>Pemilihan Lagu</th>
                            <th>Audience / Pendengar</th>
                            <th>Masa Kerja</th>
                            <th>Total Nilai</th>
                            <th>Nilai Preferensi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $dataKriteria = $db->tampilDataKriteria();
                        $penilaian = $db->tampilDataNormalisasi();
                        $totalkriteria = $db->ambiljumlahKriteria();
                        // var_dump($totalkriteria);
                        foreach ($penilaian as $no => $pecah) :
                            foreach ($dataKriteria as $key => $pecah2) {
                                $datak[] = $pecah2;
                            }

                            $juml = ($pecah['nor_absensi']      * $datak[0]['kriteria_bobot']) +
                                ($pecah['nor_sikap']        * $datak[1]['kriteria_bobot']) +
                                ($pecah['nor_komunikasi']   * $datak[2]['kriteria_bobot']) +
                                ($pecah['nor_lagu']         * $datak[3]['kriteria_bobot']) +
                                ($pecah['nor_pendengar']    * $datak[4]['kriteria_bobot']) +                                +
                                ($pecah['nor_masakerja']    * $datak[5]['kriteria_bobot']);

                            $total = $juml / $totalkriteria;
                        ?>
                            <tr>
                                <td><?= ++$no ?></td>
                                <td><?= $pecah['penyiar_nama'] ?></td>
                                <td class="text-center"><?= $pecah['nor_absensi']       * $datak[0]['kriteria_bobot'] ?></td>
                                <td class="text-center"><?= $pecah['nor_sikap']         * $datak[1]['kriteria_bobot'] ?></td>
                                <td class="text-center"><?= $pecah['nor_komunikasi']    * $datak[2]['kriteria_bobot'] ?></td>
                                <td class="text-center"><?= $pecah['nor_lagu']          * $datak[3]['kriteria_bobot'] ?></td>
                                <td class="text-center"><?= $pecah['nor_pendengar']     * $datak[4]['kriteria_bobot'] ?></td>
                                <td class="text-center"><?= $pecah['nor_masakerja']     * $datak[5]['kriteria_bobot'] ?></td>
                                <td class="text-center"><?= $juml ?></td>
                                <td class="text-center"><?= substr($total, 0, 5)  ?></td>
                            </tr>
                            <form action="" method="post">
                                <input type="hidden" name="id_kary[]" value="<?= $pecah['penyiar_id'] ?>">
                                <input type="hidden" name="total[]" value="<?= $juml ?>">
                                <input type="hidden" name="preferensi[]" value="<?= $total ?>">

                            <?php endforeach;
                            ?>


                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <div class="text-center">
        <button class="btn btn-primary mb-2" type="submit" name="simpan">Lihat Rangking</button>
    </div>
    </form>
    <?php
    if (isset($_POST['simpan'])) {
        $id = $_POST['id_kary'];
        $total = $_POST['total'];
        $preferensi = $_POST['preferensi'];
        foreach ($id as $key => $value) {
            $koneksi->query("DELETE FROM tbl_rank WHERE penyiar_id = '$id[$key]'");
            $koneksi->query("INSERT INTO `tbl_rank`(`penyiar_id`, `nilai_preferensi`, `nilai_ev`) VALUES ('$id[$key]','$preferensi[$key]','$total[$key]')");
        } ?>
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>
                Data Ranking
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="" width="100%" cellspacing="0">
                        <thead>
                            <tr class="bg-primary" align="center">
                                <th>No</th>
                                <th>Nama Penyiar</th>
                                <th>Total Nilai</th>
                                <th>Nilai Preferensi</th>
                                <th>Ranking</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $rank = $db->tampilDataRank();
                            $no = 1;
                            foreach ($rank as $no => $pecah) :
                            ?>
                                <tr>
                                    <td><?= ++$no ?></td>
                                    <td><?= $pecah['penyiar_nama'] ?></td>
                                    <td class="text-center"><?= $pecah['nilai_ev'] ?></td>
                                    <td class="text-center"><?= substr($pecah['nilai_preferensi'], 0, 5)  ?></td>
                                    <td class="text-center"><?= $no++ ?></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <?php }
    ?>
</div>