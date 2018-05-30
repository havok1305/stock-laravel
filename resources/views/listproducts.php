<?php
?>
<html
    <head>
        <link href="/css/app.css" rel="stylesheet">
        <title>Products</title>
    </head>
    <body>
        <div class="container">
            <h1>Listing the products</h1>
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($products as $product) {
                    ?>
                    <tr>
                        <td><?=$product->id?></td>
                        <td><?=$product->name?></td>
                        <td>
                            <a href="/products/show/<?=$product->id?>">
                                <span class="glyphicon glyphicon-search"></span>Show
                            </a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
    </body>
</html>
