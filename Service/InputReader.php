<?php


namespace Elephants\Service;


class InputReader
{
    public static function readInput(){
        $stdin = fopen('php://stdin', 'r');
        return [
            "elephantsCount" => trim(fgets($stdin)),
            "elephantsWeight" => explode(" ", trim(fgets($stdin))),
            "elephantsOrder" => explode(" ", trim(fgets($stdin))),
            "elephantsOrderFinal" => explode(" ", trim(fgets($stdin)))
        ];
    }

}