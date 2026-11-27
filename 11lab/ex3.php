<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Ваш вік</title>
</head>
<body>
    <h2>Скільки вам років?(не тцк)</h2>
    <form action="ageResult.php" method="GET">
        <label for="age">Введіть ваш поточний вік:</label>
        <input type="number" id="age" name="age" min="0" max="120" required>
        <button type="submit">Розрахувати</button>
    </form>
    <br>
    <a href="index.php">Назад</a>
</body>
</html>