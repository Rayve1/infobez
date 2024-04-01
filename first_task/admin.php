<?php
    require_once "controllers/db.php";
    if ($_SESSION['user']['role'] == 2) {
        header("Location: /");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Админка</h1>
    <a href="/">index</a>
    <a href="admin.php">admin</a>
    <a href="controllers/exit.php">exit</a>
</body>
</html>