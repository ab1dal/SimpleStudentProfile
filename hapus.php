<?php
include("./config.php");

if (isset($_POST['deletedata'])) {
    $id = $_POST['delete_id'];
    $sql = "DELETE FROM mahasiswa WHERE id = '$id'";
    $query = mysqli_query($db, $sql);

    if ($query) {
        header('Location: ./index.php?hapus=sukses');
    } else
        die('Location: ./index.php?hapus=gagal');
} else
    die("akses dilarang...");
