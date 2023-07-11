<?php
//var_dump($dbName[0]['Database']);
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
<form method="post" action="/tableData" style="display: flex; flex-direction: column; width: 520px">
    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select a database</label>
    <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="dbName">
        <?php foreach ($dbName as $db_name=>$val): ?>
            <option><p><?php echo $val['Database'] ?></p></option>
        <?php endforeach; ?>
    </select>
    <div>
        <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Table Name</label>
        <input type="text" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="tableName" required>
    </div>
    <label>Column Name</label>
    <div class="addColumn">
        <div class="datas" style="display: flex">

    <input type="text" placeholder="Column Name" name="columnName[]" required>
    <label>Data Type</label>
    <select name="dataTypes[]">
        <option>Int</option>
        <option>Varchar(250)</option>
        <option>DATETIME</option>
        <option>Text</option>
    </select><br>
        </div>
    </div>
<!--    <button class="addBtn" type="button">Add one more column</button>-->
    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" style="margin: 10px"  id="addBtn">Add one more column</button>
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" style="margin: 10px">Submit</button>
<!--    <button type="submit">Submit</button>-->
</form>
</body>
<!--<script src="../createColumn.js"></script>-->
<script>
    let addBtn = document.querySelector('#addBtn');
    console.log(addBtn);

    let addColumn = document.querySelector('.addColumn');
    console.log(addColumn)

    addBtn.addEventListener("click",()=>{
        let datasDiv = document.createElement('div');
        datasDiv.className = "datas";
        datasDiv.style.display = "flex";
        let columnName = document.createElement('input');
        columnName.name = "columnName[]"
        columnName.placeholder = "Column Name";
        columnName.type = "text";
        columnName.required = true;
        let label = document.createElement('label');
        label.innerText = "Data Type";
        let selectt = document.createElement('select');
        selectt.name = "dataTypes[]";
        let int = document.createElement('option');
        int.innerText = 'Int';
        let varchar = document.createElement('option');
        varchar.innerText = 'Varchar(250)';
        let date = document.createElement('option');
        date.innerText = 'DATETIME';
        let text = document.createElement('option');
        text.innerText = 'Text';
        selectt.appendChild(int)
        selectt.appendChild(varchar)
        selectt.appendChild(date)
        selectt.appendChild(text)
        datasDiv.append(columnName,label,selectt)
        addColumn.append(datasDiv)
    })

</script>
</html>