<?php include_once 'header.php';?>

<div>
    <form method="post" action="cart.php">
        <?php foreach ($products as $product): ?>
            <input type="number" name="name[<?php echo $product["name"]; ?>]" hidden>
            <h3> <?php $order = [];
                echo $product["name"] ?> </h3>
            <p> Prix : <?php echo formatPrice($product["price"]) ?> TTC</p>
            <p> Prix HT : <?php echo formatPrice(priceExcludingVAT($product["price"])) ?> HT</p>
            <p> Poids : <?php echo $product["weight"] ?> kg</p>
            <img src=" <?php echo $product["picture_url"] ?> " alt="<?php echo $product["name"] ?>">
            <p> Remise : <?php echo $product["discount"] ?>%</p>
            Quantité : <input type="number" name="quantity[<?php echo $product["name"]; ?>]" value="0"
                              style="width: 4rem">
        <?php endforeach; ?>
</div>
<div>
<input type="submit" value="Passer commande">
</form>
</div>

<?php include_once 'footer.php'; ?>
