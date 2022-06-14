<?php

$title = 'Home';

require __DIR__ . '/top.php';
?>

<h1>Bank</h1>

<form method="POST">

    Surname <input type="text" name="surname">
    Name <input type="text" name="name">
    use Id <input type="number" name="userId">
    Personal Id<input type="numebr" name="personalId">
    Account number<input type="number" name="accountNumber">
    amount <input type="number" name="amount">
    <button type="submit">Create</button>

</form>

<?php

require __DIR__ . '/bottom.php';
