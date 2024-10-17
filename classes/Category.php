<?php 
class Category implements JsonSerializable
{
  // Istance variables
  protected string $name;
  protected string $icon_img;

  // Constructor function
  function __construct($name, $icon_img)
  {
    $this->name = $name;
    $this->icon_img = $icon_img;
  }

  // Methods
  function getIconImg() {
    return $this->icon_img;
  }

  public function jsonSerialize(): mixed {
    $data  = [
      'name' => $this->name,
      'icon_img' => $this->icon_img,
    ];
    return $data;
  }

}

?>
