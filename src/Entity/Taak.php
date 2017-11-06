<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Taak
 *
 * @ORM\Table(name="taken")
 * @ORM\Entity()
 */
class Taak
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="benaming", type="string", length=255, unique=true)
     */
    private $benaming;

    /**
     * @var string
     *
     * @ORM\Column(name="omschrijving", type="text")
     */
    private $omschrijving;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set benaming
     *
     * @param string $benaming
     *
     * @return Taak
     */
    public function setBenaming($benaming)
    {
        $this->benaming = $benaming;

        return $this;
    }

    /**
     * Get benaming
     *
     * @return string
     */
    public function getBenaming()
    {
        return $this->benaming;
    }

    /**
     * Set omschrijving
     *
     * @param string $omschrijving
     *
     * @return Taak
     */
    public function setOmschrijving($omschrijving)
    {
        $this->omschrijving = $omschrijving;

        return $this;
    }

    /**
     * Get omschrijving
     *
     * @return string
     */
    public function getOmschrijving()
    {
        return $this->omschrijving;
    }
}
