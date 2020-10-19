<header class="center header-nav">
    Estética avançada | Dermatologia | Nutrologia
</header>
<nav class="nav-extended">
    <div class="nav-wrapper mobile-only">
        <a href="#" class="brand-logo ">Logo</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="sass.html">Contato</a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
            <li><a href="/">Home</a></li>
            <li><a href="/">Sobre mim</a></li>
            <li><a href="/">Tratamentos</a></li>
            <li><a id="open-blog">Blog</a></li>
        </ul>
    </div>
    <div class="nav-content" id="nav-slide">
        <ul class="tabs tabs-transparent center">
            <li class="tab"><a class="tab-navigation active" href="#home">Home</a></li>
            <li class="tab"><a class="tab-navigation" href="#test2">Sobre mim</a></li>
            <li class="tab zindex">
                <img src="http://dratallitadermatologista.com.br/images/dra-tallita-logo-home.png">
            </li>
            <li class="tab"><a class="tab-navigation" href="#test3">Tratamentos</a></li>
            <li class="tab"><a class="tab-navigation" id="go-blog" href="#pageBlog">Blog</a></li>
        </ul>
    </div>
</nav>
<div id="home" class="tab-pages">
    @include('nav.home')
</div>
<div id="test2" class="tab-pages">Test 2</div>
<div id="test3" class="tab-pages">Test 3</div>
<div id="pageBlog" class="tab-pages">
    @include('nav.blog')
</div>
