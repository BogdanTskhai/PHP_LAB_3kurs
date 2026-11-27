<?php
$email = '';
$error = '';
$success = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';

    if (empty($email)) {
        $error = 'Введіть адресу електронної пошти.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Електронна пошта не ВІРНА.';
    } else {
        $success = "Адресу {$email} підтверджено.";
    }
}
?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Перевірка так званого Email</title>
</head>
<body>

<?php if (!empty($success)): ?>
    <p style="color: green;"><?php print htmlspecialchars($success); ?></p>
<?php else: ?>
<?php if (!empty($error)): ?>
    <p style="color: red;"><?php print htmlspecialchars($error); ?></p>
<?php endif; ?>

<form action="" method="POST">
    <label for="email">Електронна пошта:</label>
    <input type="text" id="email" name="email" value="<?php print htmlspecialchars($email); ?>">
    <button type="submit">Надіслати</button>
</form>

<?php endif; ?>

</body>
</html>