<?php
class Product{
    public $productName;
    public $productPrice;
    public $salesPrice;

    function calculate_sales_price(){
        $this->salesPrice = round($this->productPrice *1.2 ,2);
    }

}
 class Computer extends Product{
    var $Processor;

 }


$myProduct = new Computer;
$myProduct->productName = "Apple";
$myProduct->salesPrice = 12;
$myProduct->productPrice =12 * 2;
$myProduct->Processor="intel";
$myArray = get_object_vars($myProduct);
echo "<pre>";
print_r($myArray);
echo "</pre>"
?>