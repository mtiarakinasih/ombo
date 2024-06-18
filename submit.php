<?php
// Mulai sesi
session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    // Redirect ke halaman login jika pengguna belum login
    header("Location: login.php");
    exit();
}

// Periksa apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data form
    $nama_peminjam = $_POST['nama'];
    $ruang = $_POST['ruang'];
    $tanggal = $_POST['tanggal'];
    $waktu_mulai = $_POST['waktu_mulai'];
    $waktu_selesai = $_POST['waktu_selesai'];
    $alasan = $_POST['alasan'];
    $pdf_file_name = $_FILES['pdf_file']['name'];
    $pdf_file_tmp = $_FILES['pdf_file']['tmp_name'];

    // Pindahkan file PDF yang diunggah ke direktori tujuan
    $upload_dir = "uploads/"; // Ubah sesuai dengan direktori tempat Anda ingin menyimpan file
    move_uploaded_file($pdf_file_tmp, $upload_dir . $pdf_file_name);

    // Buat koneksi ke database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ombo";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Periksa koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Query untuk mendapatkan userID berdasarkan username
    $user_query = "SELECT id FROM users WHERE username = '$nama_peminjam'";
    $user_result = $conn->query($user_query);

    if ($user_result->num_rows > 0) {
        $user_row = $user_result->fetch_assoc();
        $userID = $user_row['id'];

        // Query untuk mendapatkan roomID berdasarkan nama ruangan
        $room_query = "SELECT id FROM rooms WHERE name = '$ruang'";
        $room_result = $conn->query($room_query);

        if ($room_result->num_rows > 0) {
            $room_row = $room_result->fetch_assoc();
            $roomID = $room_row['id'];

            // Query untuk menyimpan data ke dalam tabel bookings
            $sql = "INSERT INTO bookings (userID, roomID, start_time, end_time, alasan, file) 
                    VALUES ('$userID', '$roomID', '$tanggal $waktu_mulai', '$tanggal $waktu_selesai', '$alasan', '$pdf_file_name')";

            if ($conn->query($sql) === TRUE) {
                echo  "<script type='text/javascript'>alert('Peminjaman Berhasil'); window.location.href='daftar.php';</script>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }

    // Tutup koneksi
    $conn->close();
}
?>
