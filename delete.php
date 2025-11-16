<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 h-screen flex justify-center items-center">

<div class="bg-white p-6 rounded shadow text-center">
    <h2 class="text-xl font-bold mb-3">Hapus Kontak</h2>
    <p class="mb-4">Ini hanya simulasi. Data tidak benar-benar dihapus.</p>

    <a href="dashboard.php" class="bg-red-600 text-white px-4 py-2 rounded">
        Kembali
    </a>
</div>

</body>
</html>
