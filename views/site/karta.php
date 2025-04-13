<?php
$this->title = 'Где нас найти?';
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Где нас найти?</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-gradient: #488cc2;
            --primary-color: #4361ee;
            --dark-accent: #488cc2;
            --light-bg: #f8f9fc;
            --card-bg: #ffffff;
            --text-color: #2d3748;
            --text-muted: #718096;
            --border-color: #e2e8f0;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            background-color: var(--light-bg);
            margin: 0;
            padding: 0;
            color: var(--text-color);
            line-height: 1.6;
        }

        .page-header {
            background: var(--primary-gradient);
            color: white;
            padding: 3rem 0;
            text-align: center;
            margin-bottom: 2.5rem;
            box-shadow: 0 4px 12px rgba(63, 55, 201, 0.2);
        }

        .page-header h1 {
            font-weight: 700;
            font-size: 2.5rem;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1rem;
        }

        .page-header p {
            font-size: 1.1rem;
            opacity: 0.9;
            max-width: 800px;
            margin: 0 auto;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1.5rem;
        }

        .map-section {
            margin: 3rem 0;
        }

        .map-container {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            background: white;
            margin-bottom: 2rem;
        }

        .map {
            width: 100%;
            height: 500px;
            border: none;
        }

        .contact-cta {
            text-align: center;
            margin: 3rem 0;
        }

        .btn-application {
            background: var(--primary-gradient);
            border: none;
            color: white;
            padding: 1rem 2.5rem;
            font-size: 1.1rem;
            font-weight: 600;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.75rem;
            box-shadow: 0 4px 15px rgba(67, 97, 238, 0.3);
            text-decoration: none;
        }

        .btn-application:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(67, 97, 238, 0.4);
            background: var(--dark-accent);
        }

        .locations-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin: 3rem 0;
        }

        .location-card {
            background: white;
            border-radius: 12px;
            padding: 1.5rem;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }

        .location-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }

        .location-card h3 {
            color: var(--dark-accent);
            margin-top: 0;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .location-card p {
            color: var(--text-muted);
            margin-bottom: 1rem;
        }

        .contact-info {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 0.5rem;
            color: var(--text-color);
        }

        .contact-info i {
            color: var(--primary-color);
            width: 20px;
        }

        @media (max-width: 768px) {
            .page-header h1 {
                font-size: 2rem;
            }

            .page-header p {
                font-size: 1rem;
                padding: 0 1rem;
            }

            .map {
                height: 400px;
            }
        }

        @media (max-width: 576px) {
            .page-header {
                padding: 2rem 0;
            }

            .page-header h1 {
                font-size: 1.75rem;
            }

            .map {
                height: 300px;
            }

            .btn-application {
                padding: 0.9rem 1.75rem;
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
<header class="page-header">
    <div class="container">
        <h1><i class="fas fa-map-marker-alt"></i> Где нас найти?</h1>
        <p>Наши приюты расположены в удобных местах города. Приходите в гости или оставьте заявку на посещение</p>
    </div>
</header>

<div class="container">
    <section class="map-section">
        <div class="map-container">
            <div class="map">
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A32a52256db99d74ddf0bf4514098e9198159b64de86807c8328f76296822824a&amp;width=100%&amp;height=500&amp;lang=ru_RU&amp;scroll=true"></script>
            </div>
        </div>
    </section>

    <section class="locations-grid">
        <div class="location-card">
            <h3><i class="fas fa-paw"></i> Центральный приют</h3>
            <p>Наш главный приют с большим количеством животных, ждущих своих хозяев</p>
            <div class="contact-info">
                <i class="fas fa-map-marker-alt"></i>
                <span>ул. Центральная, 123</span>
            </div>
            <div class="contact-info">
                <i class="fas fa-clock"></i>
                <span>Ежедневно с 9:00 до 20:00</span>
            </div>
            <div class="contact-info">
                <i class="fas fa-phone"></i>
                <span>+7 (123) 456-78-90</span>
            </div>
        </div>

        <div class="location-card">
            <h3><i class="fas fa-paw"></i> Северный приют</h3>
            <p>Уютный приют в северной части города с домашней атмосферой</p>
            <div class="contact-info">
                <i class="fas fa-map-marker-alt"></i>
                <span>ул. Северная, 45</span>
            </div>
            <div class="contact-info">
                <i class="fas fa-clock"></i>
                <span>Ежедневно с 10:00 до 19:00</span>
            </div>
            <div class="contact-info">
                <i class="fas fa-phone"></i>
                <span>+7 (123) 456-78-91</span>
            </div>
        </div>

        <div class="location-card">
            <h3><i class="fas fa-paw"></i> Южный приют</h3>
            <p>Самый новый приют нашей сети с современными условиями содержания</p>
            <div class="contact-info">
                <i class="fas fa-map-marker-alt"></i>
                <span>ул. Южная, 67</span>
            </div>
            <div class="contact-info">
                <i class="fas fa-clock"></i>
                <span>Ежедневно с 9:30 до 19:30</span>
            </div>
            <div class="contact-info">
                <i class="fas fa-phone"></i>
                <span>+7 (123) 456-78-92</span>
            </div>
        </div>
    </section>

    <section class="contact-cta">
        <a href="contact" class="btn-application">
            <i class="fas fa-file-alt"></i> Оставить заявку
        </a>
    </section>
</div>
</body>
</html>