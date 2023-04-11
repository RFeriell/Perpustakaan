<?= $this->extend('layout/template'); ?>

<?= $this->section('konten'); ?>

<!-- tabel publisher -->

<div class="row">
    <div class="col-md-8">
        <h2 class="mt-3">table publisher</h2>
        <table class="table table-striped table-hover">
            <thead>
                <tr class="table-dark">
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Contact</th>
                </tr>
            </thead>
            <tbody>
                <?= $i = 1; ?>
                <?php foreach ($publish as $p) { ?>
                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><?= $p['name']; ?></td>
                        <td><?= $p['address']; ?></td>
                        <td><?= $p['contact']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <div class="col-md-4">
        <!-- table category -->
        <h2 class="mt-3">table category</h2>
        <table class="table table-striped table-hover">
            <thead>
                <tr class="table-dark">
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($category as $c) { ?>
                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><?= $c['category']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<!-- tabel book -->
<h2 class="mt-3">table Book</h2>
<table class="table table-striped table-hover">
    <thead>
        <tr class="table-dark">
            <th scope="col">No</th>
            <th scope="col">title</th>
            <th scope="col">author</th>
            <th scope="col">publication_year</th>
            <th scope="col">publish</th>
            <th scope="col">category</th>
            <th scope="col">quantity</th>
        </tr>
    </thead>
    <tbody>
        <?= $i = 1; ?>

        <?php foreach ($book->getResultArray() as $b) { ?>
            <tr>
                <th scope="row"><?= $i++; ?></th>
                <td><?= $b['title']; ?></td>
                <td><?= $b['author']; ?></td>
                <td><?= $b['publication_year']; ?></td>
                <td><?= $b['name']; ?></td>
                <td><?= $b['category']; ?></td>
                <td><?= $b['quantity']; ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<?= $this->endSection(); ?>