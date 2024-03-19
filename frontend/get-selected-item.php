<?php

function getItem()
{

    $apiRequest = new apiConnection();
    $apiRequest->getBrand();
?>

    <form method="GET">
        <select class="select-brands" id="brands" name="brands" required>

            <?php foreach ($apiRequest->getBrand as $key => $value) {
                $brandmngr = new BrandManager;
                $brandmngr->GetBrandByID($_GET['brands']);

                if ($key == $brandmngr->brandID) { //// compare $brandID with key if equals the set defualt select

                    $brandName = $value;

                    ?><option value="<?php echo $key; ?>" selected="selected"><?php echo $value; ?></option><?php
                } else {
                    ?><option value="<?php echo $key; ?>"><?php echo $value; ?></option><?php
                }
            } ?>

        </select>

        <button type="submit">Search</button>
    </form>

<?php }
?>