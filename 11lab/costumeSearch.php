<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Результат пошуку костюма</title>
</head>
<body>
    <h2>Результати пошуку</h2>
    <?php
    if (isset($_GET['hero'])) {
        var_dump(htmlspecialchars($_GET['hero']));
        $hero = htmlspecialchars($_GET['hero']);
        print "<p>Ви шукаєте костюм супергероя: <strong>" . $hero . "</strong></p>";
    } else {
        print "<p>Параметр героя не передано.</p>";
    }
    ?>
    <br>
    <a href="ex1.php">Назад</a>
</body>
</html>