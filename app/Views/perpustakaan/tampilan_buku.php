<?= $this->extend('layout/template'); ?>

<?= $this->section('konten'); ?>
<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Library Book</h1>
                <!-- menampilkan data buku pada tabel book -->
                <?php foreach ($book->getResultArray() as $b) { ?>
                    <h2 class="mt-5">Book <?= $b['title']; ?></h2>
                    <div class="card bg-light">
                        <div class="card-body">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <p class="lead d-inline-block">Title</p>
                                        </td>
                                        <td>
                                            <p class="lead d-inline-block">: <?= $b['title']; ?></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="lead d-inline-block">Author</p>
                                        </td>
                                        <td>
                                            <p class="lead d-inline-block">: <?= $b['author']; ?></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="lead d-inline-block">Publication year</p>
                                        </td>
                                        <td>
                                            <p class="lead d-inline-block">: <?= $b['publication_year']; ?></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="lead d-inline-block">Publisher</p>
                                        </td>
                                        <td>
                                            <p class="lead d-inline-block">: <?= $b['name']; ?></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="lead d-inline-block">Category </p>
                                        </td>
                                        <td>
                                            <p class="lead d-inline-block">: <?= $b['category']; ?></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="lead d-inline-block">Quantity</p>
                                        </td>
                                        <td>
                                            <p class="lead d-inline-block">: <?= $b['quantity']; ?></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <a href="/tambah_borrower" class="btn text-white btn-warning mr-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark" viewBox="0 0 16 16">
                                                    <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z" />
                                                </svg>
                                                Borrow Book
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
</main>

<?= $this->endSection(); ?>