<?php 
namespace Project;
use Project\Product;

class Furniture extends Product 
{
  public 
    $height,
    $width,
    $length;

  public function foreach($param)
  {
    foreach($param as $attributes) {
      return $this->param = $attributes;
    }
  }

  public function isSet($field)
  {
    return isset($field) ? $field : NULL;
  }

  /* ---------- Start Fetch Product Section ---------- */
  
  public function setProducts($table, $param, $product_id, $id) 
  {
    $this->table = $table;
    $this->product_id = $product_id;
    $this->id = $id;
    $this->foreach($param);
    $this->selectFrom("SELECT $this->param FROM $this->table WHERE $this->product_id = $this->id");
  }

  public function selectFrom($sql)
  {
    $stmt = $this->database->query($sql);
    $stmt = $this->database->single();
    $this->counter($stmt);
  }

  public function counter($field)
  {
    $this->database->rowCount() > 0 ? 
    $this->getProducts([$field->height, $field->width, $field->length]) : NULL;
  }

  public function getProducts($product)
  {
    print("Dimension: " . $product[0] . "x" . $product[1] . "x" . $product[2]);
  }

  /* ---------- End of Fetch Product Section ---------- */

  /* ---------- Start Add Product Section ---------- */

  public function setFields($fields)
  { 
    return [
      "height" => $this->isSet($fields["height"]),
      "width"  => $this->isSet($fields["width"]),
      "length" => $this->isSet($fields["length"])
    ]; 
  }

  public function insertInto($sql)
  {
    $this->database->query($sql);
    $this->database->execute();
  }

  public function createProducts($table, $last_id, $fields)
  {
    $fieldpost = $this->setFields($fields);
    $post_Fields = array_keys($fieldpost);
    $post_Value = array_values($fieldpost);
    $getPosts = implode(",", $post_Fields);
    $getValues = implode("','", $post_Value);
    $values = "'" . $getValues . "'"; 
    $product_id_key = array_keys($last_id);
    $product_id = $last_id["product_id"];
    $this->insertInto("INSERT INTO $table ($product_id_key[0], $getPosts) VALUES ($product_id, $values)");
  }

   /* ---------- End of Add Product Section ---------- */

  public function removeProducts($table, $key, $removeId)
  {
    foreach($removeId as $id) {
      $this->database->query("DELETE FROM $table WHERE $key = $id");
      $this->database->execute();
    }
  }
}

?>