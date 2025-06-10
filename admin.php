<?php 
include 'db.php';

// Проверка администратора
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['login'] === 'sklad' && $_POST['password'] === '123qwe') {
        $_SESSION['admin'] = true;
    }
}

if (!isset($_SESSION['admin'])) {
    echo '
    <div class="container">
        <form method="POST" class="form-card">
            <h2>Панель администратора</h2>
            <div class="input-group">
                <label>Логин</label>
                <input type="text" name="login" required>
            </div>
            <div class="input-group">
                <label>Пароль</label>
                <input type="password" name="password" required>
            </div>
            <button type="submit">Войти</button>
        </form>
    </div>';
    exit;
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Панель администратора</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Управление заказами</h1>
            <a href="logout.php" class="btn-logout">Выйти</a>
        </header>
        
        <div class="card">
            <div class="filters">
                <input type="text" id="searchInput" placeholder="Поиск по ФИО или email">
                <select id="statusFilter">
                    <option value="">Все статусы</option>
                    <option value="new">Новые</option>
                    <option value="confirmed">Подтвержденные</option>
                    <option value="cancelled">Отмененные</option>
                </select>
            </div>
            
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>ФИО</th>
                            <th>Email</th>
                            <th>Товар</th>
                            <th>Количество</th>
                            <th>Статус</th>
                            <th>Действия</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Данные загружаются через AJAX -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>