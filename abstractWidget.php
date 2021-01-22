<?php

interface Observer {
  public function update(Observable $subject);
}


abstract class Widget implements Observer {

  protected $internalData = array();

  abstract public function draw();

  public function update(Observable $subject) {
         $this->internalData = $subject->getData();
  }
}


class menuWidget extends Widget {

  function __construct() {
  }

  public function draw() {
        // voy a meter un menu de bootsrap por probar
        $recursosBootstrap = "<head><link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">\r\n<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>\r\n<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>\r\n<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script></head>";

        $html = "<body><ul class=\"nav nav-dark nav-pills nav-justified\">";
        $numDatos = count($this->internalData[0]);
        for($i = 0; $i < $numDatos; $i++){
            $noms = $this->internalData[0];
            $cognoms = $this->internalData[1];
            $telefons =  $this->internalData[2];
            $emails = $this->internalData[3];
            $adreses =  $this->internalData[4];
            // $html .= " <li class=\"nav-item\">\r\n    <a class=\"nav-link\" href=\"#\">$noms[$i]</a>\r\n  </li>";
            $html .= "<li class=\"nav-item dropdown\">\r\n    <a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">$noms[$i]</a>\r\n    <div class=\"dropdown-menu\">\r\n      <a class=\"dropdown-item\" href=\"#\">$cognoms[$i]</a>\r\n      <a class=\"dropdown-item\" href=\"#\">$telefons[$i]</a>\r\n      <a class=\"dropdown-item\" href=\"#\">$emails[$i]</a>\r\n<a class=\"dropdown-item\" href=\"#\">$adreses[$i]</a>\r\n  </li>";
        }

        $html .= "</body></ul>";
        echo $recursosBootstrap;
        echo $html;
        //  $html = "<table border=1 width=130>";
        //  $html .= "<tr><td colspan=3 bgcolor=#cccccc>
        //                 <b>Instrument Info<b></td></tr>";

        //  $numRecords = count($this->internalData[0]);
        //  for($i = 0; $i < $numRecords; $i++) {
        //         $instms = $this->internalData[0];
        //         $prices = $this->internalData[1];
        //         $years =  $this->internalData[2];
        //         $html .=  "<tr><td>$instms[$i]</td><td> $prices[$i]</td>
        //                    <td>$years[$i]</td></tr>";
        //         }
        //  $html .= "</table><br>";
        //  echo $html;
  }
}


class FancyWidget extends Widget {
  
  function __construct() {
  }
  
  public function draw() {
         $html = 
         "<table border=0 cellpadding=5 width=270 bgcolor=#6699BB>
                <tr><td colspan=3 bgcolor=#cccccc>
                <b><span class=blue>Our Latest Prices<span><b>
                </td></tr>
                <tr><td><b>instrument</b></td>
                <td><b>price</b></td><td><b>date issued</b>
                </td></tr>";
         
         $numRecords = count($this->internalData[0]);
         for($i = 0; $i < $numRecords; $i++) {
                $instms = $this->internalData[0];
                $prices = $this->internalData[1];
                $years =  $this->internalData[2];
                
                $html .= 
                "<tr><td>$instms[$i]</td><td> 
                        $prices[$i]</td><td>$years[$i]
                        </td></tr>";
                }
         $html .= "</table><br>";
         echo $html;
  }
}

?>
