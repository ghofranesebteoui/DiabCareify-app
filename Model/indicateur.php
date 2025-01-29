<?php
class Indicateur
{
    private $idIndicateur;
    private $nomIndicateur;
    private $formuleIndicateur;
    private $objectif;
    private $dateActualisation;

    public function __construct($idIndicateur, $nomIndicateur, $formuleIndicateur, $objectif, $dateActualisation)
    {
        $this->idIndicateur = $idIndicateur;
        $this->nomIndicateur = $nomIndicateur;
        $this->formuleIndicateur = $formuleIndicateur;
        $this->objectif = $objectif;
        $this->dateActualisation = $dateActualisation;
    }

    public function getIdIndicateur()
    {
        return $this->idIndicateur;
    }

    public function setIdIndicateur($idIndicateur): self
    {
        $this->idIndicateur = $idIndicateur;

        return $this;
    }

    /**
     * Get the value of nomIndicateur
     */
    public function getNomIndicateur()
    {
        return $this->nomIndicateur;
    }

    /**
     * Set the value of nomIndicateur
     */
    public function setNomIndicateur($nomIndicateur): self
    {
        $this->nomIndicateur = $nomIndicateur;

        return $this;
    }

    /**
     * Get the value of formuleIndicateur
     */
    public function getFormuleIndicateur()
    {
        return $this->formuleIndicateur;
    }

    /**
     * Set the value of formuleIndicateur
     */
    public function setFormuleIndicateur($formuleIndicateur): self
    {
        $this->formuleIndicateur = $formuleIndicateur;

        return $this;
    }

    /**
     * Get the value of objectif
     */
    public function getObjectif()
    {
        return $this->objectif;
    }

    /**
     * Set the value of objectif
     */
    public function setObjectif($objectif): self
    {
        $this->objectif = $objectif;

        return $this;
    }

    /**
     * Get the value of dateActualisation
     */
    public function getDateActualisation()
    {
        return $this->dateActualisation;
    }

    /**
     * Set the value of dateActualisation
     */
    public function setDateActualisation($dateActualisation): self
    {
        $this->dateActualisation = $dateActualisation;

        return $this;
    }
}
