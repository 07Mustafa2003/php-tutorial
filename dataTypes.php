

<!-- Data Types: PHP supports various data types including 
strings, integers, floats, booleans, arrays, and objects. -->

<!-- 1. Strings: -->


<!-- Strings are sequences of characters. PHP provides numerous functions for string manipulation,  -->
<!-- such as concatenation, searching, replacing, and formatting. -->
<?php
$str = "Hello, World!";
echo strlen($str); // Outputs: 13
echo strpos($str, "World"); // Outputs: 7
echo str_replace("World", "PHP", $str); // Outputs: Hello, PHP!
?>



<!-- 2. Integers: -->



<!-- Integers are whole numbers, both positive and negative, without decimal points. -->
<?php
$num = 10;
echo $num + 5; // Outputs: 15

?>


<!-- 3. Floats (Floating Point Numbers): -->



<!-- Floats are numbers with a decimal point or numbers in exponential form. -->
<?php
$float = 3.14;
echo $float * 2; // Outputs: 6.28


?>

<!-- 4. Booleans: -->
<!-- Booleans represent true or false values. -->

<?php
$is_valid = true;
echo $is_valid; // Outputs: 1 (for true)



?>

<!-- 5. Arrays: -->
<!-- Arrays can store multiple values in a single variable. PHP supports indexed arrays, associative arrays, and multidimensional arrays. -->
<?php
// Indexed array
$colors = array("red", "green", "blue");
echo $colors[0]; // Outputs: red

// Associative array
$person = array("name" => "John", "age" => 30);
echo $person["name"]; // Outputs: John

// Multidimensional array
$matrix = array(
    array(1, 2),
    array(3, 4)
);
echo $matrix[0][1]; // Outputs: 2




?>



<!-- 6. Objects: -->
<!-- Objects are instances of classes. They can contain both data (properties) and functions (methods). -->
<?php
class Person {
    public $name;
    public $age;
    
    function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
    
    function greet() {
        echo "Hello, my name is $this->name and I'm $this->age years old.";
    }
}

$person = new Person("Alice", 25);
$person->greet(); // Outputs: Hello, my name is Alice and I'm 25 years old.
?>