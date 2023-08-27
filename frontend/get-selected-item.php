<?php
include('./actions/get-brand.php');

if(isset($_GET['brands'])){

}

?>

<form action="" method="GET">

<select class="select-brands" id="brands" name="brands" required>

    <?php foreach ($data as $key => $value) {
        echo '' . $key . ' ' . $value;
    ?>
        <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
    <?php
    } ?>


</select>

<button type="submit">Suchen</button>
</form>

