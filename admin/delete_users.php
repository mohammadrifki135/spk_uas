<?php

include 'config.php';

$id = $_GET['id'];

$query = $conn->query("DELETE FROM users WHERE id='$id'");

if ($query) {
    echo "<script>
    alert('Data berhasil dihapus');
    window.location.href = 'delete_users.php';
    </script>";
}  else {
    echo "<script>
    alert('Data gagal dihapus');
    window.location.href = 'delete_users.php';
    </script>";
}