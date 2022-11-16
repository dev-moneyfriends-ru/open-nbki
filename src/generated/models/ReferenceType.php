<?php

namespace mfteam\nbch\generated\models;

/**
 * Class representing ReferenceType
 *
 * 
 * XSD Type: Reference
 */
class ReferenceType
{

    /**
     * @var string $userReference
     */
    private $userReference = null;

    /**
     * @var string $product
     */
    private $product = null;

    /**
     * @var string[] $productAddOn
     */
    private $productAddOn = [
        
    ];

    /**
     * Gets as userReference
     *
     * @return string
     */
    public function getUserReference()
    {
        return $this->userReference;
    }

    /**
     * Sets a new userReference
     *
     * @param string $userReference
     * @return self
     */
    public function setUserReference($userReference)
    {
        $this->userReference = $userReference;
        return $this;
    }

    /**
     * Gets as product
     *
     * @return string
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Sets a new product
     *
     * @param string $product
     * @return self
     */
    public function setProduct($product)
    {
        $this->product = $product;
        return $this;
    }

    /**
     * Adds as productAddOn
     *
     * @return self
     * @param string $productAddOn
     */
    public function addToProductAddOn($productAddOn)
    {
        $this->productAddOn[] = $productAddOn;
        return $this;
    }

    /**
     * isset productAddOn
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProductAddOn($index)
    {
        return isset($this->productAddOn[$index]);
    }

    /**
     * unset productAddOn
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProductAddOn($index)
    {
        unset($this->productAddOn[$index]);
    }

    /**
     * Gets as productAddOn
     *
     * @return string[]
     */
    public function getProductAddOn()
    {
        return $this->productAddOn;
    }

    /**
     * Sets a new productAddOn
     *
     * @param string[] $productAddOn
     * @return self
     */
    public function setProductAddOn(array $productAddOn)
    {
        $this->productAddOn = $productAddOn;
        return $this;
    }


}

