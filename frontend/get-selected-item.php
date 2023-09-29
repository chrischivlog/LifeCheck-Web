<?php
include('./actions/get-brand.php');

if (isset($_GET['brands'])) {

    $brandID = $_GET['brands'];
}
?>

<form action="" method="GET">

    <select class="select-brands" id="brands" name="brands" required>

        <?php foreach ($data as $key => $value) {
            echo '' . $key . ' ' . $value;

            if ($key == $brandID) { //// compare $brandID with key if equals the set defualt select
                
                $brandName = $value;

                ?><option value="<?php echo $key; ?>" selected="selected"><?php echo $value; ?></option><?php
            } else {
                ?><option value="<?php echo $key; ?>"><?php echo $value; ?></option><?php
            }
        } ?>


    </select>

    <button type="submit">Suchen</button>
</form>