<?php

namespace Progettohotel\GestioneHotel;

use Progettohotel\GestioneHotel\prenotazioni\PrenotazioneBase;
use Progettohotel\GestioneHotel\prenotazioni\PrenotazioneStandard;

class DirezioneGenerale
{
    public function creaPrenotazioneStandard(string $nomeCliente, float $prezzoBase, int $notti): PrenotazioneBase
    {
        return new PrenotazioneStandard($nomeCliente, $prezzoBase, $notti);
    }
}

?>