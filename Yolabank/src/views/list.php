<?php

$title = 'Client list';

require __DIR__ . '/top.php';
?>

<h1>Client list</h1>


<table class="table">
    <tr>
        <th>Surname</th>
        <th>Name</th>
        <th>Personal Number</th>
        <th>Account Number</th>
        <th>Amount</th>
        <th>Delete</th>
        <th>Edit</th>
    </tr>
    <?php


    foreach ($account as $key => $user) : ?>
        <tr>

            <!-- <td><?= $user['userId'] ?></td> -->
            <td><?= $user['surname'] ?></td>
            <td><?= $user['name'] ?></td>
            <td><?= $user['personalId'] ?></td>
            <td>LT<?= $user['accountNumber'] ?></td>
            <td><?= $user['amount'] ?> $</td>
            <td>

                <form action="<?= 'http://yolabank.lt/delete/' . $user['id'] ?>" method="post">
                    <button type="submit">Delete</button>
                </form>
            </td>
            <td>
                <a href="<?= 'http://yolabank/edit/' . $user['id'] ?>">Edit</a>
            </td>

        <?php endforeach ?>
        </tr>

</table>
<?php

require __DIR__ . '/bottom.php';
