<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demo</title>
    <style>
        body {
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>
<body>
<h1>
    <?= "$greeting $name !"; ?>
</h1>

<p><?= $text ?></p>
<p><?php echo $text ?></p>
<p>
    <?= $message ?>
</p>
<h2>Recommended Books</h2>
<ul>
    <?php foreach ($books as $book) : ?>
        <li><?= $book ?></li>
    <?php endforeach; ?>
</ul>
<p><?= $books[1] ?></p>
<ul>
    <?php foreach ($filterFunc as $booksWithDetail) : ?>
        <li>
            <a href="<?= $booksWithDetail['purchaseUrl'] ?>">
                <?= $booksWithDetail['name'] ?> (<?= $booksWithDetail['releaseYear'] ?>)
            </a>
        </li>
    <?php endforeach; ?>
</ul>
</body>
</html>