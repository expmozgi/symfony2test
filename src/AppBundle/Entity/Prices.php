<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prices
 *
 * @ORM\Table(name="prices", uniqueConstraints={@ORM\UniqueConstraint(name="i", columns={"price_type_id", "goods_id"})})
 * @ORM\Entity
 */
class Prices
{
    /**
     * @var integer
     *
     * @ORM\Column(name="price_type_id", type="integer", nullable=true)
     */
    private $priceTypeId;

    /**
     * @var integer
     *
     * @ORM\Column(name="goods_id", type="integer", nullable=true)
     */
    private $goodsId;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $price;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set priceTypeId
     *
     * @param integer $priceTypeId
     *
     * @return Prices
     */
    public function setPriceTypeId($priceTypeId)
    {
        $this->priceTypeId = $priceTypeId;

        return $this;
    }

    /**
     * Get priceTypeId
     *
     * @return integer
     */
    public function getPriceTypeId()
    {
        return $this->priceTypeId;
    }

    /**
     * Set goodsId
     *
     * @param integer $goodsId
     *
     * @return Prices
     */
    public function setGoodsId($goodsId)
    {
        $this->goodsId = $goodsId;

        return $this;
    }

    /**
     * Get goodsId
     *
     * @return integer
     */
    public function getGoodsId()
    {
        return $this->goodsId;
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return Prices
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
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
}
