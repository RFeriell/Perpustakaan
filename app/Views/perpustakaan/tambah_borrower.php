<?= $this->extend('layout/template'); ?>

<?= $this->section('konten'); ?>
<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">
    <h2>Book borrowing</h2>
    <form action="/send" method="post">
        <div class="card">
            <div class="card-body">
                <div class="mb-3 row">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" placeholder="name name.." required id="name">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="birthdate" class="col-sm-2 col-form-label">birthdate</label>
                    <div class="col-sm-10">
                        <input type="date" name="birthdate" class="form-control" placeholder="name birthdate.." required id="birthdate">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="address" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10">
                        <input type="text" name="address" class="form-control" placeholder="name address.." required id="address">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                    <div class="col-sm-10">
                        <div class="btn btn-primary">
                            <input type="radio" id="laki_laki" name="gender" value="L" />
                            <label for="laki_laki">Laki-laki</label>
                        </div>
                        <div class="btn btn-primary">
                            <input type="radio" id="perempuan" name="gender" value="P" />
                            <label for="perempuan">Perempuan</label>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="contact" class="col-sm-2 col-form-label">Contact</label>
                    <div class="col-sm-10">
                        <input type="text" name="contact" class="form-control" placeholder="name contact.." required id="contact">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" name="email" class="form-control" placeholder="name email.." required id="email">
                    </div>
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary">
                        Send
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send-fill" viewBox="0 0 16 16">
                            <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </form>
</main>
<?= $this->endSection(); ?>