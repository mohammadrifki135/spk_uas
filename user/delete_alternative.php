<?php

include 'config.php';

$id = $_GET['id'];

$query = $conn->query("DELETE FROM alternative WHERE id='$id'");

if (!$query) {
    echo "
    <script>
    alert('Data gagal hapus');
    window.location.href = 'alternative.php';
    </script>
    ";
}  else {
    echo "
    <script>
    alert('Data berhasil dihapus');
    window.location.href = 'alternative.php';
    </script>
    ";
}