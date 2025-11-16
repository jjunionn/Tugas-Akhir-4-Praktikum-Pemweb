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

<body class="min-h-screen bg-cover bg-center bg-fixed bg-[url('gunung.jpg')]">

<a href="dashboard.php" class="text-blue-600">&larr; Kembali</a>

<div class="bg-white w-96 p-6 mt-4 rounded shadow">
<h2 class="text-xl mb-3 font-bold">Edit Kontak</h2>

<p class="mb-4 text-gray-600">Ini hanya tampilan simulasi. Tidak ada perubahan data.</p>

<form>
    <input class="w-full p-2 mb-3 border rounded" value="Nama Petugas">
    <input class="w-full p-2 mb-3 border rounded" value="Rescuer">
    <input class="w-full p-2 mb-3 border rounded" value="08123456789">
    <input class="w-full p-2 mb-3 border rounded" value="Pos Gunung">

    <button class="bg-blue-600 text-white px-4 py-2 rounded w-full">
        Simpan (Mock)
    </button>
</form>
</div>

</body>
</html>
