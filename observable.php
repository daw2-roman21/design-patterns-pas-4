<?php
abstract class Observable {

  private $observers = array();

  public function addObserver(Observer $observer) {
         array_push($this->observers, $observer);
  }

  public function notifyObservers() {
         for ($i = 0; $i < count($this->observers); $i++) {
                 $widget = $this->observers[$i];
                 $widget->update($this);
         }
     }
}


class DataSource extends Observable {

  private $noms;
  private $cognoms;
  private $telefons;
  private $emails;
  private $adreses;

  function __construct() {
         $this->noms = array();
         $this->cognoms = array();
         $this->telefons = array();
         $this->emails = array();
         $this->adreses = array();
  }

  public function addRecord($nom, $cognom, $telefon, $email, $adresa) {
         array_push($this->noms, $nom);
         array_push($this->cognoms, $cognom);
         array_push($this->telefons, $telefon);
         array_push($this->emails, $email);
         array_push($this->adreses, $adresa);
         $this->notifyObservers();
  }

  public function getData() {
         return array($this->noms, $this->cognoms, $this->telefons, $this->emails, $this->adreses);
  }
}
?>
