<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $F_name = $_POST['F_name'];
    $L_name = $_POST['L_name'];
    $email = $_POST['email'];
    $email2 = $_POST['email2'];
    $profesi = $_POST['profesi'];

    $file = 'datapribadi.csv';
    // Format data sesuai CSV
    $data = "$id, $f_name, $l_name, $email, $email2, $profesi\n";

    // Menambahkan data ke file CSV
    file_put_contents($file, $data, FILE_APPEND | LOCK_EX);

    echo "Data berhasil ditambahkan ke file CSV.";
} else {
    echo "Akses ke halaman ini tidak diizinkan.";
}
?>
