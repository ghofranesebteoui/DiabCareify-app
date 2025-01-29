<?php
class ValeursSources
{
    private $idValeur;
    private $idUO;
    private $nbComplications;
    private $nbChroniques;
    private $dateSaisie;
    private $tempsSaisie;
    private $statutSaisie;

    public function __construct($idValeur, $idUO, $nbComplications, $nbChroniques, $dateSaisie, $tempsSaisie, $statutSaisie)
    {
        $this->idValeur = $idValeur;
        $this->idUO = $idUO;
        $this->nbComplications = $nbComplications;
        $this->nbChroniques = $nbChroniques;
        $this->dateSaisie = $dateSaisie;
        $this->tempsSaisie = $tempsSaisie;
        $this->statutSaisie = $statutSaisie;
    }

    /**
     * Get the value of idValeur
     */
    public function getIdValeur()
    {
        return $this->idValeur;
    }

    /**
     * Set the value of idValeur
     */
    public function setIdValeur($idValeur): self
    {
        $this->idValeur = $idValeur;

        return $this;
    }

    /**
     * Get the value of idUO
     */
    public function getIdUO()
    {
        return $this->idUO;
    }

    /**
     * Set the value of idUO
     */
    public function setIdUO($idUO): self
    {
        $this->idUO = $idUO;

        return $this;
    }

    /**
     * Get the value of nbComplications
     */
    public function getNbComplications()
    {
        return $this->nbComplications;
    }

    /**
     * Set the value of nbComplications
     */
    public function setNbComplications($nbComplications): self
    {
        $this->nbComplications = $nbComplications;

        return $this;
    }

    /**
     * Get the value of nbChroniques
     */
    public function getNbChroniques()
    {
        return $this->nbChroniques;
    }

    /**
     * Set the value of nbChroniques
     */
    public function setNbChroniques($nbChroniques): self
    {
        $this->nbChroniques = $nbChroniques;

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

    /**
     * Get the value of tempsSaisie
     */
    public function getTempsSaisie()
    {
        return $this->tempsSaisie;
    }

    /**
     * Set the value of tempsSaisie
     */
    public function setTempsSaisie($tempsSaisie): self
    {
        $this->tempsSaisie = $tempsSaisie;

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
}
