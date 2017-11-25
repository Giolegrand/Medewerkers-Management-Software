<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * employee
 *
 * @ORM\Table(name="users")
 * @ORM\Entity()
 */
class User implements UserInterface
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
     * @ORM\Column(name="role", type="json")
     */
    private $roles = [];

    /**
     * @var int
     *
     * @ORM\OneToOne(targetEntity="Employee")
     */
    private $employee;

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
    public function setRoles(array $roles)
    {
        $this->role = $roles;
    
        return $this;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRoles()
    {
        return $this->roles;
    }


    /**
     * Set employee
     *
     * @param \App\Entity\employee $employee
     *
     * @return Gebruiker
     */
    public function setEmployee(\App\Entity\Employee $employee = null)
    {
        $this->employee = $employee;
    
        return $this;
    }

    /**
     * Get employee
     *
     * @return \App\Entity\employee
     */
    public function getEmployee()
    {
        return $this->employee;
    }
}
