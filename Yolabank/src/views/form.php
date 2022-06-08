<?php


require __DIR__ . '/top.php';
?>



<fieldset>
    <legend>Enter</legend>
    <form class="form" method="post">
        <label>Name</label>
        <input type="text" name="alabama">
        <label>Surname</label>
        <input type="text" name="surname">
        <label>Personal number</label>
        <input type="text" name="personalid">
        <label>Account Number</label>
        <button class="form_btn" type="submit">Submit</button>
    </form>
</fieldset>



<?php
require __DIR__ . '/bottom.php';
