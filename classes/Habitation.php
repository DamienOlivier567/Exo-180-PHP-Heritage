<?php


class Habitation{

    private String $pays;
    private String $ville;
    private $codePostale;
    private String $chambres;
    private String $pieces;

    /**
     * Habitation constructor.
     * @param String $pays
     * @param String $ville
     * @param $codePostale
     * @param String $chambres
     * @param String $pieces
     */
    public function __construct(string $pays, string $ville, $codePostale, string $chambres, string $pieces)
    {
        $this->pays = $pays;
        $this->ville = $ville;
        $this->codePostale = $codePostale;
        $this->chambres = $chambres;
        $this->pieces = $pieces;
    }

    /**
     * @return String
     */
    public function getPays(): string
    {
        return $this->pays;
    }

    /**
     * @param String $pays
     */
    public function setPays(string $pays): void
    {
        $this->pays = $pays;
    }

    /**
     * @return String
     */
    public function getVille(): string
    {
        return $this->ville;
    }

    /**
     * @param String $ville
     */
    public function setVille(string $ville): void
    {
        $this->ville = $ville;
    }

    /**
     * @return mixed
     */
    public function getCodePostale()
    {
        return $this->codePostale;
    }

    /**
     * @param mixed $codePostale
     */
    public function setCodePostale($codePostale): void
    {
        $this->codePostale = $codePostale;
    }

    /**
     * @return String
     */
    public function getChambres(): string
    {
        return $this->chambres;
    }

    /**
     * @param String $chambres
     */
    public function setChambres(string $chambres): void
    {
        $this->chambres = $chambres;
    }

    /**
     * @return String
     */
    public function getPieces(): string
    {
        return $this->pieces;
    }

    /**
     * @param String $pieces
     */
    public function setPieces(string $pieces): void
    {
        $this->pieces = $pieces;
    }

}