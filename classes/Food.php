<?php

class Food extends Product
{
  // Istance variables
  private const string TYPE = 'food';
  private string $compactness;

  // Constructor function
  /**
   * Function to istantiate a new product of type Food
   *
   * @param string $name
   * @param Category $category
   * @param string $type
   * @param string $price
   * @param string $compactness
   */
  function __construct(string $name, Category $category, float $price, string $compactness)
  {
    parent::__construct($name, $category, Food::TYPE, $price);
    $this->compactness = $compactness;
  }

  // Methods
}

?>
