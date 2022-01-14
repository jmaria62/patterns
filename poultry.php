<?php

class Duck {

    public function quack() {
       echo "Quack \n";
    }

    public function fly() {
       echo "I'm flying \n";
    }
}

class Turkey {

    public function gobble() {
       echo "Gobble gobble \n";
    }

    public function fly() {
        echo "I'm flying a short distance \n";
    }
}

class TurkeyAdapter extends Turkey{
    private $turkey;

    public function __construct(Turkey $turkey){
        $this->turkey = $turkey;

    }

    public function quack(){
         $this->gobble();
    }

    public function fly(){
        for($i = 0; $i < 5; $i++){
                parent::fly();
        }  


    }

    
}

function duck_interaction($duck) {
       $duck->quack();
       $duck->fly();
}

$duck = new Duck;
$turkey = new Turkey;
$turkey_adapter = new TurkeyAdapter($turkey);
echo "The Turkey says...\n";
$turkey->gobble();
$turkey->fly();
echo "The Duck says...\n";
duck_interaction($duck);
echo "The TurkeyAdapter says...\n";
duck_interaction($turkey_adapter);


?>