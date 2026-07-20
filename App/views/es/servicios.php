<!doctype html>
<html lang="<?= e($lang ?? env('LANG_DEFAULT', 'es')) ?>">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg') ?>">
    <link rel="canonical" href="<?= url('/productos') ?>">
    <title>Nuestros productos de panaderia y pasteleria</title>
    <meta name="description" content="Descubre nuestros productos de panaderia, pasteleria, bolleria y especialidades artesanas.">
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
                        <?= asset('assets/img/test/dummy_1800.avif') ?> 1800w,
                        <?= asset('assets/img/test/dummy_1200.avif') ?> 1200w
                        "
                        sizes="
                        (max-width:800px) 900px,
                        1500px
                        "
                        src="<?= asset('assets/img/test/dummy_1200.avif') ?>"          
                    >
                    <div>
                        <h3>DISEÑO WEB</h3>
                        <p>Matrix ipsum dolor sit amet, consectetur adipisicing elit. Zion libertatem defendit dum machinae mundum regunt.</p>
                        <p>Matrix ipsum dolor sit amet, consectetur adipisicing elit. Agent Smith erroribus reiciendis et systema simulacrum celat.</p>
                        <a href="#" class="boton">CTA</a>
                    </div>
                </article>

              <!-- Artículo 13 invertido -->
                <article class="art13 upsidedown">
                    <img
                        alt="" 
                        title=""
                        srcset="
                        <?= asset('assets/img/test/dummy_1800.avif') ?> 1800w,
                        <?= asset('assets/img/test/dummy_1200.avif') ?> 1200w
                        "
                        sizes="
                        (max-width:800px) 900px,
                        1500px
                        "
                        src="<?= asset('assets/img/test/dummy_1200.avif') ?>"          
                    >
                    <div>
                        <h3>DISEÑO Y ESTAMPADO TEXTIL</h3>
                        <p>Matrix ipsum dolor sit amet, consectetur adipisicing elit. Morpheus quaerat optionem, pillula rubra aperiam systema et realitatem.</p>
                        <p>Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo eligendi veritatis codicem et simulacrum.</p>
                        <a href="#" class="boton">CTA</a>
                    </div>
                </article>

        </section>
    </main>

    <?php require app_path('includes/es/footer.php'); ?>
</body>
</html>
