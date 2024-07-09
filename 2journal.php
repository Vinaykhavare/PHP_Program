<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<style>
.container{ display: flex;
flex-direction: column; height: 95vh;
width: 100%;
align-items: center; justify-content: center;

}
.subcontainer{ display: flex;
border: 2px solid black; padding: 2rem;
border-radius: 1rem;
}
</style>
</head>
<body>
<div class="container">
<div class="subcontainer">
<?php
function factorial($n) {

if ($n == 0 || $n == 1) { return 1;
}
else {
return $n * factorial($n - 1);
}
}
$number = 5;
$result = factorial($number);
echo "Factorial of $number is: $result";
?>
</div>
</div>
</body>
</html>
 
