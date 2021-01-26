<?php 
require_once realpath("vendor/autoload.php");
use Project\Disk;
use Project\Book;
use Project\Furniture;

$disk = new Disk();
$book = new Book();
$furniture = new Furniture();

if (isset($_POST['delete']) && !empty($_POST['check'])) {
  $id = $_POST['check'];
  $disk->removeBaseProducts("tbl_base", "id", $id); // it will remove base attributes [sku, name, price]
  $disk->removeProducts("tbl_disk", "product_id", $id); // it will remove disk attributes [size]
  $book->removeProducts("tbl_book", "product_id", $id); // it will remove book attributes [weight]
  $furniture->removeProducts("tbl_furniture", "product_id", $id); // it will remove disk attributes [size]
}

include 'views/product_list.php';
?>











