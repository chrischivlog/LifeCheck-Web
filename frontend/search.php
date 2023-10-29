<?php


$apiRequest = new apiConnection();
$apiRequest->getModel();

if (isset($_GET['brands'])) {


    $brandToSearch = $_GET['brands']; // Change this to the brand you want to search for

    $filteredItems = array_filter($apiRequest->getModel, function ($item) use ($brandToSearch) {
        return isset($item['brand']) && $item['brand'] === $brandToSearch;
    });

    foreach ($filteredItems as $item) {
?>
  <tr>
                <td><?php echo $brandName;?></td>
                <td><a style="color: #fff;" target="_blank" href="<?php echo $item['link-to-manifactur'];?>" ><?php echo $item['model'];?></a></td>
                <td><?php echo $item['date'];?></td>
  </tr>
<?php

    }
}

?>