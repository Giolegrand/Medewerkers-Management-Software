<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Variable
 *
 * @ORM\Table(name="variables")
 * @ORM\Entity()
 */
class Variable
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
     * @ORM\Column(name="naam", type="string", length=255, unique=true)
     */
    private $naam;

    /**
     * @var string
     *
     * @ORM\Column(name="waarde", type="text")
     */
    private $waarde;


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
     * Set naam
     *
     * @param string $naam
     *
     * @return Variable
     */
    public function setNaam($naam)
    {
        $this->naam = $naam;

        return $this;
    }

    /**
     * Get naam
     *
     * @return string
     */
    public function getNaam()
    {
        return $this->naam;
    }

    /**
     * Set waarde
     *
     * @param string $waarde
     *
     * @return Variable
     */
    public function setWaarde($waarde)
    {
        $this->waarde = $waarde;

        return $this;
    }

    /**
     * Get waarde
     *
     * @return string
     */
    public function getWaarde()
    {
        return $this->waarde;
    }
}
