<style type="text/css">
body {
    background-color: #0D1B26;
    background-image: url('https://files.catbox.moe/retro-forum-bg.jpg');
    background-repeat: repeat;
    margin: 0;
    padding: 0;
    font-family: Verdana, Arial, Helvetica, sans-serif;
    font-size: 11px;
    color: #E0E0E0;
}
a { color: #88CCFF; text-decoration: none; }
a:hover { color: #FFFFFF; text-decoration: underline; }
#wrapper {
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    background-color: #0F1620;
    border-left: 1px solid #2A3C55;
    border-right: 1px solid #2A3C55;
    margin: 0 auto;
    width: 100%;
    box-sizing: border-box;
}
#header {
    background: #1A2A44 url('https://i.imgur.com/retro-header-gradient.png') repeat-x top;
    padding: 20px 3%;
    border-bottom: 2px solid #334466;
}
#logo {
    font-family: "Trebuchet MS", Arial, sans-serif;
    font-size: 36px;
    color: #AACCFF;
    letter-spacing: -1px;
    text-shadow: 2px 2px 4px #000;
    margin: 0;
}
#logo span { color: #FFDD88; }
.navbar {
    background: #223344;
    padding: 8px 3%;
    font-size: 11px;
    border-bottom: 1px solid #334455;
}
.navbar a {
    color: #BBDDFF;
    margin-right: 18px;
}
#pagebody {
    padding: 18px 3%;
    flex: 1 0 auto;
}
.breadcrumb {
    font-size: 12px;
    margin-bottom: 12px;
    color: #AACCFF;
}
.breadcrumb a { color: #88CCFF; }

/* Estilos para FAQ */
.faq-container {
    background: #142030;
    border: 1px solid #2A3C55;
    margin-bottom: 24px;
}
.faq-header {
    background: #1F2F4A;
    padding: 10px 16px;
    border-bottom: 1px solid #334466;
    font-weight: bold;
    color: #CCDDFF;
    font-size: 14px;
}
.faq-section {
    padding: 0 16px;
}
.faq-item {
    margin: 20px 0;
    padding-bottom: 16px;
    border-bottom: 1px dashed #334466;
}
.faq-question {
    font-weight: bold;
    color: #99DDFF;
    margin: 0 0 8px 0;
    font-size: 13px;
    background: #18263A;
    padding: 8px 12px;
    border-left: 4px solid #88CCFF;
}
.faq-answer {
    line-height: 1.5;
    padding: 0 12px;
    color: #E0E0E0;
}
.faq-answer p {
    margin: 8px 0;
}
.faq-answer ul, .faq-answer ol {
    margin: 8px 0 8px 24px;
    padding-left: 0;
}
.faq-answer li {
    margin-bottom: 6px;
}
.button {
    background: #334466;
    color: #CCDDFF;
    border: 1px solid #556688;
    padding: 4px 12px;
    font-size: 11px;
    cursor: pointer;
    margin: 0 4px;
}
.button:hover {
    background: #445577;
}
#copyright {
    text-align: center;
    padding: 24px 3%;
    color: #556677;
    font-size: 10px;
    border-top: 1px solid #2A3C55;
    margin-top: auto;
}
@media screen and (min-width: 1400px) {
    #wrapper {
        max-width: 1600px;
        margin: 0 auto;
    }
}
</style>
@extends('layouts.forum')

@section('title', 'Forum Categories - Forum')

@section('content')
    <div id="pagebody">
        <div class="breadcrumb">
            <a href="#">My New Forum</a> »
            <a href="#">FAQ</a>
        </div>

        <div class="faq-container">
            <div class="faq-header">
                Frequently Asked Questions - My New Forum
            </div>

            <div class="faq-section">

                <div class="faq-item">
                    <div class="faq-question">¿Cómo me registro en el foro?</div>
                    <div class="faq-answer">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">¿Por qué no puedo subir imágenes o archivos .swf?</div>
                    <div class="faq-answer">
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        <ul>
                            <li>Nemo enim ipsam voluptatem quia voluptas sit aspernatur</li>
                            <li>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet</li>
                            <li>Consectetur, adipisci velit, sed quia non numquam</li>
                        </ul>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">¿Se permiten links a sitios de flash games antiguos?</div>
                    <div class="faq-answer">
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                        <p>Similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">¿Cómo cambio mi avatar o firma?</div>
                    <div class="faq-answer">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">¿Qué pasó con Adobe Flash y los juegos del foro?</div>
                    <div class="faq-answer">
                        <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.</p>
                        <p>Omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">¿Puedo crear mi propio tema o skin para el foro?</div>
                    <div class="faq-answer">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi.</p>
                        <p>Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">¿Hay reglas específicas sobre el lenguaje o contenido NSFW?</div>
                    <div class="faq-answer">
                        <p>Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam.</p>
                        <p>In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor.</p>
                    </div>
                </div>

            </div>
        </div>

        <p style="text-align:center; margin:30px 0;">
            <input type="button" class="button" value="Contact Staff" />
            <input type="button" class="button" value="Back to Forums" />
        </p>
    </div>
@endsection