<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Результат входу</title>
</head>
<body>
    <h2>Обробка даних входу</h2>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);

        print "<p>Отримано Name: <strong>" . $username . "</strong></p>";
        print "<p>Отримано Password (Всі ваші права не захищені): <strong>" . $password . "</strong></p>";
    } else {
        print "<p>Заповніть форму на сторінці.</p>";
    }
    ?>
    <br>
    <a href="ex2.php">Назад</a>
</body>
</html>