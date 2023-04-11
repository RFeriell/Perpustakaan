<?= $this->extend('layout/template'); ?>

<?= $this->section('konten'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form action="" method="post">
                        <div class="mb-3 row">
                            <label for="manga" class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                                <input type="title" name="title" class="form-control" id="title">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endection(); ?>