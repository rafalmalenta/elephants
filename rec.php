<?php

require 'Model/Elephant.php';
require 'Service/InputReader.php';
use Elephants\Model\Elephant;
use Elephants\Service\InputReader;

$Input = InputReader::readInput();

$test = new Elephant(1,213);
var_dump($Input);
//$elephants = explode(" ",$elephantsWeighte);
//foreach ($elephantsWeight as $key=>$elephant){
//    echo $key;
//    echo "$elephant ";
//}
////var_dump($elephantsWeight);
//echo "$elephantsCount, ";

