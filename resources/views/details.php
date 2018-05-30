<?php
?>
<html>
    <head>
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <div class="container">
            <h1>Product Details</h1>
            <ul class="list-group">
                <li class="list-group-item">
                    <strong>Name: </strong> <?=$product->name?>
                </li>
                <li class="list-group-item">
                    <strong>Value: R$</strong> <?=$product->value?>
                </li>
                <li class="list-group-item">
                    <strong>Unit: </strong> <?=$product->unit?>
                </li>
            </ul>
        </div>
    </body>
</html>
