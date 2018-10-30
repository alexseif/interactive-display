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


    .grid{width: 80vw; margin: 0 auto;}
    .grid-cell{width: 14vw;display: inline-block; margin: 0 10px;height: 35vh;}


    /*Side Panel*/ 
    /* panel layout mechanics */
    .panel-wrap {
      position: fixed;
      top: 0;
      bottom: 0;
      right: 0;
      width: 30em;
      transform: translateX(100%);
      transition: .3s ease-out;
    }
    .panel {
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      background: #333;
      color: #eee;
      overflow: auto;
      padding: 1em;
    }

    /* simulate panel state control --
    this can also be triggered by a 
    class name added to the body tag. 
    Just using a checkbox sibling here
    for simplicity
    */ 
    [type="checkbox"]:checked ~ .panel-wrap {
      transform: translateX(0%);
    }


    /* demo display */
    *,*:before, *:after {box-sizing: border-box;}

    body {
      font-family: sans-serif;
      font-size: 18px;
    }
    h3 {
      margin: 0;
    }
    p {
      line-height: 1.4;
      margin: 2em 0 0 0;
    }
    [type="checkbox"] {
      font-size: 1em;
    }


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
        <div class="slide">
          <div class="grid">
            <div class="grid-cell">
              <img class="img-responsive" src="img/Cars/GLC/Paint/black.jpg"/>
            </div>
            <div class="grid-cell">
              <img class="img-responsive" src="img/Cars/GLC/Paint/cavansite_blue.jpg"/>
            </div>
            <div class="grid-cell">
              <img class="img-responsive" src="img/Cars/GLC/Paint/brilliant_blue.jpg"/>
            </div>
            <div class="grid-cell">
              <img class="img-responsive" src="img/Cars/GLC/Paint/citrine_brown.jpg"/>
            </div>
            <div class="grid-cell">
              <img class="img-responsive" src="img/Cars/GLC/Paint/designo_hyacinth_red_metallic.jpg"/>
            </div>
          </div>
          <div class="row">
            <div class="grid-cell">
              <img class="img-responsive" src="img/Cars/GLC/Paint/diamond_silver.jpg"/>
            </div>
            <div class="grid-cell">
              <img class="img-responsive" src="img/Cars/GLC/Paint/iridium_silver.jpg"/>
            </div>
            <div class="grid-cell">
              <img class="img-responsive" src="img/Cars/GLC/Paint/obsidian_black.jpg"/>
            </div>
            <div class="grid-cell">
              <img class="img-responsive" src="img/Cars/GLC/Paint/polar_white.jpg"/>
            </div>
            <div class="grid-cell">
              <img class="img-responsive" src="img/Cars/GLC/Paint/selenite_grey.jpg"/>
            </div>
          </div>
        </div>
      </div>
      <div id="video" class="section">
        <div class="slide">
          <video controls="on">
            <source src="img/Cars/GLC/Video/glc_trailer_en_sd.mp4" type="video/mp4">
          </video>
        </div>
      </div>
      <div id="specs" class="section">
        <div class="slide">

          <input id="clicker" type="checkbox" />

        </div>
      </div>
    </div> <!-- /container -->        
  </div> <!-- /fullpage --> 
  <div class="panel-wrap">
    <div class="panel">
      <h3>Yay! Panels!</h3>
      <p>Distillery freegan bitters twee.  Food truck dreamcatcher PBR&amp;B chillwave brunch.  Fixie mustache umami Neutra dreamcatcher, Odd Future try-hard master cleanse pork belly iPhone Etsy.  Disrupt kogi Echo Park, wolf DIY literally meditation skateboard gentrify photo booth Carles asymmetrical mumblecore.  Fashion axe 3 wolf moon normcore scenester, bitters drinking vinegar banh mi keytar swag 8-bit.  Tote bag heirloom pickled authentic mlkshk, scenester hoodie shabby chic Kickstarter tattooed church-key Helvetica Wes Anderson.  Ennui craft beer art party, 8-bit chillwave single-origin coffee mlkshk.</p>

      <p>Distillery freegan bitters twee.  Food truck dreamcatcher PBR&amp;B chillwave brunch.  Fixie mustache umami Neutra dreamcatcher, Odd Future try-hard master cleanse pork belly iPhone Etsy.  Disrupt kogi Echo Park, wolf DIY literally meditation skateboard gentrify photo booth Carles asymmetrical mumblecore.  Fashion axe 3 wolf moon normcore scenester, bitters drinking vinegar banh mi keytar swag 8-bit.  Tote bag heirloom pickled authentic mlkshk, scenester hoodie shabby chic Kickstarter tattooed church-key Helvetica Wes Anderson.  Ennui craft beer art party, 8-bit chillwave single-origin coffee mlkshk.</p>
      <p>Distillery freegan bitters twee.  Food truck dreamcatcher PBR&amp;B chillwave brunch.  Fixie mustache umami Neutra dreamcatcher, Odd Future try-hard master cleanse pork belly iPhone Etsy.  Disrupt kogi Echo Park, wolf DIY literally meditation skateboard gentrify photo booth Carles asymmetrical mumblecore.  Fashion axe 3 wolf moon normcore scenester, bitters drinking vinegar banh mi keytar swag 8-bit.  Tote bag heirloom pickled authentic mlkshk, scenester hoodie shabby chic Kickstarter tattooed church-key Helvetica Wes Anderson.  Ennui craft beer art party, 8-bit chillwave single-origin coffee mlkshk.</p>
      <p>Distillery freegan bitters twee.  Food truck dreamcatcher PBR&amp;B chillwave brunch.  Fixie mustache umami Neutra dreamcatcher, Odd Future try-hard master cleanse pork belly iPhone Etsy.  Disrupt kogi Echo Park, wolf DIY literally meditation skateboard gentrify photo booth Carles asymmetrical mumblecore.  Fashion axe 3 wolf moon normcore scenester, bitters drinking vinegar banh mi keytar swag 8-bit.  Tote bag heirloom pickled authentic mlkshk, scenester hoodie shabby chic Kickstarter tattooed church-key Helvetica Wes Anderson.  Ennui craft beer art party, 8-bit chillwave single-origin coffee mlkshk.</p>
      <p>Distillery freegan bitters twee.  Food truck dreamcatcher PBR&amp;B chillwave brunch.  Fixie mustache umami Neutra dreamcatcher, Odd Future try-hard master cleanse pork belly iPhone Etsy.  Disrupt kogi Echo Park, wolf DIY literally meditation skateboard gentrify photo booth Carles asymmetrical mumblecore.  Fashion axe 3 wolf moon normcore scenester, bitters drinking vinegar banh mi keytar swag 8-bit.  Tote bag heirloom pickled authentic mlkshk, scenester hoodie shabby chic Kickstarter tattooed church-key Helvetica Wes Anderson.  Ennui craft beer art party, 8-bit chillwave single-origin coffee mlkshk.</p>
    </div>
  </div>    
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
      anchors: ['exterior', 'interior', 'paint', 'video', 'specs'],
      responsiveHeight: 600,
      css3: true,
      afterResponsive: function (isResponsive) {
      }
    });
  </script>
</body>
</html>
