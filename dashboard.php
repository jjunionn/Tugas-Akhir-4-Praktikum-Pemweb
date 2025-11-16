<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}

$contacts = [
    ["nama" => "Andhika Junion", "posisi" => "Rescuer", "nomor" => "08123456789", "lokasi" => "Pos Rinjani"],
    ["nama" => "Tony Tony Chopper", "posisi" => "Tim Medis", "nomor" => "08567891234", "lokasi" => "Basecamp Semeru"],
    ["nama" => "Nami", "posisi" => "Navigator", "nomor" => "08781234567", "lokasi" => "Pos Sindoro"],
];
?>

<!DOCTYPE html>
<html>
<head>
<script src="https://cdn.tailwindcss.com"></script>
</head>

<!-- Background Gambar Gunung -->

<body class="min-h-screen bg-cover bg-center bg-fixed bg-[url('gunung.jpg')]">
<!-- Overlay gelap agar teks lebih jelas -->
<div class="min-h-screen bg-black/50 p-6">

    <div class="flex justify-between mb-4 text-white">
        <h1 class="text-2xl font-bold">Manajemen Kontak Tim Evakuasi Gunung</h1>
        <a href="logout.php" class="text-red-300 hover:text-red-500">Logout</a>
    </div>

    <a href="add.php" class="bg-green-600 text-white px-4 py-2 rounded shadow">
        Tambah Kontak
    </a>

    <div class="bg-white mt-4 p-4 rounded shadow">
        <table class="w-full">
            <tr class="border-b font-semibold">
                <td>Nama</td>
                <td>Posisi</td>
                <td>Nomor</td>
                <td>Lokasi</td>
                <td>Aksi</td>
            </tr>

            <?php foreach ($contacts as $id => $c): ?>
            <tr class="border-b">
                <td><?php echo $c["nama"]; ?></td>
                <td><?php echo $c["posisi"]; ?></td>
                <td><?php echo $c["nomor"]; ?></td>
                <td><?php echo $c["lokasi"]; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $id; ?>" class="text-blue-600">Edit</a> |
                    <a href="delete.php?id=<?php echo $id; ?>" class="text-red-600">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>

</div>

</body>
</html>
