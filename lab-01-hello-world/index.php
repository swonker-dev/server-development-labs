<?php
$envPath = __DIR__ . '/.env';

if (file_exists($envPath)) {
    $env = parse_ini_file($envPath);
} else {
    $env = [];
}

$studentName = $env['STUDENT_NAME'] ?? 'ФИО не указано';
$currentDate = date("d.m.Y");
$currentTime = date("H:i:s");

$messages = [
    "Hello, World!",
    "PHP генерирует этот текст динамически.",
    "Это первая лабораторная"
];

$randomMessage = $messages[array_rand($messages)];
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello, World! — Лабораторная работа</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            color: #1f2937;
        }

        header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px 40px;
            background: rgba(32, 62, 169, 0.6);;
            border-bottom: 1px solid #e5e7eb;
        }

        .logo {
            font-weight: 700;
            font-size: 20px;
            color: #d5001c;
        }

        .title {
            flex: 1;
            text-align: center;
            font-size: 22px;
            font-weight: 700;
            color: #ffffff;
        }

        main {
            min-height: calc(100vh - 160px);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px;
        }

        .card {
            max-width: 600px;
            width: 100%;
            padding: 32px;
            background: #ffffff;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            text-align: center;
        }

        .card h1 {
            margin-top: 0;
            font-size: 36px;
            color: #111827;
        }

        .message {
            font-size: 22px;
            margin: 24px 0;
            color: #d5001c;
            font-weight: 700;
        }

        .info {
            line-height: 1.7;
            color: #4b5563;
        }

        footer {
            padding: 20px;
            text-align: center;
            background: #111827;
            color: #ffffff;
        }
    </style>
</head>
<body>
    <header>
        <img class="logo" src='/logo.png'></img>
        <div class="title">Домашняя работа: Hello, World!</div>
        <div></div>
    </header>

    <main>
        <section class="card">
            <h1>Hello, World!</h1>

            <div class="message">
                <?= $randomMessage ?>
            </div>

            <div class="info">
                <p>Студент: <?= $studentName ?></p>
                <p>Сегодня: <?= $currentDate ?></p>
                <p>Текущее время сервера: <?= $currentTime ?></p>
            </div>
        </section>
    </main>

    <footer>
        задание для самостоятельной работы
    </footer>
</body>
</html>