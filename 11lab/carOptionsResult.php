<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Результат</title>
</head>
<body>
    <h2>Ваші опції:</h2>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $selected = false;
        
        print "<ul>";
        if (isset($_POST['metallic'])) {
            print "<li>Обрано: Фарба металік</li>";
            $selected = true;
        }
        if (isset($_POST['fog_lights'])) {
            print "<li>Обрано: Протитуманні фари</li>";
            $selected = true;
        }
        if (isset($_POST['reversing_camera'])) {
            print "<li>Обрано: Камера заднього виду</li>";
            $selected = true;
        }
        print "</ul>";

        if (!$selected) {
            print "<p>Без опцій.</p>";
        }
    }
    ?>
    <br>
    <a href="ex5.php">Назад</a>
</body>
</html>