<?php

//class
class Auto{

    //constructor
    public function __construct($merk, $type, $model, $bouwjaar, $kenteken)
    {
        $this->merk = $merk;
        $this->type = $type;
        $this->model = $model;
        $this->bouwjaar = $bouwjaar;
        $this->kenteken = $kenteken;


    }
}


class Klant{

    public function __construct($voornaam, $tussenvoegsel, $achternaam, $adres, $postcode, $plaats, $telefoonnummer, $emailadres, $kenteken_auto, $apk_datum)
    {
        $this->voornaam = $voornaam;
        $this->tussenvoegsel = $tussenvoegsel;
        $this->achternaam = $achternaam;
        $this->adres = $adres;
        $this->postcode = $postcode;
        $this->plaats = $plaats;
        $this->telefoonnummer = $telefoonnummer;
        $this->emailadres = $emailadres;
        $this->kenteken_auto = $kenteken_auto;
        $this->apk_datum = $apk_datum;
    }
}


$auto = new Auto("Volkswagen", "Golf", 2, 2001, "11-AA-11");
$klant = new Klant("Jordi", "van der", "Plank", "Pluim-es 87", "2925CL", "Krimpen aan den IJssel", 681764242,
    "jordivdp1@gmail.com", "11-AA-11", "01-01-2020");

echo $auto->merk;
echo "<br>";
echo $auto->kenteken;
echo "<br>";
echo $klant->voornaam;
echo "<br>";
echo $klant->adres;
echo "<br>";
echo $klant->emailadres;
echo "<br>";
echo $klant->kenteken_auto;