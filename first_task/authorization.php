<?php
    require_once 'controllers/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/controllers/auth.php" method="post">
        <input type="text" name="login">
        <input type="password" name="password">
        <input type="submit" value="login">
    </form>
</body>
</html>