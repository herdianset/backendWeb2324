<?php

//mengambil id dari URL
$customer_id = $_GET['id_cus'];
//membuat koneksi
include "koneksi.php";
//membuat query delete
$qry = mysqli_query($conn, "DELETE FROM customers WHERE customer_id = '$customer_id'");
//cek hasil query dan redirect
if($qry){
    echo "<script>alert('delete customer berhasil'); window.location = 'customers.php'</script>";
}else{
    echo "<script>alert('delete customer gagal');</script>";
}