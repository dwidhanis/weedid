<?php

    include_once("function/koneksi.php");

    $kategori = $_POST['kategori'];
    $status = $_POST['status'];

    echo $kategori;
    echo $status;
    // mysqli_query($koneksi, "INSERT INTO kategori (kategori,status) VALUES ('$kategori','$status')");

    // header("Location: kategori.php");

