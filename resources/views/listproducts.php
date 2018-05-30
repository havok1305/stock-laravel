<?php
?>
<html
    <head>
        <link href="/css/app.css" rel="stylesheet">
        <title>Products</title>
    </head>
    <body>
        <h1>Listing the products</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Value</th>
                    <th>Unit</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($products as $product) {
                    ?>
                    <tr>
                        <td><?=$product->id?></td>
                        <td><?=$product->name?></td>
                        <td><?=$product->value?></td>
                        <td><?=$product->unit?></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </body>
</html>
