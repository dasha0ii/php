<!DOCTYPE html>
<html>
<head>
    <title>Контакты</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: linear-gradient(to bottom, red, black );
            font-family: Arial, sans-serif;
            color: black;
        }


        .container {
            text-align: center;
            padding: 20px;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .title {
            font-size: 24px;
            text-transform: uppercase;
            letter-spacing: 3px;
            margin: 0;
            text-shadow: 4px 4px 6px rgba(0, 0, 0, 0.5);
        }

        .navigation {
            display: flex;
            gap: 20px;
            align-items: center;
        }

        .nav-link {
            color: white;
            text-decoration: none;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        .image-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            flex-grow: 1;
        }

        /* Общие стили для карточек картинок */
        .image-card {
            position: relative;
            margin: 10px;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .image {
            position: relative;
            width: 200px;
            height: 200px;
            overflow: hidden;
            border: 1px solid #ccc;
            transition: transform 0.3s;
        }

        .image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .image:hover {
            transform: scale(1.2);
        }

        .image-text {
            position: absolute;
            bottom: 0;
            right: 0;
            padding: 5px 10px;
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            font-weight: bold;
            border-top-left-radius: 5px;
        }

        .image-link {
            text-decoration: none;
            color: inherit;
        }

        .contact-details {
            margin-top: 20px;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        .contact-detail {
            margin: 10px;
        }

        .contact-label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1 class="title">Контакты</h1>
            <div class="navigation">
                <a class="nav-link" href="index.php">Главная</a>
                <a class="nav-link" href="catalog.php">Каталог</a>
            </div>
        </div>
        <div class="contact-details">
            <div class="contact-detail">
                <span class="contact-label">Telegram:</span> <a class="nav-link" href="https://t.me/rtrtrt_09" target="_blank">t.me/rtrtrt_09</a>
            </div>
            <div class="contact-detail">
                <span class="contact-label">VK:</span> <a class="nav-link" href="https://vk.com/*****" target="_blank">vk.com/*****</a>
            </div>
            <div class="contact-detail">
                <span class="contact-label">Номер телефона:</span> +79123456789
            </div>
        </div>
    </div>
</body>
</html>