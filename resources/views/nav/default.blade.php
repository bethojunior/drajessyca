<header class="center header-nav">
    Estética avançada | Dermatologia | Nutrologia
</header>
<nav class="nav-extended">
    <div class="nav-wrapper mobile-only">
        <a href="#" class="brand-logo ">
            <img class="col s12 " src="{{ asset('assets/images/logo/j3.png') }}">
        </a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="sass.html">Contato</a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">

            <li><div class="user-view">
                    <div class="background">
                        <img src="{{ asset('assets/images/middle_ground.jpg') }}">
                    </div>
                    <a href="#!user"><img class="circle" src="{{ asset('assets/images/dra.png') }}"></a>
                    <a href="#!name"><span class="white-text name">Dra Jessyca Martins</span></a>
                    <a href="mailto:drajessycamartins@gmail.com"><span class="white-text email">Drajessycamartins@gmail.com</span></a>
                </div></li>
            <li><a href="/">Home</a></li>
            <li><div class="divider"></div></li>
            <li><a id="open-about">Sobre mim</a></li>
            <li><a id="open-agenda">Agenda</a></li>
            <li><a id="open-blog">Blog</a></li>
        </ul>
    </div>
    <div class="nav-content" id="nav-slide">
        <ul class="tabs tabs-transparent center">
            <li class="tab"><a class="tab-navigation active" href="#home">Home</a></li>
            <li class="tab"><a class="tab-navigation" href="#pageAbout">A médica</a></li>
            <li class="tab zindex">
                <img style="margin-top: -2vw" src="{{ asset('assets/images/logo/j3.png') }}">
            </li>
            <li class="tab"><a class="tab-navigation" id="go-blog" href="#pageBlog">Blog</a></li>
            <li class="tab"><a class="tab-navigation" href="#pageAgenda">Agenda</a></li>
        </ul>
    </div>
</nav>
<div id="home" class="tab-pages">
    @include('nav.home')
</div>
<div id="pageAbout" class="tab-pages">
    @include('nav.about')
</div>
<div id="pageAgenda" class="tab-pages">
    @include('nav.agenda')
</div>
<div id="pageBlog" class="tab-pages">
    @include('nav.blog')
</div>
