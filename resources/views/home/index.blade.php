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
        {{-- <a href="#" class="link work">{{ __('text.full_info') }}</a> --}}
    </header>

    {{-- main --}}
    <main>
        {{-- presentation --}}
        <section id="home" class="presentation container">
            <div class="big__img">
                <picture>
                    <source media="(min-width: 900px)" srcset="img/Estarlyn.png">
                    <img class="only__desktop user__img" src=""
                        alt="{{ __('personal.name') }} {{ __('personal.lastname') }}"
                        title="{{ __('personal.name') }} {{ __('personal.lastname') }}">
                </picture>
                <img src="img/name.svg" alt="{{ __('personal.name') }} {{ __('personal.lastname') }}"
                    title="{{ __('personal.name') }} {{ __('personal.lastname') }}">
            </div>

            {{-- cards --}}
            <div class="container">
                <h2 class="title">{{ __('text.projects') }}</h2>
                <div class="presentation__cards">
                    <div class="mini__card only__desktop open" id="portfoglio">
                        <picture class="card__img"><img src="{{ asset('img/curriculum-small.webp') }}"
                                alt="curriculum-small" title="{{ __('text.this_page') }}" name="portfoglio">
                        </picture>
                    </div>

                    <div class="mini__card open" id="shop">
                        <picture class="card__img">
                            <img src="{{ asset('img/shop.webp') }}" alt="Shop" title="shop" name="shop">
                        </picture>
                    </div>

                    <div class="mini__card open" id="task">
                        <picture>
                            <source media="(min-width: 900px)" srcset="{{ asset('img/task-manager.webp') }}">
                            <img src="{{ asset('img/task-manager.webp') }}" alt="Shop" title="Shop" name="task">
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
                <p class="text"><span class="info__list">{{ __('text.additional_info') }}:</span>
                    {{ __('personal.personal_info') }} <span class="link"
                        id="contact">{{ __('text.contact_links') }}</span>.
                </p>

            </div>
        </section>

        {{-- divisor --}}
        <div class="divisor"></div>

        {{-- cards --}}
        <h2 class="title">{{ __('text.projects') }}</h2>
        <section class="cards container">
            <div class="card open">
                <picture>
                    <source media="(min-width: 900px)" srcset="{{ asset('img/curriculum-small.webp') }}">
                    <img src="{{ asset('img/mobile-cur.webp') }}" class="card__img" alt="curriculum-small"
                        title="{{ __('text.this_page') }}" name="portfoglio">
                </picture>

                <div class="card__tecnologies">
                    <img class="small__icons high" src="{{ asset('icons/light/laravel.svg') }}" alt="laravel"
                        title="laravel">
                    <img class="small__icons high" src="{{ asset('icons/light/php.svg') }}" alt="php"
                        title="php">
                    <img class="small__icons high" src="{{ asset('icons/light/js.svg') }}" alt="javascript"
                        title="javascript">
                </div>
            </div>

            <div class="card open">
                <picture>
                    <source media="(min-width: 900px)" srcset="{{ asset('img/shop.webp') }}">
                    <img class="card__img" src="{{ asset('img/mobile-shop.webp') }}" alt="Shop" title="Shop"
                        name="shop">
                </picture>

                <div class="card__tecnologies">
                    <img class="small__icons high" src="{{ asset('icons/light/laravel.svg') }}" alt="laravel"
                        title="laravel">
                    <img class="small__icons high" src="{{ asset('icons/light/sql.svg') }}" alt="sql"
                        title="sql">
                    <img class="small__icons high" src="{{ asset('icons/light/php.svg') }}" alt="php"
                        title="php">
                </div>
            </div>

            <div class="card open">
                <picture>
                    <source media="(min-width: 900px)" srcset="{{ asset('img/task-manager.webp') }}">
                    <img class="card__img" src="{{ asset('img/task-mobile.webp') }}" alt="Tasks Manager"
                        title="Task Manager" name="task">
                </picture>

                <div class="card__tecnologies">
                    <img class="small__icons high" src="{{ asset('icons/light/react.svg') }}" alt="React"
                        title="React">
                    <img class="small__icons high" src="{{ asset('icons/light/laravel.svg') }}" alt="laravel"
                        title="laravel">
                    <img class="small__icons high" src="{{ asset('icons/light/sql.svg') }}" alt="sql"
                        title="sql">
                </div>
            </div>
        </section>
        </section>

        {{-- divisor --}}
        <div class="divisor"></div>
    </main>

    {{-- more --}}
    <section class="more container">
        {{-- contact --}}
        <article>
            <h2 class="title">{{ __('text.contacts') }}</h2>
            <ul class="contacts__list">
                <li>
                    <a href="{{ __('personal.github') }}" target="__blank" class="button long medium"><img
                            class="icon__medium" src="{{ asset('icons/light/github.svg') }}" alt="GitHub"
                            title="GitHub">GitHub</a>
                </li>
                <li>
                    <a href="{{ __('personal.linkedin') }}" target="__blank" class="button long medium"><img
                            class="icon__medium" src="{{ asset('icons/light/linkedin.svg') }}" alt="LinkedIn"
                            title="LinkedIl">LinkedIn</a>
                </li>
                <li>
                    <a href="{{ __('personal.email') }}" target="__blank" class="button long medium"><img
                            class="icon__medium" src="{{ asset('icons/light/mail.svg') }}" alt="E-Mail"
                            title="E-Mail">E-Mail</a>
                </li>
                <li>
                    <a href="{{ __('personal.telegram') }}" target="__blank" class="button long medium"><img
                            class="icon__medium" src="{{ asset('icons/light/telegram.svg') }}" alt="telegram"
                            title="telegram">Telegram</a>
                </li>
                <li>
                    <a href="{{ __('personal.instagram') }}" target="__blank" class="button long medium"><img
                            class="icon__medium" src="{{ asset('icons/light/instagram.svg') }}" alt="instagram"
                            title="instagram">Instagram</a>
                </li>
                <li>
                    <a href="{{ __('personal.twitter') }}" target="__blank" class="button long medium"><img
                            class="icon__medium" src="{{ asset('icons/light/telegram.svg') }}" alt="twitter"
                            title="twitter">Twitter</a>
                </li>
            </ul>
        </article>

        {{-- pages --}}
        {{-- <article class="contacts__list">
            <h2 class="title">{{ __('text.more') }}</h2>
            <p class="link work">{{ __('text.projects') }}</p>
            <a class="link work">Blog</a>
            <p class="link work">Alternative Portfoglio</p>
        </article> --}}

    </section>
    <footer class="footer">
        <p class="text container">{{ __('personal.page_info') }}</p>
    </footer>

    {{-- fullscreen shadow js  --}}
    <div name='config' class="options"></div>

    <div class="shadow dnone"></div>
    <div class="popup conf dnone">
        <picture class="popup__header">
            <img class="icon__medium close" src="{{ asset('icons/light/close.svg') }}" alt="Close" title="Close">
        </picture>

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

    <div class="popup dnone all">
        <picture class="popup__header">
            <img class="icon__medium close" src="{{ asset('icons/light/close.svg') }}" alt="Close" title="Close">
        </picture>

        <div id="contact" class="contact__popup dnone">
            <picture class="popup__info popup__header">
                <img class="icon__medium" src="{{ asset('icons/light/info.svg') }}" alt="Info" title="Info">
                <div class="popup__info__show">
                    <p target="__blank" class="button long high">Repository</p>
                    <p target="__blank" class="button long medium">Social</p>
                    <p target="__blank" class="button long low">Contact</p>
                </div>
            </picture>

            <h2 class="title">{{ __('text.contacts') }}</h2>
            <div class="popup__list">
                <a href="{{ __('personal.github') }}" target="__blank" class="button long high"><img
                        class="icon__medium" src="{{ asset('icons/light/github.svg') }}" alt="GitHub"
                        title="GitHub">GitHub</a>
                <a href="{{ __('personal.linkedin') }}" target="__blank" class="button long medium"><img
                        class="icon__medium" src="{{ asset('icons/light/linkedin.svg') }}" alt="LinkedIn"
                        title="LinkedIl">LinkedIn</a>
                <a href="{{ __('personal.instagram') }}" target="__blank" class="button long medium"><img
                        class="icon__medium" src="{{ asset('icons/light/instagram.svg') }}" alt="instagram"
                        title="instagram">Instagram</a>
                <a href="{{ __('personal.twitter') }}" target="__blank" class="button long medium"><img
                        class="icon__medium" src="{{ asset('icons/light/twitter.svg') }}" alt="twitter"
                        title="twitter">Twitter</a>
                <a href="{{ __('personal.email') }}" target="__blank" class="button long low"><img class="icon__medium"
                        src="{{ asset('icons/light/mail.svg') }}" alt="E-Mail" title="E-Mail">E-Mail</a>
                <a href="{{ __('personal.telegram') }}" target="__blank" class="button long low"><img
                        class="icon__medium" src="{{ asset('icons/light/telegram.svg') }}" alt="telegram"
                        title="telegram">Telegram</a>
            </div>
        </div>

        <div class="front dnone">
            <picture class="popup__info popup__header">
                <img class="icon__medium" src="{{ asset('icons/light/info.svg') }}" alt="Info" title="Info">
                <div class="popup__info__show">
                    <p target="__blank" class="button long high">Online Project</p>
                    <p target="__blank" class="button long medium">Ongoing Project</p>
                    <p target="__blank" class="button long low">Studying</p>
                </div>
            </picture>

            <h2 class="title">{{ __('text.front_end') }}</h2>
            <div class="popup__list">
                <p class="button long high">
                    <img src="{{ asset('icons/light/html.svg') }}" alt="HTML" title="HTML" class="icon__medium">
                    HTML
                </p>
                <p class="button long high">
                    <img src="{{ asset('icons/light/css.svg') }}" alt="CSS" title="CSS" class="icon__medium">
                    CSS
                </p>
                <p class="button long high">
                    <img src="{{ asset('icons/light/js.svg') }}" alt="JS" title="JS" class="icon__medium">
                    JavaScript
                </p>
                <p class="button long high">
                    <img src="{{ asset('icons/light/react.svg') }}" alt="React" title='react' class="icon__medium">
                    React
                </p>
                <p class="button long low">
                    <img src="{{ asset('icons/light/ts.svg') }}" alt="TS" title="TS" class="icon__medium">
                    TypeScript
                </p>
            </div>
        </div>

        <div class="back dnone">
            <picture class="popup__info popup__header">
                <img class="icon__medium" src="{{ asset('icons/light/info.svg') }}" alt="Info" title="Info">
                <div class="popup__info__show">
                    <p target="__blank" class="button long high">Online Project</p>
                    <p target="__blank" class="button long medium">Ongoing Project</p>
                    <p target="__blank" class="button long low">Studying</p>
                </div>
            </picture>

            <h2 class="title">{{ __('text.back_end') }}</h2>
            <div class="popup__list">
                <p class="button long high">
                    <img src="{{ asset('icons/light/php.svg') }}" alt="PHP" title="php" class="icon__medium">
                    PHP
                </p>
                <p class="button long low">
                    <img src="{{ asset('icons/light/csharp.svg') }}" alt="C#" title="C#"
                        class="icon__medium">
                    C#
                </p>
                <p class="button long medium">
                    <img src="{{ asset('icons/light/mysql.svg') }}" alt="MySQL" title="MySQL"
                        class="icon__medium">
                    MySQL
                </p>
                <p class="button long high">
                    <img src="{{ asset('icons/light/laravel.svg') }}" alt="Laravel" title="Laravel"
                        class="icon__medium">
                    Laravel
                </p>
                <p class="button long low">
                    <img src="{{ asset('icons/light/symfony.svg') }}" alt="Symfony" title="Symfony"
                        class="icon__medium">
                    Symfony
                </p>
            </div>
        </div>

        <div class="lang dnone">
            <picture class="popup__info popup__header">
                <img class="icon__medium" src="{{ asset('icons/light/info.svg') }}" alt="Info" title="Info">
                <div class="popup__info__show">
                    <p target="__blank" class="button long high">High</p>
                    <p target="__blank" class="button long medium">Medium</p>
                    <p target="__blank" class="button long low">Low</p>
                </div>
            </picture>

            <h2 class="title">{{ __('text.languages') }}</h2>
            <div class="popup__list">
                <p class="button long low">
                    <img src="{{ asset('icons/light/en.svg') }}" alt="En" title="English" class="icon__medium">
                    {{ __('text.english') }}
                </p>
                <p class="button long high">
                    <img src="{{ asset('icons/light/es.svg') }}" alt="Es" title="Español" class="icon__medium">
                    {{ __('text.spanish') }}
                </p>
                <p class="button long high">
                    <img src="{{ asset('icons/light/it.svg') }}" alt="It" title="Italiano" class="icon__medium">
                    {{ __('text.italian') }}
                </p>
            </div>
        </div>

        <div class="working dnone">
            <h2 class="title">🚧{{ __('text.working_in_progress') }}🚧</h2>
            <p class="text">{{ __('text.working_info') }}</p>
            <img src="{{ asset('img/working.webp') }}" alt="Working in progress">
        </div>

        <div class="dnone portfoglio">
            <h2 class="title">Portfoglio</h2>
            <section class="project">
                <picture class="card__img"><img src="{{ asset('img/curriculum-small.webp') }}" alt="curriculum-small"
                        title="{{ __('text.this_page') }}">
                </picture>

                <div class="project__lang">
                    <p target="__blank" class="button active">This Page</p>
                    <a href="https://github.com/EstarlynHernandez/curriculum-small" target="__blank"
                        class="button long "><img src="{{ asset('icons/light/github.svg') }}" alt="github"
                            title="github" class="icon__medium">GitHub</a>
                </div>

                <div>
                    <h3 class="title__small">{{ __('text.programing_language') }}</h3>
                    <ul class="project__lang">
                        <li class="button long"><img src="{{ asset('icons/light/php.svg') }}" alt="PHP"
                                title="PHP" class="icon__medium">PHP</li>
                        <li class="button long"><img src="{{ asset('icons/light/laravel.svg') }}" alt="laravel"
                                title="laravel" class="icon__medium">Laravel</li>
                        <li class="button long"><img src="{{ asset('icons/light/css.svg') }}" alt="css"
                                title="css" class="icon__medium">CSS</li>
                        <li class="button long"><img src="{{ asset('icons/light/html.svg') }}" alt="html"
                                title="html" class="icon__medium">HTML</li>
                        <li class="button long"><img src="{{ asset('icons/light/js.svg') }}" alt="js"
                                title="js" class="icon__medium">JavaScript</li>
                    </ul>
                </div>
                <div>
                    <ul class="list">
                        <h3 class="title__small">{{ __('text.details') }}</h3>
                        <li class="button long"><b>{{ __('text.status') }}:</b> {{ __('text.in_progress') }}</li>
                        <li class="button long"><b>{{ __('text.creator') }}:</b> Estarlyn Hernandez</li>
                        <li class="button long"><b>{{ __('text.repository') }}:</b> GitHub</li>
                        <li class="button long"><b>{{ __('text.hosting') }}:</b> Linux</li>
                        <li class="button long"><b>{{ __('text.base') }}:</b> Laravel</li>
                        <li class="button long"><b>{{ __('text.base_language') }}:</b> PHP</li>
                        <li class="button long"><b>{{ __('text.created') }}:</b> {{ __('text.february') }} 2023</li>
                    </ul>
                </div>
                <div>
                    <h3 class="title__small">{{ __('text.info') }}</h3>
                    <p class="text">{{ __('projects.info_portfolio') }}</p>
                </div>
            </section>
        </div>

        <div class="dnone shop">
            <h2 class="title">Shop</h2>
            <section class="project">
                <picture class="card__img"><img src="{{ asset('img/shop.webp') }}" alt="Shop" title="Shop">
                </picture>

                <div class="project__lang">
                    <a href="https://shop.estyos.com/" target="__blank" class="button">{{ __('text.visit') }}</a>
                    <a href="https://github.com/EstarlynHernandez/shop" target="__blank" class="button long "><img
                            src="{{ asset('icons/light/github.svg') }}" alt="github" title="github"
                            class="icon__medium">GitHub</a>
                </div>

                <div>
                    <h3 class="title__small">{{ __('text.programing_language') }}</h3>
                    <ul class="project__lang">
                        <li class="button long"><img src="{{ asset('icons/light/php.svg') }}" alt="PHP"
                                title="PHP" class="icon__medium">PHP</li>
                        <li class="button long"><img src="{{ asset('icons/light/laravel.svg') }}" alt="laravel"
                                title="laravel" class="icon__medium">Laravel</li>
                        <li class="button long"><img src="{{ asset('icons/light/css.svg') }}" alt="css"
                                title="css" class="icon__medium">CSS</li>
                        <li class="button long"><img src="{{ asset('icons/light/html.svg') }}" alt="html"
                                title="html" class="icon__medium">HTML</li>
                        <li class="button long"><img src="{{ asset('icons/light/js.svg') }}" alt="js"
                                title="js" class="icon__medium">JavaScript</li>
                        <li class="button long"><img src="{{ asset('icons/light/mysql.svg') }}" alt="mysql"
                                title="mysql" class="icon__medium">MySql</li>
                    </ul>
                </div>
                <div>
                    <ul class="list">
                        <h3 class="title__small">{{ __('text.details') }}</h3>
                        <li class="button long"><b>{{ __('text.status') }}:</b> {{ __('text.in_progress') }}</li>
                        <li class="button long"><b>{{ __('text.creator') }}:</b> Estarlyn Hernandez</li>
                        <li class="button long"><b>{{ __('text.repository') }}:</b> GitHub</li>
                        <li class="button long"><b>{{ __('text.hosting') }}:</b> Linux</li>
                        <li class="button long"><b>{{ __('text.base') }}:</b> Laravel</li>
                        <li class="button long"><b>{{ __('text.base_language') }}:</b> PHP</li>
                        <li class="button long"><b>{{ __('text.created') }}:</b> {{ __('text.march') }} 2023</li>
                    </ul>
                </div>
                <div>
                    <h3 class="title__small">{{ __('text.info') }}</h3>
                    <p class="text">{{ __('projects.info_shop') }}</p>
                </div>
            </section>
        </div>

        <div class="dnone task">
            <h2 class="title">Task</h2>
            <section class="project">
                <picture class="card__img"><img src="{{ asset('img/task-manager.webp') }}" alt="task"
                        title="task">
                </picture>

                <div class="project__lang">
                    <a href="https://tasks.estyos.com/" target="__blank" class="button">{{ __('text.visit') }}</a>
                    <a href="https://github.com/EstarlynHernandez/Task_manager" target="__blank"
                        class="button long "><img src="{{ asset('icons/light/github.svg') }}" alt="github"
                            title="github" class="icon__medium">GitHub</a>
                </div>

                <div>
                    <h3 class="title__small">{{ __('text.programing_language') }}</h3>
                    <ul class="project__lang">
                        <li class="button long"><img src="{{ asset('icons/light/php.svg') }}" alt="PHP"
                                title="PHP" class="icon__medium">PHP</li>
                        <li class="button long"><img src="{{ asset('icons/light/laravel.svg') }}" alt="laravel"
                                title="laravel" class="icon__medium">Laravel</li>
                        <li class="button long"><img src="{{ asset('icons/light/react.svg') }}" alt="react"
                                title="react" class="icon__medium">React</li>
                        <li class="button long"><img src="{{ asset('icons/light/css.svg') }}" alt="css"
                                title="css" class="icon__medium">CSS</li>
                        <li class="button long"><img src="{{ asset('icons/light/html.svg') }}" alt="html"
                                title="html" class="icon__medium">HTML</li>
                        <li class="button long"><img src="{{ asset('icons/light/js.svg') }}" alt="js"
                                title="js" class="icon__medium">JavaScript</li>
                        <li class="button long"><img src="{{ asset('icons/light/mysql.svg') }}" alt="mysql"
                                title="mysql" class="icon__medium">MySql</li>
                    </ul>
                </div>
                <div>
                    <ul class="list">
                        <h3 class="title__small">Details</h3>
                        <li class="button long"><b>{{ __('text.status') }}:</b> {{ __('text.in_progress') }}</li>
                        <li class="button long"><b>{{ __('text.creator') }}:</b> Estarlyn Hernandez</li>
                        <li class="button long"><b>{{ __('text.repository') }}:</b> GitHub</li>
                        <li class="button long"><b>{{ __('text.hosting') }}:</b> Linux</li>
                        <li class="button long"><b>{{ __('text.base') }}:</b> React</li>
                        <li class="button long"><b>{{ __('text.base_language') }}:</b> JavaScript</li>
                        <li class="button long"><b>{{ __('text.created') }}:</b> {{ __('text.april') }} 2023</li>
                    </ul>
                </div>
                <div>
                    <h3 class="title__small">{{ __('text.info') }}</h3>
                    <p class="text">{{ __('projects.info_task') }}</p>
                </div>
            </section>
        </div>

    </div>
@endsection
