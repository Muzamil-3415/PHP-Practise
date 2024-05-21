<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $books = [
        [
            'name' => 'Do Androids Dream of Electric Sheep',
            'author' => 'Philip K. Dick',
            'purchaseUrl' => 'http://example.com'
        ],

        [
            'name' => 'Project Hail Mary',
            'author' => 'Andy Weir',
            'purchaseUrl' => 'http://example.com'
        ]
    ];

    ?>

    <ul>
        <?php foreach ($books as $book){

            
            echo "<li>" . $book['name'] . "</li>";
        } ?>

    </ul>
</body>
</html>