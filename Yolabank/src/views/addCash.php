<?php

$title = 'addCash';

require __DIR__ . '/top.php';
?>

<h1>Bank</h1>


<form method="post">
    <span>Name:</span> <span><?= $account['name'] ?></span>
    Add <input type="number" name="amount">
    <button>add</button>

</form>

<?php

require __DIR__ . '/bottom.php';
