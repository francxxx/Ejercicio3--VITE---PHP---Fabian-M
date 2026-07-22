<?php
// Listado compartido por el nav y el footer en castellano. Si se crea una
// página nueva, su href debe coincidir con una ruta de App/config/config.php.
// $idSubmenu llega desde nav.php o footer.php para evitar IDs HTML duplicados.
?>
<ul class="enlaces01">
  <li class="enlaces01__item">
    <a class="enlaces01__link" href="/es">
      <img class="enlaces01__icon" src="<?= asset('assets/img/icons/casa.png') ?>" alt="">
      <span>Inicio</span>
    </a>
  </li>

  <li class="enlaces01__item">
    <a class="enlaces01__link" href="/es/mis-proyectos">
      <img class="enlaces01__icon" src="<?= asset('assets/img/icons/yo.png') ?>" alt="">
      <span>Quien soy</span>
    </a>
  </li>

  <!-- Este item contiene un segundo nivel de navegación. -->
  <li class="enlaces01__item enlaces01__item--hasSubmenu" data-nav01-submenu-item>
    <div class="enlaces01__submenuHeader">
      <a class="enlaces01__link enlaces01__link--parent" href="/es/mis-servicios">
        <img class="enlaces01__icon" src="<?= asset('assets/img/icons/services.png') ?>" alt="">
        <span>Mis servicios</span>
      </a>
      
    </div>
  </li>

  <li class="enlaces01__item">
    <a class="enlaces01__link" href="/es/contacto">
      <img class="enlaces01__icon" src="<?= asset('assets/img/icons/contac.png') ?>" alt="">
      <span>Contacto</span>
    </a>
  </li>

   <li class="enlaces01__item">
    <a class="enlaces01__link" href="/showroom">
      <img class="enlaces01__icon" src="<?= asset('assets/img/icons/grid.svg') ?>" alt="">
      <span>Showroom</span>
    </a>
  </li> 
  
</ul>
