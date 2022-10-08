<!doctype html>
    <html lang="fr">
    <head>
    <meta charset="utf-8">
    <title>Mon magasin</title>
    <?php ?>
</head>
    <body>
        <table>
        <a href="../Home" >Home</a>
            <thead>
                <tr>
                    <th> id </th>
                    <th> name </th>
                    <th> price </th>
                    <th> quantity </th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($data as $product):?>
                <tr>
                    <td> <?= $product -> getId() ?> </td>
                    <td> <?= $product -> getName() ?> </td>
                    <td> <?= $product -> getPrice() ?> </td>
                    <td> <?= $product -> getQuantity() ?> </td>
                    <td> <a href="./Product/update/<?= $product -> getId() ?>">Modify</a> </td>
                    <td> <a href="./Product/delete/<?= $product -> getId() ?> ">Delete</a> </td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>
        <a href="./Product/add/">Add</a>
    </body>
</html>