<!doctype html>
<html lang="<?= e($lang ?? env('LANG_DEFAULT', 'es')) ?>">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg') ?>">
    <link rel="canonical" href="<?= url('/nortzuk-gara') ?>">
    <title>Nor naiz ni?</title>
    <meta name="description" content="Diseñador grafico preparado para lo que desee.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require app_path('includes/cookielad.php'); ?>
    <?= vite_tags($route['resources'] ?? null) ?>
  </head>
  <body>
    <?php require app_path('includes/eu/nav.php'); ?>

     <main>
      <section>

            <article class="art03">
              <h3>FABIAN C. MONGRUT</h3>
                <p>Fabián Mongrut naiz, diseinatzaile grafikoa, komunikazio bisualaren eta diseinuaren mundu zirraragarrian 20 urteko esperientzia duena. Nire ibilbide profesionalean zehar, hainbat diseinu arlotan proiektuak garatzeko aukera izan dut, sormena, estrategia, funtzionaltasuna eta identitate estetiko sendoa konbinatzen dituzten irtenbide bisualak sortuz.

                <p>Nire esperientziak identitate bisualak, marka, pieza grafikoak, komunikazio digitala eta sektore ezberdinetan aplikatutako diseinu proiektuak sortzen lan egiteko aukera eman dit. Proiektu bakoitzak aukera bat da niretzat ideiak irudi, kontzeptu eta esperientzia bisual bihurtzeko, jendearekin komunikatzeko eta konektatzeko gai direnak.</p>

                <p>Nire lan filosofia sormenean, xehetasunei arreta eta adierazpen forma berrien etengabeko bilaketan oinarritzen da. Esperientziak diseinuaren ikuspegi zabala eman dit, beti mantenduz nire jakin-mina eta ikasten eta eboluzionatzen jarraitzeko gogoa.</p>

                <p>Gaur egun, lehen eguneko grina berarekin jarraitzen dut proiektuak garatzen, nire esperientzia eta ezagutza eskainiz diseinu originalak, profesionalak eta funtzionalak sortzeko, beren identitate bereziarekin.</p></p>
        
              <img src="<?= asset('assets/img/test/soy.avif') ?>" alt="perfil" title="">
            </article>

            <!-- Artículo 06 -->
            <article class="art06">
              <div>
                <h3>ZERGAITIK DISEINATZEN DUGU?</h3>
                  <p>Ideiak irtenbide praktiko eta funtzional bihurtzeko diseinatzen dugu. Gure bizi-kalitatea hobetzea, mezuak argi komunikatzea, ingurunearekin dugun interakzioa optimizatzea eta behar espezifikoak asetzea bilatzen duen prozesu sortzaile eta estrategikoa da, pertsonalak, sozialak edo komertzialak izan.</p>
                <a href="#" title="" class="boton">GORANTZ JOAN</a>
              </div>
            </article>
      
            <article class="art11">
                
                <div>
                    <img src="<?= asset('assets/img/test/1901 azul 1.avif') ?>" alt="diseños1">
                </div>

                <div>
                    <img src="<?= asset('assets/img/test/mural 1.avif') ?>" alt="diseños1">
                </div>

                <div>
                    <img src="<?= asset('assets/img/test/logosok.avif') ?>" alt="diseños1">
                </div>

                <div>
                    <img src="<?= asset('assets/img/test/estampado 1.avif') ?>" alt="diseños1">
                </div>

                <div>
                    <img src="<?= asset('assets/img/test/tag.avif') ?>" alt="diseños1">
                </div>

                <div>
                    <img src="<?= asset('assets/img/test/logokids.avif') ?>" alt="diseños1">
                </div>

                <div>
                    <img src="<?= asset('assets/img/test/calat33.avif') ?>" alt="diseños1">
                </div>

                <div>
                    <img src="<?= asset('assets/img/test/fra.avif') ?>" alt="diseños1">
                </div>

            </article>

           
            <article class="art09">
              <h3>DISEINU KONTZEPTUAK</h3>
              <div class="art09-content">
                <div class="contenedor-lista">
                  <h4>ºDiseinu bat funtzionala izan dadin laguntzen du.</h4>
                  <ul>
                    <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title=""><span>Oreka.</span></li>
                    <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title=""><span>Kontrastea.</span></li>
                    <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title=""><span>Azpimarra.</span></li>
                    <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title=""><span>Proportzioa.</span></li>
                    <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title=""><span>Hierarkia bisuala.</span></li>
                  </ul>
                </div>
                <div class="contenedor-lista">
                  <h4>º Nahi den mezua komunikatzen du.</h4>
                  <ul>
                    <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title=""><span>Tipografia.</span></li>
                    <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title=""><span>Funtzionaltasuna.</span></li>
                    <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title=""><span>Lerrokatzea.</span></li>
                    <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title=""><span>Unitatea.</span></li>
                    <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title=""><span>Kolorea.</span></li>
                  </ul>
                </div>
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
                    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d27797.709152200277!2d-2.019280692396988!3d43.29778607870138!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sAv.%20Carlos%20I%2C%20Edificio%2015%2C%20Piso%206-%22B%22%2C%2020011%20Donostia%20%2F%20San%20Sebasti%C3%A1n%2C%20Gipuzkoa!5e1!3m2!1ses!2ses!4v1784719392038!5m2!1ses!2ses" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
                    </div>
                </div>
            </article>

         
        </section>
    </main>

    

    <?php require app_path('includes/eu/footer.php'); ?>
</body>
</html>
