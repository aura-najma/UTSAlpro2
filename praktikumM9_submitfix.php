<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $F_name = $_POST['F_name'];
    $L_name = $_POST['L_name'];
// karena nama header di tabel itu F_name sama L_name, jadi pokoknya semua samain kayak gitu//
    $email = $_POST['email'];
    $email2 = $_POST['email2'];
    $profesi = $_POST['profesi'];

    $file = 'datapribadi.csv';
    $data = "$id, $F_name, $L_name, $email, $email2, $profesi\n";
    file_put_contents($file, $data, FILE_APPEND | LOCK_EX);
}
?>
