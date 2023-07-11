<?php
//var_dump($dbName);
//var_dump($new);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="/addColumn" method="post">
    <select>
        <?php foreach ($new as $db_name=>$tab): ?>
        <option><?php echo $tab['0'] ?></option>
        <?php endforeach; ?>
    </select>
    <input type="submit">
</form>
</body>
</html>