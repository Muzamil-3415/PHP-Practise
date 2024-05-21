<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Recommended Books!</h1>
<?php

$books = [

    "Do Android Dream Of Electric Sheep",
    "The Langoliers",
    "Hail Mary"
];

?>

<ul>
    <?php foreach ($books as $book){
        echo "<li>$book</li>";

    } 
?>

   
</ul>


    
</body>
</html>