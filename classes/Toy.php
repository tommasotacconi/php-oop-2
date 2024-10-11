<?php 
class Toy extends Product implements JsonSerializable
{
  // Istance variables
  protected const TYPE = 'toy';
  protected string $material;

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
  function __construct(string $name, Category $category, float $price, string $img, string $material)
  {
    parent::__construct($name, $category, Toy::TYPE, $price, $img);
    $this->material = $material;
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
    $json_data = get_object_vars($this);
    return $json_data;
  }

  // Function for enchoding this class to JSON
  public function toJSON() {
    return json_encode($this);
  }
}

?>
