<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    



<?php
    $randomNumber = rand(1, 100);

    if ($randomNumber % 2 === 0) {
       for ($i = 1; $i <= $randomNumber; $i+=2) {
           if($i % 5 === 0 && $i !== 0) {
               echo $i . "<br>";
           }
           else {
               for ($j = 1; $j <= $randomNumber; $i+=2) {
                   echo "*";
               }
           }
        }
        }












































</body>
</html>