<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}

$errors = [];
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (empty($_POST["nama"])) $errors[] = "Nama wajib diisi.";
    if (empty($_POST["posisi"])) $errors[] = "Posisi wajib diisi.";
    if (empty($_POST["nomor"])) $errors[] = "Nomor wajib diisi.";

    if (!$errors) {
        $success = "Kontak berhasil ditambahkan (simulasi).";
    }
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

<h2 class="text-xl font-bold mb-3">Tambah Kontak</h2>

<?php if ($errors): ?>
<ul class="text-red-600 mb-3">
    <?php foreach ($errors as $e): ?>
        <li><?php echo $e; ?></li>
    <?php endforeach; ?>
</ul>
<?php endif; ?>

<?php if (isset($success)): ?>
    <p class="text-green-600 mb-3"><?php echo $success; ?></p>
<?php endif; ?>

<form method="POST">
    <input class="w-full p-2 border rounded mb-3" name="nama" placeholder="Nama Petugas">
    <input class="w-full p-2 border rounded mb-3" name="posisi" placeholder="Rescuer / Medis / Navigator">
    <input class="w-full p-2 border rounded mb-3" name="nomor" placeholder="Nomor Darurat">
    <input class="w-full p-2 border rounded mb-3" name="lokasi" placeholder="Lokasi Tugas">

    <button class="bg-green-600 text-white px-4 py-2 rounded w-full">Tambah</button>
</form>

</div>
</body>
</html>
