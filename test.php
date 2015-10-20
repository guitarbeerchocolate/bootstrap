<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Bootstrap Class Test</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php
    require_once 'bootstrap.class.php';
    $bs = new bootstrap;
    echo $bs->navbar(array('BBC'=>'http://www.bbc.co.uk','Google'=>'https:www.google.co.uk','TV Listings'=>'http://radiotimes.com/tv/tv-listings'),'My site', 'navbar-inverse', 'Google');
    echo $bs->row($bs->container($bs->element('Hello world')));
    echo $bs->buttonLink('Hello', 'http://www.bbc.co.uk');
    $carTitles = array('Name','Stock','Sold');
    $cars = array
    (
      array('Volvo',22,18),
      array('BMW',15,13),
      array('Saab',5,2),
      array('Land Rover',17,15)
    );
    echo $bs->table($cars, $carTitles);
    echo $bs->img('http://www.w3schools.com/images/colorpicker.gif');
    echo $bs->modalLink('jimmy','Click for Jimmy');
    echo $bs->modal('jimmy', 'My Jimmy content');    
    echo $bs->mediaObject('left', 'http://www.w3schools.com/images/colorpicker.gif', 'Colour picker', 'My heading', '<p>This is a paragraph.</p>');
    echo $bs->panel($content = '<p>This is my body content.</p>', '<p>This is my header</p>', '<p>This is my footer</p>');
    ?>    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>