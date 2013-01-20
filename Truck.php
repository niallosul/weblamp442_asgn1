<?php
 
  class Truck extends Vehicle implements vehicleInterface
  {
     public function getNumberOfDoors() {
      if ($this->getStyle() == "extndedcab")
        return (4);
      else 
        return (2);    
    }

    public function honk() {
       return ("");
    }   

  }

?>