<?php

class Food extends Product
{
  // Istance variables
  private static string $type = 'food';
  private string $compactness;

  // Constructor function
  /**
   * Function to istantiate a new product of type Food
   *
   * @param string $name
   * @param string $category
   * @param string $type
   * @param string $price
   * @param string $compactness
   */
  function __construct(string $name, string $category, float $price, string $compactness)
  {
    parent::__construct($name, $category, $this->type, $price);
    $this->compactness = $compactness;
  }

  // Methods
}

?>
