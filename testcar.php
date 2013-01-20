<?php
  function __autoload($class_name) {
    include $class_name . '.php';
  }

$accord= new Car;
$accord->setYear("2001");
$accord->setStyle("tudor");

echo "Accord Year: ".$accord->getYear(). PHP_EOL;
echo "Accord Style: ".$accord->getStyle(). PHP_EOL;
echo "Accord Doors: ".$accord->getNumberOfDoors(). PHP_EOL;
echo "Accord Honk: ".$accord->honk(). PHP_EOL;


$civic= new Civic;
$civic->setYear ("2013");
$civic->setModel ("civic");

echo "Civic Year: ".$civic->getYear().PHP_EOL;
echo "Civic Model: ".$civic->getModel().PHP_EOL;
echo "Civic Doors: ".$civic->getNumberOfDoors(). PHP_EOL;
echo "Civic Honk: ".$civic->honk(). PHP_EOL;


$ram= new Truck;
$ram->setYear ("2005");
$ram->setStyle ("extndedcab");

echo "Truck Year: ".$ram->getYear().PHP_EOL;
echo "Truck Doors: ".$ram->getNumberOfDoors(). PHP_EOL;
echo "Truck Honk: ".$ram->honk(). PHP_EOL;
 
$f150= new Truck;
$f150->setYear ("2012");
$f150->setStyle ("regcab");

echo "Truck Year: ".$f150->getYear().PHP_EOL;
echo "Truck Doors: ".$f150->getNumberOfDoors(). PHP_EOL;
echo "Truck Honk: ".$f150->honk(). PHP_EOL;
 


?>
