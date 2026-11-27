<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Вибір автомобіля</title>
</head>
<body>
    <h2>Опитування про автомобіля</h2>
    <form action="carResult.php" method="POST">
        <p>Чи готові ви заплатити більше за екологічно чистий автомобіль?</p>
        
        <label>
            <input type="radio" name="eco_car" value="yes" required> Так
        </label>
        <br>
        <label>
            <input type="radio" name="eco_car" value="no" required> Ні
        </label>
        <br><br>
        
        <button type="submit">Надіслати</button>
    </form>
    <br>
    <a href="index.php">Назад</a>
</body>
</html>