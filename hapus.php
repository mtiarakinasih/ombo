<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php"); // Redirect ke halaman login jika belum login
    exit();
}

// Buat koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "ombo");

// Periksa koneksi
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $current_user = $_SESSION['username'];

    // Cek apakah peminjaman ini milik pengguna yang login
    $sql_check = "SELECT * FROM bookings 
                  JOIN users ON bookings.userID = users.id 
                  WHERE bookings.id = ? AND users.username = ?";
    $stmt = mysqli_prepare($koneksi, $sql_check);
    mysqli_stmt_bind_param($stmt, 'is', $id, $current_user);
    mysqli_stmt_execute($stmt);
    $result_check = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result_check) > 0) {
        // Pengguna yang login adalah pemilik peminjaman, lanjutkan penghapusan
        $sql_delete = "DELETE FROM bookings WHERE id = ?";
        $stmt_delete = mysqli_prepare($koneksi, $sql_delete);
        mysqli_stmt_bind_param($stmt_delete, 'i', $id);
        mysqli_stmt_execute($stmt_delete);

        if (mysqli_stmt_affected_rows($stmt_delete) > 0) {
            echo "Peminjaman berhasil dibatalkan.";
        } else {
            echo "Terjadi kesalahan saat membatalkan peminjaman.";
        }
    } else {
        echo "Anda tidak berhak membatalkan peminjaman ini.";
    }

    mysqli_stmt_close($stmt);
    mysqli_stmt_close($stmt_delete);
}

mysqli_close($koneksi);
header("Location: daftar.php"); // Redirect kembali ke halaman daftar peminjaman
exit();
?>
