<?php
class UO
{
    private $idUO;
    private $nomUO;
    private $emailUO;

    public function __construct($idUO, $nomUO, $emailUO)
    {
        $this->idUO = $idUO;
        $this->nomUO = $nomUO;
        $this->emailUO = $emailUO;
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
     * Get the value of emailUO
     */
    public function getEmailUO()
    {
        return $this->emailUO;
    }

    /**
     * Set the value of emailUO
     */
    public function setEmailUO($emailUO): self
    {
        $this->emailUO = $emailUO;

        return $this;
    }
}
