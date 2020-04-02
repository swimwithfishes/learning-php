<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning PHP</title>
    <style>
        header {
            padding: 2em;
            background: #e3e3e3;
            text-align: center;
        }
    </style>
</head>
<body>

        <?php
            $name = 'EJ';
            $age = '28';
            $loc = 'PH';

            $details = [
                'name' => $name, //name
                'age' => $age, //age
                'loc' => $loc //loc
            ]; // $_GET
        ?>


    <header>
        <h1>Hello, <?= htmlspecialchars($_GET['name']); ?>!</h1>
        <p>Size is <?= $_GET['size']; ?></p>
        <p>Location is at <?= $_GET['loc']; ?></p>
    </header>

    <pre>
            DETAILS
        <?= var_dump($details) ?>
    </pre>

    <pre>
            GET
        <?= var_dump($_GET); ?>
    </pre>

</body>
</html>


