<?php
include 'DataBase.php'; // Menghubungkan koneksi ke database
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>
    <!-- Menghubungkan Bootstrap CSS via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Kode untuk memberikan warna latar belakang footer */
        footer {
            background-color: #999DA0; /* Warna biru */
            color: white; /* Warna teks putih */
            text-align: center;
            padding: 1rem;
            margin-top: 2rem;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <!-- Heading -->
        <div class="d-flex justify-content-between align-items-center mb-1">
            <h1 class="text-center black p-2">Data Buku</h1>
            <a href="tambah_buku.php" class="btn btn-success">Tambah Buku</a>
        </div>

        <!-- Tabel Responsif -->
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Judul</th>
                        <th>Penulis</th>
                        <th>Penerbit</th>
                        <th>Tahun Terbit</th>
                        <th style="width: 120px;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Query untuk mengambil data dari database
                    $sql = "SELECT * FROM buku";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // Output setiap data buku ke tabel
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                                    <td>" . $row['id'] . "</td>
                                    <td>" . $row['judul'] . "</td>
                                    <td>" . $row['penulis'] . "</td>
                                    <td>" . $row['penerbit'] . "</td>
                                    <td>" . $row['tahun_terbit'] . "</td>
                                    <td>
                                        <a href='edit_buku.php?id=" . $row['id'] . "' class='btn btn-warning btn-sm'>Edit</a>
                                        <a href='hapus_buku.php?id=" . $row['id'] . "' class='btn btn-danger btn-sm' onclick='return confirm(\"Apakah Anda yakin?\")'>Hapus</a>
                                    </td>
                                  </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='6'>Tidak ada data</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!-- Pagination Bootstrap -->
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>

    <!-- Menghubungkan Bootstrap JavaScript via CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

<footer class="fixed-bottom">
Copyright &copy; 2022-2024 - PENTDAN. All right reserved.
    </footer>
</html>
