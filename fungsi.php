<?php

include "koneksi.php";

function getData($table){
    global $conn;
    $qry = "SELECT * FROM $table";
    $exec = mysqli_query($conn, $qry);
    while($data = mysqli_fetch_assoc($exec)){
        $datas[] = $data;
    }
    return $datas;
}

function insertCustomers($data){
    global $conn;
    $qry = mysqli_query($conn, "INSERT INTO customers (name, phone, email, address) Values (
        '".$data['name']."',
        '".$data['phone']."',
        '".$data['email']."',
        '".$data['address']."'
    )");
    return $qry;
}

function getWhere($table, $where){
    global $conn;
    $qry = "SELECT * FROM $table WHERE $where";
    $exec = mysqli_query($conn, $qry);
    return mysqli_fetch_assoc($exec);
}
