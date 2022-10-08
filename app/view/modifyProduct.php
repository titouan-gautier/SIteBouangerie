<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modifier</title>
</head>
<body>
    <form action="../updateProduct" method="post">
        <input type="hidden" name="id" value="<?= $product->getId()?>">
        <input type="text" name="name" value="<?= $product->getName()?>">
        <input type="text" name="price" value="<?= $product->getPrice()?>">
        <input type="text" name="quantity" value="<?= $product->getQuantity()?>">
        <input type="submit">
    </form>
</body>
</html>