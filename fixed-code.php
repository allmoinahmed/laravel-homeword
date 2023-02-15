<?php
function resultCGPA ($input){
  $CGPA = ($input >= 4.00) ? $input." is A+":
  (($input >= 3.75 && $input < 4.00) ? $input." is A":
  (($input >= 3.50 && $input < 3.75) ? $input." is A-":
  (($input >= 3.25 && $input < 3.50) ? $input." is B+":
  (($input >= 3.00 && $input < 3.25) ? $input." is B":
  (($input >= 2.75 && $input < 3.00) ? $input." is B-":
  (($input >= 2.50 && $input < 2.75) ? $input." is C+":
  (($input >= 2.25 && $input < 2.50) ? $input." is C":
  (($input >= 2.00 && $input < 2.25) ? $input." is D":
  (($input >= 1.00 && $input < 2.00) ? $input." is F":
  (($input >= 0.00 && $input < 1.00) ? $input." is F": "Invalid Input"))))))))));
  return $CGPA;
}

echo resultCGPA(4.00);


/*
* PROBLEM IS IN HERE 
* $CGPA = ($input >= 4.00 ? $input." is A+"):
* ' ) ' last braket should be after 4.00 - Like this -> 
* $CGPA = ($input >= 4.00) ? $input." is A+":
* NOT This: $CGPA = ($input >= 4.00 ? $input." is A+"):
*/
