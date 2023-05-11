<?= $this->extend('layout/template'); ?>

<?= $this->section('konten'); ?>
<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">
    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">name</th>
                            <th scope="col">Birthdate</th>
                            <th scope="col">Address</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Contact</th>
                            <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 ?>
                        <?php foreach ($borrower->getResultArray() as $br) { ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $br['name']; ?></td>
                                <td><?= $br['birthdate']; ?></td>
                                <td><?= $br['address']; ?></td>
                                <td><?= $br['gender']; ?></td>
                                <td><?= $br['contact']; ?></td>
                                <td><?= $br['email']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
<?= $this->endSection(); ?>