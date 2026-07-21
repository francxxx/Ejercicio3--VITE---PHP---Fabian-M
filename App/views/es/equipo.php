<!doctype html>
<html lang="<?= e($lang ?? env('LANG_DEFAULT', 'es')) ?>">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg') ?>">
    <link rel="canonical" href="<?= url('/quienes-somos') ?>">
    <title>quien soy</title>
    <meta name="description" content="Conoce al equipo de panaderos y pasteleros que trabaja cada dia en nuestro obrador.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= vite_tags($route['resources'] ?? null) ?>
  </head>
  <body>
    <?php require app_path('includes/es/nav.php'); ?>

    <main>
      <section>
          <article class="art03">
            <h3>FABIAN C. MONGRUT</h3>
              <p>Soy Fabián Mongrut, diseñador gráfico con 20 años de experiencia en el apasionante mundo de la comunicación visual y el diseño. A lo largo de mi trayectoria profesional he tenido la oportunidad de desarrollar proyectos en diferentes áreas del diseño, creando soluciones visuales que combinan creatividad, estrategia, funcionalidad y una sólida identidad estética.

              <p>Mi experiencia me ha permitido trabajar en la creación de identidades visuales, branding, piezas gráficas, comunicación digital y proyectos de diseño aplicados a diferentes sectores. Cada proyecto representa para mí una oportunidad de transformar ideas en imágenes, conceptos y experiencias visuales capaces de comunicar y conectar con las personas.</p>

              <p>Mi filosofía de trabajo se basa en la creatividad, la atención al detalle y la búsqueda constante de nuevas formas de expresión. La experiencia me ha proporcionado una visión amplia del diseño, pero manteniendo siempre la curiosidad y las ganas de seguir aprendiendo y evolucionando.</p>

              <p>Hoy continúo desarrollando proyectos con la misma pasión del primer día, aportando mi experiencia y conocimiento para crear diseños originales, profesionales, funcionales y con una identidad propia.</p>
      
            <img src="<?= asset('assets/img/test/soy.avif') ?>" alt="perfil" title="">
          </article>

    <!-- Artículo 04 -->
    <article class="art04">
      <h3>Artículo 04</h3>
      <span class="ralla"></span>
      <div class="contenedor-fichas">
        <div class="ficha"><h4>Matrix ipsum 01</h4><img src="<?= asset('assets/img/test/dummy01.avif') ?>" alt="Escena de Matrix" title=""><p>Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo eligendi veritatis codicem et simulacrum.</p><span class="ralla"></span></div>
        <div class="ficha"><h4>Matrix ipsum 02</h4><img src="<?= asset('assets/img/test/dummy02.avif') ?>" alt="Escena de Matrix" title=""><p>Matrix ipsum dolor sit amet, consectetur adipisicing elit. Morpheus quaerat optionem et realitatem.</p><span class="ralla"></span></div>
        <div class="ficha"><h4>Matrix ipsum 03</h4><img src="<?= asset('assets/img/test/dummy03.avif') ?>" alt="Escena de Matrix" title=""><p>Matrix ipsum dolor sit amet, consectetur adipisicing elit. Agent Smith erroribus reiciendis et systema.</p><span class="ralla"></span></div>
        <div class="ficha"><h4>Matrix ipsum 04</h4><img src="<?= asset('assets/img/test/dummy04.avif') ?>" alt="Escena de Matrix" title=""><p>Matrix ipsum dolor sit amet, consectetur adipisicing elit. Zion libertatem defendit contra machinas.</p><span class="ralla"></span></div>
      </div>
    </article>

    <!-- Artículo 05 -->
    <article class="art05">
      <h3>Artículo 05</h3>
      <p>Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo eligendi veritatis codicem et simulacrum.</p>
      <p>Matrix ipsum dolor sit amet, consectetur adipisicing elit. Morpheus quaerat optionem, pillula rubra aperiam systema et realitatem.</p>
      <a href="" class="boton">CTA</a>
    </article>

    <!-- Artículo 06 -->
    <article class="art06">
      <div>
        <h3>Artículo 06</h3>
        <p>Matrix ipsum dolor sit amet, consectetur adipisicing elit. Agent Smith erroribus reiciendis, Zion libertatem defendit dum machinae mundum regunt.</p>
        <a href="#" title="" class="boton">CTA</a>
      </div>
    </article>

    <!-- Artículo 09 -->
    <article class="art09">
      <h3>Artículo 09</h3>
      <div class="art09-content">
        <div class="contenedor-lista">
          <h4>Matrix ipsum columna 01</h4>
          <ul>
            <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title=""><span>Matrix ipsum: pillula rubra.</span></li>
            <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title=""><span>Matrix ipsum: codex revelatus.</span></li>
            <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title=""><span>Matrix ipsum: Zion vigilat.</span></li>
            <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title=""><span>Matrix ipsum: Neo eligendi.</span></li>
            <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title=""><span>Matrix ipsum: machinae quaerunt.</span></li>
          </ul>
        </div>
        <div class="contenedor-lista">
          <h4>Matrix ipsum columna 02</h4>
          <ul>
            <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title=""><span>Matrix ipsum: simulacrum cadit.</span></li>
            <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title=""><span>Matrix ipsum: Morpheus respondet.</span></li>
            <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title=""><span>Matrix ipsum: Trinity navigat.</span></li>
            <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title=""><span>Matrix ipsum: Agent Smith advenit.</span></li>
            <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title=""><span>Matrix ipsum: realitas aperitur.</span></li>
          </ul>
        </div>
      </div>
    </article>

    <!-- Artículo 10 -->
    <article class="art10">
      <h3>Artículo 10</h3>
      <p>Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo eligendi veritatis codicem et simulacrum. Morpheus quaerat optionem, pillula rubra aperiam systema et realitatem.</p>
      <div class="matrix-items">
        <div class="ficha"><img src="<?= asset('assets/img/icons/home-solid.svg') ?>" alt="" title=""><h4 class="sub-header">Matrix ipsum 01</h4><p>Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo eligendi veritatis codicem.</p></div>
        <div class="ficha"><img src="<?= asset('assets/img/icons/garages.svg') ?>" alt="" title=""><h4 class="sub-header">Matrix ipsum 02</h4><p>Matrix ipsum dolor sit amet, consectetur adipisicing elit. Morpheus quaerat optionem.</p></div>
        <div class="ficha"><img src="<?= asset('assets/img/icons/furniture.svg') ?>" alt="" title=""><h4 class="sub-header">Matrix ipsum 03</h4><p>Matrix ipsum dolor sit amet, consectetur adipisicing elit. Pillula rubra aperiam systema.</p></div>
        <div class="ficha"><img src="<?= asset('assets/img/icons/paint-tool.svg') ?>" alt="" title=""><h4 class="sub-header">Matrix ipsum 04</h4><p>Matrix ipsum dolor sit amet, consectetur adipisicing elit. Agent Smith erroribus reiciendis.</p></div>
        <div class="ficha"><img src="<?= asset('assets/img/icons/tools-power-drill-sharp.svg') ?>" alt="" title=""><h4 class="sub-header">Matrix ipsum 05</h4><p>Matrix ipsum dolor sit amet, consectetur adipisicing elit. Zion libertatem defendit.</p></div>
        <div class="ficha"><img src="<?= asset('assets/img/icons/stairs-arch.svg') ?>" alt="" title=""><h4 class="sub-header">Matrix ipsum 06</h4><p>Matrix ipsum dolor sit amet, consectetur adipisicing elit. Machinae mundum regunt.</p></div>
        <div class="ficha"><img src="<?= asset('assets/img/icons/business.svg') ?>" alt="" title=""><h4 class="sub-header">Matrix ipsum 07</h4><p>Matrix ipsum dolor sit amet, consectetur adipisicing elit. Simulacrum veritatem celat.</p></div>
        <div class="ficha"><img src="<?= asset('assets/img/icons/house-check-fill.svg') ?>" alt="" title=""><h4 class="sub-header">Matrix ipsum 08</h4><p>Matrix ipsum dolor sit amet, consectetur adipisicing elit. Codex realitatem mutat.</p></div>
        <div class="ficha"><img src="<?= asset('assets/img/icons/thumbs-up-outline.svg') ?>" alt="" title=""><h4 class="sub-header">Matrix ipsum 09</h4><p>Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo systema transcendit.</p></div>
      </div>
    </article>


      </section>
    </main>
    

    

    <?php require app_path('includes/es/footer.php'); ?>
</body>
</html>
