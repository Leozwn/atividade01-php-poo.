<?php

class Planta
{
    private string $nomePopular;
    private string $especie;
    private float $aguaPorDia;  // float por causa da virgula pos numero c n me engano , quando nao é um numero inteiro 

    public function __construct(string $nomePopular, string $especie, float $aguaPorDia)
    {
        $this->nomePopular = $nomePopular;
        $this->especie = $especie;
        $this->aguaPorDia = $aguaPorDia;
    }

    public function getNomePopular(): string
    {
        return $this->nomePopular;
    }

    public function getEspecie(): string
    {
        return $this->especie;
    }

    public function getAguaPorDia(): float 
    {
        return $this->aguaPorDia;
    }

    
    public function getAguaPorSemana(): float
    {
        return $this->aguaPorDia * 7; // logica por semana = 7 
    }
}