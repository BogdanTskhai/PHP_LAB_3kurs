<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Опції автомобіля</title>
</head>
<body>
    <h2>Виберіть додаткові опції</h2>
    <form action="carOptionsResult.php" method="POST">
        <label>
            <input type="checkbox" name="metallic" value="Металік"> Фарба металік
        </label>
        <br>
        <label>
            <input type="checkbox" name="fog_lights" value="Протитуманні фари"> Протитуманні фари
        </label>
        <br>
        <label>
            <input type="checkbox" name="reversing_camera" value="Камера заднього виду"> Камера заднього виду
        </label>
        <br><br>
        
        <button type="submit">Підтвердити</button>
    </form>
    <br>
    <a href="index.php">Назад</a>
</body>
</html>