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
    $json_data = file_get_contents(__DIR__ . "/../app/data/duomenys.json");
    echo (__DIR__ . "/../app/data/duomenys.json");
    $duomenys = json_decode($json_data, TRUE);

    if (count($allAccounts) != 0) {
        foreach ($allAccounts as $item) {
    ?>
            <tr>
                <td><?= $item['surname'] ?></td>
                <td><?= $item['name'] ?></td>

                <td><?= $item['ID'] ?></td>
                <td><?= $item['personalid'] ?></td>
                <td>LT<?= $item['accountid'] ?></td>
                <td><?= $item['amount'] ?> $</td>
                <td><button action="./delete.php" id="delete">Delete</button></td>
                <td>>Cash in</td>
                <td>Cash out</td>
            </tr>

    <?php
        }
    }
    ?>
</table>
<?php

require __DIR__ . '/bottom.php';
