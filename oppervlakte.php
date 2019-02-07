<?php

class Vierkant{
    protected $lengte;
    protected $breedte;

    public function __construct($lengte, $breedte)
    {
        $this->lengte = $lengte;
        $this->breedte = $breedte;
    }

    public function BerekenOppervlakte(){
        return $this->lengte * $this->breedte;
    }
}

$oppervlakte = new Vierkant(5, 3);
echo $oppervlakte->BerekenOppervlakte();