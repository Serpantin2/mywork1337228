// Анимация элементов
document.querySelectorAll('input, select, button').forEach(el => {
    el.addEventListener('focus', () => {
        el.parentElement.classList.add('focused');
    });
    el.addEventListener('blur', () => {
        el.parentElement.classList.remove('focused');
    });
});

// Валидация форм
document.getElementById('registerForm')?.addEventListener('submit', function(e) {
    e.preventDefault();
    // Реализация AJAX-запроса для регистрации
});

document.getElementById('orderForm')?.addEventListener('submit', function(e) {
    e.preventDefault();
    // Реализация создания заказа
});

// Анимация статусов
document.querySelectorAll('.status').forEach(el => {
    el.addEventListener('click', function() {
        this.classList.toggle('animate-pulse');
    });
});

// Загрузка данных для страницы заказов
if (document.location.pathname.includes('orders.php')) {
    fetch('api/get_orders.php')
        .then(response => response.json())
        .then(data => {
            // Заполнение таблицы данными
        });
}

// Фильтрация в админке
document.getElementById('searchInput')?.addEventListener('input', filterOrders);
document.getElementById('statusFilter')?.addEventListener('change', filterOrders);

function filterOrders() {
    // Фильтрация и сортировка заказов
}