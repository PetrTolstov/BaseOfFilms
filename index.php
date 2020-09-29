<!DOCTYPE html>
<html lang="en">
<head>
    <meta name = "description" content = "Site about films" > <!-- мета элемент, который описывает содержимое документа -->
    <meta name = "keywords" content = "film, watch"> <!-- мета элемент, который описывает ключевые слова в документе -->
    <meta name = "author" content = "Petr Tolstov"> <!-- мета элемент, который указывает имя автора документа -->
    <meta charset="UTF-8" http-equiv="refresh" content="9999" >
    <!--<meta  http-equiv  = "content-security-policy" content = "default-src https:" > мета элемент, который разрешает загрузку ресурсов (изображения, шрифты, скрипты и так далее) только с использованием https -->
    <meta name = "robots" content = "index, follow"> <!-- Используется поисковыми системами при индексации страниц и прохода по ссылкам поисковой системой-->
    <meta name = "viewport" content = "width=device-width, initial-scale = 1"> <!--Для того, чтобы мобильные браузеры автоматически не изменяли размер страниц сайта-->
    <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    <title>Base of kino</title>
    <link rel="icon" href="style/icon.png" sizes="16x16 32х32" type="image/png">
    <link href="style/page_styles.css" type="text/css" rel="stylesheet">
    <script src="scripts/page_script.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<header>
    <article id="title_h">
    <h1 id="main_h">КиноБаза</h1>
    <p id="down_main_h">Кино - наша страсть!</p>
    </article>
    <nav id="main_nav">
        <ul id="ul_main_nav">
            <li><a>Главная</a></li>
            <li><a>Фильмы</a></li>
            <li><a>Сериалы</a></li>
            <li><a>Рейтинг фильмов</a></li>
            <li><a>Контакты</a></li>
        </ul>
    </nav>
</header>

<main>
    <aside>
        <article id="search">
            <h3>Поиск</h3>
            <form method="get">
                <label>
                    <input type="search" value="Ваш запрос">
                    <button>Найти</button>
                </label>
            </form>
        </article>
        <article id="login">
            <h3>Вход</h3>
        </article>
        <article id="news">
            <h3>Новости</h3>
        </article>
        <article id="rating">
            <h3>Рейтинг фильмов</h3>
        </article>
    </aside>
    <article id="new_film">
        <h2>Новые фильмы</h2>
        <section>
            <img src="src/matrix.png" alt="Film photo">
            <img src="src/max.png" alt="Film photo">
            <img src="src/inter.png" alt="Film photo">
            <img src="src/cloud.png" alt="Film photo">
        </section>
    </article>

    <article id="new_serials">
        <h2>Новые сериалы</h2>
        <section>
            <img src="src/dead.png" alt="Film photo">
            <img src="src/silicon.png" alt="Film photo">
            <img src="src/breakingbad.png" alt="Film photo">
            <img src="src/xfiles.png" alt="Film photo">
        </section>
    </article>

</main>

</body>

