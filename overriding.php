<?php 

class Product{
    var $productName;
    var $costPrice;
    var $salesPrice;

    function display(){
        echo "Name of the product :" . $this->productName ."</br><br>";
        echo 'Sales price :' . $this->salesPrice ."</br><br>";
    }

}


class Computer extends Product{
    public $processor;
    public $hardDisk;
    public $Ram;

    function display(){
        echo "<b>Sales Info</b> </br><br>";
        echo "Name of the product :" . $this->productName ."</br><br>";
        echo 'Sales price :' . $this->salesPrice ."</br><br>";
        echo 'Computer Processor :' . $this->processor ."</br><br>";
    }

}


$newProduct = new Product;
$newProduct ->productName = 'Fan';
$newProduct ->costPrice = 500;
$newProduct ->salesPrice = 400;

$newProduct->display();

$computer = new Computer;
$computer -> productName ="Mac";
$computer -> salesPrice =100;
$computer -> processor ="ïntel";
$computer->display();

?>