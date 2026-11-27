<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Рекомендація щодо автомобіля</title>
</head>
<body>
    <h2>Результат</h2>
    <?php
    if (isset($_POST['eco_car'])) {
        $answer = $_POST['eco_car'];

        if ($answer === 'yes') {
            print "<p>Так як ви готові доплатити за екологічність, ми рекомендуємо вам <strong>електромобіль</strong>.</p>";
        } elseif ($answer === 'no') {
            print "<p>Тоді найкращим вибором для вас буде звичайний <strong>автомобіль на бензині</strong>.</p>";
        }
    } else {
        print "<p>Будь ласка, зробіть свій вибір у формі.</p>";
    }
    ?>
    <br>
    <a href="ex4.php">Назад</a>
</body>
</html>