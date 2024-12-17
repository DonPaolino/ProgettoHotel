<?php

namespace Progettohotel\GestioneHotel\prenotazioni;

use Progettohotel\GestioneHotel\contratti\ContrattoPrenotazioneGenerale;

abstract class PrenotazioneBase implements ContrattoPrenotazioneGenerale
{
    protected string $nomeCliente;
    protected float $prezzoBase;
    protected int $notti;

    public function __construct(string $nomeCliente, float $prezzoBase, int $notti)
    {
        $this->nomeCliente = $nomeCliente;
        $this->prezzoBase = $prezzoBase;
        $this->notti = $notti;
    }

    public function ottieniNomeCliente(): string
    {
        return $this->nomeCliente;
    }

    public function ottieniPrezzoBase(): float
    {
        return $this->prezzoBase;
    }

    public function ottieniNotti(): int
    {
        return $this->notti;
    }
}

?>