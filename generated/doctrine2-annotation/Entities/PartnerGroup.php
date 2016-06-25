<?php

/**
 * Auto generated by MySQL Workbench Schema Exporter.
 * Version 3.0.2 (doctrine2-annotation) on 2016-06-25 03:44:07.
 * Goto https://github.com/johmue/mysql-workbench-schema-exporter for more
 * information.
 */

namespace ErpNET\App\Models\Doctrine\Entities;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * ErpNET\App\Models\Doctrine\Entities\PartnerGroup
 *
 * @ORM\Entity(repositoryClass="PartnerGroupRepository")
 * @ORM\Table(name="partner_groups", indexes={@ORM\Index(name="partner_groups_mandante_index", columns={"mandante"})})
 */
class PartnerGroup
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer", options={"unsigned":true})
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $created_at;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $updated_at;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $deleted_at;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $mandante;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $grupo;

    /**
     * @ORM\OneToMany(targetEntity="PartnerPartnerGroup", mappedBy="partnerGroup")
     * @ORM\JoinColumn(name="id", referencedColumnName="partner_group_id", nullable=false)
     */
    protected $partnerPartnerGroups;

    public function __construct()
    {
        $this->partnerPartnerGroups = new ArrayCollection();
    }

    /**
     * Set the value of id.
     *
     * @param integer $id
     * @return \ErpNET\App\Models\Doctrine\Entities\PartnerGroup
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of id.
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of created_at.
     *
     * @param \DateTime $created_at
     * @return \ErpNET\App\Models\Doctrine\Entities\PartnerGroup
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * Get the value of created_at.
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set the value of updated_at.
     *
     * @param \DateTime $updated_at
     * @return \ErpNET\App\Models\Doctrine\Entities\PartnerGroup
     */
    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    /**
     * Get the value of updated_at.
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Set the value of deleted_at.
     *
     * @param \DateTime $deleted_at
     * @return \ErpNET\App\Models\Doctrine\Entities\PartnerGroup
     */
    public function setDeletedAt($deleted_at)
    {
        $this->deleted_at = $deleted_at;

        return $this;
    }

    /**
     * Get the value of deleted_at.
     *
     * @return \DateTime
     */
    public function getDeletedAt()
    {
        return $this->deleted_at;
    }

    /**
     * Set the value of mandante.
     *
     * @param string $mandante
     * @return \ErpNET\App\Models\Doctrine\Entities\PartnerGroup
     */
    public function setMandante($mandante)
    {
        $this->mandante = $mandante;

        return $this;
    }

    /**
     * Get the value of mandante.
     *
     * @return string
     */
    public function getMandante()
    {
        return $this->mandante;
    }

    /**
     * Set the value of grupo.
     *
     * @param string $grupo
     * @return \ErpNET\App\Models\Doctrine\Entities\PartnerGroup
     */
    public function setGrupo($grupo)
    {
        $this->grupo = $grupo;

        return $this;
    }

    /**
     * Get the value of grupo.
     *
     * @return string
     */
    public function getGrupo()
    {
        return $this->grupo;
    }

    /**
     * Add PartnerPartnerGroup entity to collection (one to many).
     *
     * @param \ErpNET\App\Models\Doctrine\Entities\PartnerPartnerGroup $partnerPartnerGroup
     * @return \ErpNET\App\Models\Doctrine\Entities\PartnerGroup
     */
    public function addPartnerPartnerGroup(PartnerPartnerGroup $partnerPartnerGroup)
    {
        $this->partnerPartnerGroups[] = $partnerPartnerGroup;

        return $this;
    }

    /**
     * Remove PartnerPartnerGroup entity from collection (one to many).
     *
     * @param \ErpNET\App\Models\Doctrine\Entities\PartnerPartnerGroup $partnerPartnerGroup
     * @return \ErpNET\App\Models\Doctrine\Entities\PartnerGroup
     */
    public function removePartnerPartnerGroup(PartnerPartnerGroup $partnerPartnerGroup)
    {
        $this->partnerPartnerGroups->removeElement($partnerPartnerGroup);

        return $this;
    }

    /**
     * Get PartnerPartnerGroup entity collection (one to many).
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPartnerPartnerGroups()
    {
        return $this->partnerPartnerGroups;
    }

    public function __sleep()
    {
        return array('id', 'created_at', 'updated_at', 'deleted_at', 'mandante', 'grupo');
    }
}