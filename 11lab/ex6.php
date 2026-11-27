<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Опції автомобіля через масив</title>
</head>
<body>
    <h2>Виберіть опції</h2>
    <form action="carArrayResult.php" method="POST">
        <label>
            <input type="checkbox" name="extras[]" value="Фарба металік"> Фарба металік
        </label>
        <br>
        <label>
            <input type="checkbox" name="extras[]" value="Протитуманні фари"> Протитуманні фари
        </label>
        <br>
        <label>
            <input type="checkbox" name="extras[]" value="Камера заднього виду"> Камера заднього виду
        </label>
        <br><br>
        
        <button type="submit">Підтвердити</button>
    </form>
    <br>
    <a href="index.php">Назад</a>
</body>
</html>