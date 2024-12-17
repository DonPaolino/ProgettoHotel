<?php

namespace Progettohotel\GestioneHotel\servizi;

class ServizioParcheggio
{
    private float $costo;

    public function __construct(float $costo)
    {
        $this->costo = $costo;
    }

    public function ottieniCosto(): float
    {
        return $this->costo;
    }
}

?>