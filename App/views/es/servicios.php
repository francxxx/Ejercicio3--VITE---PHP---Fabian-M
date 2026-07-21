<!doctype html>
<html lang="<?= e($lang ?? env('LANG_DEFAULT', 'es')) ?>">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg') ?>">
    <link rel="canonical" href="<?= url('/productos') ?>">
    <title>servicios</title>
    <meta name="description" content="Descubre nuestros servicios que tenemos para ti.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= vite_tags($route['resources'] ?? null) ?>
  </head>
  <body>
    <?php require app_path('includes/es/nav.php'); ?>

        <main>
            <section>


                <h2>SERVICIOS</h2>
                <!-- Artículo 13-->
                <article class="art13">
                        <img
                            alt="" 
                            title=""
                            srcset="
                            <?= asset('assets/img/test/dg1.avif') ?> 1800w,
                            <?= asset('assets/img/test/dg.avif') ?> 1200w
                            "
                            sizes="
                            (max-width:800px) 900px,
                            1500px
                            "
                            src="<?= asset('assets/img/test/dg2.avif') ?>"          
                        >
                        <div>
                            <h3>DISEÑO GRÁFICO</h3>
                            <p>Un diseñador gráfico con 20 años de experiencia es un profesional con una amplia trayectoria en el desarrollo de conceptos visuales, identidad corporativa, publicidad, diseño editorial, packaging y comunicación visual.

                            A lo largo de su carrera ha adquirido un profundo conocimiento de las herramientas, técnicas y procesos creativos del diseño, combinando experiencia, creatividad y capacidad de adaptación a las nuevas tendencias y tecnologías. Su trabajo no consiste únicamente en crear imágenes atractivas, sino en comunicar ideas, transmitir emociones y resolver visualmente las necesidades de cada proyecto.

                            Un diseñador gráfico con esta trayectoria representa la combinación entre conocimiento, creatividad, evolución y pasión por el diseño, convirtiendo cada proyecto en una oportunidad para comunicar de manera efectiva y dejar una huella visual.</p>
                            
                            <a href="#" class="boton"></a>
                        </div>
                </article>

              <!-- Artículo 13 invertido -->
                <article class="art13 upsidedown">
                    <img
                        alt="" 
                        title=""
                        srcset="
                        <?= asset('assets/img/test/branding1.avif') ?> 1800w,
                        <?= asset('assets/img/test/branding2.avif') ?> 1200w
                        "
                        sizes="
                        (max-width:800px) 900px,
                        1500px
                        "
                        src="<?= asset('assets/img/test/branding3.avif') ?>"          
                    >
                    <div>
                        <h3>BRANDING E IDENTIDAD VISUAL</h3>
                        <p>El branding y la identidad visual son elementos fundamentales para construir la personalidad y el reconocimiento de una marca. El branding define la esencia, los valores y la forma en que una empresa quiere conectar con su público, mientras que la identidad visual transforma esa esencia en elementos gráficos como el logotipo, los colores, la tipografía y el estilo visual.

                        Una identidad visual bien desarrollada permite transmitir profesionalidad, coherencia y confianza, logrando que una marca sea fácilmente reconocible y memorable. A través del diseño, cada elemento visual comunica quién es la marca y qué la hace diferente.</p>
                        <a href="#" class="boton"></a>
                    </div>
                </article>

              <!-- Artículo 13 -->
                <article class="art13">
                    <img
                        alt="" 
                        title=""
                        srcset="
                        <?= asset('assets/img/test/web.avif') ?> 1800w,
                        <?= asset('assets/img/test/web.avif') ?> 1200w
                        "
                        sizes="
                        (max-width:800px) 900px,
                        1500px
                        "
                        src="<?= asset('assets/img/test/web.avif') ?>"          
                    >
                    <div>
                        <h3>DISEÑO WEB</h3>
                        <p>El diseño web es la disciplina encargada de planificar, crear y organizar la apariencia y el funcionamiento visual de un sitio web. Su objetivo es ofrecer una experiencia atractiva, intuitiva y accesible para los usuarios, combinando aspectos como la distribución de los elementos, la tipografía, los colores, las imágenes y la navegación. Un buen diseño web no solo mejora la estética de una página, sino que también facilita el acceso a la información, fortalece la identidad de una marca y contribuye a alcanzar los objetivos del sitio, ya sea informar, vender productos o prestar servicios.</p>
                         <a href="#" class="boton"></a>
                    </div>
                </article>

              <!-- Artículo 13 invertido -->
                <article class="art13 upsidedown">
                    <img
                        alt="" 
                        title=""
                        srcset="
                        <?= asset('assets/img/test/textil.avif') ?> 1800w,
                        <?= asset('assets/img/test/textil.avif') ?> 1200w
                        "
                        sizes="
                        (max-width:800px) 900px,
                        1500px
                        "
                        src="<?= asset('assets/img/test/textil.avif') ?>"          
                    >
                    <div>
                        <h3>DISEÑO Y ESTAMPADO TEXTIL</h3>
                        <p>El diseño textil es una disciplina creativa que se enfoca en la creación de estampados, tejidos, colores y texturas para la fabricación de telas utilizadas en la moda, la decoración y otros productos. Combina conocimientos de arte, diseño y tecnología para desarrollar materiales que sean tanto funcionales como estéticamente atractivos. Además de aportar identidad y valor a los productos, el diseño textil actualmente incorpora prácticas sostenibles e innovaciones que buscan reducir el impacto ambiental de la industria.</p>
                        <a href="#" class="boton"></a>
                    </div>
                </article>

                    <h2>CONTACTA con NOSOTROS</h2>
                    <!-- artForm02 ajax -->
                <article class="artForm02">          
                    <h3>ESCRIBENOS</h3>
                    <div>
                        <div class="contenedor-form">
                        
                        <img src="<?= asset('assets/img/icons/mail-solid.svg') ?>" alt="">
                                        

                        <!-- MODAL QUE SALE CUANDO SE ENVÍA EL FORM CON ÉXITO -->
                        <div id="modal_envio">
                            <!-- nuestro modal con html y css -->
                            <h3 id="h3_modal_envio">Matrix ipsum modal</h3>
                            <p id="p_modal_envio">Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo eligendi veritatis codicem et simulacrum.</p>
                            <div class="boton" id="boton_modal_envio">Escribir otra consulta</div>
                        </div>

                        <form id="idForAjax" action="/app/artForm02" method="post">
                            
                            <p class="error" id="errorForm02"></p>

                            <!-- nombre -->
                            <label for="nombreAjax">Nombre *</label>
                            <input type="text" id="nombreAjax" name="nombre" placeholder="Escribe aquí tu nombre *">

                            <!-- teléfono -->
                            <label for="telefonoAjax">Teléfono *</label>
                            <input type="tel" id="telefonoAjax" name="telefono" placeholder="Escribe aquí tu teléfono *">

                            <!-- Correo -->
                            <label for="emailAjax">Correo Electrónico</label>
                            <input type="email" id="emailAjax" name="email" placeholder="Escribe aquí tu correo electrónico">

                            <!-- Mensaje -->
                            <label for="mensajeAjax">Escribe tu mensaje</label>
                            <textarea name="mensaje" id="mensajeAjax" placeholder="Escribe aquí tu mensaje"></textarea>

                            <!-- términos -->
                            <div class="horizontal">
                            <label for="terminosAjax">Aceptar términos y condiciones de privacidad</label>
                            <input type="checkbox" name="terminos" id="terminosAjax">
                            </div>
                            

                            <!-- captcha -->
                            <label for="respuesta">Resuelve</label>
                            <div class="horizontal">
                            <span id="num1ajax"></span>
                            <span id="operadorajax"></span>
                            <span id="num2ajax"></span>
                            <input type="text" name="respUser" id="respuestaajax" placeholder="Respuesta" autocomplete="off">
                            <input type="hidden" name="respSystem" id="respSystemajax" value="">
                            </div>

                            <input type="hidden" name="url" value="<?= e($url) ?>">
                            <input type="hidden" name="lang" value="<?= e($lang) ?>">

                            <input type="submit" class="boton" value="Enviar" id="botonEnviarAjax">
                        </form>
                        
                        <div class="moduloLoader01" id="moduloLoader01">
                            <!-- <svg version="1.1" id="L2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                            <circle fill="none" stroke="#000000" stroke-width="4" stroke-miterlimit="10" cx="50" cy="50" r="48"/>
                            <line fill="none" stroke-linecap="round" stroke="#000000" stroke-width="4" stroke-miterlimit="10" x1="50" y1="50" x2="85" y2="50.5">
                                <animateTransform 
                                    attributeName="transform" 
                                    dur="2s"
                                    type="rotate"
                                    from="0 50 50"
                                    to="360 50 50"
                                    repeatCount="indefinite" />
                            </line>
                            <line fill="none" stroke-linecap="round" stroke="#000000" stroke-width="4" stroke-miterlimit="10" x1="50" y1="50" x2="49.5" y2="74">
                                <animateTransform 
                                    attributeName="transform" 
                                    dur="15s"
                                    type="rotate"
                                    from="0 50 50"
                                    to="360 50 50"
                                    repeatCount="indefinite" />
                            </line>
                            </svg> -->
                            <svg version="1.1" id="L7" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                            <path fill="#000000" d="M31.6,3.5C5.9,13.6-6.6,42.7,3.5,68.4c10.1,25.7,39.2,38.3,64.9,28.1l-3.1-7.9c-21.3,8.4-45.4-2-53.8-23.3
                                c-8.4-21.3,2-45.4,23.3-53.8L31.6,3.5z">
                                    <animateTransform 
                                    attributeName="transform" 
                                    attributeType="XML" 
                                    type="rotate"
                                    dur="2s" 
                                    from="0 50 50"
                                    to="360 50 50" 
                                    repeatCount="indefinite" />
                                </path>
                            <path fill="#000000" d="M42.3,39.6c5.7-4.3,13.9-3.1,18.1,2.7c4.3,5.7,3.1,13.9-2.7,18.1l4.1,5.5c8.8-6.5,10.6-19,4.1-27.7
                                c-6.5-8.8-19-10.6-27.7-4.1L42.3,39.6z">
                                    <animateTransform 
                                    attributeName="transform" 
                                    attributeType="XML" 
                                    type="rotate"
                                    dur="1s" 
                                    from="0 50 50"
                                    to="-360 50 50" 
                                    repeatCount="indefinite" />
                                </path>
                            <path fill="#000000" d="M82,35.7C74.1,18,53.4,10.1,35.7,18S10.1,46.6,18,64.3l7.6-3.4c-6-13.5,0-29.3,13.5-35.3s29.3,0,35.3,13.5
                                L82,35.7z">
                                    <animateTransform 
                                    attributeName="transform" 
                                    attributeType="XML" 
                                    type="rotate"
                                    dur="2s" 
                                    from="0 50 50"
                                    to="360 50 50" 
                                    repeatCount="indefinite" />
                                </path>
                            </svg>
                        </div>

                        </div>
                        <div class="contenedor-info">
                        <ul>
                            <li>
                            <a href="tel:+34943123123" target="_blank">
                                <img src="<?= asset('assets/img/icons/tel.svg') ?>" alt="" title="">
                                <span>688 781 514</span>
                            </a>
                            </li>
                            <li>
                            <a href="mailto:aranaz@webda.eus" target="_blank">
                                <img src="<?= asset('assets/img/icons/mail-solid.svg') ?>" alt="" title="">
                                <span>francocedano35@gmail.com</span>
                            </a>
                            </li>
                            <li>
                            <a href="https://wa.me/628749350" target="_blank">
                                <img src="<?= asset('assets/img/icons/wa.svg') ?>" alt="" title="">
                                <span>688 781 514</span>
                            </a>
                            </li>
                            <li>
                            <a href="https://maps.app.goo.gl/Kh7rZM3WF1chSZSj7" target="_blank">
                                <img src="<?= asset('assets/img/icons/map-pin-solid.svg') ?>" alt="" title="">
                                <span>Av. Carlos I, Edificio 15, Piso 6-"B", 20011 Donostia / San Sebastián, Gipuzkoa</span>
                            </a>
                            </li>
                        </ul>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1886.901188915529!2d-2.0047191655624914!3d43.29790730427824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd51b013f0513629%3A0x57e4ff3311f619d9!2s%C3%81rea%20Escuela%20de%20Dise%C3%B1o%20y%20Nuevas%20Tecnolog%C3%ADas!5e1!3m2!1ses!2ses!4v1768584957042!5m2!1ses!2ses" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </article>

                
            </section>
        </main>

    <?php require app_path('includes/es/footer.php'); ?>
</body>
</html>
