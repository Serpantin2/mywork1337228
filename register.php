<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form id="registerForm" class="form-card">
            <h2>Регистрация</h2>
            <div class="input-group">
                <label>Логин</label>
                <input type="text" name="login" required>
                <div class="error"></div>
            </div>
            <div class="input-group">
                <label>Пароль (мин. 4 символа)</label>
                <input type="password" name="password" minlength="4" required>
                <div class="error"></div>
            </div>
            <div class="input-group">
                <label>ФИО</label>
                <input type="text" name="full_name" pattern="[А-Яа-яЁё\s]+" required>
                <div class="error"></div>
            </div>
            <div class="input-group">
                <label>Телефон</label>
                <input type="tel" name="phone" placeholder="+7(XXX)-XXX-XX-XX" pattern="\+7\(\d{3}\)-\d{3}-\d{2}-\d{2}" required>
                <div class="error"></div>
            </div>
            <div class="input-group">
                <label>Email</label>
                <input type="email" name="email" required>
                <div class="error"></div>
            </div>
            <button type="submit">Зарегистрироваться</button>
            <p>Уже есть аккаунт? <a href="login.php">Войти</a></p>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>