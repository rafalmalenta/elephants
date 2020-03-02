<?php


namespace Elephants\Model;

class Elephant
{
    var $id;
    var $weight;

    public function __construct($id, $weight)
    {
        $this->id = $id;
        $this->weight = $weight;
    }
}