<?php


include 'vendor/autoload.php';

$collection = collect(['taylor', 'abigail', null])->map(function ($name) {
  return strtoupper($name);
})->reject(function ($name) {
  return empty($name);
})->sort(function($a, $b) {
  return $a>$b;
});



dump($collection->all());