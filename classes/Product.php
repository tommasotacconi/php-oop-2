<?php 
class Product
{
  // Istance variables
  private string $name;
  private Category $category;
  private string $type;
  private float $price;

  // Constructor function
  function __construct(string $name, Category $category, string $type, float $price)
  {
    $this->name = $name;
    $this->category = $category;
    $this->type = $type;
    $this->price = $price;
  }

  // Methods
  function getMemberDiscount20() {
    return $this->price * 0.80;
  }
}

; ?>
