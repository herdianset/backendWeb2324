<?php
include "fungsi.php";
$data = [
    "name" => $_POST['name'],
    "phone" => $_POST['phone'],
    "email" => $_POST['email'],
    "address" => $_POST['address']
];
$insert = insertCustomers($data);
if ($insert) {
    echo "Data berhasil di simpan";
} else {
    echo "Data gagal di simpan";
}
