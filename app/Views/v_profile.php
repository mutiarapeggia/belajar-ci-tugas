<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<section class="section profile">
    <div class="row">
        <div class="col-xl-4">

            <div class="card">
                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                    <!-- Gambar Profil -->
                    <img src="<?= base_url('assets/img/IMG-0511.jpg') ?>" alt="Profile" class="rounded-circle">
                    <h2><?= $user['username'] ?></h2> <!-- Menampilkan username -->
                    <h3><?= $user['role'] ?></h3> <!-- Menampilkan role -->
                    <div class="social-links mt-2">
                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-xl-8">

            <div class="card">
                <div class="card-body pt-3">
                    <!-- Bordered Tabs -->
                    <ul class="nav nav-tabs nav-tabs-bordered">

                        <li class="nav-item">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                        </li>

                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                        </li>

                    </ul>
                    <div class="tab-content pt-2">

                        <div class="tab-pane fade show active profile-overview" id="profile-overview">
                            <h5 class="card-title">Profile Details</h5>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Username</div>
                                <div class="col-lg-9 col-md-8"><?= $user['username'] ?></div> <!-- Menampilkan username -->
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Role</div>
                                <div class="col-lg-9 col-md-8"><?= $user['role'] ?></div> <!-- Menampilkan role -->
                            </div>

                            <!-- Untuk email dan informasi lain, Anda bisa menambahkan lebih banyak field seperti ini -->
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Email</div>
                                <div class="col-lg-9 col-md-8"><?= isset($user['email']) ? $user['email'] : 'Tidak tersedia' ?></div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">No. HP</div>
                                <div class="col-lg-9 col-md-8"><?= isset($user['no_hp']) ? $user['no_hp'] : 'Tidak tersedia' ?></div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Alamat</div>
                                <div class="col-lg-9 col-md-8"><?= isset($user['alamat']) ? $user['alamat'] : 'Tidak tersedia' ?></div>
                            </div>

                        </div>

                    </div><!-- End Bordered Tabs -->

                </div>
            </div>

        </div>
    </div>
</section>

<?= $this->endSection() ?>