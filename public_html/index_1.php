<?php include_once 'template/head.php'; ?>
<body>
  <!--[if lt IE 8]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->
  <?php include_once 'template/nav.php'; ?>
  <div class="container-fluid content"> 
    <div id="cars-carousal">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <?php for ($itemIndex = 0; $itemIndex < 2; $itemIndex++) : ?>
            <div class="item <?php if (0 == $itemIndex) echo "active"; ?>" >
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
            </div>
          </div>
        <?php endfor; ?>
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
  <hr>
</div> <!-- /container -->        
<?php include_once 'template/footer.php'; ?>
<?php include_once 'template/footer-js.php'; ?>
</body>
</html>
