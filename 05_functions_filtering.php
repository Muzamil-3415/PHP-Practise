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
        'year' => 1968,
        'purchaseUrl' => 'http://example.com'
    ],

    [
        'name' => 'Project Hail Mary',
        'author' => 'Andy Weir',
        'year' => 2021,
        'purchaseUrl' => 'http://example.com'
    ],

    [
        'name' => 'Project Hail Mary',
        'author' => 'Andy Weir',
        'year' => 2011,
        'purchaseUrl' => 'http://example.com'
    ]
];

function filterByAuthor($books,$author){
    $filteredBooks = [];

foreach ($books as $book){
    if ($book['author'] === $author){
        $filteredBooks[] = $book;


    }
}
return $filteredBooks;
}

?>  
<ul>

<?php foreach(filterByAuthor($books, 'Andy Weir') as $book) :?>
    <li>
        <a href="<?php echo $book['purchaseUrl'] ?>">
        <?= $book['name'] ?> (<?= $book['year'] ?>) by <?= $book['author'] ?>         
        </a>
    </li>
    <?php endforeach; ?>
    
</ul>
</body>
</html>