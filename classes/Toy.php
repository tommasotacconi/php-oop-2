<?php 
class Toy extends Product
{
  // Istance variables
  private static string $type = 'toy';
  private string $material;

  // Constructor function
  /**
   * Function to istantiate a new product of type Toy
   *
   * @param string $name
   * @param string $category
   * @param string $type
   * @param string $price
   * @param string $material
   */
  function __construct(string $name, string $category, float $price, string $material)
  {
    parent::__construct($name, $category, $this->type, $price);
    $this->material = $material;
  }

  // Methods
}

?>
