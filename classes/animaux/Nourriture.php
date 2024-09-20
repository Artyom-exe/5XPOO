<?php

class Nourriture
{
    private string $nom;
    private int $quantite;

    public function __construct(string $nom, int $quantite)
    {
        $this->nom = $nom;
        $this->quantite = $quantite;
    }

    public function diminuerQuantite(): int
    {
        return --$this->quantite;
    }

    public function getNom(): string
    {
        return $this->nom;
    }
}
