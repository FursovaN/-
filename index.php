<?php
require_once 'animals.php';

$animals = [
    new Dog("Шарик", 3, "Золотистый", "Лабрадор"),
    new Cat("Мурка", 2, "Серая"),
    new Bird("Кеша", 1, "Зеленый"),
    new Bird("Пингвин", 5, "Черно-белый", false),
    new Dog("Бобик", 5, "Черный", "Овчарка"),
    new Cat("Барсик", 4, "Рыжий"),
    new Fish("Немо", 1, "Оранжевый", 20)
];
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Виртуальный зоопарк</title>
    <style>
        body { font-family: Arial; background: #f0f8ff; padding: 20px; }
        .container {
            max-width: 800px; margin: 0 auto;
            background: white; padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }
        h1 { text-align: center; color: #2c3e50; }
        .animal-card {
            background: #f9f9f9;
            border-left: 4px solid #3498db;
            padding: 15px; margin: 15px 0;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🦁 Виртуальный зоопарк</h1>
        <p>Всего животных: <strong><?php echo count($animals); ?></strong></p>

        <?php foreach ($animals as $animal): ?>
            <div class="animal-card">
                <?php
                $animal->showInfo();
                $animal->makeSound();
                $animal->eat();
                ?>
            </div>
        <?php endforeach; ?>

        <h2>🎵 Концерт в зоопарке</h2>
        <p>Все животные издают свои звуки:</p>
        <?php foreach ($animals as $animal): ?>
            <?php $animal->makeSound(); ?>
        <?php endforeach; ?>
    </div>
</body>
</html>