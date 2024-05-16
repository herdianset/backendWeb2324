<?php

//menerima data dengan method POST

$customer_id = $_POST['cus_id'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address = $_POST['address'];

//1. membuat koneksi ke database
include "koneksi.php";

//2. membuat query
$qry = "UPDATE customers SET name='$name',
        phone = '$phone',
        email = '$email',
        address = '$address'
        WHERE customer_id = '$customer_id'";

//3. eksekusi query
$exec = mysqli_query($conn, $qry);
if($exec){
    echo "<script>alert('update customer berhasil'); window.location = 'customers.php'</script>";
}else{
    echo "<script>alert('update customer gagal');</script>";
}