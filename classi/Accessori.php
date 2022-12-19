<?php

include_once __DIR__ . '/prodotto.php';
//Creo la classe cibo che è un estensione di prodotto e quindi eredita le instanze contenute dentro della classe prodotto
class Accessori extends Prodotto
{

    public $materiale;
    public $dimensioni;


    public function __construct(
        String $name,
        String $immagine,
        Category $category,
        Float $prezzo,


        String $materiale,
        String $dimensioni
    ) {
        $this->materiale = $materiale;
        $this->dimensioni = $dimensioni;
        parent::__construct($name, $immagine, $category, $prezzo);
    }
    public function displayProjectCard()
    {
        echo '<div class="card" style="width: 18rem;">
        <img src="' . $this->immagine . '" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">' . $this->name . '</h5>
        <li>' . $this->prezzo . '</li>
        <li>' . $this->materiale . '</li>
        <li>' . $this->dimensioni . '</li>
        </div>
        </div>';
    }
}
