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
                            <form action="<?= url_to('film-update')?>" method="POST">
                                <?= csrf_field() ?>
                                <input type="hidden" name="film_id" value="<?= $film['id'] ?>">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="nama_film">Nama Film</label>
                                            <input type="text" class="form-control" id="nama_film" name="nama_film"
                                                placeholder="Enter Film Nama" value="<?= $film['nama_film'] ?>"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="genre">Genre</label>
                                            <select id="genre" name="genre" class="form-control">
                                                <option value=""></option>
                                                 <?php foreach ($genres as $key => $genre) : ?>
                                                    <option value="<?php echo $genre['id']; ?>" <?php if($film['genre_id'] == $genre['id']) echo "selected"; ?>> <?php echo $genre['genre']; ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="deskripsi">Deskripsi</label>
                                            <textarea class="form-control" name="deskripsi" id="deskripsi" cols="30"
                                                rows="3"><?= $film['deskripsi'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 text-right">
                                    <a href="<?= url_to('film') ?>" type="button" class="btn btn-secondary">Cancel</a>
                                    <button type="submit" class="btn btn-primary" id="btn_submit">Update Film</button>
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