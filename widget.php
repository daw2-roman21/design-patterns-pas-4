<?php
require_once("observable.php");
require_once("abstractWidget.php");

$dat = new DataSource();
$widgetA = new menuWidget();
// $widgetB = new FancyWidget();

$dat->addObserver($widgetA);
// $dat->addObserver($widgetB);

$dat->addRecord("Alex", "Roman", 601233867, "romancabelloalejandro@fpllefia.com", "Adresa Alex");
$dat->addRecord("Pepe", "Gomez", 712356425, "PEPE@fpllefia.com", "Adresa del Pepe");
$dat->addRecord("Juan", "Ito", 745123659, "juanitomlg@fpllefia.com", "Adresa Juan");
$dat->addRecord("Pete", "To", 985623415, "xxx@fpllefia.com", "Adresa Pete");


$widgetA->draw();
// $widgetB->draw();
?>
