<div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Penilaian</li>
    </ol>

    <!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Penilaian
        </div>
        <div class="card-body">
            <a class="btn btn-primary mb-3" style="margin-top: -10px; " href="tambah.html"><i class="fa fa-plus"></i> Tambah Data</a>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr align="center">
                            <th>No</th>
                            <th>Nama Penyiar</th>
                            <th>Absensi</th>
                            <th>Sikap Kerja</th>
                            <th>Kemampuan Komunikasi</th>
                            <th>Pemilihan Lagu</th>
                            <th>Audience / Pendengar</th>
                            <th>Masa Kerja</th>
                            <th width="13%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $penilaian = $db->tampilDataPenilaian();
                        foreach ($penilaian as $no => $pecah) :
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
                                <td>
                                    <a class="btn btn-danger" href="hapus-nilai-<?= $pecah['nilai_id']  ?>.html"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>