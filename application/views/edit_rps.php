<div>

    <selection class="content">
        <?php $rps = "" ?>
        <?php foreach ($model as $mdl) { ?>
            <form action="<?= base_url('rps/ubah/' . $mdl->id_rps) ?>" method="post">
                <div class="form-group">
                    <label>Nama Prodi</label>
                    <input type="text" name="nama_prodi" placeholder="masukkan nama prodi" class="form-control" value="<?= $mdl->nama_prodi ?>">
                    <?= form_error('nama_prodi', '<div class="text-small text-danger">', '</div>'); ?>
                    <label>Nama Matkul</label>
                    <input type="text" name="nama_matkul" placeholder="masukkan nama matkul" class="form-control" value="<?= $mdl->nama_matkul ?>">
                    <?= form_error('nama_matkul', '<div class="text-small text-danger">', '</div>'); ?>
                    <label>Kode Mata Kuliah</label>
                    <input type="text" name="kode_matkul" placeholder="masukkan Kode Mata Kuliah" class="form-control" value="<?= $mdl->kode_matkul ?>">
                    <?= form_error('kode_matkul', '<div class="text-small text-danger">', '</div>'); ?>
                    <label>Dosen Peyusun</label>
                    <input type="text" name="nama_dosen_penyusun" placeholder="masukkan dosen penyusun" class="form-control" value="<?= $mdl->nama_dosen_penyusun ?>">
                    <?= form_error('nama_dosen_penyusun', '<div class="text-small text-danger">', '</div>'); ?>
                    <label>NIK</label>
                    <input type="text" name="nik_dosen_penyusun" placeholder="masukkan NIK dosen" class="form-control" value="<?= $mdl->nik_dosen_penyusun ?>">
                    <?= form_error('nik_dosen_penyusun"', '<div class="text-small text-danger">', '</div>'); ?>
                    <label>Tanggal Dosen</label>
                    <input type="date" name="tgl_dosen" placeholder="masukkan nama prodi" class="form-control" value="<?= $mdl->tgl_dosen ?>">
                    <?= form_error('tgl_dosen', '<div class="text-small text-danger">', '</div>'); ?>
                    <label>Tanggal Berlaku</label>
                    <input type="date" name="tgl_berlaku" placeholder="masukkan nama prodi" class="form-control" value="<?= $mdl->tgl_berlaku ?>">
                    <?= form_error('tgl_berlaku', '<div class="text-small text-danger">', '</div>'); ?>
                    <label>Semester</label>
                    <input type="text" name="semester" placeholder="masukkan semester" class="form-control" value="<?= $mdl->semester ?>">
                    <?= form_error('semester', '<div class="text-small text-danger">', '</div>'); ?>
                    <label>Bobot SKS</label>
                    <input type="text" name="bobot_sks" placeholder="masukkan bobot sks" class="form-control" value="<?= $mdl->bobot_sks ?>">
                    <?= form_error('bobot_sks', '<div class="text-small text-danger">', '</div>'); ?>
                    <label>Detail Prosentasi Penilaian</label>
                    <input type="text" name="detail_penilaian" placeholder="masukkan Detail Prosentasi Penilaian" class="form-control" value="<?= $mdl->detail_penilaian ?>">
                    <?= form_error('detail_penilaian', '<div class="text-small text-danger">', '</div>'); ?>
                    <label>Gambaran Umum</label>
                    <input type="text" name="gambaran_umum" cols="20" rows="5" placeholder="masukkan gambaran umum" class="form-control" value="<?= $mdl->gambaran_umum ?>">
                    <?= form_error('gambaran_umum', '<div class="text-small text-danger">', '</div>'); ?>
                    <label>Capaian Pembelajaran</label>
                    <input type="text" name="capaian_pembelajaran" cols="20" rows="5" placeholder="masukkan capaian pembelajaran" class="form-control" value="<?= $mdl->capaian_pembelajaran ?>">
                    <?= form_error('capaian_pembelajaran', '<div class="text-small text-danger">', '</div>'); ?>
                    <label>Prasyarat dan Pengetahuan Awal (Prior Knowledge)</label>
                    <input type="text" name="prasyarat_dan_pengetahuan_awal" cols="20" rows="5" placeholder="prasyarat dan pengetahuan awal" class="form-control" value="<?= $mdl->prasyarat_dan_pengetahuan_awal ?>">
                    <label>kemampuan akhir yang diharapkan</label>
                    <input type="text" name="kemampuan_akhir_yang_diharapkan" cols="20" rows="5" placeholder="kemampuan akhir yang diharapkan" class="form-control" value="<?= $mdl->kemampuan_akhir_yang_diharapkan ?>">
                    <?= form_error('kemampuan_akhir_yang_diharapkan', '<div class="text-small text-danger">', '</div>'); ?>
                    <label>indikator</label>
                    <input type="text" name="indikator" cols="20" rows="5" placeholder="indikator" class="form-control" value="<?= $mdl->indikator ?>">
                    <?= form_error('indikator', '<div class="text-small text-danger">', '</div>'); ?>
                    <label>bahan kajian</label>
                    <input type="text" name="bahan_kajian" cols="20" rows="5" placeholder="bahan kajian" class="form-control" value="<?= $mdl->bahan_kajian ?>">
                    <?= form_error('bahan_kajian', '<div class="text-small text-danger">', '</div>'); ?>
                    <label>metode pembelajaran</label>
                    <input type="text" name="metode_pembelajaran" cols="20" rows="5" placeholder="metode pembelajaran" class="form-control" value="<?= $mdl->metode_pembelajaran ?>">
                    <?= form_error('metode_pembelajaran', '<div class="text-small text-danger">', '</div>'); ?>
                    <label>metode penilaian</label>
                    <input type="text" name="metode_penilaian" cols="20" rows="5" placeholder="metode penilaian" class="form-control" value="<?= $mdl->metode_penilaian ?>">
                    <?= form_error('metode_penilaian', '<div class="text-small text-danger">', '</div>'); ?>
                    <label>bahan ajar</label>
                    <input type="text" name="bahan_ajar" cols="20" rows="5" placeholder="bahan ajar" class="form-control" value="<?= $mdl->bahan_ajar ?>">
                    <?= form_error('bahan_ajar', '<div class="text-small text-danger">', '</div>'); ?>
                    <label>tugas aktifitas</label>
                    <input type="text" name="tugas_aktivitas" cols="20" rows="5" placeholder="tugas aktifitas" class="form-control" value="<?= $mdl->tugas_aktivitas ?>">
                    <?= form_error('tugas_aktivitas', '<div class="text-small text-danger">', '</div>'); ?>
                    <label>kemampuan akhir yang diharapkan atau evaluasi</label>
                    <input type="text" name="kemampuan_akhir_yang_diharapkan_atau_evaluasi" cols="20" rows="5" placeholder="kemampuan akhir yang diharapkan atau evaluasi" class="form-control" value="<?= $mdl->kemampuan_akhir_yang_diharapkan_atau_evaluasi ?>">
                    <?= form_error('kemampuan_akhir_yang_diharapkan_atau_evaluasi', '<div class="text-small text-danger">', '</div>'); ?>
                    <label>waktu</label>
                    <input type="text" name="waktu" cols="20" rows="5" placeholder="waktu" class="form-control" value="<?= $mdl->waktu ?>">
                    <?= form_error('waktu', '<div class="text-small text-danger">', '</div>'); ?>
                    <label>bobot</label>
                    <input type="text" name="bobot" cols="20" rows="5" placeholder="bobot" class="form-control" value="<?= $mdl->bobot ?>">
                    <?= form_error('bobot', '<div class="text-small text-danger">', '</div>'); ?>
                    <label>kriteria penilaian</label>
                    <input type="text" name="kriteria_penilaian" cols="20" rows="5" placeholder="kriteria penilaian" class="form-control" value="<?= $mdl->kriteria_penilaian ?>">
                    <?= form_error('kriteria_penilaian', '<div class="text-small text-danger">', '</div>'); ?>
                    <label>indikator penilaian</label>
                    <input type="text" name="indikator_penilaian" cols="20" rows="5" placeholder="indikator penilaian" class="form-control" value="<?= $mdl->indikator_penilaian ?>">
                    <?= form_error('indikator_penilaian', '<div class="text-small text-danger">', '</div>'); ?>
                    <label>referensi</label>
                    <input type="text" name="referensi" cols="20" rows="5" placeholder="referensi" class="form-control" value="<?= $mdl->referensi ?>">
                    <?= form_error('referensi', '<div class="text-small text-danger">', '</div>'); ?>
                    <label>minggu atau pertemuan</label>
                    <input type="text" name="minggu_atau_pertemuan" cols="20" rows="5" placeholder="minggu atau pertemuan" class="form-control" value="<?= $mdl->minggu_atau_pertemuan ?>">
                    <?= form_error('minggu_atau_pertemuan', '<div class="text-small text-danger">', '</div>'); ?>
                    <label>kemampuan akhir yang diharapkan </label>
                    <input type="text" name="kemampuan_akhir_yang_diharapkan_2" cols="20" rows="5" placeholder="kemampuan akhir yang diharapkan 2" class="form-control" value="<?= $mdl->kemampuan_akhir_yang_diharapkan_2 ?>">
                    <?= form_error('kemampuan_akhir_yang_diharapkan_2', '<div class="text-small text-danger">', '</div>'); ?>
                    <label>indikator</label>
                    <input type="text" name="indikator_2" cols="20" rows="5" placeholder="indikator 2" class="form-control" value="<?= $mdl->indikator_2 ?>">
                    <?= form_error('indikator_2', '<div class="text-small text-danger">', '</div>'); ?>
                    <label>topik dan subtopik</label>
                    <input type="text" name="topik_dan_subtopik" cols="20" rows="5" placeholder="topik dan subtopik" class="form-control" value="<?= $mdl->topik_dan_subtopik ?>">
                    <?= form_error('topik_dan_subtopik', '<div class="text-small text-danger">', '</div>'); ?>
                    <label>aktifitas dan strategi</label>
                    <input type="text" name="aktifitas_dan_strategi_pembelajaran" cols="20" rows="5" placeholder="aktifitas dan strategi" class="form-control" value="<?= $mdl->aktifitas_dan_strategi_pembelajaran ?>">
                    <?= form_error('aktifitas_dan_strategi_pembelajaran', '<div class="text-small text-danger">', '</div>'); ?>
                </div>

                <!-- sini tambah -->

                <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"> Save Change</i> </button>
                <!-- <button type="reset" class="btn btn-danger btn-sm"><i class="fa fa-arrow-left""> Reset</i> </button> -->
            </form>
        <?php } ?>
    </selection>


</div>