<?php

$title = 'Home';

require __DIR__ . '/top.php';
?>

<h1>Bank</h1>

<form method="POST">

    <!-- use Id <input type="number" name="userId"> -->
    Surname <input type="text" name="surname">
    Name <input type="text" name="name">
    Personal Id<input type="number" name="personalId">
    Account number<input type="number" name="accountNumber">
    amount <input type="number" name="amount">
    <button type="submit">Create</button>

</form>

<?php

require __DIR__ . '/bottom.php';
