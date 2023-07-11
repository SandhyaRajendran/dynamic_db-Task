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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />

</head>
<body>
<form action="/addColumn" method="post">
    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select a database</label>
    <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="dbName" style="width: 200px">
        <?php foreach ($dbName as $db_name=>$val): ?>
            <option><p><?php echo $val['Database'] ?></p></option>
        <?php endforeach; ?>
    </select>
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" style="margin: 10px">Submit</button>

</form>
</body>
</html>