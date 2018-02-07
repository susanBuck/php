<?php
require '../../helpers.php';
require 'done-logic.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Version B</title>
    <title></title>
    <meta charset='utf-8'>

</head>
<body>

<h1>Book search</h1>
<h2>Version B</h2>
<p>
    You searched for <strong><?= sanitize($searchTerm) ?></strong>.
</p>

<?php if ($haveBooks): ?>
    <h2>Results:</h2>
    <?php foreach ($books as $title => $book): ?>
        <div class='book'>
            <?= $title; ?> by <?= $book['author'] ?>
            <img src='<?php echo $book['cover_url']; ?>' alt='Cover photo for <?= $title; ?>'>
        </div>
    <?php endforeach ?>
<?php else: ?>
    <p>No results found</p>
<?php endif ?>

<p>
    <a href='foobooks.php'>&larr; Search again</a>
</p>

</body>
</html>