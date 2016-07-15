<?php
require '../bootstrap.php';

$collection = new \Collections\Collection();

/** Adding elements  with key or not */
$collection->add(['name' => 'John'], 1);
$collection->add(2);

/** Removing data */
$collection->remove(2);

/** Getting the last or first */
$collection->first();
$collection->last();

/* Filtering data */
$collection->filter(function($item){
    return is_array($item);
});

var_dump($collection);die;