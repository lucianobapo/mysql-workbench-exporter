<?php

/**
 * Auto generated by MySQL Workbench Schema Exporter.
 * Version 3.0.2 (doctrine2-annotation) on 2016-06-25 03:44:08.
 * Goto https://github.com/johmue/mysql-workbench-schema-exporter for more
 * information.
 */

namespace ErpNET\App\Models\Doctrine\Entities;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * ErpNET\App\Models\Doctrine\Entities\SharedCurrency
 *
 * @ORM\Entity(repositoryClass="SharedCurrencyRepository")
 * @ORM\Table(name="shared_currencies")
 */
class SharedCurrency
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
     * @ORM\Column(type="string", length=3)
     */
    protected $nome_universal;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $descricao;

    /**
     * @ORM\OneToMany(targetEntity="ItemOrder", mappedBy="sharedCurrency")
     * @ORM\JoinColumn(name="id", referencedColumnName="currency_id", nullable=false)
     */
    protected $itemOrders;

    /**
     * @ORM\OneToMany(targetEntity="Order", mappedBy="sharedCurrency")
     * @ORM\JoinColumn(name="id", referencedColumnName="currency_id", nullable=false)
     */
    protected $orders;

    public function __construct()
    {
        $this->itemOrders = new ArrayCollection();
        $this->orders = new ArrayCollection();
    }

    /**
     * Set the value of id.
     *
     * @param integer $id
     * @return \ErpNET\App\Models\Doctrine\Entities\SharedCurrency
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
     * @return \ErpNET\App\Models\Doctrine\Entities\SharedCurrency
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
     * @return \ErpNET\App\Models\Doctrine\Entities\SharedCurrency
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
     * @return \ErpNET\App\Models\Doctrine\Entities\SharedCurrency
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
     * Set the value of nome_universal.
     *
     * @param string $nome_universal
     * @return \ErpNET\App\Models\Doctrine\Entities\SharedCurrency
     */
    public function setNomeUniversal($nome_universal)
    {
        $this->nome_universal = $nome_universal;

        return $this;
    }

    /**
     * Get the value of nome_universal.
     *
     * @return string
     */
    public function getNomeUniversal()
    {
        return $this->nome_universal;
    }

    /**
     * Set the value of descricao.
     *
     * @param string $descricao
     * @return \ErpNET\App\Models\Doctrine\Entities\SharedCurrency
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get the value of descricao.
     *
     * @return string
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Add ItemOrder entity to collection (one to many).
     *
     * @param \ErpNET\App\Models\Doctrine\Entities\ItemOrder $itemOrder
     * @return \ErpNET\App\Models\Doctrine\Entities\SharedCurrency
     */
    public function addItemOrder(ItemOrder $itemOrder)
    {
        $this->itemOrders[] = $itemOrder;

        return $this;
    }

    /**
     * Remove ItemOrder entity from collection (one to many).
     *
     * @param \ErpNET\App\Models\Doctrine\Entities\ItemOrder $itemOrder
     * @return \ErpNET\App\Models\Doctrine\Entities\SharedCurrency
     */
    public function removeItemOrder(ItemOrder $itemOrder)
    {
        $this->itemOrders->removeElement($itemOrder);

        return $this;
    }

    /**
     * Get ItemOrder entity collection (one to many).
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getItemOrders()
    {
        return $this->itemOrders;
    }

    /**
     * Add Order entity to collection (one to many).
     *
     * @param \ErpNET\App\Models\Doctrine\Entities\Order $order
     * @return \ErpNET\App\Models\Doctrine\Entities\SharedCurrency
     */
    public function addOrder(Order $order)
    {
        $this->orders[] = $order;

        return $this;
    }

    /**
     * Remove Order entity from collection (one to many).
     *
     * @param \ErpNET\App\Models\Doctrine\Entities\Order $order
     * @return \ErpNET\App\Models\Doctrine\Entities\SharedCurrency
     */
    public function removeOrder(Order $order)
    {
        $this->orders->removeElement($order);

        return $this;
    }

    /**
     * Get Order entity collection (one to many).
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOrders()
    {
        return $this->orders;
    }

    public function __sleep()
    {
        return array('id', 'created_at', 'updated_at', 'deleted_at', 'nome_universal', 'descricao');
    }
}