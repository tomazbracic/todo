<?php

namespace Astina\TodoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Todo
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Astina\TodoBundle\Entity\TodoRepository")
 */
class Todo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="item_code", type="integer")
     */
    private $itemCode;

    /**
     * @var string
     *
     * @ORM\Column(name="item_name", type="string", length=255)
     */
    private $itemName;

    /**
     * @var integer
     *
     * @ORM\Column(name="item_price", type="integer")
     */
    private $itemPrice;

    /**
     * @var integer
     *
     * @ORM\Column(name="item_quantity", type="integer")
     */
    private $itemQuantity;

    /**
     * @var string
     *
     * @ORM\Column(name="item_status", type="string", length=255)
     */
    private $itemStatus;


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
     * Set itemCode
     *
     * @param integer $itemCode
     * @return Todo
     */
    public function setItemCode($itemCode)
    {
        $this->itemCode = $itemCode;

        return $this;
    }

    /**
     * Get itemCode
     *
     * @return integer 
     */
    public function getItemCode()
    {
        return $this->itemCode;
    }

    /**
     * Set itemName
     *
     * @param string $itemName
     * @return Todo
     */
    public function setItemName($itemName)
    {
        $this->itemName = $itemName;

        return $this;
    }

    /**
     * Get itemName
     *
     * @return string 
     */
    public function getItemName()
    {
        return $this->itemName;
    }

    /**
     * Set itemPrice
     *
     * @param integer $itemPrice
     * @return Todo
     */
    public function setItemPrice($itemPrice)
    {
        $this->itemPrice = $itemPrice;

        return $this;
    }

    /**
     * Get itemPrice
     *
     * @return integer 
     */
    public function getItemPrice()
    {
        return $this->itemPrice;
    }

    /**
     * Set itemQuantity
     *
     * @param integer $itemQuantity
     * @return Todo
     */
    public function setItemQuantity($itemQuantity)
    {
        $this->itemQuantity = $itemQuantity;

        return $this;
    }

    /**
     * Get itemQuantity
     *
     * @return integer 
     */
    public function getItemQuantity()
    {
        return $this->itemQuantity;
    }

    /**
     * Set itemStatus
     *
     * @param string $itemStatus
     * @return Todo
     */
    public function setItemStatus($itemStatus)
    {
        $this->itemStatus = $itemStatus;

        return $this;
    }

    /**
     * Get itemStatus
     *
     * @return string 
     */
    public function getItemStatus()
    {
        return $this->itemStatus;
    }
}
