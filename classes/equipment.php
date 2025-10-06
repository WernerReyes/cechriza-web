<?php
class EquipmentFunction
{
  public $id;
  public $name;

  public function __construct($id, $name)
  {
    $this->id = $id;
    $this->name = $name;
  }
}

class Equipment
{
  public $id;
  public $name;
  public $description;

  public $long_description;

  public $image;

  public $tecnical_specifications;
  public $function_id;

  public function __construct($id, $name, $description, $long_description, $image, $function_id, $tecnical_specifications = null)
  {
    $this->id = $id;
    $this->name = $name;
    $this->description = $description;
    $this->long_description = $long_description;
    $this->image = $image;
    $this->function_id = $function_id;
    $this->tecnical_specifications = $tecnical_specifications;
  }
}

?>