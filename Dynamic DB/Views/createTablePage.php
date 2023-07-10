<?php
//var_dump($dbName[0]['Database']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="/tableData">
<select name="dbName">
    <?php foreach ($dbName as $db_name=>$val): ?>
    <option><p><?php echo $val['Database'] ?></p></option>
<?php endforeach; ?>
</select><br>
    <label>Table Name</label>
    <input type="text" placeholder="Table Name" name="tableName"><br>
    <label>Column Name</label>
    <div class="addColumn">
    <input type="text" placeholder="Column Name" name="columnName">
    <label>Data Type</label>
    <select name="dataTypes">
        <option>Int</option>
        <option>Varchar</option>
        <option>Date/Time</option>
        <option>Text</option>
    </select><br>
    </div>
    <button class="addBtn">Add one more column</button>
</form>
</body>
<!--<script src="../createColumn.js"></script>-->
<script>
    let addBtn = document.querySelector('.addBtn');
    console.log(addBtn);

    let addColumn = document.querySelector('.addColumn');
    console.log(addColumn)

    addBtn.addEventListener("click",()=>{
        let columnName = document.createElement('input');
        columnName.name = "columnName"
        columnName.placeholder = "Column Name";
        columnName.type = "text";
        let label = document.createElement('label');
        label.innerText = "Data Type";
        let selectt = document.createElement('select');
        selectt.name = "dataTypes";
        let int = document.createElement('option');
        int.innerText = 'Int';
        let varchar = document.createElement('option');
        varchar.innerText = 'Varchar';
        let date = document.createElement('option');
        date.innerText = 'Date/Time';
        let text = document.createElement('option');
        text.innerText = 'Text';
        selectt.appendChild(int)
        selectt.appendChild(varchar)
        selectt.appendChild(date)
        selectt.appendChild(text)
        addColumn.append(columnName,label,selectt)
    })

</script>
</html>