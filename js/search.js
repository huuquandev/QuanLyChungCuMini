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

const wrapper = document.querySelector('.wrapper');
selectBtnSearch = wrapper.querySelector('.select-btn');

function addcitis(citisName, citisId, searchId, selectedValue) {
    let citis = document.getElementById(citisId);
    citis.innerHTML = "";
    let array = citisName;  
    array.forEach(data => {
        let isSelected = data == selectedValue ? "selected" : "";
        let li = `<li onclick="updateName(this, '${searchId}', '${citisName}', '${citisId}')" class="${isSelected}">${data}</li>`;
        citis.insertAdjacentHTML("beforeend", li);
    });
}

function updateName(selectedLi, input, citisName, citisId){
    let selectInputSearch = document.getElementById(input);
    selectInputSearch.value = "";
    let array = [];
    array = citisName.split(",");
    addcitis(array, citisId, input, selectedLi.innerText);
    wrapper.classList.remove('active');
    selectBtnSearch.firstElementChild.innerText = selectedLi.innerText;
    selectBtnSearch.style.background = "#FFF";
    selectBtnSearch.style.border = "1px solid #b3b3b3";

}
selectBtnSearch.addEventListener('click', () =>{
    wrapper.classList.toggle('active');
});

document.addEventListener('click', (event) => {
    const isClickInsideWrapper = wrapper.contains(event.target);

    if (!isClickInsideWrapper) {
        wrapper.classList.remove('active');
    }
});

function initializeDropdowns(citisId, districtId, wardId, citisSearch, districtSearch, wardSearch, citisIdValue, districtIdValue, wardIdValue) {
    // Lấy tham chiếu đến các phần tử select từ id
    var citis = document.getElementById(citisId);
    var districts = document.getElementById(districtId);
    var wards = document.getElementById(wardId);

    var cSearch = document.getElementById(citisSearch);
    var dSearch = document.getElementById(districtSearch);
    var wSearch = document.getElementById(wardSearch);
    // Tạo đối tượng Parameter chứa thông tin yêu cầu HTTP GET
    var Parameter = {
        url: "https://raw.githubusercontent.com/kenzouno1/DiaGioiHanhChinhVN/master/data.json",
        method: "GET",
        responseType: "application/json",
    };

    // Gửi yêu cầu HTTP GET và nhận dữ liệu từ tệp JSON
    var promise = axios(Parameter);
    promise.then(function (result) {
        renderCity(result.data);
    });

    // Hàm renderCity để tạo các tùy chọn cho select tỉnh/thành phố
    function renderCity(data) {
        let citisName = [];
        for (const x of data) {
          citisName.push(x.Name);
        }
        addcitis(citisName, citisId, citisSearch);
        cSearch.addEventListener('keyup', () => {
            let searchedVal = cSearch.value.toLowerCase();

            let filteredResults = citisName.filter(datacitis => {
                return datacitis.toLowerCase().includes(searchedVal);
            });

            let arr = filteredResults.map(datacitis => `<li onclick="updateName(this, '${citisSearch}', '${citisName}', '${citisId}')">${datacitis}</li>`).join("");

            citis.innerHTML = arr ? arr: `<p class="text-center">Không có dữ liệu</p>`;
        });
        
        // Xử lý khi select tỉnh/thành phố thay đổi
        citis.onchange = function () {
            districts.length = 1;
            wards.length = 1;
            // Lọc dữ liệu quận/huyện dựa trên tỉnh/thành phố được chọn
            const result = data.filter(n => n.Id === this.value);

            // Tạo các tùy chọn cho select quận/huyện
            for (const k of result[0].Districts) {
              let li = `<li onclick=updateName(this)>${k.Name}</li>`
              districts.insertAdjacentHTML("beforeend", li)
                // if (k.Name == districtIdValue) {
                //     districts.value = districtIdValue;
                // }
            }
            districts.disabled = false;
            wards.disabled = true;
            wards.innerHTML = '<option value="" hidden>Chọn phường xã</option>';
        };

        // Xử lý khi select quận/huyện thay đổi
        districts.onchange = function () {
            const selectedDistrict = this.value;
            if (selectedDistrict !== '') {
                wards.length = 1;
                const dataCity = data.filter(n => n.Id === citis.value);
                const dataWards = dataCity[0].Districts.filter(n => n.Id === selectedDistrict)[0].Wards;
                // Tạo các tùy chọn cho select phường/xã
                for (const w of dataWards) {
                    wards.options[wards.options.length] = new Option(w.Name, w.Id = w.Name);
                    // if (w.Name == wardIdValue) {
                    //     wards.value = wardIdValue;
                    // }
                }
                wards.disabled = false;
            } else {
                wards.disabled = true;
                wards.innerHTML = '<option value="" hidden>Chọn phường xã</option>';
            }
        };

        // Kiểm tra nếu select tỉnh/thành phố đã có giá trị được chọn sẵn
        if (citis.value !== null && citis.value !== '') {
            districts.disabled = false;
            const changeEvent = new Event('change');
            citis.dispatchEvent(changeEvent);
            const selectedDistrict = districts.value;

            if (selectedDistrict.value !== null && selectedDistrict.value !== '') {
                wards.disabled = false;
                // Gọi sự kiện onchange của quận/huyện để kích hoạt xử lý
                const changeEvent = new Event('change');
                districts.dispatchEvent(changeEvent);
            }
        }
    }

    // Xử lý sự kiện khi select tỉnh/thành phố thay đổi
    citis.addEventListener('change', function () {
        var selectedProvince = this.value;
        if (selectedProvince !== "") {
            districts.disabled = false;
        } else {
            districts.disabled = true;
            districts.innerHTML = '<option value="" hidden>Chọn quận huyện</option>';
            wards.disabled = true;
            wards.innerHTML = '<option value="" hidden>Chọn phường xã</option>';
        }
    });

    // Xử lý sự kiện khi select quận/huyện thay đổi
    districts.addEventListener('change', function () {
        var selectedDistrict = this.value;
        if (selectedDistrict !== "") {
            wards.disabled = false;
        } else {
            wards.disabled = true;
            wards.innerHTML = '<option value="" hidden>Chọn phường xã</option>>';
        }
    });
}
