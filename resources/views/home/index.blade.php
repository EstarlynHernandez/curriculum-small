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
                        <img class="contact__icons__img" src="icons/light/github.svg" alt="github" title='GitHub'>
                    </a>
                </li>
                <li class="conctact__icons--list">
                    <a class="contact__icons__link">
                        <img class="contact__icons__img" src="icons/light/linkedin.svg" alt="linkedin" title="LinkedIn">
                    </a>
                </li>
                <li class="conctact__icons--list">
                    <a class="contact__icons__link">
                        <img class="contact__icons__img" src="icons/light/mail.svg" alt="mail" title="E-Mail">
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
                <picture class="card--container">

                </picture>
                <picture class="card--container">

                </picture>
                <picture class="card--container">

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
                    <div class="frontEnd">
                        <h3 class="tecnologies__title">Front End</h3>
                        <p class="tecnologies__text ">HTML</p>
                        <p class="tecnologies__text ">CSS</p>
                        <p class="tecnologies__text ">JavaScript</p>
                        <p class="tecnologies__text">React.js</p>
                    </div>

                    <div class="backEnd">
                        <h3 class="tecnologies__title">Back End</h3>
                        <p class="tecnologies__text">PHP</p>
                        <p class="tecnologies__text">MySQL</p>
                        <p class="tecnologies__text">Laravel</p>
                        <p class="tecnologies__text">Symfony</p>
                    </div>
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

        {{-- more --}}
        <section class="more">
            {{-- contact --}}
            <div class="contact">
                <h2 class="contact__title">Contact</h2>
                <ul class="contact__icons">
                    <li class="conctact__icons--list">
                        <a href="https://github.com/EstarlynHernandez" class="contact__icons__link">
                            <img class="contact__icons__img" src="icons/light/github.svg" alt="github" title='GitHub'>
                        </a>
                    </li>
                    <li class="conctact__icons--list">
                        <a class="contact__icons__link">
                            <img class="contact__icons__img" src="icons/light/linkedin.svg" alt="linkedin" title="LinkedIn">
                        </a>
                    </li>
                    <li class="conctact__icons--list">
                        <a class="contact__icons__link">
                            <img class="contact__icons__img" src="icons/light/mail.svg" alt="mail" title="E-Mail">
                        </a>
                    </li>
                </ul>

                <a href="#" class="more__link">More Pages</a>
            </div>

            {{-- pages --}}
            <div class="pages">
                <h2 class="pages__title">Pages</h2>
                <div class="cards">
                    <picture class="card">

                    </picture>
                    <picture class="card">

                    </picture>
                </div>
            </div>
        </section>
    </main>
@endsection
