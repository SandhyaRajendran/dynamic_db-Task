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
