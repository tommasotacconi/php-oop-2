<?php 
class Toy extends Product implements JsonSerializable
{
  // Istance variables
  protected string $material;
  use ValidForMemberSale;

  // Constructor function
  /**
   * Function to istantiate a new product of type Toy
   *
   * @param string $name
   * @param Category $category
   * @param string $price
   * @param string $img
   * @param string $material
   */
  function __construct(string $name, Category $category, float $price, string $img, string $material, float $discount_percentage)
  {
    parent::__construct($name, $category, get_called_class(), $price, $img);
    $this->material = $material;
    $this->setDiscount($discount_percentage);
    $this->discounted_price = $this->getMemberDiscount();
  }

  // Methods
/*   public function jsonSerialize(): mixed {
    $data  = [
      'name' => parent::name,
      'category' => [parent::category['name'], parent::category['icon_img']],
      'type' =>parent::type,
      'price' =>parent::price,
      'type' => Toy::TYPE,
      'compactness' => $this->material,
    ];
    return $data;
  }
 */
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
