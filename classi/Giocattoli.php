<?php

include_once __DIR__ . '/prodotto.php';
//Creo la classe cibo che è un estensione di prodotto e quindi eredita le instanze contenute dentro della classe prodotto
class Giocattoli extends Prodotto
{

    public $caratteristiche;
    public $dimensioni;


    public function __construct(
        String $name,
        String $immagine,
        Category $category,
        Float $prezzo,


        String $caratteristiche,
        String $dimensioni
    ) {
        $this->caratteristiche = $caratteristiche;
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
        <li>' . $this->caratteristiche . '</li>
        <li>' . $this->dimensioni . '</li>
        </div>
        </div>';
    }
}
