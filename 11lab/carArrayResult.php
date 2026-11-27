<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Результат</title>
</head>
<body>
    <h2>Ваш вибір:</h2>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['extras']) && !empty($_POST['extras'])) {
            echo "<ul>";
            foreach ($_POST['extras'] as $extra) {
                echo "<li>Вибрано: " . htmlspecialchars($extra) . "</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>Без опцій.</p>";
        }
    }
    ?>
    <br>
    <a href="ex6.php">Назад</a>
</body>
</html>