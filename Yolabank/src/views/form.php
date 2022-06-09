<?php


require __DIR__ . '/top.php';
?>

<h1>Create a new account</h1>


<fieldset>
    <legend>Enter</legend>
    <form class="form" method="post">
        <label>Name</label>
        <input type="text" name="name">
        <label>Surname</label>
        <input type="text" name="surname">
        <label>Personal number</label>
        <input type="text" name="personalid">
        <label>Account Number</label>
        <!-- <div>LT<?php echo file_get_contents(__DIR__ . "/data/accountNr.json") ?></div> -->
        <button class="form_btn" type="submit">Submit</button>
    </form>
</fieldset>



<?php
require __DIR__ . '/bottom.php';
