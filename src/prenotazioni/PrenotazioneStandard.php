<?php

namespace Progettohotel\GestioneHotel\prenotazioni;

class PrenotazioneStandard extends PrenotazioneBase
{
    public function calcolaCostoTotale(): float
    {
        return $this->prezzoBase * $this->notti;
    }
}

?>