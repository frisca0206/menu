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
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="<?= url_to('sewa_buku-update')?>" method="POST">
                                <?= csrf_field() ?>
                                <input type="hidden" name="sewa_buku_id" value="<?= $sewa_buku['id'] ?>">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="nama_peminjam">Nama Peminjam</label>
                                            <input type="text" class="form-control" id="nama_peminjam"
                                                name="nama_peminjam" value="<?= $sewa_buku['nama_peminjam'] ?>"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="nama_buku">Nama Buku</label>
                                            <select id="nama_buku" name="nama_buku" class="form-control">
                                                <option value=""></option>
                                                <?php foreach ($books as $key => $buku) : ?>
                                                <option value="<?= $buku['name']; ?>"<?php if($buku['name'] == $sewa_buku['nama_buku']) echo "selected"; ?>><?= $buku['name']; ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="tanggal_pinjam">Tanggal Pinjam</label>
                                            <input type="date" class="form-control" id="tanggal_pinjam"
                                                name="tanggal_pinjam" value="<?= $sewa_buku['tanggal_pinjam'] ?>"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="durasi_jam">Durasi jam</label>
                                            <input type="number" class="form-control" id="durasi_jam" name="durasi_jam"
                                                value="<?= $sewa_buku['durasi_jam'] ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 text-right">
                                    <a href="<?= url_to('sewa_buku') ?>" type="button"
                                        class="btn btn-secondary">Cancel</a>
                                    <button type="submit" class="btn btn-primary" id="btn_submit">Update Food</button>
                                </div>
                            </form>
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