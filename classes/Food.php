<?php

class Food extends Product implements JsonSerializable
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
  function __construct(string $name, Category $category, float $price, string $img, string $compactness)
  {
    parent::__construct($name, $category, Food::TYPE, $price, $img);
    $this->compactness = $compactness;
  }

  // Methods
/*   public function jsonSerialize(): mixed {
    $data  = [
      'type' => Food::TYPE,
      'compactness' => $this->compactness,
    ];
    return $data;
 */
  // Function to serialize private variable, otherwise non visible during encoding
  public function jsonSerialize(): array {
    return get_object_vars($this);
  }

  // Function for enchoding this class to JSON
  public function toJSON() {
    return json_encode($this);
  }
}

?>
