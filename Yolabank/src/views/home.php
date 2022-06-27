<?php

$title = 'Home';

require __DIR__ . '/top.php';
?>

<h1>Bank</h1>

<form class="form" method="POST">

    <!-- use Id <input type="number" name="userId"> -->
    Surname <input type="text" name="surname">
    Name <input type="text" name="name">
    Personal Id<input type="number" name="personalId">
    Account number<input type="number" name="accountNumber">
    Amount <input type="number" name="amount">
    <button class="form_btn" type="submit">Create</button>

</form>

<?php

require __DIR__ . '/bottom.php';
