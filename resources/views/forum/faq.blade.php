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