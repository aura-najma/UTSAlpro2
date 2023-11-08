<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $email = $_POST['email'];
    $email2 = $_POST['email2'];
    $profesi = $_POST['profesi'];

    // Format data sesuai CSV
    $data = "$id, $f_name, $l_name, $email, $email2, $profesi\n";

    // Path ke file CSV
    $csvFile = 'https://alpro2aura.alwaysdata.net/UTSAlpro2/datapribadi.csv';

    // Menambahkan data ke file CSV
    $result = file_put_contents($csvFile, $data, FILE_APPEND);

