<?php

$title = 'Home';

require __DIR__ . '/top.php';
?>

<h1>Homepage</h1>

<ul>
    <?php foreach ($list as $value) : ?>
        <li><?= $value ?></li>
    <?php endforeach ?>
</ul>

<?php

require __DIR__ . '/bottom.php';
