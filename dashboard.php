<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Arsip Surat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include 'includes/navbar.php'; ?>
    
    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <h2>Selamat Datang, <?php echo htmlspecialchars($_SESSION['username']); ?></h2>
                <div class="row mt-4">
                    <div class="col-md-3 mb-4">
                        <div class="card text-white bg-primary">
                            <div class="card-body">
                                <h5 class="card-title">Surat Masuk</h5>
                                <p class="card-text">Kelola surat masuk</p>
                                <a href="surat_masuk.php" class="btn btn-light">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="card text-white bg-success">
                            <div class="card-body">
                                <h5 class="card-title">Surat Keluar</h5>
                                <p class="card-text">Kelola surat keluar</p>
                                <a href="surat_keluar.php" class="btn btn-light">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                    <?php if ($_SESSION['user_role'] === 'admin'): ?>
                    <div class="col-md-3 mb-4">
                        <div class="card text-white bg-warning">
                            <div class="card-body">
                                <h5 class="card-title">Backup & Restore</h5>
                                <p class="card-text">Kelola data sistem</p>
                                <a href="backup_restore.php" class="btn btn-light">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="card text-white bg-info">
                            <div class="card-body">
                                <h5 class="card-title">Manajemen Akun</h5>
                                <p class="card-text">Kelola pengguna</p>
                                <a href="manage_users.php" class="btn btn-light">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>