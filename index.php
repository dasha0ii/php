<!DOCTYPE html>
<html>
<head>
    <title>Главная</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: linear-gradient(to bottom, red, black );
            font-family: Arial, sans-serif;
            color: black;
        }

        .container {
            text-align: left;
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
            padding: 10px;
            border: 1px solid transparent; /* Прозрачная рамка */
            border-color: rgba(0, 0, 0, 0); /* Прозрачный цвет рамки */
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
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1 class="title">Главная</h1>
            <div class="navigation">
                <a class="nav-link" href="contacts.php">Перейти к контактам</a>
                <a class="nav-link" href="catalog.php">Каталог</a>
            </div>
        </div>
        <div class="image-container">
            <?php
                // Массив с данными о картинках (замените на свои данные)
                $images = array(
                    array("image1.jpg", "Название картинки 1"),
                    array("image2.jpg", "Название картинки 2"),
                    array("image3.jpg", "Название картинки 3"),
                    // Добавьте другие картинки и названия по аналогии
                );

                // Вывод карточек картинок
                foreach ($images as $image) {
                    echo '<div class="image-card">';
                    echo '<a class="image-link" href="#">';
                    echo '<div class="image">';
                    echo '<img src="images/' . $image[0] . '" alt="' . $image[1] . '">';
                    echo '<div class="image-text">' . $image[1] . '</div>';
                    echo '</div>';
                    echo '</a>';
                    echo '</div>';
                }
            ?>
        </div>
    </div>
</body>
</html>
