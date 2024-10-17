<?php

class Food extends Product implements JsonSerializable
{
  // Istance variables
  protected string $compactness;
  use ValidForMemberSale;

  // Constructor function
  /**
   * Function to istantiate a new product of type Food
   *
   * @param string $name
   * @param Category $category
   * @param string $price
   * @param string $img
   * @param string $compactness
   */
  function __construct(string $name, Category $category, float $price, string $img, string $compactness, float $discount_percentage)
  {
    parent::__construct($name, $category, get_called_class(), $price, $img);
    $this->compactness = $compactness;
    try {
      $this->setDiscount($discount_percentage);
    } catch (InvalidArgumentException $exception){
      echo $exception->getMessage();
    }
    $this->discounted_price = $this->getMemberDiscount();
  }

  // Methods
  // Function to serialize private variable, otherwise non visible during encoding
  public function jsonSerialize(): array {
    $data =  get_object_vars($this);
    return $data;
  }

  // Function for enchoding this class to JSON
  public function toJSON() {
    return json_encode($this);
  }
}

?>
