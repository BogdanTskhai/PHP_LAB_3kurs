<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Сторінка входу (Login)</title>
</head>
<body>
    <h2>Вхід у систему</h2>
    <form action="loginCheck.php" method="POST">
        <div>
            <label for="username">Name користувача:</label><br>
            <input type="text" id="username" name="username" required>
        </div>
        <br>
        <div>
            <label for="password">Пароль:</label><br>
            <input type="password" id="password" name="password" required>
        </div>
        <br>
        <button type="submit">Увійти</button>
    </form>
    <br>
    <a href="index.php">Повернутися на головну</a>
</body>
</html>