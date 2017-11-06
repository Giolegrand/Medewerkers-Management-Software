<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Afdeling
 *
 * @ORM\Table(name="afdelingen")
 * @ORM\Entity()
 */
class Afdeling
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
     * @ORM\Column(name="frontName", type="string", length=255, unique=true)
     */
    private $frontName;

    /**
     * @var string
     *
     * @ORM\Column(name="form", type="text")
     */
    private $form;

    /**
     * @var int
     *
     * @ORM\Column(name="manager", type="integer")
     */
    private $manager;

    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean")
     */
    private $active;


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
     * Set frontName
     *
     * @param string $frontName
     *
     * @return Afdeling
     */
    public function setFrontName($frontName)
    {
        $this->frontName = $frontName;

        return $this;
    }

    /**
     * Get frontName
     *
     * @return string
     */
    public function getFrontName()
    {
        return $this->frontName;
    }

    /**
     * Set form
     *
     * @param string $form
     *
     * @return Afdeling
     */
    public function setForm($form)
    {
        $this->form = $form;

        return $this;
    }

    /**
     * Get form
     *
     * @return string
     */
    public function getForm()
    {
        return $this->form;
    }

    /**
     * Set manager
     *
     * @param integer $manager
     *
     * @return Afdeling
     */
    public function setManager($manager)
    {
        $this->manager = $manager;

        return $this;
    }

    /**
     * Get manager
     *
     * @return int
     */
    public function getManager()
    {
        return $this->manager;
    }

    /**
     * Set Active
     *
     * @param boolean $active
     *
     * @return Afdeling
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get manager
     *
     * @return boolean
     */
    public function getActive()
    {
        return $this->active;
    }
}
