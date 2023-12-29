<?php

function printmodels()
{
    $apiRequest = new apiConnection();
    $apiRequest->getModel();




    if (isset($_GET['brands'])) {
        $brandmngr = new BrandManager;
        $brandmngr->GetBrandByID($_GET['brands']);

        $brandToSearch = $_GET['brands']; // Change this to the brand you want to search for

        $filteredItems = array_filter($apiRequest->getModel, function ($item) use ($brandToSearch) {
            return isset($item['brand']) && $item['brand'] === $brandToSearch;
        });

?>
<div style="overflow-x:auto;">
        <table>
            <tr>
                <th>Hersteller</th>
                <th>Modell</th>
                <th>End of (Support) Life</th>
            </tr>
            <?php
            foreach ($filteredItems as $item) {
            ?>

                <tr>
                    <td><?php echo $brandmngr->brandName; ?></td>
                    <td><a style="color: #fff;" target="_blank" href="<?php echo $item['link-to-manifactur']; ?>"><?php echo $item['model']; ?></a></td>
                    <td><?php echo $item['date']; ?></td>
                </tr>

            <?php } ?>
        </table>
</div>
<?php
    } else {
        echo "<tr><td><h3 style='color: #fff;'>Wähle einen Hersteller im Drowpdown-Menü!</h3></td></tr>";
    }
}
?>