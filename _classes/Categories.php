<?php 

class Categories {

  public $id;
  public $name;

  /**
   * Categories constructor
   *
   * @param [type] $id
   */
  function __construct($id) {
    global $db;
    $id = str_secur($id);
    $reqCategory = $db->prepare('SELECT * FROM categories WHERE id= ?');
    $reqCategory->execute([$id]); 
    $data = $reqCategory->fetch();

    $this->id = $id; 
    $this->name = $data['name'];
  }

  /**
   * Envoie de toutes les catégories
   *
   * @return array
   */
  static function getAllCategories() {
    global $db; 

    $reqCategories = $db->prepare('SELECT * FROM categories'); 
    $reqCategories->execute([]);
    return $reqCategories->fetchAll();
  }
}
?>