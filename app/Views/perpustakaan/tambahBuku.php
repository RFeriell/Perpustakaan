<?= $this->extend('layout/template'); ?>

<?= $this->section('konten'); ?>
<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">
    <div class="container">
        <div class="row">
            <h1 class="my-3">Add Book</h1>
            <form action="/save" method="post">
                <div class="card bg-light rounded-4">
                    <div class="card-body radius">
                        <div class="mb-3 row">
                            <label for="title" class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                                <input type="text" name="title" class="form-control" placeholder="name book.." id="title">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="author" class="col-sm-2 col-form-label">Author</label>
                            <div class="col-sm-10">
                                <input type="text" name="author" class="form-control" placeholder="name Author.." id="author">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="publication_year" class="col-sm-2 col-form-label">Publication Year</label>
                            <div class="col-sm-10">
                                <input type="number" name="publication_year" class="form-control" placeholder="2014.." id="publication_year">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="id_publisher" class="col-sm-2 col-form-label">Publisher</label>
                            <div class="col-sm-10">
                                <select type="number" name="id_publisher" id="id_publisher">
                                    <?php foreach ($book->getResultArray() as $b) { ?>
                                        <option value="<?= intval($b['id_publisher']); ?>"><?= $b['name']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="id_category" class="col-sm-2 col-form-label">Category</label>
                            <div class="col-sm-10">
                                <select type="number" name="id_category" id="id_category">
                                    <?php foreach ($book->getResultArray() as $b) { ?>
                                        <option value="<?= intval($b['id_category']); ?>"><?= $b['category']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="quantity" class="col-sm-2 col-form-label">quantity</label>
                            <div class="col-sm-10">
                                <input type="number" name="quantity" class="form-control" placeholder="10.." id="quantity">
                            </div>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>

<?= $this->endSection(); ?>