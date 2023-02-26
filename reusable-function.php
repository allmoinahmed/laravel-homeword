<?php 
function check_even_odd($number) {
  if ($number % 2 == 0) {
    return "Even";
  } else {
    return "Odd";
  }
}

echo check_even_odd(13);

// SUM Function...
$sum = 0;
for ($i = 1; $i <= 100; $i++) {
    $sum += $i;
}
echo "Sum of the series 1 + 2 + 3 + ..... + 100 is: " . $sum;
?>
 