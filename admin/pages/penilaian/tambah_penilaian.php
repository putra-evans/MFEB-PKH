<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // if (isset($_POST['save'])) {
    $db->tambahDataPenilaian($_POST);
    echo "     <script>alert('Data Berhasil Disimpan')</script>";
    echo "     <script>window.location='penilaian.html'</script>";
}

?>
<style>
    label {
        font-family: sans-serif;
        font-size: 15px;
    }
</style>
<div class="container d-flex justify-content-center">
    <div class="card mb-3  " style="width: 70%; ">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Input Data Penilaian
        </div>
        <div class="card-body pl-5">

            <form action="" method="POST" style="width: 90%;" enctype="multipart/form-data">

                <p style="font-size: 15px; font-family: cursive; font-style: italic;">Hal yang perlu diperhatikan untuk menginputkan nilai penyiar : </p>
                <ul style="font-size: 15px; font-family: cursive; font-style: italic;">
                    <li>Nilai yang di inputkan harus berupa angka</li>
                    <li>Jangan sampai ada form yang kosong</li>
                    <li>Range nilai yang diinputkan yaitu 1-100</li>
                </ul>
                <br>
                <h4 class="text-center" style="font-family: fantasy;">SILAHKAN ISI FORM BERIKUT</h4>
                <br>
                <div class="form-group">
                    <label class="font-weight-bold">Nama Penyiar</label>
                    <select name="id_karyawan" id="id_karyawan" class="form-control" required>
                        <option value="">--Silahkan Pilih--</option>
                        <?php
                        $karyawan = $db->tampilKaryawan();
                        foreach ($karyawan as $no => $pecah) :
                        ?>
                            <option value="<?= $pecah['penyiar_id'] ?>"><?= $pecah['penyiar_nama'] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">Absensi (%)</label>
                    <input type="number" name="absen" class="form-control" required>
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">Sikap Kerja</label>
                    <input type="text" class="form-control" name="sikap" required>
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">Kemampuan Komunikasi</label>
                    <input type="text" class="form-control" name="komunikasi" required>
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">Pemilihan Lagu (%)</label>
                    <input type="number" class="form-control" name="lagu" required>
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">Audience / Pendengar (%)</label>
                    <input type="number" class="form-control" name="pendengar" required>
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">Masa Kerja</label>
                    <select name="masa_kerja" id="masa_kerja" class="form-control" required>
                        <option value="">--Silahkan Pilih--</option>
                        <?php
                        $tahun = $db->tampilMasakerja();
                        foreach ($tahun as $no => $pecah) :
                        ?>
                            <option value="<?= $pecah['masa_kerja'] ?>"><?= $pecah['masa_kerja'] ?> Tahun</option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="text-center">
                    <button name="save" type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>