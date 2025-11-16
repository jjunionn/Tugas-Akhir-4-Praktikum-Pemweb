<?php
session_start();

$error = "";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if ($_POST["username"] === "admin" && $_POST["password"] === "adminkeren123") {
        $_SESSION["login"] = true;
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Username atau password salah!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center bg-[url('gunung.jpg')]">

<div class="bg-white p-6 w-80 rounded shadow">
    <h2 class="text-xl font-bold text-center mb-4">Login Admin</h2>

    <?php if ($error): ?>
        <p class="text-red-600 mb-3"><?php echo $error; ?></p>
    <?php endif; ?>

    <form method="POST">
        <input class="w-full border p-2 rounded mb-3"
               name="username" placeholder="Username">

        <input class="w-full border p-2 rounded mb-3"
               type="password" name="password" placeholder="Password">

        <button class="bg-blue-600 text-white w-full p-2 rounded">Login</button>
    </form>
</div>

</body>
</html>
