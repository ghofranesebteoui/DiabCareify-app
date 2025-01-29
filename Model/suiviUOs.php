<?php
class SuiviUos
{
    private $idUo;
    private $nomUO;
    private $idIndicateur;
    private $statutSaisie;
    private $dateSaisie;


    public function __construct($idUo, $nomUO, $idIndicateur, $statutSaisie, $dateSaisie)
    {
        $this->idUo = $idUo;
        $this->nomUO = $nomUO;
        $this->idIndicateur = $idIndicateur;
        $this->statutSaisie = $statutSaisie;
        $this->dateSaisie = $dateSaisie;
    }

    /**
     * Get the value of idUo
     */
    public function getIdUo()
    {
        return $this->idUo;
    }

    /**
     * Set the value of idUo
     */
    public function setIdUo($idUo): self
    {
        $this->idUo = $idUo;

        return $this;
    }

    /**
     * Get the value of nomUO
     */
    public function getNomUO()
    {
        return $this->nomUO;
    }

    /**
     * Set the value of nomUO
     */
    public function setNomUO($nomUO): self
    {
        $this->nomUO = $nomUO;

        return $this;
    }

    /**
     * Get the value of idIndicateur
     */
    public function getIdIndicateur()
    {
        return $this->idIndicateur;
    }

    /**
     * Set the value of idIndicateur
     */
    public function setIdIndicateur($idIndicateur): self
    {
        $this->idIndicateur = $idIndicateur;

        return $this;
    }

    /**
     * Get the value of statutSaisie
     */
    public function getStatutSaisie()
    {
        return $this->statutSaisie;
    }

    /**
     * Set the value of statutSaisie
     */
    public function setStatutSaisie($statutSaisie): self
    {
        $this->statutSaisie = $statutSaisie;

        return $this;
    }

    /**
     * Get the value of dateSaisie
     */
    public function getDateSaisie()
    {
        return $this->dateSaisie;
    }

    /**
     * Set the value of dateSaisie
     */
    public function setDateSaisie($dateSaisie): self
    {
        $this->dateSaisie = $dateSaisie;

        return $this;
    }
}
