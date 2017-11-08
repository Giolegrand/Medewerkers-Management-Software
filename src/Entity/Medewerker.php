<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Medewerker
 *
 * @ORM\Table(name="medewerkers")
 * @ORM\Entity()
 */
class Medewerker
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
     * @ORM\Column(name="afdeling", type="integer")
     */
    private $afdeling;

    /**
     * @var string
     *
     * @ORM\Column(name="voornaam", type="string", length=255)
     */
    private $voornaam;

    /**
     * @var string
     *
     * @ORM\Column(name="achternaam", type="string", length=255)
     */
    private $achternaam;

    /**
     * @var string
     *
     * @ORM\Column(name="tussenvoegsel", type="string", length=255)
     */
    private $tussenvoegsel;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="geboortedatum", type="date")
     */
    private $geboortedatum;

    /**
     * @var string
     *
     * @ORM\Column(name="adres", type="string", length=255)
     */
    private $adres;

    /**
     * @var string
     *
     * @ORM\Column(name="postcode", type="string", length=10)
     */
    private $postcode;

    /**
     * @var string
     *
     * @ORM\Column(name="woonplaats", type="string", length=255)
     */
    private $woonplaats;

    /**
     * @var string
     *
     * @ORM\Column(name="telefoonPrive", type="string", length=255)
     */
    private $telefoonPrive;

    /**
     * @var string
     *
     * @ORM\Column(name="telefoonMobiel", type="string", length=255)
     */
    private $telefoonMobiel;

    /**
     * @var int
     *
     * @ORM\Column(name="taak", type="integer")
     */
    private $taak;

    /**
     * @var bool
     *
     * @ORM\Column(name="eigenBoot", type="boolean")
     */
    private $eigenBoot;

    /**
     * @var string
     *
     * @ORM\Column(name="eten", type="string", length=255)
     */
    private $eten;

    /**
     * @var bool
     *
     * @ORM\Column(name="dieet", type="boolean")
     */
    private $dieet;

    /**
     * @var string
     *
     * @ORM\Column(name="dieetWens", type="string", length=255)
     */
    private $dieetWens;

    /**
     * @var string
     *
     * @ORM\Column(name="keuzeDagen", type="string", length=255)
     */
    private $keuzeDagen;

    /**
     * @var string
     *
     * @ORM\Column(name="slaapDagen", type="string", length=255)
     */
    private $slaapDagen;

    /**
     * @var string
     *
     * @ORM\Column(name="eetDagen", type="string", length=255)
     */
    private $eetDagen;

    /**
     * @var string
     *
     * @ORM\Column(name="kledingmaat", type="string", length=255)
     */
    private $kledingmaat;

    /**
     * @var string
     *
     * @ORM\Column(name="kenteken", type="string", length=255, nullable=true)
     */
    private $kenteken;

    /**
     * @var string
     *
     * @ORM\Column(name="stuurman", type="string", length=255, nullable=true)
     */
    private $stuurman;

    /**
     * @var int
     *
     * @ORM\Column(name="kamergenoot", type="integer", nullable=true)
     */
    private $kamergenoot;

    /**
     * @var string
     *
     * @ORM\Column(name="foto", type="string", length=255)
     */
    private $foto;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=255)
     */
    private $role;

    /**
     * @var int
     *
     * @ORM\Column(name="accomodatie_id", type="integer")
     */
    private $accomodatieId;

    /**
     * @var string
     *
     * @ORM\Column(name="kamernummer", type="string", length=255)
     */
    private $kamernummer;

    /**
     * @var string
     *
     * @ORM\Column(name="sectorkeuze", type="string", length=255, nullable=true)
     */
    private $sectorkeuze;

    /**
     * @var string
     *
     * @ORM\Column(name="sectorOmschrijving", type="string", length=255, nullable=true)
     */
    private $sectorOmschrijving;

    /**
     * @var bool
     *
     * @ORM\Column(name="rond", type="boolean")
     */
    private $rond;

    /**
     * @var bool
     *
     * @ORM\Column(name="gekeurd", type="boolean")
     */
    private $gekeurd;

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
     * @ORM\Column(name="reanimatie", type="boolean")
     */
    private $reanimatie;

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
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set afdeling
     *
     * @param integer $afdeling
     *
     * @return Medewerker
     */
    public function setAfdeling($afdeling)
    {
        $this->afdeling = $afdeling;

        return $this;
    }

    /**
     * Get afdeling
     *
     * @return int
     */
    public function getAfdeling()
    {
        return $this->afdeling;
    }

    /**
     * Set voornaam
     *
     * @param string $voornaam
     *
     * @return Medewerker
     */
    public function setVoornaam($voornaam)
    {
        $this->voornaam = $voornaam;

        return $this;
    }

    /**
     * Get voornaam
     *
     * @return string
     */
    public function getVoornaam()
    {
        return $this->voornaam;
    }

    /**
     * Set achternaam
     *
     * @param string $achternaam
     *
     * @return Medewerker
     */
    public function setAchternaam($achternaam)
    {
        $this->achternaam = $achternaam;

        return $this;
    }

    /**
     * Get achternaam
     *
     * @return string
     */
    public function getAchternaam()
    {
        return $this->achternaam;
    }

    /**
     * Set tussenvoegsel
     *
     * @param string $tussenvoegsel
     *
     * @return Medewerker
     */
    public function setTussenvoegsel($tussenvoegsel)
    {
        $this->tussenvoegsel = $tussenvoegsel;

        return $this;
    }

    /**
     * Get tussenvoegsel
     *
     * @return string
     */
    public function getTussenvoegsel()
    {
        return $this->tussenvoegsel;
    }

    /**
     * Set geboortedatum
     *
     * @param \DateTime $geboortedatum
     *
     * @return Medewerker
     */
    public function setGeboortedatum($geboortedatum)
    {
        $this->geboortedatum = $geboortedatum;

        return $this;
    }

    /**
     * Get geboortedatum
     *
     * @return \DateTime
     */
    public function getGeboortedatum()
    {
        return $this->geboortedatum;
    }

    /**
     * Set adres
     *
     * @param string $adres
     *
     * @return Medewerker
     */
    public function setAdres($adres)
    {
        $this->adres = $adres;

        return $this;
    }

    /**
     * Get adres
     *
     * @return string
     */
    public function getAdres()
    {
        return $this->adres;
    }

    /**
     * Set postcode
     *
     * @param string $postcode
     *
     * @return Medewerker
     */
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;

        return $this;
    }

    /**
     * Get postcode
     *
     * @return string
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * Set woonplaats
     *
     * @param string $woonplaats
     *
     * @return Medewerker
     */
    public function setWoonplaats($woonplaats)
    {
        $this->woonplaats = $woonplaats;

        return $this;
    }

    /**
     * Get woonplaats
     *
     * @return string
     */
    public function getWoonplaats()
    {
        return $this->woonplaats;
    }

    /**
     * Set telefoonPrive
     *
     * @param string $telefoonPrive
     *
     * @return Medewerker
     */
    public function setTelefoonPrive($telefoonPrive)
    {
        $this->telefoonPrive = $telefoonPrive;

        return $this;
    }

    /**
     * Get telefoonPrive
     *
     * @return string
     */
    public function getTelefoonPrive()
    {
        return $this->telefoonPrive;
    }

    /**
     * Set telefoonMobiel
     *
     * @param string $telefoonMobiel
     *
     * @return Medewerker
     */
    public function setTelefoonMobiel($telefoonMobiel)
    {
        $this->telefoonMobiel = $telefoonMobiel;

        return $this;
    }

    /**
     * Get telefoonMobiel
     *
     * @return string
     */
    public function getTelefoonMobiel()
    {
        return $this->telefoonMobiel;
    }

    /**
     * Set taak
     *
     * @param integer $taak
     *
     * @return Medewerker
     */
    public function setTaak($taak)
    {
        $this->taak = $taak;

        return $this;
    }

    /**
     * Get taak
     *
     * @return int
     */
    public function getTaak()
    {
        return $this->taak;
    }

    /**
     * Set eigenBoot
     *
     * @param boolean $eigenBoot
     *
     * @return Medewerker
     */
    public function setEigenBoot($eigenBoot)
    {
        $this->eigenBoot = $eigenBoot;

        return $this;
    }

    /**
     * Get eigenBoot
     *
     * @return bool
     */
    public function getEigenBoot()
    {
        return $this->eigenBoot;
    }

    /**
     * Set eten
     *
     * @param string $eten
     *
     * @return Medewerker
     */
    public function setEten($eten)
    {
        $this->eten = $eten;

        return $this;
    }

    /**
     * Get eten
     *
     * @return string
     */
    public function getEten()
    {
        return $this->eten;
    }

    /**
     * Set dieet
     *
     * @param boolean $dieet
     *
     * @return Medewerker
     */
    public function setDieet($dieet)
    {
        $this->dieet = $dieet;

        return $this;
    }

    /**
     * Get dieet
     *
     * @return bool
     */
    public function getDieet()
    {
        return $this->dieet;
    }

    /**
     * Set dieetWens
     *
     * @param string $dieetWens
     *
     * @return Medewerker
     */
    public function setDieetWens($dieetWens)
    {
        $this->dieetWens = $dieetWens;

        return $this;
    }

    /**
     * Get dieetWens
     *
     * @return string
     */
    public function getDieetWens()
    {
        return $this->dieetWens;
    }

    /**
     * Set keuzeDagen
     *
     * @param string $keuzeDagen
     *
     * @return Medewerker
     */
    public function setKeuzeDagen($keuzeDagen)
    {
        $this->keuzeDagen = $keuzeDagen;

        return $this;
    }

    /**
     * Get keuzeDagen
     *
     * @return string
     */
    public function getKeuzeDagen()
    {
        return $this->keuzeDagen;
    }

    /**
     * Set slaapDagen
     *
     * @param string $slaapDagen
     *
     * @return Medewerker
     */
    public function setSlaapDagen($slaapDagen)
    {
        $this->slaapDagen = $slaapDagen;

        return $this;
    }

    /**
     * Get slaapDagen
     *
     * @return string
     */
    public function getSlaapDagen()
    {
        return $this->slaapDagen;
    }

    /**
     * Set eetDagen
     *
     * @param string $eetDagen
     *
     * @return Medewerker
     */
    public function setEetDagen($eetDagen)
    {
        $this->eetDagen = $eetDagen;

        return $this;
    }

    /**
     * Get eetDagen
     *
     * @return string
     */
    public function getEetDagen()
    {
        return $this->eetDagen;
    }

    /**
     * Set kledingmaat
     *
     * @param string $kledingmaat
     *
     * @return Medewerker
     */
    public function setKledingmaat($kledingmaat)
    {
        $this->kledingmaat = $kledingmaat;

        return $this;
    }

    /**
     * Get kledingmaat
     *
     * @return string
     */
    public function getKledingmaat()
    {
        return $this->kledingmaat;
    }

    /**
     * Set kenteken
     *
     * @param string $kenteken
     *
     * @return Medewerker
     */
    public function setKenteken($kenteken)
    {
        $this->kenteken = $kenteken;

        return $this;
    }

    /**
     * Get kenteken
     *
     * @return string
     */
    public function getKenteken()
    {
        return $this->kenteken;
    }

    /**
     * Set stuurman
     *
     * @param string $stuurman
     *
     * @return Medewerker
     */
    public function setStuurman($stuurman)
    {
        $this->stuurman = $stuurman;

        return $this;
    }

    /**
     * Get stuurman
     *
     * @return string
     */
    public function getStuurman()
    {
        return $this->stuurman;
    }

    /**
     * Set kamergenoot
     *
     * @param integer $kamergenoot
     *
     * @return Medewerker
     */
    public function setKamergenoot($kamergenoot)
    {
        $this->kamergenoot = $kamergenoot;

        return $this;
    }

    /**
     * Get kamergenoot
     *
     * @return int
     */
    public function getKamergenoot()
    {
        return $this->kamergenoot;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Medewerker
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
     * Set foto
     *
     * @param string $foto
     *
     * @return Medewerker
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }

    /**
     * Get foto
     *
     * @return string
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Medewerker
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
     * @return Medewerker
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
     * Set accomodatieId
     *
     * @param integer $accomodatieId
     *
     * @return Medewerker
     */
    public function setAccomodatieId($accomodatieId)
    {
        $this->accomodatieId = $accomodatieId;

        return $this;
    }

    /**
     * Get accomodatieId
     *
     * @return int
     */
    public function getAccomodatieId()
    {
        return $this->accomodatieId;
    }

    /**
     * Set kamernummer
     *
     * @param string $kamernummer
     *
     * @return Medewerker
     */
    public function setKamernummer($kamernummer)
    {
        $this->kamernummer = $kamernummer;

        return $this;
    }

    /**
     * Get kamernummer
     *
     * @return string
     */
    public function getKamernummer()
    {
        return $this->kamernummer;
    }

    /**
     * Set sectorkeuze
     *
     * @param string $sectorkeuze
     *
     * @return Medewerker
     */
    public function setSectorkeuze($sectorkeuze)
    {
        $this->sectorkeuze = $sectorkeuze;

        return $this;
    }

    /**
     * Get sectorkeuze
     *
     * @return string
     */
    public function getSectorkeuze()
    {
        return $this->sectorkeuze;
    }

    /**
     * Set sectorOmschrijving
     *
     * @param string $sectorOmschrijving
     *
     * @return Medewerker
     */
    public function setSectorOmschrijving($sectorOmschrijving)
    {
        $this->sectorOmschrijving = $sectorOmschrijving;

        return $this;
    }

    /**
     * Get sectorOmschrijving
     *
     * @return string
     */
    public function getSectorOmschrijving()
    {
        return $this->sectorOmschrijving;
    }

    /**
     * Set rond
     *
     * @param boolean $rond
     *
     * @return Medewerker
     */
    public function setRond($rond)
    {
        $this->rond = $rond;

        return $this;
    }

    /**
     * Get rond
     *
     * @return bool
     */
    public function getRond()
    {
        return $this->rond;
    }

    /**
     * Set gekeurd
     *
     * @param boolean $gekeurd
     *
     * @return Medewerker
     */
    public function setGekeurd($gekeurd)
    {
        $this->gekeurd = $gekeurd;

        return $this;
    }

    /**
     * Get gekeurd
     *
     * @return bool
     */
    public function getGekeurd()
    {
        return $this->gekeurd;
    }

    /**
     * Set ehbo
     *
     * @param boolean $ehbo
     *
     * @return Medewerker
     */
    public function setEhbo($ehbo)
    {
        $this->ehbo = $ehbo;

        return $this;
    }

    /**
     * Get ehbo
     *
     * @return bool
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
     * @return Medewerker
     */
    public function setBhv($bhv)
    {
        $this->bhv = $bhv;

        return $this;
    }

    /**
     * Get bhv
     *
     * @return bool
     */
    public function getBhv()
    {
        return $this->bhv;
    }

    /**
     * Set reanimatie
     *
     * @param boolean $reanimatie
     *
     * @return Medewerker
     */
    public function setReanimatie($reanimatie)
    {
        $this->reanimatie = $reanimatie;

        return $this;
    }

    /**
     * Get reanimatie
     *
     * @return bool
     */
    public function getReanimatie()
    {
        return $this->reanimatie;
    }
}
