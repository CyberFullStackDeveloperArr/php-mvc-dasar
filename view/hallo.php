<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hallo View</title>
</head>
<body>
    <h1>Hallo Welt!</h1>
    <h2>Users:</h2>
    <ul>  
        <?php foreach ($users as $user): ?>
            <li><?php echo $user['name'] . ' - ' . $user['email']; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
