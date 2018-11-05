<?php

class Slide
{

  public $img, $title, $description;

//  TODO: Add position of text on slide
  function __construct($img, $title = null, $description = null)
  {
    $this->img = $img;
    $this->title = $title;
    $this->description = $description;
  }

}

class Paint
{

  public $img, $title;

  function __construct($img, $title)
  {
    $this->img = $img;
    $this->title = $title;
  }

}

class Car
{

  public $exterior, $interior, $paint, $video, $specs;

  function __construct()
  {
    $this->exterior = array();
    $this->interior = array();
    $this->paint = array();
  }

}

$GLC = new Car();
$GLC->exterior[] = new Slide("2016_CARS_PICTURES01090.jpg", "The GLC: Second generation marks a big step forward.", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed bibendum mi sit amet magna egestas, a efficitur purus eleifend. Ut.");
$GLC->exterior[] = new Slide("2016_CARS_PICTURES01091.jpg");
$GLC->exterior[] = new Slide("2016_CARS_PICTURES01094.jpg");
$GLC->exterior[] = new Slide("2016_CARS_PICTURES01096.jpg");
$GLC->exterior[] = new Slide("2016_CARS_PICTURES01097.jpg");
$GLC->exterior[] = new Slide("2016_CARS_PICTURES01103.jpg");
$GLC->exterior[] = new Slide("2016_CARS_PICTURES01105.jpg");

$GLC->interior[] = new Slide("2015MBM00955.jpg");
$GLC->interior[] = new Slide("2015MBM00961.jpg");
$GLC->interior[] = new Slide("2015MBM00991.jpg");
$GLC->interior[] = new Slide("2015MBM01001.jpg");
$GLC->interior[] = new Slide("2015MBM01002.jpg");
$GLC->interior[] = new Slide("2016_CARS_PICTURES01100.jpg");

$GLC->paint[] = new Paint("black.jpg", "Black");
$GLC->paint[] = new Paint("cavansite_blue.jpg", "Cavansite Blue");
$GLC->paint[] = new Paint("brilliant_blue.jpg", "Brilliant Blue");
$GLC->paint[] = new Paint("citrine_brown.jpg", "Citrine Brown");
$GLC->paint[] = new Paint("designo_hyacinth_red_metallic.jpg", "Designo Hyacinth Red Metallic");
$GLC->paint[] = new Paint("diamond_silver.jpg", "Diamond Silver");
$GLC->paint[] = new Paint("iridium_silver.jpg", "Iridium Silver");
$GLC->paint[] = new Paint("obsidian_black.jpg", "Obsidian Black");
$GLC->paint[] = new Paint("polar_white.jpg", "Polar White");
$GLC->paint[] = new Paint("selenite_grey.jpg", "Selenite Grey");
