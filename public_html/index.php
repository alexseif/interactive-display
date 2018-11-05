<?php include_once 'template/head.php'; ?>
<body>
  <div id="preloader">
    <img src="img/mb_car_logo_animation_1.gif"/>
  </div>
  <style>
    body{background: #fff;}
  </style>
  <!--[if lt IE 8]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->
  <div class="container-fluid content"> 
    <div id="cars-carousel">
      <div id="fullpage">
        <div class="section">
          <?php for ($itemIndex = 0; $itemIndex < 2; $itemIndex++) : ?>
            <div class="slide">
              <div class="row">
                <?php for ($colIndex = 0; $colIndex < 8; $colIndex++) : ?>
                  <div class="col-md-3">
                    <a href="glc.php">
                      <img class="img-responsive" src="img/Cars/GLC/car-glc.jpg" alt="GLC"/>
                      <div class="text-center">
                        <h3>GLC</h3>
                    </a>
                  </div>
                </div>
              <?php endfor; ?>
            </div><!-- row -->
          </div><!-- slide -->
        <?php endfor; ?>
      </div><!-- section -->
    </div><!-- fullpage -->
  </div><!-- cars-carousel -->
  <hr>
</div> <!-- /container -->     
<?php include_once 'template/nav.php'; ?>
<?php include_once 'template/footer.php'; ?>
<?php include_once 'template/footer-js.php'; ?>
<script type="text/javascript">

  var myFullpage = new fullpage('#fullpage', {
    licenseKey: 'OPEN-SOURCE-GPLV3-LICENSE',
    responsiveHeight: 600,
    css3: true,
    fixedElements: '#header, #footer',
    slidesNavigation: true
  });
</script>
<script>
  setTimeout(function () {
    $('#preloader').fadeOut();
  }, 5600);
</script>
</body>
</html>
