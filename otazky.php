<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objednávka - Výsledok</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            background-image: url('img/slides/otazky_bg.jpg');
						background-repeat: no-repeat;
						background-position: center;
						background-size: cover;
						min-height: 100vh;
        }

        .container {
            max-width: 600px;
						background: transparent; 
            margin: 30px auto;
						backdrop-filter: blur(15px);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
						margin-top: 200px;
        }

        h1 {
            text-align: center;
            color: #4caf50;
        }

        p {
            font-size: 18px;
            margin: 10px 0;
        }

        .summary {
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        .btn {
            display: block;
            text-align: center;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: #699c09;
            color: white;
            font-size: 16px;
            text-decoration: none;
            border-radius: 5px;
						border-radius: 10em 0 10em 0;
    				width: 200px;
        }

        .btn:hover {
            background-color: #3dc41c;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Ďakujeme za Vašu otázku, určite Vás budeme kontaktovať!</h1>

    <?php
    // Проверяем, была ли форма отправлена
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Получаем данные из POST
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        echo "<div class='summary'>";
        echo "<p><strong>Vaše meno:</strong> $name</p>";
        echo "<p><strong>Vaš email:</strong> $email</p>";

        if (!empty($message)) {
            echo "<p><strong>Dodatočné želania:</strong> $message</p>";
        } else {
            echo "<p><strong>Dodatočné želania:</strong> Bez poznámok</p>";
        }

        echo "</div>";

        echo "<a href='index.html' class='btn'>Späť na hlavnú</a>";
    } else {
        echo "<p>Zdá sa, že ste nepridali žiadne dáta. Prosím, vráťte sa späť na formulár a odošlite ho.</p>";
        echo "<a href='otazky.html' class='btn'>Späť na formulár</a>";
    }
    ?>

</div>

</body>
</html>
