<?php


class Appartement extends Habitation {

    private Bool $garage;

    public function __construct(string $pays, string $ville, $codePostale, string $chambres, string $pieces, Bool $garage)
    {
        parent::__construct($pays, $ville, $codePostale, $chambres, $pieces);
        $this->setGarage($garage);
    }

    /**
     * @return bool
     */
    public function isGarage(): bool
    {
        return $this->garage;
    }

    /**
     * @param bool $garage
     */
    public function setGarage(bool $garage): void
    {
        $this->garage = $garage;
    }
}