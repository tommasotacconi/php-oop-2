<?php 
class Category
{
  // Istance variables
  private string $name;
  private string $icon_img;

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
}

?>
