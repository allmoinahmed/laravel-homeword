<?php

$fee = 10000;

$commission = ($fee >= 20000) ? ($fee * 0.25) : (($fee >= 10000) ? ($fee * 0.2) : (($fee >= 7000) ? ($fee * 0.15) : 'Invalid Data'));

if ($commission != 'Invalid Data') {
  echo "Your commission is $" . $commission;
} else {
  echo "Invalid Data";
}

?>