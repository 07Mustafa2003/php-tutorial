<!-- Conditional Statements: -->
<!-- Conditional statements allow you to execute different blocks of code based on certain conditions. 
In PHP, you have if, else if (or elseif), and else statements. -->




<!-- if Statement: -->
<!-- The if statement executes a block of code if a specified condition is true. -->




<?php
$age = 25;
if ($age >= 18) {
    echo "You are an adult.";
}

?>

<!-- else if Statement: -->
<!-- The else if statement allows you to add additional conditions to the if statement. -->
<?php
$age = 25;
if ($age < 18) {
    echo "You are a minor.";
} elseif ($age >= 18 && $age < 65) {
    echo "You are an adult.";
} else {
    echo "You are a senior citizen.";
}


?>

<!-- else Statement: -->
<!-- The else statement specifies a block of code to execute if the condition in the if statement is false. -->
<?php
$age = 10;
if ($age >= 18) {
    echo "You are an adult.";
} else {
    echo "You are a minor.";
}
?>

<!-- Loops: -->
<!-- Loops allow you to execute a block of code multiple times. PHP supports several types of loops: -->
<!-- for Loop: -->
<!-- The for loop executes a block of code a specified number of times. -->
<?php
for ($i = 0; $i < 5; $i++) {
    echo $i . ", ";
}
// Outputs: 0, 1, 2, 3, 4,
?>


<!-- while Loop: -->
<!-- The while loop executes a block of code as long as the specified condition is true. -->

<?php
$num = 0;
while ($num < 5) {
    echo $num . ", ";
    $num++;
}
// Outputs: 0, 1, 2, 3, 4,

?>


<!-- do-while Loop: -->
<!-- The do-while loop is similar to the while loop, but it always executes the block of code at least once before checking the condition. -->

<?php
$num = 0;
do {
    echo $num . ", ";
    $num++;
} while ($num < 5);
// Outputs: 0, 1, 2, 3, 4,
?>

<!-- foreach Loop: -->
<!-- The foreach loop is used to iterate over arrays. -->

<?php
$colors = array("red", "green", "blue");
foreach ($colors as $color) {
    echo $color . ", ";
}
// Outputs: red, green, blue,
?>