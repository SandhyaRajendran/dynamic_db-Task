<?php
//var_dump($dbName);
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
<select name="dbName">
    <?php foreach ($dbName as $db_name=>$val): ?>
        <option><p><?php echo $val['Database'] ?></p></option>
    <?php endforeach; ?>
</select>
    <input type="submit">
</form>
</body>
</html>