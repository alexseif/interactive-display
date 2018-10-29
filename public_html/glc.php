<?php include_once 'template/head.php'; ?>
<body>
  <!--[if lt IE 8]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->
  <?php include_once 'template/nav.php'; ?>

  <style>
    .content{display: block;}
    .section{text-align:center;}
    .section img{height: 100%; width: auto;}
  </style>
  <div id="fullpage">
    <div class="content"> 
      <div id="exterior" class="section">
        <div class="slide"><img src="img/Cars/GLC/Exterior/2016_CARS_PICTURES01090.jpg"/></div>
        <div class="slide"><img src="img/Cars/GLC/Exterior/2016_CARS_PICTURES01091.jpg"/></div>
        <div class="slide"><img src="img/Cars/GLC/Exterior/2016_CARS_PICTURES01094.jpg"/></div>
        <div class="slide"><img src="img/Cars/GLC/Exterior/2016_CARS_PICTURES01096.jpg"/></div>
        <div class="slide"><img src="img/Cars/GLC/Exterior/2016_CARS_PICTURES01097.jpg"/></div>
        <div class="slide"><img src="img/Cars/GLC/Exterior/2016_CARS_PICTURES01103.jpg"/></div>
        <div class="slide"><img src="img/Cars/GLC/Exterior/2016_CARS_PICTURES01105.jpg"/></div>
      </div>
      <div id="interior" class="section">
        <div class="slide"><img src="img/Cars/GLC/Interior/2015MBM00955.jpg"/></div>
        <div class="slide"><img src="img/Cars/GLC/Interior/2015MBM00961.jpg"/></div>
        <div class="slide"><img src="img/Cars/GLC/Interior/2015MBM00991.jpg"/></div>
        <div class="slide"><img src="img/Cars/GLC/Interior/2015MBM01001.jpg"/></div>
        <div class="slide"><img src="img/Cars/GLC/Interior/2015MBM01002.jpg"/></div>
        <div class="slide"><img src="img/Cars/GLC/Interior/2016_CARS_PICTURES01100.jpg"/></div>
      </div>
      <div id="paint" class="section">
        <div class="slide"><img src="img/Cars/GLC/Paint/black.jpg"/></div>
        <div class="slide"><img src="img/Cars/GLC/Paint/brilliant_blue.jpg"/></div>
        <div class="slide"><img src="img/Cars/GLC/Paint/cavansite_blue.jpg"/></div>
        <div class="slide"><img src="img/Cars/GLC/Paint/citrine_brown.jpg"/></div>
        <div class="slide"><img src="img/Cars/GLC/Paint/designo_hyacinth_red_metallic.jpg"/></div>
        <div class="slide"><img src="img/Cars/GLC/Paint/diamond_silver.jpg"/></div>
        <div class="slide"><img src="img/Cars/GLC/Paint/iridium_silver.jpg"/></div>
        <div class="slide"><img src="img/Cars/GLC/Paint/obsidian_black.jpg"/></div>
        <div class="slide"><img src="img/Cars/GLC/Paint/polar_white.jpg"/></div>
        <div class="slide"><img src="img/Cars/GLC/Paint/selenite_grey.jpg"/></div>
      </div>
      <div id="video" class="section">
        <div class="slide">
          <video controls="on">
            <source src="img/Cars/GLC/Video/glc_trailer_en_sd.mp4" type="video/mp4">
          </video>
        </div>
      </div>
      <div id="specs" class="section">

      </div>
    </div> <!-- /container -->        
  </div> <!-- /fullpage -->   
  <?php include_once 'template/car-footer.php'; ?>
  <?php include_once 'template/footer-js.php'; ?>
  <script src="js/vendor/fullPage.js-master/dist/fullpage.min.js" type="text/javascript"></script>
  <script>
    $('.footer-action').click(function (event) {
      event.stopPropagation();
      //    $('.content section').hide('slide', {direction: 'left'});
      //    $($(this).attr('href')).show('slide', {direction: 'left'});
    });
  </script>

  <script type="text/javascript">
    var myFullpage = new fullpage('#fullpage', {
      anchors: ['exterior', 'interior', 'paint', 'video'],
      responsiveHeight: 600,
      css3: true,
      afterResponsive: function (isResponsive) {
      }
    });
  </script>
</body>
</html>
