<!DOCTYPE html>
<html>
<body>

<?php
class Fruit {
  // Properties
  public $name;
  public $color;
  public $taste;
  
  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  function set_color($color) {
    $this->color = $color;
  }
  function get_color() {
    return $this->color;
  }
  function set_taste($taste){
  	$this->taste = $taste;
  }
  function get_taste(){
  	return $this->taste;
  }
}

$apple = new Fruit();
$apple->set_name('Apple');
$apple->set_color('Red');
$apple->set_taste('Sour');
echo "Name: " . $apple->get_name();
echo "<br>";
echo "Color: " .  $apple->get_color();
echo '<br>';
echo "taste: : " . $apple->get_taste();
?>
 
</body>
</html>
