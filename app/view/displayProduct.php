<!doctype html>
    <html lang="fr">
    <head>
    <meta charset="utf-8">
    <title>Mon magasin</title>
    <?php ?>
</head>
    <body>
    <a href="../Home" >Home</a>
        <table>
            <thead>
                <tr>
                    <th> id </th>
                    <th> name </th>
                    <th> price </th>
                    <th> quantity </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> <?= $data -> getId() ?> </td>
                    <td> <?= $data -> getName() ?> </td>
                    <td> <?= $data -> getPrice() ?> </td>
                    <td> <?= $data -> getQuantity() ?> </td>
                </tr>
            </tbody>
        </table>
    </body>
</html>