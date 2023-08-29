<!DOCTYPE html>
<html>
<head>
    <title>Каталог</title>
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


        .image-card {
            position: relative;
            margin: 10px;
            padding: 10px;
            border: 1px solid transparent; /* Прозрачная рамка */
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .image {
            position: relative;
            width: 200px;
            height: 200px;
            overflow: hidden;
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

        .image-link {
            text-decoration: none;
            color: inherit;
        }

        /* Стили для увеличенного изображения */
        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            z-index: 999;
            justify-content: center;
            align-items: center;
        }

        .overlay.active {
            display: flex;
        }

        .overlay-image {
            max-width: 80%;
            max-height: 80%;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.9);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1 class="title">Каталог</h1>
            <div class="navigation">
                <a class="nav-link" href="index.php">Главная</a>
                <a class="nav-link" href="contacts.php">Контакты</a>
            </div>
        </div>
        <div class="image-container">
<body>

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
                    echo '</div>';
                    echo '</a>';
                    echo '</div>';
                }
            ?>
        </div>
    </div>
    <!-- Оверлей для увеличенного изображения -->
    <div class="overlay">
        <img class="overlay-image" src="" alt="Увеличенное изображение">
    </div>

    <script>
        const imageLinks = document.querySelectorAll('.image-link');
        const overlay = document.querySelector('.overlay');
        const overlayImage = document.querySelector('.overlay-image');

        imageLinks.forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                const imgSrc = link.querySelector('img').src;
                overlayImage.src = imgSrc;
                overlay.classList.add('active');
            });
        });

        overlay.addEventListener('click', () => {
            overlay.classList.remove('active');
        });
    </script>
</body>
</html>
