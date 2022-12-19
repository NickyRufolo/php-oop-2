<?php

include_once __DIR__ . '/prodotto.php';
//Creo la classe cibo che è un estensione di prodotto e quindi eredita le instanze contenute dentro della classe prodotto
class Cibo extends Prodotto
{

    public $peso;
    public $ingredienti;


    public function __construct(
        String $name,
        String $immagine,
        Category $category,
        Float $prezzo,


        Int $peso,
        String $ingredienti
    ) {
        $this->peso = $peso;
        $this->ingredienti = $ingredienti;
        parent::__construct($name, $immagine, $category, $prezzo);
    }
    public function displayProjectCard()
    {
        echo '<div class="card" style="width: 18rem;">
        <img src="' . $this->immagine . '" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">' . $this->name . '</h5>
        <li>' . $this->prezzo . '</li>
        <li>' . $this->peso . '</li>
        <li>' . $this->ingredienti . '</li>
        </div>
        </div>';
    }
}
