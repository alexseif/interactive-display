<?php include_once 'template/head.php'; ?>
<body>
  <!--[if lt IE 8]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->
  <?php include_once 'template/nav.php'; ?>
  <?php include_once 'template/car-footer.php'; ?>
  <style>
    /* Side Panel */ 
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
    <div class="section">
      <?php foreach ($GLC->exterior as $slide): ?>
        <div class="slide">
          <?php if (!is_null($slide->title) || !is_null($slide->description)): ?>
            <div class="overlay-container">
              <div class="mbcom-slider-item-overlay bottom-right">
                <div class="container">
                  <span class="mbcom-slider-item-nr">&nbsp;</span>
                  <h1 class="title" itemprop="headline">
                    <?php echo $slide->title; ?>
                  </h1>
                  <span class="description" itemprop="description">
                    <?php echo $slide->description; ?>
                  </span>
                </div>
              </div><!-- mbcom-slider-item-overlay -->
            </div><!-- overlay-container -->
          <?php endif; ?>
          <div class="center-cropped" 
               style="background-image: url('/img/Cars/GLC/Exterior/<?php echo $slide->img; ?>')">
            <img src="img/Cars/GLC/Exterior/<?php echo $slide->img; ?>" />
          </div>
        </div><!-- slide -->
      <?php endforeach; ?>
    </div><!-- section -->
    <div class="section">
      <?php foreach ($GLC->interior as $slide): ?>
        <div class="slide">
          <?php if (!is_null($slide->title) || !is_null($slide->description)): ?>
            <div class="overlay-container">
              <div class="mbcom-slider-item-overlay bottom-right">
                <div class="container">
                  <span class="mbcom-slider-item-nr">&nbsp;</span>
                  <h1 class="title" itemprop="headline">
                    <?php echo $slide->title; ?>
                  </h1>
                  <span class="description" itemprop="description">
                    <?php echo $slide->description; ?>
                  </span>
                </div>
              </div><!-- mbcom-slider-item-overlay -->
            </div><!-- overlay-container -->
          <?php endif; ?>
          <div class="center-cropped" 
               style="background-image: url('/img/Cars/GLC/Interior/<?php echo $slide->img; ?>')">
            <img src="img/Cars/GLC/Interior/<?php echo $slide->img; ?>" />
          </div>
        </div><!-- slide -->
      <?php endforeach; ?>
    </div><!-- section -->
    <div class="section">
      <div class="slide">
        <div class="grid">
          <?php foreach ($GLC->paint as $paint): ?>
            <div class="grid-cell">
              <div class="center-cropped-grid" 
                   style="background-image: url('/img/Cars/GLC/Paint/<?php echo $paint->img; ?>')">
                <img src="img/Cars/GLC/Paint/<?php echo $paint->img; ?>"/>
              </div>
              <div class="title">
                <h4><?php echo $paint->title; ?></h4>
              </div>
            </div><!-- grid-cell -->
          <?php endforeach; ?>
        </div><!-- grid -->
      </div><!-- slide -->
    </div><!-- section -->
    <div class="section">
      <div class="slide">
        <video controls="on">
          <source src="img/Cars/GLC/Video/glc_trailer_en_sd.mp4" type="video/mp4">
        </video>
      </div>
    </div>
    <div id="" class="section">
      <div class="slide">

        <input id="clicker" type="checkbox" />

      </div>
    </div>
  </div> <!-- /fullpage --> 
  <div id="specs-panel" class="panel-wrap">
    <div class="panel">
      <h3>Yay! Panels!</h3>
      <p>Distillery freegan bitters twee.  Food truck dreamcatcher PBR&amp;B chillwave brunch.  Fixie mustache umami Neutra dreamcatcher, Odd Future try-hard master cleanse pork belly iPhone Etsy.  Disrupt kogi Echo Park, wolf DIY literally meditation skateboard gentrify photo booth Carles asymmetrical mumblecore.  Fashion axe 3 wolf moon normcore scenester, bitters drinking vinegar banh mi keytar swag 8-bit.  Tote bag heirloom pickled authentic mlkshk, scenester hoodie shabby chic Kickstarter tattooed church-key Helvetica Wes Anderson.  Ennui craft beer art party, 8-bit chillwave single-origin coffee mlkshk.</p>

      <p>Distillery freegan bitters twee.  Food truck dreamcatcher PBR&amp;B chillwave brunch.  Fixie mustache umami Neutra dreamcatcher, Odd Future try-hard master cleanse pork belly iPhone Etsy.  Disrupt kogi Echo Park, wolf DIY literally meditation skateboard gentrify photo booth Carles asymmetrical mumblecore.  Fashion axe 3 wolf moon normcore scenester, bitters drinking vinegar banh mi keytar swag 8-bit.  Tote bag heirloom pickled authentic mlkshk, scenester hoodie shabby chic Kickstarter tattooed church-key Helvetica Wes Anderson.  Ennui craft beer art party, 8-bit chillwave single-origin coffee mlkshk.</p>
      <p>Distillery freegan bitters twee.  Food truck dreamcatcher PBR&amp;B chillwave brunch.  Fixie mustache umami Neutra dreamcatcher, Odd Future try-hard master cleanse pork belly iPhone Etsy.  Disrupt kogi Echo Park, wolf DIY literally meditation skateboard gentrify photo booth Carles asymmetrical mumblecore.  Fashion axe 3 wolf moon normcore scenester, bitters drinking vinegar banh mi keytar swag 8-bit.  Tote bag heirloom pickled authentic mlkshk, scenester hoodie shabby chic Kickstarter tattooed church-key Helvetica Wes Anderson.  Ennui craft beer art party, 8-bit chillwave single-origin coffee mlkshk.</p>
      <p>Distillery freegan bitters twee.  Food truck dreamcatcher PBR&amp;B chillwave brunch.  Fixie mustache umami Neutra dreamcatcher, Odd Future try-hard master cleanse pork belly iPhone Etsy.  Disrupt kogi Echo Park, wolf DIY literally meditation skateboard gentrify photo booth Carles asymmetrical mumblecore.  Fashion axe 3 wolf moon normcore scenester, bitters drinking vinegar banh mi keytar swag 8-bit.  Tote bag heirloom pickled authentic mlkshk, scenester hoodie shabby chic Kickstarter tattooed church-key Helvetica Wes Anderson.  Ennui craft beer art party, 8-bit chillwave single-origin coffee mlkshk.</p>
      <p>Distillery freegan bitters twee.  Food truck dreamcatcher PBR&amp;B chillwave brunch.  Fixie mustache umami Neutra dreamcatcher, Odd Future try-hard master cleanse pork belly iPhone Etsy.  Disrupt kogi Echo Park, wolf DIY literally meditation skateboard gentrify photo booth Carles asymmetrical mumblecore.  Fashion axe 3 wolf moon normcore scenester, bitters drinking vinegar banh mi keytar swag 8-bit.  Tote bag heirloom pickled authentic mlkshk, scenester hoodie shabby chic Kickstarter tattooed church-key Helvetica Wes Anderson.  Ennui craft beer art party, 8-bit chillwave single-origin coffee mlkshk.</p>
    </div>
  </div>    
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
      licenseKey: 'OPEN-SOURCE-GPLV3-LICENSE',
      anchors: ['exterior', 'interior', 'paint', 'video'],
      responsiveHeight: 600,
      css3: true,
      fixedElements: '#header, #footer, #specs-panel',
      menu: '#car-menu',
      slidesNavigation: true,
      afterResponsive: function (isResponsive) {
      }
    });
  </script>
</body>
</html>
