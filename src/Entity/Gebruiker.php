<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Medewerker
 *
 * @ORM\Table(name="gebruikers")
 * @ORM\Entity()
 */
class Gebruiker implements UserInterface
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
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=255)
     */
    private $role;

    /**
     * @var int
     *
     * @ORM\OneToOne(targetEntity="Medewerker")
     */
    private $medewerker;

    public function getUsername()
    {
        return $this->email;
    }

    public function getSalt()
    {
        // you *may* need a real salt depending on your encoder
        // see section on salt below
        return null;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getRoles()
    {
        return explode(',', $this->role);
    }

    public function eraseCredentials()
    {
    }

    

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Gebruiker
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Gebruiker
     */
    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }

    /**
     * Set role
     *
     * @param string $role
     *
     * @return Gebruiker
     */
    public function setRole($role)
    {
        $this->role = $role;
    
        return $this;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }


    /**
     * Set medewerker
     *
     * @param \App\Entity\Medewerker $medewerker
     *
     * @return Gebruiker
     */
    public function setMedewerker(\App\Entity\Medewerker $medewerker = null)
    {
        $this->medewerker = $medewerker;
    
        return $this;
    }

    /**
     * Get medewerker
     *
     * @return \App\Entity\Medewerker
     */
    public function getMedewerker()
    {
        return $this->medewerker;
    }
}
