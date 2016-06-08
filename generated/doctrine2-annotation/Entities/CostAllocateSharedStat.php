<?php

/**
 * Auto generated by MySQL Workbench Schema Exporter.
 * Version 3.0.2 (doctrine2-annotation) on 2016-05-23 15:00:59.
 * Goto https://github.com/johmue/mysql-workbench-schema-exporter for more
 * information.
 */

namespace ErpNET\App\Models\Doctrine\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * ErpNET\App\Models\Doctrine\Entities\CostAllocateSharedStat
 *
 * @ORM\Entity(repositoryClass="CostAllocateSharedStatRepository")
 * @ORM\Table(name="cost_allocate_shared_stat", indexes={@ORM\Index(name="cost_allocate_shared_stat_cost_allocate_id_index", columns={"cost_allocate_id"}), @ORM\Index(name="cost_allocate_shared_stat_status_id_index", columns={"status_id"})})
 */
class CostAllocateSharedStat
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
     * @ORM\Column(type="integer", options={"unsigned":true})
     */
    protected $cost_allocate_id;

    /**
     * @ORM\Column(type="integer", options={"unsigned":true})
     */
    protected $status_id;

    /**
     * @ORM\ManyToOne(targetEntity="CostAllocate", inversedBy="costAllocateSharedStats")
     * @ORM\JoinColumn(name="cost_allocate_id", referencedColumnName="id", nullable=false)
     */
    protected $costAllocate;

    /**
     * @ORM\ManyToOne(targetEntity="SharedStat", inversedBy="costAllocateSharedStats")
     * @ORM\JoinColumn(name="status_id", referencedColumnName="id", nullable=false)
     */
    protected $sharedStat;

    public function __construct()
    {
    }

    /**
     * Set the value of id.
     *
     * @param integer $id
     * @return \ErpNET\App\Models\Doctrine\Entities\CostAllocateSharedStat
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
     * @return \ErpNET\App\Models\Doctrine\Entities\CostAllocateSharedStat
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
     * @return \ErpNET\App\Models\Doctrine\Entities\CostAllocateSharedStat
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
     * Set the value of cost_allocate_id.
     *
     * @param integer $cost_allocate_id
     * @return \ErpNET\App\Models\Doctrine\Entities\CostAllocateSharedStat
     */
    public function setCostAllocateId($cost_allocate_id)
    {
        $this->cost_allocate_id = $cost_allocate_id;

        return $this;
    }

    /**
     * Get the value of cost_allocate_id.
     *
     * @return integer
     */
    public function getCostAllocateId()
    {
        return $this->cost_allocate_id;
    }

    /**
     * Set the value of status_id.
     *
     * @param integer $status_id
     * @return \ErpNET\App\Models\Doctrine\Entities\CostAllocateSharedStat
     */
    public function setStatusId($status_id)
    {
        $this->status_id = $status_id;

        return $this;
    }

    /**
     * Get the value of status_id.
     *
     * @return integer
     */
    public function getStatusId()
    {
        return $this->status_id;
    }

    /**
     * Set CostAllocate entity (many to one).
     *
     * @param \ErpNET\App\Models\Doctrine\Entities\CostAllocate $costAllocate
     * @return \ErpNET\App\Models\Doctrine\Entities\CostAllocateSharedStat
     */
    public function setCostAllocate(CostAllocate $costAllocate = null)
    {
        $this->costAllocate = $costAllocate;

        return $this;
    }

    /**
     * Get CostAllocate entity (many to one).
     *
     * @return \ErpNET\App\Models\Doctrine\Entities\CostAllocate
     */
    public function getCostAllocate()
    {
        return $this->costAllocate;
    }

    /**
     * Set SharedStat entity (many to one).
     *
     * @param \ErpNET\App\Models\Doctrine\Entities\SharedStat $sharedStat
     * @return \ErpNET\App\Models\Doctrine\Entities\CostAllocateSharedStat
     */
    public function setSharedStat(SharedStat $sharedStat = null)
    {
        $this->sharedStat = $sharedStat;

        return $this;
    }

    /**
     * Get SharedStat entity (many to one).
     *
     * @return \ErpNET\App\Models\Doctrine\Entities\SharedStat
     */
    public function getSharedStat()
    {
        return $this->sharedStat;
    }

    public function __sleep()
    {
        return array('id', 'created_at', 'updated_at', 'cost_allocate_id', 'status_id');
    }
}