<!-- min con arrey -->


<?php
  $numbers = array(5, 12, 3, 8, 2);
  $min_value = min($numbers);
  echo "The minimum value in the array is: " . $min_value;
?>

<hr>

<!-- max con arrey -->

<?php
  $numbers = array(23, 12, 35, 67, 8, 90);
  $max_value = max($numbers);
  echo "The maximum value in the array is: " . $max_value;
?>

<hr>

<!-- radom max min  -->

<?php
  $min = rand(1, 100);
  $max = rand(101, 200);
  echo "Random minimum value: " . $min . "\n";
  echo "Random maximum value: " . $max;
?>