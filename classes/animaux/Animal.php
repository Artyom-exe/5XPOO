<?php

class Animal
{
    private string $nom;
    private int $age;
    private string $espece;

    public function __construct(string $nom, int $age, string $espece)
    {
        $this->nom = $nom;
        $this->age = $age;
        $this->espece = $espece;
    }

    public function manger(Nourriture $nourriture): void
    {
        $nourriture->diminuerQuantite();
        echo "{$this->nom} a mangé une {$nourriture->getNom()}.\n";
    }
}
