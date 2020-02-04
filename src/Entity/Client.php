<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ClientRepository")
 */
class Client
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(name= "Nom_complet", type="string", length=255)
     */
    private $nomComplet;
    #private $Nom_complet;

    /**
     * @ORM\Column(type="text")
     */
    private $Email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $gender;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $age;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Group")
     * @ORM\JoinColumn(nullable=false)
     */
    private $idGroup;
    #private $Id_group;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomComplet(): ?string
    {
        return $this->nomComplet;
    }

    public function setNomComplet(string $Nom_complet): self
    {
        $this->nomComplet = $Nom_complet;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(string $Email): self
    {
        $this->Email = $Email;

        return $this;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(string $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(?int $age): self
    {
        $this->age = $age;

        return $this;
    }

    public function getIdGroup(): ?Group
    {
        return $this->idGroup;
    }

    public function setIdGroup(?Group $Id_group): self
    {
        $this->idGroup = $Id_group;

        return $this;
    }
}
