<!-- Defining Functions: -->
<!-- You can define your own functions in PHP using the function keyword followed by the function name and parameters (if any). -->
<?php
function greet($name) {
    echo "Hello, $name!";
}

greet("John"); // Outputs: Hello, John!

?>



<!-- Function Parameters: -->
<!-- Functions can accept parameters, which are variables passed to the function when it is called. Parameters can have default values. -->
<?php
function add($num1, $num2) {
    return $num1 + $num2;
}

$result = add(5, 3); // $result is now 8
?>

<!-- Return Values: -->
<!-- Functions can return values using the return statement. A function can return only one value, but that value can be an array or an object containing multiple values. -->
<?php
function multiply($num1, $num2) {
    return $num1 * $num2;
}

$result = multiply(5, 3); // $result is now 15
?>


<!-- Variable Scope: -->
<!-- Variables declared inside a function have local scope and are only accessible within that function. Variables declared outside of any function have global scope and are accessible anywhere in the script. -->
<?php
$num = 10; // global variable

function increment() {
    $num = 20; // local variable
    $num++;
    echo $num; // Outputs: 21
}

increment();
echo $num; // Outputs: 10
?>



<!-- Anonymous Functions (Closures): -->
<!-- PHP supports anonymous functions, also known as closures. These are functions without a specified name that can be assigned to variables or passed as arguments to other functions. -->
<?php
$add = function ($a, $b) {
    return $a + $b;
};

echo $add(3, 4); // Outputs: 7
?>

<!-- Recursive Functions: -->
<!-- A recursive function is a function that calls itself. Recursive functions are useful for solving problems that can be broken down into smaller, similar subproblems. -->

<?php
function factorial($n) {
    if ($n <= 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

echo factorial(5); // Outputs: 120
?>

<!-- Function Overloading: -->
<!-- Unlike some other languages, PHP does not support function overloading (defining multiple functions with the same name but different parameters). However, you can use default parameter values or variable-length argument lists to achieve similar functionality. -->

