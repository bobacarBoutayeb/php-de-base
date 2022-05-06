<?php

include_once 'header.php';

$products = [
    "seat" => [
        "name" => "seat",
        "price" => 450,
        "weight" => 2,
        "discount" => 10,
        "picture_url" => "Static/img/home/deco.png",
    ],
    "shoes" => [
        "name" => "shoes",
        "price" => 100,
        "weight" => 0.400,
        "discount" => 20,
        "picture_url" => "Static/img/home/mode.png",
    ],
];
?>

<div>
    <?php foreach ($products as $product): ?>
        <h3> <?php echo $product["name"] ?> </h3>
        <p> Prix : <?php echo formatPrice($product["price"]) ?> TTC</p>
        <p> Prix HT : <?php echo formatPrice(priceExcludingVAT($product["price"])) ?> HT</p>
        <p> Poids : <?php echo $product["weight"] ?> kg</p>
        <img src=" <?php echo $product["picture_url"] ?> " alt="<?php echo $product["name"] ?>">
        <p> Remise : <?php echo $product["discount"] ?>%</p>
        <form method="post">
            Quantité : <input type="number" name="post_name" value="0" style="width: 4rem">
            <input type="submit" value="Commander">
        </form>
    <?php endforeach; ?>
</div>
<?php
include_once 'footer.php';
?>
