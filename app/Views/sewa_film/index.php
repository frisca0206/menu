<?= $this->extend('layouts/template'); ?>

<?= $this->Section('content'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><?= $page_title ?></h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Manage Sewa Film</h3>
                            <div class="d-flex justify-content-end mb-1">
                                <a href="<?= url_to('sewa_film-create') ?>" class="btn btn-success mb-2"
                                    id="btn_modal_create">Create</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="sewa_film_table" class="table table-bordered table-hover masterdata-datatable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Peminjam</th>
                                        <th>Nama Film</th>
                                        <th>Tanggal Pinjam</th>
                                        <th>Durasi</th>
                                        <th width="150">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($video as $key => $sewa_film) : ?>
                                    <tr>
                                        <td><?= $key + 1 ?></td>
                                        <td><?= $sewa_film['nama_peminjam'] ?></td>
                                        <td><?= $sewa_film['nama_film'] ?></td>
                                        <td><?= $sewa_film['tanggal_pinjam'] ?></td>
                                        <td><?= $sewa_film['durasi_jam'] ?></td>
                                        <td>
                                            <a href="<?= url_to('sewa_film-edit', $sewa_film['id'])?>"
                                                class="btn btn-primary btn-sm">Edit</a>
                                            <a href="<?= url_to('sewa_film-delete', $sewa_film['id'])?>"
                                                class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

</div>



<?= $this->endSection('content'); ?>