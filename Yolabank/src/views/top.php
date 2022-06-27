<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://yolabank.lt/app.css?v=<?= time() ?>">
    <title><?= $title ?? 'no name' ?> </title>
</head>

<body >
    <h1>Yo|a Bank</h1>
    <a class="link" href="<?= 'http://yolabank.lt/' ?>">New account</a>
    <a class="link" href="<?= 'http://yolabank.lt/list' ?>">All accounts</a>
    <?php require __DIR__ . '/messages.php' ?>
</body>

</html>