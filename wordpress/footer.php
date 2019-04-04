<div class="bg-black">
  <div class="container">
    <div class="row py-lg-5 py-4"></div>
    <div class="row">
      <div class="col-lg-4 col-12 pb-lg-0 pb-4">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-5 col-12 d-flex align-items-center">
            <img src="<?php echo get_bloginfo('template_directory'); ?>/img/logo.svg" class="ml-sm-auto ml-lg-0 ml-auto mr-auto mr-sm-0" alt="Logo">
          </div>
          <div class="col-lg-8 col-md-6 col-sm-7 col-12 d-flex align-items-center">
            <a class="logo-text pr-sm-3 mx-lg-auto mr-auto ml-auto ml-sm-0 pt-3 pt-sm-0" href="<?php echo get_bloginfo( 'wpurl' );?>">Wspinalnia<br>Alfa</a>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <p class="c-gray s-14 pr-lg-3 pt-lg-4 pt-3 px-5 px-sm-0 text-center text-lg-left">Wspinalnia Alfa oferuje wspinaczkę indywidualną, sekcje wspinaczkowe, kursy wspinaczkowe i wysokościowe, oraz zajmuje się organizacją urodzin dla dzieci. Zapraszamy do skorzystania z naszej oferty!</p>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-sm-4 col-12 px-5 px-sm-0 pb-lg-0 pb-5">
        <p class="s-16 c-gray py-4">Start</p>
        <div class="list-group">
          <a href="index.html" class="list-group-item">Home</a>
          <a href="onas.html" class="list-group-item">O nas</a>
          <a href="cennik.html" class="list-group-item">Cennik</a>
          <a href="jakzaczac.html" class="list-group-item">Jak zacząć ?</a>
        </div>
      </div>
      <div class="col-lg-3 col-sm-4 col-12 px-5 px-sm-0 pb-lg-0 pb-5">
        <p class="s-16 c-gray py-4">Zajęcia grupowe</p>
        <div class="list-group">
          <a href="sekcje.html" class="list-group-item">Sekcje</a>
          <a href="kursy.html" class="list-group-item">Kursy</a>
          <a href="urodziny.html" class="list-group-item">Urodziny</a>
          <a href="kontakt.html" class="list-group-item">Kontakt</a>
        </div>
      </div>
      <div class="col-lg-3 col-sm-4 col-12 px-5 px-sm-0 pb-lg-0 pb-5">
        <p class="s-16 c-gray py-4">Kontakt</p>
        <div class="row pb-4">
          <div class="col-2">
            <i class="far fa-map c-orange"></i>
          </div>
          <div class="col-10">
            <p class="c-light-gray s-14">Adres</p>
            <p class="c-white s-14">ul. Kołobrzeska 41c CH Alfa</p>
          </div>
        </div>
        <div class="row pb-4">
          <div class="col-2">
            <i class="fas fa-phone c-orange"></i>
          </div>
          <div class="col-10">
            <p class="c-light-gray s-14">Telefon</p>
            <p class="c-white s-14"><a class="c-white" href="tel:603696948">603 696 948</a></p>
          </div>
        </div>
        <div class="row pb-4">
          <div class="col-2">
            <i class="far fa-envelope c-orange"></i>
          </div>
          <div class="col-10">
            <p class="c-light-gray s-14">E-mail</p>
            <p class="c-white s-14"><a class="c-white" href="mailto:wspinalnia@wp.pl">wspinalnia@wp.pl</a></p>
          </div>
        </div>
      </div>
    </div>
    <div class="row py-lg-5"></div>
  </div>
</div>
<script>

  var preloader = document.getElementsByClassName('preloader')[0];
  preloader.style.display = 'block';

  window.addEventListener('load', function()
  {
    preloader.style.opacity = 0;
    preloader.style.visibility = 'hidden';
  });

</script>
<?php wp_footer(); ?>
</body>
</html>
