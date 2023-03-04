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
            <h4 class="nav__title">{{ __('text.contact') }}</h4>
            <ul class="contact__icons">
                <li class="conctact__icons--list">
                    <a href="{{ __('personal.github') }}" class="contact__icons__link">
                        <img class="contact__icons__img" src="{{ asset('icons/light/github.svg') }}" alt="github"
                            title='GitHub'>
                    </a>
                </li>
                <li class="conctact__icons--list">
                    <a href="{{ __('personal.linkedin') }}" target="__blank" class="contact__icons__link">
                        <img class="contact__icons__img" src="{{ asset('icons/light/linkedin.svg') }}" alt="linkedin"
                            title="LinkedIn">
                    </a>
                </li>
                <li class="conctact__icons--list">
                    <a href="{{ __('personal.email') }}" class="contact__icons__link">
                        <img class="contact__icons__img" src="{{ asset('icons/light/mail.svg') }}" alt="mail"
                            title="E-Mail">
                    </a>
                </li>
            </ul>
        </nav>

        {{-- fullPage --}}
        <div class="fullPage">
            <a href="#" class="fullPage__link work">{{ __('text.full_info') }}</a>
        </div>

    </header>

    {{-- main --}}
    <main class="container">
        {{-- name --}}
        <section id="home" class="name">
            <picture class="nameImage">
                <img src="img/name.svg" alt="{{ __('personal.name') }} {{ __('personal.lastname') }}"
                    title="{{ __('personal.name') }} {{ __('personal.lastname') }}">
            </picture>

            {{-- covers --}}
            <div class="covers">
                <picture class="card card--extra">
                    <a href="{{ url('/') }}" target="__blank"><img src="{{ asset('img/curriculum-small.webp') }}"
                            alt="curriculum-small" title="{{ __('text.this_page') }}"></a>
                </picture>
                <picture class="card card--extra work">

                </picture>
                <picture class="card card--extra work">

                </picture>
            </div>
        </section>

        {{-- divisor --}}
        <div class="divisor"></div>

        {{-- info --}}
        <h2 class="info__title--principal">{{ __('text.personal_info') }}</h2>
        <section class="info">
            {{-- knowledge --}}
            <div class="knowledge">
                <h2 class="info__title knowledge__title">{{ __('text.knowledge') }}</h2>
                <p class="info__text knowledge__text">{{ __('personal.knowledge') }}</p>
                <div class="tecnologies">
                    <h3 class="tecnologies__title front_end">{{ __('text.front_end') }}</h3>

                    <h3 class="tecnologies__title back_end">{{ __('text.back_end') }}</h3>

                    <h3 class="tecnologies__title language--lang">{{ __('text.languages') }}</h3>
                </div>
            </div>

            {{-- about me --}}
            <div class="about">
                <h2 class="info__title about__title">{{ __('text.about_me') }}</h2>
                <p class="info__text about__text"><span class="info__list">{{ __('text.name') }}:</span>
                    {{ __('personal.name') }}n </p>
                <p class="info__text about__text"><span class="info__list">{{ __('text.lastname') }}:</span>
                    {{ __('personal.lastname') }} </p>
                <p class="info__text about__text"><span class="info__list">{{ __('text.hobbies') }}:</span>
                    {{ __('personal.hobbies') }}</p>
                <p class="info__text about__text"><span class="info__list">{{ __('text.more') }}:</span>
                    {{ __('personal.more') }} <span class="info__link info__link--open">{{ __('text.contact_details') }}</span>.</p>

            </div>
        </section>

        {{-- divisor --}}
        <div class="divisor"></div>

        {{-- cards --}}
        <section class="pages ">
            <h2 class="info__title--principal">{{ __('text.pages') }}</h2>
            <section class="cards">
                <picture class="card">
                    <a href="https://estarlyn.com/" target="__blank"><img src="{{ asset('img/curriculum-small.webp') }}" alt="curriculum-small"
                        title="{{ __('text.this_page') }}"></a>
                </picture>
                <picture class="card work">

                </picture>
                <picture class="card work">

                </picture>
                <picture class="card work">

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
            <h2 class="contact__title">{{ __('text.contact') }}</h2>
            <ul class="contact__icons">
                <li class="conctact__icons--list">
                    <a href="{{ __('personal.github') }}" class="contact__icons__link">
                        <img class="contact__icons__img" src="{{ asset('icons/light/github.svg') }}" alt="github"
                            title='GitHub'>
                    </a>
                </li>
                <li class="conctact__icons--list">
                    <a href="{{ __('personal.linkedin') }}" target="__blank" class="contact__icons__link">
                        <img class="contact__icons__img" src="{{ asset('icons/light/linkedin.svg') }}" alt="linkedin"
                            title="LinkedIn">
                    </a>
                </li>
                <li class="conctact__icons--list">
                    <a href="{{ __('personal.email') }}" target="__blank" class="contact__icons__link">
                        <img class="contact__icons__img" src="{{ asset('icons/light/mail.svg') }}" alt="mail"
                            title="E-Mail">
                    </a>
                </li>
            </ul>
        </article>

        {{-- pages --}}
        <article class="pages--more">
            <h2 class="pages__title--more">{{ __('text.pages') }}</h2>
            <p class="more__link work">{{ __('text.more_pages') }}</p>
        </article>

    </section>
    <footer class="reserved">
        <p class="reserved__text">{{ __('personal.page_info') }}</p>
        <p class="reserved__text">{{ __('personal.page_updating') }}</p>
    </footer>

    {{-- full screen js  --}}
    <div name='config' class="options"></div>

    <div class="shadow dnone"></div>
    <div class="shadow--menu dnone">
        <div class="config dnone">
            <h2 class="config__title--main">{{ __('text.config') }}</span></h2>
            <h2 class="config__title">{{ __('text.font_size') }}</h2>
            <div class="config--size">
                <button id='text__small' class="config__button button">{{ __('text.small') }}</button>
                <button id="text__medium" class="config__button button button--active">{{ __('text.medium') }}</button>
                <button id="text__big" class="config__button button">{{ __('text.big') }}</button>
            </div>

            {{-- <h2 class="config__title">{{ __('text.color') }}</h2>
            <div class="config--ambient">
                <button class="config__button button button--active">{{ __('text.light') }}</button>
                <button class="config__button button">{{ __('text.dark') }}</button>
            </div> --}}

            <h2 class="config__title">{{ __('text.language') }}</h2>
            <div class="config--size">
                <a href="/es" id='es'
                    class="config__button button @if (__('text.lang') == 'es') button--active @endif">ES</a>
                <a href="/en" id="en"
                    class="config__button button @if (__('text.lang') == 'en') button--active @endif">EN</a>
                <a href="/it" id="it"
                    class="config__button button @if (__('text.lang') == 'it') button--active @endif">IT</a>
            </div>
        </div>

        <div class="contact--shadow dnone">
            <h2 class="contact__title">Contact</h2>
            <div class="contact--container">
                <a href="{{ __('personal.github') }}" target="__blank" class="contact__link"><img class="contact__img"
                        src="{{ asset('icons/light/github.svg') }}" alt="GitHub" title="GitHub">GitHub</a>
                <a href="{{ __('personal.linkedin') }}" class="contact__link"><img class="contact__img"
                        src="{{ asset('icons/light/linkedin.svg') }}" alt="LinkedIn" title="LinkedIl">LinkedIn</a>
                <a href="{{ __('personal.email') }}" class="contact__link"><img class="contact__img"
                        src="{{ asset('icons/light/mail.svg') }}" alt="E-Mail" title="E-Mail">E-Mail</a>
            </div>
        </div>

        <div class="front dnone">
            <h2 class="mylanguage__title">{{ __('text.front_end') }}</h2>
            <div class="mylanguage--container">
                <p class="mylanguage__text">
                    <img src="{{ asset('icons/light/html.svg') }}" alt="HTML" title="HTML"
                        class="mylanguage__icon">
                    HTML
                </p>
                <p class="mylanguage__text">
                    <img src="{{ asset('icons/light/css.svg') }}" alt="CSS" title="CSS"
                        class="mylanguage__icon">
                    CSS
                </p>
                <p class="mylanguage__text">
                    <img src="{{ asset('icons/light/js.svg') }}" alt="JS" title="JS"
                        class="mylanguage__icon">
                    JavaScript
                </p>
                <p class="mylanguage__text">
                    <img src="{{ asset('icons/light/react.svg') }}" alt="React" title='react'
                        class="mylanguage__icon">
                    React
                </p>
            </div>
        </div>

        <div class="back dnone">
            <h2 class="mylanguage__title">{{ __('text.back_end') }}</h2>
            <div class="mylanguage--container">
                <p class="mylanguage__text">
                    <img src="{{ asset('icons/light/code.svg') }}" alt="PHP" title="php"
                        class="mylanguage__icon">
                    PHP
                </p>
                <p class="mylanguage__text">
                    <img src="{{ asset('icons/light/laravel.svg') }}" alt="Laravel" title="Laravel"
                        class="mylanguage__icon">
                    Laravel
                </p>
                <p class="mylanguage__text">
                    <img src="{{ asset('icons/light/symfony.svg') }}" alt="Symfony" title="Symfony"
                        class="mylanguage__icon">
                    Symfony
                </p>
                <p class="mylanguage__text">
                    <img src="{{ asset('icons/light/sql.svg') }}" alt="SQL" title="SQL"
                        class="mylanguage__icon">
                    SQL
                </p>
            </div>
        </div>

        <div class="lang dnone">
            <h2 class="mylanguage__title">{{ __('text.language') }}</h2>
            <div class="mylanguage--container">
                <p class="mylanguage__text">
                    <img src="{{ asset('icons/light/en.svg') }}" alt="En" title="English"
                        class="mylanguage__icon">
                    {{ __('text.english') }}
                </p>
                <p class="mylanguage__text">
                    <img src="{{ asset('icons/light/es.svg') }}" alt="Es" title="Español"
                        class="mylanguage__icon">
                    {{ __('text.spanish') }}
                </p>
                <p class="mylanguage__text">
                    <img src="{{ asset('icons/light/it.svg') }}" alt="It" title="Italiano"
                        class="mylanguage__icon">
                    {{ __('text.italian') }}
                </p>
            </div>
        </div>

        <div class="working dnone">
            <h2 class="working__title">🚧{{ __('text.working_in_progress') }}🚧</h2>
            <p class="working__text">{{ __('text.working_info') }}</p>
            <img src="{{ asset('img/r.webp') }}" alt="Working in progress">
        </div>
    </div>
@endsection
