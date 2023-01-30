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

            echo "Hello $name";
        ?>
    </h1>
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
    ?>
    <ul>
        <?php foreach ($books as $book) : ?>
            <li><?= $book ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>