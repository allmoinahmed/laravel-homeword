<?php 
function check_even_odd($number) {
  if ($number % 2 == 0) {
    return "Even";
  } else {
    return "Odd";
  }
}

echo check_even_odd(13);
