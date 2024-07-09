<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Information</title>
<style>
* {
margin: 0%;
padding: 0%;
}
body { display: flex;
justify-content: center; align-items: center;
}
.container { display: flex;
flex-direction: column; margin: 3rem;
align-items: center; justify-content: center;
}
.subcontainer { display: flex;
flex-direction: column; border: 2px solid black; padding: 2rem;
border-radius: 1rem; justify-content: center; align-items: center; height: 17rem;
width: 19rem;
box-shadow: 1px 1px 6px gray;
}
form { display: flex;
flex-direction: column; align-items: center; justify-content: center;
}
input {
 
margin: 2px; width: 15rem;
}
</style>
</head>
<body>
<div class="container">
<div class="subcontainer">
<h2>Student Information Form</h2>
<form method="post" action="">
Roll Number: <input type="text" name="rollNo" required> Name: <input type="text" name="name" required>
Class: <input type="text" name="class" required>
Contact Number: <input type="text" name="contactNo" required> Email ID: <input type="email" name="email" required>
<input type="submit" value="Submit">
</form>
</div>
</div>
<div class="container">
<div class="subcontainer">
<?php
// Check if the form is submitted using POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Get the entered student information
$rollNo = $_POST["rollNo"];
$name = $_POST["name"];
$class = $_POST["class"];
$contactNo = $_POST["contactNo"];
$email = $_POST["email"];
// Display the entered student information
 echo "<h3>Student Information:</h3>"; echo "Roll Number: $rollNo<br>";
echo "Name: $name<br>"; echo "Class: $class<br>";
echo "Contact Number: $contactNo<br>"; echo "Email ID: $email";
}
?>
</div>
</div>
</body>
</html>
 
