@extends('../base')

@section('seo')
    <meta name="description" content="This is a Web page for Estarlyn Hernandez's projects">
@endsection

@section('title')
    Home
@endsection

@section('content')
    {{-- header --}}
    <header class="header">
        {{-- nav --}}
        <nav class="nav">
            <h4 class="nav__title">Conctact</h4>
            <ul class="contact__icons">
                <li class="conctact__icons--list">
                    <a href="https://github.com/EstarlynHernandez" class="contact__icons__link">
                        <img class="contact__icons__img" src="{{ asset('icons/light/github.svg') }}" alt="github"
                            title='GitHub'>
                    </a>
                </li>
                <li class="conctact__icons--list">
                    <a class="contact__icons__link">
                        <img class="contact__icons__img" src="{{ asset('icons/light/linkedin.svg') }}" alt="linkedin"
                            title="LinkedIn">
                    </a>
                </li>
                <li class="conctact__icons--list">
                    <a class="contact__icons__link">
                        <img class="contact__icons__img" src="{{ asset('icons/light/mail.svg') }}" alt="mail"
                            title="E-Mail">
                    </a>
                </li>
            </ul>
        </nav>

        {{-- fullPage --}}
        <div class="fullPage">
            <a href="#" class="fullPage__link">Full Info</a>
        </div>

    </header>

    {{-- main --}}
    <main class="container">
        {{-- name --}}
        <section id="home" class="name">
            <picture class="nameImage">
                <img src="img/name.svg" alt="Estarlyn Hernandez" title="Estarlyn Hernandez">
            </picture>

            {{-- covers --}}
            <div class="covers">
                <picture class="card card--extra">
                    <a href="https://estarlyn.com/" target="__blank"><img src="{{ asset('img/curriculum-small.webp') }}"
                            alt="curriculum-small" title="This Page"></a>
                </picture>
                <picture class="card card--extra">

                </picture>
                <picture class="card card--extra">

                </picture>
            </div>
        </section>

        {{-- divisor --}}
        <div class="divisor"></div>

        {{-- info --}}
        <section class="info">
            {{-- knowledge --}}
            <div class="knowledge">
                <h2 class="info__title knowledge__title">knowledge</h2>
                <p class="info__text knowledge__text">
                    I am a web developer who specializes in front-end development.
                    I can also work on the back-end with frameworks like Laravel
                    and languages like PHP. For example, this page was created with
                    Laravel using Blade, PHP, CSS, and JavaScript. If you want to know
                    all of my language skills, you can click on the button below this text.
                </p>
                <div class="tecnologies">
                    <h3 class="tecnologies__title">Front End</h3>

                    <h3 class="tecnologies__title">Back End</h3>

                    <h3 class="tecnologies__title">Language</h3>
                </div>
            </div>

            {{-- about me --}}
            <div class="about">
                <h2 class="info__title about__title">About Me</h2>
                <p class="info__text about__text"><span class="info__list">Name:</span> Estarlyn </p>
                <p class="info__text about__text"><span class="info__list">Last name:</span> Hernandez </p>
                <p class="info__text about__text"><span class="info__list">Hobbies:</span> Video games, music, programming,
                    computing and hardware </p>
                <p class="info__text about__text"><span class="info__list">More:</span> I am Dominican and I live in Italy.
                    I did middle school in the
                    Dominican Republic and high school in Italy. I started my web developer study by myself on the internet
                    on various pages like YouTube, Stack Overflow, Udemy, Platzi and more. If you are interested in having
                    more information, you can contact me by my <span class="info__link">contact details</span>.</p>

            </div>
        </section>

        {{-- divisor --}}
        <div class="divisor"></div>

        {{-- cards --}}
        <section class="pages">
            <h2 class="pages__title">Pages</h2>
            <section class="cards">
                <picture class="card">
                    <img src="{{ asset('img/curriculum-small.webp') }}" alt="curriculum-small" title="This Page">
                </picture>
                <picture class="card">

                </picture>
                <picture class="card">

                </picture>
                <picture class="card">

                </picture>
            </section>
        </section>

        {{-- divisor --}}
        <div class="divisor"></div>
    </main>

    {{-- more --}}
    <section class="more">
        {{-- contact --}}
        <article class="contact">
            <h2 class="contact__title">Contact</h2>
            <ul class="contact__icons">
                <li class="conctact__icons--list">
                    <a href="https://github.com/EstarlynHernandez" class="contact__icons__link">
                        <img class="contact__icons__img" src="{{ asset('icons/light/github.svg') }}" alt="github"
                            title='GitHub'>
                    </a>
                </li>
                <li class="conctact__icons--list">
                    <a class="contact__icons__link">
                        <img class="contact__icons__img" src="{{ asset('icons/light/linkedin.svg') }}" alt="linkedin"
                            title="LinkedIn">
                    </a>
                </li>
                <li class="conctact__icons--list">
                    <a class="contact__icons__link">
                        <img class="contact__icons__img" src="{{ asset('icons/light/mail.svg') }}" alt="mail"
                            title="E-Mail">
                    </a>
                </li>
            </ul>
        </article>

        {{-- pages --}}
        <article class="pages--more">
            <h2 class="pages__title--more">Pages</h2>
            <a href="#" class="more__link">More Pages</a>
        </article>

    </section>
    <footer class="reserved">
        <p class="reserved__text">estarlyn.com and estyos.eu are pages reserved for my job info and my personal projects.
        </p>
        <p class="reserved__text">This page is continuously updated since the day 27 of feb 2023.</p>
    </footer>

    {{-- full screen js  --}}
    <div name='config' class="options"></div>

    <div class="shadow dnone"></div>
        <div class="shadow--menu dnone">
            <div class="config dnone">
                <h2 class="config__title--main">Config</span></h2>
                <h2 class="config__title">Font Size</h2>
                <div class="config--size">
                    <button id='text__small' class="config__button button">Small</button>
                    <button id="text__medium" class="config__button button button--active">Medium</button>
                    <button id="text__big" class="config__button button">Big</button>
                </div>

                <h2 class="config__title">Color</h2>
                <div class="config--ambient">
                    <button class="config__button button button--active">Light</button>
                    <button class="config__button button">Dark</button>
                </div>

                <h2 class="config__title">Lang</h2>
                <div class="config--size">
                    <a id='es' class="config__button button">Español</a>
                    <a id="en" class="config__button button button--active">English</a>
                    <a id="it" class="config__button button">Italiano</a>
                </div>
            </div>
            <div class="contact dnone"></div>
            <div class="working dnone"></div>
        </div>
@endsection
