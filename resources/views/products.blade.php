<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>
    <h2>You are now in Products Page</h2>
    <?php foreach($products as $product) :?>
        <article>
            <?= $product; ?>
        </article>
    <?php endforeach; ?>
</body>
</html>

