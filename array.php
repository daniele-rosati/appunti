<!-- array esempi -->


<?php
  $myArray = array("apple", "banana", "cherry", "date", "elderberry");

  // Access the first element of the array
  echo $myArray[0]; // Output: apple

  // Access the last element of the array
  echo $myArray[count($myArray) - 1]; // Output: elderberry

  // Loop through the array
  foreach ($myArray as $fruit) {
    echo $fruit . "\n";
  }

  // Output:
  // apple
  // banana
  // cherry
  // date
  // elderberry
?>

