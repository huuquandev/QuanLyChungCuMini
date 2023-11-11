const search = document.querySelector(".search-input-building input");
const selectedStatus = document.querySelector(".selected-status select");
table_rows = document.querySelectorAll("tbody tr");

search.addEventListener('input', searchTable);
selectedStatus.addEventListener('change', searchTable);

function searchTable() {
    table_rows.forEach((row, i) => {
        let table_data = row.textContent.toLowerCase();
        let search_data = search.value.toLowerCase();
        let status_data = selectedStatus.value.toLowerCase();

        // Kiểm tra xem dòng có chứa cả search_data và status_data hay không
        let shouldHide = table_data.indexOf(search_data) < 0 || (status_data !== "" && row.querySelector(".trangthai_toanha span b").textContent.toLowerCase() !== status_data);
        row.classList.toggle('hide', shouldHide);
        row.style.setProperty('--delay', i / 25 + 's');
    });

    document.querySelectorAll('tbody tr:not(.hide)').forEach((visible_row, i) => {
        visible_row.style.backgroundColor = (i % 2 == 0) ? 'transparent' : '#0000000b';
    });
}
