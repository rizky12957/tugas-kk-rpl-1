<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard - nelajar_ci_3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { padding-top: 70px; } /* Memberi ruang agar konten tidak tertutup navbar sticky */
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow">
        <div class="container">
            <a class="navbar-brand" href="#">v_data_user.php</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <span class="nav-link text-light me-3">
                            <?= $this->session->userdata('nama'); ?>
                        </span>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('pengguna') ?>" class="btn btn-danger btn-sm">Keluar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3>Data `users`</h3>
                </div>

                <div class="card">
                    <div class="card-body p-0">
                        <table class="table table-striped mb-0">
                            <thead class="table-primary">
                                <tr>
                                    <th>ID</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($hasil as $row): ?>
                                <tr>
                                    <td><?= $row->id ?></td>
                                    <td><?= $row->username ?></td>
                                    <td><?= $row->password ?></td>
                                    <td><?= $row->email ?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>