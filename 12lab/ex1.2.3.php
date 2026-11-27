<?php
$age = '';
$error = '';
$success = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {
    $age = $_POST['age'];

    if (!is_numeric($age)) {
        $error = 'Помилка: введіть число!';}
    else{
        $currentAge = intval($age);
        $nextAge = $currentAge + 1;
        $success = "Наступного року вам буде: {$nextAge}";}}
?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Вік</title>
</head>
<body>
    <?php
    if (!empty($error)) {
        print '<p style="color: red;">' . htmlspecialchars($error) . '</p>';}
    if (!empty($success)) {
        print '<p style="color: green;">' . htmlspecialchars($success) . '</p>';}
    ?>
<form action="" method="POST">
    <label>Вік:</label>
    <input type="text" name="age" value="<?php print htmlspecialchars($age); ?>">
    <button type="submit">OK</button>
</form>
</body>
</html>