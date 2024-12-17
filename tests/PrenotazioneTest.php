<?php


use PHPUnit\Framework\TestCase;
use Progettohotel\GestioneHotel\DirezioneGenerale;


class PrenotazioneTest extends TestCase
{
    public function testCostoTotalePrenotazioneStandard()
    {
        $direzionegenerale = new DirezioneGenerale();
        $prenotazione = $direzionegenerale->creaPrenotazioneStandard("Pippo Franco", 100.0, 3);

        $this->assertEquals(300.0, $prenotazione->calcolaCostoTotale());
    }

    

}

?>