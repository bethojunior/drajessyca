<!DOCTYPE HTML>
<html>
<head>
    <title>Dra Jessyca Martins</title>
    <meta charset="utf-8" />
    <meta name="theme-color" content="#5F4D94">
    <link rel="icon" href="{{ asset('assets/images/logo/me.jpg') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <noscript><link rel="stylesheet" href="{{ asset('css/noscript.css') }}" /></noscript>

    <meta name="description" content="Dra Jessyca Martins" />
    <meta property="og:title" content="Dra Jessyca Martins" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://drajessycamartins.madgic.com.br" />
    <meta property="og:image" content="https://drajessycamartins.madgic.com.br/assets/images/logo/me.jpg" />
    <meta property="og:description" content="Dra Jessyca Martins" />
    <meta property="og:site_name" content="Dra Jessyca Martins" />

</head>
<body class="is-preload">

<div id="wrapper">
    <header id="header">
        <div class="logo">
            <img style="    border-radius: 99vw;
    width: inherit;" src="{{ asset('assets/images/logo/me.jpg') }}" >
{{--            <span class="icon fa-gem"></span>--}}
        </div>
        <div class="content">
            <div class="inner">
                <h1 class="default-color">Dra Jessyca Martins</h1>
                <p style="">
                    Médica<br>
                    CREMEC 17858/ CRM PB 10409<br>
                    Estética avançada<br>
                    Dermatologia<br>
                    Nutrologia<br>
                </p>
            </div>
        </div>
        <nav>
            <ul>
                <li><a href="#intro">Incio</a></li>
                <li><a href="#about">Especialidades</a></li>
                <li><a href="#work">Agende</a></li>
                <li><a href="#blog">Blog</a></li>
                <li><a href="#contact">Contato</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main -->
    <div id="main">

        <!-- Intro -->
        <article id="intro">
            <h2 class="major">Inicio</h2>
            <span class="image main"><img src="images/pic01.jpg" alt="" /></span>
            <p>
                {{ $info->home }}
            </p>
        </article>

        <!-- Work -->
        <article id="work">
            <h2 class="major">Agendamentos</h2>
            <span class="image main"><img src="images/pic02.jpg" alt="" /></span>
            <p>
                <label>Local</label>
                <select id="local">
                    <option value="Juazeiro">Juazeiro</option>
                    <option value="Brejo Santo">Brejo Santo</option>
                </select>
            </p>
            <p>
                <label>Tipo de atendimento</label>
                <select id="type">
                    <option value="Dermatologia">Dermatologia</option>
                    <option type="Nutrologia">Nutrologia</option>
                </select>
            </p>
            <p>
                <label>Nome do paciente</label>
                <input id="name" type="text">
            </p>
            <p>
                <label>Contato</label>
                <input id="contactUser" type="text">
            </p>
            <p>
                <input id="schedule" type="button" value="Verificar disponibilidade" class="primary" />
            </p>

        </article>

        <!-- Blog -->
        <article id="blog">
            <h2 class="major">Blogs</h2>
            @foreach($blogs as $blog)
                <p>{{ $blog->title }}</p>
                <span class="image main"><img src="{{  url('storage/api/public').'/'.$blog->image }}" alt="" /></span>
                <label>{{ $blog->content }}</label>
                <hr>
            @endforeach

        </article>
        <!-- About -->
        <article id="about">
            <h2 class="major">Especialidades</h2>
            <span class="image main"><img src="images/pic03.jpg" alt="" /></span>
            <p>
                {{ $info->about }}
            </p>
        </article>

        <!-- Contact -->
        <article id="contact">
            <h2 class="major">Entre em contato</h2>
            <form method="post" action="#">
                <div class="fields">
                    <div class="field half">
                        <label for="name">Nome</label>
                        <input type="text" name="name" id="name" />
                    </div>
                    <div class="field half">
                        <label for="email">Contato</label>
                        <input type="text" name="email" id="email" />
                    </div>
                    <div class="field">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" rows="4"></textarea>
                    </div>
                </div>
                <ul class="actions">
                    <li><input type="submit" value="Enviar mensagem" class="primary" /></li>
                    <li><input type="reset" value="Apagar campos" /></li>
                </ul>
            </form>
            <ul class="icons">
                <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                <li><a target="_blank" href="https://www.instagram.com/dra.jessycamartins/" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                <li><a href="#" class="icon brands fa-whatsapp"><span class="label">Whats app</span></a></li>
            </ul>
        </article>


        <!-- Elements -->
        <article id="elements">
            <h2 class="major">Elements</h2>

            <section>
                <h3 class="major">Text</h3>
                <p>This is <b>bold</b> and this is <strong>strong</strong>. This is <i>italic</i> and this is <em>emphasized</em>.
                    This is <sup>superscript</sup> text and this is <sub>subscript</sub> text.
                    This is <u>underlined</u> and this is code: <code>for (;;) { ... }</code>. Finally, <a href="#">this is a link</a>.</p>
                <hr />
                <h2>Heading Level 2</h2>
                <h3>Heading Level 3</h3>
                <h4>Heading Level 4</h4>
                <h5>Heading Level 5</h5>
                <h6>Heading Level 6</h6>
                <hr />
                <h4>Blockquote</h4>
                <blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan faucibus. Vestibulum ante ipsum primis in faucibus lorem ipsum dolor sit amet nullam adipiscing eu felis.</blockquote>
                <h4>Preformatted</h4>
                <pre><code>i = 0;

while (!deck.isInOrder()) {
    print 'Iteration ' + i;
    deck.shuffle();
    i++;
}

print 'It took ' + i + ' iterations to sort the deck.';</code></pre>
            </section>

            <section>
                <h3 class="major">Lists</h3>

                <h4>Unordered</h4>
                <ul>
                    <li>Dolor pulvinar etiam.</li>
                    <li>Sagittis adipiscing.</li>
                    <li>Felis enim feugiat.</li>
                </ul>

                <h4>Alternate</h4>
                <ul class="alt">
                    <li>Dolor pulvinar etiam.</li>
                    <li>Sagittis adipiscing.</li>
                    <li>Felis enim feugiat.</li>
                </ul>

                <h4>Ordered</h4>
                <ol>
                    <li>Dolor pulvinar etiam.</li>
                    <li>Etiam vel felis viverra.</li>
                    <li>Felis enim feugiat.</li>
                    <li>Dolor pulvinar etiam.</li>
                    <li>Etiam vel felis lorem.</li>
                    <li>Felis enim et feugiat.</li>
                </ol>
                <h4>Icons</h4>
                <ul class="icons">
                    <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                    <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                    <li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
                </ul>

                <h4>Actions</h4>
                <ul class="actions">
                    <li><a href="#" class="button primary">Default</a></li>
                    <li><a href="#" class="button">Default</a></li>
                </ul>
                <ul class="actions stacked">
                    <li><a href="#" class="button primary">Default</a></li>
                    <li><a href="#" class="button">Default</a></li>
                </ul>
            </section>

            <section>
                <h3 class="major">Table</h3>
                <h4>Default</h4>
                <div class="table-wrapper">
                    <table>
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Price</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Item One</td>
                            <td>Ante turpis integer aliquet porttitor.</td>
                            <td>29.99</td>
                        </tr>
                        <tr>
                            <td>Item Two</td>
                            <td>Vis ac commodo adipiscing arcu aliquet.</td>
                            <td>19.99</td>
                        </tr>
                        <tr>
                            <td>Item Three</td>
                            <td> Morbi faucibus arcu accumsan lorem.</td>
                            <td>29.99</td>
                        </tr>
                        <tr>
                            <td>Item Four</td>
                            <td>Vitae integer tempus condimentum.</td>
                            <td>19.99</td>
                        </tr>
                        <tr>
                            <td>Item Five</td>
                            <td>Ante turpis integer aliquet porttitor.</td>
                            <td>29.99</td>
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="2"></td>
                            <td>100.00</td>
                        </tr>
                        </tfoot>
                    </table>
                </div>

                <h4>Alternate</h4>
                <div class="table-wrapper">
                    <table class="alt">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Price</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Item One</td>
                            <td>Ante turpis integer aliquet porttitor.</td>
                            <td>29.99</td>
                        </tr>
                        <tr>
                            <td>Item Two</td>
                            <td>Vis ac commodo adipiscing arcu aliquet.</td>
                            <td>19.99</td>
                        </tr>
                        <tr>
                            <td>Item Three</td>
                            <td> Morbi faucibus arcu accumsan lorem.</td>
                            <td>29.99</td>
                        </tr>
                        <tr>
                            <td>Item Four</td>
                            <td>Vitae integer tempus condimentum.</td>
                            <td>19.99</td>
                        </tr>
                        <tr>
                            <td>Item Five</td>
                            <td>Ante turpis integer aliquet porttitor.</td>
                            <td>29.99</td>
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="2"></td>
                            <td>100.00</td>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </section>

            <section>
                <h3 class="major">Buttons</h3>
                <ul class="actions">
                    <li><a href="#" class="button primary">Primary</a></li>
                    <li><a href="#" class="button">Default</a></li>
                </ul>
                <ul class="actions">
                    <li><a href="#" class="button">Default</a></li>
                    <li><a href="#" class="button small">Small</a></li>
                </ul>
                <ul class="actions">
                    <li><a href="#" class="button primary icon solid fa-download">Icon</a></li>
                    <li><a href="#" class="button icon solid fa-download">Icon</a></li>
                </ul>
                <ul class="actions">
                    <li><span class="button primary disabled">Disabled</span></li>
                    <li><span class="button disabled">Disabled</span></li>
                </ul>
            </section>

            <section>
                <h3 class="major">Form</h3>
                <form method="post" action="#">
                    <div class="fields">
                        <div class="field half">
                            <label for="demo-name">Name</label>
                            <input type="text" name="demo-name" id="demo-name" value="" placeholder="Jane Doe" />
                        </div>
                        <div class="field half">
                            <label for="demo-email">Email</label>
                            <input type="email" name="demo-email" id="demo-email" value="" placeholder="jane@untitled.tld" />
                        </div>
                        <div class="field">
                            <label for="demo-category">Category</label>
                            <select name="demo-category" id="demo-category">
                                <option value="">-</option>
                                <option value="1">Manufacturing</option>
                                <option value="1">Shipping</option>
                                <option value="1">Administration</option>
                                <option value="1">Human Resources</option>
                            </select>
                        </div>
                        <div class="field half">
                            <input type="radio" id="demo-priority-low" name="demo-priority" checked>
                            <label for="demo-priority-low">Low</label>
                        </div>
                        <div class="field half">
                            <input type="radio" id="demo-priority-high" name="demo-priority">
                            <label for="demo-priority-high">High</label>
                        </div>
                        <div class="field half">
                            <input type="checkbox" id="demo-copy" name="demo-copy">
                            <label for="demo-copy">Email me a copy</label>
                        </div>
                        <div class="field half">
                            <input type="checkbox" id="demo-human" name="demo-human" checked>
                            <label for="demo-human">Not a robot</label>
                        </div>
                        <div class="field">
                            <label for="demo-message">Message</label>
                            <textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
                        </div>
                    </div>
                    <ul class="actions">
                        <li><input type="submit" value="Send Message" class="primary" /></li>
                        <li><input type="reset" value="Reset" /></li>
                    </ul>
                </form>
            </section>

        </article>

    </div>

    <!-- Footer -->
    <footer id="footer">
        <p class="copyright default-color">&copy; Madgic. Design: <a href="https://madgic.com.br">Madgic</a>.</p>
    </footer>

</div>

<!-- BG -->
<div id="bg"></div>

<!-- Scripts -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/browser.min.js') }}"></script>
<script src="{{ asset('js/breakpoints.min.js') }}"></script>
<script src="{{ asset('js/util.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/utils/ElementProperty.js') }}"></script>
<script src="{{ asset('js/libs/sweetalertmin.js') }}"></script>



<script src="{{ asset('config/main.js') }}"></script>
<script src="{{ asset('js/utils/SwalCustom.js') }}"></script>
<script src="{{ asset('js/service/ConnectionServer.js') }}"></script>
<script src="{{ asset('js/controllers/Home/HomeController.js') }}"></script>
<script src="{{ asset('js/modules/home/init.js') }}"></script>

</body>
</html>
