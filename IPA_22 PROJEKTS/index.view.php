
<!-- atbildīgs par datu attēlošanu lietotājam, piemēram, grāmatu sarakstu  -->
<?php

$books = [
    ['id' => 1, 'title' => 'Book 1', 'author' => 'Author 1', 'publication_year' => 2022, 'availability' => true],
    ['id' => 2, 'title' => 'Book 2', 'author' => 'Author 2', 'publication_year' => 2023, 'availability' => false],
    /
];
?>

<h2>Books Available:</h2>
<ul>
    <?php foreach ($books as $book): ?>
        <?php if ($book['availability']): ?>
            <li><?php echo $book['title']; ?> by <?php echo $book['author']; ?> (Published in <?php echo $book['publication_year']; ?>)</li>
        <?php endif; ?>
    <?php endforeach; ?>
</ul>
