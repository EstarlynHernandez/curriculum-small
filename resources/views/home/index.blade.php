@extends('../base')

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
                    <a href="https://estarlyn.com/" target="__blank"><img src="{{ asset('img/curriculum-small.jpeg') }}" alt="curriculum-small" title="This Page"></a>
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
                    I am a web developer who specializes in the front end. I know HTML, CSS, JavaScript, and React.
                    I have an A2 English level.
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
                <p class="info__text about__text">I’m Estarlyn. I’m 24 years old. I study by myself and I continue to study
                    other web
                    technologies and game development.</p>
            </div>
        </section>

        {{-- divisor --}}
        <div class="divisor"></div>

        {{-- cards --}}
        <section class="pages">
            <h2 class="pages__title">Pages</h2>
            <section class="cards">
                <picture class="card">
                    <img src="{{ asset('img/curriculum-small.jpeg') }}" alt="curriculum-small" title="This Page">
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

            <a href="#" class="more__link">More Pages</a>
        </article>

        {{-- pages --}}
        <article class="pages--more">
            <h2 class="pages__title--more">Pages</h2>
            <div class="cards--footer">
                <picture class="card card--extra">

                </picture>
            </div>
        </article>

    </section>
    <footer class="reserved">
        <p class="reserved__text">Estarlyn.com is a page reserved for my job info and my personal projects.</p>
        <p class="reserved__text">This page is continuously updated since the first day of March 2023.</p>
    </footer>
@endsection
