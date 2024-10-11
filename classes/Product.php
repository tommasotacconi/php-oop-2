<?php 
class Product implements JsonSerializable
{
  // Istance variables
  protected string $name;
  protected Category $category;
  protected string $type;
  protected float $price;
  protected string $img;

  // Constructor function
  function __construct(string $name, Category $category, string $type, float $price, string $img)
  {
    $this->name = $name;
    $this->category = $category;
    $this->type = $type;
    $this->price = $price;
    $this->img = $img;
  }

  // Methods
  function getMemberDiscount20() {
    return $this->price * 0.80;
  }

/*   public function jsonSerialize(): mixed {
    $data  = [
      'name' => $this->name,
      'category' => [$this->category->name, $this->category->icon_img],
      'type' => $this->type,
      'price' => $this->price,
    ];
    return $data;
  }
 */
  // Function to serialize private variable, otherwise non visible during encoding
  public function jsonSerialize(): array {
    $json_data = get_object_vars($this);
    var_dump($json_data);
    return $json_data;
  }

  // Function for enchoding this class to JSON
  public function toJSON() {
    return json_encode($this, JSON_PRETTY_PRINT);
  }
}
?>
