<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>
    <h1>Snacks</h1>
    <ul>
        <?php foreach ($modpod as $mod): ?>
            <li><?= $mod['mod/pod'] ?></li>
        <?php endforeach; ?>
    </ul>

</body>
</html>
