<!doctype html>
<html lang="<?= e($lang ?? env('LANG_DEFAULT', 'es')) ?>">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg') ?>">
    <link rel="canonical" href="<?= url('/producto1') ?>">
    <title>Producto 1</title>
    <meta name="description" content="Detalle del producto 1 de nuestra panaderia.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= vite_tags($route['resources'] ?? null) ?>
  </head>
  <body>
    <?php require app_path('includes/es/nav.php'); ?>

      <main>
          <section>

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
                        <h3>DISEÑO GRÁFICO</h3>
                        <p>Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo eligendi veritatis codicem et simulacrum. Morpheus quaerat optionem, pillula rubra aperiam systema et realitatem.</p>
                        <p>Matrix ipsum dolor sit amet, consectetur adipisicing elit. Agent Smith erroribus reiciendis et Zion libertatem defendit.</p>
                        <a href="#" class="boton">CTA</a>
                    </div>
            </article>

          </section>

      </main>

    <?php require app_path('includes/es/footer.php'); ?>
</body>
</html>
