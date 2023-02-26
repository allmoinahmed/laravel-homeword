<?php
/*
* Task 1: HTML Basics
* Create an HTML form that allows users to input their name and email address. 
* The form should have two fields: one for name and one for email.
* Use appropriate HTML tags to structure the form.
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Basics</title>
</head>
<body>
    <h1>User Information Form</h1>
    <form>
      <label for="name">Name:</label>
      <input type="text" id="name" name="name"><br><br>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email"><br><br>
      <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
/*
* Task 2: Basic OOP in PHP
* Create an instance of the Person class and set the name
* and email properties. Use the getName() and getEmail() 
* methods to display the properties on the webpage.
*/

class Person{
    public $name;
    public $email;

    public function setName($name){
        $this->name = $name;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getName(){
        return $this->name;
    }

    public function getEmail(){
        return $this->email;
    }
}

// Created instance
$obj = new Person();


$obj->setName('Moin Ahmed'); // Setting Name by SetName Method
$obj->setEmail('moinrrahmed@gmail.com'); // Setting Email by SetEmail Method


// Showing Name, Email Information by getName & getEmail Method 
echo "Your Name Is: ".$obj->getName()."\n";
echo "Email Address Is: ".$obj->getEmail();


// 



