<?php 
trait ValidForMemberSale {
  protected float $discount_amount;
  protected float $discounted_price;

  /**
   * Function for setting the discount. The function set the discount as a fraction of 1 
   *
   * @param int $discountPercentage
   * @return void
   */
  function setDiscount(float $discount_percentage) {
    if (round($discount_percentage) - $discount_percentage != 0) {
      throw new InvalidArgumentException('discount_percentage percentage must be an integer number');
    } else {
      $this->discount_amount = $discount_percentage / 100;
    }
  }

  function getMemberDiscount() {
    return round($this->price * (1 - $this->discount_amount), 2);
  }
}
?>
