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
        <?php
            $name = "andy";
            $greeting = "Hello";
            echo "$greeting $name !";
            $text = "This is a long paragraph and this is for the homework";
        ?>
    </h1>
    <p><?= $text ?></p>
    <p><?php echo $text ?></p>
    <?php
        $book = "Dark Matter";
        $read = false;
        $message = "";
        if ($read){
            $message = "You have read \"$book\"";
        } else {
            $message = "You have not read \"$book\"";
        }
    ?>

    <p>
        <?= $message ?>
    </p>

    <h2>Recommended Books</h2>
    <?php
        $books = ['Do Androids Dream of Electric Sheep', 'The Langoliers','Hail Mary'];
        $booksWithDetails = [
                [
                    'name' => 'Do Androids Dream of Electric Sheep',
                    'author' => 'Philip K. Dick',
                    'purchaseUrl' => 'https://example.com',
                    'releaseYear' => 2005
                ],
                [
                    'name' => 'The Langoliers',
                    'author' => 'Andy Song',
                    'purchaseUrl' => 'https://example.com',
                    'releaseYear' => 1968
                ],
                [
                    'name' => 'Project Hail Mary',
                    'author' => 'Andy Weir',
                    'purchaseUrl' => 'https://example.com',
                    'releaseYear' => 2003
                ]
        ]
    ?>
    <ul>
        <?php foreach ($books as $book) : ?>
            <li><?= $book ?></li>
        <?php endforeach; ?>
    </ul>
    <p><?= $books[1] ?></p>
    <ul>
        <?php foreach ($booksWithDetails as $booksWithDetail) : ?>
            <li>
                <a href="<?= $booksWithDetail['purchaseUrl'] ?>">
                    <?= $booksWithDetail['name'] ?> (<?= $booksWithDetail['releaseYear'] ?>)
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>