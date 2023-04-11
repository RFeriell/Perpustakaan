<?= $this->extend('layout/template'); ?>

<?= $this->section('konten'); ?>
<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <form action="<?= base_url('add_data_book'); ?>" method="POST">
                            <div class="mb-3 row">
                                <label for="title" class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" name="title" class="form-control" id="title" placeholder="name book..">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="author" class="col-sm-2 col-form-label">Author</label>
                                <div class="col-sm-10">
                                    <input type="text" name="author" class="form-control" id="author" placeholder="name book..">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="publication_year" class="col-sm-2 col-form-label">Publication Year</label>
                                <div class="col-sm-10">
                                    <input type="text" name="publication_year" class="form-control" id="publication_year" placeholder="name book..">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="publsiher" class="col-sm-2 col-form-label">Publisher</label>
                                <div class="col-sm-10">
                                    <select name="id_publisher" id="publisher">
                                        <?php foreach ($book->getResultArray() as $b) { ?>
                                            <option value="<?= $b['id_publisher']; ?>"><?= $b['name']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="category" class="col-sm-2 col-form-label">category</label>
                                <div class="col-sm-10">
                                    <select name="id_category" id="category">
                                        <?php foreach ($book->getResultArray() as $b) { ?>
                                            <option value="<?= $b['id_publisher']; ?>"><?= $b['category']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="quantity" class="col-sm-2 col-form-label">Quantity</label>
                                <div class="col-sm-10">
                                    <input type="text" name="quantity" class="form-control" id="quantity" placeholder="name book..">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?= $this->endSection(); ?>