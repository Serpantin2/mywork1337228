<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form id="loginForm" class="form-card">
            <h2>Авторизация</h2>
            <div class="input-group">
                <label>Логин</label>
                <input type="text" name="login" required>
                <div class="error"></div>
            </div>
            <div class="input-group">
                <label>Пароль</label>
                <input type="password" name="password" required>
                <div class="error"></div>
            </div>
            <button type="submit">Войти</button>
            <p>Нет аккаунта? <a href="register.php">Зарегистрироваться</a></p>
            <p><a href="admin.php">Вход для администратора</a></p>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>