<?php

$title = 'Client list';

require __DIR__ . '/top.php';
?>

<h1>Client list</h1>


<table class="table">
    <tr>
        <th>Surname</th>
        <th>Name</th>
        <th>Client number</th>
        <th>Personal Number</th>
        <th>Account Number</th>
        <th>Amount</th>
        <th>Delete</th>
        <th>Add </th>
        <th>Take out</th>
    </tr>
    <?php


    foreach ($allAccounts as $key => $user) : ?>
        <tr>

            <td><?= $user['userId'] ?></td>
            <td><?= $user['surname'] ?></td>
            <td><?= $user['name'] ?></td>
            <td><?= $user['personalId'] ?></td>
            <td>LT<?= $user['accountNumber'] ?></td>
            <td><?= $user['amount'] ?> $</td>
            <div>
                <form action="<?= 'http://yolabank.lt/delete/' . $user['id'] ?>" method="post">
                    <button type="submit">Delete</button>
                </form>
                <a href="<?= 'http://yolabank/edit' . $user['$id'] ?>">Edit</a>
            </div>
        <?php endforeach ?>
        </tr>

</table>
<?php

require __DIR__ . '/bottom.php';
