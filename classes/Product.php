<?php 
namespace Project;
use Project\Database;
use Project\Disk;
use Project\Book;
use Project\Furniture;

abstract class Product extends Database
{
  public abstract function setProducts($table, $param, $product_id, $id);
  public abstract function createProducts($table, $last_id, $fields);
  public abstract function removeProducts($table, $key, $removeId);
  public abstract function selectFrom($sql);
  public abstract function getProducts($product);
  public abstract function counter($field);
  public abstract function foreach($param);
  public abstract function isSet($field);
  public abstract function setFields($fields);
  public abstract function insertInto($sql);

  public
    $stmt = NULL,
    $exist = NULL,
    $product_id = NULL,
    $last_id = NULL,
    $id = NULL,
    $query = NULL,
    $sql = NULL,
    $table = NULL,
    $param = [],
    $database = NULL;

  public function __construct()
  {
    $this->database = new Database();
  }

  /*
    function gets table name
   */ 
  public function getBaseProducts($table)
  {
    $statement = $this->database->query("SELECT * FROM $table");
    $statement = $this->database->resultSet();
    return $statement;
  }

  /*
    function gets two variables function. first variable is name of table and second variable is array type and array can be filled
    one, two or more attributes. we need get last id from base table [tbl_base], because when we delete attributes from main [tbl_base] table, we also 
    delete attributes from secondary classes with exactly same id, which is written into table as [product_id].
  */
  

  public function createBaseProducts($post)
  {
    $fields = [
          'sku' => $post["sku"],
          'name' => $post["name"],
          'price' => $post["price"],
    ];

    $post_Name = array_keys($fields);
    $post_Value = array_values($fields);
    $getPosts = implode(",", $post_Name);
    $getValues = implode("','", $post_Value);
    $values = "'" . $getValues . "'";
    $this->sql = "INSERT INTO tbl_base ($getPosts) VALUES ($values)";
    $this->database->query($this->sql);
    $this->database->execute();
    $last = $this->last_id = $this->database->last();
    return $last;
  }

  /*
    function removes products from base [tbl_base] table. if quantity of id is more than one, removes all checked id.
  */
  public function removeBaseProducts($table, $key, $removeId)
  {
    foreach($removeId as $id) {
      $this->database->query("DELETE FROM $table WHERE $key = $id");
      $this->database->execute();
    }
  }
}

?>