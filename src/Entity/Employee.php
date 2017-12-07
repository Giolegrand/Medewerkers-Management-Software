<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Employee
 *
 * @ORM\Table(name="employees")
 * @ORM\Entity()
 */
class Employee
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
     * @var int
     *
     * @ORM\Column(name="department", type="integer")
     */
    private $department;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=255)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="surname", type="string", length=255)
     */
    private $surname;

    /**
     * @var string
     *
     * @ORM\Column(name="abbriviation", type="string", length=255)
     */
    private $abbriviation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateOfBirth", type="date")
     */
    private $dateOfBirth;

    /**
     * @var string
     *
     * @ORM\Column(name="adress", type="string", length=255)
     */
    private $adress;

    /**
     * @var string
     *
     * @ORM\Column(name="picture", type="string", length=255)
     */
    private $picture;

    /**
     * @var string
     *
     * @ORM\Column(name="postalCode", type="string", length=10)
     */
    private $postalCode;

    /**
     * @var string
     *
     * @ORM\Column(name="livingArea", type="string", length=255)
     */
    private $livingArea;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=255)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="mobile", type="string", length=255)
     */
    private $mobile;

    /**
     * @var int
     *
     * @ORM\Column(name="taak", type="integer")
     */
    private $taak;

    /**
     * @var bool
     *
     * @ORM\Column(name="additional", type="json")
     */
    private $additional;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=255)
     */
    private $role;

    /**
     * @var bool
     *
     * @ORM\Column(name="ehbo", type="boolean")
     */
    private $ehbo;

    /**
     * @var bool
     *
     * @ORM\Column(name="bhv", type="boolean")
     */
    private $bhv;

    /**
     * @var bool
     *
     * @ORM\Column(name="reanimation", type="boolean")
     */
    private $reanimation;

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
     * Set department
     *
     * @param integer $department
     *
     * @return Employee
     */
    public function setDepartment($department)
    {
        $this->department = $department;
    
        return $this;
    }

    /**
     * Get department
     *
     * @return integer
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return Employee
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    
        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set surname
     *
     * @param string $surname
     *
     * @return Employee
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
    
        return $this;
    }

    /**
     * Get surname
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set abbriviation
     *
     * @param string $abbriviation
     *
     * @return Employee
     */
    public function setAbbriviation($abbriviation)
    {
        $this->abbriviation = $abbriviation;
    
        return $this;
    }

    /**
     * Get abbriviation
     *
     * @return string
     */
    public function getAbbriviation()
    {
        return $this->abbriviation;
    }

    /**
     * Get Picture
     *
     * @return string
     */
    public function getPicture(){
        return $this->picture;
    }

    /**
     * Set picture
     *
     * @param string $picture
     * 
     * @return Employee
     */
    public function setPicture($picture){
        $this->picture = $picture;

        return $this;
    }

    /**
     * Set dateOfBirth
     *
     * @param \DateTime $dateOfBirth
     *
     * @return Employee
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;
    
        return $this;
    }

    /**
     * Get dateOfBirth
     *
     * @return \DateTime
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * Set adress
     *
     * @param string $adress
     *
     * @return Employee
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;
    
        return $this;
    }

    /**
     * Get adress
     *
     * @return string
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * Set postalCode
     *
     * @param string $postalCode
     *
     * @return Employee
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
    
        return $this;
    }

    /**
     * Get postalCode
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Set livingArea
     *
     * @param string $livingArea
     *
     * @return Employee
     */
    public function setLivingArea($livingArea)
    {
        $this->livingArea = $livingArea;
    
        return $this;
    }

    /**
     * Get livingArea
     *
     * @return string
     */
    public function getLivingArea()
    {
        return $this->livingArea;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     *
     * @return Employee
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    
        return $this;
    }

    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set mobile
     *
     * @param string $mobile
     *
     * @return Employee
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
    
        return $this;
    }

    /**
     * Get mobile
     *
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set taak
     *
     * @param integer $taak
     *
     * @return Employee
     */
    public function setTaak($taak)
    {
        $this->taak = $taak;
    
        return $this;
    }

    /**
     * Get taak
     *
     * @return integer
     */
    public function getTaak()
    {
        return $this->taak;
    }

    /**
     * Set additional
     *
     * @param json $additional
     *
     * @return Employee
     */
    public function setAdditional($additional)
    {
        $this->additional = $additional;
    
        return $this;
    }

    /**
     * Get additional
     *
     * @return json
     */
    public function getAdditional()
    {
        return $this->additional;
    }

    /**
     * Set role
     *
     * @param string $role
     *
     * @return Employee
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
     * Set ehbo
     *
     * @param boolean $ehbo
     *
     * @return Employee
     */
    public function setEhbo($ehbo)
    {
        $this->ehbo = $ehbo;
    
        return $this;
    }

    /**
     * Get ehbo
     *
     * @return boolean
     */
    public function getEhbo()
    {
        return $this->ehbo;
    }

    /**
     * Set bhv
     *
     * @param boolean $bhv
     *
     * @return Employee
     */
    public function setBhv($bhv)
    {
        $this->bhv = $bhv;
    
        return $this;
    }

    /**
     * Get bhv
     *
     * @return boolean
     */
    public function getBhv()
    {
        return $this->bhv;
    }

    /**
     * Set reanimation
     *
     * @param boolean $reanimation
     *
     * @return Employee
     */
    public function setReanimation($reanimation)
    {
        $this->reanimation = $reanimation;
    
        return $this;
    }

    /**
     * Get reanimation
     *
     * @return boolean
     */
    public function getReanimation()
    {
        return $this->reanimation;
    }
}
