<?php 
class Kennel extends Product implements JsonSerializable
{
  // Istance variables
  protected array $dimensions_mm; //Array of dimensions in the order width, heigth, depth

  // Constructor function
  /**
   * Function to istantiate a new product of type Food
   *
   * @param string $name
   * @param Category $category
   * @param string $price
   * @param string $img
   * @param string $dimension_mm
   */
  function __construct(string $name, Category $category, float $price, string $img, array $dimensions_mm)
  {
    parent::__construct($name, $category, get_called_class(), $price, $img);
    $this->dimensions_mm = $dimensions_mm;
  }

  // Methods
  // Function to serialize private variable, otherwise non visible during encoding
  public function jsonSerialize(): array {
    $data =  get_object_vars($this);
    return $data;
  }
}

?>
