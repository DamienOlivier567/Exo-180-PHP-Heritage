<?php


class Maison extends Habitation {

    private Bool $jardin;
    private Int $etage;
    private Bool $garage;

    public function __construct(string $pays, string $ville, $codePostale, string $chambres, string $pieces, Bool $jardin, Int $etage, Bool $garage)
    {
        parent::__construct($pays, $ville, $codePostale, $chambres, $pieces);
        $this->setJardin($jardin);
        $this->setEtage($etage);
        $this->setGarage($garage);
    }

    /**
     * @return bool
     */
    public function isJardin(): bool
    {
        return $this->jardin;
    }

    /**
     * @param bool $jardin
     */
    public function setJardin(bool $jardin): void
    {
        $this->jardin = $jardin;
    }

    /**
     * @return Int
     */
    public function getEtage(): int
    {
        return $this->etage;
    }

    /**
     * @param Int $etage
     */
    public function setEtage(int $etage): void
    {
        $this->etage = $etage;
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