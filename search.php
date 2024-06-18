<?php
// Ambil input pencarian dari form
$searchQuery = isset($_POST['searchQuery']) ? $_POST['searchQuery'] : '';

if (!empty($searchQuery)) {
    // Jika ada pencarian, lakukan pengarahan berdasarkan hasil pencarian
    $searchQueryLower = strtolower($searchQuery); // Ubah pencarian menjadi huruf kecil untuk keperluan pencocokan
    switch ($searchQueryLower) {
        case 'bima':
        case 'ruang bima': // Juga cocok jika pencarian adalah "ruang bima"
            if (file_exists('bima.php')) {
                header("Location: bima.php"); // Arahkan ke halaman bima.php jika file tersedia
                exit();
            }
            break;
        case 'naksad':
        case 'ruang naksad': // Cocok jika pencarian adalah "ruang naksad"
            if (file_exists('naksad.php')) {
                header("Location: naksad.php"); // Arahkan ke halaman naksad.php jika file tersedia
                exit();
            }
            break;
        case 'kresna':
        case 'ruang kresna': // Cocok jika pencarian adalah "ruang kresna"
            if (file_exists('kresna.php')) {
                header("Location: kresna.php"); // Arahkan ke halaman kresna.php jika file tersedia
                exit();
            }
            break;
        case 'teori':
        case 'ruang teori':
        case 'rutor':
        case 'ruang rutor': // Cocok jika pencarian adalah "ruang teori" atau "ruang rutor"
            if (file_exists('teori.php')) {
                header("Location: teori.php"); // Arahkan ke halaman teori.php jika file tersedia
                exit();
            }
            break;
        case 'arjuna':
        case 'ruang arjuna': // Cocok jika pencarian adalah "ruang arjuna"
            if (file_exists('arjuna.php')) {
                header("Location: arjuna.php"); // Arahkan ke halaman arjuna.php jika file tersedia
                exit();
            }
            break;
        case 'yudhistira':
        case 'ruang yudhistira': // Cocok jika pencarian adalah "ruang yudhistira"
        case 'yudhis':
        case 'yudis':
            if (file_exists('yudhis.php')) {
                header("Location: yudhis.php"); // Arahkan ke halaman yudhistira.php jika file tersedia
                exit();
            }
            break;
    }
}

// Redirect ke halaman tidak ditemukan jika pencarian tidak cocok dengan ruang yang ada atau file tidak tersedia
header("Location: not_found.php");
exit();
?>
