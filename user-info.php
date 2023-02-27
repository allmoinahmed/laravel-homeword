<?php

class Person{
    public $name;
    public $email;
    public $ErName = false;
    public $ErEmail = false;

    public function setName($name){
        ($name) ? $this->name = $name : $this->ErName = true;       
    }

    public function setEmail($email){
        ($email) ? $this->email = $email : $this->ErEmail = true;
    }
    
    public function getName(){
        return ($this->ErName) ? "Please enter a name.<br>" : "Your Name is: {$this->name}.<br>";
    }

    public function getEmail(){
        return ($this->ErEmail) ? "Please enter an email.<br>" : "Your Email is: {$this->email}.<br>";
    }
}


$value1 = '';
$value2 = '';
$data = '';
$error = '';
// Display Function
function displayInformation($x, $y){    
    $obj = new Person(); // Created instance
    $obj->setName($x); // Setting Name by SetName Method
    $obj->setEmail($y); // Setting Email by SetEmail Method
    $info = <<<EOF
    {$obj->getName()} {$obj->getEmail()}
    EOF;    
    return $info;
}

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    ($name) ? $value1 = $name : $value1 = '';
    ($email) ? $value2 = $email : $value2 = '';
    $data = displayInformation($name, $email);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information PHP Form</title>
    <style>
 @import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;0,900;1,300&display=swap');body {font-family: 'Lato', sans-serif;font-size: small;background-color: #DDC9B4;margin: 0 auto;display: flex;}.userForm {width: 600px;height: 600px;margin: 0 auto;display: grid;background: #fff;position: relative;top: 150px;}.userForm .formContent {width: 60%;height: auto;float: left;margin: auto;}.userForm .formContent h1 {font-size: 34px;font-weight: bold;text-align: center;line-height: 34px;}.userForm .formContent form {width: 100%;float: left;}.userForm .formContent label {width: 100%;float: left;margin-bottom: 10px;}.userForm .formContent label span {width: 100%;float: left;font-size: 22px;margin-bottom: 10px;}.userForm .formContent label input[type="text"], .userForm .formContent label input[type="email"] {width: -webkit-fill-available;float: left;min-height: 40px;font-size: 20px;padding: 0 10px;color: #000;border: 1px #808080 solid;border-radius: 3px;outline: none;background: #8080801a;}.userForm .formContent input[type="submit"],.userForm .formContent input[type="reset"] {width: -webkit-fill-available;float: left;min-height: 60px;font-size: 20px;padding: 0 10px;color: #000;border: 1px #808080 solid;border-radius: 3px;outline: none;background: #8080801a;cursor: pointer;margin-top: 20px;line-height: 40px;}.showData {width: -webkit-fill-available;float: left;font-size: 18px;margin: 15px 0;line-height: 30px;font-weight: bold;background: #2A3D45;color: #fff;padding: 8px 15px;min-height: 60px;}
    </style>
</head>
<body>
<div class="userForm">
    <div class="formContent">
        <h1>PHP User Information Form</h1>
        <form method="POST">
            <label for="name">
                <span>Name:</span>
                <input type="text" id="name" name="name" value="<?php echo $value1;?>">
            </label>
            <label for="email">
                <span>Email:</span>
                <input type="email" id="email" name="email" value="<?php echo $value2;?>">
            </label>
            <input type="submit" name="submit" value="Submit">
            <input type="reset" name="reset" value="Reset" onclick="window.location.reload(true);">
        </form>
        <div class="showData" style="<?php echo ($data) ? 'display:block;' : 'display:none;';?>">
            <?php echo $data;?>
        </div>        
    </div>
</div>
</body>
</html>