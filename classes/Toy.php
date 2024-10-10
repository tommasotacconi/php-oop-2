<?php 
class Toy extends Product
{
  // Istance variables
  private const TYPE = 'toy';
  private string $material;

  // Constructor function
  /**
   * Function to istantiate a new product of type Toy
   *
   * @param string $name
   * @param Category $category
   * @param string $type
   * @param string $price
   * @param string $material
   */
  function __construct(string $name, Category $category, float $price, string $material)
  {
    parent::__construct($name, $category, Toy::TYPE, $price);
    $this->material = $material;
  }

  // Methods
}

?>
