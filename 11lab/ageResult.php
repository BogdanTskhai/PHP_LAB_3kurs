<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Результат</title>
</head>
<body>
    <h2>Результат</h2>
    <?php
    if (isset($_GET['age'])) {
        $currentAge = intval($_GET['age']);
        
        $nextAge = $currentAge + 1;
        $age25 = 25 - $currentAge;
        
        print "<p>На ваш наступний день народження вам виповниться: <strong>" . $nextAge . "</strong> років.</p>";
        print "<p>Бус ТЦК прибуде через: <strong>" . $age25 . "</strong> років.</p>";
    } else {
        print "<p>Будь ласка, введіть вік у формі.</p>";
    }
    ?>
    <br>
    <a href="ex3.php">Назад</a>
</body>
</html>