<?php 
include 'db.php';
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новый заказ</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Новый заказ</h1>
            <a href="orders.php" class="btn-back">← Назад</a>
        </header>
        
        <div class="card">
            <form id="orderForm">
                <div class="input-group">
                    <label>Товар</label>
                    <select name="product_id" required>
                        <option value="">Выберите товар</option>
                        <!-- Данные загружаются через AJAX -->
                    </select>
                </div>
                <div class="input-group">
                    <label>Количество</label>
                    <input type="number" name="quantity" min="1" required>
                </div>
                <div class="input-group">
                    <label>Адрес доставки</label>
                    <textarea name="delivery_address" required></textarea>
                </div>
                <button type="submit" class="btn-primary">Оформить заказ</button>
            </form>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>