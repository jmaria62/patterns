<?php

class Tigger {
    private static $instance;
    private static $numRugidos;

    private function __construct(){
        echo "Building character..." . PHP_EOL;
    }

    public function roar(){
        echo "Grrr!" . PHP_EOL;
        self::$numRugidos ++;
    }

    public static function getInstance(){
        if (!isset(self::$instance)) {
            self::$instance = new Tigger;
            self::$numRugidos = 0;
        }
        return self::$instance;
    }
    public static function getCounter(){
        return self::$numRugidos;
    }


}

$tigger = Tigger::getInstance();
$tigger->roar();
$tigger->roar();
$tigger->roar();
echo "Rugidos contados: ". Tigger::getCounter() . PHP_EOL;
$tigger2 = Tigger::getInstance();
$tigger2->roar();
$tigger2->roar();
$tigger2->roar();
echo "Rugidos contados: ". Tigger::getCounter() . PHP_EOL;




?>