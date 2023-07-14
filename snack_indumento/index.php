<!-- Crea una classe Indumento che ha un materiale come proprieta' da popolare nel costruttore.

Crea due sottoclassi Scarpa e Cappello, che avranno una proprieta' speciale ognuna 
oltre a richiamare il costruttore del parent. 

Istanziare un indumento, una scarpa e un cappello con il var_dump e verificare 
su schermo le differenze.  -->


<?php 

class Indumento {

    public $marca;
    public $taglia;


    function __construct(String $marca, String $taglia){
        $this->marca = $marca;
        $this->taglia = $taglia;
    }

    public function getIndumento(){
        return $this->marca;
    }
}

    $maglietta = new Indumento('levis', 'L');
    var_dump($maglietta);

?>
