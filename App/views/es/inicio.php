<!doctype html>
<html lang="<?= e($lang ?? env('LANG_DEFAULT', 'es')) ?>">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg') ?>">
    <link rel="canonical" href="<?= url('/') ?>">
    <title>Diseño</title>
    <meta name="description" content="Panaderia y pasteleria artesana con panes, bolleria y productos recien hechos.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= vite_tags($route['resources'] ?? null) ?>
  </head>
  <body>

    <?php require app_path('includes/es/nav.php'); ?>

    <header class="header01">
      <img class="header01__media" src="<?= asset('assets/img/test/office.avif') ?>" alt="Escena de Matrix">
      <div class="header01__content">
        
        <h1>Fabian Mongrut</h1>
        <p class="header01__text">Bienvenido a un lugar donde la imaginación no tiene límites y donde cada proyecto representa una nueva oportunidad para marcar la diferencia.</p>
        <a href="#showroom-recursos" class="boton">CLICK AQUI</a>
      </div>
    </header>

        <main>

            <section>
                <!-- Sección de Presentación de la empresa -->
                <!-- Art14 -->
                <article class="art14">
                <div class="content">
                    <h2>FRACEFAMOSA</h2>
                    <p>Me llamo Fabian Mongrut, soy Diseñador Gráfico, Diseñador Web y Diseñador Textil, con más de 20 años de experiencia en el sector gráfico y textil. A lo largo de mi trayectoria he desarrollado proyectos de identidad corporativa, diseño editorial, publicidad, desarrollo web y creación de estampados para la industria de la moda, combinando creatividad, innovación y un enfoque estratégico en cada proyecto.

                    Mi experiencia me permite transformar ideas en soluciones visuales funcionales y atractivas, adaptadas a las necesidades de cada cliente. Me apasiona crear diseños que comuniquen, inspiren y generen impacto, integrando las últimas tendencias con una sólida base técnica y un compromiso constante con la calidad y la excelencia.</p>
                    <img src="<?= asset('assets/img/test/inicio fra.avif') ?>" alt="diseño">
                </div>
                </article>
            </section>

            <section>
                
                <h2>ESTO ES LO QUE HAGO...</h2>

                <!-- Artículo 13-->
               
                <article class="art13">
                    <img
                        alt="" 
                        title=""
                        srcset="
                        <?= asset('assets/img/test/diseño3.avif') ?> 1800w,
                        <?= asset('assets/img/test/diseño2.avif') ?> 1200w
                        "
                        sizes="
                        (max-width:800px) 900px,
                        1500px
                        "
                        src="<?= asset('assets/img/test/diseño2.avif') ?>"          
                    >
                    <div>
                        <h3>DISEÑO GRÁFICO</h3>
                        <p>Un diseñador gráfico utiliza herramientas digitales y conocimientos de composición, color, tipografía y creatividad para crear piezas visuales que informen, inspiren o persuadan. Además de la estética, busca resolver problemas de comunicación y fortalecer la identidad de marcas, empresas e instituciones.</p>
                        <a href="#" class="boton">LEER MÁS</a>
                    </div>
                </article>

                <!-- Artículo 13 invertido -->
                <!-- servicio de restaurador -->
                <article class="art13 upsidedown">
                    <img
                        alt="" 
                        title=""
                        srcset="
                        <?= asset('assets/img/test/textil3.avif') ?> 1800w,
                        <?= asset('assets/img/test/textil2.avif') ?> 1200w
                        "
                        sizes="
                        (max-width:800px) 900px,
                        1500px
                        "
                        src="<?= asset('assets/img/test/textil2.avif') ?>"          
                    >
                    <div>
                        <h3>DISEÑO TEXTIL</h3>
                        <p>Su objetivo es combinar creatividad, funcionalidad y técnica para crear diseños originales que respondan a las tendencias del mercado, las necesidades de los clientes y los procesos de producción. Un diseñador textil trabaja con colores, formas, ilustraciones y materiales para desarrollar colecciones que aporten identidad y valor a una marca o producto.</p>
                        <a href="#" class="boton">LEER MÁS</a>
                    </div>
                </article>

                <article class="art13">
                    <img
                        alt="" 
                        title=""
                        srcset="
                        <?= asset('assets/img/test/web3.avif') ?> 1800w,
                        <?= asset('assets/img/test/web2.avif') ?> 1200w
                        "
                        sizes="
                        (max-width:800px) 900px,
                        1500px
                        "
                        src="<?= asset('assets/img/test/web2.avif') ?>"          
                    >
                    <div>
                        <h3>DISEÑO WEB</h3>
                        <p>Un diseñador web es el profesional encargado de crear la apariencia visual, la estructura y la experiencia de usuario de un sitio web. Su objetivo es desarrollar páginas atractivas, funcionales y fáciles de navegar, garantizando que la información sea clara y accesible desde cualquier dispositivo.</p>
                        <a href="#" class="boton">LEER MÁS</a>
                    </div>
                </article>

            </section>

            <section>
                <!-- artForm02 ajax -->
                <article class="artForm02">          

                    <h2>CONTACTA CON NOSOTROS</h2>
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
                                <span>943 123 123</span>
                            </a>
                            </li>
                            <li>
                            <a href="mailto:aranaz@webda.eus" target="_blank">
                                <img src="<?= asset('assets/img/icons/mail-solid.svg') ?>" alt="" title="">
                                <span>aranaz@webda.eus</span>
                            </a>
                            </li>
                            <li>
                            <a href="https://wa.me/628749350" target="_blank">
                                <img src="<?= asset('assets/img/icons/wa.svg') ?>" alt="" title="">
                                <span>628 749 350</span>
                            </a>
                            </li>
                            <li>
                            <a href="https://maps.app.goo.gl/Kh7rZM3WF1chSZSj7" target="_blank">
                                <img src="<?= asset('assets/img/icons/map-pin-solid.svg') ?>" alt="" title="">
                                <span>C/ Juan Fermín, Juan F. Gilisagasti Kalea, 4, 1º, 20018 Donostia / San Sebastián, Gipuzkoa</span>
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
