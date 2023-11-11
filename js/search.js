const search = document.querySelector(".search-input-building input");
table_rows = document.querySelectorAll("tbody tr");
console.log(search);
function searchTable(){
    table_rows.forEach( (row, i) => {
        console.log(row.textContent);
    });
};