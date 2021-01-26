<?php 
require_once realpath("vendor/autoload.php");
use Project\Disk;
use Project\Book;
use Project\Furniture;

$disk = new Disk();
$book = new Book();
$furniture = new Furniture();

if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $disk->createBaseProducts($_POST);
  $disk->createProducts("tbl_disk", ["product_id" => $disk->last_id], $_POST);
  $book->createProducts("tbl_book", ["product_id" => $disk->last_id], $_POST);
  $furniture->createProducts("tbl_furniture", ["product_id" => $disk->last_id], $_POST);
}




include 'views/product_add.php';

?>



