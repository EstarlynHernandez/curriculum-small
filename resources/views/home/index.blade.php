@extends('../base')

@section('seo')
    <meta name="description" content="This is a Web page for Estarlyn Hernandez's projects">
@endsection

@section('title')
    Estarlyn Hernandez
@endsection

@section('content')
    {{-- header --}}
    <header class="header container">
        {{-- nav --}}
        <nav class="nav">
            <h4 class="nav__title">{{ __('text.contacts') }}</h4>
            <ul class="nav__icons">
                <li>
                    <a href="{{ __('personal.github') }}" class="small__icons">
                        <img class="contact__icons__img" src="{{ asset('icons/light/github.svg') }}" alt="github"
                            title='GitHub'>
                    </a>
                </li>
                <li>
                    <a href="{{ __('personal.linkedin') }}" target="__blank" class="small__icons">
                        <img class="contact__icons__img" src="{{ asset('icons/light/linkedin.svg') }}" alt="linkedin"
                            title="LinkedIn">
                    </a>
                </li>
                <li>
                    <a href="{{ __('personal.email') }}" class="small__icons">
                        <img class="contact__icons__img" src="{{ asset('icons/light/mail.svg') }}" alt="mail"
                            title="E-Mail">
                    </a>
                </li>
                <li>
                    <a href="{{ __('personal.telegram') }}" class="small__icons">
                        <img class="contact__icons__img" src="{{ asset('icons/light/telegram.svg') }}" alt="telegram"
                            title="telegram">
                    </a>
                </li>
            </ul>
        </nav>

        {{-- link for an alternative portfoglio --}}
        <a href="#" class="link work">{{ __('text.full_info') }}</a>

    </header>

    {{-- main --}}
    <main>
        {{-- presentation --}}
        <section id="home" class="presentation container">
            <picture class="big__img">
                <img src="img/name.svg" alt="{{ __('personal.name') }} {{ __('personal.lastname') }}"
                    title="{{ __('personal.name') }} {{ __('personal.lastname') }}">
            </picture>

            {{-- covers --}}
            <div class="container">
                <h2 class="title">{{ __('text.projects') }}</h2>
                <div class="presentation__cards">
                    <div class="mini__card">
                        <picture class="card__img">
                            <a href="#"><img src="{{ asset('img/curriculum-small.webp') }}" alt="curriculum-small"
                                    title="{{ __('text.this_page') }}"></a>
                        </picture>
                    </div>

                    <div class="mini__card">
                        <picture class="card__img">
                            <a href="https://shop.estyos.com/" target="__blank"><img src="{{ asset('img/shop.webp') }}"
                                    alt="Shop" title="Shop"></a>
                        </picture>
                    </div>
                </div>
            </div>

        </section>

        {{-- divisor --}}
        <div class="divisor"></div>

        {{-- info --}}
        <h2 class="title">{{ __('text.personal_info') }}</h2>
        <section class="container personal">
            {{-- knowledge --}}
            <div class="info">
                <div>
                    <h2 class="title__small">{{ __('text.knowledge') }}</h2>
                    <p class="text">{{ __('personal.knowledge') }}</p>
                </div>
                <div class="tecnologies">
                    <h3 id="front_end" class="tecnologies__title">{{ __('text.front_end') }}</h3>
                    <h3 id="back_end" class="tecnologies__title">{{ __('text.back_end') }}</h3>
                    <h3 id="language" class="tecnologies__title">{{ __('text.languages') }}</h3>
                </div>
            </div>

            {{-- about me --}}
            <div class="info alternative">
                <h2 class="title__small">{{ __('text.about_me') }}</h2>
                <p class="text"><span class="info__list">{{ __('text.name') }}:</span>
                    {{ __('personal.name') }}</p>
                <p class="text"><span class="info__list">{{ __('text.lastname') }}:</span>
                    {{ __('personal.lastname') }} </p>
                <p class="text"><span class="info__list">{{ __('text.hobbies') }}:</span>
                    {{ __('personal.hobbies') }}</p>
                <p class="text"><span class="info__list">{{ __('text.more') }}:</span>
                    {{ __('personal.more') }} <span class="link" id="contact">{{ __('text.contact_details') }}</span>.
                </p>

            </div>
        </section>

        {{-- divisor --}}
        <div class="divisor"></div>

        {{-- cards --}}
        <h2 class="title">{{ __('text.pages') }}</h2>
        <section class="cards container">
            <picture class="card">
                <a href="#"><img src="{{ asset('img/curriculum-small.webp') }}" class="card__img"
                        alt="curriculum-small" title="{{ __('text.this_page') }}"></a>
                <div class="card__tecnologies">
                    <img class="small__icons high" src="{{ asset('icons/light/laravel.svg') }}" alt="laravel" title="laravel">
                    <img class="small__icons high" src="{{ asset('icons/light/php.svg') }}" alt="php" title="php">
                    <img class="small__icons high" src="{{ asset('icons/light/js.svg') }}" alt="javascript"
                        title="javascript">
                </div>
            </picture>

            <picture class="card">
                <a href="https://shop.estyos.com/" target="__blank"><img class="card__img"
                        src="{{ asset('img/shop.webp') }}" alt="curriculum-small" title="Shop"></a>
                <div class="card__tecnologies">
                    <img class="small__icons high" src="{{ asset('icons/light/laravel.svg') }}" alt="laravel"
                        title="laravel">
                    <img class="small__icons high" src="{{ asset('icons/light/sql.svg') }}" alt="sql" title="sql">
                    <img class="small__icons high" src="{{ asset('icons/light/php.svg') }}" alt="php" title="php">
                </div>
        </section>
        </section>

        {{-- divisor --}}
        <div class="divisor"></div>
    </main>

    {{-- more --}}
    <section class="more">
        {{-- contact --}}
        <article class="contact">
            <h2 class="title">{{ __('text.contacts') }}</h2>
            <ul class="nav__icons">
                <li class="conctact__icons--list">
                    <a href="{{ __('personal.github') }}" target="__blank" class="small__icons">
                        <img class="contact__icons__img" src="{{ asset('icons/light/github.svg') }}" alt="github"
                            title='GitHub'>
                    </a>
                </li>
                <li class="conctact__icons--list">
                    <a href="{{ __('personal.linkedin') }}" target="__blank" class="small__icons">
                        <img class="contact__icons__img" src="{{ asset('icons/light/linkedin.svg') }}" alt="linkedin"
                            title="LinkedIn">
                    </a>
                </li>
                <li class="conctact__icons--list">
                    <a href="{{ __('personal.email') }}" target="__blank" class="small__icons">
                        <img class="contact__icons__img" src="{{ asset('icons/light/mail.svg') }}" alt="mail"
                            title="E-Mail">
                    </a>
                </li>
                <li class="conctact__icons--list">
                    <a href="{{ __('personal.telegram') }}" target="__blank" class="small__icons">
                        <img class="contact__icons__img" src="{{ asset('icons/light/telegram.svg') }}" alt="telegram"
                            title="telegram">
                    </a>
                </li>
            </ul>
        </article>

        {{-- pages --}}
        <article class="pages--more">
            <h2 class="title">{{ __('text.pages') }}</h2>
            <p class="link work">{{ __('text.more_pages') }}</p>
        </article>

    </section>
    <footer class="footer">
        <p class="text container">{{ __('personal.page_info') }}</p>
    </footer>

    {{-- fullscreen shadow js  --}}
    <div name='config' class="options"></div>

    <div class="shadow dnone"></div>
    <div class="popup conf dnone">
        <div class="config dnone">
            <h2 class="title">{{ __('text.settings') }}</h2>
            <h3 class="title__small">{{ __('text.font_size') }}</h3>
            <div class="config__options" id="text__size">
                <button id='text__small' class="button small ">S</button>
                <button id="text__medium" class="button small ">M</button>
                <button id="text__big" class="button small ">L</button>
            </div>

            <h2 class="title__small">{{ __('text.color') }}</h2>
            <div class="config__options">
                {{-- <button class="button">{{ __('text.light') }}</button> --}}
                <button class="button small  active">{{ __('text.dark') }}</button>
            </div>

            <h2 class="title__small">{{ __('text.language') }}</h2>
            <div class="config__options">
                <a href="/es" id='es'
                    class="button small  @if (__('text.lang') == 'es') active @endif">ES</a>
                <a href="/en" id="en"
                    class="button small  @if (__('text.lang') == 'en') active @endif">EN</a>
                <a href="/it" id="it"
                    class="button small  @if (__('text.lang') == 'it') active @endif">IT</a>
            </div>
        </div>
    </div>

    <div class="popup all dnone">
        <div id="contact" class="contact__popup dnone">
            <h2 class="title">{{ __('text.contacts') }}</h2>
            <div class="popup__list">
                <a href="{{ __('personal.github') }}" target="__blank" class="button long medium"><img
                        class="icons__medium" src="{{ asset('icons/light/github.svg') }}" alt="GitHub"
                        title="GitHub">GitHub</a>
                <a href="{{ __('personal.linkedin') }}" target="__blank" class="button long medium"><img
                        class="icons__medium" src="{{ asset('icons/light/linkedin.svg') }}" alt="LinkedIn"
                        title="LinkedIl">LinkedIn</a>
                <a href="{{ __('personal.email') }}" target="__blank" class="button long medium"><img
                        class="icons__medium" src="{{ asset('icons/light/mail.svg') }}" alt="E-Mail"
                        title="E-Mail">E-Mail</a>
                <a href="{{ __('personal.telegram') }}" target="__blank" class="button long medium"><img
                        class="icons__medium" src="{{ asset('icons/light/telegram.svg') }}" alt="E-Mail"
                        title="E-Mail">Telegram</a>
            </div>
        </div>

        <div class="front dnone">
            <h2 class="title">{{ __('text.front_end') }}</h2>
            <div class="popup__list">
                <p class="button long high">
                    <img src="{{ asset('icons/light/html.svg') }}" alt="HTML" title="HTML" class="icons__medium">
                    HTML
                </p>
                <p class="button long high">
                    <img src="{{ asset('icons/light/css.svg') }}" alt="CSS" title="CSS" class="icons__medium">
                    CSS
                </p>
                <p class="button long high">
                    <img src="{{ asset('icons/light/js.svg') }}" alt="JS" title="JS" class="icons__medium">
                    JavaScript
                </p>
                <p class="button long high">
                    <img src="{{ asset('icons/light/react.svg') }}" alt="React" title='react'
                        class="icons__medium">
                    React
                </p>
            </div>
        </div>

        <div class="back dnone">
            <h2 class="title">{{ __('text.back_end') }}</h2>
            <div class="popup__list">
                <p class="button long high">
                    <img src="{{ asset('icons/light/php.svg') }}" alt="PHP" title="php" class="icons__medium">
                    PHP
                </p>
                <p class="button long high">
                    <img src="{{ asset('icons/light/laravel.svg') }}" alt="Laravel" title="Laravel"
                        class="icons__medium">
                    Laravel
                </p>
                <p class="button long low">
                    <img src="{{ asset('icons/light/symfony.svg') }}" alt="Symfony" title="Symfony"
                        class="icons__medium">
                    Symfony
                </p>
                <p class="button long medium">
                    <img src="{{ asset('icons/light/sql.svg') }}" alt="SQL" title="SQL" class="icons__medium">
                    SQL
                </p>
            </div>
        </div>

        <div class="lang dnone">
            <h2 class="title">{{ __('text.languages') }}</h2>
            <div class="popup__list">
                <p class="button long low">
                    <img src="{{ asset('icons/light/en.svg') }}" alt="En" title="English" class="icons__medium">
                    {{ __('text.english') }}
                </p>
                <p class="button long high">
                    <img src="{{ asset('icons/light/es.svg') }}" alt="Es" title="Español" class="icons__medium">
                    {{ __('text.spanish') }}
                </p>
                <p class="button long high">
                    <img src="{{ asset('icons/light/it.svg') }}" alt="It" title="Italiano" class="icons__medium">
                    {{ __('text.italian') }}
                </p>
            </div>
        </div>

        <div class="working dnone">
            <h2 class="title">🚧{{ __('text.working_in_progress') }}🚧</h2>
            <p class="text">{{ __('text.working_info') }}</p>
            <img src="{{ asset('img/working.webp') }}" alt="Working in progress">
        </div>
    </div>
@endsection
