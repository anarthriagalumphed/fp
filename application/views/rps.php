<?= $this->session->flashdata('pesan') ?>

<div class="card">
    <div class="card-header">

        <h3 class="card-title">Rencana Pembelajaran Semester</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">


            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div>
            <br>
            <a href="<?= base_url('rps/tambah') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah Rps</a>
            <tr>
                <th>No</th>
                <th>Kode Matkul</th>
                <th>Nama Prodi</th>
                <th>Nama Matkul</th>
                <th>Dosen Penyusun</th>
                <th>Nik Dosen</th>

                <th>Tanggal Disusun</th>
                <th></th>
            </tr>
            <?php $no = 1; ?>
            <!-- ini perlu diganti data => isi -->
            <?php foreach ($rps as $isi) : ?>
                <!-- ini perlu diganti -->
                <tbody>
                    <tr>
                        <td><?= $no++ ?></td>

                        <td><?= $isi->kode_matkul ?></td>
                        <td><?= $isi->nama_prodi ?></td>
                        <td><?= $isi->nama_matkul ?></td>
                        <td><?= $isi->nama_dosen_penyusun ?></td>
                        <td><?= $isi->nik_dosen_penyusun ?></td>
                        <td><?= date('d M Y', strtotime($isi->tgl_dosen)) ?></td>
                        <td>
                            <?php echo anchor('rps/edit/' . $isi->id_rps, '<div class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></div>') ?>
                            <a href="<?= base_url('rps/delete/' . $isi->id_rps) ?>" class="btn btn-danger btn-sm" onclick="return
                            confirm('Apakah anda yakin menghapus data ini?')"><i class="fas fa-trash"></i></a>
                            <?php echo anchor('rps/export/' . $isi->id_rps, '<div class="btn btn-success btn-sm"><i class="fas fa-file"></i></div>') ?>
                        </td>
                    </tr>
                </tbody>
            <?php endforeach; ?>
        </table>
    </div>
</div>























<!-- edit data-- -->
<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Launch demo modal
</button> -->

<!-- Modal -->
<!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div> -->