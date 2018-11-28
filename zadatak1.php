<?php
class Circle {
    public $radius = 0;
    
    function opseg() {
        return 2 * radius * 3.1415;
    }

    function area(){
      retun radius * radius * 3.1415;
    }
}

class Triangle{
  public $stranaA = 0;
  public $stranaB = 0;
  public $osnovicaC = 0;
  public $visinaNaOsnovicu = 0;

  function opseg(){
    retun $stranaA + $stranaB + $osnovicaC;
  }

  function povrsina(){
    return ($osnovicaC * $visinaNaOsnovicu)/2
  }
  
}

?> 