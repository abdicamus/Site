<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hexlet</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</head>

<body>

    <div class="container-xxl">
        <header class="navbar navbar-light navbar-expand-lg border-bottom align-items-center py-lg-3 mb-4">
            <a aria-hidden="true" class="navbar-brand text-body pt-lg-0 pb-lg-2" href="/">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0" viewBox="0 0 263 55"
                    xml:space="preserve" width="100" height="20">
                    <style>
                        .ct0 {
                            fill: currentcolor
                        }
                    </style>
                    <path class="ct0"
                        d="m36 12-11 4-6 10-7-10-11-4 13 20L0 54h8l10-16 11 16h8L23 32zM47 33c1-4 5-8 10-8s9 4 10 8H47zm10-14c-10 0-18 8-18 18 0 11 8 18 18 18 7 0 14-4 17-11h-8c-1 3-5 5-9 5-6 0-10-4-11-10h28c1-11-6-20-17-20M112 20h-9L88 35V20h-7v34h7V38l17 16h9L96 36zM133 26c4 0 8 2 9 6h7c-1-8-8-13-16-13-11 0-18 8-18 18s7 18 17 18c8 0 16-5 17-13h-7c-1 4-5 6-10 6-6 0-10-4-10-11 0-6 4-11 11-11M160 40c-1 7-2 8-6 8h-2v7h4c5 0 9-4 11-14l2-14h12v27h7V20h-25l-3 20zM202 33c2-4 5-8 11-8 5 0 8 4 9 8h-20zm11-14c-11 0-18 8-18 18 0 11 7 18 18 18 7 0 14-4 16-11h-7c-2 3-5 5-9 5-6 0-10-4-11-10h28c1-11-6-20-17-20M252 20h-18v7h11v27h7V27h11v-7z">
                    </path>
                    <path style="fill:#136ef6" d="M36 7 19 0 1 7l18 6z"></path>
                </svg>

            </a>
            <button aria-controls="navbar-responsive" aria-expanded="false" aria-label="Меню"
                class="navbar-toggler border-0" data-bs-target="#navbar-responsive" data-bs-toggle="collapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbar-responsive">
                <ul class="navbar-nav me-auto">
                    <li><a class="nav-link px-lg-3" href="/courses">Все курсы</a></li>
                    <li><a class="nav-link px-lg-3" href="/webinars">Бесплатно</a></li>
                    <li>
                        <div class="dropdown text-body-secondary">
                            <button aria-haspopup="true" aria-label="О Хекслете"
                                class="btn border-0 dropdown-toggle nav-link px-lg-3 x-btn-focus-visible"
                                data-bs-toggle="dropdown">
                                О Хекслете
                            </button>
                            <div class="dropdown-menu dropdown-menu-start">
                                <a class="dropdown-item" href="/pages/about">О компании</a>
                                <a class="dropdown-item" href="/blog">Блог</a>
                                <a class="dropdown-item" href="/testimonials">Отзывы студентов</a>
                                <a class="dropdown-item" href="/teams">Компаниям</a>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="col-auto text-lg-end py-2 py-lg-0">
                    <a class="btn btn-outline-secondary me-2"
                        href="/login">Вход</a>
                    <a class="btn btn-outline-secondary"
                        href="/register">Регистрация</a>
                </div>
            </div>
        </header>
    </div>