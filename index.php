<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Php Exercise</title>
</head>
<body>
    <h3>print hello World</h3>

    <?php
    echo "Hello World";
    ?>

    <h3>this is php opening and closing tag</h3>
    <?php        ?>

    <h3>single line comment</h3>
    <?php
    //this is single line comment?>

    <h3>multi line comment</h3>

    <?php
    /*this is 
    multi-line 
    comment*/ ?>

    <h3>Statements in PHP have to end with a special character, which one?</h3>

    <?php echo "Hello Sir"; ?>

    <h3>Create a variable named txt and assign the value "Hello".</h3>
    <?php
    $txt = "Hello";
    ?>

    <h3>Create one variable named x, and one variable named y, then use the echo statement to output the sum of x and y.</h3>

    <?php
    $x=5;
    $y=8;
    echo $x+$y;
    ?>

    <h3>Get the length of the string "Hello World!".</h3>
    <?php echo strlen("Hello World!");?>

    <h3>Reverse the string "Hello World!".</h3>
    <?php
    echo strrev ("Hello World!");?>

    <h3>Replace the word "World" with the word "Dolly".</h3>
    <?php
    $oldtxt = "Hello World!";
    $newtxt = str_replace("World","Dolly",$oldtxt);
    ?>

    <h3>Multiply 10 with 5, and output the result.</h3>
    <?php
    echo 10*5;
    ?>

    <h3>Divide 10 by 2, and output the result.</h3>
    <?php echo 10/2; ?>

    <h3>Use the correct comparison operator to check if $a is equal to $b.</h3>
    <?php 
    var_dump($a==$b);
    ?>

    <h3>Use the correct comparison operator to check if $a is NOT equal to $b.</h3>
    <?php
    var_dump($a!=$B);
    ?>

    <h3>
    Output "Hello World" if $a is greater than $b.
    </h3>
    <?php
    $a = 50;
    $b = 10;
    if($a>$b){
        echo "Hello World";
    }
    ?>

    <h3> Output "Hello World" if $a is not equal to $b.</h3>
    <?php
    $a = 50;
    $b = 10;
    if($a!=$b){
        echo "Hello World";
    }
    ?>

    <h3>Output "Yes" if $a is equal to $b, otherwise output "No".</h3>
    <?php
    $a = 50;
    $b = 10;
    if($a=$b){
        echo "Yes";
    } else{
        echo "No";
    }
    ?>

    <h3>Output "1" if $a is equal to $b, print "2" if $a is greater than $b, otherwise output "3".</h3>
    <?php
    $a = 50;
    $b = 10;
    if($a==$b){
        echo "1";
    } 
    elseif ($a>$b) {
        echo "2";
    }

    else {
        echo "3";
    }
    ?>

    <h3>Create a switch statement that will output "Hello" if $color is "red", and "welcome" if $color is "green".</h3>

    <?php
    switch ($color) {
        case 'red':
        echo "hello";
            break;
        case 'green':
        echo "welcome";
            break;
    }
    ?>

    <h3>Add a section that will output "Neither" if $color is neither "red" nor "green".</h3>
    <?php
    switch ($color) {
        case "red":
          echo "Hello";
          break;
        case "green":
          echo "Welcome";
          break;
        
      default:
      
          echo "Neither";
      }
    ?>

    <h3>Output $i as long as $i is less than 6.</h3>
    <?php
    $i=1;
    while ($i < 6) {
        echo $i;
        $i++;
    }
    ?>

    <h3>Output $i as long as $i is less than 6.</h3>
    <?php
    $i=1;
    do {
        echo $i;
        $i++;
    } while ($i < 6);
    ?>

    <h3>Create a loop that runs from 0 to 9.</h3>
    <?php
    for ($i=0; $i < 10 ; $i++) { 
        echo $i;
    }
    ?>

    <h3>Loop through the items in the $colors array.</h3>

    <?php
    $colors = array("red", "green", "blue", "yellow");
    foreach ($color as $x ) {
        echo $x;
    }
    ?>

    <h3>Create a function named myFunction.</h3>
    <?php
    function myFunction(){
        echo "Hello World!";
    }
    ?>

    <h3>Call (execute) a function named myFun.</h3>
    <?php
    function myFun() {
        echo "Hello World!";
      }
      myFunction();
    ?>

    <h3>Inside a function with two parameters, print the first parameter.</h3>
    <?php
    function myFunction0($fname, $lname) {
        echo $fname;
    }
    ?>

    <h3>Let the function return the second value.</h3>
    <?php
    function myFunction1($fname, $lname) {
        return $lname;
    }
    ?>
</body>
</html>