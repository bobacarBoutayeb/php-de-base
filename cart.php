<?php

include_once 'header.php';

//var_dump($_POST);
foreach ($_POST["quantity"] as $key => $value)
{
    $order[] = [
        $key => $value,
    ];
}
?>

<table class="table">
    <thead>
    <tr>
        <th>Produit :</th>
        <th>Quantité :</th>
    </tr>
    </thead>
    <tbody>

        <?php
        foreach ($order as $valueOrder)
        {
            foreach ($valueOrder as $keyOrder => $valueOrder)
            {
                echo '<tr>';
                echo '<th>' . ucfirst($keyOrder) . '</th>';
                echo '<td>' . $valueOrder . '</td>';
                echo '</tr>';
            }
        }
        ?>
    </tbody>
</table>
<?php

//var_dump($order);

include_once 'footer.php';
?>
