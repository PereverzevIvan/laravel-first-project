<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <header class="header">
        <a href="/" class="header__logo">
            МосПолитех
        </a>
        <nav class="header__nav">
            <a href="/articles" class="header__link">Статьи</a>
            <a href="/contacts" class"header__link">Контакты</a>
            <a href="/about_us" class="header__link">О нас</a>
        </nav>
        <a href="/create_user" class="header__sign-in">Sign In</a>
    </header>
    <main class="main">
        @yield('content')
    </main>
    <footer class="footer">
        Переверзев Иван Дмитриевич - 221-321
    </footer>
</body>
</html>